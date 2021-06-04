<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AanvraagController extends Controller
{

    public function index() {
        return view('aanvraag.index', [
            'aanvragen' => \App\Models\Aanvraag::all()->where("huisdier_eigenaar", "=", Auth::user()->id),
        ]);
    }

    public function show($id) {
        return view('aanvraag.show', [
            'aanvraag' => \App\Models\Aanvraag::find($id),
        ]);
    }

    public function showCommentForm($oppas_id, $aanvraag_id) {
        return view('aanvraag.commentForm', [
            'oppas_id' => \App\Models\User::find($oppas_id),
            'aanvraag_id' => $aanvraag_id,
        ]);
    }

    public function update(Request $request, \App\Models\Aanvraag $aanvraag) {
        $aanvraag::find($request->input('aanvraag'))->update(['status' => $request->input('status')]);
        return redirect('/aanvragen');
    }

    public function remove(Request $request, \App\Models\Aanvraag $aanvraag) {
        $aanvraag::find($request->input('aanvraag'))->delete();
        return redirect('/aanvragen');
    }

    public function plaatsAanvraag(Request $request, \App\Models\Aanvraag $aanvraag) {
        $aanvraag->huisdier_eigenaar = $request->input('huisdier_eigenaar');
        $aanvraag->huisdier = $request->input('huisdier');
        $aanvraag->oppas = Auth::user()->id;
        $aanvraag->status = $request->input('status');

        try {
            $aanvraag->save();
            return redirect('/huisdieren');
        }
        catch(Exception $e) {
            return redirect('/oppassers');
        }
    }

    public function plaatsComment(Request $request, \App\Models\Comment $comment, $oppas_id, \App\Models\Aanvraag $aanvraag) {
        $comment->comment = $request->input("comment");
        $comment->plaatser_id = Auth::user()->id;
        $comment->ontvanger_id = $oppas_id;

        try {
            $comment->save();
            $aanvraag::find($request->input('aanvraag_id'))->Huisdier->delete();
            // $aanvraag::find($request->input('aanvraag_id'))->delete();
            return redirect('/oppas/' . $comment->ontvanger_id);
        }
        catch(Exception $e) {
            return redirect('/huisdieren');
        }


    }
}

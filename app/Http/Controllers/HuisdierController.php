<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HuisdierController extends Controller
{
    public function index() {
        return view('huisdier.index', [
            'huisdieren' => \App\Models\Huisdier::all(),
            'soorten' => \App\Models\Soort::all()
        ]);
    }

    public function show($id) {
        return view('huisdier.show', [
            'huisdier' => \App\Models\Huisdier::find($id)
        ]);
    }

    public function showForm() {
        return view('huisdier.form', [
            'soorten' => \App\Models\Soort::all(),
            'images' => \App\Models\Image::all()->where("soort", "=", "huisdier"),
        ]);
    }

    public function remove(Request $request, \App\Models\Huisdier $huisdier) {
        $huisdier::find($request->input('huisdier'))->delete();
        return redirect('/huisdieren');
    }

    public function store(Request $request, \App\Models\Huisdier $huisdier ) {
        $huisdier->naam = $request->input('name');
        $huisdier->soort = $request->input('kind');
        $huisdier->oppasdatum = $request->input('date');
        $huisdier->uurtarief = $request->input('uurtarief');
        $huisdier->aantal_dagen = $request->input('dagen');
        $huisdier->description = $request->input('description');
        $huisdier->user_id = Auth::user()->id;
        $huisdier->image = $request->input('image');


        try {
            $huisdier->save();
            $huisdier_id = \App\Models\Huisdier::all()->last()->id;
            return redirect('/huisdier/' . $huisdier_id);
        }
        catch(Exception $e) {
            return redirect('/huisdieren');
        }
    }

}

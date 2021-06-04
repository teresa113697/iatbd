<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function index() {
        return view('oppas.index', [
            'oppassers' => \App\Models\User::all()->where("role", "=", "Oppas"),
        ]);
    }

    public function showOppas($id) {
        $user = \App\Models\User::find($id);
        if($user->role == "Oppas"){
            return view('oppas.show', [
                'oppas' => \App\Models\User::find($id),
                'comments' => \App\Models\Comment::all()->where('ontvanger_id', '=', $id),
                'oppas_id' => $id,
            ]);
        }else {
            return redirect('/');
        }
    }

    public function showForm() {
        return view('oppas.form', [
            'images' => \App\Models\Image::all()->where("soort", "=", "huis"),
        ]);
    }

    public function remove(Request $request, \App\Models\User $user) {
        $user = $user::find($request->input('oppas'));
        $user->role = "Blocked";
        $user->save();
        return redirect('/oppas/' . $request->input('oppas'));
    }

    public function update(Request $request, \App\Models\User $user, \App\Models\Huisdier $huisdier) {
        $user = Auth::user();
        $user->role = "Oppas";
        $user->plaatsnaam = $request->input("plaatsnaam");
        $user->leeftijd = $request->input("leeftijd");
        $user->telefoonnummer = $request->input("telefoonnummer");
        $user->adres = $request->input("adres");
        $user->image = $request->input("image");

        try {
            $user->save();
            return redirect('/oppas/' . $user->id);
        }
        catch(Exception $e) {
            return redirect('/huisdieren');
        }
    }
}

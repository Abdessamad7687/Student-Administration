<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\Etudiant;
use Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $data = $request->validate([
            'cin' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'langage_c' => 'required',
            'tp_informatique' => 'required',
            'Algorithmique' => 'required',
            'moyenne' => 'required',
            'dateNaissance' => 'required'
        ]);
        $Etudiant = new Etudiant();
        $Etudiant->cin = $request->cin;
        $Etudiant->nom = $request->nom;
        $Etudiant->prenom = $request->prenom;
        $Etudiant->langage_c = $request->langage_c;
        $Etudiant->tp_informatique = $request->tp_informatique;
        $Etudiant->Algorithmique = $request->Algorithmique;
        $Etudiant->moyenne = $request->moyenne;
        $Etudiant->dateNaissance = $request->dateNaissance;
        $Etudiant->save();
        return back()->with('message', 'Etudiant Ajouté ');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function Dashboard() {
        $users = Etudiant::all();
        return view('admin.dashboard', compact('users'));
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function Ajouter() {
        return view('admin.ajouter');
    }
    
}
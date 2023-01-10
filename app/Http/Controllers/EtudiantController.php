<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EtudiantController extends Controller
{
    public function Home(){
        return view('Connexion');
    }


    public function notes(){

        return view('notes');
    }




    public function Connect(Request $request){
        if(!Auth::check()){
            $request->validate([
                'cin' => 'required'
            ]);        
            
            //$user = DB::select('select * from etudiants where cin = :cin', ['cin'=> $request->cin]);
            $user = Etudiant::where('cin', $request->cin)->first();
            //dd($user);
            if($user){
                return view('/acceuil', compact('user'));
            }
            return back()->with('error', 'Incorrect CIN');
        }        
    }


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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alms = Etudiant::find($id);
        $alms->delete();
    }
}

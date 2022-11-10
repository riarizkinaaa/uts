<?php

namespace App\Http\Controllers;

use App\Models\ProfilM;
use App\Models\BagianM;
use App\Models\KebutuhanM;
use Illuminate\Http\Request;

class Profil extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profil= ProfilM::all();
        $bagian= BagianM::all();
        $kebutuhan= kebutuhanM::all();

        $data=['progres'=>'dipelajari','di kerjakan','selesai','di cadangkan'];

        return view('profil.index',compact('profil','bagian','kebutuhan','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bagian'=>'required'
        ]);
        Bagian::create($request->all());
        return view('index',compact('profil','bagian','kebutuhan','data'))->with('i',(request()->input('page',1)-1)*5);

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
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Registrasi;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
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
        Registrasi::create ([
            'email' -> $request ->Email,
            'name' -> $request ->User,
            'no_hp' -> $request ->Nohp,
            'password' -> $request ->Pwd,
        ]);

        return redirect('registrasi')->with('success', 'Berhasil registrasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registrasi  $Registrasi
     * @return \Illuminate\Http\Response
     */
    public function show(Registrasi $Registrasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registrasi  $Registrasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Registrasi $Registrasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registrasi  $Registrasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registrasi $Registrasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registrasi  $Registrasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registrasi $Registrasi)
    {
        //
    }
}

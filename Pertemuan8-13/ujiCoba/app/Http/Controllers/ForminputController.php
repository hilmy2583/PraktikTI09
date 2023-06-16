<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForminputController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Pertemuan9/input');
    }

    public function array()
    {
        $ar_lokasi = ["Surakarta", "Bogor", "Jakarta", "Depok", "Bandung"];
        $ar_skill = ["PHP", "MySQL", "Javascript", "HTML", "CSS"];

        // Other logic or code related to your controller method

        return view('Pertemuan9/input', compact('ar_lokasi', 'ar_skill'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'email' => 'required',
            'lokasi' => 'required',
            'jenis_kelamin' => 'required',
            'skill' => 'required',
        ]);
        return view('Pertemuan9/hasilInput', ['data' => $request]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

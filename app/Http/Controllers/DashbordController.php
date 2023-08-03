<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $array_mahasiswa = [
            [
                'nim'       => '123456789',
                'nama'      => 'Rizky Khapidsyah',
                'angkatan'  => '2019'
            ],
            [
                'nim'       => '987654321',
                'nama'      => 'Abdul Kholiq',
                'angkatan'  => '2019'
            ],[
                'nim'       => '233232',
                'nama'      => 'Zainul Abidin',
                'angkatan'  => '2019'
            ]
        ];

        // return view('sesi-3', compact('array_mahasiswa'));

        return view('sesi-3', [
            'data' => $array_mahasiswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // select * from artikel
        // ORM (Object Relational Mapping)
        $artikel = Artikel::all();

        return $artikel;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'ini function show dari DashbordController';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'ini function edit dari DashbordController';
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

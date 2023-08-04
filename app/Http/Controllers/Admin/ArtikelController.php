<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // select * from artikel
        $data = Artikel::all();

        // return view dan parsing data
        return view('admin.index', [
            'data' => $data
        ]);
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
        // slug
        $slug = Str::of($request->judul)->slug('-');

        // upload file
        $request->file('thumbnail')->move('thumbnail', $request->file('thumbnail')->getClientOriginalName());

        $nama_file = $request->file('thumbnail')->getClientOriginalName();

        // insert artikel
        Artikel::create([
            'judul'     => $request->judul,
            'tanggal'   => $request->tanggal,
            'isi'       => $request->isi,
            'slug'      => $slug,
            'thumbnail'     => $nama_file,
        ]);

        // redirect ke halaman artikel
        return redirect('/admin/artikel');
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

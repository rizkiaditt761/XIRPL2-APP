<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriPengaduan;

class KategoriPengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('pages.admin.kategori.index', [
        'title' => 'APM | Kategori Pengaduan',
        'header' => 'Kategori Pengaduan',
        'breadCrumb1' => 'Kategori Pengaduan',
        'breadCrumb2' => 'Index',
        'dataKategori' => KategoriPengaduan::all()
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.kategori.create', [
            'title' => 'APM | Kategori Pengaduan', 
            'header' => 'Kategori Pengaduan', 
            'breadCrumb1' => 'Kategori Pengaduan', 
            'breadCrumb2' => 'Create']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'textKategori' => 'required',
        'textDeskripsi' => 'required'
    ]);

    KategoriPengaduan::create([
        'namakategori' => $request->textKategori,
        'deskripsi' => $request->textDeskripsi
    ]);

    return redirect('/kategori');
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
        return view('pages.admin.kategori.edit', [
        'title' => 'APM | Kategori Pengaduan',
        'header' => 'Kategori Pengaduan',
        'breadCrumb1' => 'Kategori Pengaduan',
        'breadCrumb2' => 'Edit',
        'dataKategori' => KategoriPengaduan::where('id',$id)->first()
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
        'textKategori' => 'required',
        'textDeskripsi' => 'required'
    ]);

    KategoriPengaduan::where('id',$id)->update([
        'namakategori' => $request->textKategori,
        'deskripsi' => $request->textDeskripsi
    ]);

    return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
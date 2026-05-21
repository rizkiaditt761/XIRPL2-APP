<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.masyarakat.index', [
            'title' => 'APM | Masyarakat',  
            'header' => 'Masyarakat',
            'breadCrumb1' => 'Masyarakat',
            'breadCrumb2' => 'Index',
            'dataMasyarakat' => User::where('role', 'Masyarakat')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.masyarakat.create', [
            'title' => 'APM | Masyarakat',  
            'header' => 'Masyarakat',
            'breadCrumb1' => 'Masyarakat',
            'breadCrumb2' => 'Create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'textNik' => 'required|unique:users,nik',
            'textNama' => 'required',
            'selectJenisKelamin' => 'required',
            'textNoTelepon' => 'required',
            'textAlamat' => 'required',
            'textEmail' => 'required|unique:users,email',
            'textPassword' => 'required'
        ]);
        $dataSimpanMasyarakat = [
            'nik' => $request->textNik,
            'name' => $request->textNama,
            'jeniskelamin' => $request->selectJenisKelamin,
            'notelepon' => $request->textNoTelepon,
            'alamat' => $request->textAlamat,
            'email' => $request->textEmail,
            'password' => bcrypt($request->textPassword),
            'role' => 'Masyarakat'
        ];
        User::create($dataSimpanMasyarakat);
        return redirect('/masyarakat');
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
        return view('pages.admin.masyarakat.edit', [
            'title' => 'APM | Masyarakat',  
            'header' => 'Masyarakat',
            'breadCrumb1' => 'Masyarakat',
            'breadCrumb2' => 'Edit',
            'dataMasyarakat' => User::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'textNik' => 'required',
            'textNama' => 'required',
            'selectJenisKelamin' => 'required',
            'textNoTelepon' => 'required',
            'textAlamat' => 'required',
            'textEmail' => 'required',
            'textPassword' => 'required'
        ]);
        $dataSimpanMasyarakat = [
            'nik' => $request->textNik,
            'name' => $request->textNama,
            'jeniskelamin' => $request->selectJenisKelamin,
            'notelepon' => $request->textNoTelepon,
            'alamat' => $request->textAlamat,
            'email' => $request->textEmail,
            'password' => bcrypt($request->textPassword),
            'role' => 'Masyarakat'
        ];
        User::where('id', $id)->update($dataSimpanMasyarakat);
        return redirect('/masyarakat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        return view('pages.admin.profile.index', [
            'title' => 'APM | Profile',  
            'header' => 'Profile',
            'breadCrumb1' => 'Profile',
            'breadCrumb2' => 'Index',
            'user' => Auth::user()
            
        ]);
    }

    public function editprofile(){
        return view('pages.admin.profile.editprofile',  [
            'title' => 'APM | Profile',  
            'header' => 'Profile',
            'breadCrumb1' => 'Profile',
            'breadCrumb2' => 'Edit Profile',
            'user' => Auth::user()
            
        ]);

            
    }
    public function updateprofile(Request $request)
    {
        $user = Auth::user();

        // Validasi input dari form
        $request->validate([
            'textNik' => 'required|unique:users,nik,' . $user->id,
            'textNama' => 'required',
            'selectJenisKelamin' => 'required',
            'textNoTelepon' => 'required',
            'textAlamat' => 'required',
            'textEmail' => 'required|email|unique:users,email,' . $user->id,
            'selectJabatan' => 'required'
        ]);

        $dataUpdate = [
            'nik' => $request->textNik,
            'name' => $request->textNama,
            'jeniskelamin' => $request->selectJenisKelamin,
            'notelepon' => $request->textNoTelepon,
            'alamat' => $request->textAlamat,
            'email' => $request->textEmail,
            'role' => $request->selectJabatan
        ];

        // Update password hanya jika user mengisi kolom password
        if ($request->filled('textPassword') && $request->textPassword == $request->textNewPassword) {
            $dataUpdate['password'] = bcrypt($request->textPassword);
        }

        User::where('id', $user->id)->update($dataUpdate);

        return redirect('/profile')->with('success', 'Profil berhasil diperbarui!');
    


    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('pages.admin.profile.index', [
            'title' => 'APM | Profile',  
            'header' => 'Profile',
            'breadCrumb1' => 'Profile',
            'breadCrumb2' => 'Index'
        ]);
    }

    public function editprofile(){
        return view('pages.admin.profile.editprofile', [
            'title' => 'APM | Profile',  
            'header' => 'Profile',
            'breadCrumb1' => 'Profile',
            'breadCrumb2' => 'Edit Profile'
        ]);
    }
}

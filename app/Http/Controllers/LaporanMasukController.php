<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanMasukController extends Controller
{
    public function index(){
        return view('pages.admin.laporanmasuk.index', [
            'title' => 'APM | Laporan Masuk',
            'header' => 'Laporan Masuk',
            'breadCrumb1' => 'Laporan Masuk',
            'breadCrumb2' => 'Index'
        ]);
    }

    public function detail(){
        return view('pages.admin.laporanmasuk.detail', [
            'title' => 'APM | Laporan Masuk',
            'header' => 'Laporan Masuk',
            'breadCrumb1' => 'Laporan Masuk',
            'breadCrumb2' => 'Detail'
        ]);
    }
}

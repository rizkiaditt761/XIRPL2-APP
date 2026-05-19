<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateReportController extends Controller
{
    public function index(){
        return view('pages.admin.generatereport.index', [
            'title' => 'APM | Generate Report',
            'header' => 'Generate Report',
            'breadCrumb1' => 'Generate Report',
            'breadCrumb2' => 'index'
        ]);
    }

    public function generateperiode(){
        return view('pages.admin.generatereport.generateperiode', [
            'title' => 'APM | Generate Report',
            'header' => 'Generate Report',
            'breadCrumb1' => 'Generate Report',
            'breadCrumb2' => 'Periode'
        ]);
    }

    public function generaterekap(){
        return view('pages.admin.generatereport.generaterekap', [
            'title' => 'APM | Generate Report',
            'header' => 'Generate Report',
            'breadCrumb1' => 'Generate Report',
            'breadCrumb2' => 'Rekap'
        ]);
    }
}

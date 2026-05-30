<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function generateperiode(Request $request)
{
    $laporan = DB::table('pengaduan')
        ->leftJoin('users', 'pengaduan.masyarakat_id', '=', 'users.id')
        ->leftJoin('kategoripengaduan', 'pengaduan.kategori_id', '=', 'kategoripengaduan.id')
        ->select(
            'pengaduan.*',
            'users.name',
            'kategoripengaduan.namakategori'
        );
        if ($request->bulan) {
                $laporan->whereMonth('tglpengaduan', $request->bulan);
            }

            if ($request->tahun) {
                $laporan->whereYear('tglpengaduan', $request->tahun);
            }

            if ($request->status) {
                $laporan->where('status', $request->status);
            }
        $laporan = $laporan->get();

    return view('pages.admin.generatereport.generateperiode', [
        'laporan' => $laporan,
        'bulan' => $request->bulan,
        'tahun' => $request->tahun,
        'status' => $request->status,
        'title' => 'APM | Generate Report',
        'header' => 'Generate Report',
        'breadCrumb1' => 'Generate Report',
        'breadCrumb2' => 'Periode'
    ]);
}

    public function generaterekap()
{
    $rekap = DB::table('pengaduan')
        ->leftJoin('kategoripengaduan', 'pengaduan.kategori_id', '=', 'kategoripengaduan.id')
        ->select(
            'kategoripengaduan.namakategori',
            DB::raw('COUNT(*) as jumlah')
        )
        ->groupBy('kategoripengaduan.namakategori')
        ->get();

    return view('pages.admin.generatereport.generaterekap', [
        'rekap' => $rekap,
        'title' => 'APM | Generate Report',
        'header' => 'Generate Report',
        'breadCrumb1' => 'Generate Report',
        'breadCrumb2' => 'Rekap'
    ]);
}

}

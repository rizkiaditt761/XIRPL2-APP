@extends('layouts.layoutsadmin')
@section('content')
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="container-fluid mt-3">
                <div class="card">
                    <div class="card-header">
                        <button onclick="window.print()" class="btn btn-secondary">
                            <i class="fa fa-print"></i> Cetak Laporan
                        </button>
                        <a href="/generatereport" class="btn btn-warning btn-md float-sm-right"><li class="fa fa-undo"></li> Kembali</a>
                    </div>
                    <div class="card-body report">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="h-report"> APM Masyarakat Seluruh Indonesia </div>
                                <div class="h-report-detail">
                                    <li class="fa fa-bars"></li> Jl. Banyu Mengalir No. 123 Jawa Barat KP. 12345 <li
                                        class="fa fa-phone"></li> +1 1233456788
                                </div>
                                <hr>
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <h5>Laporan Pengaduan</h5>

                                @if($bulan || $tahun)
                                    Periode :
                                    {{ $bulan ?? '-' }}
                                    {{ $tahun ?? '' }}
                                    <br>
                                @endif

                                @if($status)
                                    Status :
                                    {{ $status }}
                                @endif
                            </div>
                        </div>
                        <!-- <div class="row"> -->
                        <div class="container-responsive mt-3">

                            <table class="table table-bordered table-hover table-report">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal Pengaduan</th>
                                        <th>Kategori Pengaduan</th>
                                        <th>Nama Maysarakat</th>
                                        <th>Status</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($laporan as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->tglpengaduan }}</td>
                                        <td>{{ $item->namakategori }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->judul }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-8"></div>
                            <div class="col-md-4">
                                Ciamis, Februari 2024 <br>
                                Petugas
                                <br><br><br>
                                <b> Nama Petugas</b>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>
@endsection
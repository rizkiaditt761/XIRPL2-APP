@extends('layouts.layoutsadmin')
@section('content')
<section class="content">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="container">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Laporan Periode
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="/generatereport/generateperiode" method="GET">
                                    <div class="form form-group">
                                        <label for="selectBulan">
                                            Pilih Bulan
                                        </label>
                                        <select name="bulan" class="form-control">
                                            <option value="">-- Pilih Bulan --</option>
                                            <option value="Januari">Januari</option>
                                            <option value="Februari">Februari</option>
                                            <option value="Maret">Maret</option>
                                            <option value="April">April</option>
                                            <option value="Mei">Mei</option>
                                            <option value="Juni">Juni</option>
                                            <option value="Juli">Juli</option>
                                            <option value="Agustus">Agustus</option>
                                            <option value="September">September</option>
                                            <option value="Oktober">Oktober</option>
                                            <option value="November">November</option>
                                            <option value="Desember">Desember</option>
                                        </select>
                                    </div>
                                    <div class="form form-group">
                                        <label for="selectTahun">Pilih Tahun</label>
                                        <select name="tahun" class="form-control">
                                            <option value="">-- Pilih Tahun --</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                        </select>
                                    </div>
                                    <div class="form form-group">
                                        <label for="selectStatus">Pilih Status</label>
                                        <select name="status" class="form-control">
                                            <option value="">ALL</option>
                                            <option value="Process">Process</option>
                                            <option value="Selesai">Selesai</option>
                                        </select>
                                    </div>
                                    <div class="form form-group">
                                        <button type="submit" class="btn btn-primary btn-lg">
                                            <li class="fa fa-print"></li> Cetak
                                        </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="container">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Laporan Rekap Periode
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="/generatereport/generateperiode" method="GET">
                                    <div class="form form-group">
                                        <label for="selectBulan">
                                            Pilih Bulan
                                        </label>
                                        <select name="bulan" class="form-control">
                                            <option value="">-- Pilih Bulan --</option>
                                            <option value="Januari">Januari</option>
                                            <option value="Februari">Februari</option>
                                            <option value="Maret">Maret</option>
                                            <option value="April">April</option>
                                            <option value="Mei">Mei</option>
                                            <option value="Juni">Juni</option>
                                            <option value="Juli">Juli</option>
                                            <option value="Agustus">Agustus</option>
                                            <option value="September">September</option>
                                            <option value="Oktober">Oktober</option>
                                            <option value="November">November</option>
                                            <option value="Desember">Desember</option>
                                        </select>
                                    </div>
                                    <div class="form form-group">
                                        <label for="selectTahun">Pilih Tahun</label>
                                        <select name="tahun" class="form-control">
                                            <option value="">-- Pilih Tahun --</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                        </select>
                                    </div>
                                    <div class="form form-group">
                                        <button type="submit"  class="btn btn-primary btn-lg">
                                            <a href="/generatereport/generaterekap"><li class="fa fa-print"></li> Cetak </a>
                                        </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </section>
@endsection
@extends('layouts.layoutsadmin')
@section('content')
<style>
    .content-header{
        display:none;
    }

    .card-body{
        font-family: 'Times new Roman', sans-serif;
    }

    .h-report{
        font-size:32px;
        font-weight:600;
        text-align:center;
    }

    .h-report-detail{
        font-size:16px;
        text-align:center;
        margin-top:10px;
    }

    .judul-laporan{
        font-size:18px;
        margin-top:15px;
    }

    .table th{
        text-align:center;
        vertical-align:middle;
    }

    .table td{
        vertical-align:middle;
    }

    @media print {

        .card-header,
        .main-sidebar,
        .main-header,
        .main-footer{
            display:none !important;
        }

        .content-wrapper{
            margin-left:0 !important;
        }

        .card{
            border:none !important;
            box-shadow:none !important;
        }
    }
</style>
<section class="content pt-3">

    <div class="container-fluid">

        <div class="card">

            <div class="card-header">

                <button onclick="window.print()" class="btn btn-secondary">
                    <i class="fa fa-print"></i> Cetak Laporan
                </button>

                <a href="/generatereport" class="btn float-right btn-outline-warning btn-md">
                                    <li class="fa fa-undo"></li> Kembali
                                </a>
            </div>

            <div class="card-body">
                <div class="col-md-12">

                    <div class="h-report">
                        APM Masyarakat Seluruh Indonesia
                    </div>

                    <div class="h-report-detail">
                        <li class="fa fa-bars"></li> Jl. Banyu Mengalir No. 123 Jawa Barat KP. 12345 

                        &nbsp;&nbsp;

                        <li class="fa fa-phone"></li> +1 1233456788

                   </div>

                    <hr>

                    

                </div>

                <div class="table-responsive">

                    <table class="table table-bordered table-striped">

                        <thead class="text-center">

                            <tr>
                                <th width="5%">#</th>
                                <th>Jenis Pengaduan</th>
                                <th>Jumlah Pengaduan</th>
                                <th>Keterangan</th>
                                
                            </tr>

                        </thead>

                        <tbody>

                            @foreach($rekap as $item)

                            <tr>

                                <td class="text-center">
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    {{ $item->namakategori ?? '-'}}
                                </td>

                                <td>
                                    {{ $item->jumlah ?? '-'}}
                                </td>

                                <td>
                                    -
                                </td>

                                

                            </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

                <div class="row mt-5">

                    <div class="col-md-8"></div>

                    <div class="col-md-4 text-center">

                        Ciamis, {{ date('F Y') }}

                        <br>

                        Petugas

                        <br><br><br>

                        <b>
                            {{ optional(Auth::user())->name ?? 'Administrator' }}
                        </b>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
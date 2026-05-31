@extends('layouts.layoutsadmin')
@section('content')
<section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-light">
                            <div class="card-header text-muted border-bottom-0">
                                NIK : {{ $user->nik }}
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b>{{ $user->name }}</b></h2>
                                        <p class="text-muted text-sm">
                                            <b>Jenis Kelamin :</b> {{ $user->jeniskelamin }}
                                        </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-building"></i></span> Alamat : {{ $user->alamat }} </li>
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-phone"></i></span> Phone : {{ $user->notelepon }}
                                            </li>
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-envelope"></i></span> Email : {{ $user->email }}
                                            </li>
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-briefcase"></i></span> Jabatan : {{ $user->role }}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="/dist/img/user1-128x128.jpg" alt="" class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="/profile/editprofile" class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i> Ubah Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
@endsection
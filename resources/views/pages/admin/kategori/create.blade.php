@extends('layouts.layoutsadmin')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-12">

            <div class="card">

                <div class="card-header">
                    <h3 class="card-title">Edit Data Kategori</h3>

                    <a href="/kategori"
                       class="btn float-right btn-warning btn-md">

                        <li class="fa fa-undo"></li> Kembali
                    </a>
                </div>

                <div class="card-body">

                    <form action="/kategori"
                          method="POST">

                        @csrf
                        

                        <div class="col-md-6">

                            <div class="form form-group">
                                <label for="textKategori">
                                    Nama Kategori
                                </label>

                                <input type="text"
                                        name="textKategori"
                                        id="textKategori"
                                        class="form form-control">
                            </div>

                            <div class="form form-group">
                                <label for="textDeskripsi">
                                    Deskripsi
                                </label>

                                <textarea name="textDeskripsi"
                                            id="textDeskripsi"
                                            rows="3"
                                            class="form form-control"></textarea>
                            </div>

                            <div class="form form-group">

                                <button type="submit"
                                        class="btn btn-success btn-md">

                                    <li class="fa fa-save"></li>
                                    Update
                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>
</section>

@endsection
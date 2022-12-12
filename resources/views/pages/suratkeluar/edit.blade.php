@extends('master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Ubah Surat Keluar</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/suratkeluar')}}">Surat Keluar</a></li>
                            <li class="breadcrumb-item active">Ubah</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Surat Keluar</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{url('suratkeluar/update', $data->id)}}">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="tanggal">Tanggal Surat</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>
                                        <input type="date" class="form-control" id="tanggal" name="tanggal"
                                        value="{{$data->tanggal_surat}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="naskah">Nomor Surat</label>
                                <input type="text" class="form-control" id="nomor" name="nomor"
                                    value="{{$data->nomor}}">
                            </div>
                            <div class="form-group">
                                <label for="kepada">Kepada</label>
                                <input type="text" class="form-control" id="kepada" name="kepada"
                                    value="{{$data->kepada}}">
                            </div>
                            <div class="form-group">
                                <label for="perihal">Perihal</label>
                                <input type="text" class="form-control" id="perihal" name="perihal"
                                    value="{{$data->perihal}}">
                            </div>
                            <div class="form-group">
                                <label for="konseptor">Konseptor</label>
                                <input type="text" class="form-control" id="konseptor" name="konseptor"
                                    value="{{$data->konseptor}}">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan"
                                    value="{{$data->keterangan}}">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection

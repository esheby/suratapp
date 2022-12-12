@extends('master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Hapus Surat & Nomor Surat</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/suratkeluar')}}">Surat Keluar</a></li>
                            <li class="breadcrumb-item active">Hapus</li>
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
                    <h3 class="card-title">Apakah Anda Yakin Menghapus Surat Ini?</h3>
                </div>
                <form action="{{url('suratkeluar/destroy', $data->id)}}" method="GET">
                <div class="card-body">
                    <p><strong>Tanggal Surat: </strong> {{$data->tanggal_surat}}</p>
                    <p><strong>Nomor Surat: </strong> {{$data->nomor}}</p>
                    <p><strong>Kepada: </strong> {{$data->kepada}}</p>
                    <p><strong>Perihal: </strong> {{$data->perihal}}</p>
                    <p><strong>Konseptor: </strong> {{$data->konseptor}}</p>
                    <p><strong>Keterangan: </strong> {{$data->keterangan}}</p>
                    <!-- /.card-footer-->
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>

        </section>
        <!-- /.content -->
    </div>
@endsection

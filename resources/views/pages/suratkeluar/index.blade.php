@extends('master')
@section('css')
      <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/toastr/toastr.min.css"> 
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Surat Keluar</li>
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
          <a href="{{url('suratkeluar/create')}}" class="btn btn-success"><i class="fas fa-edit"></i> Tambah Surat</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Tanggal</th>
                  <th>Nomor Surat</th>
                  <th>Kepada</th>
                  <th>Perihal</th>
                  <th>Konseptor</th>
                  <th>Keterangan</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $key => $item)
                <tr>
                  <td>{{$key = $key+1}}</td>
                  <td>{{$item->tanggal_surat}}</td>
                  <td>{{$item->nomor}}</td>
                  <td>{{$item->kepada}}</td>
                  <td>{{$item->perihal}}</td>
                  <td>{{$item->konseptor}}</td>
                  <td>{{$item->keterangan}}</td>     
                  <td>
                    <a href="{{url('/suratkeluar/show', $item->id)}}" class="btn btn-xs btn-success btn-block"><i class="fa fa-eye"></i> Show</a>
                    <a href="{{url('/suratkeluar/edit', $item->id)}}" class="btn btn-xs btn-warning btn-block"><i class="fa fa-edit"></i> Edit</a>
                    <a href="{{url('/suratkeluar/delete', $item->id)}}" class="btn btn-xs btn-danger btn-block"><i class="fa fa-trash"></i> Delete</a>
                  </td>                 
                </tr>
                @endforeach
              </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">

        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection
@section('scripts')
<!-- DataTables  & Plugins -->
<script src="{{asset('assets')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('assets')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('assets')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('assets')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('assets')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
  <script src="{{asset('assets')}}/plugins/toastr/toastr.min.js"></script>
  @if (Session::has('success'))
      <script>
        toastr.success('Sukses')
      </script>
  @endif
@endsection
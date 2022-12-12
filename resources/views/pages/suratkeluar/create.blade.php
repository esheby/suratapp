@extends('master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Surat Keluar</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/suratkeluar')}}">Surat Keluar</a></li>
                            <li class="breadcrumb-item active">Tambah</li>
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
                    <form method="POST" action="{{url('suratkeluar/store')}}">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="tanggal">Tanggal Surat</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>
                                        <input type="date" class="form-control" id="tanggal" name="tanggal"
                                        placeholder="Masukkan Tanggal">
                                </div>
                               
                                
                            </div>
                            <div class="form-group">
                                <label for="naskah">Nomor Surat</label>
                                <div class="row">
                                    <div class="col-md-3" id="div-naskah">
                                        <select name="naskah" id="naskah" class="form-control">
                                            <option value="PN">PN</option>
                                            <option value="Custom">Custom (Selain Naskah PN)</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="kodesatu" id="kodesatu" class="form-control">
                                            <option value="" hidden selected>--Pilih Kode--</option>
                                            @foreach ($kodesatu as $item)
                                                <option value="{{$item->noksatu}}">{{$item->noksatu}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="kodedua" id="kodedua" class="form-control" disabled>
                                            <option value="" selected></option>
                                            @foreach ($kodedua as $item)
                                                <option value="{{$item->nokdua}}">{{$item->nokdua}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default" id="ketnaskah"><i class="far fa-question-circle"></i> Keterangan Kode Naskah </button>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="custom" name="custom"
                                    placeholder="Masukkan nomor custom" style="margin-top: 1%;">
                            </div>
                            <div class="form-group">
                                <label for="kepada">Kepada</label>
                                <input type="text" class="form-control" id="kepada" name="kepada"
                                    placeholder="Masukkan Kepada">
                            </div>
                            <div class="form-group">
                                <label for="perihal">Perihal</label>
                                <input type="text" class="form-control" id="perihal" name="perihal"
                                    placeholder="Masukkan Perihal">
                            </div>
                            <div class="form-group">
                                <label for="konseptor">Konseptor</label>
                                <input type="text" class="form-control" id="konseptor" name="konseptor"
                                    placeholder="Masukkan Konseptor">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan"
                                    placeholder="Masukkan keterangan">
                            </div>
                            <div class="modal fade" id="modal-default">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Keterangan Kode Naskah</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                <strong id="judulsatu">Judul Kode Satu</strong>
                                <p id="ketsatu">Keterangan Kode Satu</p>
                                <strong id="juduldua">Judul Kode Dua</strong>
                                <p id="ketdua">Keterangan Kode Dua</p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                                
                                </div>
                                
                                </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
@section('scripts')
<script type="text/javascript">
$('#custom').hide();
    $("#kodesatu").change(function(){
        $.ajax({
            url: "{{ route('suratkeluar.get_nomor') }}?kodesatu=" + $(this).val(),
            method: 'GET',
            success: function(data) {
                $('#kodedua').removeAttr('disabled');
                $('#kodedua').html(data.html);
            },
        });
        $.ajax({
            url: "{{ route('suratkeluar.get_naskah') }}?kodesatu=" + $(this).val(),
            method: 'GET',
            success: function(data) {
                // alert(JSON.stringify(data.j_satu));
                $('#judulsatu').text(data.j_satu[0].judul);
                $('#ketsatu').text(data.k_satu[0].deskripsi);
                $('#juduldua').text("");
                $('#ketdua').text("");
            },
        });
    });
    $("#kodedua").change(function(){
        $.ajax({
            url: "{{ route('suratkeluar.get_naskahdua') }}?kodedua=" + $(this).val(),
            method: 'GET',
            success: function(data) {
                if ($('#kodesatu').val()==="01") {
                    $('#juduldua').text(data.j_dua[0].judul);
                    $('#ketdua').text(data.k_dua[0].deskripsi);
                } else if($('#kodesatu').val()==="02"){
                    $('#juduldua').text(data.j_dua[1].judul);
                    $('#ketdua').text(data.k_dua[1].deskripsi);  
                } else {
                    $('#juduldua').text(data.j_dua[2].judul);
                    $('#ketdua').text(data.k_dua[2].deskripsi);  
                }
               
            },
        });
    });
    $("#naskah").change(function(){
        if($('#naskah').val()==="Custom"){
        $('#custom').show().focus().select();
        $('#div-naskah').addClass('col-md-12').removeClass('col-md-3');
        $('#kodesatu').hide();
        $('#kodedua').hide();
        $('#ketnaskah').hide();
} else {
    $('#div-naskah').addClass('col-md-3').removeClass('col-md-12');
    $('#custom').val('').hide();
    $('#kodesatu').show();
    $('#kodedua').show();
    $('#ketnaskah').show();
}
    });

</script>
@endsection
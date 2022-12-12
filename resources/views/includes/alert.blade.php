@if (Session::has('success'))
<div class="col-md-12">
    <div class="alert alert-success alert-dismissible" role='alert'>
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
        <span><strong><i class="icon fa fa-check"></i>Sukses</strong>, {{ Session::get('success') }}</span>
    </div>
</div>
@endif
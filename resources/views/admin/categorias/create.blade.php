@extends('admin.layout')
@section('header')
<h1>
    Ctegorias
    <small>Crear categoria</small>
</h1>
<ol class="breadcrumb">
    <li>
        <a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Inicio</a>
    </li>
    <li class="active">
        <a href="{{route('admin.categorias.index')}}"><i class="fa fa-list"></i> Categorias</a>
    </li>
    <li class="active">
        <a href="{{route('admin.categorias.create')}}">Crear</a>
    </li>

</ol>
@stop
@section('content')
<div class="row">
    <form method="POST" action="{{route('admin.categorias.store')}}">
        {{ csrf_field() }}
        <div class="col-md-12">
            <div class="box box-primary">


                <div class="box-body">
                    
                    <div class="form-group {{$errors->has('nombre') ? 'has-error' : '' }}">
                        <label>Nombre de la categoria</label>
                        <input type="text" name="title" placeholder="Ingresa aqui el nombre de la categoria"
                            class="form-control" value="{{old('nombre')}}">
                        {!! $errors->first('categoria', '<span class="help-block">:message</span>')!!}
                    </div>


                 
            </div>
        </div>
        
    </form>
</div>

@stop

@push('styles')
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

<!-- Select2 -->
<link rel="stylesheet" href="/adminlte/bower_components/select2/dist/css/select2.min.css">

@endpush

@push('scripts')

<!-- bootstrap datepicker -->
<script src="/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="/adminlte/bower_components/ckeditor/ckeditor.js"></script>
<!-- Select2 -->
<script src="/adminlte/bower_components/select2/dist/js/select2.full.min.js"></script>
<script>
    //Initialize Select2 Elements
    $('.select2').select2()

    CKEDITOR.replace('editor')
    //Date picker
$('#datepicker').datepicker({
autoclose: true
});
</script>
@endpush
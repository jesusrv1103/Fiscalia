@extends('admin.layout')
@section('header')
<h1>
    Recursos digitales
    <small>Crear recurso</small>
</h1>
<ol class="breadcrumb">
    <li>
        <a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Inicio</a>
    </li>
    <li class="active">
        <a href="{{route('admin.recursos_digitales.index')}}"><i class="fa fa-list"></i> Recursos Digitales</a>
    </li>
    <li class="active">
        <a href="{{route('admin.recursos_digitales.create')}}">Crear</a>
    </li>

</ol>
@stop
@section('content')
<div class="row">
    <form method="POST" action="{{route('admin.recursos_digitales.store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-md-8">
            <div class="box box-primary">


                <div class="box-body">

                    <div class="form-group {{$errors->has('titulo') ? 'has-error' : '' }}">
                        <label>Titulo</label>
                        <input type="text" name="titulo" placeholder="Ingresa aqui el titulo del recurso digital"
                            class="form-control" value="{{old('titulo')}}">
                        {!! $errors->first('titulo', '<span class="help-block">:message</span>')!!}
                    </div>

                    <div class="form-group {{$errors->has('categoria') ? 'has-error' : '' }}">
                        <label>Categorias</label>
                        <select name="categoria" id="" class="form-control">
                            <option value="">Seleciona una categoria</option>
                            @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}" {{old('categoria')== $categoria->id ? 'selected' : '' }}>
                                {{$categoria->nombre}}
                            </option>
                            @endforeach
                        </select>
                        {!! $errors->first('category', '<span class="help-block">:message</span>')!!}
                    </div>


                    <div class="form-group {{$errors->has('descripcion') ? 'has-error' : '' }}">
                        <label>Descripcion del recurso digital</label>
                        <textarea rows="3" name="descripcion" class="form-control"
                            placeholder="Ingresa descripcion del recurso digital"> {{old('descripcion')}}</textarea>
                        {!! $errors->first('descripcion', '<span class="help-block">:message</span>')!!}
                    </div>





                    <div class="form-group {{$errors->has('archivo') ? 'has-error' : '' }}">
                        <label>Archivo</label>
                        <input type="file" name="archivo" class="form-control" value="{{old('archivo')}}" accept="application/pdf">
                        {!! $errors->first('archivo', '<span class="help-block">:message</span>')!!}
                    </div>

                    <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Guardar 
                            </button>
                        </div>
                </div>

    </form>
</div>

@stop

@push('styles')
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

<!-- Select2 -->
<link rel="stylesheet" href="/bower_components/select2/dist/css/select2.min.css">

@endpush

@push('scripts')

<!-- bootstrap datepicker -->
<script src="/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="/bower_components/ckeditor/ckeditor.js"></script>
<!-- Select2 -->
<script src="/bower_components/select2/dist/js/select2.full.min.js"></script>
<script>
    //Initialize Select2 Elements
    $('.select2').select2()

    //Date picker
$('#datepicker').datepicker({
autoclose: true
});
</script>
@endpush
@extends('admin.layout')
@section('header')
<h1>
    Categorias
    <small>Listado</small>
</h1>
<ol class="breadcrumb">
    <li>
        <a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Inicio</a>
    </li>
    <li class="active">
        <a href="{{route('admin.categorias.index')}}"><i class="fa fa-lists"></i> Categorias</a>
    </li>
</ol>
@stop
@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Listado de categorias</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="posts-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                <tr>
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->nombre}}</td>
                    <td>
                        @can('categorias_create')
                        <a href="#" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                        @endcan
                        
                        @can('categorias_delete')
                        <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                        @endcan

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
@stop

@push('styles')
<!-- DataTables -->
<link rel="stylesheet" href="/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

@endpush

@push('scripts')
<!-- DataTables -->
<script src="/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
    $(function () {
            $('#categorias-table').DataTable({
              'paging'      : true,
              'lengthChange': false,
              'searching'   : false,
              'ordering'    : true,
              'info'        : true,
              'autoWidth'   : false
            })
          })
</script>
@endpush
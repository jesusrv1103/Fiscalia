<ul class="sidebar-menu" data-widget="tree">
    <li class="header">Navegacion</li>
    <!-- Optionally, you can add icons to the links -->
    <li {{request()->is('admin') ? 'class= active': ''}}><a href="{{ route('admin')}}"><i class="fa fa-home"></i>
            <span>Inicio</span></a></li>


    <li class="treeview {{request()->is('admin/categorias*') ? ' active': ''}}">
        <a href="#"><i class="fa fa-bars"></i> <span>Categorias</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li {{request()->is('admin/categorias') ? 'class= active': ''}}><a
                    href="{{route('admin.categorias.index')}}">
                    <i class="fa fa-eye"></i>Ver todas las categorias</a></li>

            @can('categorias_create')
            <li {{request()->is('admin/categorias/create') ? 'class= active': ''}}><a
                    href="{{route('admin.categorias.create')}}"><i class="fa fa-pencil"></i> Crear categoria</a></li>
            @endcan
        </ul>


    </li>

    <li class="treeview {{request()->is('admin/recursos_digitales*') ? ' active': ''}}">
        <a href="#"><i class="fa fa-bars"></i> <span>Recursos digitales</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li {{request()->is('admin/recursos_digitales') ? 'class= active': ''}}><a
                    href="{{route('admin.recursos_digitales.index')}}">
                    <i class="fa fa-eye"></i>Ver todos los recursos digitales</a></li>

            @can('pdf_create')
            <li {{request()->is('admin/recursos_digitales/create') ? 'class= active': ''}}><a
                    href="{{route('admin.recursos_digitales.create')}}"><i class="fa fa-pencil"></i> Crear recurso</a></li>
            @endcan

        </ul>


    </li>



</ul>
@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-2" style="font-size: 1.8rem;color:#000006;">Registro de Categorias</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Categorias</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title text-lg mt-2" style="font-weight: 600; color:#000006">Listado de Categorias
                            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary float-right" style="background: #4338ca;">
                                Agregar
                            </a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table id="tabla_simple" class="table table-sm text-center table-striped table-hover" width="100%" style="text-align:center;">
                                    <style>
                                        #tabla_simple {
                                            text-align: center;
                                            width: 100%;
                                            font-size: 14px;
                                            color: #000000;
                                        }
                                    </style>
                                    <thead>
                                        <tr class="text-md" style="font-weight: 800;">
                                            <th>ID</th>
                                            <th>NOMBRE</th>
                                            <th>SLUG</th>
                                            <th>IMAGEN</th>
                                            <th>OPERACIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $category)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->slug }}</td>
                                            </td>
                                            <td>
                                                @if($category->photo)
                                                <a href="{{ $category->photo->getUrl() }}" target="_blank">
                                                    <img src="{{ $category->photo->getUrl() }}" width="50px" height="50px">
                                                </a>
                                                @else
                                                <span class="badge badge-warning">No Image</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-primary" style="background: #4338ca;">
                                                        Editar
                                                    </a>
                                                    &nbsp
                                                    <form onclick="return confirm('Desea eliminar ?');" action="{{ route('admin.categories.destroy', $category->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de categorias</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="card-header pl-0">
                <a href="{{ route('admin.categorias.create') }}" class="btn btn-secondary">Agregar nueva categoria</a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($homes as $home)
                        <tr>
                            <td>{{ $home->id }}</td>
                            <td width="300px">
                                <img src="/img/hogares/{{ $home->image }}" class="banner_admin">
                            </td>
                            <td>{{ $home->name }}</td>
                            <td width="10px">
                                <a href="{{ route('admin.homes.edit', $home) }}"
                                    class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.homes.destroy', $home) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

<style>
    .banner_admin {
        width: 250px;
        height: 150px;
        object-fit: cover;
    }
</style>

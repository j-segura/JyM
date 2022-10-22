@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Zona</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($zone, [
                'route' => ['admin.zones.update', $zone],
                'method' => 'put'
            ]) !!}

            @include('admin.zones.partials.form')

            {!! Form::submit('Actualizar zona', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

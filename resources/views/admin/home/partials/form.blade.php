<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese el nombre de la nueva propiedad ...',
    ]) !!}

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese el slug de la nueva propiedad ...',
        'readonly',
    ]) !!}

    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('metrosCuadrados', 'Metros cuadrados:') !!}
    {!! Form::number('metrosCuadrados', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese el la cantidad de metros cuadrados ...',
    ]) !!}

    @error('metrosCuadrados')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('valor', 'Valor de la propiedad:') !!}
    {!! Form::text('valor', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese el valor de la propiedad...',
    ]) !!}

    @error('valor')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('direccion', 'Direccion de la propiedad:') !!}
    {!! Form::text('direccion', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese la direccion de la propiedad...',
    ]) !!}

    @error('direccion')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('image', 'Imagen:') !!}
    {!! Form::file('image', [
        'class' => 'form-control-file',
    ]) !!}

    @error('image')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese una descripcion del nuevo articulo ...',
    ]) !!}

    @error('descripcion')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('categoria_id', 'Categoria:') !!}
    {!! Form::select('categoria_id', $categorias, null, [
        'class' => 'form-control',
    ]) !!}

    @error('categoria_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('location_id', 'Ubicacion:') !!}
    {!! Form::select('location_id', $locations, null, [
        'class' => 'form-control',
    ]) !!}

    @error('location_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('zone_id', 'Zona:') !!}
    {!! Form::select('zone_id', $zones, null, [
        'class' => 'form-control',
    ]) !!}

    @error('zone_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>


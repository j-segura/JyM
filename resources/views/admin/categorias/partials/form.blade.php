<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'igrese el nombre de la categoria ...']) !!}

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'igrese el slug de la categoria ...', 'readonly']) !!}

    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('image', 'Imagen:') !!}
    {!! Form::file('image', [
        'class' => 'form-control-file',
        'accept' => 'image',
    ]) !!}

    @error('image')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

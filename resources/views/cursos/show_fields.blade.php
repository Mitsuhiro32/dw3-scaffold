<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $curso->nombre }}</p>
</div>

<!-- Descripcion Field -->
<div class="col-sm-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $curso->descripcion }}</p>
</div>

<!-- Fecha Inicio Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    <p>{{ $curso->fecha_inicio }}</p>
</div>

<!-- Fecha Fin Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_fin', 'Fecha Fin:') !!}
    <p>{{ $curso->fecha_fin }}</p>
</div>

<!-- Estado Field -->
<div class="col-sm-12">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{{ $curso->estado }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $curso->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $curso->updated_at }}</p>
</div>


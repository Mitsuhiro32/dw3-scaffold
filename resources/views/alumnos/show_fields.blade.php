<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $alumno->nombre }}</p>
</div>

<!-- Apellido Field -->
<div class="col-sm-12">
    {!! Form::label('apellido', 'Apellido:') !!}
    <p>{{ $alumno->apellido }}</p>
</div>

<!-- Edad Field -->
<div class="col-sm-12">
    {!! Form::label('edad', 'Edad:') !!}
    <p>{{ $alumno->edad }}</p>
</div>

<!-- Ci Field -->
<div class="col-sm-12">
    {!! Form::label('ci', 'Ci:') !!}
    <p>{{ $alumno->ci }}</p>
</div>

<!-- Telefono Field -->
<div class="col-sm-12">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $alumno->telefono }}</p>
</div>

<!-- Direccion Field -->
<div class="col-sm-12">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{{ $alumno->direccion }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $alumno->email }}</p>
</div>

<!-- Profesion Field -->
<div class="col-sm-12">
    {!! Form::label('profesion', 'Profesion:') !!}
    <p>{{ $alumno->profesion }}</p>
</div>

<!-- Genero Field -->
<div class="col-sm-12">
    {!! Form::label('genero', 'Genero:') !!}
    <p>{{ $alumno->genero }}</p>
</div>

<!-- Fecha Nac Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_nac', 'Fecha de Nacimiento:') !!}
    <p>{{ $alumno->fecha_nac }}</p>
</div>

<!-- Curso Field -->
<div class="col-sm-12">
    {!! Form::label('curso_id', 'Curso:') !!}
    <p>{{ $alumno->cursos->nombre }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $alumno->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $alumno->updated_at }}</p>
</div>


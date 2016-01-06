<!--- Titulo Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('titulo', 'Titulo:') !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!--- Descripcion Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('imagen') !!}
    {!! Form::file('imagen', null, ['class' => 'form-control']) !!}
</div>

<!--- Enlace Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('enlace', 'Enlace:') !!}
    {!! Form::text('enlace', null, ['class' => 'form-control']) !!}
</div>

<!--- Estado Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::select('estado', ['placeholder' => 'Seleccione un estado','0' => 'Inactivo','1'=>'Activo'], ['class' => 'form-control']) !!}
</div>


<!--- Pais Id Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('pais_id', 'Pais Id:') !!}
    {!! Form::select('pais_id', $paises,null, ['id' => 'pais']) !!}
</div>



<!--- Departamento Id Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('departamento_id', 'Departamento Id:') !!}
    {!! Form::select('departamento_id', ['placeholder' => 'Seleccione un departamento'],null,['id'=>'departamento']) !!}
</div>


<!--- Municipio Id Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('municipio_id', 'Municipio Id:') !!}
    {!! Form::select('municipio_id',  ['placeholder' => 'Seleccione un Municipio'],null,['id'=>'municipio']) !!}
</div>

<!--- Categoria Id Field --->
<div class="form-group col-sm-6 col-lg-4">  
    {!! Form::label('categoria_id', 'Categoria:') !!}
    {!! Form::select('categoria_id',$categoria,null, ['placeholder' => 'Seleccione una Categoria'],null,['id'=>'categoria']) !!}
</div>

<!--- Mapa Id Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('mapa_id', 'Lugar:') !!}
    {!! Form::select('mapa_id',  ['placeholder' => 'Seleccione un Lugar'],null,['id'=>'nombre']) !!}
</div>

<!--- Posicion Mapa Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('posicion_mapa', 'Posicion Mapa:') !!}
    {!! Form::text('posicion_mapa', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>

@extends('layouts.admin')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">anuncios</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('anuncios.create') !!}">Agregar</a>
        </div>

        <div class="row">
            @if($anuncios->isEmpty())
                <div class="well text-center">No anuncios found.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Titulo</th>
			<th>Estado</th>
			<th>Pais</th>
			<th>Departamento</th>
			<th>Municipio</th>
			<th>Categoria</th>
			<th>Lugares</th>
            <th>Imagen</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($anuncios as $anuncio)
                        <tr>
                            <td>{!! $anuncio->titulo !!}</td>
					<td>{!! $anuncio->estado !!}</td>
					<td>{!! $anuncio->pais($anuncio->pais_id) !!}</td>
					<td>{!! $anuncio->departamento($anuncio->departamento_id) !!}</td>
					<td>{!! $anuncio->municipio($anuncio->municipio_id) !!}</td>
					<td>{!! $anuncio->categoria($anuncio->categoria_id) !!}</td>
					<td>{!! $anuncio->mapas($anuncio->mapa_id) !!}</td>
                    <td>{!! $anuncio->imagen !!}</td>
                            <td>
                                <a href="{!! route('anuncios.edit', [$anuncio->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('anuncios.delete', [$anuncio->id]) !!}" onclick="return confirm('Are you sure wants to delete this anuncio?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
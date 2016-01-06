@extends('layouts.admin')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($anuncio, ['route' => ['anuncios.update', $anuncio->id], 'method' => 'patch']) !!}

        @include('anuncios.fields')

    {!! Form::close() !!}
</div>
@endsection

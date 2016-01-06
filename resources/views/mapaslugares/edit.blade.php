@extends('layouts.admin')


@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($mapaslugares, ['route' => ['mapaslugares.update', $mapaslugares->id], 'method' => 'patch']) !!}

        @include('mapaslugares.fields')

    {!! Form::close() !!}
</div>
@endsection

@extends('layouts.admin')


@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'mapaslugares.store','files'=>true]) !!}

        @include('mapaslugares.fields')

    {!! Form::close() !!}
</div>
@endsection

@extends('layouts.admin')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'anuncios.store','novalidate'=>'novalidate','files'=>true]) !!}

        @include('anuncios.fields')

    {!! Form::close() !!}
</div>
@endsection

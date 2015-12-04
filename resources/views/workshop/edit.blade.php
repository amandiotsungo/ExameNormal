@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($evento, ['route' => ['eventos.update', $evento->id], 'method' => 'patch']) !!}

        @include('eventos.fields')

    {!! Form::close() !!}
</div>
@endsection

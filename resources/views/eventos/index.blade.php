@extends('template.template')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Eventos</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('eventos.create') !!}">Adicionar evento</a>
        </div>

        <div class="row">
            @if($eventos->isEmpty())
                <div class="well text-center">Nenhum evento encontrado.</div>
            @else
                <table class="table">
                    <thead>
                    <th>T&iacute;tulo</th>
			<th>Tipo</th>
			<th>Descri&ccedil;&atilde;o</th>
			<th>Local</th>
			<th>Data</th>
			<th>Agenda</th>
            <th>Estado</th>
                    <th width="50px">Ac&ccedil;&otilde;s</th>
                    </thead>
                    <tbody>
                     
                    @foreach($eventos as $evento)
                        <tr>
                            <td>{!! $evento->titulo !!}</td>
					<td>{!! $evento->tipo !!}</td>
					<td>{!! $evento->descricao !!}</td>
					<td>{!! $evento->local !!}</td>
					<td>{!! $evento->data !!}</td>
					<td>{!! $evento->agenda !!}</td>
                    <td>{!! $evento->estado !!}</td>
                            <td>
                                <a href="{!! route('eventos.edit', [$evento->id]) !!}"><i class="glyphicon glyphicon-edit"></i> </a>
                                <a href="{!! route('eventos.delete', [$evento->id]) !!}" onclick="return confirm('Tem certeza que quer apagar este evento?')"><i class="glyphicon glyphicon-remove"></i></a>
                                <a class="btn btn-primary pull-right" style="margin-top: 5px" href="{!! route('participantes.create') !!}">+ Participante</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
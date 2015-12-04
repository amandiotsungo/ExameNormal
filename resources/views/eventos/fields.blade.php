<!-- Titulo Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('titulo', 'T&iacute;tulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('tipo', 'Tipo:') !!}<br>
    {!!Form::select('tipo', array ('Festa' => 'Festa', 'Palestra' => 'Palestra', 'Workshop' => 'Workshop'), null, ['placeholder' => 'Seleccione o Tipo de Evento...'])!!}
    <!--{!! Form::text('tipo', null, ['class' => 'form-control']) !!}-->
</div>

<!-- Descricao Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('descricao', 'Descri&ccedil;&atilde;o:') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Local Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('local', 'Local:') !!}
    {!! Form::text('local', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('data', 'Data:') !!}
    {!! Form::text('data', null, ['class' => 'form-control']) !!}
</div>

<!-- Agenda Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('agenda', 'Agenda:') !!}
    {!! Form::text('agenda', null, ['class' => 'form-control']) !!}
</div>
<!-- Estado Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('estado', 'Estado:') !!}
    {!!Form::select('estado', array ('Criado' => 'Criado','Activo' => 'Activo', 'Cancelado' => 'Cancelado'), null, ['placeholder' => 'Seleccione o Estado...'])!!}
    <!--{!! Form::text('estado', null, ['class' => 'form-control']) !!}-->
</div>




<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Registar Evento', ['class' => 'btn btn-primary']) !!}
</div>

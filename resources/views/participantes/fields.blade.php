<!-- Nome Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Apelido Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('apelido', 'Apelido:') !!}
    {!! Form::text('apelido', null, ['class' => 'form-control']) !!}
</div>

<!--- Grauacademico Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('grauacademico', 'N&iacute;vel Acad&eacute;mico:') !!}<br>
    {!!Form::select('grauacademico', array ('Primario' => 'Primario', 'Basico' => ' Basico ', 'Medio' => 'Medio', 'Superior' => ' Superior '), null, ['placeholder' => 'Seleccione o Nivel Academico...'])!!}

   <!-- {!! Form::text('grauacademico', null, ['class' => 'form-control']) !!} -->
</div>

<!-- Empresa Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('empresa', 'Empresa:') !!}
    {!! Form::text('empresa', null, ['class' => 'form-control']) !!}
</div>

<!-- Datadenascimento Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('datadenascimento', 'Data de Nascimento:') !!}
    {!! Form::text('datadenascimento', null, ['class' => 'form-control']) !!}
</div>

<!-- Sexo Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('sexo', 'Sexo:') !!} <br>
    {!!Form::select('sexo', array ('Masculino' => 'Masculino', 'Feminino' => ' Feminino '), null, ['placeholder' => 'Seleccione o Sexo...'])!!}
   <!-- {!! Form::text('sexo', null, ['class' => 'form-control']) !!}-->
</div>

<!-- Telefone Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('telefone', 'Telefone:') !!}
    {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Registar Participante', ['class' => 'btn btn-primary']) !!}
</div>

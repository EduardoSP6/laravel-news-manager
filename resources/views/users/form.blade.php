<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Nome:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', old('name') , ['class' => 'form-control', 'autofocus']) !!}

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'E-mail:', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::email('email', old('email') , ['class' => 'form-control']) !!}

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    {!! Form::label('password', 'Senha:', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::password('password', ['class' => 'form-control']) !!}

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    {!! Form::label('password-confirm', 'Confirmar Senha:', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::password('password', ['id' => 'password-confirm', 'name' => 'password_confirmation', 'class' => 'form-control']) !!}
    </div>
</div>

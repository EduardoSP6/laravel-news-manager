@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">Alteração do Usuário</div>

                <div class="panel-body">
                     {!! Form::model($user, ['url' => route('admin.users.update', [$user->id]),
                                             'method' => 'PUT', 'class' => 'form-horizontal']) !!}

                        {{ csrf_field() }}

                        @include('users.form')

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

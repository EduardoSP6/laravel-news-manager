@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">Alteração da Notícia</div>

                <div class="panel-body">
                    {!! Form::model($notice, ['url' => route('admin.news.update', [$notice->id]),
                                            'method' => 'PUT', 'class' => 'form-horizontal']) !!}
                        {{ csrf_field() }}

                        @include('news.form')

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Salvar', ['class'=>'btn btn-primary btn-block']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

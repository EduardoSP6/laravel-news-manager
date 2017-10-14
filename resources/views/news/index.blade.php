@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">Administração de Notícias</div>
            <div class="panel-body">
                <a href="{{ route('admin.news.create') }}" class="btn btn-primary">Cadastrar</a>
                <br><br>
                <table class="table table-bordered table-responsive">
                    <tr>
                        <td>ID</td>
                        <td>Título</td>
                        <td>Data</td>
                        <td>Autor</td>
                        <td>Ações</td>
                    </tr>
                    <tbody>

                    @foreach($news as $notice)
                        <tr>
                            <td class="text-right">{{ $notice->id }}</td>
                            <td>{{ $notice->title }}</td>
                            <td>{{ $notice->created_at->format('d/m/Y') }}</td>
                            <td>{{ $notice->author->name }}</td>
                            <td class="text-center" width="80">
                                <!-- alterar -->
                                <a href="{{ route('admin.news.edit', ['id' => $notice->id]) }}"><i
                                            class="glyphicon glyphicon-pencil"></i></a>

                                <!-- excluir -->
                                <a href="#" class="link-del" id="{{ $notice->id }}"
                                   onclick="{{"event.preventDefault();document.getElementById('form-delete-{$notice->id}').submit();"}}">
                                    <i class="glyphicon glyphicon-trash text-danger"></i></a>

                                <form method="POST" action="{{ route('admin.news.destroy',['id' => $notice->id]) }}"
                                      id="form-delete-{{ $notice->id }}">
                                    {{ method_field('DELETE') }}
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $news->links() }}
            </div>
        </div>
    </div>
@endsection


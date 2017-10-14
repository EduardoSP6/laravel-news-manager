@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">Administração de Usuários</div>
            <div class="panel-body">
                <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Cadastrar</a>
                <br><br>
                <table class="table table-bordered table-responsive">

                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>E-mail</td>
                        <td>Ações</td>
                    </tr>
                    <tbody>

                    @foreach($users as $user)
                        <tr>
                            <td class="text-right">{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="text-center" width="80">
                                <!-- alterar -->
                                <a href="{{ route('admin.users.edit', ['id' => $user->id]) }}"><i
                                            class="glyphicon glyphicon-pencil"></i></a>

                                <!-- excluir -->
                                @if(\Illuminate\Support\Facades\Auth::user()->id != $user->id)
                                    <a href="#" class="link-del" id="{{ $user->id }}"
                                       onclick="{{"event.preventDefault();document.getElementById('form-delete-{$user->id}').submit();"}}">
                                        <i class="glyphicon glyphicon-trash text-danger"></i></a>
                                @else
                                    &nbsp;&nbsp;&nbsp;
                                @endif

                                <form method="POST" action="{{ route('admin.users.destroy',['id' => $user->id]) }}"
                                      id="form-delete-{{ $user->id }}">
                                    {{ method_field('DELETE') }}
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection


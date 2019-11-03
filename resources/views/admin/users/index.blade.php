@extends('admin.template.main')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Usuarios</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Usuarios</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Usuarios</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    @include('admin.template.message')
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Correo</th>
                            <th>Acción</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ ($user->type == 'admin') ? 'Administrador' : 'Miembro' }} </td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('admin.users.edit', ['user' => $user->id]) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</a>
                                    <a href="{{ route('admin.users.destroy', ['user' => $user->id]) }}" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminarlo?')"><i class="fa fa-trash"></i> Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $users->render() !!}
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.users.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Registrar usuario</a>
                </div>
            </div>
        </section>
    </div>
@endsection

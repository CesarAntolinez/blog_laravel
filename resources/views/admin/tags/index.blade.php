@extends('admin.template.main')

@section('title', 'Tags')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tags</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Tags</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tags</h3>
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
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tags as $tag)
                            <tr>
                                <td>{{ $tag->id }}</td>
                                <td>{{ $tag->name }}</td>
                                <td>
                                    <a href="{{ route('admin.tags.edit', ['tag' => $tag->id]) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</a>
                                    <a href="{{ route('admin.tags.destroy', ['tag' => $tag->id]) }}" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminarlo?')"><i class="fa fa-trash"></i> Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-center my-1">
                        {!! $tags->render() !!}
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.tags.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Registrar Tag</a>
                </div>
            </div>
        </section>
    </div>
@endsection

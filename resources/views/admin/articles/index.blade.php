@extends('admin.template.main')

@section('title', 'Artículos')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Artículos</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Artículos</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Artículos</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    @include('admin.template.message')
                    <div class="row justify-content-end">
                        <div class="col-auto">
                            {!! Form::open(['route' => 'admin.articles.index', 'method' => 'get', 'class' => '']) !!}
                            <div class="input-group input-group" style="width: 200px;">
                                {!! Form::text('search', null, ['class' => 'form-control float-right', 'placeholder' => 'Buscar']) !!}
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="col-12 my-2">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titulo</th>
                                <th>Categoria</th>
                                <th>Usuario</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($articles as $article)
                                    <tr>
                                        <td>{{ $article->id }}</td>
                                        <td>{{ $article->title }}</td>
                                        <td>{{ $article->category->name }}</td>
                                        <td>{{ $article->user->name }}</td>
                                        <td>
                                            <a href="{{ route('admin.articles.edit', ['article' => $article->id]) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</a>
                                            <a href="{{ route('admin.articles.destroy', ['article' => $article->id]) }}" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminarlo?')"><i class="fa fa-trash"></i> Eliminar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row justify-content-center my-1">

                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.articles.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Registrar Articulo</a>
                </div>
            </div>
        </section>
    </div>
@endsection

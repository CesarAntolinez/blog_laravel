@extends('admin.template.main')

@section('title', 'Crear Tag')

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
                            <li class="breadcrumb-item">Tags</li>
                            <li class="breadcrumb-item active">Editar Tag</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar Tag</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    @include('admin.template.message')
                    {!! Form::open(['route' => array('admin.tags.update', 'tag' => $tag->id), 'method' => 'PUT', 'files' => false]); !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Nombre') !!}
                        {!! Form::text('name', $tag->name, ['class' => 'form-control', 'require', 'placeholder' => 'Nombre completo']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit( 'Guardar', ['class' => 'btn btn-success ']) !!}
                    </div>
                    {!! Form::close(); !!}
                </div>
            </div>
        </section>
    </div>
@endsection

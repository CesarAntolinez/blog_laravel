@extends('admin.template.main')

@section('title', 'Crear Categoria')

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
                            <li class="breadcrumb-item active">Crear Tag</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Crear Tag</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    @include('admin.template.message')
                    {!! Form::open(['route' => 'admin.tags.store', 'method' => 'POST', 'files' => false]); !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Nombre') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'require', 'placeholder' => 'Nombre completo']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit( 'Registrar', ['class' => 'btn btn-success ']) !!}
                    </div>
                    {!! Form::close(); !!}
                </div>
            </div>
        </section>
    </div>
@endsection

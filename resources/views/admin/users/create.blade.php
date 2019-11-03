@extends('admin.template.main')

@section('title', 'Crear Usuario')

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
                            <li class="breadcrumb-item">Usuarios</li>
                            <li class="breadcrumb-item active">Crear usuarios</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Crear usuarios</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    @include('admin.template.partials.errors')
                    {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST', 'files' => false]); !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Nombre') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'require', 'placeholder' => 'Nombre completo']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Correo Electronico') !!}
                        {!! Form::email('email', null, ['class' => 'form-control', 'require', 'placeholder' => 'example@explamplecom']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', 'Contraseña') !!}
                        {!! Form::password('password', ['class' => 'form-control', 'require', 'placeholder' => '******************']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('type', 'Tipo de usuario') !!}
                        {!! Form::select('type', [ 'memberr' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control', 'require']) !!}
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

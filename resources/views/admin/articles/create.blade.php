@extends('admin.template.main')

@section('title', 'Crear Articulos')

@section('style')
    <link href="{{ asset('plugins\select2\css\select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('plugins\Trumbowyg\ui\trumbowyg.min.css') }}" rel="stylesheet"/>
@endsection
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
                            <li class="breadcrumb-item">Artículos</li>
                            <li class="breadcrumb-item active">Crear Artículo</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Crear Artículo</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    @include('admin.template.message')
                    {!! Form::open(['route' => 'admin.articles.store', 'method' => 'POST', 'files' => true]); !!}
                    <div class="form-group">
                        {!! Form::label('title', 'Titulo') !!}
                        {!! Form::text('title', null, ['class' => 'form-control', 'require', 'placeholder' => 'Titulo del artículo']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('category_id', 'Categoría') !!}
                        {!! Form::select('category_id', $categories, null, ['class' => 'form-control article', 'require']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('content', 'Contenido') !!}
                        {!! Form::textarea('content', null, ['class' => 'form-control', 'require', 'placeholder' => 'Contenido del artículo']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('tags', 'Tags') !!}
                        {!! Form::select('tags[]', $tags, null, ['class' => 'form-control tags', 'require', 'multiple']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('image', 'Imagen') !!}
                        {!! Form::file('image') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit( 'Registrar artículo', ['class' => 'btn btn-success ']) !!}
                    </div>
                    {!! Form::close(); !!}
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script src="{{ asset('plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/i18n/es.js') }}"></script>

    <!-- Trumbowyg -->
    <script src="{{ asset('plugins/Trumbowyg/trumbowyg.min.js') }}"></script>
    <script src="{{ asset('plugins/Trumbowyg/langs/es.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.tags').select2({
                placeholder: "Seleccione maximo 3 tags",
                language: 'es',
                maximumSelectionLength: 3
            });
            $('.article').select2({
                placeholder: "Seleccione un Articulo",
                language: 'es'
            });

            $('#content').trumbowyg({
                lang: 'es'
            });

        });
    </script>
@endsection

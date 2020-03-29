@extends('admin.template.main')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-6">
                        <h1>Inicio</h1>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Inicio</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Inicio</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    @include('admin.template.message')
                    <div class="row justify-content-center">
                        <div class="col-md-3 col-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $users }}</h3>
                                    <p>Usuarios</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <a href="{{ route('admin.users.index') }}" class="small-box-footer">Mas información<i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>{{ $tags }}</h3>
                                    <p>Tags</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-tags"></i>
                                </div>
                                <a href="{{ route('admin.tags.index') }}" class="small-box-footer">Mas información<i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="small-box bg-orange">
                                <div class="inner">
                                    <h3>{{ $images }}</h3>
                                    <p>Imagenes</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-images"></i>
                                </div>
                                <a href="{{ route('admin.images.index') }}" class="small-box-footer">Mas información<i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>{{ $articles }}</h3>
                                    <p>Artículos</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-newspaper"></i>
                                </div>
                                <a href="{{ route('admin.articles.index') }}" class="small-box-footer">Mas información<i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>{{ $categories }}</h3>
                                    <p>Categorías</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-sitemap"></i>
                                </div>
                                <a href="{{ route('admin.categories.index') }}" class="small-box-footer">Mas información<i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection

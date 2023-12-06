@extends('layouts.app')

@section('template_title')
    {{ $profesore->name ?? "{{ __('Show') Profesore" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Docentes</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('profesores.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $profesore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidad:</strong>
                            {{ $profesore->especialidad }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $profesore->email }}
                        </div>
                        <div class="form-group">
                            <strong>Curso Id:</strong>
                            {{ $profesore->curso_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

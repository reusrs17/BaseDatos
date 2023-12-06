@extends('layouts.app')

@section('template_title')
    {{ $grado->name ?? "{{ __('Show') Grado" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Grado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('grados.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Grados:</strong>
                            {{ $grado->grados }}
                        </div>
                        <div class="form-group">
                            <strong>Curso Id:</strong>
                            {{ $grado->curso_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

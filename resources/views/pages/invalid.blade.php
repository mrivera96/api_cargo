@extends('templates.base_template')
@section('content')
    <card class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <div class="alert alert-danger"> PIN incorrecto</div>
            <a href="/cargo/public/login" class="btn btn-light"> Regresar </a>
        </div>
    </card>

@endsection
@section('scripts')
@endsection
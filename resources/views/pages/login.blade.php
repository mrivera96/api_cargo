@extends('templates.base_template')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Login</h2>
            </div>

            <div class="card-body">
                <form class="form-group" role="form" method="post" action="{{route('log')}}">
                    <label for="pin">Por favor ingrese el PIN de acceso</label>
                    <input type="password" name="pin" placeholder="PIN">
                    <button class="form-control btn btn-primary" type="submit">Acceder</button>
                </form>
            </div>
        </div>
    </div>
@endsection
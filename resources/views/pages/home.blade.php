@extends('templates.base_template')
@include('pages.navbar')
@section('content')


    <div class="content">

        <div class="col-md-12" id="resultados">

            <table class="table text-left" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th scope="col">Check</th>
                    <th scope="col">O. City</th>
                    <th scope="col">O. State</th>
                    <th scope="col">D. City</th>
                    <th scope="col">D. State</th>
                    <th scope="col">Carrier</th>
                    <th scope="col">Based</th>
                    <th scope="col">Phone 1</th>
                    <th scope="col">Phone 2</th>
                    <th scope="col">Notes</th>
                </tr>
                </thead>


            </table>

            <table id="regs" class="table" cellspacing="0" width="100%">


            </table>

        </div>

        <a href="nroute" class=" btn btn-primary"> Crear Nueva Ruta </a>
        <!-- <button onclick="sendMessage()" class="btn btn-secondary" type="button">Enviar SMS</button> -->
        <button onclick="editar()" class="btn btn-secondary" type="button">Editar Ruta</button>

    </div>


@endsection
@section('scripts')
    <script src="{{asset('js/home.js')}}"></script>
    <script src="{{asset('js/pagination.min.js')}}"></script>
@endsection
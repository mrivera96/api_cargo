@extends('templates.base_template')
@section('content')
    <div class="container">
        <div class="card">

            <div class="card-header">
                <h2>Editar ruta</h2>
            </div>

            <div class="card-body">

                <form class="form-group" id="editaRuta" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-sm-6">
                            <label for="Vehicle">Vehículo</label>
                            <input id="Vehicle" class="form-control" name="Vehicle" value="{{$route[0]->Vehicle}}">
                        </div>

                        <div class="col-sm-6">
                            <label for="O_City">Ciudad de origen</label>
                            <input id="O_City" class="form-control" name="O_City" value="{{$route[0]->O_City}}">
                        </div>

                        <div class="col-sm-6">
                            <label for="O_State">Estado de origen</label>
                            <select class="form-control" id="O_State" class="form-control" name="O_State">
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <label for="O_ZIP">ZIP de origen</label>
                            <input id="O_ZIP" class="form-control" name="O_ZIP" value="{{$route[0]->O_ZIP}}">
                        </div>

                        <div class="col-sm-6">
                            <label for="D_City">Ciudad de destino</label>
                            <input id="D_City" class="form-control" name="D_City" value="{{$route[0]->D_City}}">
                        </div>

                        <div class="col-sm-6">
                            <label for="D_State">Estado de destino</label>
                            <select class="form-control" id="D_State" class="form-control" name="D_State"
                                    placeholder="D_State">
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <label for="D_ZIP">ZIP de destino</label>
                            <input id="D_ZIP" class="form-control" name="D_ZIP" value="{{$route[0]->D_ZIP}}">
                        </div>

                        <div class="col-sm-6">
                            <label for="Carrier">Carrier</label>
                            <input id="Carrier" class="form-control" name="Carrier" value="{{$route[0]->Carrier}}">
                        </div>

                        <div class="col-sm-6">
                            <label for="Based">Based</label>
                            <input id="Based" class="form-control" name="Based" value="{{$route[0]->Based}}">
                        </div>

                        <div class="col-sm-6">
                            <label for="Phone1">Número telefónico 1</label>
                            <input id="Phone1" class="form-control" name="Phone1" value="{{$route[0]->Phone1}}">
                        </div>

                        <div class="col-sm-6">
                            <label for="Phone2">Número telefónico 2</label>
                            <input id="Phone2" class="form-control" name="Phone2" value="{{$route[0]->Phone2}}">
                        </div>

                        <div class="col-sm-6">
                            <label for="email">e-mail</label>
                            <input id="email" class="form-control" type="email" name="email"
                                   value="{{$route[0]->email}}">
                        </div>

                        <div class="col-md-6">
                            <label for="Ins_Exp">Ins Exp</label>
                            <input id="Ins_Exp" class="form-control" name="Ins_Exp" value="{{$route[0]->Ins_Exp}}">
                        </div>

                        <div class="col-sm-6">
                            <label for="Last_Action">Last activity</label>
                            <input id="Last_Action" class="form-control" name="Last_Action"
                                   value="{{$route[0]->Last_Action}}">
                        </div>

                        <div class="col-md-6">
                            <label for="ID">ID</label>
                            <input id="ID" class="form-control" name="ID" value="{{$route[0]->ID}}">
                        </div>

                        <div class="col-sm-6">
                            <label for="Deposit">Depósito</label>
                            <input id="Deposit" class="form-control" name="Deposit" value="{{$route[0]->Deposit}}">
                        </div>

                        <div class="col-md-6">
                            <label for="Tariff">Tarifa</label>
                            <input id="Tariff" class="form-control" name="Tariff" value="{{$route[0]->Tariff}}">
                        </div>

                        <div class="col-sm-6">
                            <label for="Carrier_Pay"> Pago de Carrier</label>
                            <input id="Carrier_Pay" class="form-control" name="Carrier_Pay"
                                   value="{{$route[0]->Carrier_Pay}}">
                        </div>

                        <div class="col-sm-6">
                            <label for="Notes"> Observaciones</label>
                            <input id="Notes" class="form-control" name="Notes" value="{{$route[0]->Notes}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <br>
                            <button id="saveBtn" onclick="save()" class="form-control btn btn-primary" type="button">
                                Guardar
                            </button>
                        </div>
                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection

@section('scripts')

    <script src="{{asset('js/edit_route.js')}}"></script>
    <script type="text/javascript">
        act_oste = "{{$route[0]->O_State}}";
        act_dste = "{{$route[0]->D_State}}";
        id = "{{$_GET['id']}}";


    </script>
@endsection
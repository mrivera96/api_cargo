@extends('templates.base_template')
@section('content')
    <div class="container">
        <div class="card">

            <div class="card-header">
                <h2>Crear nueva ruta</h2>
            </div>

            <div class="card-body">

                <form class="form-group" id="nuevaRuta" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-sm-6">
                            <label for="Order_ID">ID de orden</label>
                            <input id="Order_ID" class="form-control" name="Order_ID" placeholder="Order_ID">
                        </div>

                        <div class="col-sm-6">
                            <label for="Vehicle">Vehículo</label>
                            <input id="Vehicle" class="form-control" name="Vehicle" placeholder="Vehicle">
                        </div>

                        <div class="col-sm-6">
                            <label for="O_City">Ciudad de origen</label>
                            <input id="O_City" class="form-control" name="O_City" placeholder="O_City">
                        </div>

                        <div class="col-sm-6">
                            <label for="O_State">Estado de origen</label>
                            <select class="form-control" id="O_State" class="form-control" name="O_State"
                                    placeholder="O_State">
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <label for="O_ZIP">ZIP de origen</label>
                            <input id="O_ZIP" class="form-control" name="O_ZIP" placeholder="O_ZIP">
                        </div>

                        <div class="col-sm-6">
                            <label for="D_City">Ciudad de destino</label>
                            <input id="D_City" class="form-control" name="D_City" placeholder="D_City">
                        </div>

                        <div class="col-sm-6">
                            <label for="D_State">Estado de destino</label>
                            <select class="form-control" id="D_State" class="form-control" name="D_State"
                                    placeholder="D_State">
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <label for="D_ZIP">ZIP de destino</label>
                            <input id="D_ZIP" class="form-control" name="D_ZIP" placeholder="D_ZIP">
                        </div>

                        <div class="col-sm-6">
                            <label for="Carrier">Carrier</label>
                            <input id="Carrier" class="form-control" name="Carrier" placeholder="Carrier">
                        </div>

                        <div class="col-sm-6">
                            <label for="Based">Based</label>
                            <input id="Based" class="form-control" name="Based" placeholder="Based">
                        </div>

                        <div class="col-sm-6">
                            <label for="Phone1">Número telefónico 1</label>
                            <input id="Phone1" class="form-control" name="Phone1" placeholder="Phone1">
                        </div>

                        <div class="col-sm-6">
                            <label for="Phone2">Número telefónico 2</label>
                            <input id="Phone2" class="form-control" name="Phone2" placeholder="Phone2">
                        </div>

                        <div class="col-sm-6">
                            <label for="email">e-mail</label>
                            <input id="email" type="email" class="form-control" name="email" placeholder="email">
                        </div>

                        <div class="col-md-6">
                            <label for="Ins_Exp">Ins Exp</label>
                            <input id="Ins_Exp" class="form-control" name="Ins_Exp" placeholder="Ins_Exp">
                        </div>

                        <div class="col-sm-6">
                            <label for="Last_Action">Last activity</label>
                            <input id="Last_Action" class="form-control" name="Last_Action" placeholder="Last_Activity">
                        </div>

                        <div class="col-md-6">
                            <label for="ID">ID</label>
                            <input id="ID" class="form-control" name="ID" placeholder="ID">
                        </div>

                        <div class="col-sm-6">
                            <label for="Deposit">Depósito</label>
                            <input id="Deposit" class="form-control" name="Deposit" placeholder="Deposit">
                        </div>

                        <div class="col-md-6">
                            <label for="Tariff">Tarifa</label>
                            <input id="Tariff" class="form-control" name="Tariff" placeholder="Tariff">
                        </div>

                        <div class="col-sm-6">
                            <label for="Carrier_Pay"> Pago de Carrier</label>
                            <input id="Carrier_Pay" class="form-control" name="Carrier_Pay" placeholder="Carrier_Pay">
                        </div>

                        <div class="col-sm-6">
                            <label for="Notes"> Observaciones</label>
                            <input id="Notes" class="form-control" name="Notes" placeholder="Notes">
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
    <script src="{{asset('js/new_route.js')}}"></script>
@endsection
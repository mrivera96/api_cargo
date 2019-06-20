<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cargo;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Location;

class CargoController extends Controller
{
    private $pin = '0909';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /***
     * Muestra el home y carga los estados en los select
     ***/
    public function index()
    {
        /*
        if (isset($_SESSION['pin']) && !empty($_SESSION['pin'])) {

            return view('pages.home');

        } else {

            header("Location: /cargo/public/login");
            die();

        }*/

        $registros="";
        if ( !empty(request()->input('OState')) && !empty(request()->input('DState'))) {
            $registros = DB::table('org')
                ->where('O_State', request()->input('OState'))
                ->where('D_State', request()->input('DState'))
                ->groupBy('Carrier')->get();
        }else if( !empty(request()->input('ID'))){
            $registros = DB::table('org')
                ->where('Order_ID', request()->input('ID'))
                ->get();
        }



        if ($registros!="") {
            return response(json_encode($registros))
                ->header('CONTENT-TYPE', 'application/json');
        } else {
            return response(json_encode("An Error has ocurred while loading routes"))
                ->header('CONTENT-TYPE', 'application/json');
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    /****
     * Crea una nueva ruta
     *
     */
    public function store()
    {

        $cargo = new Cargo();
        $cargo->Order_ID = request()->input('Order_ID');
        $cargo->Vehicle = request()->input('Vehicle');
        $cargo->O_City = request()->input('O_City');
        $cargo->O_State = request()->input('O_State');
        $cargo->O_ZIP = request()->input('O_ZIP');
        $cargo->D_City = request()->input('D_City');
        $cargo->D_State = request()->input('D_State');
        $cargo->D_ZIP = request()->input('D_ZIP');
        $cargo->Carrier = request()->input('Carrier');
        $cargo->Based = request()->input('Based');
        $cargo->Phone1 = request()->input('Phone1');
        $cargo->Phone2 = request()->input('Phone2');
        $cargo->email = request()->input('email');
        $cargo->Ins_Exp = request()->input('Ins_exp');
        $cargo->ID = request()->input('ID');
        $cargo->Last_Action = request()->input('Last_Action');
        $cargo->Deposit = request()->input('Deposit');
        $cargo->Tariff = request()->input('Tariff');
        $cargo->Carrier_Pay = request()->input('Carrier_Pay');
        $cargo->Notes = request()->input('Notes');
        $cargo->save();

        return response(json_encode('Ruta creada con éxito'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$cargo = new Cargo();
        $registros = $cargo->where('D_State', '=', $dEst)
            ->where('O_State', '=', $oEst)
            ->get(['O_City', 'O_State', 'D_City', 'D_State', 'Carrier', 'Based', 'Phone1', 'Phone2', 'Notes']);

        return $registros;*/

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        if (isset($_SESSION['pin']) && !empty($_SESSION['pin'])) {

            $id = request()->input('id');

            $cargo = new Cargo();
            $route = $cargo->where('Order_ID', '=', $id)->get();
            return view('pages.editar', compact('route'));

        } else {

            header("Location: /cargo/public/login");
            die();

        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $cargo = DB::table('org')->where('Order_ID', '=', $request->input('Order_ID'));
        $updated = $cargo->update([
            "Vehicle" => $request->input('Vehicle'),
            "O_City" => $request->input('O_City'),
            "O_State" => $request->input('O_State'),
            "O_ZIP" => $request->input('O_ZIP'),
            "D_City" => $request->input('D_City'),
            "D_State" => $request->input('D_State'),
            "D_ZIP" => $request->input('D_ZIP'),
            "Carrier" => $request->input('Carrier'),
            "Based" => $request->input('Based'),
            "Phone1" => $request->input('Phone1'),
            "Phone2" => $request->input('Phone2'),
            "email" => $request->input('email'),
            "Ins_Exp" => $request->input('Ins_exp'),
            "ID" => $request->input('ID'),
            "Last_Action" => $request->input('Last_Action'),
            "Deposit" => $request->input('Deposit'),
            "Tariff" => $request->input('Tariff'),
            "Carrier_Pay" => $request->input('Carrier_Pay'),
            "Notes" => $request->input('Notes'),
        ]);


        if ($updated) {
            return response(json_encode('Ruta modificada con éxito'));
        } else {
            return response(json_encode('Ocurrió un error al actualizar la ruta'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function vNRoute()
    {

        if (isset($_SESSION['pin']) && !empty($_SESSION['pin'])) {

            return view('pages.nueva');

        } else {

            header("Location: /cargo/public/login");
            die();

        }

    }

    public function showLogin()
    {

        return view('pages.login');

    }

    public function loguear()
    {

        if (!empty(request()->input('pin'))) {

            if (request()->input('pin') == $this->pin) {

                $_SESSION['pin'] = request()->input('pin');
                header("Location: /cargo/public");
                die();

            } else {

                return view('pages.invalid');

            }

        } else {

            echo '<div class="alert"> Ingrese el Pin de acceso</div>';

        }

    }

    public function getEstados()
    {

        $USStates = ['AL', 'AK', 'AZ', 'AR', 'CA', 'CO', 'CT', 'DE', 'FL', 'GA', 'HI', 'ID', 'IL',
            'IN', 'IA', 'KS', 'KY', 'LA', 'ME', 'MD', 'MA', 'MI', 'MN', 'MS', 'MO', 'MT', 'NE', 'NV', 'NH',
            'NJ', 'NM', 'NY', 'NC', 'ND', 'OH', 'OK', 'OR', 'PA', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VT',
            'VA', 'WA', 'WV', 'WI', 'WY'];
        return response(json_encode($USStates))
            ->setStatusCode(200);

    }

}

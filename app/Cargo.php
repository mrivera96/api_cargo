<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table='org';
    protected $primaryKey='r_id';
    protected $fillable=[
        "Vehicle"    ,
        "O_City"     ,
        "O_State"    ,
        "O_ZIP"      ,
        "D_City"     ,
        "D_State"    ,
        "D_ZIP"      ,
        "Carrier"    ,
        "Based"      ,
        "Phone1"     ,
        "Phone2"     ,
        "email"      ,
        "Ins_Exp"    ,
        "ID"         ,
        "Last_Action",
        "Deposit"    ,
        "Tariff"     ,
        "Carrier_Pay",
        "Notes"      ];

    
}

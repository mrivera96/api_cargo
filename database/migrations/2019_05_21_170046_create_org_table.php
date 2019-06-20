<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('org', function (Blueprint $table) {
            $table->increments('r_id');
            $table->char('Order_ID',15);
            $table->string('Vehicle')->nullable();
            $table->string('O_City',30)->nullable();
            $table->char('O_State',2)->nullable();
            $table->char('O_ZIP',10)->nullable();
            $table->string('D_City',30)->nullable();
            $table->char('D_State',2)->nullable();
            $table->char('D_ZIP',10)->nullable();
            $table->string('Carrier')->nullable();
            $table->string('Based')->nullable();
            $table->string('Phone1',15)->nullable();
            $table->string('Phone2',15)->nullable();
            $table->string('email',50)->nullable();
            $table->string('Ins_Exp',20)->nullable();
            $table->char('ID',15)->nullable();
            $table->string('Last_Action',20)->nullable();
            $table->string('Deposit',20)->nullable();
            $table->string('Tariff',20)->nullable();
            $table->string('Carrier_Pay',20)->nullable();
            $table->string('Notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('org');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonitoringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitorings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('jenistagihan');
            $table->string('nodok');
            $table->string('noagenda');
            $table->date('tgldok');
            $table->string('kdid');
            $table->string('npwp_nppbkc');
            $table->string('namaperusahaan');
            $table->date('tgljttempo');
            $table->date('tgllunas')->nullable();
            $table->string('dokasal')->nullable();
            $table->string('nodokasal')->nullable();
            $table->date('tgldokasal')->nullable();
            $table->float('bm')->default(0)->unsigned();
            $table->float('bk')->default(0)->unsigned();
            $table->float('cukaiht')->default(0)->unsigned();
            $table->float('cukaiea')->default(0)->unsigned();
            $table->float('cukaimmea')->default(0)->unsigned();
            $table->float('pabeanlain')->default(0)->unsigned();
            $table->float('cukailain')->default(0)->unsigned();
            $table->float('dendapabean')->default(0)->unsigned();
            $table->float('dendacukai')->default(0)->unsigned();
            $table->float('ppnimp')->default(0)->unsigned();
            $table->float('ppnlain')->default(0)->unsigned();
            $table->float('ppndn')->default(0)->unsigned();
            $table->float('ppnbm')->default(0)->unsigned();
            $table->float('pph22')->default(0)->unsigned();
            $table->float('pph22imp')->default(0)->unsigned();
            $table->float('bungappn')->default(0)->unsigned();
            $table->float('bungapph')->default(0)->unsigned();
            $table->float('bungaawal')->default(0)->unsigned();
            $table->string('flbrtbtl')->nullable();
            $table->string('flcicil')->nullable();
            $table->string('kepkeberatan')->nullable();
            $table->string('flkoreksi')->nullable();
            $table->string('rekon')->nullable();
            $table->string('dataskp')->nullable();
            $table->string('nippejabat')->nullable();
            $table->string('namabidang')->nullable();
            $table->string('statusdokumen')->nullable();
            $table->string('kdkantorpenerbit')->nullable();
            $table->string('namakantorpenerbit')->nullable();
            $table->string('kdkantorpengawas')->nullable();
            $table->string('namakantorpengawas')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monitorings');
    }
}

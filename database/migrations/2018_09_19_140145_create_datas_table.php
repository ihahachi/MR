<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('Nom_echant_01');
            $table->string('Nom_echant_02');
            $table->string('Nom_echant_03');
            $table->string('Date_pre');
            $table->string('milieu');
            $table->string('zone');
            $table->string('Wilaya');
            $table->string('Commune');
            $table->double('Longitude');
            $table->double('Latitude');

            $table->integer('frequence');
$table->double('Nitrates');
$table->double('Nitrites');
$table->double('Sulfures');
$table->double('Fluorures');
$table->double('Chrome hexavalent');
$table->double('Matiere_decantable');
$table->double('Hydrocarbures');
$table->double('HAP');
$table->double('Cadmium');
$table->double('Chrome');
$table->double('Cuivre');
$table->double('Zinc');
$table->double('Plomb');
$table->double('Mercure');
$table->double('Calcium');
$table->double('Cobalt');
$table->double('Fer');
$table->double('Magnesium');
$table->double('Manganese');
$table->double('Nickel');
$table->double('Argent');
$table->double('Molybdene');
$table->double('Aluminum');

            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {  
         Schema::table('datas', function (Blueprint $table) 
        { 
             $table->dropForeign(['user_id']);
             $table->dropColumn('user_id');
                Schema::dropIfExists('datas');
         });
               
    }
}

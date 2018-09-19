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
            $table->string('Nom_echant_01')->nullable();
            $table->string('Nom_echant_02')->nullable();
            $table->string('Nom_echant_03')->nullable();
            $table->string('Date_pre');
            $table->string('milieu')->nullable();
            $table->string('zone')->nullable();
            $table->string('Wilaya')->nullable();
            $table->string('Commune')->nullable();
            $table->double('Longitude');
            $table->double('Latitude');

            $table->integer('frequence')->nullable();
            $table->double('Nitrates')->nullable();
            $table->double('Nitrites')->nullable();
            $table->double('Sulfures')->nullable();
            $table->double('Fluorures')->nullable();
            $table->double('Chrome hexavalent')->nullable();
            $table->double('Matiere_decantable')->nullable();
            $table->double('Hydrocarbures')->nullable();
            $table->double('HAP')->nullable();
            $table->double('Cadmium')->nullable();
            $table->double('Chrome')->nullable();
            $table->double('Cuivre')->nullable();
            $table->double('Zinc')->nullable();
            $table->double('Plomb')->nullable();
            $table->double('Mercure')->nullable();
            $table->double('Calcium')->nullable();
            $table->double('Cobalt')->nullable();
            $table->double('Fer')->nullable();
            $table->double('Magnesium')->nullable();
            $table->double('Manganese')->nullable();
            $table->double('Nickel')->nullable();
            $table->double('Argent')->nullable();
            $table->double('Molybdene')->nullable();
            $table->double('Aluminum')->nullable();

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

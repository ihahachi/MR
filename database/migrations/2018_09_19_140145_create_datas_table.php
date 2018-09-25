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
            $table->string('Milieu')->nullable();
            $table->string('Zone')->nullable();
            $table->string('Wilaya')->nullable();
            $table->string('Commune')->nullable();
            $table->double('Longitude');
            $table->double('Latitude');
            $table->integer('Frequence')->nullable();
            // EAU
            $table->double('Temperature')->nullable();
            $table->double('Ph')->nullable();
            $table->double('Conductivite_specifique')->nullable();
            $table->double('Salinite')->nullable();
            $table->double('Oxygene_dissous')->nullable();
            $table->double('Saturation_oxygene')->nullable();
            $table->double('Debit')->nullable();
            $table->double('DCO')->nullable();
            $table->double('DBO')->nullable();
            $table->double('MES')->nullable();
            $table->double('Huile_graisses')->nullable();
            $table->double('Phosphore')->nullable();
            $table->double('Chlorures')->nullable();
            $table->double('Ortho_phosphates')->nullable();
            $table->double('Azote_kjeldahl')->nullable();
            $table->double('Azote_total')->nullable();
            $table->double('Indice_phenols')->nullable();
            $table->double('Ammonium')->nullable();
            $table->double('Nitrates')->nullable();
            $table->double('Nitrites')->nullable();
            $table->double('Sulfures')->nullable();
            $table->double('Fluorures')->nullable();
            $table->double('Chrome_hexavalent')->nullable();
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

            // Sédiment
            $table->double('Hydrocarbures_sed')->nullable();
            $table->double('HAP_sed')->nullable();
            $table->double('Cadmium_sed')->nullable();
            $table->double('Chrome_sed')->nullable();
            $table->double('Cuivre_sed')->nullable();
            $table->double('Zinc_sed')->nullable();
            $table->double('Plomb_sed')->nullable();
            $table->double('Mercure_sed')->nullable();
            $table->double('Calcium_sed')->nullable();
            $table->double('Cobalt_sed')->nullable();
            $table->double('Fer_sed')->nullable();
            $table->double('Magnésium_sed')->nullable();
            $table->double('Manganèse_sed')->nullable();
            $table->double('Nickel_sed')->nullable();
            $table->double('Argent_sed')->nullable();
            $table->double('Molybdène_sed')->nullable();
            $table->double('Aluminum_sed')->nullable();
            // Biotes
            $table->double('Cadmium_bio')->nullable();
            $table->double('Chrome_bio')->nullable();
            $table->double('Cuivre_bio')->nullable();
            $table->double('Zinc_bio')->nullable();
            $table->double('Plomb_bio')->nullable();
            $table->double('Mercure_bio')->nullable();
            $table->double('Calcium_bio')->nullable();
            $table->double('Cobalt_bio')->nullable();
            $table->double('Fer_bio')->nullable();
            $table->double('Magnésium_bio')->nullable();
            $table->double('Manganese_bio')->nullable();
            $table->double('Nickel_bio')->nullable();
            $table->double('Argent_bio')->nullable();
            $table->double('Molybdene_bio')->nullable();
            $table->double('Aluminum_bio')->nullable();



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

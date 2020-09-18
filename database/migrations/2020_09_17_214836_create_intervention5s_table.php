<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntervention5sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervention5s', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('survey_id');
            $table->unsignedInteger('step5_id');
            $table->text('text');
            $table->timestamps();

            $table->foreign('survey_id')
                ->references('id')->on('surveys')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('step5_id')
                ->references('id')->on('step5s')
                ->onUpdate('cascade')
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
        Schema::dropIfExists('intervention5s');
    }
}

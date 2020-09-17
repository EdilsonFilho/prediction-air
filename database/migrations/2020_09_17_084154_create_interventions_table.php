<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interventions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('survey_id');
            $table->unsignedInteger('step_id');
            // $table->unsignedInteger('step1_id')->nullable();
            // $table->unsignedInteger('step2_id')->nullable();
            // $table->unsignedInteger('step3_id')->nullable();
            // $table->unsignedInteger('step4_id')->nullable();
            // $table->unsignedInteger('step5_id')->nullable();
            // $table->unsignedInteger('step6_id')->nullable();
            $table->text('text');
            $table->timestamps();

            // $table->foreign('survey_id')
            //     ->references('id')->on('surveys')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');

            // $table->foreign('step1_id')
            //     ->references('id')->on('step1s')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');

            // $table->foreign('step2_id')
            //     ->references('id')->on('step2s')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');

            // $table->foreign('step3_id')
            //     ->references('id')->on('step3s')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');

            // $table->foreign('step4_id')
            //     ->references('id')->on('step4s')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');

            // $table->foreign('step5_id')
            //     ->references('id')->on('step5s')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');

            // $table->foreign('step6_id')
            //     ->references('id')->on('step6s')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interventions');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStep121OnStep1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('step1s', function (Blueprint $table) {
            $table->text('step1_2_1')
                ->nullable()->after('step1_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('step1s', function (Blueprint $table) {
            $table->dropColumn(['step1_2_1']);
        });
    }
}

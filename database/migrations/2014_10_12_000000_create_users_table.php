<?php

use App\Enums\ProfilesType;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('profile')->default(ProfilesType::OneRoleValue);
            $table->string('name');

            if (config('seed.username') == 'email') {
                $table->string('email')->unique();
                $table->string('phone')->nullable()->unique();
            } else {
                $table->string('email')->nullable()->unique();
                $table->string('phone')->unique();
            }

            $table->string('password');
            $table->string('address')->nullable();
            $table->date('date_birth')->nullable();
            $table->rememberToken();
            $table->datetime('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();
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
        Schema::dropIfExists('users');
    }
}

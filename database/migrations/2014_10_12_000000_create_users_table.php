<?php

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
            $table->string('firstname');
            $table->string('lastname');
            $table->string('age');
            $table->string('tel_number');
            $table->string('email');
            $table->string('addr');
            $table->string('addr_sub_dist');
            $table->string('addr_dist');
            $table->string('addr_prov');
            $table->string('addr_postal_code');
            $table->string('career');
            $table->string('edu_faculty');
            $table->string('edu_major');
            $table->string('edu_place');
            $table->string('edu_level');
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->rememberToken();
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

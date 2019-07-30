<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilePersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_personal_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('profile_id');
            $table->text('bio')->nullable();
            $table->string('dob')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('nationality')->nullable();
            $table->string('sex')->nullable();
            $table->string('marital_status')->nullable();
            $table->json('show');
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
        Schema::dropIfExists('profile_personal_infos');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('project_id');
            $table->unsignedInteger('remote_refferal_id');
            $table->integer('status_id')->default(1);
            $table->string('full_name');
            $table->string('email');
            $table->string('city');
            $table->integer('state_id');
            $table->string('zip');
            $table->string('alias')->unique();
            $table->string('password')->default('tinyapply');
            $table->string('comments')->default('tinyapply');
            $table->string('cell_phone');
            $table->string('phone_checked')->default('n');
            $table->string('empl_agreement')->default('');
            $table->string('was_contract')->default('n');
            $table->string('archived')->default('n');
            $table->string('interviewpreferred')->default('');
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
        Schema::dropIfExists('profiles');
    }
}

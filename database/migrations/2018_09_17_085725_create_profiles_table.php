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
            $table->unsignedInteger('remote_referral_id');
            $table->unsignedInteger('form_id');
            $table->integer('status_id')->default(1);
            $table->string('full_name');
            $table->string('address');
            $table->string('email');
            $table->string('city');
            $table->unsignedInteger('state_id');
            $table->string('zip');
            $table->string('photo_url')->default(url('/') . '/uploads/profiles/photos/default.jpg');
            $table->string('alias')->unique();
            $table->string('password')->default('tinyapply');
            $table->string('comments')->default('tinyapply');
            $table->string('cell_phone');
            $table->string('phone_checked')->default('n');
            $table->string('empl_agreement')->default('');
            $table->string('was_contract')->default('n');
            $table->string('archived')->default('n');
            $table->string('interviewpreferred')->default('');
            $table->timestamp('date_added')->nullable();
            $table->timestamp('date_updated')->nullable();
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

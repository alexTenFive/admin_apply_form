<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->unsignedInteger('project_id');
            $table->unsignedInteger('referral_id');
            $table->string('pdf_url');
            $table->string('thumbnail_url')->default('/public/uploads/thumbnails/default.jpg');
            $table->integer('status')->default(1);
            $table->string('form_unique_part')->unique()->default(url(str_random(40)));
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
        Schema::dropIfExists('forms');
    }
}

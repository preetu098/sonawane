<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Construction', function (Blueprint $table) {
            $table->id();
            $table->string('header',225);
            $table->text('description');
            $table->string('seo_title',225);
            $table->text('seo_desc');
            $table->string('showpage',225);
            $table->string('image',255);

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
        Schema::dropIfExists('Construction');
    }
};

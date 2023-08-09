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
        Schema::create('Lead', function (Blueprint $table) {
            $table->id();
            $table->string('username',255);
            $table->string('phone',255);
            $table->string('email',255);
            $table->string('url',255);
            $table->string('remak',255);
            $table->string('utm_medium',255);
            $table->string('utm_source',255);
            $table->string('lead',255);
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
        Schema::dropIfExists('Lead');
    }
};

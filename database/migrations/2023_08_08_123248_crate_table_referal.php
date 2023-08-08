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
        Schema::create('Referal', function (Blueprint $table) {
            $table->id();
            $table->string('name',225);
            $table->string('email',225);
            $table->string('phone',225);
            $table->string('project_name',225);
            $table->string('flat_number',225);
            $table->string('referal_name',225);
            $table->string('referal_email',225);
            $table->string('referal_phone',225);
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
        Schema::dropIfExists('Referal');
    }
};

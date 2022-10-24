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
        Schema::create('freelancerslot', function (Blueprint $table) {
            $table->id();
            $table->string('id_freelancer');
            $table->string('id_client');
            $table->string('status');
            $table->string('location');
            $table->timestamps();
            $table->timestamps();
            $table->string('description');
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
        Schema::dropIfExists('freelancerslots');
    }
};

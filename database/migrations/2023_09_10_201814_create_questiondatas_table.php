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
        Schema::create('questiondatas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->integer('phone');
            $table->integer('age');
            $table->string('address');

            $table->integer('total');
            $table->integer('PanicDisorder');
            $table->integer('Generalized');
            $table->integer('Separation');
            $table->integer('SocialPhobis');
            $table->integer('total_score')->nullable();
            $table->integer('PanicDisorder_score')->nullable();
            $table->integer('Generalized_score')->nullable();
            $table->integer('SocialPhobis_score')->nullable();
            $table->integer('Separation_score')->nullable();




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
        Schema::dropIfExists('questiondatas');
    }
};

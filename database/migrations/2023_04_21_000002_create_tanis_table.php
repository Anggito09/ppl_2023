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
        Schema::create('tanis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("petani_id");
            $table->string("name");
            $table->string("phone");
            $table->string("descpetani");
            $table->string("desclahan");
            $table->integer("fund");
            $table->timestamps();

            $table->foreign("petani_id")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanis');
    }
};

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
        Schema::create('reactions', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->Integer('to_user_id');
            $table->Integer('from_user_id');
            $table->Integer('status');

            // $table->Integer('to_user_id')->nullable();
            // $table->Integer('from_user_id')->nullable();
            // $table->Integer('status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reactions');
    }
};

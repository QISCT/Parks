<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMfgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mfgs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('db_name')->nullable();
            $table->text('desc')->nullable();
            $table->string('url')->nullable();
            $table->string('logo')->nullable();
            $table->integer('index')->nullable();
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
        Schema::dropIfExists('mfgs');
    }
}

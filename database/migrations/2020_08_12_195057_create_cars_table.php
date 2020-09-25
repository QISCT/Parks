<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('mfg_id', 8)->nullable();
            $table->string('oem_id', 8)->nullable();
            $table->string('type_id', 8)->nullable();
            $table->string('engine_id', 8)->nullable();
            $table->string('transmission_id', 8)->nullable();
            $table->string('drivetrain_id', 8)->nullable();
            $table->string('fuel_id', 8)->nullable();
            $table->string('lot_id', 8)->nullable();
            $table->string('model', 255)->nullable();
            $table->string('num', 255)->nullable();
            $table->string('vin', 255)->nullable();
            $table->string('body_num', 255)->nullable();
            $table->string('stock_num', 255)->nullable();
            $table->year('year')->nullable();
            $table->string('color_ext', 255)->nullable();
            $table->string('color_top', 255)->nullable();
            $table->string('color_driver', 255)->nullable();
            $table->string('color_casket', 255)->nullable();
            $table->string('color_casket_floor', 255)->nullable();
            $table->string('color_curtains', 255)->nullable();
            $table->string('color_pinstripe', 255)->nullable();
            $table->string('paint_code', 255)->nullable();
            $table->unsignedBigInteger('miles')->nullable();
            $table->string('trim', 255)->nullable();
            $table->string('length', 255)->nullable();
            $table->string('casket_length', 255)->nullable();
            $table->string('height', 255)->nullable();
            $table->string('width', 255)->nullable();
            $table->string('width_wheels', 255)->nullable();
            $table->string('weight', 255)->nullable();
            $table->string('origin_id', 8)->nullable();
            $table->string('origin', 255)->nullable();
            $table->string('origin_city', 255)->nullable();
            $table->string('origin_state', 255)->nullable();
            $table->string('status', 255)->nullable();
            $table->text('desc')->nullable();
            $table->text('notes')->nullable();
            $table->unsignedBigInteger('index')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}

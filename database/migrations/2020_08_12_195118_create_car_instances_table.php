<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarInstancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_instances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id'); //->constrained();
            $table->date('received_on')->nullable();
            $table->date('sold_on')->nullable();
            $table->string('status')->default('origin');
            $table->boolean('is_available')->default(false);
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
        Schema::dropIfExists('car_instances');
    }
}

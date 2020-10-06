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
            $table->foreignId('cust_id')->nullable();
            $table->foreignId('sales_order_id')->nullable();

            $table->date('received_on')->nullable();
            $table->date('sold_on')->nullable();

            $table->float('cost_orig')->nullable();
            $table->float('cost_est')->nullable();
            $table->float('cost_repair')->nullable();
            $table->float('cost_floor')->nullable();
            $table->float('cost_total')->nullable();
            $table->float('cost_sugg')->nullable();

            $table->string('cond')->nullable();
            $table->string('status')->nullable();

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

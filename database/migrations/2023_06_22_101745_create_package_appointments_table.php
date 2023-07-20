<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->integer('price')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('payment_option')->nullable();
            $table->string('number')->nullable();
            $table->date('date')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('status')->default(0)->comment('0=pending,1=approved');
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
        Schema::dropIfExists('package_appointments');
    }
}

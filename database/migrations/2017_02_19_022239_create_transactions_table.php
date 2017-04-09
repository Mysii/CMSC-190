<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('branch', 50);
            $table->string('transactionCode', 10)->unique();
            $table->string('transactionType', 10);
            $table->string('clientName', 100);
            $table->string('unit', 100);
            $table->string('serialNo', 100);
            $table->integer('principalLoan');
            $table->integer('tubos');
            $table->integer('penalty')->nullable();
            $table->date('date');
            $table->date('dueDate');
            $table->string('staffAssigned', 100);
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
        Schema::dropIfExists('transactions');
    }
}

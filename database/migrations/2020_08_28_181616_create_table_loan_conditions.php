<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLoanConditions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_conditions', function (Blueprint $table) {
            $table->increments('id');			
			$table->integer('potential_id')->unsigned()->default(1);
			$table->foreign('potential_id')->references('id')->on('potentials');
			$table->integer('document_id')->default(1);
			$table->string('name_loan_condition')->nullable();
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
        Schema::dropIfExists('loan_conditions');
    }
}

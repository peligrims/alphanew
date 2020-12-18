<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifiTableLoanApplication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('loan_applications', function($table) {		
			$table->integer('alimony')->nullable();
			$table->integer('job_related')->nullable();
			$table->integer('expenses_sum1')->nullable();
			$table->integer('expenses_sum2')->nullable();
			$table->integer('expenses_sum3')->nullable();
			$table->integer('expenses_sum4')->nullable();
			$table->integer('expenses_sum5')->nullable();
			$table->integer('expenses_sum6')->nullable();			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToPotential extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
	{
		Schema::table('potentials', function($table) {
		
			
			$table->integer('loan_condition_id')->unsigned()->nullable();
			$table->foreign('loan_condition_id')->references('id')->on('loan_conditions')->onDelete('cascade');
			
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

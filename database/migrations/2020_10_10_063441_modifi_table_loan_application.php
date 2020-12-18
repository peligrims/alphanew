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
			
		
			$table->text('phone2')->nullable();
			$table->text('date_of_birth2')->nullable();
			$table->text('yrsschool2')->nullable();
			$table->text('maritalstatus2')->nullable();
			$table->text('no2')->nullable();
			$table->text('ages2')->nullable();
			$table->text('pstreet2')->nullable();
			$table->text('pcity2')->nullable();
			$table->text('pstate2')->nullable();
			$table->text('pzip2')->nullable();
			$table->text('mstreet2')->nullable();
			$table->text('mcity2')->nullable();
			$table->text('mstate2')->nullable();
			$table->text('mzip2')->nullable();
			$table->text('fstreet2')->nullable();
			$table->text('fcity2')->nullable();
			$table->text('fstate2')->nullable();
			$table->text('fzip2')->nullable();

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

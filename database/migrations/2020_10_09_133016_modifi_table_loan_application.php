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
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('loan_applications', function($table) {
			$table->text('info')->nullable();
			$table->text('race1')->nullable();
			$table->text('race2')->nullable();
			$table->text('ethniccity1')->nullable();
			$table->text('ethniccity2')->nullable();
			$table->text('race1')->nullable();
			$table->text('race2')->nullable();
			$table->text('sex1')->nullable();
			$table->text('sex2')->nullable();
			$table->text('information')->nullable();

		});
    }
}

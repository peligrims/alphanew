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
			$table->string('column_1')->nullable()->default(0);
			$table->string('column_2')->nullable()->default(0);
			$table->string('column_4')->nullable()->default(0);
			$table->string('column_5')->nullable()->default(0);
			
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

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
			$table->unsignedInteger('purchase')->nullable()->default(0);
			$table->unsignedInteger('alterations')->nullable()->default(0);
			$table->unsignedInteger('land')->nullable()->default(0);
			$table->unsignedInteger('refinance')->nullable()->default(0);
			$table->unsignedInteger('prepaid')->nullable()->default(0);
			$table->unsignedInteger('closing')->nullable()->default(0);
			$table->unsignedInteger('discount')->nullable()->default(0);
			$table->unsignedInteger('totalcosts')->nullable()->default(0);
			$table->unsignedInteger('subordinate')->nullable()->default(0);
			$table->unsignedInteger('closingcosts')->nullable()->default(0);
			$table->unsignedInteger('credits')->nullable()->default(0);
			$table->unsignedInteger('loanamount')->nullable()->default(0);
			$table->unsignedInteger('cash')->nullable()->default(0);
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

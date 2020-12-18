<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifiTableLoanApplications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     {
        Schema::table('loan_applications', function($table) {

			$table->string('yla')->nullable()->default(0);
			$table->string('ocl')->nullable()->default(0);
			$table->string('ael')->nullable()->default(0);
			$table->string('pvl')->nullable()->default(0);
			$table->string('prb')->nullable()->default(0);
			$table->string('ear')->nullable()->default(0);
			$table->string('yla1')->nullable()->default(0);
			$table->string('oc')->nullable()->default(0);
			$table->string('ael1')->nullable()->default(0);
			$table->string('cim')->nullable()->default(0);
			$table->string('cit')->nullable()->default(0);

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

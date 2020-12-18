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
			$table->unsignedInteger('lasnameandtitle1')->nullable()->default(0);
			$table->unsignedInteger('las1')->nullable()->default(0);
			$table->unsignedInteger('lasnameandtitle2')->nullable()->default(0);
			$table->unsignedInteger('las2')->nullable()->default(0);
			$table->unsignedInteger('lasnameandtitle3')->nullable()->default(0);
			$table->unsignedInteger('las3')->nullable()->default(0);
			$table->unsignedInteger('las_street1')->nullable()->default(0);
			$table->unsignedInteger('las_city1')->nullable()->default(0);
			$table->unsignedInteger('las_state1')->nullable()->default(0);
			$table->unsignedInteger('las_zip1')->nullable()->default(0);
			$table->unsignedInteger('las_street2')->nullable()->default(0);
			$table->unsignedInteger('las_city2')->nullable()->default(0);
			$table->unsignedInteger('las_state2')->nullable()->default(0);
			$table->unsignedInteger('las_zip2')->nullable()->default(0);
			$table->unsignedInteger('las_street3')->nullable()->default(0);
			$table->unsignedInteger('las_city3')->nullable()->default(0);
			$table->unsignedInteger('las_state3')->nullable()->default(0);
			$table->unsignedInteger('las_zip3')->nullable()->default(0);
			$table->unsignedInteger('ssn1')->nullable()->default(0);
			$table->unsignedInteger('tin1')->nullable()->default(0);
			$table->unsignedInteger('ssn2')->nullable()->default(0);
			$table->unsignedInteger('tin2')->nullable()->default(0);
			$table->unsignedInteger('ssn3')->nullable()->default(0);
			$table->unsignedInteger('tin3')->nullable()->default(0);
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

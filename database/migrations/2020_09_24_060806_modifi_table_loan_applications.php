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
			$table->string('entity')->nullable()->default(0);
			$table->string('en')->nullable()->default(0);
			$table->string('so')->nullable()->default(0);
			$table->string('spbe')->nullable()->default(0);
			$table->string('tin')->nullable()->default(0);
			$table->string('list_members')->nullable()->default(0);
			$table->string('dfo')->nullable()->default(0);
			$table->string('fl')->nullable()->default(0);
			$table->string('title')->nullable()->default(0);
			$table->string('p_street')->nullable()->default(0);
			$table->string('p_city')->nullable()->default(0);
			$table->string('p_state')->nullable()->default(0);
			$table->string('p_zip')->nullable()->default(0);
			$table->string('m_street')->nullable()->default(0);
			$table->string('m_city')->nullable()->default(0);
			$table->string('m_state')->nullable()->default(0);
			$table->string('m_zip')->nullable()->default(0);
			$table->string('bsar')->nullable()->default(0);
			$table->string('fscpapa')->nullable()->default(0);
			$table->string('ami')->nullable()->default(0);

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

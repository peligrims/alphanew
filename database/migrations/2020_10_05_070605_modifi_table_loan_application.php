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
			$table->binary('bo_judgments')->nullable();
			$table->binary('co_judgments')->nullable();
			$table->binary('bo_bankrupt')->nullable();
			$table->binary('co_bankrupt')->nullable();
			$table->binary('bo_foreclosedupon')->nullable();
			$table->binary('co_foreclosedupon')->nullable();
			$table->binary('bo_lawsuit')->nullable();
			$table->binary('co_lawsuit')->nullable();
			$table->binary('bo_obligated')->nullable();
			$table->binary('co_obligated')->nullable();			
			$table->binary('bo_pay_alimony')->nullable();
			$table->binary('co_pay_alimony')->nullable();
			$table->binary('bo_down_payment')->nullable();
			$table->binary('co_down_payment')->nullable();			
			$table->binary('bo_co_maker')->nullable();			
			$table->binary('co_co_maker')->nullable();			
			$table->binary('bo_citizen')->nullable();			
			$table->binary('co_citizen')->nullable();			
			$table->binary('bo_delinquent')->nullable();
			$table->binary('co_delinquent')->nullable();
			$table->binary('bo_resident')->nullable();
			$table->binary('co_resident')->nullable();
			$table->binary('bo_pri_residence')->nullable();
			$table->binary('co_pri_residence')->nullable();
			$table->binary('bo_ownership')->nullable();
			$table->binary('co_ownership')->nullable();
			$table->binary('bo_typeofproperty')->nullable();
			$table->binary('co_typeofproperty')->nullable();
			$table->binary('bo_holdtitle')->nullable();
			$table->binary('co_holdtitle')->nullable();

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

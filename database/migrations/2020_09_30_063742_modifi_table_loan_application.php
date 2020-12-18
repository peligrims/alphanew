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
			$table->unsignedInteger('jointly')->nullable()->default(0);
			$table->unsignedInteger('doi')->nullable()->default(0);			
			$table->unsignedInteger('monthly_amount')->nullable()->default(0);			
			$table->unsignedInteger('row1')->nullable()->default(0);			
			$table->unsignedInteger('row2')->nullable()->default(0);
			$table->unsignedInteger('savings_accounts')->nullable()->default(0);
			$table->unsignedInteger('savings_accounts1')->nullable()->default(0);
			$table->unsignedInteger('savings_accounts2')->nullable()->default(0);
			$table->unsignedInteger('savings_accounts3')->nullable()->default(0);
			$table->unsignedInteger('savings_accounts4')->nullable()->default(0);
			$table->unsignedInteger('savings_accounts5')->nullable()->default(0);
			$table->unsignedInteger('savings_accounts6')->nullable()->default(0);
			$table->unsignedInteger('nameofbank')->nullable()->default(0);
			$table->unsignedInteger('nameofbank1')->nullable()->default(0);
			$table->unsignedInteger('nameofbank2')->nullable()->default(0);
			$table->unsignedInteger('acctno')->nullable()->default(0);
			$table->unsignedInteger('acctno1')->nullable()->default(0);
			$table->unsignedInteger('acctno2')->nullable()->default(0);
			$table->unsignedInteger('acctsum')->nullable()->default(0);
			$table->unsignedInteger('acctsum1')->nullable()->default(0);
			$table->unsignedInteger('acctsum2')->nullable()->default(0);			
			$table->unsignedInteger('stocksbonds')->nullable()->default(0);			
			$table->unsignedInteger('stocksbondssum')->nullable()->default(0);
			$table->unsignedInteger('nameinsurance')->nullable()->default(0);
			$table->unsignedInteger('faceamount')->nullable()->default(0);
			$table->unsignedInteger('insurancesum')->nullable()->default(0);			
			$table->unsignedInteger('realestateownedsum')->nullable()->default(0);
			$table->unsignedInteger('business')->nullable()->default(0);
			$table->unsignedInteger('businesssum')->nullable()->default(0);
			$table->unsignedInteger('auto')->nullable()->default(0);
			$table->unsignedInteger('autosum')->nullable()->default(0);
			$table->unsignedInteger('assets')->nullable()->default(0);
			$table->unsignedInteger('assetssum')->nullable()->default(0);
			$table->unsignedInteger('totala')->nullable()->default(0);			
			$table->unsignedInteger('liabilities1')->nullable()->default(0);
			$table->unsignedInteger('nameliabilities1')->nullable()->default(0);
			$table->unsignedInteger('acctliabilities1')->nullable()->default(0);
			$table->unsignedInteger('payment1')->nullable()->default(0);
			$table->unsignedInteger('unpaidbalance1')->nullable()->default(0);
			$table->unsignedInteger('liabilities2')->nullable()->default(0);
			$table->unsignedInteger('nameliabilities2')->nullable()->default(0);
			$table->unsignedInteger('acctliabilities2')->nullable()->default(0);
			$table->unsignedInteger('payment2')->nullable()->default(0);
			$table->unsignedInteger('unpaidbalance2')->nullable()->default(0);
			$table->unsignedInteger('liabilities3')->nullable()->default(0);
			$table->unsignedInteger('nameliabilities3')->nullable()->default(0);
			$table->unsignedInteger('acctliabilities3')->nullable()->default(0);
			$table->unsignedInteger('payment3')->nullable()->default(0);
			$table->unsignedInteger('unpaidbalance3')->nullable()->default(0);
			$table->unsignedInteger('liabilities4')->nullable()->default(0);
			$table->unsignedInteger('nameliabilities4')->nullable()->default(0);
			$table->unsignedInteger('acctliabilities4')->nullable()->default(0);
			$table->unsignedInteger('payment4')->nullable()->default(0);
			$table->unsignedInteger('unpaidbalance4')->nullable()->default(0);
			$table->unsignedInteger('liabilities5')->nullable()->default(0);
			$table->unsignedInteger('nameliabilities5')->nullable()->default(0);
			$table->unsignedInteger('acctliabilities5')->nullable()->default(0);
			$table->unsignedInteger('payment5')->nullable()->default(0);
			$table->unsignedInteger('unpaidbalance5')->nullable()->default(0);
			$table->unsignedInteger('liabilities6')->nullable()->default(0);
			$table->unsignedInteger('nameliabilities6')->nullable()->default(0);
			$table->unsignedInteger('acctliabilities6')->nullable()->default(0);
			$table->unsignedInteger('payment6')->nullable()->default(0);
			$table->unsignedInteger('unpaidbalance6')->nullable()->default(0);
			$table->unsignedInteger('totalb')->nullable()->default(0);
			$table->unsignedInteger('difference')->nullable()->default(0);
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
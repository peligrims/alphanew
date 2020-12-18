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
			$table->text('lcp_beneficiary1')->nullable();
			$table->text('lcp_lien_position1')->nullable();
			$table->text('lcp_interest_rate1')->nullable();
			$table->text('lcp_amortization_type1')->nullable();
			$table->text('lcp_monthly_payment1')->nullable();
			$table->text('lcp_balloon_payment_d1')->nullable();
			$table->text('lcp_balloon_payment_a1')->nullable();
			$table->text('lcp_lwr_on_title1')->nullable();
			$table->text('lcp_lws1')->nullable();
			$table->text('lcp_lwpo_from_lp1')->nullable();


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

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
			$table->string('nae')->nullable()->default(0);
			$table->string('self_employed')->nullable()->default(0);
			$table->string('ytj')->nullable()->default(0);
			$table->string('yelwp')->nullable()->default(0);
			$table->string('pttb')->nullable()->default(0);
			$table->string('bp')->nullable()->default(0);
			$table->string('nae1')->nullable()->default(0);
			$table->string('self_employed1')->nullable()->default(0);
			$table->string('ytj1')->nullable()->default(0);
			$table->string('yelwp1')->nullable()->default(0);
			$table->string('pttb1')->nullable()->default(0);
			$table->string('bp1')->nullable()->default(0);
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

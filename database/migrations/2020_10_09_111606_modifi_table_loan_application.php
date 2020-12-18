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
			$table->text('las_phone1')->nullable();
			$table->text('las_email1')->nullable();
			$table->text('las_phone2')->nullable();
			$table->text('las_email2')->nullable();
			$table->text('las_phone3')->nullable();
			$table->text('las_email3')->nullable();
			
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

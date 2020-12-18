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
			$table->text('bei')->nullable();
			$table->text('bei1')->nullable();
			$table->text('ren')->nullable();
			$table->text('ov')->nullable();
			$table->text('ov1')->nullable();
			$table->text('fm')->nullable();
			$table->text('fm1')->nullable();
			$table->text('bo')->nullable();
			$table->text('bo1')->nullable();
			$table->text('sm')->nullable();
			$table->text('sm1')->nullable();
			$table->text('co')->nullable();
			$table->text('co1')->nullable();
			$table->text('of')->nullable();
			$table->text('of1')->nullable();
			$table->text('di')->nullable();
			$table->text('di1')->nullable();
			$table->text('hi')->nullable();
			$table->text('hi1')->nullable();
			$table->text('nr')->nullable();
			$table->text('nr1')->nullable();
			$table->text('re')->nullable();
			$table->text('re1')->nullable();
			$table->text('ot')->nullable();
			$table->text('ot1')->nullable();
			$table->text('mi')->nullable();
			$table->text('mi1')->nullable();			
			$table->text('ho')->nullable();
			$table->text('ho1')->nullable();
			$table->text('to')->nullable();
			$table->text('to1')->nullable();
			$table->text('to2')->nullable();
			$table->text('to3')->nullable();
			$table->text('to4')->nullable();
			
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

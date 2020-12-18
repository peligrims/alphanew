<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTermSheets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('term_sheets', function (Blueprint $table) {
			$table->increments('id');
			$table->string('borrower1')->nullable();
			$table->string('spa_street1')->nullable();
			$table->string('spa_city1')->nullable();
			$table->string('spa_state1')->nullable();
			$table->string('spa_zip1')->nullable();
			$table->string('eva1')->nullable();
			$table->string('loan_amount1')->nullable();
			$table->string('use_of_funds')->nullable();
			$table->string('max_ltv')->nullable();
			$table->string('term')->nullable();
			$table->string('interest_rate')->nullable();
			$table->string('loan_ext_option')->nullable();
			$table->string('amortization')->nullable();
			$table->string('yield_maintenance')->nullable();
			$table->string('structure')->nullable();
			$table->string('original_fee')->nullable();
			$table->string('exit_fee')->nullable();
			$table->string('broker_fee')->nullable();
			$table->string('due_diligence_fee')->nullable();
			$table->integer('potential_id')->unsigned()->nullable();
			$table->foreign('potential_id')->references('id')->on('potentials');
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('term_sheets');
    }
}

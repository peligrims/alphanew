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
			$table->unsignedInteger('spa_street1')->nullable()->default(0);
			$table->unsignedInteger('spa_city1')->nullable()->default(0);
			$table->unsignedInteger('spa_state1')->nullable()->default(0);
			$table->unsignedInteger('spa_zip1')->nullable()->default(0);
			$table->unsignedInteger('spa_street2')->nullable()->default(0);
			$table->unsignedInteger('spa_city2')->nullable()->default(0);
			$table->unsignedInteger('spa_state2')->nullable()->default(0);
			$table->unsignedInteger('spa_zip2')->nullable()->default(0);
			$table->unsignedInteger('spa_street3')->nullable()->default(0);
			$table->unsignedInteger('spa_city3')->nullable()->default(0);
			$table->unsignedInteger('spa_state3')->nullable()->default(0);
			$table->unsignedInteger('spa_zip3')->nullable()->default(0);
			$table->unsignedInteger('spa_street4')->nullable()->default(0);
			$table->unsignedInteger('spa_city4')->nullable()->default(0);
			$table->unsignedInteger('spa_state4')->nullable()->default(0);
			$table->unsignedInteger('spa_zip4')->nullable()->default(0);
			$table->unsignedInteger('type1')->nullable()->default(0);
			$table->unsignedInteger('type2')->nullable()->default(0);
			$table->unsignedInteger('type3')->nullable()->default(0);
			$table->unsignedInteger('type4')->nullable()->default(0);
			$table->unsignedInteger('a1')->nullable()->default(0);
			$table->unsignedInteger('b1')->nullable()->default(0);
			$table->unsignedInteger('c1')->nullable()->default(0);
			$table->unsignedInteger('d1')->nullable()->default(0);
			$table->unsignedInteger('e1')->nullable()->default(0);
			$table->unsignedInteger('f1')->nullable()->default(0);
			$table->unsignedInteger('g1')->nullable()->default(0);
			
			$table->unsignedInteger('a2')->nullable()->default(0);
			$table->unsignedInteger('b2')->nullable()->default(0);
			$table->unsignedInteger('c2')->nullable()->default(0);
			$table->unsignedInteger('d2')->nullable()->default(0);
			$table->unsignedInteger('e2')->nullable()->default(0);
			$table->unsignedInteger('f2')->nullable()->default(0);
			$table->unsignedInteger('g2')->nullable()->default(0);
			
			$table->unsignedInteger('a3')->nullable()->default(0);
			$table->unsignedInteger('b3')->nullable()->default(0);
			$table->unsignedInteger('c3')->nullable()->default(0);
			$table->unsignedInteger('d3')->nullable()->default(0);
			$table->unsignedInteger('e3')->nullable()->default(0);
			$table->unsignedInteger('f3')->nullable()->default(0);
			$table->unsignedInteger('g3')->nullable()->default(0);
			
			$table->unsignedInteger('a4')->nullable()->default(0);
			$table->unsignedInteger('b4')->nullable()->default(0);
			$table->unsignedInteger('c4')->nullable()->default(0);
			$table->unsignedInteger('d4')->nullable()->default(0);
			$table->unsignedInteger('e4')->nullable()->default(0);
			$table->unsignedInteger('f4')->nullable()->default(0);
			$table->unsignedInteger('g4')->nullable()->default(0);
			$table->unsignedInteger('apa')->nullable()->default(0);				
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

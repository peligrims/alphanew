<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToTermSheets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
	{
		Schema::table('term_sheets', function($table) {
		$table->tinyInteger ('lc_05')->nullable()->default(0);
		$table->string('comm_05',200)->nullable();
		$table->string('images_05',100);
		$table->tinyInteger ('lc_06')->nullable()->default(0);
		$table->string('comm_06',200)->nullable();
		$table->string('images_06',100);
		$table->tinyInteger ('lc_07')->nullable()->default(0);
		$table->string('comm_07',200)->nullable();
		$table->string('images_07',100);
		$table->tinyInteger ('lc_08')->nullable()->default(0);
		$table->string('comm_08',200)->nullable();
		$table->string('images_09',100);
		$table->tinyInteger ('lc_09')->nullable()->default(0);
		$table->string('comm_09',200)->nullable();		
		$table->tinyInteger ('lc_10')->nullable()->default(0);
		$table->string('comm_10',200)->nullable();
		$table->string('images_10',100);
		$table->tinyInteger ('lc_11')->nullable()->default(0);
		$table->string('comm_11',200)->nullable();
		$table->string('images_11',100);
		$table->tinyInteger ('lc_12')->nullable()->default(0);
		$table->string('comm_12',200)->nullable();
		$table->string('images_12',100);
		$table->tinyInteger ('lc_13')->nullable()->default(0);
		$table->string('comm_13',200)->nullable();
		$table->string('images_13',100);
		$table->tinyInteger ('lc_14')->nullable()->default(0);
		$table->string('comm_14',200)->nullable();
		$table->string('images_14',100);
		$table->tinyInteger ('lc_15')->nullable()->default(0);
		$table->string('comm_15',200)->nullable();
		$table->string('images_15',100);
		$table->tinyInteger ('lc_16')->nullable()->default(0);
		$table->string('comm_16',200)->nullable();
		$table->string('images_16',100);
		$table->tinyInteger ('lc_17')->nullable()->default(0);
		$table->string('comm_17',200)->nullable();
		$table->string('images_17',100);
		$table->tinyInteger ('lc_18')->nullable()->default(0);
		$table->string('comm_18',200)->nullable();
		$table->string('images_18',100);
		$table->tinyInteger ('lc_19')->nullable()->default(0);
		$table->string('comm_19',200)->nullable();
		$table->string('images_19',100);
		$table->tinyInteger ('lc_20')->nullable()->default(0);
		$table->string('comm_20',200)->nullable();
		$table->string('images_20',100);
		$table->tinyInteger ('lc_21')->nullable()->default(0);
		$table->string('comm_21',200)->nullable();
		$table->string('images_21',100);
		$table->tinyInteger ('lc_22')->nullable()->default(0);
		$table->string('comm_22',200)->nullable();
		$table->string('images_22',100);
		$table->tinyInteger ('lc_23')->nullable()->default(0);
		$table->string('comm_23',200)->nullable();
		$table->string('images_23',100);
		$table->tinyInteger ('lc_24')->nullable()->default(0);
		$table->string('comm_24',200)->nullable();
		$table->string('images_24',100);
		$table->tinyInteger ('lc_25')->nullable()->default(0);
		$table->string('comm_25',200)->nullable();
		$table->string('images_25',100);
		
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

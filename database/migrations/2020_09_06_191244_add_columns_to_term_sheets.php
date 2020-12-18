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
		Schema::table('users', function($table) {
			$table->tinyInteger ('lc_01')->nullable()->default(0);
			$table->string('comm_01',200)->nullable();
			$table->string('images_01',100);
			$table->tinyInteger ('lc_02')->nullable()->default(0);
			$table->string('comm_02',200)->nullable();
			$table->string('images_02',100);
			$table->tinyInteger ('lc_03')->nullable()->default(0);
			$table->string('comm_03',200)->nullable();
			$table->string('images_03',100);
			$table->tinyInteger ('lc_04')->nullable()->default(0);
			$table->string('comm_04',200)->nullable();
			$table->string('images_04',100);			
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

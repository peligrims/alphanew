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
				
				$table->tinyInteger ('lc_26')->nullable()->default(0);
				$table->string('comm_26',200)->nullable();
				$table->string('images_26',100);
				$table->tinyInteger ('lc_27')->nullable()->default(0);
				$table->string('comm_27',200)->nullable();
				$table->string('images_27',100);
				$table->tinyInteger ('lc_28')->nullable()->default(0);
				$table->string('comm_28',200)->nullable();
				$table->string('images_28',100);
				$table->tinyInteger ('lc_29')->nullable()->default(0);
				$table->string('comm_29',200)->nullable();
				$table->string('images_29',100);
				$table->tinyInteger ('lc_30')->nullable()->default(0);
				$table->string('comm_30',200)->nullable();
				$table->string('images_30',100);
				$table->tinyInteger ('lc_31')->nullable()->default(0);
				$table->string('comm_31',200)->nullable();
				$table->string('images_31',100);
				$table->tinyInteger ('lc_32')->nullable()->default(0);
				$table->string('comm_32',200)->nullable();
				$table->string('images_32',100);
				$table->tinyInteger ('lc_33')->nullable()->default(0);
				$table->string('comm_33',200)->nullable();
				$table->string('images_33',100);
				$table->tinyInteger ('lc_34')->nullable()->default(0);
				$table->string('comm_34',200)->nullable();
				$table->string('images_34',100);
				$table->tinyInteger ('lc_35')->nullable()->default(0);
				$table->string('comm_35',200)->nullable();
				$table->string('images_35',100);
				$table->tinyInteger ('lc_36')->nullable()->default(0);
				$table->string('comm_36',200)->nullable();
				$table->string('images_36',100);

				$table->tinyInteger ('lc_37')->nullable()->default(0);
				$table->string('comm_37',200)->nullable();
				$table->string('images_37',100);
				$table->tinyInteger ('lc_38')->nullable()->default(0);
				$table->string('comm_38',200)->nullable();
				$table->string('images_38',100);
				$table->tinyInteger ('lc_39')->nullable()->default(0);
				$table->string('comm_39',200)->nullable();
				$table->string('images_39',100);
				$table->tinyInteger ('lc_40')->nullable()->default(0);
				$table->string('comm_40',200)->nullable();
				$table->string('images_40',100);
				
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

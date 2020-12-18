<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DelCollumsToPotentials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('loan_conditions', function (Blueprint $table) {
			$table->integer('potential_id')->unsigned()->default(1);
			$table->foreign('potential_id')->references('id')->on('users');
		});
    }
}

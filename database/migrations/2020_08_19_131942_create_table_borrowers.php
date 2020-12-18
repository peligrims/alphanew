<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBorrowers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowers', function (Blueprint $table) {
			$table->increments('id');
			$table->string('potential_name')->nullable();
			$table->string('account_name')->nullable();			
			$table->string('contact_name')->nullable();
			$table->string('phone1')->nullable();
			$table->string('email1')->nullable();
			$table->string('city')->nullable();
			$table->string('street')->nullable();
			$table->string('state')->nullable();
			$table->string('zip')->nullable();
			$table->string('citizenship')->nullable();
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
        Schema::dropIfExists('borrowers');
    }
}

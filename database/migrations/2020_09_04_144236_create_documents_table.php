<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('documents', function (Blueprint $table) {
		$table->increments('id');
		$table->integer('loan_condition_id')->unsigned()->default(0);
		$table->foreign('loan_condition_id')->references('id')->on('loan_conditions');
		$table->integer('potential_id')->unsigned()->default(0);
		$table->foreign('potential_id')->references('id')->on('potentials');
		$table->string('comments')->nullable();
		$table->string('images',100)->nullable();
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
        Schema::dropIfExists('documents');
    }
}

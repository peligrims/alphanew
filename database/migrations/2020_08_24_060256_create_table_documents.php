<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDocuments extends Migration
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
			$table->string('potential_name')->nullable();			
			$table->string('sla')->nullable();
			$table->string('description')->nullable();			
			$table->string('articles')->nullable();
			$table->string('description1')->nullable();			
			$table->string('pfs')->nullable();
			$table->string('description2')->nullable();			
			$table->string('bank_statements')->nullable();
			$table->string('description3')->nullable();			
			$table->string('ytd')->nullable();
			$table->string('description4')->nullable();			
			$table->string('proforma_financials')->nullable();
			$table->string('description5')->nullable();			
			$table->string('wcb')->nullable();
			$table->string('description6')->nullable();			
			$table->string('csma')->nullable();
			$table->string('description7')->nullable();			
			$table->string('operating_history')->nullable();
			$table->string('description8')->nullable();			
			$table->string('nar')->nullable();
			$table->string('description9')->nullable();
			$table->string('report1')->nullable();
			$table->string('description10')->nullable();			
			$table->string('cpft')->nullable();
			$table->string('description11')->nullable();	
			$table->string('des')->nullable();
			$table->string('description12')->nullable();			
			$table->string('license')->nullable();
			$table->string('description13')->nullable();			
			$table->string('report2')->nullable();
			$table->string('description14')->nullable();			
			$table->string('report3')->nullable();
			$table->string('description15')->nullable();					
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

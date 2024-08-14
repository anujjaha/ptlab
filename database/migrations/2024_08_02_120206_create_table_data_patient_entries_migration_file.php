<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataPatientEntriesMigrationFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_patient_entries', function (Blueprint $table) {
				$table->bigIncrements('id'); 
			$table->integer('account_id')->nullable(); 
			$table->string('name')->nullable(); 
			$table->string('mobile')->nullable(); 
			$table->string('gender')->nullable(); 
			$table->integer('age')->nullable(); 
			$table->string('email')->nullable(); 
			$table->string('other_contact_no')->nullable(); 
			$table->string('address')->nullable(); 
			$table->string('city')->nullable(); 
			$table->string('state')->nullable(); 
			$table->string('pin')->nullable(); 
			$table->longText('notes')->nullable(); 
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
        Schema::dropIfExists('data_patient_entries');
    }
}
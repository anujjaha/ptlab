<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataAccountEntriesMigrationFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_account_entries', function (Blueprint $table) {
				$table->bigIncrements('id'); 
			$table->integer('user_id')->nullable(); 
			$table->string('title')->nullable(); 
			$table->integer('status')->nullable(); 
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
        Schema::dropIfExists('data_account_entries');
    }
}
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataSubCasteMigrationFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_sub_caste', function (Blueprint $table) {
				$table->bigIncrements('id'); 
			$table->integer('caste_id')->nullable()->default("1"); 
			$table->string('title')->nullable()->default("nagar"); 
			$table->integer('status')->nullable()->default("1"); 
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
        Schema::dropIfExists('data_sub_caste');
    }
}
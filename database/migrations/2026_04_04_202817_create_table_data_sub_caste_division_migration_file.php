<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataSubCasteDivisionMigrationFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_sub_caste_division', function (Blueprint $table) {
				$table->bigIncrements('id'); 
			$table->integer('sub_caste_id')->nullable()->default("1"); 
			$table->string('title')->nullable()->default("visnagara"); 
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
        Schema::dropIfExists('data_sub_caste_division');
    }
}
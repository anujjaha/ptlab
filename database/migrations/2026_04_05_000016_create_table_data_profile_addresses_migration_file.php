<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataProfileAddressesMigrationFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_profile_addresses', function (Blueprint $table) {
				$table->bigIncrements('id'); 
			$table->integer('profile_id')->nullable(); 
			$table->string('address_line1')->nullable(); 
			$table->string('address_line2')->nullable(); 
			$table->integer('city_id')->nullable(); 
			$table->integer('state_id')->nullable(); 
			$table->string('pin')->nullable(); 
			$table->integer('is_current')->nullable()->default("1"); 
			$table->integer('is_own')->nullable()->default("1"); 
			$table->string('rent')->nullable(); 
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
        Schema::dropIfExists('data_profile_addresses');
    }
}
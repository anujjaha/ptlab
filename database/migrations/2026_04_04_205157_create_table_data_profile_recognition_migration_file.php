<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataProfileRecognitionMigrationFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_profile_recognition', function (Blueprint $table) {
				$table->bigIncrements('id'); 
			$table->integer('profile_id')->nullable(); 
			$table->string('icon')->nullable(); 
			$table->string('title')->nullable(); 
			$table->longText('notes')->nullable(); 
			$table->string('external_link_title')->nullable(); 
			$table->string('external_links')->nullable(); 
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
        Schema::dropIfExists('data_profile_recognition');
    }
}
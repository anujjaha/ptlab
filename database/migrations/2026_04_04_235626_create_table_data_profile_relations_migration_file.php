<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataProfileRelationsMigrationFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_profile_relations', function (Blueprint $table) {
				$table->bigIncrements('id'); 
			$table->integer('profile_id')->nullable(); 
			$table->integer('related_profile_id')->nullable(); 
			$table->string('relation_type')->nullable(); 
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
        Schema::dropIfExists('data_profile_relations');
    }
}
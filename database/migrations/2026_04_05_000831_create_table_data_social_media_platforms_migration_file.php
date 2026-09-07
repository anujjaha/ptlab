<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataSocialMediaPlatformsMigrationFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_social_media_platforms', function (Blueprint $table) {
				$table->bigIncrements('id'); 
			$table->string('title')->nullable(); 
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
        Schema::dropIfExists('data_social_media_platforms');
    }
}
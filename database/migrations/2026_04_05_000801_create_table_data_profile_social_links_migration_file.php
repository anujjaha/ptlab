<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataProfileSocialLinksMigrationFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_profile_social_links', function (Blueprint $table) {
				$table->bigIncrements('id'); 
			$table->integer('profile_id')->nullable(); 
			$table->integer('social_platform_id')->nullable(); 
			$table->string('social_url')->nullable(); 
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
        Schema::dropIfExists('data_profile_social_links');
    }
}
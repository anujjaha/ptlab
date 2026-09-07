<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataProfileProfessionalDetailsMigrationFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_profile_professional_details', function (Blueprint $table) {
				$table->bigIncrements('id'); 
			$table->integer('profile_id')->nullable(); 
			$table->integer('profession_category_id')->nullable(); 
			$table->integer('business_id')->nullable(); 
			$table->string('education')->nullable(); 
			$table->string('company')->nullable(); 
			$table->string('occupation')->nullable(); 
			$table->string('job_title')->nullable(); 
			$table->integer('is_government')->nullable(); 
			$table->integer('is_retired')->nullable(); 
			$table->integer('is_business')->nullable(); 
			$table->string('business_title')->nullable(); 
			$table->longText('business_details')->nullable(); 
			$table->integer('is_social')->nullable(); 
			$table->longText('social_details')->nullable(); 
			$table->longText('notes')->nullable(); 
			$table->string('overall_experience')->nullable(); 
			$table->integer('is_student')->nullable(); 
			$table->integer('is_open')->nullable(); 
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
        Schema::dropIfExists('data_profile_professional_details');
    }
}
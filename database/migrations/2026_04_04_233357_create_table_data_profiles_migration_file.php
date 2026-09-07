<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataProfilesMigrationFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_profiles', function (Blueprint $table) {
				$table->bigIncrements('id'); 
			$table->integer('category_id')->nullable()->default("1"); 
			$table->integer('caste_id')->nullable()->default("1"); 
			$table->integer('sub_caste_id')->nullable(); 
			$table->integer('sub_cast_division_id')->nullable(); 
			$table->integer('profile_tag_id')->nullable(); 
			$table->integer('gotra_id')->nullable(); 
			$table->string('surname')->nullable(); 
			$table->string('firstname')->nullable(); 
			$table->string('title')->nullable(); 
			$table->string('gender')->nullable(); 
			$table->date('birthdate')->nullable(); 
			$table->date('latedate')->nullable(); 
			$table->string('slug')->nullable(); 
			$table->string('profile_image')->nullable()->default("profile.png"); 
			$table->string('banner_image')->nullable()->default("banner.png"); 
			$table->string('primary_mobile')->nullable(); 
			$table->string('business_mobile')->nullable(); 
			$table->string('email')->nullable(); 
			$table->integer('status')->nullable()->default("1"); 
			$table->integer('mobile_visibility')->nullable()->default("1"); 
			$table->integer('contact_visibility')->nullable()->default("1"); 
			$table->integer('user_id')->nullable(); 
			$table->integer('is_verify')->nullable()->default("1"); 
			$table->datetime('verify_at')->nullable(); 
			$table->integer('refer_by')->nullable(); 
			$table->longText('personal_notes')->nullable(); 
			$table->longText('admin_notes')->nullable(); 
			$table->integer('is_paid')->nullable(); 
			$table->longText('remarks')->nullable(); 
			$table->string('refer_link')->nullable(); 
			$table->datetime('last_active')->nullable(); 
			$table->integer('visit_count')->nullable(); 
			$table->integer('is_original')->nullable()->default("1"); 
			$table->longText('flag_info')->nullable(); 
			$table->longText('hobby')->nullable(); 
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
        Schema::dropIfExists('data_profiles');
    }
}
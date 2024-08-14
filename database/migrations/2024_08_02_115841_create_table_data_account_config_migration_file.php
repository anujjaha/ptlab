<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataAccountConfigMigrationFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_account_config', function (Blueprint $table) {
				$table->bigIncrements('id'); 
			$table->integer('account_id')->nullable(); 
			$table->integer('is_watsapp')->nullable(); 
			$table->integer('is_email')->nullable(); 
			$table->string('email_host')->nullable(); 
			$table->string('email_password')->nullable(); 
			$table->integer('monthly_limit')->nullable(); 
			$table->integer('daily_limit')->nullable(); 
			$table->string('wa_template_url')->nullable(); 
			$table->integer('wa_template_id')->nullable(); 
			$table->string('wa_phone_number')->nullable(); 
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
        Schema::dropIfExists('data_account_config');
    }
}
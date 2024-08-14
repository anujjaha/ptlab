<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataPatientReportMigrationFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_patient_report', function (Blueprint $table) {
				$table->bigIncrements('id'); 
			$table->integer('account_id')->nullable(); 
			$table->integer('sample_collection_detail_id')->nullable(); 
			$table->float('total_cost', 10 , 3)->nullable(); 
			$table->integer('status')->nullable(); 
			$table->integer('is_watsapp')->nullable(); 
			$table->integer('is_email')->nullable(); 
			$table->datetime('watsapp_time')->nullable(); 
			$table->datetime('email_time')->nullable(); 
			$table->integer('is_sent')->nullable(); 
			$table->integer('sent_count')->nullable(); 
			$table->string('attachment')->nullable(); 
			$table->datetime('attachment_time')->nullable(); 
			$table->string('reference_by')->nullable(); 
			$table->string('unique_id')->nullable(); 
			$table->datetime('collected_on')->nullable(); 
			$table->datetime('received_on')->nullable(); 
			$table->datetime('reported_on')->nullable(); 
			$table->string('notes')->nullable(); 
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
        Schema::dropIfExists('data_patient_report');
    }
}
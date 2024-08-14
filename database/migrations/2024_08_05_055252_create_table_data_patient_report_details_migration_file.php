<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataPatientReportDetailsMigrationFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_patient_report_details', function (Blueprint $table) {
				$table->bigIncrements('id'); 
			$table->integer('account_id')->nullable(); 
			$table->integer('patient_id')->nullable(); 
			$table->integer('report_type_id')->nullable(); 
			$table->float('total_cost', 10 , 3)->nullable(); 
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
        Schema::dropIfExists('data_patient_report_details');
    }
}
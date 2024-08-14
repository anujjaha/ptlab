<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataSampleCollectionDetailsMigrationFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_sample_collection_details', function (Blueprint $table) {
				$table->bigIncrements('id'); 
			$table->integer('account_id')->nullable(); 
			$table->integer('sample_collector_id')->nullable(); 
			$table->integer('patient_id')->nullable(); 
			$table->datetime('collected_at')->nullable(); 
			$table->string('collected_from')->nullable(); 
			$table->float('pickup_cost', 10 , 3)->nullable(); 
			$table->longText('note')->nullable(); 
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
        Schema::dropIfExists('data_sample_collection_details');
    }
}
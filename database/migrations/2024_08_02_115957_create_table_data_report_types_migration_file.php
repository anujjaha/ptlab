<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataReportTypesMigrationFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_report_types', function (Blueprint $table) {
				$table->bigIncrements('id'); 
			$table->integer('account_id')->nullable(); 
			$table->string('title')->nullable(); 
			$table->float('cost', 10 , 3)->nullable(); 
			$table->timestamp('appx_time')->nullable(); 
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
        Schema::dropIfExists('data_report_types');
    }
}
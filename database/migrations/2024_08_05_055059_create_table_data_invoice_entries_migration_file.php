<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataInvoiceEntriesMigrationFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_invoice_entries', function (Blueprint $table) {
				$table->bigIncrements('id'); 
			$table->integer('account_id')->nullable(); 
			$table->integer('patient_id')->nullable(); 
			$table->integer('patient_report_id')->nullable(); 
			$table->float('pickup_cost', 10 , 3)->nullable(); 
			$table->float('sub_total', 10 , 3)->nullable(); 
			$table->float('gst', 10 , 3)->nullable(); 
			$table->float('gst_total', 10 , 3)->nullable(); 
			$table->float('total', 10 , 3)->nullable(); 
			$table->string('paid_by')->nullable(); 
			$table->string('paid_ref')->nullable(); 
			$table->string('invoice_number')->nullable(); 
			$table->longText('notes')->nullable(); 
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
        Schema::dropIfExists('data_invoice_entries');
    }
}
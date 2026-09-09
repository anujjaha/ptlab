<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_profiles', function (Blueprint $table) {
            $table->integer('priority')->default(0)->comment('0=Default,1=Medium,2=High'); 
            $table->integer('member_type')->default(0)->comment('0=Late,1=Head of Family,2=Super Senior, 3=Senior Member, 4=NRI, 5=Youth, 6=Child'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
};

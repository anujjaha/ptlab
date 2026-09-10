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
            $table->string('fathername')->nullable()->after('firstname');
            $table->string('mothername')->nullable()->after('fathername');
            $table->string('spousename')->nullable()->after('mothername');
            $table->text('about_me')->nullable();
            $table->integer('is_nri')->default(0);
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

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
        Schema::table('apirecords', function (Blueprint $table) {
            $table->dropColumn(['hfield', 'htype', 'hdescription', 'pfield' , 'pdescription','ptype', 'sfield', 'stype', 'sdescription', 'efield', 'etype' ,'edescription' ]);
    
            $table->json('header');
            $table->json('parameter');
            $table->json('success');
            $table->json('error');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('apirecords', function (Blueprint $table) {
               });
    }
};

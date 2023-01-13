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
        Schema::create('apirecords', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('api_id');
            $table->string('module');
            $table->string('submodule');
            $table->string('hosting');
            $table->string('name');
            $table->string('endpoint');
            $table->string('method');  
            $table->string('responseformat');
            $table->longText('apiresponse');
            $table->string('apipurpose');
            $table->longText('casevalidation');
            $table->longText('errorresponse');
            $table->longText('successresponse');
            $table->longText('failresponse');
            $table->string('developedby');
            $table->string('updatedby');
            $table->json('hfield');
            $table->json('htype');
            $table->json('hdescription');
            $table->json('pfield');
            $table->json('ptype');
            $table->json('pdescription');
            $table->json('sfield');
            $table->json('stype');
            $table->json('sdescription');
            $table->json('efield');
            $table->json('etype');
            $table->json('edescription');
            $table->longText('optional')->nullable();
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
        Schema::dropIfExists('apirecords');
    }
};

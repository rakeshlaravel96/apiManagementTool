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
        Schema::create('apis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('module_id');
            $table->bigInteger('submodule_id');
            $table->bigInteger('hosting_id');
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
        Schema::dropIfExists('apis');
    }
};

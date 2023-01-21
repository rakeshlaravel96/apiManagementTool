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
        Schema::table('roles', function (Blueprint $table) {
            $table->dropColumn(['module', 'api', 'hosting']);
            $table->boolean('mview')->default(0);
            $table->boolean('mviewAll')->default(0);
            $table->boolean('mcreate')->default(0);
            $table->boolean('medit')->default(0);
            $table->boolean('mdelete')->default(0);
            $table->boolean('hview')->default(0);
            $table->boolean('hviewAll')->default(0);
            $table->boolean('hcreate')->default(0);
            $table->boolean('hedit')->default(0);
            $table->boolean('hdelete')->default(0);
            $table->boolean('aview')->default(0);
            $table->boolean('aviewAll')->default(0);
            $table->boolean('acreate')->default(0);
            $table->boolean('aedit')->default(0);
            $table->boolean('adelete')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('roles', function (Blueprint $table) {
            //
        });
    }
};

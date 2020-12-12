<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \Illuminate\Support\Facades\DB;

class CreatePoets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('poets')){
            Schema::table('poets', function (Blueprint $table) {
            $table->increments('idPoet');
            $table->string('firstname', 30);
            $table->string('surname', 40);
            $table->string('address', 100);
            $table->string('postCode', 20);
            $table->string('telephoneNumber', 30);
            $table->timestamps();
            });
            }else{
            Schema::create('poets', function (Blueprint $table) {
            $table->increments('idPoet');
            $table->string('firstname', 30);
            $table->string('surname', 40);
            $table->string('address', 100);
            $table->string('postCode', 20);
            $table->string('telephoneNumber', 30);
            $table->timestamps();
            });
        }     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('poets', function (Blueprint $table) {
            Schema::dropIfExists('poets');
            });
           
    }
}

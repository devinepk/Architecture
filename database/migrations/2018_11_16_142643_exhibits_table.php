<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExhibitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('exhibits', function (Blueprint $table) {
      $table->increments('id');
      $table->string('exhibit');
      $table->string('year_completed')->nullable();
      $table->string('artist', 100)->nullable();
      $table->string('url', 250);
      $table->string('description');
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
        //
    }
}

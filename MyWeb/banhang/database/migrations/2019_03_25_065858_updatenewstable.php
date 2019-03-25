<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Updatenewstable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('content', 10000)->nullable()->change();
            $table->string('image')->nullable();
            $table->integer('new')->nullable();
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
        Schema::table('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('content')->nullable()->change();
            $table->string('image');
            $table->integer('new');
            $table->timestamps();
        });
    }
}

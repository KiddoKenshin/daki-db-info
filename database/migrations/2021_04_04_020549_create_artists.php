<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('uid', 16);
            $table->string('display_name');
            $table->string('homepage_url', 255)->nullable();
            $table->string('twitter_id', 64)->nullable();
            $table->string('pixiv_id', 64)->nullable();
            $table->bigInteger('circle_id')->index()->nullable(); // Artist's own circle
            $table->datetime('created_at')->nullable();
            $table->datetime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artists');
    }
}

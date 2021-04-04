<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDakimakuras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dakimakuras', function (Blueprint $table) {
            $table->id();
            $table->string('uid', 16);
            $table->bigInteger('artist_id')->index();
            $table->bigInteger('circle_id')->index()->nullable(); // The circle that releases this daki
            $table->bigInteger('material_id')->index()->nullable();
            $table->bigInteger('series_id')->index()->nullable();
            $table->string('title');
            $table->string('store_url', '255')->nullable();
            $table->text('memo');
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
        Schema::dropIfExists('dakimakuras');
    }
}

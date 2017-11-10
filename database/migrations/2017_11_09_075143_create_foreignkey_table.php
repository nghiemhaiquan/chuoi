<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignkeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('songs', function (Blueprint $table) {
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
            $table->foreign('singer_id')->references('id')->on('singers')->onDelete('cascade');
        });

        Schema::table('playlist_details', function (Blueprint $table) {
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
            $table->foreign('playlist_id')->references('id')->on('playlists')->onDelete('cascade');
        });

        Schema::table('playlists', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('album_details', function (Blueprint $table) {
            $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });

        Schema::table('rates', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreignkey');
    }
}

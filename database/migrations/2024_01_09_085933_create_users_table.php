<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phonenumber');
            $table->string('password');
            $table->text('bio')->nullable();
            $table->tinyInteger('type')->default(0);
            $table->string('username')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('profile_picture')->nullable();
            $table->boolean('independent_artist')->nullable();
            $table->boolean('gallery_representative')->nullable();
            $table->boolean('sell_original_artworks')->nullable();
            $table->boolean('sell_digital_creations')->nullable();
            $table->text('artistic_aspirations')->nullable();
            $table->text('artist_quote')->nullable();
            $table->text('portfolio')->nullable();
            $table->text('socialmedia')->nullable();
            $table->json('art_samples')->nullable();
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}

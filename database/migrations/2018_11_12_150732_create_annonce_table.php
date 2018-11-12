<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnonceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonce', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('ville_id');
            $table->unsignedInteger('categorie_id');
            $table->unsignedInteger('admin_id');
            $table->string('slug')->unique();
            $table->string('titre');
            $table->text('description')->nullable();
            $table->float('prix', 10, 2);
            $table->unsignedInteger('rating')->default(0);
            $table->tinyInteger('edited')->default(0);
            $table->timestamp('edited_at')->nullable();
            $table->tinyInteger('blocked')->default(0)->unsigned();
            $table->boolean('approved')->default(config('access.annonces.approve_annonce') ? false : true);
            $table->timestamp('last_comment_at')->nullable();
            $table->unsignedInteger('num_of_views')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annonce');
    }
}

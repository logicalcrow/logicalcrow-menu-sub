<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();

            $table->string('name', 15);
            $table->string('url', 100);
            $table->string('route', 100)->nullable();
            $table->string('ico', 250)->nullable();
            $table->integer('order');
            $table->string('role', 50);

            $table->timestamps();
        });

        Schema::create('menu_subs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id')->constrained('menus');

            $table->string('name', 15);
            $table->string('url', 100);
            $table->string('route', 100)->nullable();
            $table->integer('order');
            $table->string('role', 50);

            $table->timestamps();
        });

        Schema::create('menu_user', function (Blueprint $table) {
            $table->id();

            $table->foreignId('team_id')->constrained('teams');
            $table->foreignId('menu_id')->constrained('menus');
            $table->foreignId('user_id')->constrained('users');

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
        Schema::dropIfExists('menus');
        Schema::dropIfExists('menu_subs');
        Schema::dropIfExists('menu_user');
    }
};
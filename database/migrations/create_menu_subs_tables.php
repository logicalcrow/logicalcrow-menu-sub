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
        Schema::create('menu_subs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id')->constrained('menus');

            $table->string('name', 15);
            $table->string('url', 100);
            $table->string('route', 100)->nullable();
            $table->integer('order');
            $table->string('role', 50)->nullable();

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
        Schema::dropIfExists('menu_subs');
    }
};

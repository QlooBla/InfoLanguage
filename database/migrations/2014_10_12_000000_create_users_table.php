<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_role')->default('user');
            $table->string('name');
            $table->string('surname');
            $table->string('patronymic');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('login');
            $table->string('password');
            $table->string('photo')->nullable();
            $table->string('social_vk')->nullable();
            $table->string('social_tg')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};

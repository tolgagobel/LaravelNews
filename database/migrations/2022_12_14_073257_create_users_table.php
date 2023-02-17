<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('namesurname',60)->nullable();
            $table->string('email',150)->unique()->nullable();
            $table->string('password',60)->nullable();
            $table->string('phone',60)->nullable();
            $table->string('activation_key',60)->nullable();
            $table->boolean('active')->default(0);
            $table->boolean('admin')->default(0);
            $table->tinyInteger("role")->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes()->nullable();
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
}

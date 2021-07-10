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
            $table->string('family_name')->comment("氏");
            $table->string('first_name')->comment("名");
            $table->string('email')->unique()->comment("メールアドレス");;
            $table->string('password')->comment("パスワード");
            $table->integer("role")->comment('権限');
            $table->boolean('is_deleted')->comment('理論削除');;
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
}

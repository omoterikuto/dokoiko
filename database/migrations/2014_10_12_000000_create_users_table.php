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
      $table->bigIncrements('id');
      $table->string('name')->unique();
      $table->string('email')->unique();
      $table->string('profile')->nullable();
      $table->string('phone')->nullable();
      $table->string('address')->nullable();
      $table->text('close')->nullable();
      $table->string('credit')->nullable();
      $table->string('cash')->nullable();
      $table->string('paypay')->nullable();
      $table->string('category')->nullable();
      $table->string('image')->nullable();
      $table->timestamp('email_verified_at')->nullable();
      $table->string('password');
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
}

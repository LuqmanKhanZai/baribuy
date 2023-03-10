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
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('contact')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('password');
            $table->string('country')->nullable();
            $table->date('birth_date')->nullable();
            $table->enum('gender', ['M', 'F'])->default('M');
            $table->string('image')->nullable();
            $table->boolean('admin')->default(0);
            $table->string('us_citizen')->nullable();
            $table->string('backup_tax_withholding_exempt')->nullable();
            $table->string('accredited_investor')->nullable();
            $table->string('annual_income')->nullable();
            $table->string('net_worth')->nullable();
            $table->string('img')->nullable();
            $table->string('status')->default('Active')->nullable();
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

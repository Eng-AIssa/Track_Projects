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
            $table->set('status',['active','inactive'])->default('active');
            $table->string('name');
            $table->bigInteger('employee_id')->unique();
            $table->bigInteger('national_id')->unique();
            $table->string('nationality');
            $table->set('gender', ['Male', 'Female'])->default('Male');
            $table->string('region');
            $table->date('join_date');
            $table->date('contract_exp');
            $table->date('iqama_exp');
            $table->bigInteger('position_id');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->double('basic');
            $table->double('housing');
            $table->double('transportation');
            $table->double('other');
            $table->double('total_salary');
            $table->string('iban')->unique();
            $table->string('bank');
            $table->rememberToken();
            $table->timestamps();
            /*$table->id();
            $table->string('name');
            $table->string('last_name')->nullable();
            $table->string('position')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();*/
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

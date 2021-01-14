<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('creator');
            $table->bigInteger('work_order_number')->unique();
            $table->set('day',['السبت','الاحد','الاثنين','الثلاثاء','الاربعاء','الخميس','الجمعة']);
            $table->date('date');
            $table->string('business_type');
            $table->set('agent_type',['سابق','جديد']);
            $table->string('agent_name');
            $table->string('project_name');
            $table->string('principal_name');
            $table->string('address');
            $table->string('telephone');
            $table->string('phone');
            $table->string('email');
            $table->string('wasel_mail');
            $table->string('work_report');
            $table->string('attachments');
            $table->double('price');
            $table->double('full_price')->nullable();
            $table->boolean('full_price_check')->nullable();
            $table->double('half_price')->nullable();
            $table->boolean('half_price_check')->nullable();
            $table->boolean('dept')->nullable();
            $table->bigInteger('city')->nullable();
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
        Schema::dropIfExists('processes');
    }
}

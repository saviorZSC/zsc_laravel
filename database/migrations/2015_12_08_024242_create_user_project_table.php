<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //创建关联users表和projects表的关联表
        Schema::create('user_project', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');//关联user的id
            $table->integer('project_id');//关联project的id
            $table->boolean('ismanager');//是否为管理员
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
        Schema::drop('user_project');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GroupCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('os_chat_group', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('created_by', 100);
            $table->string('modified_by', 100);
            $table->timestamps();
            $table->softDeletes();
            $table->string('group_name');
            $table->longText('description');
            $table->integer('moderator');
            $table->enum('status', ['active', 'inactive']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('os_chat_group');
    }
}

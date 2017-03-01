<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GroupMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('os_group_member', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('created_by', 100);
            $table->string('modified_by', 100);
            $table->timestamps();
            $table->softDeletes();
            $table->integer('group_id');
            $table->integer('added_by');
            $table->integer('user_id');
            $table->enum('status', ['active', 'inactive', 'block']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('os_group_member');
    }
}

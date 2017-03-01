<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUserTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('department')->after('password')->nullable();
            $table->string('designation')->after('department')->nullable();
            $table->string('profile_pic')->after('designation')->nullable();
            $table->string('mobile')->after('profile_pic')->nullable();
            $table->string('address')->after('mobile')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('department');
            $table->dropColumn('designation');
            $table->dropColumn('profile_pic');
            $table->dropColumn('mobile');
            $table->dropColumn('address');
        });
    }
}

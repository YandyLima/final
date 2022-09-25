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
        Schema::table('role_has_permissions', function (Blueprint $table) {
            $table
                ->foreign('permission_id')
                ->references('id')
                ->on('permissions');
            $table
                ->foreign('role_id')
                ->references('id')
                ->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_status', function (Blueprint $table) {
            $table->dropForeign(['permission_id']);
            $table->dropForeign(['role_id']);
        });
    }
};
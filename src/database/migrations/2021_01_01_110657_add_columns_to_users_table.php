<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('family_name', 20);
            $table->string('first_name', 20);
            $table->string('employee_number', 8)->unique();
            $table->boolean('is_admin')->default(false);
            $table->softDeletes();
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->constrained('users');
            $table->dropColumn('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::enableForeignKeyConstraints();

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('family_name');
            $table->dropColumn('first_name');
            $table->dropColumn('employee_number');
            $table->dropColumn('is_admin');
            $table->dropColumn('deleted_at');
            $table->dropForeign(['created_by']);
            $table->dropColumn('created_by');
            $table->dropForeign(['updated_by']);
            $table->dropColumn('updated_by');
            $table->string('name');
        });

        Schema::disableForeignKeyConstraints();
    }
}

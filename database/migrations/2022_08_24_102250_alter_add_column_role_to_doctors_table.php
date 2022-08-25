<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAddColumnRoleToDoctorsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('doctors', 'role')) {
            Schema::table('doctors', function (Blueprint $table) {
                $table->integer('role')->default(2);
            });
        }
    }

    public function down()
    {
        if (Schema::hasColumn('doctors', 'role')) {
            Schema::table('doctors', function (Blueprint $table) {
                $table->dropColumn('role');
            });
        }
    }
}

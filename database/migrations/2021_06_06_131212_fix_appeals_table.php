<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixAppealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appeals', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->string('fullname')->nullable();
            $table->text('file')->nullable();
            $table->string('phone')->nullable();
            $table->bigInteger('category_id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appeals', function (Blueprint $table) {
            $table->string('title')->default('');
            $table->dropColumn('fullname');
            $table->dropColumn('file');
            $table->dropColumn('phone');
            $table->dropColumn('category_id');
        });
    }
}
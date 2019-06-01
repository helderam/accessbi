<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->unsignedBigInteger('report_id');
            $table->unsignedBigInteger('group_id');

            $table->foreign('report_id')->references('id')->on('reports');
            $table->foreign('group_id')->references('id')->on('groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups_reports');
    }
}

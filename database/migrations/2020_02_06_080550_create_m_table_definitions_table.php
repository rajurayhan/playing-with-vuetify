<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMTableDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_table_definitions', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->string('table_name')->nullable();
            $table->integer('tables_id')->nullable();
            $table->string('column_name')->nullable();
            $table->string('data_type')->nullable();
            $table->integer('length')->nullable();
            $table->integer('maximum_number')->nullable();
            $table->integer('decimal_part')->nullable();
            $table->string('validation')->nullable();
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
        Schema::dropIfExists('m_table_definitions');
    }
}

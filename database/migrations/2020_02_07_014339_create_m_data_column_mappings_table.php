<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMDataColumnMappingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_data_column_mappings', function (Blueprint $table) {
            $table->integer('datasource_id')->nullable();
            $table->string('datasource_name')->nullable();
            $table->integer('column_index')->nullable();
            $table->string('table_definition_id')->nullable();
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
        Schema::dropIfExists('m_data_column_mappings');
    }
}

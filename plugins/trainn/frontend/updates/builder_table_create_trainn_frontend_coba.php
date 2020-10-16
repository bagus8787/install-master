<?php namespace tRAINN\Frontend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTrainnFrontendCoba extends Migration
{
    public function up()
    {
        Schema::create('trainn_frontend_coba', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nama');
            $table->string('keterangan');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('trainn_frontend_coba');
    }
}

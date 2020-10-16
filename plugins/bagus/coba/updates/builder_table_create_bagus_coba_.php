<?php namespace Bagus\Coba\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBagusCoba extends Migration
{
    public function up()
    {
        Schema::create('bagus_coba_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('nama');
            $table->string('keterangan');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bagus_coba_');
    }
}

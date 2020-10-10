<?php namespace tRAINN\Frontend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTrainnFrontendLanding extends Migration
{
    public function up()
    {
        Schema::create('trainn_frontend_landing', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('type')->nullable();
            $table->text('content')->nullable();
            $table->text('subcontent')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('trainn_frontend_landing');
    }
}

<?php namespace Winter\Market\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('slug')->index();
            $table->string('name')->nullable();
            $table->double( 'price' );
            $table->string('description')->nullable();
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }

}
<?php

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->char('size', 8);
            $table->decimal('price', 10,2);
            $table->integer('stock');
        });

        Product::create([
            'name' => 'Cappuccino',
            'description' => 'Lorem Ipsum',
            'size' => 'SMALLSIZ',
            'price' => 10.99,
            'stock' => 100,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}

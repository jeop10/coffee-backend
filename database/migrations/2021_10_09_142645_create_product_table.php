<?php

use App\Models\Product;
use App\Models\Size;
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

        $foods = [
            'Cheese, Onion, Garlic Bagel',
            'Plain Bagel',
            'Butter Croissant',
            'Blueberry Muffin',
        ];

        $coffees = [
            'Cappuccino',
            'Latte',
            'Misto',
            'Pumpkin',
        ];

        $coffee_sizes = [
            Size::SMALL,
            Size::MEDIUM,
            Size::BIG
        ];

        foreach ($coffees as $coffee) {
            foreach ($coffee_sizes as $size) {
                $price = 0;

                switch ($size) {
                    case Size::SMALL:
                        $price = 7.99;
                        break;
                    case Size::MEDIUM:
                        $price = 8.99;
                        break;
                    case Size::BIG:
                        $price = 10.99;
                        break;
                }

                Product::create([
                    'name' => $coffee,
                    'description' => 'Lorem Ipsum',
                    'size' => $size,
                    'price' => $price,
                    'stock' => 100,
                ]);
            }
        }

        foreach ($foods as $food) {
            Product::create([
                'name' => $food,
                'description' => 'Lorem Ipsum',
                'size' => Size::STANDARD,
                'price' => 7.99,
                'stock' => 100,
            ]);
        }
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

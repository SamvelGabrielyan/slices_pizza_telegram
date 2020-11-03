<?php

use Illuminate\Database\Seeder;

class PizzaSeeder extends Seeder
{
    protected $pizzas = [
        [
            'name' => 'Margherita',
            'short_desc' => 'Tomato sauce, mozzarella, and oregano, olives, and oregano, mozzarella',
            'long_desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard',
            'price' => 13,
            'pic' => 'temp/assets/img/prods/1.webp',
            'pic_sm' => 'temp/assets/img/prods-sm/1.webp'
        ],
        [
            'name' => 'Marinara',
            'short_desc' => 'Tomato sauce, garlic and basil, olives, and oregano, olives, and oregano',
            'long_desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard',
            'price' => 11,
            'pic' => 'temp/assets/img/prods/2.webp',
            'pic_sm' => 'temp/assets/img/prods-sm/2.webp'
        ],
        [
            'name' => 'Quattro Stagioni',
            'short_desc' => 'Tomato sauce, mozzarella, mushrooms, ham, artichokes, olives, and oregano',
            'long_desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard',
            'price' => 12,
            'pic' => 'temp/assets/img/prods/3.webp',
            'pic_sm' => 'temp/assets/img/prods-sm/3.webp'
        ],
        [
            'name' => 'Carbonara',
            'short_desc' => 'Tomato sauce, mozzarella, parmesan, eggs, and bacon, olives, and oregano',
            'long_desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard',
            'price' => 14,
            'pic' => 'temp/assets/img/prods/5.webp',
            'pic_sm' => 'temp/assets/img/prods-sm/5.webp'
        ],
        [
            'name' => 'Frutti di Mare',
            'short_desc' => 'Tomato sauce and seafood, olives, and oregano, olives, and oregano',
            'long_desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard',
            'price' => 9,
            'pic' => 'temp/assets/img/prods/8.webp',
            'pic_sm' => 'temp/assets/img/prods-sm/8.webp'
        ],
        [
            'name' => 'Napoletana',
            'short_desc' => 'Tomato sauce, mozzarella, oregano, anchovies, olives, and oregano',
            'long_desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard',
            'price' => 8,
            'pic' => 'temp/assets/img/prods/9.webp',
            'pic_sm' => 'temp/assets/img/prods-sm/9.webp'
        ],
        [
            'name' => 'Braccio di Ferro',
            'short_desc' => 'Mozzarella, spinach, ricotta cheese, and parmesan, olives, and oregano',
            'long_desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard',
            'price' => 21,
            'pic' => 'temp/assets/img/prods/3.webp',
            'pic_sm' => 'temp/assets/img/prods-sm/3.webp'
        ],
        [
            'name' => 'Gorgonzola',
            'short_desc' => 'Tomato sauce, mozzarella, eggplant, boiled potatoes, and sausage',
            'long_desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard',
            'price' => 19,
            'pic' => 'temp/assets/img/prods/8.webp',
            'pic_sm' => 'temp/assets/img/prods-sm/8.webp'
        ],
        [
            'name' => 'Diavola',
            'short_desc' => 'Tomato sauce, mozzarella, spicy salami, and chilli pepper',
            'long_desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard',
            'price' => 14,
            'pic' => 'temp/assets/img/prods/5.webp',
            'pic_sm' => 'temp/assets/img/prods-sm/5.webp'
        ],
        [
            'name' => 'Pizza tartufata',
            'short_desc' => 'Mozzarella, truffle cream, and porcini mushrooms',
            'long_desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard',
            'price' => 16,
            'pic' => 'temp/assets/img/prods/10.webp',
            'pic_sm' => 'temp/assets/img/prods-sm/10.webp'
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->pizzas as $pizza) {
            $pizza_table = new \App\Pizza();
            $pizza_table->name = $pizza['name'];
            $pizza_table->short_desc = $pizza['short_desc'];
            $pizza_table->long_desc = $pizza['long_desc'];
            $pizza_table->price = $pizza['price'];
            $pizza_table->pic = $pizza['pic'];
            $pizza_table->pic_sm = $pizza['pic_sm'];
            $pizza_table->save();
        }
    }
}

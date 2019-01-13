<?php

use Illuminate\Database\Seeder;
use App\CartDetail;

class CartDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CartDetail::create([
            'cart_id'->cart_id,
            'product_id'->cart_id,
            'quantity'->quantity
        ]);
    }
}

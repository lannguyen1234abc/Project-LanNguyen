<?php
use Illuminate\Database\Seeder;
use App\Product; 
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'->name,
            'producttype_id'->producttype_id,
            'description'->description,
            'price'->price,
            'promotion_price'->promotion_price,
            'image'->image,
            'unit'->unit,
            'new'->new,
            'status'->status
        ]);
    }
}
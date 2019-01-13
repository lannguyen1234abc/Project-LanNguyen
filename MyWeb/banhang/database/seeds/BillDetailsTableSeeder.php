<?php
use Illuminate\Database\Seeder;
use App\BillDetail;
class BillDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BillDetail::create([
            'bill_id'->bill_id,
            'product_id'->product_id,
            'quantity'->quantity,
            'price'->price,
            'promotion_price'->promotion_price,
            'total'->total
        ]);
    }
}
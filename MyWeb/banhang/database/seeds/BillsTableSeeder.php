<?php
use Illuminate\Database\Seeder;
use App\Bill;
class BillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bill::create([
            'customer_id'->customer_id,
            'date_order'->date_order,
            'total'->total,
            'note'->note,
            'payment'->payment,
            'status'->status
        ]);
    }
}
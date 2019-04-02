<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(BillsTableSeeder::class);
        $this->call(SlidesTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ProductTypesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(BillDetailsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
    }
    
}

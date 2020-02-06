<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'fullname' => 'RoFA Admin',
        	'username' => 'rofa_admin2019',
        	'email' => 'azhariilham@gmail.com',
        	'password' => bcrypt('adVenturestartedin2019'),
        	'credentials' => 'superadmin',
        ]);

        DB::table('product_vendor')->insert([
          'name' => 'RoFA',
          'email' => 'youktanzil@indline.com',
          'city_code' => '153',
          'pic' => 'Youk Tanzil',
          'shipping_address' => '',
        ]);

        DB::table('products')->insert([
          ['vendor_id' => 1, 'name' => 'Polo Shirt RoFA', 'category' => 'Apparel', 'price' => 10000, 'weight' => 500],
          ['vendor_id' => 1, 'name' => 'Jersey RoFA', 'category' => 'Apparel', 'price' => 20000, 'weight' => 500],
          ['vendor_id' => 1, 'name' => 'Gloves RoFA', 'category' => 'Apparel', 'price' => 10000, 'weight' => 500],
          ['vendor_id' => 1, 'name' => 'Balaclava RoFA', 'category' => 'Apparel', 'price' => 10000, 'weight' => 500]
        ]);
    }
}

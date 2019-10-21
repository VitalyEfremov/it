<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        for($x =0; $x < 10; $x++) {
            DB::table('products')->insert([
                'name' => Str::random(10),
                'description' => Str::random(100),
                'active_substance' => Str::random(50),
                'exp_date' => Str::random(10),
                'category_id' => $x % 4,
                'product_type_id' => $x % 2,
            ]);
        }
    }
}

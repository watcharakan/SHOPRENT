<?php

use Illuminate\Database\Seeder;

class ProTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       App\Pro::truncate();
        factory(App\Pro::class, 10)->create();  
    }
}

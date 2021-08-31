<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\OrderDetails;
use App\Models\Product;
use App\Models\User;
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
        $user = new User;

        $user->name='mamdouh';
        $user->email='mamdouh@gmail.com';
        $user->password=bcrypt('test');
        $user->save();

        Product::factory(3)->create();
        // \App\Models\User::factory(10)->create();
    }
}

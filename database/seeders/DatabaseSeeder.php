<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Category;
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

        $c1 = new Category;

        $c1->name='PC';
        $c1->description='Browse the Latest Most Powerful Computers';
        $c1->src="https://images.unsplash.com/photo-1593640408182-31c70c8268f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1026&q=80";
        $c1->save();

        $c2 = new Category;

        $c2->name='Phones';
        $c2->description='Browse the Latest Trendiest Phones';
        $c2->src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80";
        $c2->save();

        $c3 = new Category;

        $c3->name='Laptops';
        $c3->description='Browse the Latest Most Powerful Laptops';
        $c3->src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80";
        $c3->save();

        Product::factory(3)->create();
        // \App\Models\User::factory(10)->create();
    }
}

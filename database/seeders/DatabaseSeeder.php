<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Seller;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Sequence;
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
        $this->call([
            UserTableSeeder::class,
        ]);
        Seller::factory()
            ->count(1)
            ->hasInvoices(10)
            ->create();

        Product::factory()
            ->count(50)
            ->create();

        Task::factory()
            ->count(10)
            ->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Livewire\Attributes\Lazy;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for($i = 1; $i <= 1000; $i++){
            Order::create([
                'order_no' => 100000 + $i,
                'delivery_date' => Carbon::now()->addDays(rand(1, 20)),
                'delivery_method' => 'FedEx',
                'quantity' => rand(1, 100),
            ]);
        }

    }
}

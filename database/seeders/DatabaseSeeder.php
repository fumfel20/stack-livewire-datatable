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
        $array = [];
        for($i = 1; $i <= 20000; $i++){
            $array[] = [
                'order_no' => 100000 + $i,
                'delivery_date' => Carbon::now()->addDays(rand(-10, 10)),
                'delivery_method' => 'FedEx',
                'quantity' => rand(1, 100),
                'created_at' => Carbon::now()->addDays(rand(-10, 10)),
            ];
        }
        $array = array_chunk($array,1000);
        foreach($array as $item){
            Order::query()->insert($item);
        }


    }
}

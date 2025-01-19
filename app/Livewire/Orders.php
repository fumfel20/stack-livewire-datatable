<?php

namespace App\Livewire;

use App\Models\Order;
use Carbon\Carbon;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Url;
use Livewire\Component;
use Symfony\Component\HttpFoundation\Request;

#[Lazy]
class Orders extends Component
{
    public $delivery_date = '';

    public function setDeliveryDate(){
        $this->delivery_date;
    }


    public function render()
    {
        $delivery_date = $this->delivery_date == '' ? Carbon::now()->addDays(1)->toDateString() : $this->delivery_date;
        $orders = Order::query()->where('delivery_date','=',$delivery_date)->get();
        return view('livewire.orders',compact('orders','delivery_date'));
    }
}

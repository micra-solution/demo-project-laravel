<?php

use Illuminate\Database\Seeder;
use App\Order;

class create_order extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = new Order();
        $order->clientId = '1';
        $order->mobileNumber = '9558100310';
        $order->goodId = '1';
        $order->isActive = 'true';
        $order->save();

        $order = new Order();
        $order->clientId = '2';
        $order->mobileNumber = '8888888888';
        $order->goodId = '3';
        $order->isActive = 'true';
        $order->save();

    }
}

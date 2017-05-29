<?php

use Illuminate\Database\Seeder;
use App\Good;

class create_goods extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $good = new Good();
        $good->name = 'chair';
        $good->price = '2000';
        $good->advetiserId = '1';
        $good->save();

        $good = new Good();
        $good->name = 'table';
        $good->price = '3000';
        $good->advetiserId = '1';
        $good->save();

        $good = new Good();
        $good->name = 'penbox';
        $good->price = '750';
        $good->advetiserId = '2';
        $good->save();

        $good = new Good();
        $good->name = 'dor';
        $good->price = '20000';
        $good->advetiserId = '2';
        $good->save();

        $good = new Good();
        $good->name = 'sofaset';
        $good->price = '25000';
        $good->advetiserId = '2';
        $good->save();

        $good = new Good();
        $good->name = 'sendilier';
        $good->price = '20400';
        $good->advetiserId = '3';
        $good->save();

        $good = new Good();
        $good->name = 'window';
        $good->price = '2300';
        $good->advetiserId = '4';
        $good->save();

        $good = new Good();
        $good->name = 'bed';
        $good->price = '19000';
        $good->advetiserId = '2';
        $good->save();

        $good = new Good();
        $good->name = 'fen';
        $good->price = '2000';
        $good->advetiserId = '2';
        $good->save();

        $good = new Good();
        $good->name = 'lemp';
        $good->price = '200';
        $good->advetiserId = '4';
        $good->save();

        $good = new Good();
        $good->name = 'Ac';
        $good->price = '1900';
        $good->advetiserId = '2';
        $good->save();


    }
}

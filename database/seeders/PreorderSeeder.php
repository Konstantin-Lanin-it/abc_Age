<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Preorder;

class PreorderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $preorders = [
            [
                'supply_id' => 1,
                'amount' => 10,
                'preorder_date' => Carbon::parse('2021-01-02'),
                'packed' => false,
                'selling_price' => 0,
            ],
            [
                'supply_id' => 1,
                'amount' => 10,
                'preorder_date' => Carbon::parse('2021-01-02'),
                'packed' => false,
                'selling_price' => 0,
            ],
            [
                'supply_id' => 2,
                'amount' => 10,
                'preorder_date' => Carbon::parse('2021-01-03'),
                'packed' => false,
                'selling_price' => 0,
            ],
            [
                'supply_id' => 2,
                'amount' => 10,
                'preorder_date' => Carbon::parse('2021-01-06'),
                'packed' => false,
                'selling_price' => 0,
            ],
            [
                'supply_id' => 1,
                'amount' => 10,
                'preorder_date' => Carbon::parse('2021-01-10'),
                'packed' => false,
                'selling_price' => 0,
            ],
            [
                'supply_id' => 3,
                'amount' => 1,
                'preorder_date' => Carbon::parse('2021-01-13'),
                'packed' => false,
                'selling_price' => 0,
            ],
            [
                'supply_id' => 3,
                'amount' => 1,
                'preorder_date' => Carbon::parse('2021-01-14'),
                'packed' => false,
                'selling_price' => 0,
            ],
            [
                'supply_id' => 3,
                'amount' => 2,
                'preorder_date' => Carbon::parse('2021-01-15'),
                'packed' => false,
                'selling_price' => 0,
            ],
            [
                'supply_id' => 3,
                'amount' => 3,
                'preorder_date' => Carbon::parse('2021-01-16'),
                'packed' => false,
                'selling_price' => 0,
            ],
            [
                'supply_id' => 3,
                'amount' => 5,
                'preorder_date' => Carbon::parse('2021-01-17'),
                'packed' => false,
                'selling_price' => 0,
            ],
            [
                'supply_id' => 3,
                'amount' => 8,
                'preorder_date' => Carbon::parse('2021-01-18'),
                'packed' => false,
                'selling_price' => 0,
            ],
            [
                'supply_id' => 3,
                'amount' => 13,
                'preorder_date' => Carbon::parse('2021-01-19'),
                'packed' => false,
                'selling_price' => 0,
            ],
            [
                'supply_id' => 3,
                'amount' => 21,
                'preorder_date' => Carbon::parse('2021-01-20'),
                'packed' => false,
                'selling_price' => 0,
            ],
            [
                'supply_id' => 3,
                'amount' => 34,
                'preorder_date' => Carbon::parse('2021-01-21'),
                'packed' => false,
                'selling_price' => 0,
            ],
            [
                'supply_id' => 3,
                'amount' => 55,
                'preorder_date' => Carbon::parse('2021-01-22'),
                'packed' => false,
                'selling_price' => 0,
            ],
        ];

        foreach ($preorders as $preorder)
        {
            Preorder::create($preorder);
        }
    }
}

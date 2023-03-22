<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Supply;

class SupplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $supplies = [
            [
                'supply_id' => "1",
                'product_id' => 1,
                'amount' => 300,
                'price' => 5000,
                'created_at' => Carbon::parse(2021-01-01),
            ],
            [
                'supply_id' => 't-500',
                'product_id' => 2,
                'amount' => 10,
                'price' => 6000,
                'created_at' => Carbon::parse(2021-01-02),
            ],
            [
                'supply_id' => 't-501',
                'product_id' => 2,
                'amount' => 40,
                'price' => 5000,
                'created_at' => Carbon::parse(2021-01-13),
            ],
            [
                'supply_id' => '12-TP-777',
                'product_id' => 3,
                'amount' => 100,
                'price' => 500,
                'created_at' => Carbon::parse(2021-01-13),
            ],
            [
                'supply_id' => '12-TP-778',
                'product_id' => 3,
                'amount' => 50,
                'price' => 300,
                'created_at' => Carbon::parse(2021-01-14),
            ],
            [
                'supply_id' => '12-TP-779',
                'product_id' => 3,
                'amount' => 77,
                'price' => 539,
                'created_at' => Carbon::parse(2021-01-15),
            ],
            [
                'supply_id' => '12-TP-887',
                'product_id' => 3,
                'amount' => 32,
                'price' => 176,
                'created_at' => Carbon::parse(2021-01-16),
            ],
            [
                'supply_id' => '12-TP-977',
                'product_id' => 3,
                'amount' => 94,
                'price' => 554,
                'created_at' => Carbon::parse(2021-01-17),
            ],
            [
                'supply_id' => '12-TP-979',
                'product_id' => 3,
                'amount' => 200,
                'price' => 1000,
                'created_at' => Carbon::parse(2021-01-18),
            ],
        ];

        foreach ($supplies as $supply)
        {
            Supply::create($supply);
        }
    }
}

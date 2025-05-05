<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Meteoblong;
use Illuminate\Support\Carbon;

class MeteoblongSeeder extends Seeder
{
    public function run(): void
    {
        Meteoblong::insert([
            [
                'customer' => 'Ahmad',
                'product' => 'Kaos Oblong',
                'quantity' => 3,
                'total_price' => 3 * 50000,
                'order_date' => Carbon::now()
            ],
            [
                'customer' => 'Siti',
                'product' => 'Kaos Oblong',
                'quantity' => 5,
                'total_price' => 5 * 50000,
                'order_date' => Carbon::now()
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Products  = [
            [
                'name' => 'product Name',
                'price' => 'product price',
                'tag' => 'product tag',
            ]
        ];
        User::insert($Products);
    }
}

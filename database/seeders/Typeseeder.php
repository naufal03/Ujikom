<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class Typeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $types = [
            [
                'name' => 'Deluxe',
                'information' => 'Ini adalah kamar deluxe'
            ],
            [
                'name' => 'Superior',
                'information' => 'Ini adalah kamar Superior'
            ]
            ];

        foreach ($types as $type ) {
            Type::create($type);
        }
    }
}

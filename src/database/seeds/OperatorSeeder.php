<?php

use App\Operator;
use Illuminate\Database\Seeder;

class OperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $operators = [
            ['name' => 'add', 'operator' => '+'],
            ['name' => 'subtract', 'operator' => '-'],
            ['name' => 'multiply', 'operator' => '*'],
            ['name' => 'divide', 'operator' => '/'],
        ];

        Operator::insert($operators);
    }
}

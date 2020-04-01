<?php

use Illuminate\Database\Seeder;
use App\Test;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createTest();

    }

    public function createTest(){
        $test = [
            ['name' =>'Emisión'],
            ['name' =>'Fisico Mecanica'],
            ['name' =>'Ambos']
        ];
        foreach ($test as $t) {
            $test = Test::create([
                'name' => $t['name'],
            ]);
            }
        }

}

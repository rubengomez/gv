<?php

use Illuminate\Database\Seeder;
use Garro\Axes;

class AxesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createAxes();
    }

    public function createAxes(){
        $axes = [
            ['key' => 'a1',     'name' => 'axis1'],
            ['key' => 'a2',     'name' => 'axis2'],
            ['key' => 'a3',     'name' => 'axis4']
        ];
        foreach ($axes as $a) {
            $axes = Axes::create([
                'key' => $a['key'],
                'name' => $a['name'],
            ]);
        }
    }
}

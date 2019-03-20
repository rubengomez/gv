<?php

use Illuminate\Database\Seeder;
use Garro\Engine;

class EngineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createEngine();
    }

    public function createEngine(){
        $engines = [
            ['name' => 'Indefinido'],
            ['name' => 'Disel'],
            ['name' => 'Gasolina'],
            ['name' => 'Gas']
        ];
        foreach ($engines as $e) {
            $engines = Engine::create([
                'name' => $e['name'],
            ]);
        }
    }
}

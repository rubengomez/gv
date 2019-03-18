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
            ['name' => 'Engine1'],
            ['name' => 'Engine2'],
            ['name' => 'Engine3'],
            ['name' => 'Engine4']
        ];
        foreach ($engines as $e) {
            $engines = Engine::create([
                'name' => $e['name'],
            ]);
        }
    }
}

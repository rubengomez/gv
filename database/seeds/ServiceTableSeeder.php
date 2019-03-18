<?php

use Illuminate\Database\Seeder;
use Garro\Service;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createServices();
    }

    public function createServices(){
        $services = [
            ['key' => 's1',     'name' => 'service1'],
            ['key' => 's2',     'name' => 'service2'],
            ['key' => 's3',     'name' => 'service3'],
            ['key' => 's4',     'name' => 'service4']
        ];
        foreach ($services as $s) {
            $service = Service::create([
                'key' => $s['key'],
                'name' => $s['name'],
            ]);
        }
    }
}

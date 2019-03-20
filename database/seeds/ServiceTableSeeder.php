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
            ['key' =>'CG','name' =>'Carga General'],
            ['key' =>'P','name' =>'Pasaje'],
            ['key' =>'T','name' =>'Turismo'],
            ['key' =>'PQ','name' =>'Paquetería'],
            ['key' =>'MP','name' =>'Materiales Peligrosos/Carga Especializada'],
            ['key' =>'M','name' =>'Automóviles si rodar/Carga Especializada'],
            ['key' =>'FV','name' =>'Fondos y Valores/Carga Especializada'],
            ['key' =>'G','name' =>'Grúas de Arrastre/Salvamento']
        ];
        foreach ($services as $s) {
            $service = Service::create([
                'key' => $s['key'],
                'name' => $s['name'],
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Rejection;

class RejectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createRejections();
    }

    public function createRejections(){
        $rejections=[
            ['name' =>'Sistema de iluminación lámparas y luces'],
            ['name' =>'Indicadores de peligro para carga sobresaliente'],
            ['name' =>'Limpiaparabrisas'],
            ['name' =>'Parabrisas'],
            ['name' =>'Llantas, cámaras y corbatas'],
            ['name' =>'Ruedas y rines'],
            ['name' =>'Bastidor, largueros o chasis del camión o tractocamión'],
            ['name' =>'Carrocería de semirremolque y/o remolque'],
            ['name' =>'Sistema de combustible'],
            ['name' =>'Sujeción de la carga'],
            ['name' =>'Sistema de escape'],
            ['name' =>'Sistema de dirección'],
            ['name' =>'Sistema de suspensión'],
            ['name' =>'Sistema de frenos neumáticos'],
            ['name' =>'Sistema de frenos hidráulicos'],
            ['name' =>'Sistema de frenos eléctricos'],
            ['name' =>'Sistema de acoplamiento'],
            ['name' =>'Cabina'],
            ['name' =>'Area de pasajeros en autobúses'],
            ['name' =>'Especificaciones complementarias y posibles defectos en vehículos que transportan materiales y residuos peligrosos']
        ];
        foreach ($rejections as $r) {
            $rejection = Rejection::create([
                'name' => $r['name']
            ]);
        }
    }
}

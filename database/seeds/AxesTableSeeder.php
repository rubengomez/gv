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
            ['key' =>'B2','name' =>'Autobús de dos ejes'],
            ['key' =>'B3','name' =>'Autobús de tres ejes'],
            ['key' =>'B4','name' =>'Autobús de cuatro ejes'], 
            ['key' =>'C2','name' =>'Camión de dos ejes'],
            ['key' =>'C3','name' =>'Camión de tres ejes'],
            ['key' =>'C4','name' =>'Camión de cuatro ejes'],
            ['key' =>'T2','name' =>'Tractocamión de dos ejes'],
            ['key' =>'T3','name' =>'Tractocamión de tres ejes'],
            ['key' =>'S1','name' =>'Semirremolque de un eje'],
            ['key' =>'S2','name' =>'Semirremolque de dos ejes'],
            ['key' =>'S3','name' =>'Semirremolque de tres ejes'],
            ['key' =>'S4','name' =>'Semirremolque de cuatro ejes'],
            ['key' =>'S5','name' =>'Semirremolque de cinco ejes'],
            ['key' =>'S6','name' =>'Semirremolque de seis ejes'],
            ['key' =>'R2','name' =>'Remolque de dos ejes'],
            ['key' =>'R3','name' =>'Remolque de tres ejes'],
            ['key' =>'R4','name' =>'Remolque de cuatro ejes'],
            ['key' =>'R5','name' =>'Remolque de cinco ejes'],
            ['key' =>'R6','name' =>'Remolque de seis ejes'],
            ['key' =>'D1','name' =>'Dolly de un eje'],
            ['key' =>'D2','name' =>'Dolly de dos ejes'],
            ['key' =>'GA','name' =>'Grúa Tipo A'],
            ['key' =>'GB','name' =>'Grúa Tipo B'],
            ['key' =>'GC','name' =>'Grúa Tipo C'],
            ['key' =>'GD','name' =>'Grúa Tipo D'],
            ['key' =>'GI','name' =>'Grúa Industrial'],
            ['key' =>'V1','name' =>'Vagoneta'],
            ['key' =>'V2','name' =>'Automovil'],
            ['key' =>'V3','name' =>'Minubus'],
            ['key' =>'V4','name' =>'Camioneta']
        ];
        foreach ($axes as $a) {
            $axes = Axes::create([
                'key' => $a['key'],
                'name' => $a['name'],
            ]);
        }
    }
}

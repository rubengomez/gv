<?php

use Illuminate\Database\Seeder;
use Garro\Vehicle;
use Garro\User;
use Garro\Axes;
use Garro\Engine;
use Garro\Service;

class VehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createVehicles();
    }

    public function createVehicles(){
        $vehicles = [
            ['brand' => 'Toyota','model' => 'Corola','series' => 'Serie1','plate_number' => 'pl1car1',
                'folio_circulation' => 'folcir1234','capacity' => '200 kg','axes_id' => '1',
                'engine_id' => '1','service_id' => '1','user_id' => '1'],
            ['brand' => 'Nissan','model' => 'Centra','series' => 'Serie2','plate_number' => 'pl2car2',
                'folio_circulation' => 'folcir1234','capacity' => '200 kg','axes_id' => '2',
                'engine_id' => '2','service_id' => '2','user_id' => '2']
        ];
        foreach ($vehicles as $v) {
            $vehicles = Vehicle::create([
                'brand' => $v['brand'],
                'model' => $v['model'],
                'series' => $v['series'],
                'plate_number' => $v['plate_number'],
                'folio_circulation' => $v['folio_circulation'],
                'capacity' => $v['capacity'],
                'axes_id' => $v['axes_id'],
                'engine_id' => $v['engine_id'],
                'service_id' => $v['service_id'],
                'user_id' => $v['user_id'],
            ]);
        }
    }
}

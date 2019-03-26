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
            ['brand' => 'Toyota',
             'model' => 'Corola',
             'series' => 'Serie1',
             'plate_number' => 'pl1car1',
             'folio_circulation' => 'folcir1234',
             'capacity' => '200 kg',
             'axes_id' => '1',
             'engine_id' => '1',
             'service_id' => '1',
             'user_id' => '1'],

            ['brand' => 'Nissan',
             'model' => 'Centra',
             'series' => 'Serie2',
             'plate_number' => 'pl2car2',
             'folio_circulation' =>
             'folcir1234','capacity' => '200 kg',
             'axes_id' => '2',
             'engine_id' => '2',
             'service_id' => '2',
             'user_id' => '2'],

		   ['brand' => 'FREIGHTLINER',
            'model' => '1999',
            'series' => '1FUWTMCA9XHB43940',
            'plate_number' => '243ST4',
            'folio_circulation' => '450814',
            'capacity' => '20000 KG',
            'axes_id' => '3',
            'engine_id' => '1',
            'service_id' => '6',
            'user_id' => '1'],

           ['brand' => 'FREIGHTLINER',
            'model' => '1999',
            'series' => '1FUWTMCA9XHB43940',
            'plate_number' => '243ST4',
            'folio_circulation' => '450814',
            'capacity' => '20000 KG',
            'axes_id' => '3',
            'engine_id' => '1',
            'service_id' => '6',
            'user_id' => '1'],

           ['brand' => 'INTERNATIONAL',
            'model' => '1992',
            'series' => '1HSRDDRR4NH448410',
            'plate_number' => '613EM7',
            'folio_circulation' => '1514587',
            'capacity' => '20000 KG',
            'axes_id' => '3',
            'engine_id' => '1',
            'service_id' => '6',
            'user_id' => '1'],

           ['brand' => 'CHEVROLET',
            'model' => '2003',
            'series' => '3GBJC34R23M109443',
            'plate_number' => '250EX7',
            'folio_circulation' => '1570458',
            'capacity' => '10000 KG',
            'axes_id' => '3',
            'engine_id' => '1',
            'service_id' => '6',
            'user_id' => '1'],

          ['brand' => 'FREIGHTLINER',
           'model' => '1985',
           'series' => '1FUEYBYB0FP265932',
           'plate_number' => '734AP9',
           'folio_circulation' => '1383705',
           'capacity' => '15000',
           'axes_id' => '3',
           'engine_id' => '1',
           'service_id' => '7',
           'user_id' => '1'],

           ['brand' => 'INTERNATIONAL',
            'model' => '1991',
            'series' => '2HSFHGUR6MC044918',
            'plate_number' => '664SR2',
            'folio_circulation' => '1235004',
            'capacity' => '15000',
            'axes_id' => '3',
            'engine_id' => '1',
            'service_id' => '7',
            'user_id' => '1'],

           ['brand' => 'GMC',
            'model' => '1990',
            'series' => '1GDG6H1P3LJ606555',
            'plate_number' => '969SR2',
            'folio_circulation' => '1487363',
            'capacity' => '20000',
            'axes_id' => '2',
            'engine_id' => '1',
            'service_id' => '7',
            'user_id' => '1'],

           ['brand' => 'GMC',
            'model' => '1992',
            'series' => '1GDJ6H1P7NJ504491',
            'plate_number' => '563EM6',
            'folio_circulation' => '450526',
            'capacity' => '20000',
            'axes_id' => '2',
            'engine_id' => '1',
            'service_id' => '5',
            'user_id' => '1'],

           ['brand' => 'VOLVO',
            'model' => '1997',
            'series' => '4VAJBAPF7VN857460',
            'plate_number' => '883EM6',
            'folio_circulation' => '514304',
            'capacity' => '15000',
            'axes_id' => '3',
            'engine_id' => '1',
            'service_id' => '5',
            'user_id' => '1'],

           ['brand' => 'MACK',
            'model' => '1997',
            'series' => '1M1K194Y9VM008995',
            'plate_number' => '274SP9',
            'folio_circulation' => '450794',
            'capacity' => '12000',
            'axes_id' => '2',
            'engine_id' => '1',
            'service_id' => '5',
            'user_id' => '1'],
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

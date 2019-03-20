<?php

use Illuminate\Database\Seeder;

class VerificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createVerification();
    
    }

    public function createVerification(){

        $verifications = [
            ['date_last_verification' => '2018-08-21',
            'date_verification'      => '2019-03-21',
            'odometre'               => '23000Km',
            'verication_result'      => 'A',
            'cetificate_number'      => '12345',
            'test_id'                => '1',
            'vehicle_id'             => '1',
            'tech_id'                => '1',
            'reject_id'              => 'null']
        ];

        foreach($verifications as $ver){
         $verifications= Verification::create(
             ['date_last_verification'=> $v['date_last_verification'],
             'date_verification'      => $v['date_verification'],
             'odometre'               => $v['odometre'],
             'verication_result'      => $v['verication_result'],
             'cetificate_number'      => $v['cetificate_number'],
             'test_id'                => $v['test_id'],
             'vehicle_id'             => $v['vehicle_id'],
             'tech_id'                => $v['tech_id'],
             'reject_id'              => $v['reject_id'],]
         );

        }

    } 
}

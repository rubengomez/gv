<?php

use Illuminate\Database\Seeder;
use Garro\Verification;
use Garro\Test;
use Garro\Vehicle;
use Garro\User;
use Garro\Rejection;

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
            'reject_id'              => '1' ],
        ];

        foreach($verifications as $ver){
         $verification = Verification::create([
             'date_last_verification' => $ver['date_last_verification'],
             'date_verification' => $ver['date_verification'],
             'odometre' => $ver['odometre'],
             'verication_result' => $ver['verication_result'],
             'cetificate_number' => $ver['cetificate_number'],
             'test_id' => $ver['test_id'],
             'vehicle_id' => $ver['vehicle_id'],
             'tech_id' => $ver['tech_id'],
             'reject_id' => $ver['reject_id'],
         ]);

        }

    }
}

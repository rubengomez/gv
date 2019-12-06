<?php

use Illuminate\Database\Seeder;
use Garro\Company;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createCompanies();
    }

    public function createCompanies(){
        $companies = [
            ['rfc' =>'rfc1','address' =>'calle1','municipality' =>'Juarez','state' =>'Chihuahua','cp' =>'32165','cellphone'=>'65632142','contact'=>'Juan Jimenez','user_id'=>'3'],
            ['rfc' =>'rfc2','address' =>'calle2','municipality' =>'Juarez','state' =>'Chihuahua','cp' =>'32165','cellphone'=>'65632142','contact'=>'Pedro Perez','user_id'=>'4'],
            ['rfc' =>'rfc3','address' =>'calle3','municipality' =>'Juarez','state' =>'Chihuahua','cp' =>'32165','cellphone'=>'65632142','contact'=>'Saul Salcedo','user_id'=>'5']
        ];
        foreach ($companies as $s) {
            $companie = Company::create([
                'rfc' => $s['rfc'],
                'address' => $s['address'],
                'municipality' => $s['municipality'],
                'state' => $s['state'],
                'cp' => $s['cp'],
                'cellphone' => $s['cellphone'],
                'contact' => $s['contact'],
                'user_id' => $s['user_id'],
            ]);
        }
    }
}

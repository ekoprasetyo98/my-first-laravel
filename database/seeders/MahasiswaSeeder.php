<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i <=50 ; $i++) { 
            # code...
            $faker = Faker::create('id_ID');
            DB::table('mahasiswa')->insert([
                'nama'=>$faker->name,
                'nik'=>'3321132307980008',
                'usia'=>$faker->numberBetween(18,23),
                'jurusan'=>'teknik'
            ]);
        }
    }
}

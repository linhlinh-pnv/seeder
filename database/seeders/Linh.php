<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Linh extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('Categories')->insert([
           
        //     ['name'=>'Bánh gato'],
        //     ['name'=>'Sách'],
        //     ['name'=>'Bút'],
        //     ['name'=>'Bánh '],
        //     ['name'=>'kẹo'],

        // ]);


        DB::table('customers')->insert([
           
            ['name'=>'Mỹ Linh','gender'=>'Nữ','email'=>'Linh.nguyen@gmail.com','address'=>'Quảng Bình',
            'phone_number'=>'084756291','note'=>'yeaaaa'],
            ['name'=>'Mỹ Hạnh','gender'=>'Nữ','email'=>'hanh.nguyen@gmail.com','address'=>'Quảng Bình',
            'phone_number'=>'084756291','note'=>'yeaaaa'],
            ['name'=>'Mỹ Hoài','gender'=>'Nữ','email'=>'hoai.nguyen@gmail.com','address'=>'Quảng Bình',
            'phone_number'=>'084756291','note'=>'yeaaaa'],
            ['name'=>'Mỹ Tâm','gender'=>'Nữ','email'=>'tam.nguyen@gmail.com','address'=>'Quảng Bình',
            'phone_number'=>'084756291','note'=>'yeaaaa'],
            


        ]);
        
    }
}

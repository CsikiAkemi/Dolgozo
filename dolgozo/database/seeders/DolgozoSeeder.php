<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\DolgozoSeeder;
use \Illuminate\Support\Facades\DB;

class DolgozoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("dolgozo")->insert([
            "nev" => "Csiki Akemi",
            "varos" => "Budapest",
            "szuletes" => "2001.01.18",
            "fizetes" => 300000
        ]);
        DB::table("dolgozo")->insert([
            "nev" => "Jóska Pista",
            "varos" => "Budapest",
            "szuletes" => "2001.03.04",
            "fizetes" => 40000
        ]);
        DB::table("dolgozo")->insert([
            "nev" => "Nagy Ágnes",
            "varos" => "Budapest",
            "szuletes" => "2000.02.28",
            "fizetes" => 40000
        ]);
        DB::table("dolgozo")->insert([
            "nev" => "Kiss Pál",
            "varos" => "Pécs",
            "szuletes" => "1998.02.03",
            "fizetes" => 50000
        ]);
        
        DB::table("dolgozo")->insert([
            "nev" => "Szücs Áron",
            "varos" => "Veszprém",
            "szuletes" => "1997.01.30",
            "fizetes" => 800000
        ]);

        /*dolgozo::create([
            'nev' => 'John Addison',
            'varos' => 'Budapest',
            'szuletes' => '2011-02-04',
            'fizetes' => '300000',
            
        ]);*/
    }
}
class DatabaseSeeder extends Seeder
{
    public function run() {
        $this->call([
            DolgozoSeeder::class
        ]);
    \App\Models\Dolgozo::factory(10)->create();
 
    // $this->call([
    //     StudentSeeder::class
    // ]);
    }

}

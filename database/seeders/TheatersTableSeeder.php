<?php

namespace Database\Seeders;

use App\Models\Theater;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TheatersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Theater::create([
            'name' => 'BRAGA XXI',
            'address' => 'BRAGA CITY WALK LT. 2, JL. BRAGA 99-101',
            'telephone' => '(022) 844 60121',
            'city' => 'KOTA. BANDUNG',
            'price' => 30000,
        ]);
        Theater::create([
            'name' => 'CIWALK XXI',
            'address' => 'CIWALK LT. 2, JL. CIHAMPELAS 160',
            'telephone' => '(022) 2061017',
            'city' => 'KOTA. BANDUNG',
            'price' => 30000,
        ]);
        Theater::create([
            'name' => "D'BOTANICA XXI",
            'address' => 'Bandung Trade Center Lt. P-2/3, Jl Dr. Djundjunan no. 143-149',
            'telephone' => '(022) 612 6521',
            'city' => 'KOTA. BANDUNG',
            'price' => 30000,
        ]);
        Theater::create([
            'name' => 'EMPIRE XXI BANDUNG',
            'address' => 'BANDUNG INDAH PLAZA LT. 3, JL. MERDEKA 56',
            'telephone' => ' (022) 424 0719',
            'city' => 'KOTA. BANDUNG',
            'price' => 30000,
        ]);
        Theater::create([
            'name' => 'FESTIVAL CITYLINK XXI',
            'address' => 'Festival Citylink Lt.3A Jl. Peta No. 241',
            'telephone' => '(022) 6128708',
            'city' => 'KOTA. BANDUNG',
            'price' => 30000,
        ]);
        Theater::create([
            'name' => 'JATOS',
            'address' => 'JL. RAYA JATINANGOR NO. 150',
            'telephone' => '(022) 8792 0089',
            'city' => 'KOTA. BANDUNG',
            'price' => 30000,
        ]);
        Theater::create([
            'name' => 'SUMMARECON MALL BANDUNG XXI',
            'address' => 'Summarecon Mall Bandung, Lt. 1 unit 1F-Unit A & A1, Jl. Bulevar Barat No. 75-89, Summarecon Bandung, Cisaranten Kidul, Kec. Gedebage, Kota Bandung, Jawa Barat 40295',
            'telephone' => '( 022 ) 30300045',
            'city' => 'KOTA. BANDUNG',
            'price' => 30000,
        ]);
        Theater::create([
            'name' => 'THEE MATIC MALL XXI',
            'address' => 'Thee Matic Mall - lantai 2, Jl. Anyar, Majasetra, Kec. Majalaya, Bandung, Jawa Barat 40382',
            'telephone' => '(022) 84227021',
            'city' => 'KOTA. BANDUNG',
            'price' => 30000,
        ]);
        Theater::create([
            'name' => 'TRANSMART BUAH BATU XXI',
            'address' => 'Buah Batu Square, Jln. Bojongsoang Raya No. 269, Cipagalo, Bojongsoang, Bandung',
            'telephone' => '(022) 86012956',
            'city' => 'KOTA. BANDUNG',
            'price' => 30000,
        ]);
        Theater::create([
            'name' => 'TSM XXI',
            'address' => 'BANDUNG SUPERMALL LT. 3, JL. JEND. GATOT SUBROTO',
            'telephone' => '(022) 86012557',
            'city' => 'KOTA. BANDUNG',
            'price' => 30000,
        ]);
        Theater::create([
            'name' => 'UBERTOS XXI',
            'address' => 'Ubertos Mall Lt.2, Jl. A. H Nasution No.46 A, Pakemitana, Cinambo',
            'telephone' => '(022) 63729921',
            'city' => 'KOTA. BANDUNG',
            'price' => 30000,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'id' => 1,
                'name' => 'Adana',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'id' => 2,
                'name' => 'Adıyaman',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'id' => 3,
                'name' => 'Afyonkarahisar',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'created_at' => NULL,
                'id' => 4,
                'name' => 'Ağrı',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'created_at' => NULL,
                'id' => 5,
                'name' => 'Aksaray',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'created_at' => NULL,
                'id' => 6,
                'name' => 'Amasya',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'created_at' => NULL,
                'id' => 7,
                'name' => 'Ankara',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'created_at' => NULL,
                'id' => 8,
                'name' => 'Antalya',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'created_at' => NULL,
                'id' => 9,
                'name' => 'Ardahan',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'created_at' => NULL,
                'id' => 10,
                'name' => 'Artvin',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'created_at' => NULL,
                'id' => 11,
                'name' => 'Aydın',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'created_at' => NULL,
                'id' => 12,
                'name' => 'Balıkesir',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'created_at' => NULL,
                'id' => 13,
                'name' => 'Bartın',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'created_at' => NULL,
                'id' => 14,
                'name' => 'Batman',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'created_at' => NULL,
                'id' => 15,
                'name' => 'Bayburt',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'created_at' => NULL,
                'id' => 16,
                'name' => 'Bilecik',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'created_at' => NULL,
                'id' => 17,
                'name' => 'Bingöl',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'created_at' => NULL,
                'id' => 18,
                'name' => 'Bitlis',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'created_at' => NULL,
                'id' => 19,
                'name' => 'Bolu',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'created_at' => NULL,
                'id' => 20,
                'name' => 'Burdur',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'created_at' => NULL,
                'id' => 21,
                'name' => 'Bursa',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'created_at' => NULL,
                'id' => 22,
                'name' => 'Çanakkale',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'created_at' => NULL,
                'id' => 23,
                'name' => 'Çankırı',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'created_at' => NULL,
                'id' => 24,
                'name' => 'Çorum',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'created_at' => NULL,
                'id' => 25,
                'name' => 'Denizli',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'created_at' => NULL,
                'id' => 26,
                'name' => 'Diyarbakır',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'created_at' => NULL,
                'id' => 27,
                'name' => 'Düzce',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'created_at' => NULL,
                'id' => 28,
                'name' => 'Edirne',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'created_at' => NULL,
                'id' => 29,
                'name' => 'Elazığ',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'created_at' => NULL,
                'id' => 30,
                'name' => 'Erzincan',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'created_at' => NULL,
                'id' => 31,
                'name' => 'Erzurum',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'created_at' => NULL,
                'id' => 32,
                'name' => 'Eskişehir',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'created_at' => NULL,
                'id' => 33,
                'name' => 'Gaziantep',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'created_at' => NULL,
                'id' => 34,
                'name' => 'Giresun',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'created_at' => NULL,
                'id' => 35,
                'name' => 'Gümüşhane',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'created_at' => NULL,
                'id' => 36,
                'name' => 'Hakkari',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'created_at' => NULL,
                'id' => 37,
                'name' => 'Hatay',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'created_at' => NULL,
                'id' => 38,
                'name' => 'Iğdır',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'created_at' => NULL,
                'id' => 39,
                'name' => 'Isparta',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'created_at' => NULL,
                'id' => 40,
                'name' => 'İstanbul',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'created_at' => NULL,
                'id' => 41,
                'name' => 'İzmir',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'created_at' => NULL,
                'id' => 42,
                'name' => 'Kahramanmaraş',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'created_at' => NULL,
                'id' => 43,
                'name' => 'Karabük',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'created_at' => NULL,
                'id' => 44,
                'name' => 'Karaman',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'created_at' => NULL,
                'id' => 45,
                'name' => 'Kars',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'created_at' => NULL,
                'id' => 46,
                'name' => 'Kastamonu',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'created_at' => NULL,
                'id' => 47,
                'name' => 'Kayseri',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'created_at' => NULL,
                'id' => 48,
                'name' => 'Kırıkkale',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'created_at' => NULL,
                'id' => 49,
                'name' => 'Kırklareli',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'created_at' => NULL,
                'id' => 50,
                'name' => 'Kırşehir',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'created_at' => NULL,
                'id' => 51,
                'name' => 'Kilis',
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'created_at' => NULL,
                'id' => 52,
                'name' => 'Kocaeli',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'created_at' => NULL,
                'id' => 53,
                'name' => 'Konya',
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'created_at' => NULL,
                'id' => 54,
                'name' => 'Kütahya',
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'created_at' => NULL,
                'id' => 55,
                'name' => 'Malatya',
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'created_at' => NULL,
                'id' => 56,
                'name' => 'Manisa',
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'created_at' => NULL,
                'id' => 57,
                'name' => 'Mardin',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'created_at' => NULL,
                'id' => 58,
                'name' => 'Mersin',
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'created_at' => NULL,
                'id' => 59,
                'name' => 'Muğla',
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'created_at' => NULL,
                'id' => 60,
                'name' => 'Muş',
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'created_at' => NULL,
                'id' => 61,
                'name' => 'Nevşehir',
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'created_at' => NULL,
                'id' => 62,
                'name' => 'Niğde',
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'created_at' => NULL,
                'id' => 63,
                'name' => 'Ordu',
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'created_at' => NULL,
                'id' => 64,
                'name' => 'Osmaniye',
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'created_at' => NULL,
                'id' => 65,
                'name' => 'Rize',
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'created_at' => NULL,
                'id' => 66,
                'name' => 'Sakarya',
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'created_at' => NULL,
                'id' => 67,
                'name' => 'Samsun',
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'created_at' => NULL,
                'id' => 68,
                'name' => 'Siirt',
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'created_at' => NULL,
                'id' => 69,
                'name' => 'Sinop',
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'created_at' => NULL,
                'id' => 70,
                'name' => 'Sivas',
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'created_at' => NULL,
                'id' => 71,
                'name' => 'Şanlıurfa',
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'created_at' => NULL,
                'id' => 72,
                'name' => 'Şırnak',
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'created_at' => NULL,
                'id' => 73,
                'name' => 'Tekirdağ',
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'created_at' => NULL,
                'id' => 74,
                'name' => 'Tokat',
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'created_at' => NULL,
                'id' => 75,
                'name' => 'Trabzon',
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'created_at' => NULL,
                'id' => 76,
                'name' => 'Tunceli',
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'created_at' => NULL,
                'id' => 77,
                'name' => 'Uşak',
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'created_at' => NULL,
                'id' => 78,
                'name' => 'Van',
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'created_at' => NULL,
                'id' => 79,
                'name' => 'Yalova',
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'created_at' => NULL,
                'id' => 80,
                'name' => 'Yozgat',
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'created_at' => NULL,
                'id' => 81,
                'name' => 'Zonguldak',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
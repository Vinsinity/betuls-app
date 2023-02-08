<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('counties')->delete();
        
        \DB::table('counties')->insert(array (
            0 => 
            array (
                'city_id' => 1,
                'created_at' => NULL,
                'id' => 1,
                'name' => 'Aladağ',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'city_id' => 1,
                'created_at' => NULL,
                'id' => 2,
                'name' => 'Ceyhan',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'city_id' => 1,
                'created_at' => NULL,
                'id' => 3,
                'name' => 'Çukurova',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'city_id' => 1,
                'created_at' => NULL,
                'id' => 4,
                'name' => 'Feke',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'city_id' => 1,
                'created_at' => NULL,
                'id' => 5,
                'name' => 'İmamoğlu',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'city_id' => 1,
                'created_at' => NULL,
                'id' => 6,
                'name' => 'Karaisalı',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'city_id' => 1,
                'created_at' => NULL,
                'id' => 7,
                'name' => 'Karataş',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'city_id' => 1,
                'created_at' => NULL,
                'id' => 8,
                'name' => 'Kozan',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'city_id' => 1,
                'created_at' => NULL,
                'id' => 9,
                'name' => 'Pozantı',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'city_id' => 1,
                'created_at' => NULL,
                'id' => 10,
                'name' => 'Saimbeyli',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'city_id' => 1,
                'created_at' => NULL,
                'id' => 11,
                'name' => 'Sarıçam',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'city_id' => 1,
                'created_at' => NULL,
                'id' => 12,
                'name' => 'Seyhan',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'city_id' => 1,
                'created_at' => NULL,
                'id' => 13,
                'name' => 'Tufanbeyli',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'city_id' => 1,
                'created_at' => NULL,
                'id' => 14,
                'name' => 'Yumurtalık',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'city_id' => 1,
                'created_at' => NULL,
                'id' => 15,
                'name' => 'Yüreğir',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'city_id' => 2,
                'created_at' => NULL,
                'id' => 16,
                'name' => 'Besni',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'city_id' => 2,
                'created_at' => NULL,
                'id' => 17,
                'name' => 'Çelikhan',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'city_id' => 2,
                'created_at' => NULL,
                'id' => 18,
                'name' => 'Gerger',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'city_id' => 2,
                'created_at' => NULL,
                'id' => 19,
                'name' => 'Gölbaşı',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'city_id' => 2,
                'created_at' => NULL,
                'id' => 20,
                'name' => 'Kahta',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'city_id' => 2,
                'created_at' => NULL,
                'id' => 21,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'city_id' => 2,
                'created_at' => NULL,
                'id' => 22,
                'name' => 'Samsat',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'city_id' => 2,
                'created_at' => NULL,
                'id' => 23,
                'name' => 'Sincik',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'city_id' => 2,
                'created_at' => NULL,
                'id' => 24,
                'name' => 'Tut',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'city_id' => 3,
                'created_at' => NULL,
                'id' => 25,
                'name' => 'Başmakçı',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'city_id' => 3,
                'created_at' => NULL,
                'id' => 26,
                'name' => 'Bayat',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'city_id' => 3,
                'created_at' => NULL,
                'id' => 27,
                'name' => 'Bolvadin',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'city_id' => 3,
                'created_at' => NULL,
                'id' => 28,
                'name' => 'Çay',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'city_id' => 3,
                'created_at' => NULL,
                'id' => 29,
                'name' => 'Çobanlar',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'city_id' => 3,
                'created_at' => NULL,
                'id' => 30,
                'name' => 'Dazkırı',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'city_id' => 3,
                'created_at' => NULL,
                'id' => 31,
                'name' => 'Dinar',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'city_id' => 3,
                'created_at' => NULL,
                'id' => 32,
                'name' => 'Emirdağ',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'city_id' => 3,
                'created_at' => NULL,
                'id' => 33,
                'name' => 'Evciler',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'city_id' => 3,
                'created_at' => NULL,
                'id' => 34,
                'name' => 'Hocalar',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'city_id' => 3,
                'created_at' => NULL,
                'id' => 35,
                'name' => 'İhsaniye',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'city_id' => 3,
                'created_at' => NULL,
                'id' => 36,
                'name' => 'İscehisar',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'city_id' => 3,
                'created_at' => NULL,
                'id' => 37,
                'name' => 'Kızılören',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'city_id' => 3,
                'created_at' => NULL,
                'id' => 38,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'city_id' => 3,
                'created_at' => NULL,
                'id' => 39,
                'name' => 'Sandıklı',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'city_id' => 3,
                'created_at' => NULL,
                'id' => 40,
                'name' => 'Sinanpaşa',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'city_id' => 3,
                'created_at' => NULL,
                'id' => 41,
                'name' => 'Sultandağı',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'city_id' => 3,
                'created_at' => NULL,
                'id' => 42,
                'name' => 'Şuhut',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'city_id' => 4,
                'created_at' => NULL,
                'id' => 43,
                'name' => 'Diyadin',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'city_id' => 4,
                'created_at' => NULL,
                'id' => 44,
                'name' => 'Doğubayazıt',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'city_id' => 4,
                'created_at' => NULL,
                'id' => 45,
                'name' => 'Eleşkirt',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'city_id' => 4,
                'created_at' => NULL,
                'id' => 46,
                'name' => 'Hamur',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'city_id' => 4,
                'created_at' => NULL,
                'id' => 47,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'city_id' => 4,
                'created_at' => NULL,
                'id' => 48,
                'name' => 'Patnos',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'city_id' => 4,
                'created_at' => NULL,
                'id' => 49,
                'name' => 'Taşlıçay',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'city_id' => 4,
                'created_at' => NULL,
                'id' => 50,
                'name' => 'Tutak',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'city_id' => 5,
                'created_at' => NULL,
                'id' => 51,
                'name' => 'Ağaçören',
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'city_id' => 5,
                'created_at' => NULL,
                'id' => 52,
                'name' => 'Eskil',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'city_id' => 5,
                'created_at' => NULL,
                'id' => 53,
                'name' => 'Gülağaç',
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'city_id' => 5,
                'created_at' => NULL,
                'id' => 54,
                'name' => 'Güzelyurt',
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'city_id' => 5,
                'created_at' => NULL,
                'id' => 55,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'city_id' => 5,
                'created_at' => NULL,
                'id' => 56,
                'name' => 'Ortaköy',
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'city_id' => 5,
                'created_at' => NULL,
                'id' => 57,
                'name' => 'Sarıyahşi',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'city_id' => 5,
                'created_at' => NULL,
                'id' => 58,
                'name' => 'Sultanhanı',
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'city_id' => 6,
                'created_at' => NULL,
                'id' => 59,
                'name' => 'Göynücek',
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'city_id' => 6,
                'created_at' => NULL,
                'id' => 60,
                'name' => 'Gümüşhacıköy',
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'city_id' => 6,
                'created_at' => NULL,
                'id' => 61,
                'name' => 'Hamamözü',
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'city_id' => 6,
                'created_at' => NULL,
                'id' => 62,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'city_id' => 6,
                'created_at' => NULL,
                'id' => 63,
                'name' => 'Merzifon',
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'city_id' => 6,
                'created_at' => NULL,
                'id' => 64,
                'name' => 'Suluova',
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'city_id' => 6,
                'created_at' => NULL,
                'id' => 65,
                'name' => 'Taşova',
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 66,
                'name' => 'Akyurt',
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 67,
                'name' => 'Altındağ',
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 68,
                'name' => 'Ayaş',
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 69,
                'name' => 'Bala',
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 70,
                'name' => 'Beypazarı',
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 71,
                'name' => 'Çamlıdere',
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 72,
                'name' => 'Çankaya',
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 73,
                'name' => 'Çubuk',
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 74,
                'name' => 'Elmadağ',
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 75,
                'name' => 'Etimesgut',
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 76,
                'name' => 'Evren',
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 77,
                'name' => 'Gölbaşı',
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 78,
                'name' => 'Güdül',
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 79,
                'name' => 'Haymana',
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 80,
                'name' => 'Kahramankazan',
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 81,
                'name' => 'Kalecik',
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 82,
                'name' => 'Keçiören',
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 83,
                'name' => 'Kızılcahamam',
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 84,
                'name' => 'Mamak',
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 85,
                'name' => 'Nallıhan',
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 86,
                'name' => 'Polatlı',
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 87,
                'name' => 'Pursaklar',
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 88,
                'name' => 'Sincan',
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 89,
                'name' => 'Şereflikoçhisar',
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'city_id' => 7,
                'created_at' => NULL,
                'id' => 90,
                'name' => 'Yenimahalle',
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'city_id' => 8,
                'created_at' => NULL,
                'id' => 91,
                'name' => 'Akseki',
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'city_id' => 8,
                'created_at' => NULL,
                'id' => 92,
                'name' => 'Aksu',
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'city_id' => 8,
                'created_at' => NULL,
                'id' => 93,
                'name' => 'Alanya',
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'city_id' => 8,
                'created_at' => NULL,
                'id' => 94,
                'name' => 'Demre',
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'city_id' => 8,
                'created_at' => NULL,
                'id' => 95,
                'name' => 'Döşemealtı',
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'city_id' => 8,
                'created_at' => NULL,
                'id' => 96,
                'name' => 'Elmalı',
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'city_id' => 8,
                'created_at' => NULL,
                'id' => 97,
                'name' => 'Finike',
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'city_id' => 8,
                'created_at' => NULL,
                'id' => 98,
                'name' => 'Gazipaşa',
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'city_id' => 8,
                'created_at' => NULL,
                'id' => 99,
                'name' => 'Gündoğmuş',
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'city_id' => 8,
                'created_at' => NULL,
                'id' => 100,
                'name' => 'İbradı',
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'city_id' => 8,
                'created_at' => NULL,
                'id' => 101,
                'name' => 'Kaş',
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'city_id' => 8,
                'created_at' => NULL,
                'id' => 102,
                'name' => 'Kemer',
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'city_id' => 8,
                'created_at' => NULL,
                'id' => 103,
                'name' => 'Kepez',
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'city_id' => 8,
                'created_at' => NULL,
                'id' => 104,
                'name' => 'Konyaaltı',
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'city_id' => 8,
                'created_at' => NULL,
                'id' => 105,
                'name' => 'Korkuteli',
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'city_id' => 8,
                'created_at' => NULL,
                'id' => 106,
                'name' => 'Kumluca',
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'city_id' => 8,
                'created_at' => NULL,
                'id' => 107,
                'name' => 'Manavgat',
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'city_id' => 8,
                'created_at' => NULL,
                'id' => 108,
                'name' => 'Muratpaşa',
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'city_id' => 8,
                'created_at' => NULL,
                'id' => 109,
                'name' => 'Serik',
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'city_id' => 9,
                'created_at' => NULL,
                'id' => 110,
                'name' => 'Çıldır',
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'city_id' => 9,
                'created_at' => NULL,
                'id' => 111,
                'name' => 'Damal',
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'city_id' => 9,
                'created_at' => NULL,
                'id' => 112,
                'name' => 'Göle',
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'city_id' => 9,
                'created_at' => NULL,
                'id' => 113,
                'name' => 'Hanak',
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'city_id' => 9,
                'created_at' => NULL,
                'id' => 114,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'city_id' => 9,
                'created_at' => NULL,
                'id' => 115,
                'name' => 'Posof',
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'city_id' => 10,
                'created_at' => NULL,
                'id' => 116,
                'name' => 'Ardanuç',
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'city_id' => 10,
                'created_at' => NULL,
                'id' => 117,
                'name' => 'Arhavi',
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'city_id' => 10,
                'created_at' => NULL,
                'id' => 118,
                'name' => 'Borçka',
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'city_id' => 10,
                'created_at' => NULL,
                'id' => 119,
                'name' => 'Hopa',
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'city_id' => 10,
                'created_at' => NULL,
                'id' => 120,
                'name' => 'Kemalpaşa',
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'city_id' => 10,
                'created_at' => NULL,
                'id' => 121,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'city_id' => 10,
                'created_at' => NULL,
                'id' => 122,
                'name' => 'Murgul',
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'city_id' => 10,
                'created_at' => NULL,
                'id' => 123,
                'name' => 'Şavşat',
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'city_id' => 10,
                'created_at' => NULL,
                'id' => 124,
                'name' => 'Yusufeli',
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'city_id' => 11,
                'created_at' => NULL,
                'id' => 125,
                'name' => 'Bozdoğan',
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'city_id' => 11,
                'created_at' => NULL,
                'id' => 126,
                'name' => 'Buharkent',
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'city_id' => 11,
                'created_at' => NULL,
                'id' => 127,
                'name' => 'Çine',
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'city_id' => 11,
                'created_at' => NULL,
                'id' => 128,
                'name' => 'Didim',
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'city_id' => 11,
                'created_at' => NULL,
                'id' => 129,
                'name' => 'Efeler',
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'city_id' => 11,
                'created_at' => NULL,
                'id' => 130,
                'name' => 'Germencik',
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'city_id' => 11,
                'created_at' => NULL,
                'id' => 131,
                'name' => 'İncirliova',
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'city_id' => 11,
                'created_at' => NULL,
                'id' => 132,
                'name' => 'Karacasu',
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'city_id' => 11,
                'created_at' => NULL,
                'id' => 133,
                'name' => 'Karpuzlu',
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'city_id' => 11,
                'created_at' => NULL,
                'id' => 134,
                'name' => 'Koçarlı',
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'city_id' => 11,
                'created_at' => NULL,
                'id' => 135,
                'name' => 'Köşk',
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'city_id' => 11,
                'created_at' => NULL,
                'id' => 136,
                'name' => 'Kuşadası',
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'city_id' => 11,
                'created_at' => NULL,
                'id' => 137,
                'name' => 'Kuyucak',
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'city_id' => 11,
                'created_at' => NULL,
                'id' => 138,
                'name' => 'Nazilli',
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'city_id' => 11,
                'created_at' => NULL,
                'id' => 139,
                'name' => 'Söke',
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'city_id' => 11,
                'created_at' => NULL,
                'id' => 140,
                'name' => 'Sultanhisar',
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'city_id' => 11,
                'created_at' => NULL,
                'id' => 141,
                'name' => 'Yenipazar',
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'city_id' => 12,
                'created_at' => NULL,
                'id' => 142,
                'name' => 'Altıeylül',
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'city_id' => 12,
                'created_at' => NULL,
                'id' => 143,
                'name' => 'Ayvalık',
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'city_id' => 12,
                'created_at' => NULL,
                'id' => 144,
                'name' => 'Balya',
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'city_id' => 12,
                'created_at' => NULL,
                'id' => 145,
                'name' => 'Bandırma',
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'city_id' => 12,
                'created_at' => NULL,
                'id' => 146,
                'name' => 'Bigadiç',
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'city_id' => 12,
                'created_at' => NULL,
                'id' => 147,
                'name' => 'Burhaniye',
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'city_id' => 12,
                'created_at' => NULL,
                'id' => 148,
                'name' => 'Dursunbey',
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'city_id' => 12,
                'created_at' => NULL,
                'id' => 149,
                'name' => 'Edremit',
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'city_id' => 12,
                'created_at' => NULL,
                'id' => 150,
                'name' => 'Erdek',
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'city_id' => 12,
                'created_at' => NULL,
                'id' => 151,
                'name' => 'Gömeç',
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'city_id' => 12,
                'created_at' => NULL,
                'id' => 152,
                'name' => 'Gönen',
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'city_id' => 12,
                'created_at' => NULL,
                'id' => 153,
                'name' => 'Havran',
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'city_id' => 12,
                'created_at' => NULL,
                'id' => 154,
                'name' => 'İvrindi',
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'city_id' => 12,
                'created_at' => NULL,
                'id' => 155,
                'name' => 'Karesi',
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'city_id' => 12,
                'created_at' => NULL,
                'id' => 156,
                'name' => 'Kepsut',
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'city_id' => 12,
                'created_at' => NULL,
                'id' => 157,
                'name' => 'Manyas',
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'city_id' => 12,
                'created_at' => NULL,
                'id' => 158,
                'name' => 'Marmara',
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'city_id' => 12,
                'created_at' => NULL,
                'id' => 159,
                'name' => 'Savaştepe',
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'city_id' => 12,
                'created_at' => NULL,
                'id' => 160,
                'name' => 'Sındırgı',
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'city_id' => 12,
                'created_at' => NULL,
                'id' => 161,
                'name' => 'Susurluk',
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'city_id' => 13,
                'created_at' => NULL,
                'id' => 162,
                'name' => 'Amasra',
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'city_id' => 13,
                'created_at' => NULL,
                'id' => 163,
                'name' => 'Kurucaşile',
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'city_id' => 13,
                'created_at' => NULL,
                'id' => 164,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'city_id' => 13,
                'created_at' => NULL,
                'id' => 165,
                'name' => 'Ulus',
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'city_id' => 14,
                'created_at' => NULL,
                'id' => 166,
                'name' => 'Beşiri',
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'city_id' => 14,
                'created_at' => NULL,
                'id' => 167,
                'name' => 'Gercüş',
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'city_id' => 14,
                'created_at' => NULL,
                'id' => 168,
                'name' => 'Hasankeyf',
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'city_id' => 14,
                'created_at' => NULL,
                'id' => 169,
                'name' => 'Kozluk',
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'city_id' => 14,
                'created_at' => NULL,
                'id' => 170,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'city_id' => 14,
                'created_at' => NULL,
                'id' => 171,
                'name' => 'Sason',
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'city_id' => 15,
                'created_at' => NULL,
                'id' => 172,
                'name' => 'Aydıntepe',
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'city_id' => 15,
                'created_at' => NULL,
                'id' => 173,
                'name' => 'Demirözü',
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'city_id' => 15,
                'created_at' => NULL,
                'id' => 174,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'city_id' => 16,
                'created_at' => NULL,
                'id' => 175,
                'name' => 'Bozüyük',
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'city_id' => 16,
                'created_at' => NULL,
                'id' => 176,
                'name' => 'Gölpazarı',
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'city_id' => 16,
                'created_at' => NULL,
                'id' => 177,
                'name' => 'İnhisar',
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'city_id' => 16,
                'created_at' => NULL,
                'id' => 178,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'city_id' => 16,
                'created_at' => NULL,
                'id' => 179,
                'name' => 'Osmaneli',
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'city_id' => 16,
                'created_at' => NULL,
                'id' => 180,
                'name' => 'Pazaryeri',
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'city_id' => 16,
                'created_at' => NULL,
                'id' => 181,
                'name' => 'Söğüt',
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'city_id' => 16,
                'created_at' => NULL,
                'id' => 182,
                'name' => 'Yenipazar',
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'city_id' => 17,
                'created_at' => NULL,
                'id' => 183,
                'name' => 'Adaklı',
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'city_id' => 17,
                'created_at' => NULL,
                'id' => 184,
                'name' => 'Genç',
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'city_id' => 17,
                'created_at' => NULL,
                'id' => 185,
                'name' => 'Karlıova',
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'city_id' => 17,
                'created_at' => NULL,
                'id' => 186,
                'name' => 'Kiğı',
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'city_id' => 17,
                'created_at' => NULL,
                'id' => 187,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'city_id' => 17,
                'created_at' => NULL,
                'id' => 188,
                'name' => 'Solhan',
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'city_id' => 17,
                'created_at' => NULL,
                'id' => 189,
                'name' => 'Yayladere',
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'city_id' => 17,
                'created_at' => NULL,
                'id' => 190,
                'name' => 'Yedisu',
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'city_id' => 18,
                'created_at' => NULL,
                'id' => 191,
                'name' => 'Adilcevaz',
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'city_id' => 18,
                'created_at' => NULL,
                'id' => 192,
                'name' => 'Ahlat',
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'city_id' => 18,
                'created_at' => NULL,
                'id' => 193,
                'name' => 'Güroymak',
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'city_id' => 18,
                'created_at' => NULL,
                'id' => 194,
                'name' => 'Hizan',
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'city_id' => 18,
                'created_at' => NULL,
                'id' => 195,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'city_id' => 18,
                'created_at' => NULL,
                'id' => 196,
                'name' => 'Mutki',
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'city_id' => 18,
                'created_at' => NULL,
                'id' => 197,
                'name' => 'Tatvan',
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'city_id' => 19,
                'created_at' => NULL,
                'id' => 198,
                'name' => 'Dörtdivan',
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'city_id' => 19,
                'created_at' => NULL,
                'id' => 199,
                'name' => 'Gerede',
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'city_id' => 19,
                'created_at' => NULL,
                'id' => 200,
                'name' => 'Göynük',
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'city_id' => 19,
                'created_at' => NULL,
                'id' => 201,
                'name' => 'Kıbrıscık',
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'city_id' => 19,
                'created_at' => NULL,
                'id' => 202,
                'name' => 'Mengen',
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'city_id' => 19,
                'created_at' => NULL,
                'id' => 203,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'city_id' => 19,
                'created_at' => NULL,
                'id' => 204,
                'name' => 'Mudurnu',
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'city_id' => 19,
                'created_at' => NULL,
                'id' => 205,
                'name' => 'Seben',
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'city_id' => 19,
                'created_at' => NULL,
                'id' => 206,
                'name' => 'Yeniçağa',
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'city_id' => 20,
                'created_at' => NULL,
                'id' => 207,
                'name' => 'Ağlasun',
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'city_id' => 20,
                'created_at' => NULL,
                'id' => 208,
                'name' => 'Altınyayla',
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'city_id' => 20,
                'created_at' => NULL,
                'id' => 209,
                'name' => 'Bucak',
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'city_id' => 20,
                'created_at' => NULL,
                'id' => 210,
                'name' => 'Çavdır',
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'city_id' => 20,
                'created_at' => NULL,
                'id' => 211,
                'name' => 'Çeltikçi',
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'city_id' => 20,
                'created_at' => NULL,
                'id' => 212,
                'name' => 'Gölhisar',
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'city_id' => 20,
                'created_at' => NULL,
                'id' => 213,
                'name' => 'Karamanlı',
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'city_id' => 20,
                'created_at' => NULL,
                'id' => 214,
                'name' => 'Kemer',
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'city_id' => 20,
                'created_at' => NULL,
                'id' => 215,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'city_id' => 20,
                'created_at' => NULL,
                'id' => 216,
                'name' => 'Tefenni',
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'city_id' => 20,
                'created_at' => NULL,
                'id' => 217,
                'name' => 'Yeşilova',
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'city_id' => 21,
                'created_at' => NULL,
                'id' => 218,
                'name' => 'Büyükorhan',
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'city_id' => 21,
                'created_at' => NULL,
                'id' => 219,
                'name' => 'Gemlik',
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'city_id' => 21,
                'created_at' => NULL,
                'id' => 220,
                'name' => 'Gürsu',
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'city_id' => 21,
                'created_at' => NULL,
                'id' => 221,
                'name' => 'Harmancık',
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'city_id' => 21,
                'created_at' => NULL,
                'id' => 222,
                'name' => 'İnegöl',
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'city_id' => 21,
                'created_at' => NULL,
                'id' => 223,
                'name' => 'İznik',
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'city_id' => 21,
                'created_at' => NULL,
                'id' => 224,
                'name' => 'Karacabey',
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'city_id' => 21,
                'created_at' => NULL,
                'id' => 225,
                'name' => 'Keles',
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'city_id' => 21,
                'created_at' => NULL,
                'id' => 226,
                'name' => 'Kestel',
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'city_id' => 21,
                'created_at' => NULL,
                'id' => 227,
                'name' => 'Mudanya',
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'city_id' => 21,
                'created_at' => NULL,
                'id' => 228,
                'name' => 'Mustafakemalpaşa',
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'city_id' => 21,
                'created_at' => NULL,
                'id' => 229,
                'name' => 'Nilüfer',
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'city_id' => 21,
                'created_at' => NULL,
                'id' => 230,
                'name' => 'Orhaneli',
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'city_id' => 21,
                'created_at' => NULL,
                'id' => 231,
                'name' => 'Orhangazi',
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'city_id' => 21,
                'created_at' => NULL,
                'id' => 232,
                'name' => 'Osmangazi',
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'city_id' => 21,
                'created_at' => NULL,
                'id' => 233,
                'name' => 'Yenişehir',
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'city_id' => 21,
                'created_at' => NULL,
                'id' => 234,
                'name' => 'Yıldırım',
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'city_id' => 22,
                'created_at' => NULL,
                'id' => 235,
                'name' => 'Ayvacık',
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'city_id' => 22,
                'created_at' => NULL,
                'id' => 236,
                'name' => 'Bayramiç',
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'city_id' => 22,
                'created_at' => NULL,
                'id' => 237,
                'name' => 'Biga',
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'city_id' => 22,
                'created_at' => NULL,
                'id' => 238,
                'name' => 'Bozcaada',
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'city_id' => 22,
                'created_at' => NULL,
                'id' => 239,
                'name' => 'Çan',
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'city_id' => 22,
                'created_at' => NULL,
                'id' => 240,
                'name' => 'Eceabat',
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'city_id' => 22,
                'created_at' => NULL,
                'id' => 241,
                'name' => 'Ezine',
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'city_id' => 22,
                'created_at' => NULL,
                'id' => 242,
                'name' => 'Gelibolu',
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'city_id' => 22,
                'created_at' => NULL,
                'id' => 243,
                'name' => 'Gökçeada',
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'city_id' => 22,
                'created_at' => NULL,
                'id' => 244,
                'name' => 'Lapseki',
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'city_id' => 22,
                'created_at' => NULL,
                'id' => 245,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'city_id' => 22,
                'created_at' => NULL,
                'id' => 246,
                'name' => 'Yenice',
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'city_id' => 23,
                'created_at' => NULL,
                'id' => 247,
                'name' => 'Atkaracalar',
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'city_id' => 23,
                'created_at' => NULL,
                'id' => 248,
                'name' => 'Bayramören',
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'city_id' => 23,
                'created_at' => NULL,
                'id' => 249,
                'name' => 'Çerkeş',
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'city_id' => 23,
                'created_at' => NULL,
                'id' => 250,
                'name' => 'Eldivan',
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'city_id' => 23,
                'created_at' => NULL,
                'id' => 251,
                'name' => 'Ilgaz',
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'city_id' => 23,
                'created_at' => NULL,
                'id' => 252,
                'name' => 'Kızılırmak',
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'city_id' => 23,
                'created_at' => NULL,
                'id' => 253,
                'name' => 'Korgun',
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'city_id' => 23,
                'created_at' => NULL,
                'id' => 254,
                'name' => 'Kurşunlu',
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'city_id' => 23,
                'created_at' => NULL,
                'id' => 255,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'city_id' => 23,
                'created_at' => NULL,
                'id' => 256,
                'name' => 'Orta',
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'city_id' => 23,
                'created_at' => NULL,
                'id' => 257,
                'name' => 'Şabanözü',
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'city_id' => 23,
                'created_at' => NULL,
                'id' => 258,
                'name' => 'Yapraklı',
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'city_id' => 24,
                'created_at' => NULL,
                'id' => 259,
                'name' => 'Alaca',
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'city_id' => 24,
                'created_at' => NULL,
                'id' => 260,
                'name' => 'Bayat',
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'city_id' => 24,
                'created_at' => NULL,
                'id' => 261,
                'name' => 'Boğazkale',
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'city_id' => 24,
                'created_at' => NULL,
                'id' => 262,
                'name' => 'Dodurga',
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'city_id' => 24,
                'created_at' => NULL,
                'id' => 263,
                'name' => 'İskilip',
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'city_id' => 24,
                'created_at' => NULL,
                'id' => 264,
                'name' => 'Kargı',
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'city_id' => 24,
                'created_at' => NULL,
                'id' => 265,
                'name' => 'Laçin',
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'city_id' => 24,
                'created_at' => NULL,
                'id' => 266,
                'name' => 'Mecitözü',
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'city_id' => 24,
                'created_at' => NULL,
                'id' => 267,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'city_id' => 24,
                'created_at' => NULL,
                'id' => 268,
                'name' => 'Oğuzlar',
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'city_id' => 24,
                'created_at' => NULL,
                'id' => 269,
                'name' => 'Ortaköy',
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'city_id' => 24,
                'created_at' => NULL,
                'id' => 270,
                'name' => 'Osmancık',
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'city_id' => 24,
                'created_at' => NULL,
                'id' => 271,
                'name' => 'Sungurlu',
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'city_id' => 24,
                'created_at' => NULL,
                'id' => 272,
                'name' => 'Uğurludağ',
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'city_id' => 25,
                'created_at' => NULL,
                'id' => 273,
                'name' => 'Acıpayam',
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'city_id' => 25,
                'created_at' => NULL,
                'id' => 274,
                'name' => 'Babadağ',
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'city_id' => 25,
                'created_at' => NULL,
                'id' => 275,
                'name' => 'Baklan',
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'city_id' => 25,
                'created_at' => NULL,
                'id' => 276,
                'name' => 'Bekilli',
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'city_id' => 25,
                'created_at' => NULL,
                'id' => 277,
                'name' => 'Beyağaç',
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'city_id' => 25,
                'created_at' => NULL,
                'id' => 278,
                'name' => 'Bozkurt',
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'city_id' => 25,
                'created_at' => NULL,
                'id' => 279,
                'name' => 'Buldan',
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'city_id' => 25,
                'created_at' => NULL,
                'id' => 280,
                'name' => 'Çal',
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'city_id' => 25,
                'created_at' => NULL,
                'id' => 281,
                'name' => 'Çameli',
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'city_id' => 25,
                'created_at' => NULL,
                'id' => 282,
                'name' => 'Çardak',
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'city_id' => 25,
                'created_at' => NULL,
                'id' => 283,
                'name' => 'Çivril',
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'city_id' => 25,
                'created_at' => NULL,
                'id' => 284,
                'name' => 'Güney',
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'city_id' => 25,
                'created_at' => NULL,
                'id' => 285,
                'name' => 'Honaz',
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'city_id' => 25,
                'created_at' => NULL,
                'id' => 286,
                'name' => 'Kale',
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'city_id' => 25,
                'created_at' => NULL,
                'id' => 287,
                'name' => 'Merkezefendi',
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'city_id' => 25,
                'created_at' => NULL,
                'id' => 288,
                'name' => 'Pamukkale',
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'city_id' => 25,
                'created_at' => NULL,
                'id' => 289,
                'name' => 'Sarayköy',
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'city_id' => 25,
                'created_at' => NULL,
                'id' => 290,
                'name' => 'Serinhisar',
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'city_id' => 25,
                'created_at' => NULL,
                'id' => 291,
                'name' => 'Tavas',
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'city_id' => 26,
                'created_at' => NULL,
                'id' => 292,
                'name' => 'Bağlar',
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'city_id' => 26,
                'created_at' => NULL,
                'id' => 293,
                'name' => 'Bismil',
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'city_id' => 26,
                'created_at' => NULL,
                'id' => 294,
                'name' => 'Çermik',
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'city_id' => 26,
                'created_at' => NULL,
                'id' => 295,
                'name' => 'Çınar',
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'city_id' => 26,
                'created_at' => NULL,
                'id' => 296,
                'name' => 'Çüngüş',
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'city_id' => 26,
                'created_at' => NULL,
                'id' => 297,
                'name' => 'Dicle',
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'city_id' => 26,
                'created_at' => NULL,
                'id' => 298,
                'name' => 'Eğil',
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'city_id' => 26,
                'created_at' => NULL,
                'id' => 299,
                'name' => 'Ergani',
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'city_id' => 26,
                'created_at' => NULL,
                'id' => 300,
                'name' => 'Hani',
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'city_id' => 26,
                'created_at' => NULL,
                'id' => 301,
                'name' => 'Hazro',
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'city_id' => 26,
                'created_at' => NULL,
                'id' => 302,
                'name' => 'Kayapınar',
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'city_id' => 26,
                'created_at' => NULL,
                'id' => 303,
                'name' => 'Kocaköy',
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'city_id' => 26,
                'created_at' => NULL,
                'id' => 304,
                'name' => 'Kulp',
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'city_id' => 26,
                'created_at' => NULL,
                'id' => 305,
                'name' => 'Lice',
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'city_id' => 26,
                'created_at' => NULL,
                'id' => 306,
                'name' => 'Silvan',
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'city_id' => 26,
                'created_at' => NULL,
                'id' => 307,
                'name' => 'Sur',
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'city_id' => 26,
                'created_at' => NULL,
                'id' => 308,
                'name' => 'Yenişehir',
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'city_id' => 27,
                'created_at' => NULL,
                'id' => 309,
                'name' => 'Akçakoca',
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'city_id' => 27,
                'created_at' => NULL,
                'id' => 310,
                'name' => 'Cumayeri',
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'city_id' => 27,
                'created_at' => NULL,
                'id' => 311,
                'name' => 'Çilimli',
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'city_id' => 27,
                'created_at' => NULL,
                'id' => 312,
                'name' => 'Gölyaka',
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'city_id' => 27,
                'created_at' => NULL,
                'id' => 313,
                'name' => 'Gümüşova',
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'city_id' => 27,
                'created_at' => NULL,
                'id' => 314,
                'name' => 'Kaynaşlı',
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'city_id' => 27,
                'created_at' => NULL,
                'id' => 315,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'city_id' => 27,
                'created_at' => NULL,
                'id' => 316,
                'name' => 'Yığılca',
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'city_id' => 28,
                'created_at' => NULL,
                'id' => 317,
                'name' => 'Enez',
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'city_id' => 28,
                'created_at' => NULL,
                'id' => 318,
                'name' => 'Havsa',
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'city_id' => 28,
                'created_at' => NULL,
                'id' => 319,
                'name' => 'İpsala',
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'city_id' => 28,
                'created_at' => NULL,
                'id' => 320,
                'name' => 'Keşan',
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'city_id' => 28,
                'created_at' => NULL,
                'id' => 321,
                'name' => 'Lalapaşa',
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'city_id' => 28,
                'created_at' => NULL,
                'id' => 322,
                'name' => 'Meriç',
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'city_id' => 28,
                'created_at' => NULL,
                'id' => 323,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'city_id' => 28,
                'created_at' => NULL,
                'id' => 324,
                'name' => 'Süloğlu',
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'city_id' => 28,
                'created_at' => NULL,
                'id' => 325,
                'name' => 'Uzunköprü',
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'city_id' => 29,
                'created_at' => NULL,
                'id' => 326,
                'name' => 'Ağın',
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'city_id' => 29,
                'created_at' => NULL,
                'id' => 327,
                'name' => 'Alacakaya',
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'city_id' => 29,
                'created_at' => NULL,
                'id' => 328,
                'name' => 'Arıcak',
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'city_id' => 29,
                'created_at' => NULL,
                'id' => 329,
                'name' => 'Baskil',
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'city_id' => 29,
                'created_at' => NULL,
                'id' => 330,
                'name' => 'Karakoçan',
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'city_id' => 29,
                'created_at' => NULL,
                'id' => 331,
                'name' => 'Keban',
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'city_id' => 29,
                'created_at' => NULL,
                'id' => 332,
                'name' => 'Kovancılar',
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'city_id' => 29,
                'created_at' => NULL,
                'id' => 333,
                'name' => 'Maden',
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'city_id' => 29,
                'created_at' => NULL,
                'id' => 334,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'city_id' => 29,
                'created_at' => NULL,
                'id' => 335,
                'name' => 'Palu',
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'city_id' => 29,
                'created_at' => NULL,
                'id' => 336,
                'name' => 'Sivrice',
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'city_id' => 30,
                'created_at' => NULL,
                'id' => 337,
                'name' => 'Çayırlı',
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'city_id' => 30,
                'created_at' => NULL,
                'id' => 338,
                'name' => 'İliç',
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'city_id' => 30,
                'created_at' => NULL,
                'id' => 339,
                'name' => 'Kemah',
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'city_id' => 30,
                'created_at' => NULL,
                'id' => 340,
                'name' => 'Kemaliye',
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'city_id' => 30,
                'created_at' => NULL,
                'id' => 341,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'city_id' => 30,
                'created_at' => NULL,
                'id' => 342,
                'name' => 'Otlukbeli',
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'city_id' => 30,
                'created_at' => NULL,
                'id' => 343,
                'name' => 'Refahiye',
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'city_id' => 30,
                'created_at' => NULL,
                'id' => 344,
                'name' => 'Tercan',
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'city_id' => 30,
                'created_at' => NULL,
                'id' => 345,
                'name' => 'Üzümlü',
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'city_id' => 31,
                'created_at' => NULL,
                'id' => 346,
                'name' => 'Aşkale',
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'city_id' => 31,
                'created_at' => NULL,
                'id' => 347,
                'name' => 'Aziziye',
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'city_id' => 31,
                'created_at' => NULL,
                'id' => 348,
                'name' => 'Çat',
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'city_id' => 31,
                'created_at' => NULL,
                'id' => 349,
                'name' => 'Hınıs',
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'city_id' => 31,
                'created_at' => NULL,
                'id' => 350,
                'name' => 'Horasan',
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'city_id' => 31,
                'created_at' => NULL,
                'id' => 351,
                'name' => 'İspir',
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'city_id' => 31,
                'created_at' => NULL,
                'id' => 352,
                'name' => 'Karaçoban',
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'city_id' => 31,
                'created_at' => NULL,
                'id' => 353,
                'name' => 'Karayazı',
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'city_id' => 31,
                'created_at' => NULL,
                'id' => 354,
                'name' => 'Köprüköy',
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'city_id' => 31,
                'created_at' => NULL,
                'id' => 355,
                'name' => 'Narman',
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'city_id' => 31,
                'created_at' => NULL,
                'id' => 356,
                'name' => 'Oltu',
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'city_id' => 31,
                'created_at' => NULL,
                'id' => 357,
                'name' => 'Olur',
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'city_id' => 31,
                'created_at' => NULL,
                'id' => 358,
                'name' => 'Palandöken',
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'city_id' => 31,
                'created_at' => NULL,
                'id' => 359,
                'name' => 'Pasinler',
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'city_id' => 31,
                'created_at' => NULL,
                'id' => 360,
                'name' => 'Pazaryolu',
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'city_id' => 31,
                'created_at' => NULL,
                'id' => 361,
                'name' => 'Şenkaya',
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'city_id' => 31,
                'created_at' => NULL,
                'id' => 362,
                'name' => 'Tekman',
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'city_id' => 31,
                'created_at' => NULL,
                'id' => 363,
                'name' => 'Tortum',
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'city_id' => 31,
                'created_at' => NULL,
                'id' => 364,
                'name' => 'Uzundere',
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'city_id' => 31,
                'created_at' => NULL,
                'id' => 365,
                'name' => 'Yakutiye',
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'city_id' => 32,
                'created_at' => NULL,
                'id' => 366,
                'name' => 'Alpu',
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'city_id' => 32,
                'created_at' => NULL,
                'id' => 367,
                'name' => 'Beylikova',
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'city_id' => 32,
                'created_at' => NULL,
                'id' => 368,
                'name' => 'Çifteler',
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'city_id' => 32,
                'created_at' => NULL,
                'id' => 369,
                'name' => 'Günyüzü',
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'city_id' => 32,
                'created_at' => NULL,
                'id' => 370,
                'name' => 'Han',
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'city_id' => 32,
                'created_at' => NULL,
                'id' => 371,
                'name' => 'İnönü',
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'city_id' => 32,
                'created_at' => NULL,
                'id' => 372,
                'name' => 'Mahmudiye',
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'city_id' => 32,
                'created_at' => NULL,
                'id' => 373,
                'name' => 'Mihalgazi',
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'city_id' => 32,
                'created_at' => NULL,
                'id' => 374,
                'name' => 'Mihalıççık',
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'city_id' => 32,
                'created_at' => NULL,
                'id' => 375,
                'name' => 'Odunpazarı',
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'city_id' => 32,
                'created_at' => NULL,
                'id' => 376,
                'name' => 'Sarıcakaya',
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'city_id' => 32,
                'created_at' => NULL,
                'id' => 377,
                'name' => 'Seyitgazi',
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'city_id' => 32,
                'created_at' => NULL,
                'id' => 378,
                'name' => 'Sivrihisar',
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'city_id' => 32,
                'created_at' => NULL,
                'id' => 379,
                'name' => 'Tepebaşı',
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'city_id' => 33,
                'created_at' => NULL,
                'id' => 380,
                'name' => 'Araban',
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'city_id' => 33,
                'created_at' => NULL,
                'id' => 381,
                'name' => 'İslahiye',
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'city_id' => 33,
                'created_at' => NULL,
                'id' => 382,
                'name' => 'Karkamış',
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'city_id' => 33,
                'created_at' => NULL,
                'id' => 383,
                'name' => 'Nizip',
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'city_id' => 33,
                'created_at' => NULL,
                'id' => 384,
                'name' => 'Nurdağı',
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'city_id' => 33,
                'created_at' => NULL,
                'id' => 385,
                'name' => 'Oğuzeli',
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'city_id' => 33,
                'created_at' => NULL,
                'id' => 386,
                'name' => 'Şahinbey',
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'city_id' => 33,
                'created_at' => NULL,
                'id' => 387,
                'name' => 'Şehitkamil',
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'city_id' => 33,
                'created_at' => NULL,
                'id' => 388,
                'name' => 'Yavuzeli',
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'city_id' => 34,
                'created_at' => NULL,
                'id' => 389,
                'name' => 'Alucra',
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'city_id' => 34,
                'created_at' => NULL,
                'id' => 390,
                'name' => 'Bulancak',
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'city_id' => 34,
                'created_at' => NULL,
                'id' => 391,
                'name' => 'Çamoluk',
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'city_id' => 34,
                'created_at' => NULL,
                'id' => 392,
                'name' => 'Çanakçı',
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'city_id' => 34,
                'created_at' => NULL,
                'id' => 393,
                'name' => 'Dereli',
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'city_id' => 34,
                'created_at' => NULL,
                'id' => 394,
                'name' => 'Doğankent',
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'city_id' => 34,
                'created_at' => NULL,
                'id' => 395,
                'name' => 'Espiye',
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'city_id' => 34,
                'created_at' => NULL,
                'id' => 396,
                'name' => 'Eynesil',
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'city_id' => 34,
                'created_at' => NULL,
                'id' => 397,
                'name' => 'Görele',
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'city_id' => 34,
                'created_at' => NULL,
                'id' => 398,
                'name' => 'Güce',
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'city_id' => 34,
                'created_at' => NULL,
                'id' => 399,
                'name' => 'Keşap',
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'city_id' => 34,
                'created_at' => NULL,
                'id' => 400,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'city_id' => 34,
                'created_at' => NULL,
                'id' => 401,
                'name' => 'Piraziz',
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'city_id' => 34,
                'created_at' => NULL,
                'id' => 402,
                'name' => 'Şebinkarahisar',
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'city_id' => 34,
                'created_at' => NULL,
                'id' => 403,
                'name' => 'Tirebolu',
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'city_id' => 34,
                'created_at' => NULL,
                'id' => 404,
                'name' => 'Yağlıdere',
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'city_id' => 35,
                'created_at' => NULL,
                'id' => 405,
                'name' => 'Kelkit',
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'city_id' => 35,
                'created_at' => NULL,
                'id' => 406,
                'name' => 'Köse',
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'city_id' => 35,
                'created_at' => NULL,
                'id' => 407,
                'name' => 'Kürtün',
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'city_id' => 35,
                'created_at' => NULL,
                'id' => 408,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'city_id' => 35,
                'created_at' => NULL,
                'id' => 409,
                'name' => 'Şiran',
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'city_id' => 35,
                'created_at' => NULL,
                'id' => 410,
                'name' => 'Torul',
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'city_id' => 36,
                'created_at' => NULL,
                'id' => 411,
                'name' => 'Çukurca',
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'city_id' => 36,
                'created_at' => NULL,
                'id' => 412,
                'name' => 'Derecik',
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'city_id' => 36,
                'created_at' => NULL,
                'id' => 413,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'city_id' => 36,
                'created_at' => NULL,
                'id' => 414,
                'name' => 'Şemdinli',
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'city_id' => 36,
                'created_at' => NULL,
                'id' => 415,
                'name' => 'Yüksekova',
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'city_id' => 37,
                'created_at' => NULL,
                'id' => 416,
                'name' => 'Altınözü',
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'city_id' => 37,
                'created_at' => NULL,
                'id' => 417,
                'name' => 'Antakya',
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'city_id' => 37,
                'created_at' => NULL,
                'id' => 418,
                'name' => 'Arsuz',
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'city_id' => 37,
                'created_at' => NULL,
                'id' => 419,
                'name' => 'Belen',
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'city_id' => 37,
                'created_at' => NULL,
                'id' => 420,
                'name' => 'Defne',
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'city_id' => 37,
                'created_at' => NULL,
                'id' => 421,
                'name' => 'Dörtyol',
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'city_id' => 37,
                'created_at' => NULL,
                'id' => 422,
                'name' => 'Erzin',
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'city_id' => 37,
                'created_at' => NULL,
                'id' => 423,
                'name' => 'Hassa',
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'city_id' => 37,
                'created_at' => NULL,
                'id' => 424,
                'name' => 'İskenderun',
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'city_id' => 37,
                'created_at' => NULL,
                'id' => 425,
                'name' => 'Kırıkhan',
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'city_id' => 37,
                'created_at' => NULL,
                'id' => 426,
                'name' => 'Kumlu',
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'city_id' => 37,
                'created_at' => NULL,
                'id' => 427,
                'name' => 'Payas',
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'city_id' => 37,
                'created_at' => NULL,
                'id' => 428,
                'name' => 'Reyhanlı',
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'city_id' => 37,
                'created_at' => NULL,
                'id' => 429,
                'name' => 'Samandağ',
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'city_id' => 37,
                'created_at' => NULL,
                'id' => 430,
                'name' => 'Yayladağı',
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'city_id' => 38,
                'created_at' => NULL,
                'id' => 431,
                'name' => 'Aralık',
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'city_id' => 38,
                'created_at' => NULL,
                'id' => 432,
                'name' => 'Karakoyunlu',
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'city_id' => 38,
                'created_at' => NULL,
                'id' => 433,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'city_id' => 38,
                'created_at' => NULL,
                'id' => 434,
                'name' => 'Tuzluca',
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'city_id' => 39,
                'created_at' => NULL,
                'id' => 435,
                'name' => 'Aksu',
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'city_id' => 39,
                'created_at' => NULL,
                'id' => 436,
                'name' => 'Atabey',
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'city_id' => 39,
                'created_at' => NULL,
                'id' => 437,
                'name' => 'Eğirdir',
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'city_id' => 39,
                'created_at' => NULL,
                'id' => 438,
                'name' => 'Gelendost',
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'city_id' => 39,
                'created_at' => NULL,
                'id' => 439,
                'name' => 'Gönen',
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'city_id' => 39,
                'created_at' => NULL,
                'id' => 440,
                'name' => 'Keçiborlu',
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'city_id' => 39,
                'created_at' => NULL,
                'id' => 441,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'city_id' => 39,
                'created_at' => NULL,
                'id' => 442,
                'name' => 'Senirkent',
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'city_id' => 39,
                'created_at' => NULL,
                'id' => 443,
                'name' => 'Sütçüler',
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'city_id' => 39,
                'created_at' => NULL,
                'id' => 444,
                'name' => 'Şarkikaraağaç',
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'city_id' => 39,
                'created_at' => NULL,
                'id' => 445,
                'name' => 'Uluborlu',
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'city_id' => 39,
                'created_at' => NULL,
                'id' => 446,
                'name' => 'Yalvaç',
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'city_id' => 39,
                'created_at' => NULL,
                'id' => 447,
                'name' => 'Yenişarbademli',
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 448,
                'name' => 'Adalar',
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 449,
                'name' => 'Arnavutköy',
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 450,
                'name' => 'Ataşehir',
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 451,
                'name' => 'Avcılar',
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 452,
                'name' => 'Bağcılar',
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 453,
                'name' => 'Bahçelievler',
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 454,
                'name' => 'Bakırköy',
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 455,
                'name' => 'Başakşehir',
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 456,
                'name' => 'Bayrampaşa',
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 457,
                'name' => 'Beşiktaş',
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 458,
                'name' => 'Beykoz',
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 459,
                'name' => 'Beylikdüzü',
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 460,
                'name' => 'Beyoğlu',
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 461,
                'name' => 'Büyükçekmece',
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 462,
                'name' => 'Çatalca',
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 463,
                'name' => 'Çekmeköy',
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 464,
                'name' => 'Esenler',
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 465,
                'name' => 'Esenyurt',
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 466,
                'name' => 'Eyüpsultan',
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 467,
                'name' => 'Fatih',
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 468,
                'name' => 'Gaziosmanpaşa',
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 469,
                'name' => 'Güngören',
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 470,
                'name' => 'Kadıköy',
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 471,
                'name' => 'Kağıthane',
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 472,
                'name' => 'Kartal',
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 473,
                'name' => 'Küçükçekmece',
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 474,
                'name' => 'Maltepe',
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 475,
                'name' => 'Pendik',
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 476,
                'name' => 'Sancaktepe',
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 477,
                'name' => 'Sarıyer',
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 478,
                'name' => 'Silivri',
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 479,
                'name' => 'Sultanbeyli',
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 480,
                'name' => 'Sultangazi',
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 481,
                'name' => 'Şile',
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 482,
                'name' => 'Şişli',
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 483,
                'name' => 'Tuzla',
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 484,
                'name' => 'Ümraniye',
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 485,
                'name' => 'Üsküdar',
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'city_id' => 40,
                'created_at' => NULL,
                'id' => 486,
                'name' => 'Zeytinburnu',
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 487,
                'name' => 'Aliağa',
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 488,
                'name' => 'Balçova',
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 489,
                'name' => 'Bayındır',
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 490,
                'name' => 'Bayraklı',
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 491,
                'name' => 'Bergama',
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 492,
                'name' => 'Beydağ',
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 493,
                'name' => 'Bornova',
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 494,
                'name' => 'Buca',
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 495,
                'name' => 'Çeşme',
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 496,
                'name' => 'Çiğli',
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 497,
                'name' => 'Dikili',
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 498,
                'name' => 'Foça',
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 499,
                'name' => 'Gaziemir',
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 500,
                'name' => 'Güzelbahçe',
                'updated_at' => NULL,
            ),
        ));
        \DB::table('counties')->insert(array (
            0 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 501,
                'name' => 'Karabağlar',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 502,
                'name' => 'Karaburun',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 503,
                'name' => 'Karşıyaka',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 504,
                'name' => 'Kemalpaşa',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 505,
                'name' => 'Kınık',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 506,
                'name' => 'Kiraz',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 507,
                'name' => 'Konak',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 508,
                'name' => 'Menderes',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 509,
                'name' => 'Menemen',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 510,
                'name' => 'Narlıdere',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 511,
                'name' => 'Ödemiş',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 512,
                'name' => 'Seferihisar',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 513,
                'name' => 'Selçuk',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 514,
                'name' => 'Tire',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 515,
                'name' => 'Torbalı',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'city_id' => 41,
                'created_at' => NULL,
                'id' => 516,
                'name' => 'Urla',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'city_id' => 42,
                'created_at' => NULL,
                'id' => 517,
                'name' => 'Afşin',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'city_id' => 42,
                'created_at' => NULL,
                'id' => 518,
                'name' => 'Andırın',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'city_id' => 42,
                'created_at' => NULL,
                'id' => 519,
                'name' => 'Çağlayancerit',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'city_id' => 42,
                'created_at' => NULL,
                'id' => 520,
                'name' => 'Dulkadiroğlu',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'city_id' => 42,
                'created_at' => NULL,
                'id' => 521,
                'name' => 'Ekinözü',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'city_id' => 42,
                'created_at' => NULL,
                'id' => 522,
                'name' => 'Elbistan',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'city_id' => 42,
                'created_at' => NULL,
                'id' => 523,
                'name' => 'Göksun',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'city_id' => 42,
                'created_at' => NULL,
                'id' => 524,
                'name' => 'Nurhak',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'city_id' => 42,
                'created_at' => NULL,
                'id' => 525,
                'name' => 'Onikişubat',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'city_id' => 42,
                'created_at' => NULL,
                'id' => 526,
                'name' => 'Pazarcık',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'city_id' => 42,
                'created_at' => NULL,
                'id' => 527,
                'name' => 'Türkoğlu',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'city_id' => 43,
                'created_at' => NULL,
                'id' => 528,
                'name' => 'Eflani',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'city_id' => 43,
                'created_at' => NULL,
                'id' => 529,
                'name' => 'Eskipazar',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'city_id' => 43,
                'created_at' => NULL,
                'id' => 530,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'city_id' => 43,
                'created_at' => NULL,
                'id' => 531,
                'name' => 'Ovacık',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'city_id' => 43,
                'created_at' => NULL,
                'id' => 532,
                'name' => 'Safranbolu',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'city_id' => 43,
                'created_at' => NULL,
                'id' => 533,
                'name' => 'Yenice',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'city_id' => 44,
                'created_at' => NULL,
                'id' => 534,
                'name' => 'Ayrancı',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'city_id' => 44,
                'created_at' => NULL,
                'id' => 535,
                'name' => 'Başyayla',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'city_id' => 44,
                'created_at' => NULL,
                'id' => 536,
                'name' => 'Ermenek',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'city_id' => 44,
                'created_at' => NULL,
                'id' => 537,
                'name' => 'Kazımkarabekir',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'city_id' => 44,
                'created_at' => NULL,
                'id' => 538,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'city_id' => 44,
                'created_at' => NULL,
                'id' => 539,
                'name' => 'Sarıveliler',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'city_id' => 45,
                'created_at' => NULL,
                'id' => 540,
                'name' => 'Akyaka',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'city_id' => 45,
                'created_at' => NULL,
                'id' => 541,
                'name' => 'Arpaçay',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'city_id' => 45,
                'created_at' => NULL,
                'id' => 542,
                'name' => 'Digor',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'city_id' => 45,
                'created_at' => NULL,
                'id' => 543,
                'name' => 'Kağızman',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'city_id' => 45,
                'created_at' => NULL,
                'id' => 544,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'city_id' => 45,
                'created_at' => NULL,
                'id' => 545,
                'name' => 'Sarıkamış',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'city_id' => 45,
                'created_at' => NULL,
                'id' => 546,
                'name' => 'Selim',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'city_id' => 45,
                'created_at' => NULL,
                'id' => 547,
                'name' => 'Susuz',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'city_id' => 46,
                'created_at' => NULL,
                'id' => 548,
                'name' => 'Abana',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'city_id' => 46,
                'created_at' => NULL,
                'id' => 549,
                'name' => 'Ağlı',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'city_id' => 46,
                'created_at' => NULL,
                'id' => 550,
                'name' => 'Araç',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'city_id' => 46,
                'created_at' => NULL,
                'id' => 551,
                'name' => 'Azdavay',
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'city_id' => 46,
                'created_at' => NULL,
                'id' => 552,
                'name' => 'Bozkurt',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'city_id' => 46,
                'created_at' => NULL,
                'id' => 553,
                'name' => 'Cide',
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'city_id' => 46,
                'created_at' => NULL,
                'id' => 554,
                'name' => 'Çatalzeytin',
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'city_id' => 46,
                'created_at' => NULL,
                'id' => 555,
                'name' => 'Daday',
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'city_id' => 46,
                'created_at' => NULL,
                'id' => 556,
                'name' => 'Devrekani',
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'city_id' => 46,
                'created_at' => NULL,
                'id' => 557,
                'name' => 'Doğanyurt',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'city_id' => 46,
                'created_at' => NULL,
                'id' => 558,
                'name' => 'Hanönü',
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'city_id' => 46,
                'created_at' => NULL,
                'id' => 559,
                'name' => 'İhsangazi',
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'city_id' => 46,
                'created_at' => NULL,
                'id' => 560,
                'name' => 'İnebolu',
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'city_id' => 46,
                'created_at' => NULL,
                'id' => 561,
                'name' => 'Küre',
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'city_id' => 46,
                'created_at' => NULL,
                'id' => 562,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'city_id' => 46,
                'created_at' => NULL,
                'id' => 563,
                'name' => 'Pınarbaşı',
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'city_id' => 46,
                'created_at' => NULL,
                'id' => 564,
                'name' => 'Seydiler',
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'city_id' => 46,
                'created_at' => NULL,
                'id' => 565,
                'name' => 'Şenpazar',
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'city_id' => 46,
                'created_at' => NULL,
                'id' => 566,
                'name' => 'Taşköprü',
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'city_id' => 46,
                'created_at' => NULL,
                'id' => 567,
                'name' => 'Tosya',
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'city_id' => 47,
                'created_at' => NULL,
                'id' => 568,
                'name' => 'Akkışla',
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'city_id' => 47,
                'created_at' => NULL,
                'id' => 569,
                'name' => 'Bünyan',
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'city_id' => 47,
                'created_at' => NULL,
                'id' => 570,
                'name' => 'Develi',
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'city_id' => 47,
                'created_at' => NULL,
                'id' => 571,
                'name' => 'Felahiye',
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'city_id' => 47,
                'created_at' => NULL,
                'id' => 572,
                'name' => 'Hacılar',
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'city_id' => 47,
                'created_at' => NULL,
                'id' => 573,
                'name' => 'İncesu',
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'city_id' => 47,
                'created_at' => NULL,
                'id' => 574,
                'name' => 'Kocasinan',
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'city_id' => 47,
                'created_at' => NULL,
                'id' => 575,
                'name' => 'Melikgazi',
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'city_id' => 47,
                'created_at' => NULL,
                'id' => 576,
                'name' => 'Özvatan',
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'city_id' => 47,
                'created_at' => NULL,
                'id' => 577,
                'name' => 'Pınarbaşı',
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'city_id' => 47,
                'created_at' => NULL,
                'id' => 578,
                'name' => 'Sarıoğlan',
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'city_id' => 47,
                'created_at' => NULL,
                'id' => 579,
                'name' => 'Sarız',
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'city_id' => 47,
                'created_at' => NULL,
                'id' => 580,
                'name' => 'Talas',
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'city_id' => 47,
                'created_at' => NULL,
                'id' => 581,
                'name' => 'Tomarza',
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'city_id' => 47,
                'created_at' => NULL,
                'id' => 582,
                'name' => 'Yahyalı',
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'city_id' => 47,
                'created_at' => NULL,
                'id' => 583,
                'name' => 'Yeşilhisar',
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'city_id' => 48,
                'created_at' => NULL,
                'id' => 584,
                'name' => 'Bahşılı',
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'city_id' => 48,
                'created_at' => NULL,
                'id' => 585,
                'name' => 'Balışeyh',
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'city_id' => 48,
                'created_at' => NULL,
                'id' => 586,
                'name' => 'Çelebi',
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'city_id' => 48,
                'created_at' => NULL,
                'id' => 587,
                'name' => 'Delice',
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'city_id' => 48,
                'created_at' => NULL,
                'id' => 588,
                'name' => 'Karakeçili',
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'city_id' => 48,
                'created_at' => NULL,
                'id' => 589,
                'name' => 'Keskin',
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'city_id' => 48,
                'created_at' => NULL,
                'id' => 590,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'city_id' => 48,
                'created_at' => NULL,
                'id' => 591,
                'name' => 'Sulakyurt',
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'city_id' => 48,
                'created_at' => NULL,
                'id' => 592,
                'name' => 'Yahşihan',
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'city_id' => 49,
                'created_at' => NULL,
                'id' => 593,
                'name' => 'Babaeski',
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'city_id' => 49,
                'created_at' => NULL,
                'id' => 594,
                'name' => 'Demirköy',
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'city_id' => 49,
                'created_at' => NULL,
                'id' => 595,
                'name' => 'Kofçaz',
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'city_id' => 49,
                'created_at' => NULL,
                'id' => 596,
                'name' => 'Lüleburgaz',
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'city_id' => 49,
                'created_at' => NULL,
                'id' => 597,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'city_id' => 49,
                'created_at' => NULL,
                'id' => 598,
                'name' => 'Pehlivanköy',
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'city_id' => 49,
                'created_at' => NULL,
                'id' => 599,
                'name' => 'Pınarhisar',
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'city_id' => 49,
                'created_at' => NULL,
                'id' => 600,
                'name' => 'Vize',
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'city_id' => 50,
                'created_at' => NULL,
                'id' => 601,
                'name' => 'Akçakent',
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'city_id' => 50,
                'created_at' => NULL,
                'id' => 602,
                'name' => 'Akpınar',
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'city_id' => 50,
                'created_at' => NULL,
                'id' => 603,
                'name' => 'Boztepe',
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'city_id' => 50,
                'created_at' => NULL,
                'id' => 604,
                'name' => 'Çiçekdağı',
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'city_id' => 50,
                'created_at' => NULL,
                'id' => 605,
                'name' => 'Kaman',
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'city_id' => 50,
                'created_at' => NULL,
                'id' => 606,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'city_id' => 50,
                'created_at' => NULL,
                'id' => 607,
                'name' => 'Mucur',
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'city_id' => 51,
                'created_at' => NULL,
                'id' => 608,
                'name' => 'Elbeyli',
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'city_id' => 51,
                'created_at' => NULL,
                'id' => 609,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'city_id' => 51,
                'created_at' => NULL,
                'id' => 610,
                'name' => 'Musabeyli',
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'city_id' => 51,
                'created_at' => NULL,
                'id' => 611,
                'name' => 'Polateli',
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'city_id' => 52,
                'created_at' => NULL,
                'id' => 612,
                'name' => 'Başiskele',
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'city_id' => 52,
                'created_at' => NULL,
                'id' => 613,
                'name' => 'Çayırova',
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'city_id' => 52,
                'created_at' => NULL,
                'id' => 614,
                'name' => 'Darıca',
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'city_id' => 52,
                'created_at' => NULL,
                'id' => 615,
                'name' => 'Derince',
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'city_id' => 52,
                'created_at' => NULL,
                'id' => 616,
                'name' => 'Dilovası',
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'city_id' => 52,
                'created_at' => NULL,
                'id' => 617,
                'name' => 'Gebze',
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'city_id' => 52,
                'created_at' => NULL,
                'id' => 618,
                'name' => 'Gölcük',
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'city_id' => 52,
                'created_at' => NULL,
                'id' => 619,
                'name' => 'İzmit',
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'city_id' => 52,
                'created_at' => NULL,
                'id' => 620,
                'name' => 'Kandıra',
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'city_id' => 52,
                'created_at' => NULL,
                'id' => 621,
                'name' => 'Karamürsel',
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'city_id' => 52,
                'created_at' => NULL,
                'id' => 622,
                'name' => 'Kartepe',
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'city_id' => 52,
                'created_at' => NULL,
                'id' => 623,
                'name' => 'Körfez',
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 624,
                'name' => 'Ahırlı',
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 625,
                'name' => 'Akören',
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 626,
                'name' => 'Akşehir',
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 627,
                'name' => 'Altınekin',
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 628,
                'name' => 'Beyşehir',
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 629,
                'name' => 'Bozkır',
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 630,
                'name' => 'Cihanbeyli',
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 631,
                'name' => 'Çeltik',
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 632,
                'name' => 'Çumra',
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 633,
                'name' => 'Derbent',
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 634,
                'name' => 'Derebucak',
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 635,
                'name' => 'Doğanhisar',
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 636,
                'name' => 'Emirgazi',
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 637,
                'name' => 'Ereğli',
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 638,
                'name' => 'Güneysınır',
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 639,
                'name' => 'Hadim',
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 640,
                'name' => 'Halkapınar',
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 641,
                'name' => 'Hüyük',
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 642,
                'name' => 'Ilgın',
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 643,
                'name' => 'Kadınhanı',
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 644,
                'name' => 'Karapınar',
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 645,
                'name' => 'Karatay',
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 646,
                'name' => 'Kulu',
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 647,
                'name' => 'Meram',
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 648,
                'name' => 'Sarayönü',
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 649,
                'name' => 'Selçuklu',
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 650,
                'name' => 'Seydişehir',
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 651,
                'name' => 'Taşkent',
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 652,
                'name' => 'Tuzlukçu',
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 653,
                'name' => 'Yalıhüyük',
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'city_id' => 53,
                'created_at' => NULL,
                'id' => 654,
                'name' => 'Yunak',
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'city_id' => 54,
                'created_at' => NULL,
                'id' => 655,
                'name' => 'Altıntaş',
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'city_id' => 54,
                'created_at' => NULL,
                'id' => 656,
                'name' => 'Aslanapa',
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'city_id' => 54,
                'created_at' => NULL,
                'id' => 657,
                'name' => 'Çavdarhisar',
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'city_id' => 54,
                'created_at' => NULL,
                'id' => 658,
                'name' => 'Domaniç',
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'city_id' => 54,
                'created_at' => NULL,
                'id' => 659,
                'name' => 'Dumlupınar',
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'city_id' => 54,
                'created_at' => NULL,
                'id' => 660,
                'name' => 'Emet',
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'city_id' => 54,
                'created_at' => NULL,
                'id' => 661,
                'name' => 'Gediz',
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'city_id' => 54,
                'created_at' => NULL,
                'id' => 662,
                'name' => 'Hisarcık',
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'city_id' => 54,
                'created_at' => NULL,
                'id' => 663,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'city_id' => 54,
                'created_at' => NULL,
                'id' => 664,
                'name' => 'Pazarlar',
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'city_id' => 54,
                'created_at' => NULL,
                'id' => 665,
                'name' => 'Simav',
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'city_id' => 54,
                'created_at' => NULL,
                'id' => 666,
                'name' => 'Şaphane',
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'city_id' => 54,
                'created_at' => NULL,
                'id' => 667,
                'name' => 'Tavşanlı',
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'city_id' => 55,
                'created_at' => NULL,
                'id' => 668,
                'name' => 'Akçadağ',
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'city_id' => 55,
                'created_at' => NULL,
                'id' => 669,
                'name' => 'Arapgir',
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'city_id' => 55,
                'created_at' => NULL,
                'id' => 670,
                'name' => 'Arguvan',
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'city_id' => 55,
                'created_at' => NULL,
                'id' => 671,
                'name' => 'Battalgazi',
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'city_id' => 55,
                'created_at' => NULL,
                'id' => 672,
                'name' => 'Darende',
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'city_id' => 55,
                'created_at' => NULL,
                'id' => 673,
                'name' => 'Doğanşehir',
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'city_id' => 55,
                'created_at' => NULL,
                'id' => 674,
                'name' => 'Doğanyol',
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'city_id' => 55,
                'created_at' => NULL,
                'id' => 675,
                'name' => 'Hekimhan',
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'city_id' => 55,
                'created_at' => NULL,
                'id' => 676,
                'name' => 'Kale',
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'city_id' => 55,
                'created_at' => NULL,
                'id' => 677,
                'name' => 'Kuluncak',
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'city_id' => 55,
                'created_at' => NULL,
                'id' => 678,
                'name' => 'Pütürge',
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'city_id' => 55,
                'created_at' => NULL,
                'id' => 679,
                'name' => 'Yazıhan',
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'city_id' => 55,
                'created_at' => NULL,
                'id' => 680,
                'name' => 'Yeşilyurt',
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'city_id' => 56,
                'created_at' => NULL,
                'id' => 681,
                'name' => 'Ahmetli',
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'city_id' => 56,
                'created_at' => NULL,
                'id' => 682,
                'name' => 'Akhisar',
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'city_id' => 56,
                'created_at' => NULL,
                'id' => 683,
                'name' => 'Alaşehir',
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'city_id' => 56,
                'created_at' => NULL,
                'id' => 684,
                'name' => 'Demirci',
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'city_id' => 56,
                'created_at' => NULL,
                'id' => 685,
                'name' => 'Gölmarmara',
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'city_id' => 56,
                'created_at' => NULL,
                'id' => 686,
                'name' => 'Gördes',
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'city_id' => 56,
                'created_at' => NULL,
                'id' => 687,
                'name' => 'Kırkağaç',
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'city_id' => 56,
                'created_at' => NULL,
                'id' => 688,
                'name' => 'Köprübaşı',
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'city_id' => 56,
                'created_at' => NULL,
                'id' => 689,
                'name' => 'Kula',
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'city_id' => 56,
                'created_at' => NULL,
                'id' => 690,
                'name' => 'Salihli',
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'city_id' => 56,
                'created_at' => NULL,
                'id' => 691,
                'name' => 'Sarıgöl',
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'city_id' => 56,
                'created_at' => NULL,
                'id' => 692,
                'name' => 'Saruhanlı',
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'city_id' => 56,
                'created_at' => NULL,
                'id' => 693,
                'name' => 'Selendi',
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'city_id' => 56,
                'created_at' => NULL,
                'id' => 694,
                'name' => 'Soma',
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'city_id' => 56,
                'created_at' => NULL,
                'id' => 695,
                'name' => 'Şehzadeler',
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'city_id' => 56,
                'created_at' => NULL,
                'id' => 696,
                'name' => 'Turgutlu',
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'city_id' => 56,
                'created_at' => NULL,
                'id' => 697,
                'name' => 'Yunusemre',
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'city_id' => 57,
                'created_at' => NULL,
                'id' => 698,
                'name' => 'Artuklu',
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'city_id' => 57,
                'created_at' => NULL,
                'id' => 699,
                'name' => 'Dargeçit',
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'city_id' => 57,
                'created_at' => NULL,
                'id' => 700,
                'name' => 'Derik',
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'city_id' => 57,
                'created_at' => NULL,
                'id' => 701,
                'name' => 'Kızıltepe',
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'city_id' => 57,
                'created_at' => NULL,
                'id' => 702,
                'name' => 'Mazıdağı',
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'city_id' => 57,
                'created_at' => NULL,
                'id' => 703,
                'name' => 'Midyat',
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'city_id' => 57,
                'created_at' => NULL,
                'id' => 704,
                'name' => 'Nusaybin',
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'city_id' => 57,
                'created_at' => NULL,
                'id' => 705,
                'name' => 'Ömerli',
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'city_id' => 57,
                'created_at' => NULL,
                'id' => 706,
                'name' => 'Savur',
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'city_id' => 57,
                'created_at' => NULL,
                'id' => 707,
                'name' => 'Yeşilli',
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'city_id' => 58,
                'created_at' => NULL,
                'id' => 708,
                'name' => 'Akdeniz',
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'city_id' => 58,
                'created_at' => NULL,
                'id' => 709,
                'name' => 'Anamur',
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'city_id' => 58,
                'created_at' => NULL,
                'id' => 710,
                'name' => 'Aydıncık',
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'city_id' => 58,
                'created_at' => NULL,
                'id' => 711,
                'name' => 'Bozyazı',
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'city_id' => 58,
                'created_at' => NULL,
                'id' => 712,
                'name' => 'Çamlıyayla',
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'city_id' => 58,
                'created_at' => NULL,
                'id' => 713,
                'name' => 'Erdemli',
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'city_id' => 58,
                'created_at' => NULL,
                'id' => 714,
                'name' => 'Gülnar',
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'city_id' => 58,
                'created_at' => NULL,
                'id' => 715,
                'name' => 'Mezitli',
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'city_id' => 58,
                'created_at' => NULL,
                'id' => 716,
                'name' => 'Mut',
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'city_id' => 58,
                'created_at' => NULL,
                'id' => 717,
                'name' => 'Silifke',
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'city_id' => 58,
                'created_at' => NULL,
                'id' => 718,
                'name' => 'Tarsus',
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'city_id' => 58,
                'created_at' => NULL,
                'id' => 719,
                'name' => 'Toroslar',
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'city_id' => 58,
                'created_at' => NULL,
                'id' => 720,
                'name' => 'Yenişehir',
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'city_id' => 59,
                'created_at' => NULL,
                'id' => 721,
                'name' => 'Bodrum',
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'city_id' => 59,
                'created_at' => NULL,
                'id' => 722,
                'name' => 'Dalaman',
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'city_id' => 59,
                'created_at' => NULL,
                'id' => 723,
                'name' => 'Datça',
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'city_id' => 59,
                'created_at' => NULL,
                'id' => 724,
                'name' => 'Fethiye',
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'city_id' => 59,
                'created_at' => NULL,
                'id' => 725,
                'name' => 'Kavaklıdere',
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'city_id' => 59,
                'created_at' => NULL,
                'id' => 726,
                'name' => 'Köyceğiz',
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'city_id' => 59,
                'created_at' => NULL,
                'id' => 727,
                'name' => 'Marmaris',
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'city_id' => 59,
                'created_at' => NULL,
                'id' => 728,
                'name' => 'Menteşe',
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'city_id' => 59,
                'created_at' => NULL,
                'id' => 729,
                'name' => 'Milas',
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'city_id' => 59,
                'created_at' => NULL,
                'id' => 730,
                'name' => 'Ortaca',
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'city_id' => 59,
                'created_at' => NULL,
                'id' => 731,
                'name' => 'Seydikemer',
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'city_id' => 59,
                'created_at' => NULL,
                'id' => 732,
                'name' => 'Ula',
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'city_id' => 59,
                'created_at' => NULL,
                'id' => 733,
                'name' => 'Yatağan',
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'city_id' => 60,
                'created_at' => NULL,
                'id' => 734,
                'name' => 'Bulanık',
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'city_id' => 60,
                'created_at' => NULL,
                'id' => 735,
                'name' => 'Hasköy',
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'city_id' => 60,
                'created_at' => NULL,
                'id' => 736,
                'name' => 'Korkut',
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'city_id' => 60,
                'created_at' => NULL,
                'id' => 737,
                'name' => 'Malazgirt',
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'city_id' => 60,
                'created_at' => NULL,
                'id' => 738,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'city_id' => 60,
                'created_at' => NULL,
                'id' => 739,
                'name' => 'Varto',
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'city_id' => 61,
                'created_at' => NULL,
                'id' => 740,
                'name' => 'Acıgöl',
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'city_id' => 61,
                'created_at' => NULL,
                'id' => 741,
                'name' => 'Avanos',
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'city_id' => 61,
                'created_at' => NULL,
                'id' => 742,
                'name' => 'Derinkuyu',
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'city_id' => 61,
                'created_at' => NULL,
                'id' => 743,
                'name' => 'Gülşehir',
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'city_id' => 61,
                'created_at' => NULL,
                'id' => 744,
                'name' => 'Hacıbektaş',
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'city_id' => 61,
                'created_at' => NULL,
                'id' => 745,
                'name' => 'Kozaklı',
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'city_id' => 61,
                'created_at' => NULL,
                'id' => 746,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'city_id' => 61,
                'created_at' => NULL,
                'id' => 747,
                'name' => 'Ürgüp',
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'city_id' => 62,
                'created_at' => NULL,
                'id' => 748,
                'name' => 'Altunhisar',
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'city_id' => 62,
                'created_at' => NULL,
                'id' => 749,
                'name' => 'Bor',
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'city_id' => 62,
                'created_at' => NULL,
                'id' => 750,
                'name' => 'Çamardı',
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'city_id' => 62,
                'created_at' => NULL,
                'id' => 751,
                'name' => 'Çiftlik',
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'city_id' => 62,
                'created_at' => NULL,
                'id' => 752,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'city_id' => 62,
                'created_at' => NULL,
                'id' => 753,
                'name' => 'Ulukışla',
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'city_id' => 63,
                'created_at' => NULL,
                'id' => 754,
                'name' => 'Akkuş',
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'city_id' => 63,
                'created_at' => NULL,
                'id' => 755,
                'name' => 'Altınordu',
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'city_id' => 63,
                'created_at' => NULL,
                'id' => 756,
                'name' => 'Aybastı',
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'city_id' => 63,
                'created_at' => NULL,
                'id' => 757,
                'name' => 'Çamaş',
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'city_id' => 63,
                'created_at' => NULL,
                'id' => 758,
                'name' => 'Çatalpınar',
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'city_id' => 63,
                'created_at' => NULL,
                'id' => 759,
                'name' => 'Çaybaşı',
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'city_id' => 63,
                'created_at' => NULL,
                'id' => 760,
                'name' => 'Fatsa',
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'city_id' => 63,
                'created_at' => NULL,
                'id' => 761,
                'name' => 'Gölköy',
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'city_id' => 63,
                'created_at' => NULL,
                'id' => 762,
                'name' => 'Gülyalı',
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'city_id' => 63,
                'created_at' => NULL,
                'id' => 763,
                'name' => 'Gürgentepe',
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'city_id' => 63,
                'created_at' => NULL,
                'id' => 764,
                'name' => 'İkizce',
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'city_id' => 63,
                'created_at' => NULL,
                'id' => 765,
                'name' => 'Kabadüz',
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'city_id' => 63,
                'created_at' => NULL,
                'id' => 766,
                'name' => 'Kabataş',
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'city_id' => 63,
                'created_at' => NULL,
                'id' => 767,
                'name' => 'Korgan',
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'city_id' => 63,
                'created_at' => NULL,
                'id' => 768,
                'name' => 'Kumru',
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'city_id' => 63,
                'created_at' => NULL,
                'id' => 769,
                'name' => 'Mesudiye',
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'city_id' => 63,
                'created_at' => NULL,
                'id' => 770,
                'name' => 'Perşembe',
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'city_id' => 63,
                'created_at' => NULL,
                'id' => 771,
                'name' => 'Ulubey',
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'city_id' => 63,
                'created_at' => NULL,
                'id' => 772,
                'name' => 'Ünye',
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'city_id' => 64,
                'created_at' => NULL,
                'id' => 773,
                'name' => 'Bahçe',
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'city_id' => 64,
                'created_at' => NULL,
                'id' => 774,
                'name' => 'Düziçi',
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'city_id' => 64,
                'created_at' => NULL,
                'id' => 775,
                'name' => 'Hasanbeyli',
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'city_id' => 64,
                'created_at' => NULL,
                'id' => 776,
                'name' => 'Kadirli',
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'city_id' => 64,
                'created_at' => NULL,
                'id' => 777,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'city_id' => 64,
                'created_at' => NULL,
                'id' => 778,
                'name' => 'Sumbas',
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'city_id' => 64,
                'created_at' => NULL,
                'id' => 779,
                'name' => 'Toprakkale',
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'city_id' => 65,
                'created_at' => NULL,
                'id' => 780,
                'name' => 'Ardeşen',
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'city_id' => 65,
                'created_at' => NULL,
                'id' => 781,
                'name' => 'Çamlıhemşin',
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'city_id' => 65,
                'created_at' => NULL,
                'id' => 782,
                'name' => 'Çayeli',
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'city_id' => 65,
                'created_at' => NULL,
                'id' => 783,
                'name' => 'Derepazarı',
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'city_id' => 65,
                'created_at' => NULL,
                'id' => 784,
                'name' => 'Fındıklı',
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'city_id' => 65,
                'created_at' => NULL,
                'id' => 785,
                'name' => 'Güneysu',
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'city_id' => 65,
                'created_at' => NULL,
                'id' => 786,
                'name' => 'Hemşin',
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'city_id' => 65,
                'created_at' => NULL,
                'id' => 787,
                'name' => 'İkizdere',
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'city_id' => 65,
                'created_at' => NULL,
                'id' => 788,
                'name' => 'İyidere',
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'city_id' => 65,
                'created_at' => NULL,
                'id' => 789,
                'name' => 'Kalkandere',
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'city_id' => 65,
                'created_at' => NULL,
                'id' => 790,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'city_id' => 65,
                'created_at' => NULL,
                'id' => 791,
                'name' => 'Pazar',
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'city_id' => 66,
                'created_at' => NULL,
                'id' => 792,
                'name' => 'Adapazarı',
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'city_id' => 66,
                'created_at' => NULL,
                'id' => 793,
                'name' => 'Akyazı',
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'city_id' => 66,
                'created_at' => NULL,
                'id' => 794,
                'name' => 'Arifiye',
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'city_id' => 66,
                'created_at' => NULL,
                'id' => 795,
                'name' => 'Erenler',
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'city_id' => 66,
                'created_at' => NULL,
                'id' => 796,
                'name' => 'Ferizli',
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'city_id' => 66,
                'created_at' => NULL,
                'id' => 797,
                'name' => 'Geyve',
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'city_id' => 66,
                'created_at' => NULL,
                'id' => 798,
                'name' => 'Hendek',
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'city_id' => 66,
                'created_at' => NULL,
                'id' => 799,
                'name' => 'Karapürçek',
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'city_id' => 66,
                'created_at' => NULL,
                'id' => 800,
                'name' => 'Karasu',
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'city_id' => 66,
                'created_at' => NULL,
                'id' => 801,
                'name' => 'Kaynarca',
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'city_id' => 66,
                'created_at' => NULL,
                'id' => 802,
                'name' => 'Kocaali',
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'city_id' => 66,
                'created_at' => NULL,
                'id' => 803,
                'name' => 'Pamukova',
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'city_id' => 66,
                'created_at' => NULL,
                'id' => 804,
                'name' => 'Sapanca',
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'city_id' => 66,
                'created_at' => NULL,
                'id' => 805,
                'name' => 'Serdivan',
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'city_id' => 66,
                'created_at' => NULL,
                'id' => 806,
                'name' => 'Söğütlü',
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'city_id' => 66,
                'created_at' => NULL,
                'id' => 807,
                'name' => 'Taraklı',
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'city_id' => 67,
                'created_at' => NULL,
                'id' => 808,
                'name' => '19 Mayıs',
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'city_id' => 67,
                'created_at' => NULL,
                'id' => 809,
                'name' => 'Alaçam',
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'city_id' => 67,
                'created_at' => NULL,
                'id' => 810,
                'name' => 'Asarcık',
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'city_id' => 67,
                'created_at' => NULL,
                'id' => 811,
                'name' => 'Atakum',
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'city_id' => 67,
                'created_at' => NULL,
                'id' => 812,
                'name' => 'Ayvacık',
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'city_id' => 67,
                'created_at' => NULL,
                'id' => 813,
                'name' => 'Bafra',
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'city_id' => 67,
                'created_at' => NULL,
                'id' => 814,
                'name' => 'Canik',
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'city_id' => 67,
                'created_at' => NULL,
                'id' => 815,
                'name' => 'Çarşamba',
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'city_id' => 67,
                'created_at' => NULL,
                'id' => 816,
                'name' => 'Havza',
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'city_id' => 67,
                'created_at' => NULL,
                'id' => 817,
                'name' => 'İlkadım',
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'city_id' => 67,
                'created_at' => NULL,
                'id' => 818,
                'name' => 'Kavak',
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'city_id' => 67,
                'created_at' => NULL,
                'id' => 819,
                'name' => 'Ladik',
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'city_id' => 67,
                'created_at' => NULL,
                'id' => 820,
                'name' => 'Salıpazarı',
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'city_id' => 67,
                'created_at' => NULL,
                'id' => 821,
                'name' => 'Tekkeköy',
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'city_id' => 67,
                'created_at' => NULL,
                'id' => 822,
                'name' => 'Terme',
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'city_id' => 67,
                'created_at' => NULL,
                'id' => 823,
                'name' => 'Vezirköprü',
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'city_id' => 67,
                'created_at' => NULL,
                'id' => 824,
                'name' => 'Yakakent',
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'city_id' => 68,
                'created_at' => NULL,
                'id' => 825,
                'name' => 'Baykan',
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'city_id' => 68,
                'created_at' => NULL,
                'id' => 826,
                'name' => 'Eruh',
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'city_id' => 68,
                'created_at' => NULL,
                'id' => 827,
                'name' => 'Kurtalan',
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'city_id' => 68,
                'created_at' => NULL,
                'id' => 828,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'city_id' => 68,
                'created_at' => NULL,
                'id' => 829,
                'name' => 'Pervari',
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'city_id' => 68,
                'created_at' => NULL,
                'id' => 830,
                'name' => 'Şirvan',
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'city_id' => 68,
                'created_at' => NULL,
                'id' => 831,
                'name' => 'Tillo',
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'city_id' => 69,
                'created_at' => NULL,
                'id' => 832,
                'name' => 'Ayancık',
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'city_id' => 69,
                'created_at' => NULL,
                'id' => 833,
                'name' => 'Boyabat',
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'city_id' => 69,
                'created_at' => NULL,
                'id' => 834,
                'name' => 'Dikmen',
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'city_id' => 69,
                'created_at' => NULL,
                'id' => 835,
                'name' => 'Durağan',
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'city_id' => 69,
                'created_at' => NULL,
                'id' => 836,
                'name' => 'Erfelek',
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'city_id' => 69,
                'created_at' => NULL,
                'id' => 837,
                'name' => 'Gerze',
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'city_id' => 69,
                'created_at' => NULL,
                'id' => 838,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'city_id' => 69,
                'created_at' => NULL,
                'id' => 839,
                'name' => 'Saraydüzü',
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'city_id' => 69,
                'created_at' => NULL,
                'id' => 840,
                'name' => 'Türkeli',
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'city_id' => 70,
                'created_at' => NULL,
                'id' => 841,
                'name' => 'Akıncılar',
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'city_id' => 70,
                'created_at' => NULL,
                'id' => 842,
                'name' => 'Altınyayla',
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'city_id' => 70,
                'created_at' => NULL,
                'id' => 843,
                'name' => 'Divriği',
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'city_id' => 70,
                'created_at' => NULL,
                'id' => 844,
                'name' => 'Doğanşar',
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'city_id' => 70,
                'created_at' => NULL,
                'id' => 845,
                'name' => 'Gemerek',
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'city_id' => 70,
                'created_at' => NULL,
                'id' => 846,
                'name' => 'Gölova',
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'city_id' => 70,
                'created_at' => NULL,
                'id' => 847,
                'name' => 'Gürün',
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'city_id' => 70,
                'created_at' => NULL,
                'id' => 848,
                'name' => 'Hafik',
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'city_id' => 70,
                'created_at' => NULL,
                'id' => 849,
                'name' => 'İmranlı',
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'city_id' => 70,
                'created_at' => NULL,
                'id' => 850,
                'name' => 'Kangal',
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'city_id' => 70,
                'created_at' => NULL,
                'id' => 851,
                'name' => 'Koyulhisar',
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'city_id' => 70,
                'created_at' => NULL,
                'id' => 852,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'city_id' => 70,
                'created_at' => NULL,
                'id' => 853,
                'name' => 'Suşehri',
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'city_id' => 70,
                'created_at' => NULL,
                'id' => 854,
                'name' => 'Şarkışla',
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'city_id' => 70,
                'created_at' => NULL,
                'id' => 855,
                'name' => 'Ulaş',
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'city_id' => 70,
                'created_at' => NULL,
                'id' => 856,
                'name' => 'Yıldızeli',
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'city_id' => 70,
                'created_at' => NULL,
                'id' => 857,
                'name' => 'Zara',
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'city_id' => 71,
                'created_at' => NULL,
                'id' => 858,
                'name' => 'Akçakale',
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'city_id' => 71,
                'created_at' => NULL,
                'id' => 859,
                'name' => 'Birecik',
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'city_id' => 71,
                'created_at' => NULL,
                'id' => 860,
                'name' => 'Bozova',
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'city_id' => 71,
                'created_at' => NULL,
                'id' => 861,
                'name' => 'Ceylanpınar',
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'city_id' => 71,
                'created_at' => NULL,
                'id' => 862,
                'name' => 'Eyyübiye',
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'city_id' => 71,
                'created_at' => NULL,
                'id' => 863,
                'name' => 'Halfeti',
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'city_id' => 71,
                'created_at' => NULL,
                'id' => 864,
                'name' => 'Haliliye',
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'city_id' => 71,
                'created_at' => NULL,
                'id' => 865,
                'name' => 'Harran',
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'city_id' => 71,
                'created_at' => NULL,
                'id' => 866,
                'name' => 'Hilvan',
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'city_id' => 71,
                'created_at' => NULL,
                'id' => 867,
                'name' => 'Karaköprü',
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'city_id' => 71,
                'created_at' => NULL,
                'id' => 868,
                'name' => 'Siverek',
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'city_id' => 71,
                'created_at' => NULL,
                'id' => 869,
                'name' => 'Suruç',
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'city_id' => 71,
                'created_at' => NULL,
                'id' => 870,
                'name' => 'Viranşehir',
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'city_id' => 72,
                'created_at' => NULL,
                'id' => 871,
                'name' => 'Beytüşşebap',
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'city_id' => 72,
                'created_at' => NULL,
                'id' => 872,
                'name' => 'Cizre',
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'city_id' => 72,
                'created_at' => NULL,
                'id' => 873,
                'name' => 'Güçlükonak',
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'city_id' => 72,
                'created_at' => NULL,
                'id' => 874,
                'name' => 'İdil',
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'city_id' => 72,
                'created_at' => NULL,
                'id' => 875,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'city_id' => 72,
                'created_at' => NULL,
                'id' => 876,
                'name' => 'Silopi',
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'city_id' => 72,
                'created_at' => NULL,
                'id' => 877,
                'name' => 'Uludere',
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'city_id' => 73,
                'created_at' => NULL,
                'id' => 878,
                'name' => 'Çerkezköy',
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'city_id' => 73,
                'created_at' => NULL,
                'id' => 879,
                'name' => 'Çorlu',
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'city_id' => 73,
                'created_at' => NULL,
                'id' => 880,
                'name' => 'Ergene',
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'city_id' => 73,
                'created_at' => NULL,
                'id' => 881,
                'name' => 'Hayrabolu',
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'city_id' => 73,
                'created_at' => NULL,
                'id' => 882,
                'name' => 'Kapaklı',
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'city_id' => 73,
                'created_at' => NULL,
                'id' => 883,
                'name' => 'Malkara',
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'city_id' => 73,
                'created_at' => NULL,
                'id' => 884,
                'name' => 'Marmaraereğlisi',
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'city_id' => 73,
                'created_at' => NULL,
                'id' => 885,
                'name' => 'Muratlı',
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'city_id' => 73,
                'created_at' => NULL,
                'id' => 886,
                'name' => 'Saray',
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'city_id' => 73,
                'created_at' => NULL,
                'id' => 887,
                'name' => 'Süleymanpaşa',
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'city_id' => 73,
                'created_at' => NULL,
                'id' => 888,
                'name' => 'Şarköy',
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'city_id' => 74,
                'created_at' => NULL,
                'id' => 889,
                'name' => 'Almus',
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'city_id' => 74,
                'created_at' => NULL,
                'id' => 890,
                'name' => 'Artova',
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'city_id' => 74,
                'created_at' => NULL,
                'id' => 891,
                'name' => 'Başçiftlik',
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'city_id' => 74,
                'created_at' => NULL,
                'id' => 892,
                'name' => 'Erbaa',
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'city_id' => 74,
                'created_at' => NULL,
                'id' => 893,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'city_id' => 74,
                'created_at' => NULL,
                'id' => 894,
                'name' => 'Niksar',
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'city_id' => 74,
                'created_at' => NULL,
                'id' => 895,
                'name' => 'Pazar',
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'city_id' => 74,
                'created_at' => NULL,
                'id' => 896,
                'name' => 'Reşadiye',
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'city_id' => 74,
                'created_at' => NULL,
                'id' => 897,
                'name' => 'Sulusaray',
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'city_id' => 74,
                'created_at' => NULL,
                'id' => 898,
                'name' => 'Turhal',
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'city_id' => 74,
                'created_at' => NULL,
                'id' => 899,
                'name' => 'Yeşilyurt',
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'city_id' => 74,
                'created_at' => NULL,
                'id' => 900,
                'name' => 'Zile',
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'city_id' => 75,
                'created_at' => NULL,
                'id' => 901,
                'name' => 'Akçaabat',
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'city_id' => 75,
                'created_at' => NULL,
                'id' => 902,
                'name' => 'Araklı',
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'city_id' => 75,
                'created_at' => NULL,
                'id' => 903,
                'name' => 'Arsin',
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'city_id' => 75,
                'created_at' => NULL,
                'id' => 904,
                'name' => 'Beşikdüzü',
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'city_id' => 75,
                'created_at' => NULL,
                'id' => 905,
                'name' => 'Çarşıbaşı',
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'city_id' => 75,
                'created_at' => NULL,
                'id' => 906,
                'name' => 'Çaykara',
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'city_id' => 75,
                'created_at' => NULL,
                'id' => 907,
                'name' => 'Dernekpazarı',
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'city_id' => 75,
                'created_at' => NULL,
                'id' => 908,
                'name' => 'Düzköy',
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'city_id' => 75,
                'created_at' => NULL,
                'id' => 909,
                'name' => 'Hayrat',
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'city_id' => 75,
                'created_at' => NULL,
                'id' => 910,
                'name' => 'Köprübaşı',
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'city_id' => 75,
                'created_at' => NULL,
                'id' => 911,
                'name' => 'Maçka',
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'city_id' => 75,
                'created_at' => NULL,
                'id' => 912,
                'name' => 'Of',
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'city_id' => 75,
                'created_at' => NULL,
                'id' => 913,
                'name' => 'Ortahisar',
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'city_id' => 75,
                'created_at' => NULL,
                'id' => 914,
                'name' => 'Sürmene',
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'city_id' => 75,
                'created_at' => NULL,
                'id' => 915,
                'name' => 'Şalpazarı',
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'city_id' => 75,
                'created_at' => NULL,
                'id' => 916,
                'name' => 'Tonya',
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'city_id' => 75,
                'created_at' => NULL,
                'id' => 917,
                'name' => 'Vakfıkebir',
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'city_id' => 75,
                'created_at' => NULL,
                'id' => 918,
                'name' => 'Yomra',
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'city_id' => 76,
                'created_at' => NULL,
                'id' => 919,
                'name' => 'Çemişgezek',
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'city_id' => 76,
                'created_at' => NULL,
                'id' => 920,
                'name' => 'Hozat',
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'city_id' => 76,
                'created_at' => NULL,
                'id' => 921,
                'name' => 'Mazgirt',
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'city_id' => 76,
                'created_at' => NULL,
                'id' => 922,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'city_id' => 76,
                'created_at' => NULL,
                'id' => 923,
                'name' => 'Nazımiye',
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'city_id' => 76,
                'created_at' => NULL,
                'id' => 924,
                'name' => 'Ovacık',
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'city_id' => 76,
                'created_at' => NULL,
                'id' => 925,
                'name' => 'Pertek',
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'city_id' => 76,
                'created_at' => NULL,
                'id' => 926,
                'name' => 'Pülümür',
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'city_id' => 77,
                'created_at' => NULL,
                'id' => 927,
                'name' => 'Banaz',
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'city_id' => 77,
                'created_at' => NULL,
                'id' => 928,
                'name' => 'Eşme',
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'city_id' => 77,
                'created_at' => NULL,
                'id' => 929,
                'name' => 'Karahallı',
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'city_id' => 77,
                'created_at' => NULL,
                'id' => 930,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'city_id' => 77,
                'created_at' => NULL,
                'id' => 931,
                'name' => 'Sivaslı',
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'city_id' => 77,
                'created_at' => NULL,
                'id' => 932,
                'name' => 'Ulubey',
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'city_id' => 78,
                'created_at' => NULL,
                'id' => 933,
                'name' => 'Bahçesaray',
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'city_id' => 78,
                'created_at' => NULL,
                'id' => 934,
                'name' => 'Başkale',
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'city_id' => 78,
                'created_at' => NULL,
                'id' => 935,
                'name' => 'Çaldıran',
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'city_id' => 78,
                'created_at' => NULL,
                'id' => 936,
                'name' => 'Çatak',
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'city_id' => 78,
                'created_at' => NULL,
                'id' => 937,
                'name' => 'Edremit',
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'city_id' => 78,
                'created_at' => NULL,
                'id' => 938,
                'name' => 'Erciş',
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'city_id' => 78,
                'created_at' => NULL,
                'id' => 939,
                'name' => 'Gevaş',
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'city_id' => 78,
                'created_at' => NULL,
                'id' => 940,
                'name' => 'Gürpınar',
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'city_id' => 78,
                'created_at' => NULL,
                'id' => 941,
                'name' => 'İpekyolu',
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'city_id' => 78,
                'created_at' => NULL,
                'id' => 942,
                'name' => 'Muradiye',
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'city_id' => 78,
                'created_at' => NULL,
                'id' => 943,
                'name' => 'Özalp',
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'city_id' => 78,
                'created_at' => NULL,
                'id' => 944,
                'name' => 'Saray',
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'city_id' => 78,
                'created_at' => NULL,
                'id' => 945,
                'name' => 'Tuşba',
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'city_id' => 79,
                'created_at' => NULL,
                'id' => 946,
                'name' => 'Altınova',
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'city_id' => 79,
                'created_at' => NULL,
                'id' => 947,
                'name' => 'Armutlu',
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'city_id' => 79,
                'created_at' => NULL,
                'id' => 948,
                'name' => 'Çınarcık',
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'city_id' => 79,
                'created_at' => NULL,
                'id' => 949,
                'name' => 'Çiftlikköy',
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'city_id' => 79,
                'created_at' => NULL,
                'id' => 950,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'city_id' => 79,
                'created_at' => NULL,
                'id' => 951,
                'name' => 'Termal',
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'city_id' => 80,
                'created_at' => NULL,
                'id' => 952,
                'name' => 'Akdağmadeni',
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'city_id' => 80,
                'created_at' => NULL,
                'id' => 953,
                'name' => 'Aydıncık',
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'city_id' => 80,
                'created_at' => NULL,
                'id' => 954,
                'name' => 'Boğazlıyan',
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'city_id' => 80,
                'created_at' => NULL,
                'id' => 955,
                'name' => 'Çandır',
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'city_id' => 80,
                'created_at' => NULL,
                'id' => 956,
                'name' => 'Çayıralan',
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'city_id' => 80,
                'created_at' => NULL,
                'id' => 957,
                'name' => 'Çekerek',
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'city_id' => 80,
                'created_at' => NULL,
                'id' => 958,
                'name' => 'Kadışehri',
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'city_id' => 80,
                'created_at' => NULL,
                'id' => 959,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'city_id' => 80,
                'created_at' => NULL,
                'id' => 960,
                'name' => 'Saraykent',
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'city_id' => 80,
                'created_at' => NULL,
                'id' => 961,
                'name' => 'Sarıkaya',
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'city_id' => 80,
                'created_at' => NULL,
                'id' => 962,
                'name' => 'Sorgun',
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'city_id' => 80,
                'created_at' => NULL,
                'id' => 963,
                'name' => 'Şefaatli',
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'city_id' => 80,
                'created_at' => NULL,
                'id' => 964,
                'name' => 'Yenifakılı',
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'city_id' => 80,
                'created_at' => NULL,
                'id' => 965,
                'name' => 'Yerköy',
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'city_id' => 81,
                'created_at' => NULL,
                'id' => 966,
                'name' => 'Alaplı',
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'city_id' => 81,
                'created_at' => NULL,
                'id' => 967,
                'name' => 'Çaycuma',
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'city_id' => 81,
                'created_at' => NULL,
                'id' => 968,
                'name' => 'Devrek',
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'city_id' => 81,
                'created_at' => NULL,
                'id' => 969,
                'name' => 'Ereğli',
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'city_id' => 81,
                'created_at' => NULL,
                'id' => 970,
                'name' => 'Gökçebey',
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'city_id' => 81,
                'created_at' => NULL,
                'id' => 971,
                'name' => 'Kilimli',
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'city_id' => 81,
                'created_at' => NULL,
                'id' => 972,
                'name' => 'Kozlu',
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'city_id' => 81,
                'created_at' => NULL,
                'id' => 973,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
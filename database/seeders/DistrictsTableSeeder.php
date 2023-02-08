<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('districts')->delete();
        
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'county_id' => 1,
                'created_at' => NULL,
                'id' => 1,
                'name' => 'Aladağ',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'county_id' => 1,
                'created_at' => NULL,
                'id' => 2,
                'name' => 'Madenli',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'county_id' => 2,
                'created_at' => NULL,
                'id' => 3,
                'name' => 'Büyükmangıt',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'county_id' => 2,
                'created_at' => NULL,
                'id' => 4,
                'name' => 'Ceyhan',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'county_id' => 2,
                'created_at' => NULL,
                'id' => 5,
                'name' => 'Mustafabeyli',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'county_id' => 3,
                'created_at' => NULL,
                'id' => 6,
                'name' => 'Huzurevleri',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'county_id' => 3,
                'created_at' => NULL,
                'id' => 7,
                'name' => 'Mahfesığmaz',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'county_id' => 3,
                'created_at' => NULL,
                'id' => 8,
                'name' => 'Salbaş',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'county_id' => 4,
                'created_at' => NULL,
                'id' => 9,
                'name' => 'Akkaya',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'county_id' => 4,
                'created_at' => NULL,
                'id' => 10,
                'name' => 'Feke',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'county_id' => 5,
                'created_at' => NULL,
                'id' => 11,
                'name' => 'İmamoğlu',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'county_id' => 5,
                'created_at' => NULL,
                'id' => 12,
                'name' => 'Saygeçit',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'county_id' => 6,
                'created_at' => NULL,
                'id' => 13,
                'name' => 'Karaisalı',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'county_id' => 7,
                'created_at' => NULL,
                'id' => 14,
                'name' => 'Karataş',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'county_id' => 8,
                'created_at' => NULL,
                'id' => 15,
                'name' => 'Hacıbeyli',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'county_id' => 8,
                'created_at' => NULL,
                'id' => 16,
                'name' => 'Kahveli',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'county_id' => 8,
                'created_at' => NULL,
                'id' => 17,
                'name' => 'Kozan',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'county_id' => 9,
                'created_at' => NULL,
                'id' => 18,
                'name' => 'Akçatekir',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'county_id' => 9,
                'created_at' => NULL,
                'id' => 19,
                'name' => 'Gökbez',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'county_id' => 9,
                'created_at' => NULL,
                'id' => 20,
                'name' => 'Pozantı',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'county_id' => 10,
                'created_at' => NULL,
                'id' => 21,
                'name' => 'Saimbeyli',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'county_id' => 11,
                'created_at' => NULL,
                'id' => 22,
                'name' => 'Baklalı',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'county_id' => 11,
                'created_at' => NULL,
                'id' => 23,
                'name' => 'Buruk',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'county_id' => 11,
                'created_at' => NULL,
                'id' => 24,
                'name' => 'İncirlik',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'county_id' => 11,
                'created_at' => NULL,
                'id' => 25,
                'name' => 'Osmangazi',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'county_id' => 11,
                'created_at' => NULL,
                'id' => 26,
                'name' => 'Remzioğuzarık',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'county_id' => 12,
                'created_at' => NULL,
                'id' => 27,
                'name' => 'Akkapı',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'county_id' => 12,
                'created_at' => NULL,
                'id' => 28,
                'name' => 'Denizli',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'county_id' => 12,
                'created_at' => NULL,
                'id' => 29,
                'name' => 'Emek',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'county_id' => 12,
                'created_at' => NULL,
                'id' => 30,
                'name' => 'Fevzipaşa',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'county_id' => 12,
                'created_at' => NULL,
                'id' => 31,
                'name' => 'Gazipaşa',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'county_id' => 12,
                'created_at' => NULL,
                'id' => 32,
                'name' => 'Gülbahçesi',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'county_id' => 12,
                'created_at' => NULL,
                'id' => 33,
                'name' => 'Gürselpaşa',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'county_id' => 12,
                'created_at' => NULL,
                'id' => 34,
                'name' => 'Hadırlı',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'county_id' => 12,
                'created_at' => NULL,
                'id' => 35,
                'name' => 'Hükümet',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'county_id' => 12,
                'created_at' => NULL,
                'id' => 36,
                'name' => 'Karayusuflu',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'county_id' => 12,
                'created_at' => NULL,
                'id' => 37,
                'name' => 'Kuruköprü',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'county_id' => 12,
                'created_at' => NULL,
                'id' => 38,
                'name' => 'Küçükdikili',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'county_id' => 12,
                'created_at' => NULL,
                'id' => 39,
                'name' => 'Mavi Bulvar Yurt',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'county_id' => 12,
                'created_at' => NULL,
                'id' => 40,
                'name' => 'Meydan',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'county_id' => 12,
                'created_at' => NULL,
                'id' => 41,
                'name' => 'Saydam',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'county_id' => 12,
                'created_at' => NULL,
                'id' => 42,
                'name' => 'Şakirpaşa',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'county_id' => 12,
                'created_at' => NULL,
                'id' => 43,
                'name' => 'Yağcami',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'county_id' => 12,
                'created_at' => NULL,
                'id' => 44,
                'name' => 'Yeşilevler',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'county_id' => 12,
                'created_at' => NULL,
                'id' => 45,
                'name' => 'Yeşiloba',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'county_id' => 12,
                'created_at' => NULL,
                'id' => 46,
                'name' => 'Yeşilyurt',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'county_id' => 12,
                'created_at' => NULL,
                'id' => 47,
                'name' => 'Ziyapaşa',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'county_id' => 13,
                'created_at' => NULL,
                'id' => 48,
                'name' => 'Damlalı',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'county_id' => 13,
                'created_at' => NULL,
                'id' => 49,
                'name' => 'Tufanbeyli',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'county_id' => 14,
                'created_at' => NULL,
                'id' => 50,
                'name' => 'Kalemli',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'county_id' => 14,
                'created_at' => NULL,
                'id' => 51,
                'name' => 'Yumurtalık',
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'county_id' => 15,
                'created_at' => NULL,
                'id' => 52,
                'name' => 'Abdioğlu',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'county_id' => 15,
                'created_at' => NULL,
                'id' => 53,
                'name' => 'Alihocalı',
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'county_id' => 15,
                'created_at' => NULL,
                'id' => 54,
                'name' => 'Bahçelievler',
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'county_id' => 15,
                'created_at' => NULL,
                'id' => 55,
                'name' => 'Doğankent',
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'county_id' => 15,
                'created_at' => NULL,
                'id' => 56,
                'name' => 'Havutlu',
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'county_id' => 15,
                'created_at' => NULL,
                'id' => 57,
                'name' => 'İncirlik',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'county_id' => 15,
                'created_at' => NULL,
                'id' => 58,
                'name' => 'Karacaoğlan',
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'county_id' => 15,
                'created_at' => NULL,
                'id' => 59,
                'name' => 'Karşıyaka',
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'county_id' => 15,
                'created_at' => NULL,
                'id' => 60,
                'name' => 'Kazımkarabekir',
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'county_id' => 15,
                'created_at' => NULL,
                'id' => 61,
                'name' => 'Keresteciler',
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'county_id' => 15,
                'created_at' => NULL,
                'id' => 62,
                'name' => 'Pttevleri',
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'county_id' => 15,
                'created_at' => NULL,
                'id' => 63,
                'name' => 'Yakapınar',
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'county_id' => 15,
                'created_at' => NULL,
                'id' => 64,
                'name' => 'Yamaçlı',
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'county_id' => 15,
                'created_at' => NULL,
                'id' => 65,
                'name' => 'Yavuzlar',
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'county_id' => 16,
                'created_at' => NULL,
                'id' => 66,
                'name' => 'Besni',
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'county_id' => 16,
                'created_at' => NULL,
                'id' => 67,
                'name' => 'Çakırhüyük',
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'county_id' => 16,
                'created_at' => NULL,
                'id' => 68,
                'name' => 'Kesmetepe',
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'county_id' => 16,
                'created_at' => NULL,
                'id' => 69,
                'name' => 'Köseceli',
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'county_id' => 16,
                'created_at' => NULL,
                'id' => 70,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'county_id' => 16,
                'created_at' => NULL,
                'id' => 71,
                'name' => 'Suvarlı',
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'county_id' => 16,
                'created_at' => NULL,
                'id' => 72,
                'name' => 'Şambayat',
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'county_id' => 17,
                'created_at' => NULL,
                'id' => 73,
                'name' => 'Çelikhan',
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'county_id' => 17,
                'created_at' => NULL,
                'id' => 74,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'county_id' => 17,
                'created_at' => NULL,
                'id' => 75,
                'name' => 'Pınarbaşı',
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'county_id' => 18,
                'created_at' => NULL,
                'id' => 76,
                'name' => 'Gerger',
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'county_id' => 18,
                'created_at' => NULL,
                'id' => 77,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'county_id' => 19,
                'created_at' => NULL,
                'id' => 78,
                'name' => 'Balkar',
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'county_id' => 19,
                'created_at' => NULL,
                'id' => 79,
                'name' => 'Belören',
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'county_id' => 19,
                'created_at' => NULL,
                'id' => 80,
                'name' => 'Gölbaşı',
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'county_id' => 19,
                'created_at' => NULL,
                'id' => 81,
                'name' => 'Harmanlı',
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'county_id' => 19,
                'created_at' => NULL,
                'id' => 82,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'county_id' => 20,
                'created_at' => NULL,
                'id' => 83,
                'name' => 'Akıncılar',
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'county_id' => 20,
                'created_at' => NULL,
                'id' => 84,
                'name' => 'Bölükyayla',
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'county_id' => 20,
                'created_at' => NULL,
                'id' => 85,
                'name' => 'Kahta',
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'county_id' => 20,
                'created_at' => NULL,
                'id' => 86,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'county_id' => 21,
                'created_at' => NULL,
                'id' => 87,
                'name' => 'Eskisaray',
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'county_id' => 21,
                'created_at' => NULL,
                'id' => 88,
                'name' => 'İmamağa',
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'county_id' => 21,
                'created_at' => NULL,
                'id' => 89,
                'name' => 'Kömür',
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'county_id' => 21,
                'created_at' => NULL,
                'id' => 90,
                'name' => 'Merkez Köyler',
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'county_id' => 21,
                'created_at' => NULL,
                'id' => 91,
                'name' => 'Sümerevler',
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'county_id' => 21,
                'created_at' => NULL,
                'id' => 92,
                'name' => 'Yaylakonak',
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'county_id' => 21,
                'created_at' => NULL,
                'id' => 93,
                'name' => 'Yenisanayi',
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'county_id' => 22,
                'created_at' => NULL,
                'id' => 94,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'county_id' => 22,
                'created_at' => NULL,
                'id' => 95,
                'name' => 'Samsat',
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'county_id' => 23,
                'created_at' => NULL,
                'id' => 96,
                'name' => 'İnlice',
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'county_id' => 23,
                'created_at' => NULL,
                'id' => 97,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'county_id' => 23,
                'created_at' => NULL,
                'id' => 98,
                'name' => 'Sincik',
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'county_id' => 24,
                'created_at' => NULL,
                'id' => 99,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'county_id' => 24,
                'created_at' => NULL,
                'id' => 100,
                'name' => 'Tut',
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'county_id' => 25,
                'created_at' => NULL,
                'id' => 101,
                'name' => 'Başmakçı',
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'county_id' => 25,
                'created_at' => NULL,
                'id' => 102,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'county_id' => 26,
                'created_at' => NULL,
                'id' => 103,
                'name' => 'Bayat',
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'county_id' => 26,
                'created_at' => NULL,
                'id' => 104,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'county_id' => 27,
                'created_at' => NULL,
                'id' => 105,
                'name' => 'Bolvadin',
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'county_id' => 27,
                'created_at' => NULL,
                'id' => 106,
                'name' => 'Dişli',
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'county_id' => 27,
                'created_at' => NULL,
                'id' => 107,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'county_id' => 27,
                'created_at' => NULL,
                'id' => 108,
                'name' => 'Özburun',
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'county_id' => 28,
                'created_at' => NULL,
                'id' => 109,
                'name' => 'Çay',
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'county_id' => 28,
                'created_at' => NULL,
                'id' => 110,
                'name' => 'Karamıkkaracaören',
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'county_id' => 28,
                'created_at' => NULL,
                'id' => 111,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'county_id' => 28,
                'created_at' => NULL,
                'id' => 112,
                'name' => 'Pazarağaç',
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'county_id' => 29,
                'created_at' => NULL,
                'id' => 113,
                'name' => 'Çobanlar',
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'county_id' => 29,
                'created_at' => NULL,
                'id' => 114,
                'name' => 'Kocaöz',
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'county_id' => 29,
                'created_at' => NULL,
                'id' => 115,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'county_id' => 30,
                'created_at' => NULL,
                'id' => 116,
                'name' => 'Dazkırı',
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'county_id' => 30,
                'created_at' => NULL,
                'id' => 117,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'county_id' => 31,
                'created_at' => NULL,
                'id' => 118,
                'name' => 'Dinar',
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'county_id' => 31,
                'created_at' => NULL,
                'id' => 119,
                'name' => 'Haydarlı',
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'county_id' => 31,
                'created_at' => NULL,
                'id' => 120,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'county_id' => 31,
                'created_at' => NULL,
                'id' => 121,
                'name' => 'Tatarlı',
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'county_id' => 32,
                'created_at' => NULL,
                'id' => 122,
                'name' => 'Davulga',
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'county_id' => 32,
                'created_at' => NULL,
                'id' => 123,
                'name' => 'Emirdağ',
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'county_id' => 32,
                'created_at' => NULL,
                'id' => 124,
                'name' => 'Gömü',
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'county_id' => 32,
                'created_at' => NULL,
                'id' => 125,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'county_id' => 33,
                'created_at' => NULL,
                'id' => 126,
                'name' => 'Evciler',
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'county_id' => 33,
                'created_at' => NULL,
                'id' => 127,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'county_id' => 34,
                'created_at' => NULL,
                'id' => 128,
                'name' => 'Hocalar',
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'county_id' => 34,
                'created_at' => NULL,
                'id' => 129,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'county_id' => 35,
                'created_at' => NULL,
                'id' => 130,
                'name' => 'Döğer',
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'county_id' => 35,
                'created_at' => NULL,
                'id' => 131,
                'name' => 'Gazlıgöl',
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'county_id' => 35,
                'created_at' => NULL,
                'id' => 132,
                'name' => 'İhsaniye',
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'county_id' => 35,
                'created_at' => NULL,
                'id' => 133,
                'name' => 'Kayıhan',
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'county_id' => 35,
                'created_at' => NULL,
                'id' => 134,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'county_id' => 35,
                'created_at' => NULL,
                'id' => 135,
                'name' => 'Yaylabağı',
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'county_id' => 36,
                'created_at' => NULL,
                'id' => 136,
                'name' => 'İscehisar',
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'county_id' => 36,
                'created_at' => NULL,
                'id' => 137,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'county_id' => 36,
                'created_at' => NULL,
                'id' => 138,
                'name' => 'Seydiler',
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'county_id' => 37,
                'created_at' => NULL,
                'id' => 139,
                'name' => 'Kızılören',
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'county_id' => 37,
                'created_at' => NULL,
                'id' => 140,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'county_id' => 38,
                'created_at' => NULL,
                'id' => 141,
                'name' => 'Adliye',
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'county_id' => 38,
                'created_at' => NULL,
                'id' => 142,
                'name' => 'Beyyazı',
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'county_id' => 38,
                'created_at' => NULL,
                'id' => 143,
                'name' => 'Çarşı',
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'county_id' => 38,
                'created_at' => NULL,
                'id' => 144,
                'name' => 'Çayırbağ',
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'county_id' => 38,
                'created_at' => NULL,
                'id' => 145,
                'name' => 'Çıkrık',
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'county_id' => 38,
                'created_at' => NULL,
                'id' => 146,
                'name' => 'Değirmenayvalı',
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'county_id' => 38,
                'created_at' => NULL,
                'id' => 147,
                'name' => 'Erkmen',
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'county_id' => 38,
                'created_at' => NULL,
                'id' => 148,
                'name' => 'Fatih',
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'county_id' => 38,
                'created_at' => NULL,
                'id' => 149,
                'name' => 'Fethibey',
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'county_id' => 38,
                'created_at' => NULL,
                'id' => 150,
                'name' => 'Gebeceler',
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'county_id' => 38,
                'created_at' => NULL,
                'id' => 151,
                'name' => 'Işıklar',
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'county_id' => 38,
                'created_at' => NULL,
                'id' => 152,
                'name' => 'Kale',
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'county_id' => 38,
                'created_at' => NULL,
                'id' => 153,
                'name' => 'Kocatepe',
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'county_id' => 38,
                'created_at' => NULL,
                'id' => 154,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'county_id' => 38,
                'created_at' => NULL,
                'id' => 155,
                'name' => 'Nuribey',
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'county_id' => 38,
                'created_at' => NULL,
                'id' => 156,
                'name' => 'Salar',
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'county_id' => 38,
                'created_at' => NULL,
                'id' => 157,
                'name' => 'Susuz',
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'county_id' => 38,
                'created_at' => NULL,
                'id' => 158,
                'name' => 'Sülümenli',
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'county_id' => 38,
                'created_at' => NULL,
                'id' => 159,
                'name' => 'Sülün',
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'county_id' => 38,
                'created_at' => NULL,
                'id' => 160,
                'name' => 'Uydukent',
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'county_id' => 39,
                'created_at' => NULL,
                'id' => 161,
                'name' => 'Akharım',
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'county_id' => 39,
                'created_at' => NULL,
                'id' => 162,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'county_id' => 39,
                'created_at' => NULL,
                'id' => 163,
                'name' => 'Sandıklı',
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'county_id' => 40,
                'created_at' => NULL,
                'id' => 164,
                'name' => 'Ahmetpaşa',
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'county_id' => 40,
                'created_at' => NULL,
                'id' => 165,
                'name' => 'Akören',
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'county_id' => 40,
                'created_at' => NULL,
                'id' => 166,
                'name' => 'Düzağaç',
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'county_id' => 40,
                'created_at' => NULL,
                'id' => 167,
                'name' => 'Güney',
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'county_id' => 40,
                'created_at' => NULL,
                'id' => 168,
                'name' => 'Kılıçarslan',
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'county_id' => 40,
                'created_at' => NULL,
                'id' => 169,
                'name' => 'Kırka',
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'county_id' => 40,
                'created_at' => NULL,
                'id' => 170,
                'name' => 'Küçükhüyük',
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'county_id' => 40,
                'created_at' => NULL,
                'id' => 171,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'county_id' => 40,
                'created_at' => NULL,
                'id' => 172,
                'name' => 'Serban',
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'county_id' => 40,
                'created_at' => NULL,
                'id' => 173,
                'name' => 'Sinanpaşa',
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'county_id' => 40,
                'created_at' => NULL,
                'id' => 174,
                'name' => 'Taşoluk',
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'county_id' => 40,
                'created_at' => NULL,
                'id' => 175,
                'name' => 'Tınaztepe',
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'county_id' => 41,
                'created_at' => NULL,
                'id' => 176,
                'name' => 'Dereçine',
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'county_id' => 41,
                'created_at' => NULL,
                'id' => 177,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'county_id' => 41,
                'created_at' => NULL,
                'id' => 178,
                'name' => 'Sultandağı',
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'county_id' => 41,
                'created_at' => NULL,
                'id' => 179,
                'name' => 'Yeşilçiftlik',
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'county_id' => 42,
                'created_at' => NULL,
                'id' => 180,
                'name' => 'Karaadilli',
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'county_id' => 42,
                'created_at' => NULL,
                'id' => 181,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'county_id' => 42,
                'created_at' => NULL,
                'id' => 182,
                'name' => 'Şuhut',
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'county_id' => 43,
                'created_at' => NULL,
                'id' => 183,
                'name' => 'Diyadin',
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'county_id' => 43,
                'created_at' => NULL,
                'id' => 184,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'county_id' => 44,
                'created_at' => NULL,
                'id' => 185,
                'name' => 'Doğubayazıt',
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'county_id' => 44,
                'created_at' => NULL,
                'id' => 186,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'county_id' => 45,
                'created_at' => NULL,
                'id' => 187,
                'name' => 'Eleşkirt',
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'county_id' => 45,
                'created_at' => NULL,
                'id' => 188,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'county_id' => 45,
                'created_at' => NULL,
                'id' => 189,
                'name' => 'Tahir',
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'county_id' => 45,
                'created_at' => NULL,
                'id' => 190,
                'name' => 'Yayladüzü',
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'county_id' => 45,
                'created_at' => NULL,
                'id' => 191,
                'name' => 'Yücekapı',
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'county_id' => 46,
                'created_at' => NULL,
                'id' => 192,
                'name' => 'Hamur',
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'county_id' => 46,
                'created_at' => NULL,
                'id' => 193,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'county_id' => 47,
                'created_at' => NULL,
                'id' => 194,
                'name' => 'Fevziçakmak',
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'county_id' => 47,
                'created_at' => NULL,
                'id' => 195,
                'name' => 'Kazımkarabekir',
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'county_id' => 47,
                'created_at' => NULL,
                'id' => 196,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'county_id' => 48,
                'created_at' => NULL,
                'id' => 197,
                'name' => 'Dedeli',
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'county_id' => 48,
                'created_at' => NULL,
                'id' => 198,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'county_id' => 48,
                'created_at' => NULL,
                'id' => 199,
                'name' => 'Patnos',
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'county_id' => 48,
                'created_at' => NULL,
                'id' => 200,
                'name' => 'Sarısu',
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'county_id' => 49,
                'created_at' => NULL,
                'id' => 201,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'county_id' => 49,
                'created_at' => NULL,
                'id' => 202,
                'name' => 'Taşlıçay',
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'county_id' => 50,
                'created_at' => NULL,
                'id' => 203,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'county_id' => 50,
                'created_at' => NULL,
                'id' => 204,
                'name' => 'Tutak',
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'county_id' => 51,
                'created_at' => NULL,
                'id' => 205,
                'name' => 'Ağaçören',
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'county_id' => 51,
                'created_at' => NULL,
                'id' => 206,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'county_id' => 52,
                'created_at' => NULL,
                'id' => 207,
                'name' => 'Eskil',
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'county_id' => 52,
                'created_at' => NULL,
                'id' => 208,
                'name' => 'Eşmekaya',
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'county_id' => 52,
                'created_at' => NULL,
                'id' => 209,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'county_id' => 53,
                'created_at' => NULL,
                'id' => 210,
                'name' => 'Demirci',
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'county_id' => 53,
                'created_at' => NULL,
                'id' => 211,
                'name' => 'Gülağaç',
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'county_id' => 53,
                'created_at' => NULL,
                'id' => 212,
                'name' => 'Gülpınar',
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'county_id' => 53,
                'created_at' => NULL,
                'id' => 213,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'county_id' => 53,
                'created_at' => NULL,
                'id' => 214,
                'name' => 'Saratlı',
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'county_id' => 54,
                'created_at' => NULL,
                'id' => 215,
                'name' => 'Güzelyurt',
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'county_id' => 54,
                'created_at' => NULL,
                'id' => 216,
                'name' => 'Ihlara',
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'county_id' => 54,
                'created_at' => NULL,
                'id' => 217,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'county_id' => 54,
                'created_at' => NULL,
                'id' => 218,
                'name' => 'Selime',
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'county_id' => 55,
                'created_at' => NULL,
                'id' => 219,
                'name' => 'Bağlıkaya',
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'county_id' => 55,
                'created_at' => NULL,
                'id' => 220,
                'name' => 'Çarşı',
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'county_id' => 55,
                'created_at' => NULL,
                'id' => 221,
                'name' => 'Helvadere',
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'county_id' => 55,
                'created_at' => NULL,
                'id' => 222,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'county_id' => 55,
                'created_at' => NULL,
                'id' => 223,
                'name' => 'Sağlık',
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'county_id' => 55,
                'created_at' => NULL,
                'id' => 224,
                'name' => 'Sanayi',
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'county_id' => 55,
                'created_at' => NULL,
                'id' => 225,
                'name' => 'Taşpınar',
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'county_id' => 55,
                'created_at' => NULL,
                'id' => 226,
                'name' => 'Topakkaya',
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'county_id' => 55,
                'created_at' => NULL,
                'id' => 227,
                'name' => 'Yenikent',
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'county_id' => 55,
                'created_at' => NULL,
                'id' => 228,
                'name' => 'Yeşilova',
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'county_id' => 55,
                'created_at' => NULL,
                'id' => 229,
                'name' => 'Yeşiltepe',
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'county_id' => 56,
                'created_at' => NULL,
                'id' => 230,
                'name' => 'Balcı',
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'county_id' => 56,
                'created_at' => NULL,
                'id' => 231,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'county_id' => 56,
                'created_at' => NULL,
                'id' => 232,
                'name' => 'Ortaköy',
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'county_id' => 57,
                'created_at' => NULL,
                'id' => 233,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'county_id' => 57,
                'created_at' => NULL,
                'id' => 234,
                'name' => 'Sarıyahşi',
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'county_id' => 58,
                'created_at' => NULL,
                'id' => 235,
                'name' => 'Sultanhanı',
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'county_id' => 59,
                'created_at' => NULL,
                'id' => 236,
                'name' => 'Göynücek',
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'county_id' => 59,
                'created_at' => NULL,
                'id' => 237,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'county_id' => 60,
                'created_at' => NULL,
                'id' => 238,
                'name' => 'Gümüşhacıköy',
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'county_id' => 60,
                'created_at' => NULL,
                'id' => 239,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'county_id' => 61,
                'created_at' => NULL,
                'id' => 240,
                'name' => 'Hamamözü',
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'county_id' => 61,
                'created_at' => NULL,
                'id' => 241,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'county_id' => 62,
                'created_at' => NULL,
                'id' => 242,
                'name' => 'Dereboyu',
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'county_id' => 62,
                'created_at' => NULL,
                'id' => 243,
                'name' => 'Gen.Hikmetakıncı',
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'county_id' => 62,
                'created_at' => NULL,
                'id' => 244,
                'name' => 'Gökmedrese',
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'county_id' => 62,
                'created_at' => NULL,
                'id' => 245,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'county_id' => 62,
                'created_at' => NULL,
                'id' => 246,
                'name' => 'Ziyaret',
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'county_id' => 63,
                'created_at' => NULL,
                'id' => 247,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'county_id' => 63,
                'created_at' => NULL,
                'id' => 248,
                'name' => 'Merzifon',
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'county_id' => 64,
                'created_at' => NULL,
                'id' => 249,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'county_id' => 64,
                'created_at' => NULL,
                'id' => 250,
                'name' => 'Suluova',
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'county_id' => 65,
                'created_at' => NULL,
                'id' => 251,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'county_id' => 65,
                'created_at' => NULL,
                'id' => 252,
                'name' => 'Taşova',
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'county_id' => 66,
                'created_at' => NULL,
                'id' => 253,
                'name' => 'Akyurt',
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'county_id' => 67,
                'created_at' => NULL,
                'id' => 254,
                'name' => 'Altındağ',
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'county_id' => 67,
                'created_at' => NULL,
                'id' => 255,
                'name' => 'Aydınlıkevler',
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'county_id' => 67,
                'created_at' => NULL,
                'id' => 256,
                'name' => 'Hasköy',
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'county_id' => 67,
                'created_at' => NULL,
                'id' => 257,
                'name' => 'İskitler',
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'county_id' => 67,
                'created_at' => NULL,
                'id' => 258,
                'name' => 'Karacaören',
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'county_id' => 67,
                'created_at' => NULL,
                'id' => 259,
                'name' => 'Samanpazarı',
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'county_id' => 67,
                'created_at' => NULL,
                'id' => 260,
                'name' => 'Ulubey',
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'county_id' => 67,
                'created_at' => NULL,
                'id' => 261,
                'name' => 'Ulus',
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'county_id' => 68,
                'created_at' => NULL,
                'id' => 262,
                'name' => 'Ayaş',
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'county_id' => 69,
                'created_at' => NULL,
                'id' => 263,
                'name' => 'Bala',
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'county_id' => 70,
                'created_at' => NULL,
                'id' => 264,
                'name' => 'Beypazarı',
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'county_id' => 71,
                'created_at' => NULL,
                'id' => 265,
                'name' => 'Çamlıdere',
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'county_id' => 72,
                'created_at' => NULL,
                'id' => 266,
                'name' => '100.Yıl',
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'county_id' => 72,
                'created_at' => NULL,
                'id' => 267,
                'name' => 'Ahlatlıbel',
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'county_id' => 72,
                'created_at' => NULL,
                'id' => 268,
                'name' => 'Bahçelievler',
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'county_id' => 72,
                'created_at' => NULL,
                'id' => 269,
                'name' => 'Balgat',
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'county_id' => 72,
                'created_at' => NULL,
                'id' => 270,
                'name' => 'Bilkent',
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'county_id' => 72,
                'created_at' => NULL,
                'id' => 271,
                'name' => 'Birlik',
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'county_id' => 72,
                'created_at' => NULL,
                'id' => 272,
                'name' => 'Cebeci',
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'county_id' => 72,
                'created_at' => NULL,
                'id' => 273,
                'name' => 'Çankaya',
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'county_id' => 72,
                'created_at' => NULL,
                'id' => 274,
                'name' => 'Çayyolu',
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'county_id' => 72,
                'created_at' => NULL,
                'id' => 275,
                'name' => 'Dikmen',
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'county_id' => 72,
                'created_at' => NULL,
                'id' => 276,
                'name' => 'Esat',
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'county_id' => 72,
                'created_at' => NULL,
                'id' => 277,
                'name' => 'Karataş',
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'county_id' => 72,
                'created_at' => NULL,
                'id' => 278,
                'name' => 'Kavaklıdere',
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'county_id' => 72,
                'created_at' => NULL,
                'id' => 279,
                'name' => 'Maltepe',
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'county_id' => 72,
                'created_at' => NULL,
                'id' => 280,
                'name' => 'Öveçler',
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'county_id' => 72,
                'created_at' => NULL,
                'id' => 281,
                'name' => 'Yenişehir',
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'county_id' => 72,
                'created_at' => NULL,
                'id' => 282,
                'name' => 'Yıldız',
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'county_id' => 72,
                'created_at' => NULL,
                'id' => 283,
                'name' => 'Zafertepe',
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'county_id' => 73,
                'created_at' => NULL,
                'id' => 284,
                'name' => 'Çubuk',
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'county_id' => 74,
                'created_at' => NULL,
                'id' => 285,
                'name' => 'Elmadağ',
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'county_id' => 74,
                'created_at' => NULL,
                'id' => 286,
                'name' => 'Hasanoğlan',
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'county_id' => 75,
                'created_at' => NULL,
                'id' => 287,
                'name' => '30Ağustos',
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'county_id' => 75,
                'created_at' => NULL,
                'id' => 288,
                'name' => 'Bahçekapı',
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'county_id' => 75,
                'created_at' => NULL,
                'id' => 289,
                'name' => 'Elvankent',
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'county_id' => 75,
                'created_at' => NULL,
                'id' => 290,
                'name' => 'Eryamanevleri',
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'county_id' => 75,
                'created_at' => NULL,
                'id' => 291,
                'name' => 'Etimesgut',
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'county_id' => 75,
                'created_at' => NULL,
                'id' => 292,
                'name' => 'Göksu',
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'county_id' => 75,
                'created_at' => NULL,
                'id' => 293,
                'name' => 'Güzelkent',
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'county_id' => 75,
                'created_at' => NULL,
                'id' => 294,
                'name' => 'Yurtçu',
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'county_id' => 76,
                'created_at' => NULL,
                'id' => 295,
                'name' => 'Evren',
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'county_id' => 77,
                'created_at' => NULL,
                'id' => 296,
                'name' => 'Gölbaşı',
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'county_id' => 78,
                'created_at' => NULL,
                'id' => 297,
                'name' => 'Güdül',
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'county_id' => 79,
                'created_at' => NULL,
                'id' => 298,
                'name' => 'Haymana',
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'county_id' => 80,
                'created_at' => NULL,
                'id' => 299,
                'name' => 'Kazan',
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'county_id' => 81,
                'created_at' => NULL,
                'id' => 300,
                'name' => 'Kalecik',
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'county_id' => 82,
                'created_at' => NULL,
                'id' => 301,
                'name' => 'Aktepe',
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'county_id' => 82,
                'created_at' => NULL,
                'id' => 302,
                'name' => 'Bağlum',
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'county_id' => 82,
                'created_at' => NULL,
                'id' => 303,
                'name' => 'Esertepe',
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'county_id' => 82,
                'created_at' => NULL,
                'id' => 304,
                'name' => 'Etlik',
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'county_id' => 82,
                'created_at' => NULL,
                'id' => 305,
                'name' => 'Hasköy S.Evleri',
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'county_id' => 82,
                'created_at' => NULL,
                'id' => 306,
                'name' => 'Kalaba',
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'county_id' => 82,
                'created_at' => NULL,
                'id' => 307,
                'name' => 'Sanatoryum',
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'county_id' => 82,
                'created_at' => NULL,
                'id' => 308,
                'name' => 'Şenlik',
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'county_id' => 82,
                'created_at' => NULL,
                'id' => 309,
                'name' => 'Ufuktepe',
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'county_id' => 83,
                'created_at' => NULL,
                'id' => 310,
                'name' => 'Kızılcahamam',
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'county_id' => 84,
                'created_at' => NULL,
                'id' => 311,
                'name' => 'Abidinpaşa',
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'county_id' => 84,
                'created_at' => NULL,
                'id' => 312,
                'name' => 'Akdere',
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'county_id' => 84,
                'created_at' => NULL,
                'id' => 313,
                'name' => 'Demirlibahçe',
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'county_id' => 84,
                'created_at' => NULL,
                'id' => 314,
                'name' => 'Gülveren',
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'county_id' => 84,
                'created_at' => NULL,
                'id' => 315,
                'name' => 'Hüseyingazi',
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'county_id' => 84,
                'created_at' => NULL,
                'id' => 316,
                'name' => 'Kayaş',
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'county_id' => 84,
                'created_at' => NULL,
                'id' => 317,
                'name' => 'Lalahan',
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'county_id' => 84,
                'created_at' => NULL,
                'id' => 318,
                'name' => 'Mamak',
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'county_id' => 85,
                'created_at' => NULL,
                'id' => 319,
                'name' => 'Nallıhan',
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'county_id' => 86,
                'created_at' => NULL,
                'id' => 320,
                'name' => 'Polatlı',
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'county_id' => 87,
                'created_at' => NULL,
                'id' => 321,
                'name' => 'Pursaklar',
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'county_id' => 88,
                'created_at' => NULL,
                'id' => 322,
                'name' => 'Ahievran',
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'county_id' => 88,
                'created_at' => NULL,
                'id' => 323,
                'name' => 'Fatih',
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'county_id' => 88,
                'created_at' => NULL,
                'id' => 324,
                'name' => 'Sincan',
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'county_id' => 88,
                'created_at' => NULL,
                'id' => 325,
                'name' => 'Temelli',
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'county_id' => 88,
                'created_at' => NULL,
                'id' => 326,
                'name' => 'Yenikent',
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'county_id' => 89,
                'created_at' => NULL,
                'id' => 327,
                'name' => 'Şereflikoçhisar',
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'county_id' => 90,
                'created_at' => NULL,
                'id' => 328,
                'name' => 'A.O.Çiftliği',
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'county_id' => 90,
                'created_at' => NULL,
                'id' => 329,
                'name' => 'Batıkent',
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'county_id' => 90,
                'created_at' => NULL,
                'id' => 330,
                'name' => 'Demetevler',
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'county_id' => 90,
                'created_at' => NULL,
                'id' => 331,
                'name' => 'İvedik Osb',
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'county_id' => 90,
                'created_at' => NULL,
                'id' => 332,
                'name' => 'Karşıyaka',
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'county_id' => 90,
                'created_at' => NULL,
                'id' => 333,
                'name' => 'Macunköy',
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'county_id' => 90,
                'created_at' => NULL,
                'id' => 334,
                'name' => 'Ostim',
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'county_id' => 90,
                'created_at' => NULL,
                'id' => 335,
                'name' => 'Şentepe',
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'county_id' => 90,
                'created_at' => NULL,
                'id' => 336,
                'name' => 'Yenimahalle',
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'county_id' => 91,
                'created_at' => NULL,
                'id' => 337,
                'name' => 'Akseki',
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'county_id' => 91,
                'created_at' => NULL,
                'id' => 338,
                'name' => 'Cevizli',
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'county_id' => 92,
                'created_at' => NULL,
                'id' => 339,
                'name' => 'Aksu',
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'county_id' => 93,
                'created_at' => NULL,
                'id' => 340,
                'name' => 'Alanya',
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'county_id' => 93,
                'created_at' => NULL,
                'id' => 341,
                'name' => 'Avsallar',
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'county_id' => 93,
                'created_at' => NULL,
                'id' => 342,
                'name' => 'Demirtaş',
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'county_id' => 93,
                'created_at' => NULL,
                'id' => 343,
                'name' => 'Kestel',
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'county_id' => 93,
                'created_at' => NULL,
                'id' => 344,
                'name' => 'Mahmutlar',
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'county_id' => 94,
                'created_at' => NULL,
                'id' => 345,
                'name' => 'Davazlar',
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'county_id' => 94,
                'created_at' => NULL,
                'id' => 346,
                'name' => 'Demre',
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'county_id' => 94,
                'created_at' => NULL,
                'id' => 347,
                'name' => 'Kale',
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'county_id' => 95,
                'created_at' => NULL,
                'id' => 348,
                'name' => 'Döşemealtı',
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'county_id' => 96,
                'created_at' => NULL,
                'id' => 349,
                'name' => 'Akçay',
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'county_id' => 96,
                'created_at' => NULL,
                'id' => 350,
                'name' => 'Elmalı',
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'county_id' => 97,
                'created_at' => NULL,
                'id' => 351,
                'name' => 'Finike',
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'county_id' => 98,
                'created_at' => NULL,
                'id' => 352,
                'name' => 'Gazipaşa',
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'county_id' => 99,
                'created_at' => NULL,
                'id' => 353,
                'name' => 'Gündoğmuş',
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'county_id' => 100,
                'created_at' => NULL,
                'id' => 354,
                'name' => 'Aydınkent',
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'county_id' => 101,
                'created_at' => NULL,
                'id' => 355,
                'name' => 'Cemre',
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'county_id' => 101,
                'created_at' => NULL,
                'id' => 356,
                'name' => 'Gömbe',
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'county_id' => 101,
                'created_at' => NULL,
                'id' => 357,
                'name' => 'Kalkan',
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'county_id' => 101,
                'created_at' => NULL,
                'id' => 358,
                'name' => 'Kaş',
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'county_id' => 101,
                'created_at' => NULL,
                'id' => 359,
                'name' => 'Kınık',
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'county_id' => 101,
                'created_at' => NULL,
                'id' => 360,
                'name' => 'Ova',
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'county_id' => 101,
                'created_at' => NULL,
                'id' => 361,
                'name' => 'Yeşilköy',
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'county_id' => 102,
                'created_at' => NULL,
                'id' => 362,
                'name' => 'Beldibi',
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'county_id' => 102,
                'created_at' => NULL,
                'id' => 363,
                'name' => 'Beycik',
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'county_id' => 102,
                'created_at' => NULL,
                'id' => 364,
                'name' => 'Çamyuva',
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'county_id' => 102,
                'created_at' => NULL,
                'id' => 365,
                'name' => 'Göynük',
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'county_id' => 102,
                'created_at' => NULL,
                'id' => 366,
                'name' => 'Kemer',
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'county_id' => 102,
                'created_at' => NULL,
                'id' => 367,
                'name' => 'Tekirova',
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'county_id' => 103,
                'created_at' => NULL,
                'id' => 368,
                'name' => 'Ahatlı',
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'county_id' => 103,
                'created_at' => NULL,
                'id' => 369,
                'name' => 'Altınova',
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'county_id' => 103,
                'created_at' => NULL,
                'id' => 370,
                'name' => 'Dokuma',
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'county_id' => 103,
                'created_at' => NULL,
                'id' => 371,
                'name' => 'Duraliler',
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'county_id' => 103,
                'created_at' => NULL,
                'id' => 372,
                'name' => 'Düdenbaşı',
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'county_id' => 103,
                'created_at' => NULL,
                'id' => 373,
                'name' => 'Erenköy',
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'county_id' => 103,
                'created_at' => NULL,
                'id' => 374,
                'name' => 'Sütçüler',
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'county_id' => 103,
                'created_at' => NULL,
                'id' => 375,
                'name' => 'Varsak',
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'county_id' => 103,
                'created_at' => NULL,
                'id' => 376,
                'name' => 'Yeniemek',
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'county_id' => 104,
                'created_at' => NULL,
                'id' => 377,
                'name' => 'Arapsuyu',
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'county_id' => 104,
                'created_at' => NULL,
                'id' => 378,
                'name' => 'Liman',
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'county_id' => 105,
                'created_at' => NULL,
                'id' => 379,
                'name' => 'Korkuteli',
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'county_id' => 106,
                'created_at' => NULL,
                'id' => 380,
                'name' => 'Kumluca',
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'county_id' => 106,
                'created_at' => NULL,
                'id' => 381,
                'name' => 'Mavikent',
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'county_id' => 107,
                'created_at' => NULL,
                'id' => 382,
                'name' => 'Çolaklı',
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'county_id' => 107,
                'created_at' => NULL,
                'id' => 383,
                'name' => 'Manavgat',
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'county_id' => 107,
                'created_at' => NULL,
                'id' => 384,
                'name' => 'Side',
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'county_id' => 107,
                'created_at' => NULL,
                'id' => 385,
                'name' => 'Taşağıl',
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'county_id' => 108,
                'created_at' => NULL,
                'id' => 386,
                'name' => 'Bahçelievler',
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'county_id' => 108,
                'created_at' => NULL,
                'id' => 387,
                'name' => 'Çarşı',
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'county_id' => 108,
                'created_at' => NULL,
                'id' => 388,
                'name' => 'Eskisanayi',
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'county_id' => 108,
                'created_at' => NULL,
                'id' => 389,
                'name' => 'Fener',
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'county_id' => 108,
                'created_at' => NULL,
                'id' => 390,
                'name' => 'Gençlik',
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'county_id' => 108,
                'created_at' => NULL,
                'id' => 391,
                'name' => 'Kızıltoprak',
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'county_id' => 108,
                'created_at' => NULL,
                'id' => 392,
                'name' => 'Lara',
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'county_id' => 108,
                'created_at' => NULL,
                'id' => 393,
                'name' => 'Meltem',
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'county_id' => 108,
                'created_at' => NULL,
                'id' => 394,
                'name' => 'Meydankavağı',
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'county_id' => 109,
                'created_at' => NULL,
                'id' => 395,
                'name' => 'Serik',
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'county_id' => 110,
                'created_at' => NULL,
                'id' => 396,
                'name' => 'Çıldır',
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'county_id' => 110,
                'created_at' => NULL,
                'id' => 397,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'county_id' => 111,
                'created_at' => NULL,
                'id' => 398,
                'name' => 'Damal',
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'county_id' => 111,
                'created_at' => NULL,
                'id' => 399,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'county_id' => 112,
                'created_at' => NULL,
                'id' => 400,
                'name' => 'Göle',
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'county_id' => 112,
                'created_at' => NULL,
                'id' => 401,
                'name' => 'Köprülü',
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'county_id' => 112,
                'created_at' => NULL,
                'id' => 402,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'county_id' => 113,
                'created_at' => NULL,
                'id' => 403,
                'name' => 'Hanak',
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'county_id' => 113,
                'created_at' => NULL,
                'id' => 404,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'county_id' => 114,
                'created_at' => NULL,
                'id' => 405,
                'name' => 'Ardahan',
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'county_id' => 114,
                'created_at' => NULL,
                'id' => 406,
                'name' => 'Hasköy',
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'county_id' => 114,
                'created_at' => NULL,
                'id' => 407,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'county_id' => 114,
                'created_at' => NULL,
                'id' => 408,
                'name' => 'Yanlızçam',
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'county_id' => 115,
                'created_at' => NULL,
                'id' => 409,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'county_id' => 115,
                'created_at' => NULL,
                'id' => 410,
                'name' => 'Posof',
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'county_id' => 116,
                'created_at' => NULL,
                'id' => 411,
                'name' => 'Ardanuç',
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'county_id' => 116,
                'created_at' => NULL,
                'id' => 412,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'county_id' => 117,
                'created_at' => NULL,
                'id' => 413,
                'name' => 'Arhavi',
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'county_id' => 117,
                'created_at' => NULL,
                'id' => 414,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'county_id' => 118,
                'created_at' => NULL,
                'id' => 415,
                'name' => 'Borçka',
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'county_id' => 118,
                'created_at' => NULL,
                'id' => 416,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'county_id' => 119,
                'created_at' => NULL,
                'id' => 417,
                'name' => 'Hopa',
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'county_id' => 119,
                'created_at' => NULL,
                'id' => 418,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'county_id' => 120,
                'created_at' => NULL,
                'id' => 419,
                'name' => 'Kemalpaşa',
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'county_id' => 120,
                'created_at' => NULL,
                'id' => 420,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'county_id' => 121,
                'created_at' => NULL,
                'id' => 421,
                'name' => 'Artvin',
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'county_id' => 121,
                'created_at' => NULL,
                'id' => 422,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'county_id' => 122,
                'created_at' => NULL,
                'id' => 423,
                'name' => 'Göktaş',
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'county_id' => 122,
                'created_at' => NULL,
                'id' => 424,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'county_id' => 123,
                'created_at' => NULL,
                'id' => 425,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'county_id' => 123,
                'created_at' => NULL,
                'id' => 426,
                'name' => 'Şavşat',
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'county_id' => 124,
                'created_at' => NULL,
                'id' => 427,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'county_id' => 124,
                'created_at' => NULL,
                'id' => 428,
                'name' => 'Yusufeli',
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'county_id' => 125,
                'created_at' => NULL,
                'id' => 429,
                'name' => 'Bozdoğan',
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'county_id' => 126,
                'created_at' => NULL,
                'id' => 430,
                'name' => 'Çubukdağı',
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'county_id' => 127,
                'created_at' => NULL,
                'id' => 431,
                'name' => 'Çine',
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'county_id' => 128,
                'created_at' => NULL,
                'id' => 432,
                'name' => 'Akyeniköy',
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'county_id' => 128,
                'created_at' => NULL,
                'id' => 433,
                'name' => 'Yenihisar',
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'county_id' => 129,
                'created_at' => NULL,
                'id' => 434,
                'name' => 'Çarşı',
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'county_id' => 129,
                'created_at' => NULL,
                'id' => 435,
                'name' => 'Kurtuluş',
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'county_id' => 129,
                'created_at' => NULL,
                'id' => 436,
                'name' => 'Sanayi',
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'county_id' => 129,
                'created_at' => NULL,
                'id' => 437,
                'name' => 'Umurlu',
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'county_id' => 130,
                'created_at' => NULL,
                'id' => 438,
                'name' => 'Germencik',
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'county_id' => 130,
                'created_at' => NULL,
                'id' => 439,
                'name' => 'Ortaklar',
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'county_id' => 131,
                'created_at' => NULL,
                'id' => 440,
                'name' => 'İncirliova',
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'county_id' => 132,
                'created_at' => NULL,
                'id' => 441,
                'name' => 'Karacasu',
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'county_id' => 133,
                'created_at' => NULL,
                'id' => 442,
                'name' => 'Karpuzlu',
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'county_id' => 134,
                'created_at' => NULL,
                'id' => 443,
                'name' => 'Koçarlı',
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'county_id' => 135,
                'created_at' => NULL,
                'id' => 444,
                'name' => 'Köşk',
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'county_id' => 136,
                'created_at' => NULL,
                'id' => 445,
                'name' => 'Kuşadası',
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'county_id' => 137,
                'created_at' => NULL,
                'id' => 446,
                'name' => 'Kuyucak',
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'county_id' => 138,
                'created_at' => NULL,
                'id' => 447,
                'name' => 'Nazilli',
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'county_id' => 138,
                'created_at' => NULL,
                'id' => 448,
                'name' => 'Sümer',
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'county_id' => 139,
                'created_at' => NULL,
                'id' => 449,
                'name' => 'Söke',
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'county_id' => 140,
                'created_at' => NULL,
                'id' => 450,
                'name' => 'Sultanhisar',
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'county_id' => 141,
                'created_at' => NULL,
                'id' => 451,
                'name' => 'Yenipazar',
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'county_id' => 142,
                'created_at' => NULL,
                'id' => 452,
                'name' => 'Altıeylül',
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'county_id' => 142,
                'created_at' => NULL,
                'id' => 453,
                'name' => 'Ertuğrul',
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'county_id' => 142,
                'created_at' => NULL,
                'id' => 454,
                'name' => 'Gündoğan',
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'county_id' => 142,
                'created_at' => NULL,
                'id' => 455,
                'name' => 'Konakpınar',
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'county_id' => 142,
                'created_at' => NULL,
                'id' => 456,
                'name' => 'Pamukçu',
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'county_id' => 142,
                'created_at' => NULL,
                'id' => 457,
                'name' => 'Plevne',
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'county_id' => 143,
                'created_at' => NULL,
                'id' => 458,
                'name' => 'Alibeyadası',
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'county_id' => 143,
                'created_at' => NULL,
                'id' => 459,
                'name' => 'Altınova',
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'county_id' => 143,
                'created_at' => NULL,
                'id' => 460,
                'name' => 'Ayvalık',
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'county_id' => 143,
                'created_at' => NULL,
                'id' => 461,
                'name' => 'Küçükköy',
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'county_id' => 144,
                'created_at' => NULL,
                'id' => 462,
                'name' => 'Balya',
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'county_id' => 144,
                'created_at' => NULL,
                'id' => 463,
                'name' => 'Patlak',
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'county_id' => 145,
                'created_at' => NULL,
                'id' => 464,
                'name' => 'Aksakal',
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'county_id' => 145,
                'created_at' => NULL,
                'id' => 465,
                'name' => 'Bandırma',
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'county_id' => 145,
                'created_at' => NULL,
                'id' => 466,
                'name' => 'Doğruca',
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'county_id' => 145,
                'created_at' => NULL,
                'id' => 467,
                'name' => 'Edincik',
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'county_id' => 146,
                'created_at' => NULL,
                'id' => 468,
                'name' => 'Bigadiç',
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'county_id' => 146,
                'created_at' => NULL,
                'id' => 469,
                'name' => 'Çağış',
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'county_id' => 146,
                'created_at' => NULL,
                'id' => 470,
                'name' => 'Salmanlı',
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'county_id' => 147,
                'created_at' => NULL,
                'id' => 471,
                'name' => 'Burhaniye',
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'county_id' => 147,
                'created_at' => NULL,
                'id' => 472,
                'name' => 'Çoruk',
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'county_id' => 147,
                'created_at' => NULL,
                'id' => 473,
                'name' => 'Pelitköy',
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'county_id' => 148,
                'created_at' => NULL,
                'id' => 474,
                'name' => 'Dursunbey',
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'county_id' => 148,
                'created_at' => NULL,
                'id' => 475,
                'name' => 'Hacılar',
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'county_id' => 149,
                'created_at' => NULL,
                'id' => 476,
                'name' => 'Akçay',
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'county_id' => 149,
                'created_at' => NULL,
                'id' => 477,
                'name' => 'Altınoluk',
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'county_id' => 149,
                'created_at' => NULL,
                'id' => 478,
                'name' => 'Edremit',
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'county_id' => 150,
                'created_at' => NULL,
                'id' => 479,
                'name' => 'Belkıs',
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'county_id' => 150,
                'created_at' => NULL,
                'id' => 480,
                'name' => 'Erdek',
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'county_id' => 151,
                'created_at' => NULL,
                'id' => 481,
                'name' => 'Dursunlu',
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'county_id' => 151,
                'created_at' => NULL,
                'id' => 482,
                'name' => 'Gömeç',
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'county_id' => 151,
                'created_at' => NULL,
                'id' => 483,
                'name' => 'Karaağaç',
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'county_id' => 152,
                'created_at' => NULL,
                'id' => 484,
                'name' => 'Gönen',
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'county_id' => 152,
                'created_at' => NULL,
                'id' => 485,
                'name' => 'Hasanbey',
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'county_id' => 152,
                'created_at' => NULL,
                'id' => 486,
                'name' => 'Sarıköy',
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'county_id' => 153,
                'created_at' => NULL,
                'id' => 487,
                'name' => 'Havran',
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'county_id' => 153,
                'created_at' => NULL,
                'id' => 488,
                'name' => 'Temaşalık',
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'county_id' => 154,
                'created_at' => NULL,
                'id' => 489,
                'name' => 'Büyükyenice',
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'county_id' => 154,
                'created_at' => NULL,
                'id' => 490,
                'name' => 'Gökçeyazı',
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'county_id' => 154,
                'created_at' => NULL,
                'id' => 491,
                'name' => 'İvrindi',
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'county_id' => 154,
                'created_at' => NULL,
                'id' => 492,
                'name' => 'Kayapa',
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'county_id' => 154,
                'created_at' => NULL,
                'id' => 493,
                'name' => 'Korucu',
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'county_id' => 154,
                'created_at' => NULL,
                'id' => 494,
                'name' => 'Sarıca',
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'county_id' => 155,
                'created_at' => NULL,
                'id' => 495,
                'name' => 'Atatürk',
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'county_id' => 155,
                'created_at' => NULL,
                'id' => 496,
                'name' => 'Karesi',
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'county_id' => 155,
                'created_at' => NULL,
                'id' => 497,
                'name' => 'Sakarya',
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'county_id' => 155,
                'created_at' => NULL,
                'id' => 498,
                'name' => 'Şamlı',
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'county_id' => 156,
                'created_at' => NULL,
                'id' => 499,
                'name' => 'Kepsut',
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'county_id' => 156,
                'created_at' => NULL,
                'id' => 500,
                'name' => 'Servet',
                'updated_at' => NULL,
            ),
        ));
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'county_id' => 157,
                'created_at' => NULL,
                'id' => 501,
                'name' => 'Kayaca',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'county_id' => 157,
                'created_at' => NULL,
                'id' => 502,
                'name' => 'Manyas',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'county_id' => 158,
                'created_at' => NULL,
                'id' => 503,
                'name' => 'Avşa',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'county_id' => 158,
                'created_at' => NULL,
                'id' => 504,
                'name' => 'Marmara',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'county_id' => 159,
                'created_at' => NULL,
                'id' => 505,
                'name' => 'Karaçam',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'county_id' => 159,
                'created_at' => NULL,
                'id' => 506,
                'name' => 'Sarıbeyler',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'county_id' => 159,
                'created_at' => NULL,
                'id' => 507,
                'name' => 'Savaştepe',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'county_id' => 160,
                'created_at' => NULL,
                'id' => 508,
                'name' => 'Mandıra',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'county_id' => 160,
                'created_at' => NULL,
                'id' => 509,
                'name' => 'Sındırgı',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'county_id' => 161,
                'created_at' => NULL,
                'id' => 510,
                'name' => 'Göbel',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'county_id' => 161,
                'created_at' => NULL,
                'id' => 511,
                'name' => 'Kayıkçı',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'county_id' => 161,
                'created_at' => NULL,
                'id' => 512,
                'name' => 'Susurluk',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'county_id' => 162,
                'created_at' => NULL,
                'id' => 513,
                'name' => 'Amasra',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'county_id' => 162,
                'created_at' => NULL,
                'id' => 514,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'county_id' => 163,
                'created_at' => NULL,
                'id' => 515,
                'name' => 'Kurucaşile',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'county_id' => 163,
                'created_at' => NULL,
                'id' => 516,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'county_id' => 164,
                'created_at' => NULL,
                'id' => 517,
                'name' => 'Demirciler',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'county_id' => 164,
                'created_at' => NULL,
                'id' => 518,
                'name' => 'Hasankadı',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'county_id' => 164,
                'created_at' => NULL,
                'id' => 519,
                'name' => 'Kozcağız',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'county_id' => 164,
                'created_at' => NULL,
                'id' => 520,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'county_id' => 164,
                'created_at' => NULL,
                'id' => 521,
                'name' => 'Yenisanayi',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'county_id' => 165,
                'created_at' => NULL,
                'id' => 522,
                'name' => 'Abdipaşa',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'county_id' => 165,
                'created_at' => NULL,
                'id' => 523,
                'name' => 'Kumluca',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'county_id' => 165,
                'created_at' => NULL,
                'id' => 524,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'county_id' => 165,
                'created_at' => NULL,
                'id' => 525,
                'name' => 'Ulus',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'county_id' => 166,
                'created_at' => NULL,
                'id' => 526,
                'name' => 'Beşiri',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'county_id' => 166,
                'created_at' => NULL,
                'id' => 527,
                'name' => 'İkiköprü',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'county_id' => 166,
                'created_at' => NULL,
                'id' => 528,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'county_id' => 167,
                'created_at' => NULL,
                'id' => 529,
                'name' => 'Gercüş',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'county_id' => 167,
                'created_at' => NULL,
                'id' => 530,
                'name' => 'Kayapınar',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'county_id' => 167,
                'created_at' => NULL,
                'id' => 531,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'county_id' => 168,
                'created_at' => NULL,
                'id' => 532,
                'name' => 'Hasankeyf',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'county_id' => 168,
                'created_at' => NULL,
                'id' => 533,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'county_id' => 169,
                'created_at' => NULL,
                'id' => 534,
                'name' => 'Bekirhan',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'county_id' => 169,
                'created_at' => NULL,
                'id' => 535,
                'name' => 'Kozluk',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'county_id' => 169,
                'created_at' => NULL,
                'id' => 536,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'county_id' => 170,
                'created_at' => NULL,
                'id' => 537,
                'name' => 'Balpınar',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'county_id' => 170,
                'created_at' => NULL,
                'id' => 538,
                'name' => 'Çarşı',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'county_id' => 170,
                'created_at' => NULL,
                'id' => 539,
                'name' => 'Gap',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'county_id' => 170,
                'created_at' => NULL,
                'id' => 540,
                'name' => 'Kültür',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'county_id' => 170,
                'created_at' => NULL,
                'id' => 541,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'county_id' => 170,
                'created_at' => NULL,
                'id' => 542,
                'name' => 'Petrol',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'county_id' => 171,
                'created_at' => NULL,
                'id' => 543,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'county_id' => 171,
                'created_at' => NULL,
                'id' => 544,
                'name' => 'Sason',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'county_id' => 171,
                'created_at' => NULL,
                'id' => 545,
                'name' => 'Yücebağ',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'county_id' => 172,
                'created_at' => NULL,
                'id' => 546,
                'name' => 'Aydıntepe',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'county_id' => 172,
                'created_at' => NULL,
                'id' => 547,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'county_id' => 173,
                'created_at' => NULL,
                'id' => 548,
                'name' => 'Demirözü',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'county_id' => 173,
                'created_at' => NULL,
                'id' => 549,
                'name' => 'Gökçedere',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'county_id' => 173,
                'created_at' => NULL,
                'id' => 550,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'county_id' => 174,
                'created_at' => NULL,
                'id' => 551,
                'name' => 'Arpalı',
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'county_id' => 174,
                'created_at' => NULL,
                'id' => 552,
                'name' => 'Bayburt',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'county_id' => 174,
                'created_at' => NULL,
                'id' => 553,
                'name' => 'Maden',
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'county_id' => 174,
                'created_at' => NULL,
                'id' => 554,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'county_id' => 175,
                'created_at' => NULL,
                'id' => 555,
                'name' => 'Bozüyük',
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'county_id' => 175,
                'created_at' => NULL,
                'id' => 556,
                'name' => 'Dodurga',
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'county_id' => 175,
                'created_at' => NULL,
                'id' => 557,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'county_id' => 176,
                'created_at' => NULL,
                'id' => 558,
                'name' => 'Gölpazarı',
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'county_id' => 176,
                'created_at' => NULL,
                'id' => 559,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'county_id' => 177,
                'created_at' => NULL,
                'id' => 560,
                'name' => 'İnhisar',
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'county_id' => 177,
                'created_at' => NULL,
                'id' => 561,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'county_id' => 178,
                'created_at' => NULL,
                'id' => 562,
                'name' => 'Bayırköy',
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'county_id' => 178,
                'created_at' => NULL,
                'id' => 563,
                'name' => 'Bilecik',
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'county_id' => 178,
                'created_at' => NULL,
                'id' => 564,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'county_id' => 178,
                'created_at' => NULL,
                'id' => 565,
                'name' => 'Vezirhan',
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'county_id' => 179,
                'created_at' => NULL,
                'id' => 566,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'county_id' => 179,
                'created_at' => NULL,
                'id' => 567,
                'name' => 'Osmaneli',
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'county_id' => 180,
                'created_at' => NULL,
                'id' => 568,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'county_id' => 180,
                'created_at' => NULL,
                'id' => 569,
                'name' => 'Pazaryeri',
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'county_id' => 181,
                'created_at' => NULL,
                'id' => 570,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'county_id' => 181,
                'created_at' => NULL,
                'id' => 571,
                'name' => 'Söğüt',
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'county_id' => 182,
                'created_at' => NULL,
                'id' => 572,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'county_id' => 182,
                'created_at' => NULL,
                'id' => 573,
                'name' => 'Yenipazar',
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'county_id' => 183,
                'created_at' => NULL,
                'id' => 574,
                'name' => 'Adaklı',
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'county_id' => 183,
                'created_at' => NULL,
                'id' => 575,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'county_id' => 184,
                'created_at' => NULL,
                'id' => 576,
                'name' => 'Genç',
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'county_id' => 184,
                'created_at' => NULL,
                'id' => 577,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'county_id' => 185,
                'created_at' => NULL,
                'id' => 578,
                'name' => 'Karlıova',
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'county_id' => 185,
                'created_at' => NULL,
                'id' => 579,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'county_id' => 186,
                'created_at' => NULL,
                'id' => 580,
                'name' => 'Kiğı',
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'county_id' => 186,
                'created_at' => NULL,
                'id' => 581,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'county_id' => 187,
                'created_at' => NULL,
                'id' => 582,
                'name' => 'Ağaçeli',
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'county_id' => 187,
                'created_at' => NULL,
                'id' => 583,
                'name' => 'Bingöl',
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'county_id' => 187,
                'created_at' => NULL,
                'id' => 584,
                'name' => 'Ilıcalar',
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'county_id' => 187,
                'created_at' => NULL,
                'id' => 585,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'county_id' => 187,
                'created_at' => NULL,
                'id' => 586,
                'name' => 'Sancak',
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'county_id' => 188,
                'created_at' => NULL,
                'id' => 587,
                'name' => 'Arakonak',
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'county_id' => 188,
                'created_at' => NULL,
                'id' => 588,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'county_id' => 188,
                'created_at' => NULL,
                'id' => 589,
                'name' => 'Solhan',
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'county_id' => 189,
                'created_at' => NULL,
                'id' => 590,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'county_id' => 189,
                'created_at' => NULL,
                'id' => 591,
                'name' => 'Yayladere',
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'county_id' => 190,
                'created_at' => NULL,
                'id' => 592,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'county_id' => 190,
                'created_at' => NULL,
                'id' => 593,
                'name' => 'Yedisu',
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'county_id' => 191,
                'created_at' => NULL,
                'id' => 594,
                'name' => 'Adilcevaz',
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'county_id' => 191,
                'created_at' => NULL,
                'id' => 595,
                'name' => 'Aydınlar',
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'county_id' => 191,
                'created_at' => NULL,
                'id' => 596,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'county_id' => 192,
                'created_at' => NULL,
                'id' => 597,
                'name' => 'Ahlat',
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'county_id' => 192,
                'created_at' => NULL,
                'id' => 598,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'county_id' => 192,
                'created_at' => NULL,
                'id' => 599,
                'name' => 'Ovakışla',
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'county_id' => 193,
                'created_at' => NULL,
                'id' => 600,
                'name' => 'Gölbaşı',
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'county_id' => 193,
                'created_at' => NULL,
                'id' => 601,
                'name' => 'Günkırı',
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'county_id' => 193,
                'created_at' => NULL,
                'id' => 602,
                'name' => 'Güroymak',
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'county_id' => 193,
                'created_at' => NULL,
                'id' => 603,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'county_id' => 194,
                'created_at' => NULL,
                'id' => 604,
                'name' => 'Hizan',
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'county_id' => 194,
                'created_at' => NULL,
                'id' => 605,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'county_id' => 195,
                'created_at' => NULL,
                'id' => 606,
                'name' => 'Bitlis',
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'county_id' => 195,
                'created_at' => NULL,
                'id' => 607,
                'name' => 'Bölükyazı',
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'county_id' => 195,
                'created_at' => NULL,
                'id' => 608,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'county_id' => 195,
                'created_at' => NULL,
                'id' => 609,
                'name' => 'Yolalan',
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'county_id' => 196,
                'created_at' => NULL,
                'id' => 610,
                'name' => 'Geyikpınar',
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'county_id' => 196,
                'created_at' => NULL,
                'id' => 611,
                'name' => 'Kavakbaşı',
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'county_id' => 196,
                'created_at' => NULL,
                'id' => 612,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'county_id' => 196,
                'created_at' => NULL,
                'id' => 613,
                'name' => 'Meydan',
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'county_id' => 196,
                'created_at' => NULL,
                'id' => 614,
                'name' => 'Mutki',
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'county_id' => 197,
                'created_at' => NULL,
                'id' => 615,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'county_id' => 197,
                'created_at' => NULL,
                'id' => 616,
                'name' => 'Tatvan',
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'county_id' => 197,
                'created_at' => NULL,
                'id' => 617,
                'name' => 'Yelkenli',
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'county_id' => 198,
                'created_at' => NULL,
                'id' => 618,
                'name' => 'Dörtdivan',
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'county_id' => 198,
                'created_at' => NULL,
                'id' => 619,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'county_id' => 199,
                'created_at' => NULL,
                'id' => 620,
                'name' => 'Gerede',
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'county_id' => 199,
                'created_at' => NULL,
                'id' => 621,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'county_id' => 200,
                'created_at' => NULL,
                'id' => 622,
                'name' => 'Göynük',
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'county_id' => 200,
                'created_at' => NULL,
                'id' => 623,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'county_id' => 201,
                'created_at' => NULL,
                'id' => 624,
                'name' => 'Kıbrıscık',
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'county_id' => 201,
                'created_at' => NULL,
                'id' => 625,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'county_id' => 202,
                'created_at' => NULL,
                'id' => 626,
                'name' => 'Gökçesu',
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'county_id' => 202,
                'created_at' => NULL,
                'id' => 627,
                'name' => 'Mengen',
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'county_id' => 202,
                'created_at' => NULL,
                'id' => 628,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'county_id' => 203,
                'created_at' => NULL,
                'id' => 629,
                'name' => 'Aşağısoku',
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'county_id' => 203,
                'created_at' => NULL,
                'id' => 630,
                'name' => 'İhsaniye',
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'county_id' => 203,
                'created_at' => NULL,
                'id' => 631,
                'name' => 'Karacasu',
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'county_id' => 203,
                'created_at' => NULL,
                'id' => 632,
                'name' => 'Karamanlı',
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'county_id' => 203,
                'created_at' => NULL,
                'id' => 633,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'county_id' => 204,
                'created_at' => NULL,
                'id' => 634,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'county_id' => 204,
                'created_at' => NULL,
                'id' => 635,
                'name' => 'Mudurnu',
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'county_id' => 204,
                'created_at' => NULL,
                'id' => 636,
                'name' => 'Taşkesti',
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'county_id' => 205,
                'created_at' => NULL,
                'id' => 637,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'county_id' => 205,
                'created_at' => NULL,
                'id' => 638,
                'name' => 'Seben',
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'county_id' => 206,
                'created_at' => NULL,
                'id' => 639,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'county_id' => 206,
                'created_at' => NULL,
                'id' => 640,
                'name' => 'Yeniçağa',
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'county_id' => 207,
                'created_at' => NULL,
                'id' => 641,
                'name' => 'Ağlasun',
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'county_id' => 207,
                'created_at' => NULL,
                'id' => 642,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'county_id' => 208,
                'created_at' => NULL,
                'id' => 643,
                'name' => 'Dirmil',
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'county_id' => 208,
                'created_at' => NULL,
                'id' => 644,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'county_id' => 209,
                'created_at' => NULL,
                'id' => 645,
                'name' => 'Bucak',
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'county_id' => 209,
                'created_at' => NULL,
                'id' => 646,
                'name' => 'Kızılkaya',
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'county_id' => 209,
                'created_at' => NULL,
                'id' => 647,
                'name' => 'Kocaaliler',
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'county_id' => 209,
                'created_at' => NULL,
                'id' => 648,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'county_id' => 210,
                'created_at' => NULL,
                'id' => 649,
                'name' => 'Çavdır',
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'county_id' => 210,
                'created_at' => NULL,
                'id' => 650,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'county_id' => 210,
                'created_at' => NULL,
                'id' => 651,
                'name' => 'Söğüt',
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'county_id' => 211,
                'created_at' => NULL,
                'id' => 652,
                'name' => 'Çeltikçi',
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'county_id' => 211,
                'created_at' => NULL,
                'id' => 653,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'county_id' => 212,
                'created_at' => NULL,
                'id' => 654,
                'name' => 'Gölhisar',
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'county_id' => 212,
                'created_at' => NULL,
                'id' => 655,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'county_id' => 212,
                'created_at' => NULL,
                'id' => 656,
                'name' => 'Yusufça',
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'county_id' => 213,
                'created_at' => NULL,
                'id' => 657,
                'name' => 'Karamanlı',
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'county_id' => 213,
                'created_at' => NULL,
                'id' => 658,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'county_id' => 214,
                'created_at' => NULL,
                'id' => 659,
                'name' => 'Kemer',
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'county_id' => 214,
                'created_at' => NULL,
                'id' => 660,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'county_id' => 215,
                'created_at' => NULL,
                'id' => 661,
                'name' => 'Bahçelievler',
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'county_id' => 215,
                'created_at' => NULL,
                'id' => 662,
                'name' => 'Çeşmedamı',
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'county_id' => 215,
                'created_at' => NULL,
                'id' => 663,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'county_id' => 215,
                'created_at' => NULL,
                'id' => 664,
                'name' => 'Sanayi',
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'county_id' => 215,
                'created_at' => NULL,
                'id' => 665,
                'name' => 'Yenice',
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'county_id' => 216,
                'created_at' => NULL,
                'id' => 666,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'county_id' => 216,
                'created_at' => NULL,
                'id' => 667,
                'name' => 'Tefenni',
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'county_id' => 217,
                'created_at' => NULL,
                'id' => 668,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'county_id' => 217,
                'created_at' => NULL,
                'id' => 669,
                'name' => 'Yeşilova',
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'county_id' => 218,
                'created_at' => NULL,
                'id' => 670,
                'name' => 'Büyükorhan',
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'county_id' => 219,
                'created_at' => NULL,
                'id' => 671,
                'name' => 'Gemlik',
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'county_id' => 220,
                'created_at' => NULL,
                'id' => 672,
                'name' => 'Gürsu',
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'county_id' => 221,
                'created_at' => NULL,
                'id' => 673,
                'name' => 'Harmancık',
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'county_id' => 222,
                'created_at' => NULL,
                'id' => 674,
                'name' => 'İnegöl',
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'county_id' => 223,
                'created_at' => NULL,
                'id' => 675,
                'name' => 'İznik',
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'county_id' => 224,
                'created_at' => NULL,
                'id' => 676,
                'name' => 'Karacabey',
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'county_id' => 225,
                'created_at' => NULL,
                'id' => 677,
                'name' => 'Keles',
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'county_id' => 226,
                'created_at' => NULL,
                'id' => 678,
                'name' => 'Kestel',
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'county_id' => 227,
                'created_at' => NULL,
                'id' => 679,
                'name' => 'Mudanya',
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'county_id' => 228,
                'created_at' => NULL,
                'id' => 680,
                'name' => 'Mustafakemalpaşa',
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'county_id' => 229,
                'created_at' => NULL,
                'id' => 681,
                'name' => 'Alaattinbey',
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'county_id' => 229,
                'created_at' => NULL,
                'id' => 682,
                'name' => 'Altınşehir',
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'county_id' => 229,
                'created_at' => NULL,
                'id' => 683,
                'name' => 'Ataevler',
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'county_id' => 229,
                'created_at' => NULL,
                'id' => 684,
                'name' => 'Balat',
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'county_id' => 229,
                'created_at' => NULL,
                'id' => 685,
                'name' => 'Beşevler',
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'county_id' => 229,
                'created_at' => NULL,
                'id' => 686,
                'name' => 'Çalı',
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'county_id' => 229,
                'created_at' => NULL,
                'id' => 687,
                'name' => 'Ertuğrul',
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'county_id' => 229,
                'created_at' => NULL,
                'id' => 688,
                'name' => 'Görükle',
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'county_id' => 229,
                'created_at' => NULL,
                'id' => 689,
                'name' => 'Hasanağa',
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'county_id' => 229,
                'created_at' => NULL,
                'id' => 690,
                'name' => 'İhsaniye',
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'county_id' => 229,
                'created_at' => NULL,
                'id' => 691,
                'name' => 'İzmiryolboyu',
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'county_id' => 229,
                'created_at' => NULL,
                'id' => 692,
                'name' => 'Konak',
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'county_id' => 229,
                'created_at' => NULL,
                'id' => 693,
                'name' => 'Nilüferköy',
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'county_id' => 229,
                'created_at' => NULL,
                'id' => 694,
                'name' => 'Nosab',
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'county_id' => 229,
                'created_at' => NULL,
                'id' => 695,
                'name' => 'Organizesanayi',
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'county_id' => 229,
                'created_at' => NULL,
                'id' => 696,
                'name' => 'Üçevler',
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'county_id' => 230,
                'created_at' => NULL,
                'id' => 697,
                'name' => 'Orhaneli',
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'county_id' => 231,
                'created_at' => NULL,
                'id' => 698,
                'name' => 'Orhangazi',
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'county_id' => 232,
                'created_at' => NULL,
                'id' => 699,
                'name' => 'Alemdar',
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'county_id' => 232,
                'created_at' => NULL,
                'id' => 700,
                'name' => 'Altıparmak',
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'county_id' => 232,
                'created_at' => NULL,
                'id' => 701,
                'name' => 'Bağlarbaşı',
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'county_id' => 232,
                'created_at' => NULL,
                'id' => 702,
                'name' => 'Bahar',
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'county_id' => 232,
                'created_at' => NULL,
                'id' => 703,
                'name' => 'Balıklı',
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'county_id' => 232,
                'created_at' => NULL,
                'id' => 704,
                'name' => 'Çarşı',
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'county_id' => 232,
                'created_at' => NULL,
                'id' => 705,
                'name' => 'Çekirge',
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'county_id' => 232,
                'created_at' => NULL,
                'id' => 706,
                'name' => 'Demirtaş',
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'county_id' => 232,
                'created_at' => NULL,
                'id' => 707,
                'name' => 'Dosab',
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'county_id' => 232,
                'created_at' => NULL,
                'id' => 708,
                'name' => 'Emek',
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'county_id' => 232,
                'created_at' => NULL,
                'id' => 709,
                'name' => 'Hamitler',
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'county_id' => 232,
                'created_at' => NULL,
                'id' => 710,
                'name' => 'Hisar',
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'county_id' => 232,
                'created_at' => NULL,
                'id' => 711,
                'name' => 'Hüdavendigar',
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'county_id' => 232,
                'created_at' => NULL,
                'id' => 712,
                'name' => 'Hürriyet',
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'county_id' => 232,
                'created_at' => NULL,
                'id' => 713,
                'name' => 'Küplüpınar',
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'county_id' => 232,
                'created_at' => NULL,
                'id' => 714,
                'name' => 'Maksem',
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'county_id' => 232,
                'created_at' => NULL,
                'id' => 715,
                'name' => 'Osmangaziköy',
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'county_id' => 232,
                'created_at' => NULL,
                'id' => 716,
                'name' => 'Ovaakça',
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'county_id' => 232,
                'created_at' => NULL,
                'id' => 717,
                'name' => 'Panayır',
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'county_id' => 232,
                'created_at' => NULL,
                'id' => 718,
                'name' => 'Ulumahalle',
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'county_id' => 232,
                'created_at' => NULL,
                'id' => 719,
                'name' => 'Yunuseli',
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'county_id' => 233,
                'created_at' => NULL,
                'id' => 720,
                'name' => 'Yenişehir',
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'county_id' => 234,
                'created_at' => NULL,
                'id' => 721,
                'name' => 'Arabayatağı',
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'county_id' => 234,
                'created_at' => NULL,
                'id' => 722,
                'name' => 'Beyazıt',
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'county_id' => 234,
                'created_at' => NULL,
                'id' => 723,
                'name' => 'Davutkadı',
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'county_id' => 234,
                'created_at' => NULL,
                'id' => 724,
                'name' => 'Duaçınar',
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'county_id' => 234,
                'created_at' => NULL,
                'id' => 725,
                'name' => 'Esenevler',
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'county_id' => 234,
                'created_at' => NULL,
                'id' => 726,
                'name' => 'Ortabağlar',
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'county_id' => 234,
                'created_at' => NULL,
                'id' => 727,
                'name' => 'Setbaşı',
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'county_id' => 234,
                'created_at' => NULL,
                'id' => 728,
                'name' => 'Yıldırım',
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'county_id' => 235,
                'created_at' => NULL,
                'id' => 729,
                'name' => 'Ayvacık',
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'county_id' => 235,
                'created_at' => NULL,
                'id' => 730,
                'name' => 'Küçükkuyu',
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'county_id' => 235,
                'created_at' => NULL,
                'id' => 731,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'county_id' => 236,
                'created_at' => NULL,
                'id' => 732,
                'name' => 'Bayramiç',
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'county_id' => 236,
                'created_at' => NULL,
                'id' => 733,
                'name' => 'Evciler',
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'county_id' => 236,
                'created_at' => NULL,
                'id' => 734,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'county_id' => 236,
                'created_at' => NULL,
                'id' => 735,
                'name' => 'Yiğitler',
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'county_id' => 237,
                'created_at' => NULL,
                'id' => 736,
                'name' => 'Biga',
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'county_id' => 237,
                'created_at' => NULL,
                'id' => 737,
                'name' => 'Gümüşçay',
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'county_id' => 237,
                'created_at' => NULL,
                'id' => 738,
                'name' => 'Karabiga',
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'county_id' => 237,
                'created_at' => NULL,
                'id' => 739,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'county_id' => 238,
                'created_at' => NULL,
                'id' => 740,
                'name' => 'Bozcaada',
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'county_id' => 239,
                'created_at' => NULL,
                'id' => 741,
                'name' => 'Çan',
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'county_id' => 239,
                'created_at' => NULL,
                'id' => 742,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'county_id' => 239,
                'created_at' => NULL,
                'id' => 743,
                'name' => 'Terzialan',
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'county_id' => 240,
                'created_at' => NULL,
                'id' => 744,
                'name' => 'Eceabat',
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'county_id' => 240,
                'created_at' => NULL,
                'id' => 745,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'county_id' => 241,
                'created_at' => NULL,
                'id' => 746,
                'name' => 'Ezine',
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'county_id' => 241,
                'created_at' => NULL,
                'id' => 747,
                'name' => 'Geyikli',
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'county_id' => 241,
                'created_at' => NULL,
                'id' => 748,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'county_id' => 242,
                'created_at' => NULL,
                'id' => 749,
                'name' => 'Evreşe',
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'county_id' => 242,
                'created_at' => NULL,
                'id' => 750,
                'name' => 'Gelibolu',
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'county_id' => 242,
                'created_at' => NULL,
                'id' => 751,
                'name' => 'Kavakköy',
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'county_id' => 242,
                'created_at' => NULL,
                'id' => 752,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'county_id' => 243,
                'created_at' => NULL,
                'id' => 753,
                'name' => 'İmroz',
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'county_id' => 243,
                'created_at' => NULL,
                'id' => 754,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'county_id' => 244,
                'created_at' => NULL,
                'id' => 755,
                'name' => 'Çardak',
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'county_id' => 244,
                'created_at' => NULL,
                'id' => 756,
                'name' => 'Lapseki',
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'county_id' => 244,
                'created_at' => NULL,
                'id' => 757,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'county_id' => 244,
                'created_at' => NULL,
                'id' => 758,
                'name' => 'Umurbey',
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'county_id' => 245,
                'created_at' => NULL,
                'id' => 759,
                'name' => 'Barbaros',
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'county_id' => 245,
                'created_at' => NULL,
                'id' => 760,
                'name' => 'Cevatpaşa',
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'county_id' => 245,
                'created_at' => NULL,
                'id' => 761,
                'name' => 'Kepez',
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'county_id' => 245,
                'created_at' => NULL,
                'id' => 762,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'county_id' => 246,
                'created_at' => NULL,
                'id' => 763,
                'name' => 'Kalkım',
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'county_id' => 246,
                'created_at' => NULL,
                'id' => 764,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'county_id' => 246,
                'created_at' => NULL,
                'id' => 765,
                'name' => 'Yenice',
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'county_id' => 247,
                'created_at' => NULL,
                'id' => 766,
                'name' => 'Atkaracalar',
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'county_id' => 247,
                'created_at' => NULL,
                'id' => 767,
                'name' => 'Çardaklı',
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'county_id' => 247,
                'created_at' => NULL,
                'id' => 768,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'county_id' => 248,
                'created_at' => NULL,
                'id' => 769,
                'name' => 'Bayramören',
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'county_id' => 248,
                'created_at' => NULL,
                'id' => 770,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'county_id' => 249,
                'created_at' => NULL,
                'id' => 771,
                'name' => 'Çerkeş',
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'county_id' => 249,
                'created_at' => NULL,
                'id' => 772,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'county_id' => 249,
                'created_at' => NULL,
                'id' => 773,
                'name' => 'Saçak',
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'county_id' => 250,
                'created_at' => NULL,
                'id' => 774,
                'name' => 'Eldivan',
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'county_id' => 250,
                'created_at' => NULL,
                'id' => 775,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'county_id' => 251,
                'created_at' => NULL,
                'id' => 776,
                'name' => 'Ilgaz',
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'county_id' => 251,
                'created_at' => NULL,
                'id' => 777,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'county_id' => 252,
                'created_at' => NULL,
                'id' => 778,
                'name' => 'Kızılırmak',
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'county_id' => 252,
                'created_at' => NULL,
                'id' => 779,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'county_id' => 253,
                'created_at' => NULL,
                'id' => 780,
                'name' => 'Korgun',
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'county_id' => 253,
                'created_at' => NULL,
                'id' => 781,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'county_id' => 254,
                'created_at' => NULL,
                'id' => 782,
                'name' => 'Kurşunlu',
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'county_id' => 254,
                'created_at' => NULL,
                'id' => 783,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'county_id' => 255,
                'created_at' => NULL,
                'id' => 784,
                'name' => 'Çarşı',
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'county_id' => 255,
                'created_at' => NULL,
                'id' => 785,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'county_id' => 255,
                'created_at' => NULL,
                'id' => 786,
                'name' => 'Taşmescit',
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'county_id' => 256,
                'created_at' => NULL,
                'id' => 787,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'county_id' => 256,
                'created_at' => NULL,
                'id' => 788,
                'name' => 'Orta',
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'county_id' => 256,
                'created_at' => NULL,
                'id' => 789,
                'name' => 'Yaylakent',
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'county_id' => 257,
                'created_at' => NULL,
                'id' => 790,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'county_id' => 257,
                'created_at' => NULL,
                'id' => 791,
                'name' => 'Şabanözü',
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'county_id' => 258,
                'created_at' => NULL,
                'id' => 792,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'county_id' => 258,
                'created_at' => NULL,
                'id' => 793,
                'name' => 'Yapraklı',
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'county_id' => 259,
                'created_at' => NULL,
                'id' => 794,
                'name' => 'Alaca',
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'county_id' => 259,
                'created_at' => NULL,
                'id' => 795,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'county_id' => 260,
                'created_at' => NULL,
                'id' => 796,
                'name' => 'Bayat',
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'county_id' => 260,
                'created_at' => NULL,
                'id' => 797,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'county_id' => 261,
                'created_at' => NULL,
                'id' => 798,
                'name' => 'Boğazkale',
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'county_id' => 261,
                'created_at' => NULL,
                'id' => 799,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'county_id' => 262,
                'created_at' => NULL,
                'id' => 800,
                'name' => 'Dodurga',
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'county_id' => 262,
                'created_at' => NULL,
                'id' => 801,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'county_id' => 263,
                'created_at' => NULL,
                'id' => 802,
                'name' => 'İskilip',
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'county_id' => 263,
                'created_at' => NULL,
                'id' => 803,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'county_id' => 264,
                'created_at' => NULL,
                'id' => 804,
                'name' => 'Kargı',
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'county_id' => 264,
                'created_at' => NULL,
                'id' => 805,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'county_id' => 265,
                'created_at' => NULL,
                'id' => 806,
                'name' => 'Laçin',
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'county_id' => 265,
                'created_at' => NULL,
                'id' => 807,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'county_id' => 266,
                'created_at' => NULL,
                'id' => 808,
                'name' => 'Mecitözü',
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'county_id' => 266,
                'created_at' => NULL,
                'id' => 809,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'county_id' => 267,
                'created_at' => NULL,
                'id' => 810,
                'name' => 'Düvenci',
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'county_id' => 267,
                'created_at' => NULL,
                'id' => 811,
                'name' => 'Gülabibey',
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'county_id' => 267,
                'created_at' => NULL,
                'id' => 812,
                'name' => 'Karakeçili',
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'county_id' => 267,
                'created_at' => NULL,
                'id' => 813,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'county_id' => 267,
                'created_at' => NULL,
                'id' => 814,
                'name' => 'Ulukavak',
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'county_id' => 267,
                'created_at' => NULL,
                'id' => 815,
                'name' => 'Yeniyol',
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'county_id' => 268,
                'created_at' => NULL,
                'id' => 816,
                'name' => 'Karaören',
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'county_id' => 268,
                'created_at' => NULL,
                'id' => 817,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'county_id' => 269,
                'created_at' => NULL,
                'id' => 818,
                'name' => 'Aştavul',
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'county_id' => 269,
                'created_at' => NULL,
                'id' => 819,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'county_id' => 269,
                'created_at' => NULL,
                'id' => 820,
                'name' => 'Ortaköy',
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'county_id' => 270,
                'created_at' => NULL,
                'id' => 821,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'county_id' => 270,
                'created_at' => NULL,
                'id' => 822,
                'name' => 'Osmancık',
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'county_id' => 271,
                'created_at' => NULL,
                'id' => 823,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'county_id' => 271,
                'created_at' => NULL,
                'id' => 824,
                'name' => 'Sungurlu',
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'county_id' => 272,
                'created_at' => NULL,
                'id' => 825,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'county_id' => 272,
                'created_at' => NULL,
                'id' => 826,
                'name' => 'Uğurludağ',
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'county_id' => 273,
                'created_at' => NULL,
                'id' => 827,
                'name' => 'Acıpayam',
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'county_id' => 274,
                'created_at' => NULL,
                'id' => 828,
                'name' => 'Babadağ',
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'county_id' => 275,
                'created_at' => NULL,
                'id' => 829,
                'name' => 'Baklan',
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'county_id' => 276,
                'created_at' => NULL,
                'id' => 830,
                'name' => 'Bekilli',
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'county_id' => 277,
                'created_at' => NULL,
                'id' => 831,
                'name' => 'Beyağaç',
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'county_id' => 278,
                'created_at' => NULL,
                'id' => 832,
                'name' => 'Bozkurt',
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'county_id' => 279,
                'created_at' => NULL,
                'id' => 833,
                'name' => 'Buldan',
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'county_id' => 280,
                'created_at' => NULL,
                'id' => 834,
                'name' => 'Çal',
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'county_id' => 281,
                'created_at' => NULL,
                'id' => 835,
                'name' => 'Çameli',
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'county_id' => 282,
                'created_at' => NULL,
                'id' => 836,
                'name' => 'Çardak',
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'county_id' => 283,
                'created_at' => NULL,
                'id' => 837,
                'name' => 'Çivril',
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'county_id' => 284,
                'created_at' => NULL,
                'id' => 838,
                'name' => 'Güney',
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'county_id' => 285,
                'created_at' => NULL,
                'id' => 839,
                'name' => 'Honaz',
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'county_id' => 286,
                'created_at' => NULL,
                'id' => 840,
                'name' => 'Kale',
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'county_id' => 287,
                'created_at' => NULL,
                'id' => 841,
                'name' => 'Adalet',
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'county_id' => 287,
                'created_at' => NULL,
                'id' => 842,
                'name' => 'Gümüşler',
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'county_id' => 287,
                'created_at' => NULL,
                'id' => 843,
                'name' => 'Saraylar',
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'county_id' => 287,
                'created_at' => NULL,
                'id' => 844,
                'name' => 'Sümer',
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'county_id' => 287,
                'created_at' => NULL,
                'id' => 845,
                'name' => 'Üçler',
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'county_id' => 287,
                'created_at' => NULL,
                'id' => 846,
                'name' => 'Üzerlik',
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'county_id' => 288,
                'created_at' => NULL,
                'id' => 847,
                'name' => 'Akköy',
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'county_id' => 288,
                'created_at' => NULL,
                'id' => 848,
                'name' => 'Çeşmebaşı',
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'county_id' => 288,
                'created_at' => NULL,
                'id' => 849,
                'name' => 'İstiklal',
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'county_id' => 288,
                'created_at' => NULL,
                'id' => 850,
                'name' => 'Karşıyaka',
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'county_id' => 288,
                'created_at' => NULL,
                'id' => 851,
                'name' => 'Kınıklı',
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'county_id' => 289,
                'created_at' => NULL,
                'id' => 852,
                'name' => 'Sarayköy',
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'county_id' => 290,
                'created_at' => NULL,
                'id' => 853,
                'name' => 'Serinhisar',
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'county_id' => 291,
                'created_at' => NULL,
                'id' => 854,
                'name' => 'Tavas',
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'county_id' => 292,
                'created_at' => NULL,
                'id' => 855,
                'name' => 'Alipınar',
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'county_id' => 292,
                'created_at' => NULL,
                'id' => 856,
                'name' => 'Körhat',
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'county_id' => 292,
                'created_at' => NULL,
                'id' => 857,
                'name' => 'Selahattineyyubi',
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'county_id' => 293,
                'created_at' => NULL,
                'id' => 858,
                'name' => 'Bismil',
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'county_id' => 294,
                'created_at' => NULL,
                'id' => 859,
                'name' => 'Çermik',
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'county_id' => 295,
                'created_at' => NULL,
                'id' => 860,
                'name' => 'Çınar',
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'county_id' => 296,
                'created_at' => NULL,
                'id' => 861,
                'name' => 'Çüngüş',
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'county_id' => 297,
                'created_at' => NULL,
                'id' => 862,
                'name' => 'Dicle',
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'county_id' => 298,
                'created_at' => NULL,
                'id' => 863,
                'name' => 'Eğil',
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'county_id' => 299,
                'created_at' => NULL,
                'id' => 864,
                'name' => 'Ergani',
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'county_id' => 300,
                'created_at' => NULL,
                'id' => 865,
                'name' => 'Hani',
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'county_id' => 301,
                'created_at' => NULL,
                'id' => 866,
                'name' => 'Hazro',
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'county_id' => 302,
                'created_at' => NULL,
                'id' => 867,
                'name' => 'Kayapınar',
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'county_id' => 303,
                'created_at' => NULL,
                'id' => 868,
                'name' => 'Kocaköy',
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'county_id' => 304,
                'created_at' => NULL,
                'id' => 869,
                'name' => 'Kulp',
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'county_id' => 305,
                'created_at' => NULL,
                'id' => 870,
                'name' => 'Lice',
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'county_id' => 306,
                'created_at' => NULL,
                'id' => 871,
                'name' => 'Silvan',
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'county_id' => 307,
                'created_at' => NULL,
                'id' => 872,
                'name' => 'Balıkçılarbaşı',
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'county_id' => 307,
                'created_at' => NULL,
                'id' => 873,
                'name' => 'Suriçi',
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'county_id' => 308,
                'created_at' => NULL,
                'id' => 874,
                'name' => 'Cumhuriyet',
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'county_id' => 308,
                'created_at' => NULL,
                'id' => 875,
                'name' => 'Şehitlik',
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'county_id' => 308,
                'created_at' => NULL,
                'id' => 876,
                'name' => 'Yenişehir',
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'county_id' => 309,
                'created_at' => NULL,
                'id' => 877,
                'name' => 'Akçakoca',
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'county_id' => 309,
                'created_at' => NULL,
                'id' => 878,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'county_id' => 310,
                'created_at' => NULL,
                'id' => 879,
                'name' => 'Cumayeri',
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'county_id' => 310,
                'created_at' => NULL,
                'id' => 880,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'county_id' => 311,
                'created_at' => NULL,
                'id' => 881,
                'name' => 'Çilimli',
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'county_id' => 311,
                'created_at' => NULL,
                'id' => 882,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'county_id' => 312,
                'created_at' => NULL,
                'id' => 883,
                'name' => 'Gölyaka',
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'county_id' => 312,
                'created_at' => NULL,
                'id' => 884,
                'name' => 'Merkez Köyler',
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'county_id' => 313,
                'created_at' => NULL,
                'id' => 885,
                'name' => 'Gümüşova',
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'county_id' => 313,
                'created_at' => NULL,
                'id' => 886,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'county_id' => 314,
                'created_at' => NULL,
                'id' => 887,
                'name' => 'Kaynaşlı',
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'county_id' => 314,
                'created_at' => NULL,
                'id' => 888,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'county_id' => 315,
                'created_at' => NULL,
                'id' => 889,
                'name' => 'Bahçeşehir',
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'county_id' => 315,
                'created_at' => NULL,
                'id' => 890,
                'name' => 'Beyköy',
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'county_id' => 315,
                'created_at' => NULL,
                'id' => 891,
                'name' => 'Boğaziçi',
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'county_id' => 315,
                'created_at' => NULL,
                'id' => 892,
                'name' => 'Cedidiye',
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'county_id' => 315,
                'created_at' => NULL,
                'id' => 893,
                'name' => 'Çay',
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'county_id' => 315,
                'created_at' => NULL,
                'id' => 894,
                'name' => 'Hamidiye',
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'county_id' => 315,
                'created_at' => NULL,
                'id' => 895,
                'name' => 'Koçyazı',
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'county_id' => 315,
                'created_at' => NULL,
                'id' => 896,
                'name' => 'Konuralp',
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'county_id' => 315,
                'created_at' => NULL,
                'id' => 897,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'county_id' => 316,
                'created_at' => NULL,
                'id' => 898,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'county_id' => 316,
                'created_at' => NULL,
                'id' => 899,
                'name' => 'Yığılca',
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'county_id' => 317,
                'created_at' => NULL,
                'id' => 900,
                'name' => 'Enez',
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'county_id' => 317,
                'created_at' => NULL,
                'id' => 901,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'county_id' => 318,
                'created_at' => NULL,
                'id' => 902,
                'name' => 'Hasköy',
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'county_id' => 318,
                'created_at' => NULL,
                'id' => 903,
                'name' => 'Havsa',
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'county_id' => 318,
                'created_at' => NULL,
                'id' => 904,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'county_id' => 319,
                'created_at' => NULL,
                'id' => 905,
                'name' => 'Esetçe',
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'county_id' => 319,
                'created_at' => NULL,
                'id' => 906,
                'name' => 'İpsala',
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'county_id' => 319,
                'created_at' => NULL,
                'id' => 907,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'county_id' => 319,
                'created_at' => NULL,
                'id' => 908,
                'name' => 'Yenikarpuzlu',
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'county_id' => 320,
                'created_at' => NULL,
                'id' => 909,
                'name' => 'Beğendik',
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'county_id' => 320,
                'created_at' => NULL,
                'id' => 910,
                'name' => 'Keşan',
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'county_id' => 320,
                'created_at' => NULL,
                'id' => 911,
                'name' => 'Mecidiye',
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'county_id' => 320,
                'created_at' => NULL,
                'id' => 912,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'county_id' => 320,
                'created_at' => NULL,
                'id' => 913,
                'name' => 'Yenimuhacir',
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'county_id' => 320,
                'created_at' => NULL,
                'id' => 914,
                'name' => 'Yerlisu',
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'county_id' => 321,
                'created_at' => NULL,
                'id' => 915,
                'name' => 'Lalapaşa',
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'county_id' => 321,
                'created_at' => NULL,
                'id' => 916,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'county_id' => 322,
                'created_at' => NULL,
                'id' => 917,
                'name' => 'Küplü',
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'county_id' => 322,
                'created_at' => NULL,
                'id' => 918,
                'name' => 'Meriç',
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'county_id' => 322,
                'created_at' => NULL,
                'id' => 919,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'county_id' => 322,
                'created_at' => NULL,
                'id' => 920,
                'name' => 'Subaşı',
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'county_id' => 323,
                'created_at' => NULL,
                'id' => 921,
                'name' => 'Edirne',
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'county_id' => 323,
                'created_at' => NULL,
                'id' => 922,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'county_id' => 324,
                'created_at' => NULL,
                'id' => 923,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'county_id' => 324,
                'created_at' => NULL,
                'id' => 924,
                'name' => 'Süloğlu',
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'county_id' => 325,
                'created_at' => NULL,
                'id' => 925,
                'name' => 'Aşçıoğlu',
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'county_id' => 325,
                'created_at' => NULL,
                'id' => 926,
                'name' => 'Çöpköy',
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'county_id' => 325,
                'created_at' => NULL,
                'id' => 927,
                'name' => 'Hamidiye',
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'county_id' => 325,
                'created_at' => NULL,
                'id' => 928,
                'name' => 'Kırcasalih',
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'county_id' => 325,
                'created_at' => NULL,
                'id' => 929,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'county_id' => 325,
                'created_at' => NULL,
                'id' => 930,
                'name' => 'Uzunköprü',
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'county_id' => 326,
                'created_at' => NULL,
                'id' => 931,
                'name' => 'Ağın',
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'county_id' => 326,
                'created_at' => NULL,
                'id' => 932,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'county_id' => 327,
                'created_at' => NULL,
                'id' => 933,
                'name' => 'Alacakaya',
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'county_id' => 327,
                'created_at' => NULL,
                'id' => 934,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'county_id' => 328,
                'created_at' => NULL,
                'id' => 935,
                'name' => 'Arıcak',
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'county_id' => 328,
                'created_at' => NULL,
                'id' => 936,
                'name' => 'Bükardı',
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'county_id' => 328,
                'created_at' => NULL,
                'id' => 937,
                'name' => 'Erimli',
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'county_id' => 328,
                'created_at' => NULL,
                'id' => 938,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'county_id' => 328,
                'created_at' => NULL,
                'id' => 939,
                'name' => 'Üçocak',
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'county_id' => 329,
                'created_at' => NULL,
                'id' => 940,
                'name' => 'Baskil',
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'county_id' => 329,
                'created_at' => NULL,
                'id' => 941,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'county_id' => 330,
                'created_at' => NULL,
                'id' => 942,
                'name' => 'Karakoçan',
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'county_id' => 330,
                'created_at' => NULL,
                'id' => 943,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'county_id' => 330,
                'created_at' => NULL,
                'id' => 944,
                'name' => 'Sarıcan',
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'county_id' => 331,
                'created_at' => NULL,
                'id' => 945,
                'name' => 'Keban',
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'county_id' => 331,
                'created_at' => NULL,
                'id' => 946,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'county_id' => 332,
                'created_at' => NULL,
                'id' => 947,
                'name' => 'Kovancılar',
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'county_id' => 332,
                'created_at' => NULL,
                'id' => 948,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'county_id' => 333,
                'created_at' => NULL,
                'id' => 949,
                'name' => 'Maden',
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'county_id' => 333,
                'created_at' => NULL,
                'id' => 950,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'county_id' => 334,
                'created_at' => NULL,
                'id' => 951,
                'name' => 'Abdullahpaşa',
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'county_id' => 334,
                'created_at' => NULL,
                'id' => 952,
                'name' => 'Akçakiraz',
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'county_id' => 334,
                'created_at' => NULL,
                'id' => 953,
                'name' => 'Aksaray',
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'county_id' => 334,
                'created_at' => NULL,
                'id' => 954,
                'name' => 'Doğukent',
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'county_id' => 334,
                'created_at' => NULL,
                'id' => 955,
                'name' => 'Hankendi',
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'county_id' => 334,
                'created_at' => NULL,
                'id' => 956,
                'name' => 'Harput',
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'county_id' => 334,
                'created_at' => NULL,
                'id' => 957,
                'name' => 'İzzetpaşa',
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'county_id' => 334,
                'created_at' => NULL,
                'id' => 958,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'county_id' => 334,
                'created_at' => NULL,
                'id' => 959,
                'name' => 'Mollakendi',
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'county_id' => 334,
                'created_at' => NULL,
                'id' => 960,
                'name' => 'Mustafapaşa',
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'county_id' => 334,
                'created_at' => NULL,
                'id' => 961,
                'name' => 'Nailbey',
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'county_id' => 334,
                'created_at' => NULL,
                'id' => 962,
                'name' => 'Sürsürü',
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'county_id' => 334,
                'created_at' => NULL,
                'id' => 963,
                'name' => 'Yazıkonak',
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'county_id' => 334,
                'created_at' => NULL,
                'id' => 964,
                'name' => 'Yurtbaşı',
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'county_id' => 335,
                'created_at' => NULL,
                'id' => 965,
                'name' => 'Beyhan',
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'county_id' => 335,
                'created_at' => NULL,
                'id' => 966,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'county_id' => 335,
                'created_at' => NULL,
                'id' => 967,
                'name' => 'Palu',
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'county_id' => 336,
                'created_at' => NULL,
                'id' => 968,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'county_id' => 336,
                'created_at' => NULL,
                'id' => 969,
                'name' => 'Sivrice',
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'county_id' => 337,
                'created_at' => NULL,
                'id' => 970,
                'name' => 'Çayırlı',
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'county_id' => 337,
                'created_at' => NULL,
                'id' => 971,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'county_id' => 338,
                'created_at' => NULL,
                'id' => 972,
                'name' => 'İliç',
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'county_id' => 338,
                'created_at' => NULL,
                'id' => 973,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'county_id' => 339,
                'created_at' => NULL,
                'id' => 974,
                'name' => 'Kemah',
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'county_id' => 339,
                'created_at' => NULL,
                'id' => 975,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'county_id' => 340,
                'created_at' => NULL,
                'id' => 976,
                'name' => 'Başpınar',
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'county_id' => 340,
                'created_at' => NULL,
                'id' => 977,
                'name' => 'Dutluca',
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'county_id' => 340,
                'created_at' => NULL,
                'id' => 978,
                'name' => 'Kemaliye',
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'county_id' => 340,
                'created_at' => NULL,
                'id' => 979,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'county_id' => 341,
                'created_at' => NULL,
                'id' => 980,
                'name' => 'Akşemsettin',
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'county_id' => 341,
                'created_at' => NULL,
                'id' => 981,
                'name' => 'Bahçelievler',
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'county_id' => 341,
                'created_at' => NULL,
                'id' => 982,
                'name' => 'Çağlayan',
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'county_id' => 341,
                'created_at' => NULL,
                'id' => 983,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'county_id' => 341,
                'created_at' => NULL,
                'id' => 984,
                'name' => 'Mollaköy',
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'county_id' => 342,
                'created_at' => NULL,
                'id' => 985,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'county_id' => 342,
                'created_at' => NULL,
                'id' => 986,
                'name' => 'Otlukbeli',
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'county_id' => 343,
                'created_at' => NULL,
                'id' => 987,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'county_id' => 343,
                'created_at' => NULL,
                'id' => 988,
                'name' => 'Refahiye',
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'county_id' => 344,
                'created_at' => NULL,
                'id' => 989,
                'name' => 'Çadırkaya',
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'county_id' => 344,
                'created_at' => NULL,
                'id' => 990,
                'name' => 'Kargın',
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'county_id' => 344,
                'created_at' => NULL,
                'id' => 991,
                'name' => 'Mercan',
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'county_id' => 344,
                'created_at' => NULL,
                'id' => 992,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'county_id' => 344,
                'created_at' => NULL,
                'id' => 993,
                'name' => 'Tercan',
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'county_id' => 345,
                'created_at' => NULL,
                'id' => 994,
                'name' => 'Altınbaşak',
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'county_id' => 345,
                'created_at' => NULL,
                'id' => 995,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'county_id' => 345,
                'created_at' => NULL,
                'id' => 996,
                'name' => 'Üzümlü',
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'county_id' => 346,
                'created_at' => NULL,
                'id' => 997,
                'name' => 'Aşkale',
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'county_id' => 347,
                'created_at' => NULL,
                'id' => 998,
                'name' => 'Ilıca',
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'county_id' => 348,
                'created_at' => NULL,
                'id' => 999,
                'name' => 'Çat',
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'county_id' => 349,
                'created_at' => NULL,
                'id' => 1000,
                'name' => 'Hınıs',
                'updated_at' => NULL,
            ),
        ));
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'county_id' => 350,
                'created_at' => NULL,
                'id' => 1001,
                'name' => 'Horasan',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'county_id' => 351,
                'created_at' => NULL,
                'id' => 1002,
                'name' => 'İspir',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'county_id' => 352,
                'created_at' => NULL,
                'id' => 1003,
                'name' => 'Karaçoban',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'county_id' => 353,
                'created_at' => NULL,
                'id' => 1004,
                'name' => 'Karayazı',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'county_id' => 354,
                'created_at' => NULL,
                'id' => 1005,
                'name' => 'Köprüköy',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'county_id' => 355,
                'created_at' => NULL,
                'id' => 1006,
                'name' => 'Narman',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'county_id' => 356,
                'created_at' => NULL,
                'id' => 1007,
                'name' => 'Oltu',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'county_id' => 357,
                'created_at' => NULL,
                'id' => 1008,
                'name' => 'Olur',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'county_id' => 358,
                'created_at' => NULL,
                'id' => 1009,
                'name' => 'Palandöken',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'county_id' => 358,
                'created_at' => NULL,
                'id' => 1010,
                'name' => 'Yıldızkent',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'county_id' => 359,
                'created_at' => NULL,
                'id' => 1011,
                'name' => 'Pasinler',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'county_id' => 360,
                'created_at' => NULL,
                'id' => 1012,
                'name' => 'Pazaryolu',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'county_id' => 361,
                'created_at' => NULL,
                'id' => 1013,
                'name' => 'Şenkaya',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'county_id' => 362,
                'created_at' => NULL,
                'id' => 1014,
                'name' => 'Tekman',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'county_id' => 363,
                'created_at' => NULL,
                'id' => 1015,
                'name' => 'Tortum',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'county_id' => 364,
                'created_at' => NULL,
                'id' => 1016,
                'name' => 'Uzundere',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'county_id' => 365,
                'created_at' => NULL,
                'id' => 1017,
                'name' => 'Mumcu',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'county_id' => 365,
                'created_at' => NULL,
                'id' => 1018,
                'name' => 'Terminal',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'county_id' => 365,
                'created_at' => NULL,
                'id' => 1019,
                'name' => 'Yakutiye',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'county_id' => 366,
                'created_at' => NULL,
                'id' => 1020,
                'name' => 'Alpu',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'county_id' => 367,
                'created_at' => NULL,
                'id' => 1021,
                'name' => 'Beylikova',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'county_id' => 368,
                'created_at' => NULL,
                'id' => 1022,
                'name' => 'Çifteler',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'county_id' => 369,
                'created_at' => NULL,
                'id' => 1023,
                'name' => 'Günyüzü',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'county_id' => 370,
                'created_at' => NULL,
                'id' => 1024,
                'name' => 'Han',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'county_id' => 371,
                'created_at' => NULL,
                'id' => 1025,
                'name' => 'İnönü',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'county_id' => 372,
                'created_at' => NULL,
                'id' => 1026,
                'name' => 'Mahmudiye',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'county_id' => 373,
                'created_at' => NULL,
                'id' => 1027,
                'name' => 'Mihalgazi',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'county_id' => 374,
                'created_at' => NULL,
                'id' => 1028,
                'name' => 'Dinek',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'county_id' => 375,
                'created_at' => NULL,
                'id' => 1029,
                'name' => 'Alanönü',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'county_id' => 375,
                'created_at' => NULL,
                'id' => 1030,
                'name' => 'Arifiye',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'county_id' => 375,
                'created_at' => NULL,
                'id' => 1031,
                'name' => 'Büyükdere',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'county_id' => 375,
                'created_at' => NULL,
                'id' => 1032,
                'name' => 'Emek',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'county_id' => 375,
                'created_at' => NULL,
                'id' => 1033,
                'name' => 'Gökmeydan',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'county_id' => 375,
                'created_at' => NULL,
                'id' => 1034,
                'name' => 'Huzur',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'county_id' => 375,
                'created_at' => NULL,
                'id' => 1035,
                'name' => 'Kanlıpınar',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'county_id' => 375,
                'created_at' => NULL,
                'id' => 1036,
                'name' => 'Kurtuluş',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'county_id' => 375,
                'created_at' => NULL,
                'id' => 1037,
                'name' => 'Odunpazarıköy',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'county_id' => 375,
                'created_at' => NULL,
                'id' => 1038,
                'name' => 'Orhangazi',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'county_id' => 375,
                'created_at' => NULL,
                'id' => 1039,
                'name' => 'Sultandere',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'county_id' => 375,
                'created_at' => NULL,
                'id' => 1040,
                'name' => 'Sümer',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'county_id' => 375,
                'created_at' => NULL,
                'id' => 1041,
                'name' => 'Vadişehir',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'county_id' => 375,
                'created_at' => NULL,
                'id' => 1042,
                'name' => 'Vişnelik',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'county_id' => 375,
                'created_at' => NULL,
                'id' => 1043,
                'name' => 'Yenikent',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'county_id' => 376,
                'created_at' => NULL,
                'id' => 1044,
                'name' => 'Sarıcakaya',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'county_id' => 377,
                'created_at' => NULL,
                'id' => 1045,
                'name' => 'Seyitgazi',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'county_id' => 378,
                'created_at' => NULL,
                'id' => 1046,
                'name' => 'Sivrihisar',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'county_id' => 379,
                'created_at' => NULL,
                'id' => 1047,
                'name' => 'Bahçelievler',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'county_id' => 379,
                'created_at' => NULL,
                'id' => 1048,
                'name' => 'Cumhuriye',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'county_id' => 379,
                'created_at' => NULL,
                'id' => 1049,
                'name' => 'Çamlıca',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'county_id' => 379,
                'created_at' => NULL,
                'id' => 1050,
                'name' => 'Çukurhisar',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'county_id' => 379,
                'created_at' => NULL,
                'id' => 1051,
                'name' => 'Fatih',
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'county_id' => 379,
                'created_at' => NULL,
                'id' => 1052,
                'name' => 'Fevziçakmak',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'county_id' => 379,
                'created_at' => NULL,
                'id' => 1053,
                'name' => 'Hacıalibey',
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'county_id' => 379,
                'created_at' => NULL,
                'id' => 1054,
                'name' => 'Muttalip',
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'county_id' => 379,
                'created_at' => NULL,
                'id' => 1055,
                'name' => 'Sazova',
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'county_id' => 379,
                'created_at' => NULL,
                'id' => 1056,
                'name' => 'Tepebaşıköy',
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'county_id' => 379,
                'created_at' => NULL,
                'id' => 1057,
                'name' => 'Uluönder',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'county_id' => 379,
                'created_at' => NULL,
                'id' => 1058,
                'name' => 'Yeşiltepe',
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'county_id' => 380,
                'created_at' => NULL,
                'id' => 1059,
                'name' => 'Araban',
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'county_id' => 381,
                'created_at' => NULL,
                'id' => 1060,
                'name' => 'İslahiye',
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'county_id' => 382,
                'created_at' => NULL,
                'id' => 1061,
                'name' => 'Karkamış',
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'county_id' => 383,
                'created_at' => NULL,
                'id' => 1062,
                'name' => 'Nizip',
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'county_id' => 384,
                'created_at' => NULL,
                'id' => 1063,
                'name' => 'Nurdağı',
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'county_id' => 385,
                'created_at' => NULL,
                'id' => 1064,
                'name' => 'Oğuzeli',
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'county_id' => 385,
                'created_at' => NULL,
                'id' => 1065,
                'name' => 'Yeşildere',
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'county_id' => 386,
                'created_at' => NULL,
                'id' => 1066,
                'name' => 'Alaybey',
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'county_id' => 386,
                'created_at' => NULL,
                'id' => 1067,
                'name' => 'Düztepe',
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'county_id' => 386,
                'created_at' => NULL,
                'id' => 1068,
                'name' => 'Hoşgör',
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'county_id' => 386,
                'created_at' => NULL,
                'id' => 1069,
                'name' => 'Karataş',
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'county_id' => 386,
                'created_at' => NULL,
                'id' => 1070,
                'name' => 'Konak',
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'county_id' => 386,
                'created_at' => NULL,
                'id' => 1071,
                'name' => 'Perilikaya',
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'county_id' => 386,
                'created_at' => NULL,
                'id' => 1072,
                'name' => 'Şahinbey',
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'county_id' => 386,
                'created_at' => NULL,
                'id' => 1073,
                'name' => 'Tabakhane',
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'county_id' => 387,
                'created_at' => NULL,
                'id' => 1074,
                'name' => 'Çıksorut',
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'county_id' => 387,
                'created_at' => NULL,
                'id' => 1075,
                'name' => 'Emek',
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'county_id' => 387,
                'created_at' => NULL,
                'id' => 1076,
                'name' => 'Gazikent',
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'county_id' => 387,
                'created_at' => NULL,
                'id' => 1077,
                'name' => 'İbrahimli',
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'county_id' => 387,
                'created_at' => NULL,
                'id' => 1078,
                'name' => 'İncilipınar',
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'county_id' => 387,
                'created_at' => NULL,
                'id' => 1079,
                'name' => 'Karşıyaka',
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'county_id' => 387,
                'created_at' => NULL,
                'id' => 1080,
                'name' => 'Küsget',
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'county_id' => 387,
                'created_at' => NULL,
                'id' => 1081,
                'name' => 'Merve',
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'county_id' => 387,
                'created_at' => NULL,
                'id' => 1082,
                'name' => 'Organize',
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'county_id' => 387,
                'created_at' => NULL,
                'id' => 1083,
                'name' => 'Şehitkamil',
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'county_id' => 388,
                'created_at' => NULL,
                'id' => 1084,
                'name' => 'Yavuzeli',
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'county_id' => 389,
                'created_at' => NULL,
                'id' => 1085,
                'name' => 'Alucra',
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'county_id' => 389,
                'created_at' => NULL,
                'id' => 1086,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'county_id' => 390,
                'created_at' => NULL,
                'id' => 1087,
                'name' => 'Aydındere',
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'county_id' => 390,
                'created_at' => NULL,
                'id' => 1088,
                'name' => 'Bulancak',
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'county_id' => 390,
                'created_at' => NULL,
                'id' => 1089,
                'name' => 'Kovanlık',
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'county_id' => 390,
                'created_at' => NULL,
                'id' => 1090,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'county_id' => 391,
                'created_at' => NULL,
                'id' => 1091,
                'name' => 'Çamoluk',
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'county_id' => 391,
                'created_at' => NULL,
                'id' => 1092,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'county_id' => 392,
                'created_at' => NULL,
                'id' => 1093,
                'name' => 'Çanakçı',
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'county_id' => 393,
                'created_at' => NULL,
                'id' => 1094,
                'name' => 'Dereli',
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'county_id' => 393,
                'created_at' => NULL,
                'id' => 1095,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'county_id' => 393,
                'created_at' => NULL,
                'id' => 1096,
                'name' => 'Yavuzkemal',
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'county_id' => 394,
                'created_at' => NULL,
                'id' => 1097,
                'name' => 'Doğankent',
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'county_id' => 394,
                'created_at' => NULL,
                'id' => 1098,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'county_id' => 395,
                'created_at' => NULL,
                'id' => 1099,
                'name' => 'Espiye',
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'county_id' => 395,
                'created_at' => NULL,
                'id' => 1100,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'county_id' => 395,
                'created_at' => NULL,
                'id' => 1101,
                'name' => 'Soğukpınar',
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'county_id' => 396,
                'created_at' => NULL,
                'id' => 1102,
                'name' => 'Eynesil',
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'county_id' => 396,
                'created_at' => NULL,
                'id' => 1103,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'county_id' => 396,
                'created_at' => NULL,
                'id' => 1104,
                'name' => 'Ören',
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'county_id' => 397,
                'created_at' => NULL,
                'id' => 1105,
                'name' => 'Çavuşlu',
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'county_id' => 397,
                'created_at' => NULL,
                'id' => 1106,
                'name' => 'Görele',
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'county_id' => 397,
                'created_at' => NULL,
                'id' => 1107,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'county_id' => 398,
                'created_at' => NULL,
                'id' => 1108,
                'name' => 'Güce',
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'county_id' => 398,
                'created_at' => NULL,
                'id' => 1109,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'county_id' => 399,
                'created_at' => NULL,
                'id' => 1110,
                'name' => 'Keşap',
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'county_id' => 399,
                'created_at' => NULL,
                'id' => 1111,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'county_id' => 400,
                'created_at' => NULL,
                'id' => 1112,
                'name' => 'Aksu',
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'county_id' => 400,
                'created_at' => NULL,
                'id' => 1113,
                'name' => 'Batlama',
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'county_id' => 400,
                'created_at' => NULL,
                'id' => 1114,
                'name' => 'Duroğlu',
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'county_id' => 400,
                'created_at' => NULL,
                'id' => 1115,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'county_id' => 401,
                'created_at' => NULL,
                'id' => 1116,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'county_id' => 401,
                'created_at' => NULL,
                'id' => 1117,
                'name' => 'Piraziz',
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'county_id' => 402,
                'created_at' => NULL,
                'id' => 1118,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'county_id' => 402,
                'created_at' => NULL,
                'id' => 1119,
                'name' => 'Şebinkarahisar',
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'county_id' => 403,
                'created_at' => NULL,
                'id' => 1120,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'county_id' => 403,
                'created_at' => NULL,
                'id' => 1121,
                'name' => 'Tirebolu',
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'county_id' => 404,
                'created_at' => NULL,
                'id' => 1122,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'county_id' => 404,
                'created_at' => NULL,
                'id' => 1123,
                'name' => 'Üçtepe',
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'county_id' => 404,
                'created_at' => NULL,
                'id' => 1124,
                'name' => 'Yağlıdere',
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'county_id' => 405,
                'created_at' => NULL,
                'id' => 1125,
                'name' => 'Deredolu',
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'county_id' => 405,
                'created_at' => NULL,
                'id' => 1126,
                'name' => 'Gümüşgöze',
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'county_id' => 405,
                'created_at' => NULL,
                'id' => 1127,
                'name' => 'Kelkit',
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'county_id' => 405,
                'created_at' => NULL,
                'id' => 1128,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'county_id' => 405,
                'created_at' => NULL,
                'id' => 1129,
                'name' => 'Öbektaş',
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'county_id' => 405,
                'created_at' => NULL,
                'id' => 1130,
                'name' => 'Söğütlü',
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'county_id' => 405,
                'created_at' => NULL,
                'id' => 1131,
                'name' => 'Ünlüpınar',
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'county_id' => 406,
                'created_at' => NULL,
                'id' => 1132,
                'name' => 'Köse',
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'county_id' => 406,
                'created_at' => NULL,
                'id' => 1133,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'county_id' => 407,
                'created_at' => NULL,
                'id' => 1134,
                'name' => 'Kürtün',
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'county_id' => 407,
                'created_at' => NULL,
                'id' => 1135,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'county_id' => 407,
                'created_at' => NULL,
                'id' => 1136,
                'name' => 'Özkürtün',
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'county_id' => 408,
                'created_at' => NULL,
                'id' => 1137,
                'name' => 'Arzularkabaköy',
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'county_id' => 408,
                'created_at' => NULL,
                'id' => 1138,
                'name' => 'Gümüşhane',
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'county_id' => 408,
                'created_at' => NULL,
                'id' => 1139,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'county_id' => 409,
                'created_at' => NULL,
                'id' => 1140,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'county_id' => 409,
                'created_at' => NULL,
                'id' => 1141,
                'name' => 'Şiran',
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'county_id' => 409,
                'created_at' => NULL,
                'id' => 1142,
                'name' => 'Yeşilbük',
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'county_id' => 410,
                'created_at' => NULL,
                'id' => 1143,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'county_id' => 410,
                'created_at' => NULL,
                'id' => 1144,
                'name' => 'Torul',
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'county_id' => 411,
                'created_at' => NULL,
                'id' => 1145,
                'name' => 'Çığlı',
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'county_id' => 411,
                'created_at' => NULL,
                'id' => 1146,
                'name' => 'Çukurca',
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'county_id' => 411,
                'created_at' => NULL,
                'id' => 1147,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'county_id' => 412,
                'created_at' => NULL,
                'id' => 1148,
                'name' => 'Derecik',
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'county_id' => 412,
                'created_at' => NULL,
                'id' => 1149,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'county_id' => 413,
                'created_at' => NULL,
                'id' => 1150,
                'name' => 'Durankaya',
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'county_id' => 413,
                'created_at' => NULL,
                'id' => 1151,
                'name' => 'Hakkari',
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'county_id' => 413,
                'created_at' => NULL,
                'id' => 1152,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'county_id' => 414,
                'created_at' => NULL,
                'id' => 1153,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'county_id' => 414,
                'created_at' => NULL,
                'id' => 1154,
                'name' => 'Şemdinli',
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'county_id' => 415,
                'created_at' => NULL,
                'id' => 1155,
                'name' => 'Büyükçiftlik',
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'county_id' => 415,
                'created_at' => NULL,
                'id' => 1156,
                'name' => 'Esendere',
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'county_id' => 415,
                'created_at' => NULL,
                'id' => 1157,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'county_id' => 415,
                'created_at' => NULL,
                'id' => 1158,
                'name' => 'Yüksekova',
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'county_id' => 416,
                'created_at' => NULL,
                'id' => 1159,
                'name' => 'Altınözü',
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'county_id' => 417,
                'created_at' => NULL,
                'id' => 1160,
                'name' => 'Esentepe',
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'county_id' => 417,
                'created_at' => NULL,
                'id' => 1161,
                'name' => 'Haraparası',
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'county_id' => 417,
                'created_at' => NULL,
                'id' => 1162,
                'name' => 'Kanatlı',
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'county_id' => 417,
                'created_at' => NULL,
                'id' => 1163,
                'name' => 'Kışlasaray',
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'county_id' => 418,
                'created_at' => NULL,
                'id' => 1164,
                'name' => 'Arsuz',
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'county_id' => 418,
                'created_at' => NULL,
                'id' => 1165,
                'name' => 'Karaağaç',
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'county_id' => 419,
                'created_at' => NULL,
                'id' => 1166,
                'name' => 'Belen',
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'county_id' => 420,
                'created_at' => NULL,
                'id' => 1167,
                'name' => 'Defne',
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'county_id' => 421,
                'created_at' => NULL,
                'id' => 1168,
                'name' => 'Dörtyol',
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'county_id' => 422,
                'created_at' => NULL,
                'id' => 1169,
                'name' => 'Erzin',
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'county_id' => 423,
                'created_at' => NULL,
                'id' => 1170,
                'name' => 'Hassa',
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'county_id' => 424,
                'created_at' => NULL,
                'id' => 1171,
                'name' => 'Azganlık',
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'county_id' => 424,
                'created_at' => NULL,
                'id' => 1172,
                'name' => 'Cumhuriyet',
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'county_id' => 424,
                'created_at' => NULL,
                'id' => 1173,
                'name' => 'Meydan',
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'county_id' => 424,
                'created_at' => NULL,
                'id' => 1174,
                'name' => 'Sanayi',
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'county_id' => 424,
                'created_at' => NULL,
                'id' => 1175,
                'name' => 'Tepeler',
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'county_id' => 425,
                'created_at' => NULL,
                'id' => 1176,
                'name' => 'Kırıkhan',
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'county_id' => 426,
                'created_at' => NULL,
                'id' => 1177,
                'name' => 'Kumlu',
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'county_id' => 427,
                'created_at' => NULL,
                'id' => 1178,
                'name' => 'Payas',
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'county_id' => 428,
                'created_at' => NULL,
                'id' => 1179,
                'name' => 'Reyhanlı',
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'county_id' => 429,
                'created_at' => NULL,
                'id' => 1180,
                'name' => 'Samandağ',
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'county_id' => 430,
                'created_at' => NULL,
                'id' => 1181,
                'name' => 'Yayladağı',
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'county_id' => 431,
                'created_at' => NULL,
                'id' => 1182,
                'name' => 'Aralık',
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'county_id' => 431,
                'created_at' => NULL,
                'id' => 1183,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'county_id' => 432,
                'created_at' => NULL,
                'id' => 1184,
                'name' => 'Karakoyunlu',
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'county_id' => 432,
                'created_at' => NULL,
                'id' => 1185,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'county_id' => 433,
                'created_at' => NULL,
                'id' => 1186,
                'name' => 'Halfeli',
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'county_id' => 433,
                'created_at' => NULL,
                'id' => 1187,
                'name' => 'Hoşhaber',
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'county_id' => 433,
                'created_at' => NULL,
                'id' => 1188,
                'name' => 'Iğdır',
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'county_id' => 433,
                'created_at' => NULL,
                'id' => 1189,
                'name' => 'Melekli',
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'county_id' => 433,
                'created_at' => NULL,
                'id' => 1190,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'county_id' => 434,
                'created_at' => NULL,
                'id' => 1191,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'county_id' => 434,
                'created_at' => NULL,
                'id' => 1192,
                'name' => 'Tuzluca',
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'county_id' => 435,
                'created_at' => NULL,
                'id' => 1193,
                'name' => 'Aksu',
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'county_id' => 435,
                'created_at' => NULL,
                'id' => 1194,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'county_id' => 436,
                'created_at' => NULL,
                'id' => 1195,
                'name' => 'Atabey',
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'county_id' => 436,
                'created_at' => NULL,
                'id' => 1196,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'county_id' => 437,
                'created_at' => NULL,
                'id' => 1197,
                'name' => 'Eğirdir',
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'county_id' => 437,
                'created_at' => NULL,
                'id' => 1198,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'county_id' => 437,
                'created_at' => NULL,
                'id' => 1199,
                'name' => 'Sarıidris',
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'county_id' => 438,
                'created_at' => NULL,
                'id' => 1200,
                'name' => 'Gelendost',
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'county_id' => 438,
                'created_at' => NULL,
                'id' => 1201,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'county_id' => 439,
                'created_at' => NULL,
                'id' => 1202,
                'name' => 'Gönen',
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'county_id' => 439,
                'created_at' => NULL,
                'id' => 1203,
                'name' => 'Güneykent',
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'county_id' => 439,
                'created_at' => NULL,
                'id' => 1204,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'county_id' => 440,
                'created_at' => NULL,
                'id' => 1205,
                'name' => 'Keçiborlu',
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'county_id' => 440,
                'created_at' => NULL,
                'id' => 1206,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'county_id' => 440,
                'created_at' => NULL,
                'id' => 1207,
                'name' => 'Senir',
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'county_id' => 441,
                'created_at' => NULL,
                'id' => 1208,
                'name' => 'Çelebiler',
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'county_id' => 441,
                'created_at' => NULL,
                'id' => 1209,
                'name' => 'Kepeci',
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'county_id' => 441,
                'created_at' => NULL,
                'id' => 1210,
                'name' => 'Kuleönü',
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'county_id' => 441,
                'created_at' => NULL,
                'id' => 1211,
                'name' => 'Kutlubey',
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'county_id' => 441,
                'created_at' => NULL,
                'id' => 1212,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'county_id' => 441,
                'created_at' => NULL,
                'id' => 1213,
                'name' => 'Sanayi',
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'county_id' => 441,
                'created_at' => NULL,
                'id' => 1214,
                'name' => 'Sav',
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'county_id' => 442,
                'created_at' => NULL,
                'id' => 1215,
                'name' => 'Büyükkabaca',
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'county_id' => 442,
                'created_at' => NULL,
                'id' => 1216,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'county_id' => 442,
                'created_at' => NULL,
                'id' => 1217,
                'name' => 'Senirkent',
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'county_id' => 443,
                'created_at' => NULL,
                'id' => 1218,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'county_id' => 443,
                'created_at' => NULL,
                'id' => 1219,
                'name' => 'Sütçüler',
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'county_id' => 444,
                'created_at' => NULL,
                'id' => 1220,
                'name' => 'Çarıksaraylar',
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'county_id' => 444,
                'created_at' => NULL,
                'id' => 1221,
                'name' => 'Çiçekpınar',
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'county_id' => 444,
                'created_at' => NULL,
                'id' => 1222,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'county_id' => 444,
                'created_at' => NULL,
                'id' => 1223,
                'name' => 'Şarkikaraağaç',
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'county_id' => 445,
                'created_at' => NULL,
                'id' => 1224,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'county_id' => 445,
                'created_at' => NULL,
                'id' => 1225,
                'name' => 'Uluborlu',
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'county_id' => 446,
                'created_at' => NULL,
                'id' => 1226,
                'name' => 'Hüyüklü',
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'county_id' => 446,
                'created_at' => NULL,
                'id' => 1227,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'county_id' => 446,
                'created_at' => NULL,
                'id' => 1228,
                'name' => 'Yalvaç',
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'county_id' => 447,
                'created_at' => NULL,
                'id' => 1229,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'county_id' => 447,
                'created_at' => NULL,
                'id' => 1230,
                'name' => 'Yenişarbademli',
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'county_id' => 448,
                'created_at' => NULL,
                'id' => 1231,
                'name' => 'Burgazada',
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'county_id' => 448,
                'created_at' => NULL,
                'id' => 1232,
                'name' => 'Büyükada',
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'county_id' => 448,
                'created_at' => NULL,
                'id' => 1233,
                'name' => 'Heybeliada',
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'county_id' => 448,
                'created_at' => NULL,
                'id' => 1234,
                'name' => 'Kınalıada',
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'county_id' => 449,
                'created_at' => NULL,
                'id' => 1235,
                'name' => 'Arnavutköy',
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'county_id' => 449,
                'created_at' => NULL,
                'id' => 1236,
                'name' => 'Baklalı',
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'county_id' => 449,
                'created_at' => NULL,
                'id' => 1237,
                'name' => 'Boğazköy',
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'county_id' => 449,
                'created_at' => NULL,
                'id' => 1238,
                'name' => 'Bolluca',
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'county_id' => 449,
                'created_at' => NULL,
                'id' => 1239,
                'name' => 'Hadımköy',
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'county_id' => 449,
                'created_at' => NULL,
                'id' => 1240,
                'name' => 'Haraççı',
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'county_id' => 449,
                'created_at' => NULL,
                'id' => 1241,
                'name' => 'Taşoluk',
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'county_id' => 450,
                'created_at' => NULL,
                'id' => 1242,
                'name' => 'Atatürk',
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'county_id' => 450,
                'created_at' => NULL,
                'id' => 1243,
                'name' => 'Ferhatpaşa',
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'county_id' => 450,
                'created_at' => NULL,
                'id' => 1244,
                'name' => 'İçerenköy',
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'county_id' => 450,
                'created_at' => NULL,
                'id' => 1245,
                'name' => 'Kayışdağı',
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'county_id' => 450,
                'created_at' => NULL,
                'id' => 1246,
                'name' => 'Küçükbakkalköy',
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'county_id' => 450,
                'created_at' => NULL,
                'id' => 1247,
                'name' => 'Mustafakemal',
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'county_id' => 450,
                'created_at' => NULL,
                'id' => 1248,
                'name' => 'Örnek',
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'county_id' => 450,
                'created_at' => NULL,
                'id' => 1249,
                'name' => 'Yeniçamlıca',
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'county_id' => 450,
                'created_at' => NULL,
                'id' => 1250,
                'name' => 'Yenisahra',
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'county_id' => 451,
                'created_at' => NULL,
                'id' => 1251,
                'name' => 'Ambarlı',
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'county_id' => 451,
                'created_at' => NULL,
                'id' => 1252,
                'name' => 'Avcılar',
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'county_id' => 451,
                'created_at' => NULL,
                'id' => 1253,
                'name' => 'Firuzköy',
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'county_id' => 451,
                'created_at' => NULL,
                'id' => 1254,
                'name' => 'Gümüşpala',
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'county_id' => 452,
                'created_at' => NULL,
                'id' => 1255,
                'name' => 'Bağcılar',
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'county_id' => 452,
                'created_at' => NULL,
                'id' => 1256,
                'name' => 'Güneşli',
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'county_id' => 452,
                'created_at' => NULL,
                'id' => 1257,
                'name' => 'Mahmutbey',
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'county_id' => 453,
                'created_at' => NULL,
                'id' => 1258,
                'name' => 'Bahçelievler',
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'county_id' => 453,
                'created_at' => NULL,
                'id' => 1259,
                'name' => 'Şirinevler',
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'county_id' => 453,
                'created_at' => NULL,
                'id' => 1260,
                'name' => 'Yenibosna',
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'county_id' => 454,
                'created_at' => NULL,
                'id' => 1261,
                'name' => 'Ataköy',
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'county_id' => 454,
                'created_at' => NULL,
                'id' => 1262,
                'name' => 'Cevizlik',
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'county_id' => 454,
                'created_at' => NULL,
                'id' => 1263,
                'name' => 'Florya',
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'county_id' => 454,
                'created_at' => NULL,
                'id' => 1264,
                'name' => 'Kartaltepe',
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'county_id' => 454,
                'created_at' => NULL,
                'id' => 1265,
                'name' => 'Osmaniye',
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'county_id' => 454,
                'created_at' => NULL,
                'id' => 1266,
                'name' => 'Yeşilköy',
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'county_id' => 454,
                'created_at' => NULL,
                'id' => 1267,
                'name' => 'Zeytinlik',
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'county_id' => 454,
                'created_at' => NULL,
                'id' => 1268,
                'name' => 'Zuhuratbaba',
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'county_id' => 455,
                'created_at' => NULL,
                'id' => 1269,
                'name' => 'Altınşehir',
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'county_id' => 455,
                'created_at' => NULL,
                'id' => 1270,
                'name' => 'Bahçeşehir',
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'county_id' => 455,
                'created_at' => NULL,
                'id' => 1271,
                'name' => 'Başakşehir',
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'county_id' => 455,
                'created_at' => NULL,
                'id' => 1272,
                'name' => 'İkitelli',
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'county_id' => 455,
                'created_at' => NULL,
                'id' => 1273,
                'name' => 'Şamlar',
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'county_id' => 456,
                'created_at' => NULL,
                'id' => 1274,
                'name' => 'Altıntepsi',
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'county_id' => 456,
                'created_at' => NULL,
                'id' => 1275,
                'name' => 'Muratpaşa',
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'county_id' => 456,
                'created_at' => NULL,
                'id' => 1276,
                'name' => 'Numunebağ',
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'county_id' => 456,
                'created_at' => NULL,
                'id' => 1277,
                'name' => 'Yıldırım',
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'county_id' => 457,
                'created_at' => NULL,
                'id' => 1278,
                'name' => 'Abbasağa',
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'county_id' => 457,
                'created_at' => NULL,
                'id' => 1279,
                'name' => 'Akatlar',
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'county_id' => 457,
                'created_at' => NULL,
                'id' => 1280,
                'name' => 'Arnavutköy',
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'county_id' => 457,
                'created_at' => NULL,
                'id' => 1281,
                'name' => 'Bebek',
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'county_id' => 457,
                'created_at' => NULL,
                'id' => 1282,
                'name' => 'Etiler',
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'county_id' => 457,
                'created_at' => NULL,
                'id' => 1283,
                'name' => 'Gayrettepe',
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'county_id' => 457,
                'created_at' => NULL,
                'id' => 1284,
                'name' => 'Levazım',
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'county_id' => 457,
                'created_at' => NULL,
                'id' => 1285,
                'name' => 'Levent',
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'county_id' => 457,
                'created_at' => NULL,
                'id' => 1286,
                'name' => 'Ortaköy',
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'county_id' => 457,
                'created_at' => NULL,
                'id' => 1287,
                'name' => 'Türkali',
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'county_id' => 458,
                'created_at' => NULL,
                'id' => 1288,
                'name' => 'Anadoluhisarı',
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'county_id' => 458,
                'created_at' => NULL,
                'id' => 1289,
                'name' => 'Beykoz',
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'county_id' => 458,
                'created_at' => NULL,
                'id' => 1290,
                'name' => 'Çavuşbaşı',
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'county_id' => 458,
                'created_at' => NULL,
                'id' => 1291,
                'name' => 'Çubuklu',
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'county_id' => 458,
                'created_at' => NULL,
                'id' => 1292,
                'name' => 'Göksu',
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'county_id' => 458,
                'created_at' => NULL,
                'id' => 1293,
                'name' => 'Paşabahçe',
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'county_id' => 458,
                'created_at' => NULL,
                'id' => 1294,
                'name' => 'Polonezköy',
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'county_id' => 458,
                'created_at' => NULL,
                'id' => 1295,
                'name' => 'Tokatköy',
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'county_id' => 459,
                'created_at' => NULL,
                'id' => 1296,
                'name' => 'Beylikdüzü',
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'county_id' => 459,
                'created_at' => NULL,
                'id' => 1297,
                'name' => 'Gürpınar',
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'county_id' => 459,
                'created_at' => NULL,
                'id' => 1298,
                'name' => 'Yakuplu',
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'county_id' => 460,
                'created_at' => NULL,
                'id' => 1299,
                'name' => 'Arapcami',
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'county_id' => 460,
                'created_at' => NULL,
                'id' => 1300,
                'name' => 'Cihangir',
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'county_id' => 460,
                'created_at' => NULL,
                'id' => 1301,
                'name' => 'Halıcıoğlu',
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'county_id' => 460,
                'created_at' => NULL,
                'id' => 1302,
                'name' => 'İstiklal',
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'county_id' => 460,
                'created_at' => NULL,
                'id' => 1303,
                'name' => 'Kasımpaşa',
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'county_id' => 460,
                'created_at' => NULL,
                'id' => 1304,
                'name' => 'Kemankeş',
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'county_id' => 460,
                'created_at' => NULL,
                'id' => 1305,
                'name' => 'Pürtelaş',
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'county_id' => 460,
                'created_at' => NULL,
                'id' => 1306,
                'name' => 'Taksim',
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'county_id' => 460,
                'created_at' => NULL,
                'id' => 1307,
                'name' => 'Tarlabaşı',
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'county_id' => 461,
                'created_at' => NULL,
                'id' => 1308,
                'name' => 'Büyükçekmece',
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'county_id' => 461,
                'created_at' => NULL,
                'id' => 1309,
                'name' => 'Celaliye',
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'county_id' => 461,
                'created_at' => NULL,
                'id' => 1310,
                'name' => 'Kumburgaz',
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'county_id' => 461,
                'created_at' => NULL,
                'id' => 1311,
                'name' => 'Mimarsinan',
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'county_id' => 461,
                'created_at' => NULL,
                'id' => 1312,
                'name' => 'Tepecik',
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'county_id' => 462,
                'created_at' => NULL,
                'id' => 1313,
                'name' => 'Çatalca',
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'county_id' => 463,
                'created_at' => NULL,
                'id' => 1314,
                'name' => 'Alemdağ',
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'county_id' => 463,
                'created_at' => NULL,
                'id' => 1315,
                'name' => 'Çekmeköy',
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'county_id' => 463,
                'created_at' => NULL,
                'id' => 1316,
                'name' => 'Ömerli',
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'county_id' => 463,
                'created_at' => NULL,
                'id' => 1317,
                'name' => 'Taşdelen',
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'county_id' => 464,
                'created_at' => NULL,
                'id' => 1318,
                'name' => 'Atışalanı',
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'county_id' => 464,
                'created_at' => NULL,
                'id' => 1319,
                'name' => 'Esenler',
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'county_id' => 464,
                'created_at' => NULL,
                'id' => 1320,
                'name' => 'Karabayır',
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'county_id' => 464,
                'created_at' => NULL,
                'id' => 1321,
                'name' => 'Sanayi',
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'county_id' => 465,
                'created_at' => NULL,
                'id' => 1322,
                'name' => 'Esenyurt',
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'county_id' => 465,
                'created_at' => NULL,
                'id' => 1323,
                'name' => 'İncirtepe',
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'county_id' => 465,
                'created_at' => NULL,
                'id' => 1324,
                'name' => 'Kıraç',
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'county_id' => 465,
                'created_at' => NULL,
                'id' => 1325,
                'name' => 'Mehterçeşme',
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'county_id' => 465,
                'created_at' => NULL,
                'id' => 1326,
                'name' => 'Saadetdere',
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'county_id' => 465,
                'created_at' => NULL,
                'id' => 1327,
                'name' => 'Sanayi',
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'county_id' => 466,
                'created_at' => NULL,
                'id' => 1328,
                'name' => 'Alibeyköy',
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'county_id' => 466,
                'created_at' => NULL,
                'id' => 1329,
                'name' => 'Çırçır',
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'county_id' => 466,
                'created_at' => NULL,
                'id' => 1330,
                'name' => 'Eyüp',
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'county_id' => 466,
                'created_at' => NULL,
                'id' => 1331,
                'name' => 'Göktürk',
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'county_id' => 466,
                'created_at' => NULL,
                'id' => 1332,
                'name' => 'Işıklar',
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'county_id' => 466,
                'created_at' => NULL,
                'id' => 1333,
                'name' => 'Kemerburgaz',
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'county_id' => 466,
                'created_at' => NULL,
                'id' => 1334,
                'name' => 'Rami',
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'county_id' => 466,
                'created_at' => NULL,
                'id' => 1335,
                'name' => 'Yeşilpınar',
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'county_id' => 467,
                'created_at' => NULL,
                'id' => 1336,
                'name' => 'Aksaray',
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'county_id' => 467,
                'created_at' => NULL,
                'id' => 1337,
                'name' => 'Balat',
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'county_id' => 467,
                'created_at' => NULL,
                'id' => 1338,
                'name' => 'Bayazıt',
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'county_id' => 467,
                'created_at' => NULL,
                'id' => 1339,
                'name' => 'Eminönü',
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'county_id' => 467,
                'created_at' => NULL,
                'id' => 1340,
                'name' => 'İskenderpaşa',
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'county_id' => 467,
                'created_at' => NULL,
                'id' => 1341,
                'name' => 'Karagümrük',
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'county_id' => 467,
                'created_at' => NULL,
                'id' => 1342,
                'name' => 'Kocamustafapaşa',
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'county_id' => 467,
                'created_at' => NULL,
                'id' => 1343,
                'name' => 'Kumkapı',
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'county_id' => 467,
                'created_at' => NULL,
                'id' => 1344,
                'name' => 'Mahmutpaşa',
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'county_id' => 467,
                'created_at' => NULL,
                'id' => 1345,
                'name' => 'Sirkeci',
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'county_id' => 467,
                'created_at' => NULL,
                'id' => 1346,
                'name' => 'Sultanahmet',
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'county_id' => 467,
                'created_at' => NULL,
                'id' => 1347,
                'name' => 'Şehremini',
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'county_id' => 467,
                'created_at' => NULL,
                'id' => 1348,
                'name' => 'Tahtakale',
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'county_id' => 467,
                'created_at' => NULL,
                'id' => 1349,
                'name' => 'Topkapı',
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'county_id' => 467,
                'created_at' => NULL,
                'id' => 1350,
                'name' => 'Vefa',
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'county_id' => 467,
                'created_at' => NULL,
                'id' => 1351,
                'name' => 'Yedikule',
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'county_id' => 467,
                'created_at' => NULL,
                'id' => 1352,
                'name' => 'Zeyrek',
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'county_id' => 468,
                'created_at' => NULL,
                'id' => 1353,
                'name' => 'Gaziosmanpaşa',
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'county_id' => 468,
                'created_at' => NULL,
                'id' => 1354,
                'name' => 'Küçükköy',
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'county_id' => 468,
                'created_at' => NULL,
                'id' => 1355,
                'name' => 'Mevlana',
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'county_id' => 468,
                'created_at' => NULL,
                'id' => 1356,
                'name' => 'Yıldıztabya',
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'county_id' => 469,
                'created_at' => NULL,
                'id' => 1357,
                'name' => 'Akıncılar',
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'county_id' => 469,
                'created_at' => NULL,
                'id' => 1358,
                'name' => 'Güngören',
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'county_id' => 469,
                'created_at' => NULL,
                'id' => 1359,
                'name' => 'Sanayi',
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'county_id' => 469,
                'created_at' => NULL,
                'id' => 1360,
                'name' => 'Tozkoparan',
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'county_id' => 470,
                'created_at' => NULL,
                'id' => 1361,
                'name' => 'Bostancı',
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'county_id' => 470,
                'created_at' => NULL,
                'id' => 1362,
                'name' => 'Caddebostan',
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'county_id' => 470,
                'created_at' => NULL,
                'id' => 1363,
                'name' => 'Caferağa',
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'county_id' => 470,
                'created_at' => NULL,
                'id' => 1364,
                'name' => 'Eğitim',
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'county_id' => 470,
                'created_at' => NULL,
                'id' => 1365,
                'name' => 'Erenköy',
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'county_id' => 470,
                'created_at' => NULL,
                'id' => 1366,
                'name' => 'Fenerbahçe',
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'county_id' => 470,
                'created_at' => NULL,
                'id' => 1367,
                'name' => 'Feneryolu',
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'county_id' => 470,
                'created_at' => NULL,
                'id' => 1368,
                'name' => 'Fikirtepe',
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'county_id' => 470,
                'created_at' => NULL,
                'id' => 1369,
                'name' => 'Göztepe',
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'county_id' => 470,
                'created_at' => NULL,
                'id' => 1370,
                'name' => 'Koşuyolu',
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'county_id' => 470,
                'created_at' => NULL,
                'id' => 1371,
                'name' => 'Kozyatağı',
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'county_id' => 470,
                'created_at' => NULL,
                'id' => 1372,
                'name' => 'Merdivenköy',
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'county_id' => 470,
                'created_at' => NULL,
                'id' => 1373,
                'name' => 'Ondokuzmayıs',
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'county_id' => 470,
                'created_at' => NULL,
                'id' => 1374,
                'name' => 'Osmanağa',
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'county_id' => 470,
                'created_at' => NULL,
                'id' => 1375,
                'name' => 'Rasimpaşa',
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'county_id' => 470,
                'created_at' => NULL,
                'id' => 1376,
                'name' => 'Sahrayıcedit',
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'county_id' => 470,
                'created_at' => NULL,
                'id' => 1377,
                'name' => 'Suadiye',
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'county_id' => 471,
                'created_at' => NULL,
                'id' => 1378,
                'name' => 'Çağlayan',
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'county_id' => 471,
                'created_at' => NULL,
                'id' => 1379,
                'name' => 'Çeliktepe',
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'county_id' => 471,
                'created_at' => NULL,
                'id' => 1380,
                'name' => 'Gültepe',
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'county_id' => 471,
                'created_at' => NULL,
                'id' => 1381,
                'name' => 'Gürsel',
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'county_id' => 471,
                'created_at' => NULL,
                'id' => 1382,
                'name' => 'Hamidiye',
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'county_id' => 471,
                'created_at' => NULL,
                'id' => 1383,
                'name' => 'Kağıthane Merkez',
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'county_id' => 471,
                'created_at' => NULL,
                'id' => 1384,
                'name' => 'Seyrantepe',
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'county_id' => 471,
                'created_at' => NULL,
                'id' => 1385,
                'name' => 'Şirintepe',
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'county_id' => 472,
                'created_at' => NULL,
                'id' => 1386,
                'name' => 'Atalar',
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'county_id' => 472,
                'created_at' => NULL,
                'id' => 1387,
                'name' => 'Esentepe',
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'county_id' => 472,
                'created_at' => NULL,
                'id' => 1388,
                'name' => 'Kartal',
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'county_id' => 472,
                'created_at' => NULL,
                'id' => 1389,
                'name' => 'Orhantepe',
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'county_id' => 472,
                'created_at' => NULL,
                'id' => 1390,
                'name' => 'Soğanlık',
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'county_id' => 472,
                'created_at' => NULL,
                'id' => 1391,
                'name' => 'Topselvi',
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'county_id' => 472,
                'created_at' => NULL,
                'id' => 1392,
                'name' => 'Uğur Mumcu',
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'county_id' => 472,
                'created_at' => NULL,
                'id' => 1393,
                'name' => 'Yakacık',
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'county_id' => 473,
                'created_at' => NULL,
                'id' => 1394,
                'name' => 'Atakent',
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'county_id' => 473,
                'created_at' => NULL,
                'id' => 1395,
                'name' => 'Halkalı',
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'county_id' => 473,
                'created_at' => NULL,
                'id' => 1396,
                'name' => 'Küçükçekmece',
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'county_id' => 473,
                'created_at' => NULL,
                'id' => 1397,
                'name' => 'Sefaköy',
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'county_id' => 474,
                'created_at' => NULL,
                'id' => 1398,
                'name' => 'Aydınevler',
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'county_id' => 474,
                'created_at' => NULL,
                'id' => 1399,
                'name' => 'Büyükbakkalköy',
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'county_id' => 474,
                'created_at' => NULL,
                'id' => 1400,
                'name' => 'Cevizli',
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'county_id' => 474,
                'created_at' => NULL,
                'id' => 1401,
                'name' => 'Feyzullah',
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'county_id' => 474,
                'created_at' => NULL,
                'id' => 1402,
                'name' => 'Gülsuyu',
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'county_id' => 474,
                'created_at' => NULL,
                'id' => 1403,
                'name' => 'İdealtepe',
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'county_id' => 474,
                'created_at' => NULL,
                'id' => 1404,
                'name' => 'Küçükyalı',
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'county_id' => 474,
                'created_at' => NULL,
                'id' => 1405,
                'name' => 'Yalı',
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'county_id' => 474,
                'created_at' => NULL,
                'id' => 1406,
                'name' => 'Zümrütevler',
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'county_id' => 475,
                'created_at' => NULL,
                'id' => 1407,
                'name' => 'Bahçelievler',
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'county_id' => 475,
                'created_at' => NULL,
                'id' => 1408,
                'name' => 'Çamçeşme',
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'county_id' => 475,
                'created_at' => NULL,
                'id' => 1409,
                'name' => 'Çarşı',
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'county_id' => 475,
                'created_at' => NULL,
                'id' => 1410,
                'name' => 'Çınardere',
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'county_id' => 475,
                'created_at' => NULL,
                'id' => 1411,
                'name' => 'Esenyalı',
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'county_id' => 475,
                'created_at' => NULL,
                'id' => 1412,
                'name' => 'Kurna',
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'county_id' => 475,
                'created_at' => NULL,
                'id' => 1413,
                'name' => 'Şeyhli',
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'county_id' => 475,
                'created_at' => NULL,
                'id' => 1414,
                'name' => 'Yayalar',
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'county_id' => 475,
                'created_at' => NULL,
                'id' => 1415,
                'name' => 'Yenişehir',
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'county_id' => 476,
                'created_at' => NULL,
                'id' => 1416,
                'name' => 'Eyüpsultan',
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'county_id' => 476,
                'created_at' => NULL,
                'id' => 1417,
                'name' => 'Osmangazi',
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'county_id' => 476,
                'created_at' => NULL,
                'id' => 1418,
                'name' => 'Sarıgazi',
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'county_id' => 476,
                'created_at' => NULL,
                'id' => 1419,
                'name' => 'Yenidoğan',
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'county_id' => 477,
                'created_at' => NULL,
                'id' => 1420,
                'name' => 'Bahçeköy',
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'county_id' => 477,
                'created_at' => NULL,
                'id' => 1421,
                'name' => 'Büyükdere',
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'county_id' => 477,
                'created_at' => NULL,
                'id' => 1422,
                'name' => 'Emirgan',
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'county_id' => 477,
                'created_at' => NULL,
                'id' => 1423,
                'name' => 'İstinye',
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'county_id' => 477,
                'created_at' => NULL,
                'id' => 1424,
                'name' => 'Maslak',
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'county_id' => 477,
                'created_at' => NULL,
                'id' => 1425,
                'name' => 'Rumelihisarı',
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'county_id' => 477,
                'created_at' => NULL,
                'id' => 1426,
                'name' => 'Sarıyer',
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'county_id' => 477,
                'created_at' => NULL,
                'id' => 1427,
                'name' => 'Tarabya',
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'county_id' => 477,
                'created_at' => NULL,
                'id' => 1428,
                'name' => 'Yeniköy',
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'county_id' => 478,
                'created_at' => NULL,
                'id' => 1429,
                'name' => 'Büyükçavuşlu',
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'county_id' => 478,
                'created_at' => NULL,
                'id' => 1430,
                'name' => 'Çanta',
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'county_id' => 478,
                'created_at' => NULL,
                'id' => 1431,
                'name' => 'Değirmenköy',
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'county_id' => 478,
                'created_at' => NULL,
                'id' => 1432,
                'name' => 'Fener',
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'county_id' => 478,
                'created_at' => NULL,
                'id' => 1433,
                'name' => 'Gümüşyaka',
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'county_id' => 478,
                'created_at' => NULL,
                'id' => 1434,
                'name' => 'Kavaklı',
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'county_id' => 478,
                'created_at' => NULL,
                'id' => 1435,
                'name' => 'Ortaköy',
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'county_id' => 478,
                'created_at' => NULL,
                'id' => 1436,
                'name' => 'Selimpaşa',
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'county_id' => 478,
                'created_at' => NULL,
                'id' => 1437,
                'name' => 'Silivri',
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'county_id' => 479,
                'created_at' => NULL,
                'id' => 1438,
                'name' => 'Mehmetakif',
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'county_id' => 479,
                'created_at' => NULL,
                'id' => 1439,
                'name' => 'Mimarsinan',
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'county_id' => 479,
                'created_at' => NULL,
                'id' => 1440,
                'name' => 'Necipfazıl',
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'county_id' => 479,
                'created_at' => NULL,
                'id' => 1441,
                'name' => 'Turgutreis',
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'county_id' => 480,
                'created_at' => NULL,
                'id' => 1442,
                'name' => 'Sultançiftliği',
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'county_id' => 480,
                'created_at' => NULL,
                'id' => 1443,
                'name' => 'Sultangazi',
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'county_id' => 480,
                'created_at' => NULL,
                'id' => 1444,
                'name' => 'Zübeydehanım',
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'county_id' => 481,
                'created_at' => NULL,
                'id' => 1445,
                'name' => 'Ağva',
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'county_id' => 481,
                'created_at' => NULL,
                'id' => 1446,
                'name' => 'Ahmetli',
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'county_id' => 481,
                'created_at' => NULL,
                'id' => 1447,
                'name' => 'Şile',
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'county_id' => 482,
                'created_at' => NULL,
                'id' => 1448,
                'name' => 'Bozkurt',
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'county_id' => 482,
                'created_at' => NULL,
                'id' => 1449,
                'name' => 'Cumhuriyet',
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'county_id' => 482,
                'created_at' => NULL,
                'id' => 1450,
                'name' => 'Duatepe',
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'county_id' => 482,
                'created_at' => NULL,
                'id' => 1451,
                'name' => 'Esentepe',
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'county_id' => 482,
                'created_at' => NULL,
                'id' => 1452,
                'name' => 'Feriköy',
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'county_id' => 482,
                'created_at' => NULL,
                'id' => 1453,
                'name' => 'Halaskargazi',
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'county_id' => 482,
                'created_at' => NULL,
                'id' => 1454,
                'name' => 'Harbiye',
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'county_id' => 482,
                'created_at' => NULL,
                'id' => 1455,
                'name' => 'Mecidiyeköy',
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'county_id' => 482,
                'created_at' => NULL,
                'id' => 1456,
                'name' => 'Meşrutiyet',
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'county_id' => 482,
                'created_at' => NULL,
                'id' => 1457,
                'name' => 'Okmeydanı',
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'county_id' => 482,
                'created_at' => NULL,
                'id' => 1458,
                'name' => 'Pangaltı',
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'county_id' => 482,
                'created_at' => NULL,
                'id' => 1459,
                'name' => 'Teşvikiye',
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'county_id' => 483,
                'created_at' => NULL,
                'id' => 1460,
                'name' => 'Akfırat',
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'county_id' => 483,
                'created_at' => NULL,
                'id' => 1461,
                'name' => 'Aydınlı',
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'county_id' => 483,
                'created_at' => NULL,
                'id' => 1462,
                'name' => 'Çarşı',
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'county_id' => 483,
                'created_at' => NULL,
                'id' => 1463,
                'name' => 'İçmeler',
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'county_id' => 483,
                'created_at' => NULL,
                'id' => 1464,
                'name' => 'Mimarsinan',
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'county_id' => 483,
                'created_at' => NULL,
                'id' => 1465,
                'name' => 'Orhanlı',
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'county_id' => 483,
                'created_at' => NULL,
                'id' => 1466,
                'name' => 'Tersaneler',
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'county_id' => 484,
                'created_at' => NULL,
                'id' => 1467,
                'name' => 'Aşağıdudullu',
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'county_id' => 484,
                'created_at' => NULL,
                'id' => 1468,
                'name' => 'Atakent',
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'county_id' => 484,
                'created_at' => NULL,
                'id' => 1469,
                'name' => 'Atatürk',
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'county_id' => 484,
                'created_at' => NULL,
                'id' => 1470,
                'name' => 'Çakmak',
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'county_id' => 484,
                'created_at' => NULL,
                'id' => 1471,
                'name' => 'Esenşehir',
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'county_id' => 484,
                'created_at' => NULL,
                'id' => 1472,
                'name' => 'Ihlamurkuyu',
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'county_id' => 484,
                'created_at' => NULL,
                'id' => 1473,
                'name' => 'İnkılap',
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'county_id' => 484,
                'created_at' => NULL,
                'id' => 1474,
                'name' => 'Kazımkarabekir',
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'county_id' => 484,
                'created_at' => NULL,
                'id' => 1475,
                'name' => 'Namıkkemal',
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'county_id' => 484,
                'created_at' => NULL,
                'id' => 1476,
                'name' => 'Yukarıdudullu',
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'county_id' => 485,
                'created_at' => NULL,
                'id' => 1477,
                'name' => 'Acıbadem',
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'county_id' => 485,
                'created_at' => NULL,
                'id' => 1478,
                'name' => 'Altunizade',
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'county_id' => 485,
                'created_at' => NULL,
                'id' => 1479,
                'name' => 'Bahçelievler',
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'county_id' => 485,
                'created_at' => NULL,
                'id' => 1480,
                'name' => 'Beylerbeyi',
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'county_id' => 485,
                'created_at' => NULL,
                'id' => 1481,
                'name' => 'Bulgurlu',
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'county_id' => 485,
                'created_at' => NULL,
                'id' => 1482,
                'name' => 'Cumhuriyet',
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'county_id' => 485,
                'created_at' => NULL,
                'id' => 1483,
                'name' => 'Çengelköy',
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'county_id' => 485,
                'created_at' => NULL,
                'id' => 1484,
                'name' => 'Ferah',
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'county_id' => 485,
                'created_at' => NULL,
                'id' => 1485,
                'name' => 'Kandilli',
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'county_id' => 485,
                'created_at' => NULL,
                'id' => 1486,
                'name' => 'Kirazlıtepe',
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'county_id' => 485,
                'created_at' => NULL,
                'id' => 1487,
                'name' => 'Kuzguncuk',
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'county_id' => 485,
                'created_at' => NULL,
                'id' => 1488,
                'name' => 'Mimarsinan',
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'county_id' => 485,
                'created_at' => NULL,
                'id' => 1489,
                'name' => 'Muratreis',
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'county_id' => 485,
                'created_at' => NULL,
                'id' => 1490,
                'name' => 'Selimiye',
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'county_id' => 485,
                'created_at' => NULL,
                'id' => 1491,
                'name' => 'Ünalan',
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'county_id' => 485,
                'created_at' => NULL,
                'id' => 1492,
                'name' => 'Yavuztürk',
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'county_id' => 486,
                'created_at' => NULL,
                'id' => 1493,
                'name' => 'Çırpıcı',
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'county_id' => 486,
                'created_at' => NULL,
                'id' => 1494,
                'name' => 'Seyitnizam',
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'county_id' => 486,
                'created_at' => NULL,
                'id' => 1495,
                'name' => 'Telsiz',
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'county_id' => 486,
                'created_at' => NULL,
                'id' => 1496,
                'name' => 'Topkapı',
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'county_id' => 487,
                'created_at' => NULL,
                'id' => 1497,
                'name' => 'Aliağa',
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'county_id' => 487,
                'created_at' => NULL,
                'id' => 1498,
                'name' => 'Helvacı',
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'county_id' => 488,
                'created_at' => NULL,
                'id' => 1499,
                'name' => 'Balçova',
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'county_id' => 489,
                'created_at' => NULL,
                'id' => 1500,
                'name' => 'Bayındır',
                'updated_at' => NULL,
            ),
        ));
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'county_id' => 489,
                'created_at' => NULL,
                'id' => 1501,
                'name' => 'Canlı',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'county_id' => 489,
                'created_at' => NULL,
                'id' => 1502,
                'name' => 'Çırpı',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'county_id' => 490,
                'created_at' => NULL,
                'id' => 1503,
                'name' => 'Alpaslan',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'county_id' => 490,
                'created_at' => NULL,
                'id' => 1504,
                'name' => 'Bayraklı',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'county_id' => 490,
                'created_at' => NULL,
                'id' => 1505,
                'name' => 'Gümüşpala',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'county_id' => 490,
                'created_at' => NULL,
                'id' => 1506,
                'name' => 'Manavkuyu',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'county_id' => 490,
                'created_at' => NULL,
                'id' => 1507,
                'name' => 'Soğukkuyu',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'county_id' => 491,
                'created_at' => NULL,
                'id' => 1508,
                'name' => 'Bergama',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'county_id' => 492,
                'created_at' => NULL,
                'id' => 1509,
                'name' => 'Beydağ',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'county_id' => 493,
                'created_at' => NULL,
                'id' => 1510,
                'name' => 'Altındağ',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'county_id' => 493,
                'created_at' => NULL,
                'id' => 1511,
                'name' => 'Atatürk',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'county_id' => 493,
                'created_at' => NULL,
                'id' => 1512,
                'name' => 'Bornova',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'county_id' => 493,
                'created_at' => NULL,
                'id' => 1513,
                'name' => 'Çamdibi',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'county_id' => 493,
                'created_at' => NULL,
                'id' => 1514,
                'name' => 'Işıkkent',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'county_id' => 493,
                'created_at' => NULL,
                'id' => 1515,
                'name' => 'Kazımdirik',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'county_id' => 493,
                'created_at' => NULL,
                'id' => 1516,
                'name' => 'Naldöken',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'county_id' => 493,
                'created_at' => NULL,
                'id' => 1517,
                'name' => 'Pınarbaşı',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'county_id' => 494,
                'created_at' => NULL,
                'id' => 1518,
                'name' => 'Buca',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'county_id' => 494,
                'created_at' => NULL,
                'id' => 1519,
                'name' => 'Evka1',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'county_id' => 494,
                'created_at' => NULL,
                'id' => 1520,
                'name' => 'İşçievleri',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'county_id' => 494,
                'created_at' => NULL,
                'id' => 1521,
                'name' => 'Kaynaklar',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'county_id' => 494,
                'created_at' => NULL,
                'id' => 1522,
                'name' => 'Şirinyer',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'county_id' => 495,
                'created_at' => NULL,
                'id' => 1523,
                'name' => 'Alaçatı',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'county_id' => 495,
                'created_at' => NULL,
                'id' => 1524,
                'name' => 'Çeşme',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'county_id' => 495,
                'created_at' => NULL,
                'id' => 1525,
                'name' => 'Dalyan',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'county_id' => 496,
                'created_at' => NULL,
                'id' => 1526,
                'name' => 'Büyükçiğli',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'county_id' => 496,
                'created_at' => NULL,
                'id' => 1527,
                'name' => 'Çiğli',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'county_id' => 496,
                'created_at' => NULL,
                'id' => 1528,
                'name' => 'Egekent',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'county_id' => 496,
                'created_at' => NULL,
                'id' => 1529,
                'name' => 'Harmandalı',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'county_id' => 497,
                'created_at' => NULL,
                'id' => 1530,
                'name' => 'Dikili',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'county_id' => 498,
                'created_at' => NULL,
                'id' => 1531,
                'name' => 'Bağarası',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'county_id' => 498,
                'created_at' => NULL,
                'id' => 1532,
                'name' => 'Foça',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'county_id' => 498,
                'created_at' => NULL,
                'id' => 1533,
                'name' => 'Yenifoça',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'county_id' => 499,
                'created_at' => NULL,
                'id' => 1534,
                'name' => 'Gaziemir',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'county_id' => 500,
                'created_at' => NULL,
                'id' => 1535,
                'name' => 'Güzelbahçe',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'county_id' => 501,
                'created_at' => NULL,
                'id' => 1536,
                'name' => 'Fahrettinaltay',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'county_id' => 501,
                'created_at' => NULL,
                'id' => 1537,
                'name' => 'Hatay',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'county_id' => 501,
                'created_at' => NULL,
                'id' => 1538,
                'name' => 'Karabağlar',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'county_id' => 501,
                'created_at' => NULL,
                'id' => 1539,
                'name' => 'Kibar',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'county_id' => 501,
                'created_at' => NULL,
                'id' => 1540,
                'name' => 'Yeşilyurt',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'county_id' => 501,
                'created_at' => NULL,
                'id' => 1541,
                'name' => 'Zincirlikuyu',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'county_id' => 502,
                'created_at' => NULL,
                'id' => 1542,
                'name' => 'Karaburun',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'county_id' => 502,
                'created_at' => NULL,
                'id' => 1543,
                'name' => 'Mordoğan',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'county_id' => 503,
                'created_at' => NULL,
                'id' => 1544,
                'name' => 'Alaybey',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'county_id' => 503,
                'created_at' => NULL,
                'id' => 1545,
                'name' => 'Cumhuriyet',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'county_id' => 503,
                'created_at' => NULL,
                'id' => 1546,
                'name' => 'Denizbostanlısı',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'county_id' => 503,
                'created_at' => NULL,
                'id' => 1547,
                'name' => 'İmbatlı',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'county_id' => 503,
                'created_at' => NULL,
                'id' => 1548,
                'name' => 'Karşıyaka',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'county_id' => 503,
                'created_at' => NULL,
                'id' => 1549,
                'name' => 'Nergiz',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'county_id' => 503,
                'created_at' => NULL,
                'id' => 1550,
                'name' => 'Yalı',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'county_id' => 504,
                'created_at' => NULL,
                'id' => 1551,
                'name' => 'Armutlu',
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'county_id' => 504,
                'created_at' => NULL,
                'id' => 1552,
                'name' => 'Bağyurdu',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'county_id' => 504,
                'created_at' => NULL,
                'id' => 1553,
                'name' => 'Kemalpaşa',
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'county_id' => 504,
                'created_at' => NULL,
                'id' => 1554,
                'name' => 'Ören',
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'county_id' => 504,
                'created_at' => NULL,
                'id' => 1555,
                'name' => 'Ulucak',
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'county_id' => 505,
                'created_at' => NULL,
                'id' => 1556,
                'name' => 'Kınık',
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'county_id' => 506,
                'created_at' => NULL,
                'id' => 1557,
                'name' => 'Kiraz',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'county_id' => 507,
                'created_at' => NULL,
                'id' => 1558,
                'name' => 'Alsancak',
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'county_id' => 507,
                'created_at' => NULL,
                'id' => 1559,
                'name' => 'Basmane',
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'county_id' => 507,
                'created_at' => NULL,
                'id' => 1560,
                'name' => 'Eşrefpaşa',
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'county_id' => 507,
                'created_at' => NULL,
                'id' => 1561,
                'name' => 'Gültepe',
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'county_id' => 507,
                'created_at' => NULL,
                'id' => 1562,
                'name' => 'Gürçeşme',
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'county_id' => 507,
                'created_at' => NULL,
                'id' => 1563,
                'name' => 'Güzelyalı',
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'county_id' => 507,
                'created_at' => NULL,
                'id' => 1564,
                'name' => 'Kahramanlar',
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'county_id' => 507,
                'created_at' => NULL,
                'id' => 1565,
                'name' => 'Kemeraltı',
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'county_id' => 507,
                'created_at' => NULL,
                'id' => 1566,
                'name' => 'Konak',
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'county_id' => 507,
                'created_at' => NULL,
                'id' => 1567,
                'name' => 'Küçükyalı',
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'county_id' => 507,
                'created_at' => NULL,
                'id' => 1568,
                'name' => 'Pasaport',
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'county_id' => 507,
                'created_at' => NULL,
                'id' => 1569,
                'name' => 'Yenişehir',
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'county_id' => 508,
                'created_at' => NULL,
                'id' => 1570,
                'name' => 'Ataköy',
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'county_id' => 508,
                'created_at' => NULL,
                'id' => 1571,
                'name' => 'Değirmendere',
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'county_id' => 508,
                'created_at' => NULL,
                'id' => 1572,
                'name' => 'Develi',
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'county_id' => 508,
                'created_at' => NULL,
                'id' => 1573,
                'name' => 'Görece',
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'county_id' => 508,
                'created_at' => NULL,
                'id' => 1574,
                'name' => 'Gümüldür',
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'county_id' => 508,
                'created_at' => NULL,
                'id' => 1575,
                'name' => 'Kısık',
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'county_id' => 508,
                'created_at' => NULL,
                'id' => 1576,
                'name' => 'Menderes',
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'county_id' => 508,
                'created_at' => NULL,
                'id' => 1577,
                'name' => 'Özdere',
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'county_id' => 508,
                'created_at' => NULL,
                'id' => 1578,
                'name' => 'Tekeli',
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'county_id' => 509,
                'created_at' => NULL,
                'id' => 1579,
                'name' => 'Menemen',
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'county_id' => 510,
                'created_at' => NULL,
                'id' => 1580,
                'name' => 'Narlıdere',
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'county_id' => 511,
                'created_at' => NULL,
                'id' => 1581,
                'name' => 'Ödemiş',
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'county_id' => 512,
                'created_at' => NULL,
                'id' => 1582,
                'name' => 'Doğanbey',
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'county_id' => 512,
                'created_at' => NULL,
                'id' => 1583,
                'name' => 'Seferihisar',
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'county_id' => 512,
                'created_at' => NULL,
                'id' => 1584,
                'name' => 'Ürkmez',
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'county_id' => 513,
                'created_at' => NULL,
                'id' => 1585,
                'name' => 'Selçuk',
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'county_id' => 514,
                'created_at' => NULL,
                'id' => 1586,
                'name' => 'Tire',
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'county_id' => 515,
                'created_at' => NULL,
                'id' => 1587,
                'name' => 'Ayrancılar',
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'county_id' => 515,
                'created_at' => NULL,
                'id' => 1588,
                'name' => 'Çaybaşı',
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'county_id' => 515,
                'created_at' => NULL,
                'id' => 1589,
                'name' => 'Pancar',
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'county_id' => 515,
                'created_at' => NULL,
                'id' => 1590,
                'name' => 'Subaşı',
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'county_id' => 515,
                'created_at' => NULL,
                'id' => 1591,
                'name' => 'Torbalı',
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'county_id' => 515,
                'created_at' => NULL,
                'id' => 1592,
                'name' => 'Yazıbaşı',
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'county_id' => 515,
                'created_at' => NULL,
                'id' => 1593,
                'name' => 'Yeniköyosb',
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'county_id' => 516,
                'created_at' => NULL,
                'id' => 1594,
                'name' => 'Bademler',
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'county_id' => 516,
                'created_at' => NULL,
                'id' => 1595,
                'name' => 'Balıklıova',
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'county_id' => 516,
                'created_at' => NULL,
                'id' => 1596,
                'name' => 'Çeşmealtı',
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'county_id' => 516,
                'created_at' => NULL,
                'id' => 1597,
                'name' => 'İskele',
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'county_id' => 516,
                'created_at' => NULL,
                'id' => 1598,
                'name' => 'İyte',
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'county_id' => 516,
                'created_at' => NULL,
                'id' => 1599,
                'name' => 'Kuşçular',
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'county_id' => 516,
                'created_at' => NULL,
                'id' => 1600,
                'name' => 'Özbek',
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'county_id' => 516,
                'created_at' => NULL,
                'id' => 1601,
                'name' => 'Urla',
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'county_id' => 516,
                'created_at' => NULL,
                'id' => 1602,
                'name' => 'Zeytinalanı',
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'county_id' => 517,
                'created_at' => NULL,
                'id' => 1603,
                'name' => 'Afşin',
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'county_id' => 518,
                'created_at' => NULL,
                'id' => 1604,
                'name' => 'Andırın',
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'county_id' => 518,
                'created_at' => NULL,
                'id' => 1605,
                'name' => 'Çokak',
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'county_id' => 519,
                'created_at' => NULL,
                'id' => 1606,
                'name' => 'Çağlayancerit',
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'county_id' => 520,
                'created_at' => NULL,
                'id' => 1607,
                'name' => 'Adliye',
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'county_id' => 520,
                'created_at' => NULL,
                'id' => 1608,
                'name' => 'Ağabeyli',
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'county_id' => 520,
                'created_at' => NULL,
                'id' => 1609,
                'name' => 'Sanayi',
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'county_id' => 520,
                'created_at' => NULL,
                'id' => 1610,
                'name' => 'Sütçüimam',
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'county_id' => 521,
                'created_at' => NULL,
                'id' => 1611,
                'name' => 'Ekinözü',
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'county_id' => 522,
                'created_at' => NULL,
                'id' => 1612,
                'name' => 'Elbistan',
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'county_id' => 523,
                'created_at' => NULL,
                'id' => 1613,
                'name' => 'Göksun',
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'county_id' => 524,
                'created_at' => NULL,
                'id' => 1614,
                'name' => 'Nurhak',
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'county_id' => 525,
                'created_at' => NULL,
                'id' => 1615,
                'name' => 'Binevler',
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'county_id' => 525,
                'created_at' => NULL,
                'id' => 1616,
                'name' => 'Hacıbayram',
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'county_id' => 525,
                'created_at' => NULL,
                'id' => 1617,
                'name' => 'Süleymanlı',
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'county_id' => 526,
                'created_at' => NULL,
                'id' => 1618,
                'name' => 'Pazarcık',
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'county_id' => 527,
                'created_at' => NULL,
                'id' => 1619,
                'name' => 'Türkoğlu',
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'county_id' => 528,
                'created_at' => NULL,
                'id' => 1620,
                'name' => 'Eflani',
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'county_id' => 528,
                'created_at' => NULL,
                'id' => 1621,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'county_id' => 529,
                'created_at' => NULL,
                'id' => 1622,
                'name' => 'Eskipazar',
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'county_id' => 529,
                'created_at' => NULL,
                'id' => 1623,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'county_id' => 530,
                'created_at' => NULL,
                'id' => 1624,
                'name' => '100.Yıl',
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'county_id' => 530,
                'created_at' => NULL,
                'id' => 1625,
                'name' => 'Bayır',
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'county_id' => 530,
                'created_at' => NULL,
                'id' => 1626,
                'name' => 'Beşbinevler',
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'county_id' => 530,
                'created_at' => NULL,
                'id' => 1627,
                'name' => 'Kayabaşı',
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'county_id' => 530,
                'created_at' => NULL,
                'id' => 1628,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'county_id' => 530,
                'created_at' => NULL,
                'id' => 1629,
                'name' => 'Yenişehir',
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'county_id' => 531,
                'created_at' => NULL,
                'id' => 1630,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'county_id' => 531,
                'created_at' => NULL,
                'id' => 1631,
                'name' => 'Ovacık',
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'county_id' => 532,
                'created_at' => NULL,
                'id' => 1632,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'county_id' => 532,
                'created_at' => NULL,
                'id' => 1633,
                'name' => 'Safranbolu',
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'county_id' => 533,
                'created_at' => NULL,
                'id' => 1634,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'county_id' => 533,
                'created_at' => NULL,
                'id' => 1635,
                'name' => 'Yenice',
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'county_id' => 533,
                'created_at' => NULL,
                'id' => 1636,
                'name' => 'Yortan',
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'county_id' => 534,
                'created_at' => NULL,
                'id' => 1637,
                'name' => 'Ayrancı',
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'county_id' => 534,
                'created_at' => NULL,
                'id' => 1638,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'county_id' => 535,
                'created_at' => NULL,
                'id' => 1639,
                'name' => 'Başyayla',
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'county_id' => 535,
                'created_at' => NULL,
                'id' => 1640,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'county_id' => 536,
                'created_at' => NULL,
                'id' => 1641,
                'name' => 'Ermenek',
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'county_id' => 536,
                'created_at' => NULL,
                'id' => 1642,
                'name' => 'Güneyyurt',
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'county_id' => 536,
                'created_at' => NULL,
                'id' => 1643,
                'name' => 'Kazancı',
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'county_id' => 536,
                'created_at' => NULL,
                'id' => 1644,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'county_id' => 537,
                'created_at' => NULL,
                'id' => 1645,
                'name' => 'Kazımkarabekir',
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'county_id' => 537,
                'created_at' => NULL,
                'id' => 1646,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'county_id' => 538,
                'created_at' => NULL,
                'id' => 1647,
                'name' => 'Akçaşehir',
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'county_id' => 538,
                'created_at' => NULL,
                'id' => 1648,
                'name' => 'Hisar',
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'county_id' => 538,
                'created_at' => NULL,
                'id' => 1649,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'county_id' => 538,
                'created_at' => NULL,
                'id' => 1650,
                'name' => 'Sudurağı',
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'county_id' => 538,
                'created_at' => NULL,
                'id' => 1651,
                'name' => 'Sümer',
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'county_id' => 539,
                'created_at' => NULL,
                'id' => 1652,
                'name' => 'Göktepe',
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'county_id' => 539,
                'created_at' => NULL,
                'id' => 1653,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'county_id' => 539,
                'created_at' => NULL,
                'id' => 1654,
                'name' => 'Sarıveliler',
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'county_id' => 540,
                'created_at' => NULL,
                'id' => 1655,
                'name' => 'Akyaka',
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'county_id' => 540,
                'created_at' => NULL,
                'id' => 1656,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'county_id' => 541,
                'created_at' => NULL,
                'id' => 1657,
                'name' => 'Arpaçay',
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'county_id' => 541,
                'created_at' => NULL,
                'id' => 1658,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'county_id' => 542,
                'created_at' => NULL,
                'id' => 1659,
                'name' => 'Dağpınar',
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'county_id' => 542,
                'created_at' => NULL,
                'id' => 1660,
                'name' => 'Digor',
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'county_id' => 542,
                'created_at' => NULL,
                'id' => 1661,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'county_id' => 543,
                'created_at' => NULL,
                'id' => 1662,
                'name' => 'Kağızman',
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'county_id' => 543,
                'created_at' => NULL,
                'id' => 1663,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'county_id' => 544,
                'created_at' => NULL,
                'id' => 1664,
                'name' => 'Kars',
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'county_id' => 544,
                'created_at' => NULL,
                'id' => 1665,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'county_id' => 545,
                'created_at' => NULL,
                'id' => 1666,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'county_id' => 545,
                'created_at' => NULL,
                'id' => 1667,
                'name' => 'Sarıkamış',
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'county_id' => 546,
                'created_at' => NULL,
                'id' => 1668,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'county_id' => 546,
                'created_at' => NULL,
                'id' => 1669,
                'name' => 'Selim',
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'county_id' => 547,
                'created_at' => NULL,
                'id' => 1670,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'county_id' => 547,
                'created_at' => NULL,
                'id' => 1671,
                'name' => 'Susuz',
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'county_id' => 548,
                'created_at' => NULL,
                'id' => 1672,
                'name' => 'Abana',
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'county_id' => 548,
                'created_at' => NULL,
                'id' => 1673,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'county_id' => 549,
                'created_at' => NULL,
                'id' => 1674,
                'name' => 'Ağlı',
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'county_id' => 549,
                'created_at' => NULL,
                'id' => 1675,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'county_id' => 550,
                'created_at' => NULL,
                'id' => 1676,
                'name' => 'Araç',
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'county_id' => 550,
                'created_at' => NULL,
                'id' => 1677,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'county_id' => 551,
                'created_at' => NULL,
                'id' => 1678,
                'name' => 'Azdavay',
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'county_id' => 551,
                'created_at' => NULL,
                'id' => 1679,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'county_id' => 552,
                'created_at' => NULL,
                'id' => 1680,
                'name' => 'Bozkurt',
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'county_id' => 552,
                'created_at' => NULL,
                'id' => 1681,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'county_id' => 553,
                'created_at' => NULL,
                'id' => 1682,
                'name' => 'Cide',
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'county_id' => 553,
                'created_at' => NULL,
                'id' => 1683,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'county_id' => 554,
                'created_at' => NULL,
                'id' => 1684,
                'name' => 'Çatalzeytin',
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'county_id' => 554,
                'created_at' => NULL,
                'id' => 1685,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'county_id' => 555,
                'created_at' => NULL,
                'id' => 1686,
                'name' => 'Daday',
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'county_id' => 555,
                'created_at' => NULL,
                'id' => 1687,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'county_id' => 556,
                'created_at' => NULL,
                'id' => 1688,
                'name' => 'Devrekani',
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'county_id' => 556,
                'created_at' => NULL,
                'id' => 1689,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'county_id' => 557,
                'created_at' => NULL,
                'id' => 1690,
                'name' => 'Doğanyurt',
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'county_id' => 557,
                'created_at' => NULL,
                'id' => 1691,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'county_id' => 558,
                'created_at' => NULL,
                'id' => 1692,
                'name' => 'Gökçeağaç',
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'county_id' => 558,
                'created_at' => NULL,
                'id' => 1693,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'county_id' => 559,
                'created_at' => NULL,
                'id' => 1694,
                'name' => 'İhsangazi',
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'county_id' => 559,
                'created_at' => NULL,
                'id' => 1695,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'county_id' => 560,
                'created_at' => NULL,
                'id' => 1696,
                'name' => 'İnebolu',
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'county_id' => 560,
                'created_at' => NULL,
                'id' => 1697,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'county_id' => 561,
                'created_at' => NULL,
                'id' => 1698,
                'name' => 'Küre',
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'county_id' => 561,
                'created_at' => NULL,
                'id' => 1699,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'county_id' => 562,
                'created_at' => NULL,
                'id' => 1700,
                'name' => 'Akmescit',
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'county_id' => 562,
                'created_at' => NULL,
                'id' => 1701,
                'name' => 'Cebrail',
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'county_id' => 562,
                'created_at' => NULL,
                'id' => 1702,
                'name' => 'Kuzeykent',
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'county_id' => 562,
                'created_at' => NULL,
                'id' => 1703,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'county_id' => 563,
                'created_at' => NULL,
                'id' => 1704,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'county_id' => 563,
                'created_at' => NULL,
                'id' => 1705,
                'name' => 'Pınarbaşı',
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'county_id' => 564,
                'created_at' => NULL,
                'id' => 1706,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'county_id' => 564,
                'created_at' => NULL,
                'id' => 1707,
                'name' => 'Seydiler',
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'county_id' => 565,
                'created_at' => NULL,
                'id' => 1708,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'county_id' => 565,
                'created_at' => NULL,
                'id' => 1709,
                'name' => 'Şenpazar',
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'county_id' => 566,
                'created_at' => NULL,
                'id' => 1710,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'county_id' => 566,
                'created_at' => NULL,
                'id' => 1711,
                'name' => 'Taşköprü',
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'county_id' => 567,
                'created_at' => NULL,
                'id' => 1712,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'county_id' => 567,
                'created_at' => NULL,
                'id' => 1713,
                'name' => 'Tosya',
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'county_id' => 568,
                'created_at' => NULL,
                'id' => 1714,
                'name' => 'Akkışla',
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'county_id' => 569,
                'created_at' => NULL,
                'id' => 1715,
                'name' => 'Bünyan',
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'county_id' => 570,
                'created_at' => NULL,
                'id' => 1716,
                'name' => 'Develi',
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'county_id' => 571,
                'created_at' => NULL,
                'id' => 1717,
                'name' => 'Felahiye',
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'county_id' => 572,
                'created_at' => NULL,
                'id' => 1718,
                'name' => 'Hacılar',
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'county_id' => 572,
                'created_at' => NULL,
                'id' => 1719,
                'name' => 'Hacılar Köyler',
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'county_id' => 573,
                'created_at' => NULL,
                'id' => 1720,
                'name' => 'İncesu',
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'county_id' => 574,
                'created_at' => NULL,
                'id' => 1721,
                'name' => 'Ankarayoluköyler',
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'county_id' => 574,
                'created_at' => NULL,
                'id' => 1722,
                'name' => 'Argıncık',
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'county_id' => 574,
                'created_at' => NULL,
                'id' => 1723,
                'name' => 'Beyazşehir',
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'county_id' => 574,
                'created_at' => NULL,
                'id' => 1724,
                'name' => 'Erkilet',
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'county_id' => 574,
                'created_at' => NULL,
                'id' => 1725,
                'name' => 'Erkilet Köyler',
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'county_id' => 574,
                'created_at' => NULL,
                'id' => 1726,
                'name' => 'Fevzi Çakmak',
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'county_id' => 574,
                'created_at' => NULL,
                'id' => 1727,
                'name' => 'Güneşli',
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'county_id' => 574,
                'created_at' => NULL,
                'id' => 1728,
                'name' => 'Kazım Karabekir',
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'county_id' => 574,
                'created_at' => NULL,
                'id' => 1729,
                'name' => 'Sanayi',
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'county_id' => 574,
                'created_at' => NULL,
                'id' => 1730,
                'name' => 'Valilik',
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'county_id' => 574,
                'created_at' => NULL,
                'id' => 1731,
                'name' => 'Yeni Mahalle',
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'county_id' => 574,
                'created_at' => NULL,
                'id' => 1732,
                'name' => 'Yenişehir',
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'county_id' => 575,
                'created_at' => NULL,
                'id' => 1733,
                'name' => 'Battalgazi',
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'county_id' => 575,
                'created_at' => NULL,
                'id' => 1734,
                'name' => 'Belsin',
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'county_id' => 575,
                'created_at' => NULL,
                'id' => 1735,
                'name' => 'Çarşı',
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'county_id' => 575,
                'created_at' => NULL,
                'id' => 1736,
                'name' => 'Gesi',
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'county_id' => 575,
                'created_at' => NULL,
                'id' => 1737,
                'name' => 'Gürpınar',
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'county_id' => 575,
                'created_at' => NULL,
                'id' => 1738,
                'name' => 'Hisarcık',
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'county_id' => 575,
                'created_at' => NULL,
                'id' => 1739,
                'name' => 'Hürriyet',
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'county_id' => 575,
                'created_at' => NULL,
                'id' => 1740,
                'name' => 'İldem',
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'county_id' => 575,
                'created_at' => NULL,
                'id' => 1741,
                'name' => 'Kazım Karabekir',
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'county_id' => 575,
                'created_at' => NULL,
                'id' => 1742,
                'name' => 'Kılıçaslan',
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'county_id' => 575,
                'created_at' => NULL,
                'id' => 1743,
                'name' => 'Mimarsinan',
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'county_id' => 576,
                'created_at' => NULL,
                'id' => 1744,
                'name' => 'Çukur',
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'county_id' => 577,
                'created_at' => NULL,
                'id' => 1745,
                'name' => 'Pınarbaşı',
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'county_id' => 578,
                'created_at' => NULL,
                'id' => 1746,
                'name' => 'Sarıoğlan',
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'county_id' => 579,
                'created_at' => NULL,
                'id' => 1747,
                'name' => 'Sarız',
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'county_id' => 580,
                'created_at' => NULL,
                'id' => 1748,
                'name' => 'Talas',
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'county_id' => 580,
                'created_at' => NULL,
                'id' => 1749,
                'name' => 'Talas Köyler',
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'county_id' => 581,
                'created_at' => NULL,
                'id' => 1750,
                'name' => 'Tomarza',
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'county_id' => 582,
                'created_at' => NULL,
                'id' => 1751,
                'name' => 'Yahyalı',
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'county_id' => 583,
                'created_at' => NULL,
                'id' => 1752,
                'name' => 'Yeşilhisar',
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'county_id' => 584,
                'created_at' => NULL,
                'id' => 1753,
                'name' => 'Bahşılı',
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'county_id' => 584,
                'created_at' => NULL,
                'id' => 1754,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'county_id' => 585,
                'created_at' => NULL,
                'id' => 1755,
                'name' => 'Balışeyh',
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'county_id' => 585,
                'created_at' => NULL,
                'id' => 1756,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'county_id' => 586,
                'created_at' => NULL,
                'id' => 1757,
                'name' => 'Çelebi',
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'county_id' => 586,
                'created_at' => NULL,
                'id' => 1758,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'county_id' => 587,
                'created_at' => NULL,
                'id' => 1759,
                'name' => 'Çerikli',
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'county_id' => 587,
                'created_at' => NULL,
                'id' => 1760,
                'name' => 'Delice',
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'county_id' => 587,
                'created_at' => NULL,
                'id' => 1761,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'county_id' => 588,
                'created_at' => NULL,
                'id' => 1762,
                'name' => 'Karakeçili',
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'county_id' => 588,
                'created_at' => NULL,
                'id' => 1763,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'county_id' => 589,
                'created_at' => NULL,
                'id' => 1764,
                'name' => 'Keskin',
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'county_id' => 589,
                'created_at' => NULL,
                'id' => 1765,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'county_id' => 590,
                'created_at' => NULL,
                'id' => 1766,
                'name' => 'Fabrikalar',
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'county_id' => 590,
                'created_at' => NULL,
                'id' => 1767,
                'name' => 'Hacılar',
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'county_id' => 590,
                'created_at' => NULL,
                'id' => 1768,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'county_id' => 590,
                'created_at' => NULL,
                'id' => 1769,
                'name' => 'Sanayi',
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'county_id' => 590,
                'created_at' => NULL,
                'id' => 1770,
                'name' => 'Tepebaşı',
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'county_id' => 590,
                'created_at' => NULL,
                'id' => 1771,
                'name' => 'Yuva',
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'county_id' => 591,
                'created_at' => NULL,
                'id' => 1772,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'county_id' => 591,
                'created_at' => NULL,
                'id' => 1773,
                'name' => 'Sulakyurt',
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'county_id' => 592,
                'created_at' => NULL,
                'id' => 1774,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'county_id' => 592,
                'created_at' => NULL,
                'id' => 1775,
                'name' => 'Yahşihan',
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'county_id' => 593,
                'created_at' => NULL,
                'id' => 1776,
                'name' => 'Alpullu',
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'county_id' => 593,
                'created_at' => NULL,
                'id' => 1777,
                'name' => 'Babaeski',
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'county_id' => 593,
                'created_at' => NULL,
                'id' => 1778,
                'name' => 'Büyükmandıra',
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'county_id' => 593,
                'created_at' => NULL,
                'id' => 1779,
                'name' => 'Karahalil',
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'county_id' => 593,
                'created_at' => NULL,
                'id' => 1780,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'county_id' => 594,
                'created_at' => NULL,
                'id' => 1781,
                'name' => 'Demirköy',
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'county_id' => 594,
                'created_at' => NULL,
                'id' => 1782,
                'name' => 'İğneada',
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'county_id' => 594,
                'created_at' => NULL,
                'id' => 1783,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'county_id' => 595,
                'created_at' => NULL,
                'id' => 1784,
                'name' => 'Kofçaz',
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'county_id' => 595,
                'created_at' => NULL,
                'id' => 1785,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'county_id' => 596,
                'created_at' => NULL,
                'id' => 1786,
                'name' => 'Ahmetbey',
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'county_id' => 596,
                'created_at' => NULL,
                'id' => 1787,
                'name' => 'Büyükkarıştıran',
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'county_id' => 596,
                'created_at' => NULL,
                'id' => 1788,
                'name' => 'Evrensekiz',
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'county_id' => 596,
                'created_at' => NULL,
                'id' => 1789,
                'name' => 'Lüleburgaz',
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'county_id' => 596,
                'created_at' => NULL,
                'id' => 1790,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'county_id' => 597,
                'created_at' => NULL,
                'id' => 1791,
                'name' => 'Dereköy',
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'county_id' => 597,
                'created_at' => NULL,
                'id' => 1792,
                'name' => 'İnece',
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'county_id' => 597,
                'created_at' => NULL,
                'id' => 1793,
                'name' => 'Kavaklı',
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'county_id' => 597,
                'created_at' => NULL,
                'id' => 1794,
                'name' => 'Kırklareli',
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'county_id' => 597,
                'created_at' => NULL,
                'id' => 1795,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'county_id' => 597,
                'created_at' => NULL,
                'id' => 1796,
                'name' => 'Üsküp',
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'county_id' => 598,
                'created_at' => NULL,
                'id' => 1797,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'county_id' => 598,
                'created_at' => NULL,
                'id' => 1798,
                'name' => 'Pehlivanköy',
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'county_id' => 599,
                'created_at' => NULL,
                'id' => 1799,
                'name' => 'Kaynarca',
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'county_id' => 599,
                'created_at' => NULL,
                'id' => 1800,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'county_id' => 599,
                'created_at' => NULL,
                'id' => 1801,
                'name' => 'Pınarhisar',
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'county_id' => 600,
                'created_at' => NULL,
                'id' => 1802,
                'name' => 'Çakıllı',
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'county_id' => 600,
                'created_at' => NULL,
                'id' => 1803,
                'name' => 'Kıyıköy',
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'county_id' => 600,
                'created_at' => NULL,
                'id' => 1804,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'county_id' => 600,
                'created_at' => NULL,
                'id' => 1805,
                'name' => 'Sergen',
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'county_id' => 600,
                'created_at' => NULL,
                'id' => 1806,
                'name' => 'Vize',
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'county_id' => 601,
                'created_at' => NULL,
                'id' => 1807,
                'name' => 'Akçakent',
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'county_id' => 601,
                'created_at' => NULL,
                'id' => 1808,
                'name' => 'Kösefakılı',
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'county_id' => 601,
                'created_at' => NULL,
                'id' => 1809,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'county_id' => 602,
                'created_at' => NULL,
                'id' => 1810,
                'name' => 'Akpınar',
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'county_id' => 602,
                'created_at' => NULL,
                'id' => 1811,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'county_id' => 603,
                'created_at' => NULL,
                'id' => 1812,
                'name' => 'Boztepe',
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'county_id' => 603,
                'created_at' => NULL,
                'id' => 1813,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'county_id' => 604,
                'created_at' => NULL,
                'id' => 1814,
                'name' => 'Çiçekdağı',
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'county_id' => 604,
                'created_at' => NULL,
                'id' => 1815,
                'name' => 'Köseli',
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'county_id' => 604,
                'created_at' => NULL,
                'id' => 1816,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'county_id' => 605,
                'created_at' => NULL,
                'id' => 1817,
                'name' => 'Kaman',
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'county_id' => 605,
                'created_at' => NULL,
                'id' => 1818,
                'name' => 'Kurancılı',
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'county_id' => 605,
                'created_at' => NULL,
                'id' => 1819,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'county_id' => 606,
                'created_at' => NULL,
                'id' => 1820,
                'name' => 'Çarşı',
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'county_id' => 606,
                'created_at' => NULL,
                'id' => 1821,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'county_id' => 606,
                'created_at' => NULL,
                'id' => 1822,
                'name' => 'Özbağ',
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'county_id' => 607,
                'created_at' => NULL,
                'id' => 1823,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'county_id' => 607,
                'created_at' => NULL,
                'id' => 1824,
                'name' => 'Mucur',
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'county_id' => 608,
                'created_at' => NULL,
                'id' => 1825,
                'name' => 'Elbeyli',
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'county_id' => 608,
                'created_at' => NULL,
                'id' => 1826,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'county_id' => 609,
                'created_at' => NULL,
                'id' => 1827,
                'name' => 'Kilis',
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'county_id' => 609,
                'created_at' => NULL,
                'id' => 1828,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'county_id' => 610,
                'created_at' => NULL,
                'id' => 1829,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'county_id' => 610,
                'created_at' => NULL,
                'id' => 1830,
                'name' => 'Musabeyli',
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'county_id' => 611,
                'created_at' => NULL,
                'id' => 1831,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'county_id' => 611,
                'created_at' => NULL,
                'id' => 1832,
                'name' => 'Polateli',
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'county_id' => 612,
                'created_at' => NULL,
                'id' => 1833,
                'name' => 'Bahçecik',
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'county_id' => 612,
                'created_at' => NULL,
                'id' => 1834,
                'name' => 'Başiskele',
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'county_id' => 612,
                'created_at' => NULL,
                'id' => 1835,
                'name' => 'Kullar',
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'county_id' => 612,
                'created_at' => NULL,
                'id' => 1836,
                'name' => 'Seymen',
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'county_id' => 612,
                'created_at' => NULL,
                'id' => 1837,
                'name' => 'Yeniköy',
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'county_id' => 612,
                'created_at' => NULL,
                'id' => 1838,
                'name' => 'Yuvacık',
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'county_id' => 613,
                'created_at' => NULL,
                'id' => 1839,
                'name' => 'Çayırova',
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'county_id' => 614,
                'created_at' => NULL,
                'id' => 1840,
                'name' => 'Darıca',
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'county_id' => 615,
                'created_at' => NULL,
                'id' => 1841,
                'name' => 'Derince',
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'county_id' => 616,
                'created_at' => NULL,
                'id' => 1842,
                'name' => 'Dilovası',
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'county_id' => 617,
                'created_at' => NULL,
                'id' => 1843,
                'name' => 'Gebze',
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'county_id' => 618,
                'created_at' => NULL,
                'id' => 1844,
                'name' => 'Değirmendere',
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'county_id' => 618,
                'created_at' => NULL,
                'id' => 1845,
                'name' => 'Gölcük',
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'county_id' => 619,
                'created_at' => NULL,
                'id' => 1846,
                'name' => 'Alikahya',
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'county_id' => 619,
                'created_at' => NULL,
                'id' => 1847,
                'name' => 'Çarşı',
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'county_id' => 619,
                'created_at' => NULL,
                'id' => 1848,
                'name' => 'Gündoğdu',
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'county_id' => 619,
                'created_at' => NULL,
                'id' => 1849,
                'name' => 'İzmit',
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'county_id' => 619,
                'created_at' => NULL,
                'id' => 1850,
                'name' => 'Sahil',
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'county_id' => 619,
                'created_at' => NULL,
                'id' => 1851,
                'name' => 'Saraybahçe',
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'county_id' => 619,
                'created_at' => NULL,
                'id' => 1852,
                'name' => 'Yenidoğan',
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'county_id' => 619,
                'created_at' => NULL,
                'id' => 1853,
                'name' => 'Yenişehir',
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'county_id' => 620,
                'created_at' => NULL,
                'id' => 1854,
                'name' => 'Kandıra',
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'county_id' => 621,
                'created_at' => NULL,
                'id' => 1855,
                'name' => 'Karamürsel',
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'county_id' => 622,
                'created_at' => NULL,
                'id' => 1856,
                'name' => 'Arslanbey',
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'county_id' => 622,
                'created_at' => NULL,
                'id' => 1857,
                'name' => 'Büyükderbent',
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'county_id' => 622,
                'created_at' => NULL,
                'id' => 1858,
                'name' => 'Köseköy',
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'county_id' => 622,
                'created_at' => NULL,
                'id' => 1859,
                'name' => 'Maşukiye',
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'county_id' => 622,
                'created_at' => NULL,
                'id' => 1860,
                'name' => 'Suadiye',
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'county_id' => 622,
                'created_at' => NULL,
                'id' => 1861,
                'name' => 'Uzunçiftlik',
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'county_id' => 622,
                'created_at' => NULL,
                'id' => 1862,
                'name' => 'Uzuntarla',
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'county_id' => 623,
                'created_at' => NULL,
                'id' => 1863,
                'name' => 'Hereke',
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'county_id' => 623,
                'created_at' => NULL,
                'id' => 1864,
                'name' => 'Körfez',
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'county_id' => 624,
                'created_at' => NULL,
                'id' => 1865,
                'name' => 'Ahırlı',
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'county_id' => 624,
                'created_at' => NULL,
                'id' => 1866,
                'name' => 'Akkise',
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'county_id' => 625,
                'created_at' => NULL,
                'id' => 1867,
                'name' => 'Akören',
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'county_id' => 626,
                'created_at' => NULL,
                'id' => 1868,
                'name' => 'Akşehir',
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'county_id' => 626,
                'created_at' => NULL,
                'id' => 1869,
                'name' => 'Kızılca',
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'county_id' => 626,
                'created_at' => NULL,
                'id' => 1870,
                'name' => 'Nasreddin',
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'county_id' => 627,
                'created_at' => NULL,
                'id' => 1871,
                'name' => 'Altınekin',
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'county_id' => 628,
                'created_at' => NULL,
                'id' => 1872,
                'name' => 'Beyşehir',
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'county_id' => 628,
                'created_at' => NULL,
                'id' => 1873,
                'name' => 'Hamidiye',
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'county_id' => 629,
                'created_at' => NULL,
                'id' => 1874,
                'name' => 'Bozkır',
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'county_id' => 630,
                'created_at' => NULL,
                'id' => 1875,
                'name' => 'Cihanbeyli',
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'county_id' => 630,
                'created_at' => NULL,
                'id' => 1876,
                'name' => 'Cumhuriyet',
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'county_id' => 630,
                'created_at' => NULL,
                'id' => 1877,
                'name' => 'Yeniceoba',
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'county_id' => 631,
                'created_at' => NULL,
                'id' => 1878,
                'name' => 'Çeltik',
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'county_id' => 632,
                'created_at' => NULL,
                'id' => 1879,
                'name' => 'Bardakçı',
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'county_id' => 632,
                'created_at' => NULL,
                'id' => 1880,
                'name' => 'Çumra',
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'county_id' => 632,
                'created_at' => NULL,
                'id' => 1881,
                'name' => 'İçeri Çumra',
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'county_id' => 633,
                'created_at' => NULL,
                'id' => 1882,
                'name' => 'Derbent',
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'county_id' => 634,
                'created_at' => NULL,
                'id' => 1883,
                'name' => 'Derebucak',
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'county_id' => 635,
                'created_at' => NULL,
                'id' => 1884,
                'name' => 'Başköy',
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'county_id' => 635,
                'created_at' => NULL,
                'id' => 1885,
                'name' => 'Doğanhisar',
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'county_id' => 635,
                'created_at' => NULL,
                'id' => 1886,
                'name' => 'Karaağa',
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'county_id' => 636,
                'created_at' => NULL,
                'id' => 1887,
                'name' => 'Emirgazi',
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'county_id' => 637,
                'created_at' => NULL,
                'id' => 1888,
                'name' => 'Ereğli',
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'county_id' => 637,
                'created_at' => NULL,
                'id' => 1889,
                'name' => 'Gülbahçe',
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'county_id' => 637,
                'created_at' => NULL,
                'id' => 1890,
                'name' => 'Sümer',
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'county_id' => 638,
                'created_at' => NULL,
                'id' => 1891,
                'name' => 'Güneysınır',
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'county_id' => 639,
                'created_at' => NULL,
                'id' => 1892,
                'name' => 'Hadim',
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'county_id' => 640,
                'created_at' => NULL,
                'id' => 1893,
                'name' => 'Halkapınar',
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'county_id' => 641,
                'created_at' => NULL,
                'id' => 1894,
                'name' => 'Hüyük',
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'county_id' => 641,
                'created_at' => NULL,
                'id' => 1895,
                'name' => 'İmrenler',
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'county_id' => 641,
                'created_at' => NULL,
                'id' => 1896,
                'name' => 'Kıreli',
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'county_id' => 642,
                'created_at' => NULL,
                'id' => 1897,
                'name' => 'Argıthanı',
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'county_id' => 642,
                'created_at' => NULL,
                'id' => 1898,
                'name' => 'Camiatik',
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'county_id' => 642,
                'created_at' => NULL,
                'id' => 1899,
                'name' => 'Çiğil',
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'county_id' => 642,
                'created_at' => NULL,
                'id' => 1900,
                'name' => 'Ilgın',
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'county_id' => 643,
                'created_at' => NULL,
                'id' => 1901,
                'name' => 'Kadınhanı',
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'county_id' => 644,
                'created_at' => NULL,
                'id' => 1902,
                'name' => 'Karapınar',
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'county_id' => 645,
                'created_at' => NULL,
                'id' => 1903,
                'name' => 'Erenler',
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'county_id' => 645,
                'created_at' => NULL,
                'id' => 1904,
                'name' => 'Fevziçakmak',
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'county_id' => 645,
                'created_at' => NULL,
                'id' => 1905,
                'name' => 'Karatay',
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'county_id' => 645,
                'created_at' => NULL,
                'id' => 1906,
                'name' => 'Mevlana',
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'county_id' => 645,
                'created_at' => NULL,
                'id' => 1907,
                'name' => 'Selimiye',
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'county_id' => 646,
                'created_at' => NULL,
                'id' => 1908,
                'name' => 'Alparslan',
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'county_id' => 646,
                'created_at' => NULL,
                'id' => 1909,
                'name' => 'Kulu',
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'county_id' => 646,
                'created_at' => NULL,
                'id' => 1910,
                'name' => 'Ömeranlı',
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'county_id' => 647,
                'created_at' => NULL,
                'id' => 1911,
                'name' => 'Alaaddin',
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'county_id' => 647,
                'created_at' => NULL,
                'id' => 1912,
                'name' => 'Gödene',
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'county_id' => 647,
                'created_at' => NULL,
                'id' => 1913,
                'name' => 'Kaşınhanı',
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'county_id' => 647,
                'created_at' => NULL,
                'id' => 1914,
                'name' => 'Lalebahçe',
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'county_id' => 647,
                'created_at' => NULL,
                'id' => 1915,
                'name' => 'Meram',
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'county_id' => 647,
                'created_at' => NULL,
                'id' => 1916,
                'name' => 'Taşcami',
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'county_id' => 647,
                'created_at' => NULL,
                'id' => 1917,
                'name' => 'Yaka',
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'county_id' => 648,
                'created_at' => NULL,
                'id' => 1918,
                'name' => 'İstasyon',
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'county_id' => 648,
                'created_at' => NULL,
                'id' => 1919,
                'name' => 'Sarayönü',
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'county_id' => 649,
                'created_at' => NULL,
                'id' => 1920,
                'name' => 'Aydınlık',
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'county_id' => 649,
                'created_at' => NULL,
                'id' => 1921,
                'name' => 'Bosna',
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'county_id' => 649,
                'created_at' => NULL,
                'id' => 1922,
                'name' => 'Büyükkayacık',
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'county_id' => 649,
                'created_at' => NULL,
                'id' => 1923,
                'name' => 'Cumhuriyet',
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'county_id' => 649,
                'created_at' => NULL,
                'id' => 1924,
                'name' => 'Fatih',
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'county_id' => 649,
                'created_at' => NULL,
                'id' => 1925,
                'name' => 'Horozluhan',
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'county_id' => 649,
                'created_at' => NULL,
                'id' => 1926,
                'name' => 'Kampüs',
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'county_id' => 649,
                'created_at' => NULL,
                'id' => 1927,
                'name' => 'Mimar Sinan',
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'county_id' => 649,
                'created_at' => NULL,
                'id' => 1928,
                'name' => 'Nalçacı',
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'county_id' => 649,
                'created_at' => NULL,
                'id' => 1929,
                'name' => 'Selçuklu',
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'county_id' => 649,
                'created_at' => NULL,
                'id' => 1930,
                'name' => 'Sille',
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'county_id' => 649,
                'created_at' => NULL,
                'id' => 1931,
                'name' => 'Tatköy',
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'county_id' => 649,
                'created_at' => NULL,
                'id' => 1932,
                'name' => 'Yazır',
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'county_id' => 650,
                'created_at' => NULL,
                'id' => 1933,
                'name' => 'Alaylar',
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'county_id' => 650,
                'created_at' => NULL,
                'id' => 1934,
                'name' => 'Seydişehir',
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'county_id' => 650,
                'created_at' => NULL,
                'id' => 1935,
                'name' => 'Seyitharun',
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'county_id' => 651,
                'created_at' => NULL,
                'id' => 1936,
                'name' => 'Taşkent',
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'county_id' => 652,
                'created_at' => NULL,
                'id' => 1937,
                'name' => 'Tuzlukçu',
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'county_id' => 653,
                'created_at' => NULL,
                'id' => 1938,
                'name' => 'Yalıhüyük',
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'county_id' => 654,
                'created_at' => NULL,
                'id' => 1939,
                'name' => 'Yunak',
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'county_id' => 655,
                'created_at' => NULL,
                'id' => 1940,
                'name' => 'Altıntaş',
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'county_id' => 655,
                'created_at' => NULL,
                'id' => 1941,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'county_id' => 656,
                'created_at' => NULL,
                'id' => 1942,
                'name' => 'Aslanapa',
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'county_id' => 656,
                'created_at' => NULL,
                'id' => 1943,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'county_id' => 657,
                'created_at' => NULL,
                'id' => 1944,
                'name' => 'Çavdarhisar',
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'county_id' => 657,
                'created_at' => NULL,
                'id' => 1945,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'county_id' => 658,
                'created_at' => NULL,
                'id' => 1946,
                'name' => 'Çukurca',
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'county_id' => 658,
                'created_at' => NULL,
                'id' => 1947,
                'name' => 'Domaniç',
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'county_id' => 658,
                'created_at' => NULL,
                'id' => 1948,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'county_id' => 659,
                'created_at' => NULL,
                'id' => 1949,
                'name' => 'Dumlupınar',
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'county_id' => 659,
                'created_at' => NULL,
                'id' => 1950,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'county_id' => 660,
                'created_at' => NULL,
                'id' => 1951,
                'name' => 'Emet',
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'county_id' => 660,
                'created_at' => NULL,
                'id' => 1952,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'county_id' => 661,
                'created_at' => NULL,
                'id' => 1953,
                'name' => 'Eskigediz',
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'county_id' => 661,
                'created_at' => NULL,
                'id' => 1954,
                'name' => 'Gediz',
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'county_id' => 661,
                'created_at' => NULL,
                'id' => 1955,
                'name' => 'Gökler',
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'county_id' => 661,
                'created_at' => NULL,
                'id' => 1956,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'county_id' => 661,
                'created_at' => NULL,
                'id' => 1957,
                'name' => 'Yenikent',
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'county_id' => 662,
                'created_at' => NULL,
                'id' => 1958,
                'name' => 'Hisarcık',
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'county_id' => 662,
                'created_at' => NULL,
                'id' => 1959,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'county_id' => 663,
                'created_at' => NULL,
                'id' => 1960,
                'name' => 'Alipaşa',
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'county_id' => 663,
                'created_at' => NULL,
                'id' => 1961,
                'name' => 'Börekçiler',
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'county_id' => 663,
                'created_at' => NULL,
                'id' => 1962,
                'name' => 'Hamidiye',
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'county_id' => 663,
                'created_at' => NULL,
                'id' => 1963,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'county_id' => 663,
                'created_at' => NULL,
                'id' => 1964,
                'name' => 'Seyitömer',
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'county_id' => 664,
                'created_at' => NULL,
                'id' => 1965,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'county_id' => 664,
                'created_at' => NULL,
                'id' => 1966,
                'name' => 'Pazarlar',
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'county_id' => 665,
                'created_at' => NULL,
                'id' => 1967,
                'name' => 'Akdağ',
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'county_id' => 665,
                'created_at' => NULL,
                'id' => 1968,
                'name' => 'Çitgöl',
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'county_id' => 665,
                'created_at' => NULL,
                'id' => 1969,
                'name' => 'Demirci',
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'county_id' => 665,
                'created_at' => NULL,
                'id' => 1970,
                'name' => 'Güney',
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'county_id' => 665,
                'created_at' => NULL,
                'id' => 1971,
                'name' => 'Kuşu',
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'county_id' => 665,
                'created_at' => NULL,
                'id' => 1972,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'county_id' => 665,
                'created_at' => NULL,
                'id' => 1973,
                'name' => 'Naşa',
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'county_id' => 665,
                'created_at' => NULL,
                'id' => 1974,
                'name' => 'Simav',
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'county_id' => 666,
                'created_at' => NULL,
                'id' => 1975,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'county_id' => 666,
                'created_at' => NULL,
                'id' => 1976,
                'name' => 'Şaphane',
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'county_id' => 667,
                'created_at' => NULL,
                'id' => 1977,
                'name' => 'Balıköy',
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'county_id' => 667,
                'created_at' => NULL,
                'id' => 1978,
                'name' => 'Kuruçay',
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'county_id' => 667,
                'created_at' => NULL,
                'id' => 1979,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'county_id' => 667,
                'created_at' => NULL,
                'id' => 1980,
                'name' => 'Tavşanlı',
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'county_id' => 667,
                'created_at' => NULL,
                'id' => 1981,
                'name' => 'Tepecik',
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'county_id' => 667,
                'created_at' => NULL,
                'id' => 1982,
                'name' => 'Tunçbilek',
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'county_id' => 668,
                'created_at' => NULL,
                'id' => 1983,
                'name' => 'Akçadağ',
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'county_id' => 669,
                'created_at' => NULL,
                'id' => 1984,
                'name' => 'Arapgir',
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'county_id' => 670,
                'created_at' => NULL,
                'id' => 1985,
                'name' => 'Arguvan',
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'county_id' => 671,
                'created_at' => NULL,
                'id' => 1986,
                'name' => 'Battalgazi',
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'county_id' => 671,
                'created_at' => NULL,
                'id' => 1987,
                'name' => 'Beydağı',
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'county_id' => 671,
                'created_at' => NULL,
                'id' => 1988,
                'name' => 'Dabakhane',
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'county_id' => 671,
                'created_at' => NULL,
                'id' => 1989,
                'name' => 'Hanımınçiftliği',
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'county_id' => 671,
                'created_at' => NULL,
                'id' => 1990,
                'name' => 'Kanalboyu',
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'county_id' => 671,
                'created_at' => NULL,
                'id' => 1991,
                'name' => 'Kapalıçarşı',
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'county_id' => 671,
                'created_at' => NULL,
                'id' => 1992,
                'name' => 'Orduzu',
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'county_id' => 671,
                'created_at' => NULL,
                'id' => 1993,
                'name' => 'Sıtmapınarı',
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'county_id' => 671,
                'created_at' => NULL,
                'id' => 1994,
                'name' => 'Taştepe',
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'county_id' => 672,
                'created_at' => NULL,
                'id' => 1995,
                'name' => 'Darende',
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'county_id' => 673,
                'created_at' => NULL,
                'id' => 1996,
                'name' => 'Doğanşehir',
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'county_id' => 674,
                'created_at' => NULL,
                'id' => 1997,
                'name' => 'Doğanyol',
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'county_id' => 675,
                'created_at' => NULL,
                'id' => 1998,
                'name' => 'Hekimhan',
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'county_id' => 676,
                'created_at' => NULL,
                'id' => 1999,
                'name' => 'Kale',
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'county_id' => 677,
                'created_at' => NULL,
                'id' => 2000,
                'name' => 'Kuluncak',
                'updated_at' => NULL,
            ),
        ));
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'county_id' => 678,
                'created_at' => NULL,
                'id' => 2001,
                'name' => 'Pötürge',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'county_id' => 679,
                'created_at' => NULL,
                'id' => 2002,
                'name' => 'Yazıhan',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'county_id' => 680,
                'created_at' => NULL,
                'id' => 2003,
                'name' => 'Bostanbaşı',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'county_id' => 680,
                'created_at' => NULL,
                'id' => 2004,
                'name' => 'Çavuşoğlu',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'county_id' => 680,
                'created_at' => NULL,
                'id' => 2005,
                'name' => 'Dilek',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'county_id' => 680,
                'created_at' => NULL,
                'id' => 2006,
                'name' => 'Gündüzbey',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'county_id' => 680,
                'created_at' => NULL,
                'id' => 2007,
                'name' => 'Karakavak',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'county_id' => 680,
                'created_at' => NULL,
                'id' => 2008,
                'name' => 'Özalper',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'county_id' => 680,
                'created_at' => NULL,
                'id' => 2009,
                'name' => 'Şahnahan',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'county_id' => 680,
                'created_at' => NULL,
                'id' => 2010,
                'name' => 'Topsöğüt',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'county_id' => 680,
                'created_at' => NULL,
                'id' => 2011,
                'name' => 'Yakınca',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'county_id' => 680,
                'created_at' => NULL,
                'id' => 2012,
                'name' => 'Yeşiltepe',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'county_id' => 680,
                'created_at' => NULL,
                'id' => 2013,
                'name' => 'Yeşilyurt',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'county_id' => 681,
                'created_at' => NULL,
                'id' => 2014,
                'name' => 'Ahmetli',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'county_id' => 681,
                'created_at' => NULL,
                'id' => 2015,
                'name' => 'Gökkaya',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'county_id' => 682,
                'created_at' => NULL,
                'id' => 2016,
                'name' => 'Akhisar',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'county_id' => 683,
                'created_at' => NULL,
                'id' => 2017,
                'name' => 'Alaşehir',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'county_id' => 683,
                'created_at' => NULL,
                'id' => 2018,
                'name' => 'Kavaklıdere',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'county_id' => 683,
                'created_at' => NULL,
                'id' => 2019,
                'name' => 'Kemaliye',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'county_id' => 683,
                'created_at' => NULL,
                'id' => 2020,
                'name' => 'Killik',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'county_id' => 683,
                'created_at' => NULL,
                'id' => 2021,
                'name' => 'Piyadeler',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'county_id' => 683,
                'created_at' => NULL,
                'id' => 2022,
                'name' => 'Uluderbent',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'county_id' => 683,
                'created_at' => NULL,
                'id' => 2023,
                'name' => 'Yeşilyurt',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'county_id' => 684,
                'created_at' => NULL,
                'id' => 2024,
                'name' => 'Demirci',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'county_id' => 684,
                'created_at' => NULL,
                'id' => 2025,
                'name' => 'Durhasan',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'county_id' => 684,
                'created_at' => NULL,
                'id' => 2026,
                'name' => 'Mahmutlar',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'county_id' => 685,
                'created_at' => NULL,
                'id' => 2027,
                'name' => 'Gölmarmara',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'county_id' => 686,
                'created_at' => NULL,
                'id' => 2028,
                'name' => 'Çiçekli',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'county_id' => 686,
                'created_at' => NULL,
                'id' => 2029,
                'name' => 'Gördes',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'county_id' => 686,
                'created_at' => NULL,
                'id' => 2030,
                'name' => 'Güneşli',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'county_id' => 686,
                'created_at' => NULL,
                'id' => 2031,
                'name' => 'Kayacık',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'county_id' => 687,
                'created_at' => NULL,
                'id' => 2032,
                'name' => 'Bakır',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'county_id' => 687,
                'created_at' => NULL,
                'id' => 2033,
                'name' => 'Gelenbe',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'county_id' => 687,
                'created_at' => NULL,
                'id' => 2034,
                'name' => 'İlyaslar',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'county_id' => 687,
                'created_at' => NULL,
                'id' => 2035,
                'name' => 'Karakurt',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'county_id' => 687,
                'created_at' => NULL,
                'id' => 2036,
                'name' => 'Kırkağaç',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'county_id' => 688,
                'created_at' => NULL,
                'id' => 2037,
                'name' => 'Köprübaşı',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'county_id' => 689,
                'created_at' => NULL,
                'id' => 2038,
                'name' => 'Kula',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'county_id' => 690,
                'created_at' => NULL,
                'id' => 2039,
                'name' => 'Adala',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'county_id' => 690,
                'created_at' => NULL,
                'id' => 2040,
                'name' => 'Durasıllı',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'county_id' => 690,
                'created_at' => NULL,
                'id' => 2041,
                'name' => 'Poyraz',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'county_id' => 690,
                'created_at' => NULL,
                'id' => 2042,
                'name' => 'Salihli',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'county_id' => 690,
                'created_at' => NULL,
                'id' => 2043,
                'name' => 'Sart',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'county_id' => 691,
                'created_at' => NULL,
                'id' => 2044,
                'name' => 'Sarıgöl',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'county_id' => 692,
                'created_at' => NULL,
                'id' => 2045,
                'name' => 'Alibeyli',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'county_id' => 692,
                'created_at' => NULL,
                'id' => 2046,
                'name' => 'Büyükbelen',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'county_id' => 692,
                'created_at' => NULL,
                'id' => 2047,
                'name' => 'Dilek',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'county_id' => 692,
                'created_at' => NULL,
                'id' => 2048,
                'name' => 'Gökçeköy',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'county_id' => 692,
                'created_at' => NULL,
                'id' => 2049,
                'name' => 'Gümülceli',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'county_id' => 692,
                'created_at' => NULL,
                'id' => 2050,
                'name' => 'Hacırahmanlı',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'county_id' => 692,
                'created_at' => NULL,
                'id' => 2051,
                'name' => 'Halitpaşa',
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'county_id' => 692,
                'created_at' => NULL,
                'id' => 2052,
                'name' => 'İshakçelebi',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'county_id' => 692,
                'created_at' => NULL,
                'id' => 2053,
                'name' => 'Koldere',
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'county_id' => 692,
                'created_at' => NULL,
                'id' => 2054,
                'name' => 'Kumkuyucak',
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'county_id' => 692,
                'created_at' => NULL,
                'id' => 2055,
                'name' => 'Mütevelli',
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'county_id' => 692,
                'created_at' => NULL,
                'id' => 2056,
                'name' => 'Nuriye',
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'county_id' => 692,
                'created_at' => NULL,
                'id' => 2057,
                'name' => 'Paşaköy',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'county_id' => 692,
                'created_at' => NULL,
                'id' => 2058,
                'name' => 'Saruhanlı',
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'county_id' => 693,
                'created_at' => NULL,
                'id' => 2059,
                'name' => 'Selendi',
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'county_id' => 694,
                'created_at' => NULL,
                'id' => 2060,
                'name' => 'Avdan',
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'county_id' => 694,
                'created_at' => NULL,
                'id' => 2061,
                'name' => 'Cenkyeri',
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'county_id' => 694,
                'created_at' => NULL,
                'id' => 2062,
                'name' => 'Soma',
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'county_id' => 694,
                'created_at' => NULL,
                'id' => 2063,
                'name' => 'Turgutalp',
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'county_id' => 694,
                'created_at' => NULL,
                'id' => 2064,
                'name' => 'Yağcılı',
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'county_id' => 695,
                'created_at' => NULL,
                'id' => 2065,
                'name' => 'Aşağıçobanisa',
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'county_id' => 695,
                'created_at' => NULL,
                'id' => 2066,
                'name' => 'Çarşı',
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'county_id' => 695,
                'created_at' => NULL,
                'id' => 2067,
                'name' => 'Hacıhaliller',
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'county_id' => 695,
                'created_at' => NULL,
                'id' => 2068,
                'name' => 'Karaağaçlı',
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'county_id' => 695,
                'created_at' => NULL,
                'id' => 2069,
                'name' => 'Karaköy',
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'county_id' => 695,
                'created_at' => NULL,
                'id' => 2070,
                'name' => 'Karaoğlanlı',
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'county_id' => 695,
                'created_at' => NULL,
                'id' => 2071,
                'name' => 'Kuzey',
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'county_id' => 695,
                'created_at' => NULL,
                'id' => 2072,
                'name' => 'Sancaklıbozköy',
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'county_id' => 695,
                'created_at' => NULL,
                'id' => 2073,
                'name' => 'Şehzadeler',
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'county_id' => 696,
                'created_at' => NULL,
                'id' => 2074,
                'name' => 'Derbent',
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'county_id' => 696,
                'created_at' => NULL,
                'id' => 2075,
                'name' => 'Turgutlu',
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'county_id' => 696,
                'created_at' => NULL,
                'id' => 2076,
                'name' => 'Urganlı',
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'county_id' => 697,
                'created_at' => NULL,
                'id' => 2077,
                'name' => '50.Yıl',
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'county_id' => 697,
                'created_at' => NULL,
                'id' => 2078,
                'name' => 'Laleli',
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'county_id' => 697,
                'created_at' => NULL,
                'id' => 2079,
                'name' => 'Muradiye',
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'county_id' => 697,
                'created_at' => NULL,
                'id' => 2080,
                'name' => 'Tevfikiye',
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'county_id' => 697,
                'created_at' => NULL,
                'id' => 2081,
                'name' => 'Üçpınar',
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'county_id' => 697,
                'created_at' => NULL,
                'id' => 2082,
                'name' => 'Yunusemre',
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'county_id' => 698,
                'created_at' => NULL,
                'id' => 2083,
                'name' => 'Gökçe',
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'county_id' => 698,
                'created_at' => NULL,
                'id' => 2084,
                'name' => 'İstasyon',
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'county_id' => 698,
                'created_at' => NULL,
                'id' => 2085,
                'name' => 'Kabala',
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'county_id' => 698,
                'created_at' => NULL,
                'id' => 2086,
                'name' => 'Nur',
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'county_id' => 698,
                'created_at' => NULL,
                'id' => 2087,
                'name' => 'Savurkapı',
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'county_id' => 699,
                'created_at' => NULL,
                'id' => 2088,
                'name' => 'Dargeçit',
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'county_id' => 700,
                'created_at' => NULL,
                'id' => 2089,
                'name' => 'Derik',
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'county_id' => 701,
                'created_at' => NULL,
                'id' => 2090,
                'name' => 'Kızıltepe',
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'county_id' => 702,
                'created_at' => NULL,
                'id' => 2091,
                'name' => 'Mazıdağı',
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'county_id' => 703,
                'created_at' => NULL,
                'id' => 2092,
                'name' => 'Eskimidyat',
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'county_id' => 703,
                'created_at' => NULL,
                'id' => 2093,
                'name' => 'Hükümet',
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'county_id' => 704,
                'created_at' => NULL,
                'id' => 2094,
                'name' => 'Nusaybin',
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'county_id' => 705,
                'created_at' => NULL,
                'id' => 2095,
                'name' => 'Ömerli',
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'county_id' => 706,
                'created_at' => NULL,
                'id' => 2096,
                'name' => 'Savur',
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'county_id' => 707,
                'created_at' => NULL,
                'id' => 2097,
                'name' => 'Yeşilli',
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'county_id' => 708,
                'created_at' => NULL,
                'id' => 2098,
                'name' => 'Adanalıoğlu',
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'county_id' => 708,
                'created_at' => NULL,
                'id' => 2099,
                'name' => 'Barış',
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'county_id' => 708,
                'created_at' => NULL,
                'id' => 2100,
                'name' => 'Camiişerif',
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'county_id' => 708,
                'created_at' => NULL,
                'id' => 2101,
                'name' => 'Çankaya',
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'county_id' => 708,
                'created_at' => NULL,
                'id' => 2102,
                'name' => 'Dikilitaş',
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'county_id' => 708,
                'created_at' => NULL,
                'id' => 2103,
                'name' => 'Evci',
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'county_id' => 708,
                'created_at' => NULL,
                'id' => 2104,
                'name' => 'Gündoğdu',
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'county_id' => 708,
                'created_at' => NULL,
                'id' => 2105,
                'name' => 'Hal',
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'county_id' => 708,
                'created_at' => NULL,
                'id' => 2106,
                'name' => 'Huzurkent',
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'county_id' => 708,
                'created_at' => NULL,
                'id' => 2107,
                'name' => 'Karacailyas',
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'county_id' => 708,
                'created_at' => NULL,
                'id' => 2108,
                'name' => 'Karaduvar',
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'county_id' => 708,
                'created_at' => NULL,
                'id' => 2109,
                'name' => 'Kazanlı',
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'county_id' => 708,
                'created_at' => NULL,
                'id' => 2110,
                'name' => 'Nusratiye',
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'county_id' => 709,
                'created_at' => NULL,
                'id' => 2111,
                'name' => 'Anamur',
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'county_id' => 709,
                'created_at' => NULL,
                'id' => 2112,
                'name' => 'Göktaş',
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'county_id' => 709,
                'created_at' => NULL,
                'id' => 2113,
                'name' => 'İskele',
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'county_id' => 710,
                'created_at' => NULL,
                'id' => 2114,
                'name' => 'Aydıncık',
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'county_id' => 710,
                'created_at' => NULL,
                'id' => 2115,
                'name' => 'Karadere',
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'county_id' => 711,
                'created_at' => NULL,
                'id' => 2116,
                'name' => 'Ardıçlıtaş',
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'county_id' => 711,
                'created_at' => NULL,
                'id' => 2117,
                'name' => 'Bozyazı',
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'county_id' => 712,
                'created_at' => NULL,
                'id' => 2118,
                'name' => 'Çamlıyayla',
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'county_id' => 712,
                'created_at' => NULL,
                'id' => 2119,
                'name' => 'Darıpınarı',
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'county_id' => 713,
                'created_at' => NULL,
                'id' => 2120,
                'name' => 'Erdemli',
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'county_id' => 714,
                'created_at' => NULL,
                'id' => 2121,
                'name' => 'Gülnar',
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'county_id' => 714,
                'created_at' => NULL,
                'id' => 2122,
                'name' => 'Köseçobanlı',
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'county_id' => 715,
                'created_at' => NULL,
                'id' => 2123,
                'name' => 'Akdeniz',
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'county_id' => 715,
                'created_at' => NULL,
                'id' => 2124,
                'name' => 'Atatürk',
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'county_id' => 715,
                'created_at' => NULL,
                'id' => 2125,
                'name' => 'Davultepe',
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'county_id' => 715,
                'created_at' => NULL,
                'id' => 2126,
                'name' => 'Fındıkpınarı',
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'county_id' => 715,
                'created_at' => NULL,
                'id' => 2127,
                'name' => 'Tece',
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'county_id' => 716,
                'created_at' => NULL,
                'id' => 2128,
                'name' => 'Mut',
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'county_id' => 717,
                'created_at' => NULL,
                'id' => 2129,
                'name' => 'Atakent',
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'county_id' => 717,
                'created_at' => NULL,
                'id' => 2130,
                'name' => 'Atayurt',
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'county_id' => 717,
                'created_at' => NULL,
                'id' => 2131,
                'name' => 'Gazi',
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'county_id' => 717,
                'created_at' => NULL,
                'id' => 2132,
                'name' => 'Pazarkaşı',
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'county_id' => 717,
                'created_at' => NULL,
                'id' => 2133,
                'name' => 'Silifke',
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'county_id' => 717,
                'created_at' => NULL,
                'id' => 2134,
                'name' => 'Taşucu',
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'county_id' => 718,
                'created_at' => NULL,
                'id' => 2135,
                'name' => '82Evler',
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'county_id' => 718,
                'created_at' => NULL,
                'id' => 2136,
                'name' => 'Akşemsettin',
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'county_id' => 718,
                'created_at' => NULL,
                'id' => 2137,
                'name' => 'Altaylılar',
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'county_id' => 718,
                'created_at' => NULL,
                'id' => 2138,
                'name' => 'Anıt',
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'county_id' => 718,
                'created_at' => NULL,
                'id' => 2139,
                'name' => 'Aşağı Köyler',
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'county_id' => 718,
                'created_at' => NULL,
                'id' => 2140,
                'name' => 'Bahçe',
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'county_id' => 718,
                'created_at' => NULL,
                'id' => 2141,
                'name' => 'Beydeğirmeni',
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'county_id' => 718,
                'created_at' => NULL,
                'id' => 2142,
                'name' => 'Caminur',
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'county_id' => 718,
                'created_at' => NULL,
                'id' => 2143,
                'name' => 'Çamlıyayla',
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'county_id' => 718,
                'created_at' => NULL,
                'id' => 2144,
                'name' => 'Kavaklı',
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'county_id' => 718,
                'created_at' => NULL,
                'id' => 2145,
                'name' => 'Kızılmurat',
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'county_id' => 718,
                'created_at' => NULL,
                'id' => 2146,
                'name' => 'Yenice',
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'county_id' => 718,
                'created_at' => NULL,
                'id' => 2147,
                'name' => 'Yolboyu',
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'county_id' => 718,
                'created_at' => NULL,
                'id' => 2148,
                'name' => 'Yukarı Köyler',
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'county_id' => 719,
                'created_at' => NULL,
                'id' => 2149,
                'name' => 'Akbelen',
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'county_id' => 719,
                'created_at' => NULL,
                'id' => 2150,
                'name' => 'Arslanköy',
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'county_id' => 719,
                'created_at' => NULL,
                'id' => 2151,
                'name' => 'Çavuşlu',
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'county_id' => 719,
                'created_at' => NULL,
                'id' => 2152,
                'name' => 'Demirtaş',
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'county_id' => 719,
                'created_at' => NULL,
                'id' => 2153,
                'name' => 'Halkkent',
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'county_id' => 719,
                'created_at' => NULL,
                'id' => 2154,
                'name' => 'Sağlık',
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'county_id' => 719,
                'created_at' => NULL,
                'id' => 2155,
                'name' => 'Selçuklar',
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'county_id' => 720,
                'created_at' => NULL,
                'id' => 2156,
                'name' => 'Afetevler',
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'county_id' => 720,
                'created_at' => NULL,
                'id' => 2157,
                'name' => 'Bahçelievler',
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'county_id' => 720,
                'created_at' => NULL,
                'id' => 2158,
                'name' => 'Barbaros',
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'county_id' => 720,
                'created_at' => NULL,
                'id' => 2159,
                'name' => 'Cumhuriyet',
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'county_id' => 720,
                'created_at' => NULL,
                'id' => 2160,
                'name' => 'Değirmençay',
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'county_id' => 721,
                'created_at' => NULL,
                'id' => 2161,
                'name' => 'Bodrum',
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'county_id' => 722,
                'created_at' => NULL,
                'id' => 2162,
                'name' => 'Dalaman',
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'county_id' => 723,
                'created_at' => NULL,
                'id' => 2163,
                'name' => 'Datça',
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'county_id' => 724,
                'created_at' => NULL,
                'id' => 2164,
                'name' => 'Fethiye',
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'county_id' => 725,
                'created_at' => NULL,
                'id' => 2165,
                'name' => 'Kavaklıdere',
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'county_id' => 726,
                'created_at' => NULL,
                'id' => 2166,
                'name' => 'Köyceğiz',
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'county_id' => 727,
                'created_at' => NULL,
                'id' => 2167,
                'name' => 'Marmaris',
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'county_id' => 728,
                'created_at' => NULL,
                'id' => 2168,
                'name' => 'Menteşe',
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'county_id' => 729,
                'created_at' => NULL,
                'id' => 2169,
                'name' => 'Milas',
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'county_id' => 730,
                'created_at' => NULL,
                'id' => 2170,
                'name' => 'Ortaca',
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'county_id' => 731,
                'created_at' => NULL,
                'id' => 2171,
                'name' => 'Seydikemer',
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'county_id' => 732,
                'created_at' => NULL,
                'id' => 2172,
                'name' => 'Ula',
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'county_id' => 733,
                'created_at' => NULL,
                'id' => 2173,
                'name' => 'Yatağan',
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'county_id' => 734,
                'created_at' => NULL,
                'id' => 2174,
                'name' => 'Bulanık',
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'county_id' => 734,
                'created_at' => NULL,
                'id' => 2175,
                'name' => 'Elmakaya',
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'county_id' => 734,
                'created_at' => NULL,
                'id' => 2176,
                'name' => 'Erentepe',
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'county_id' => 734,
                'created_at' => NULL,
                'id' => 2177,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'county_id' => 734,
                'created_at' => NULL,
                'id' => 2178,
                'name' => 'Rüstemgedik',
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'county_id' => 734,
                'created_at' => NULL,
                'id' => 2179,
                'name' => 'Sarıpınar',
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'county_id' => 734,
                'created_at' => NULL,
                'id' => 2180,
                'name' => 'Uzgörür',
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'county_id' => 734,
                'created_at' => NULL,
                'id' => 2181,
                'name' => 'Yoncalı',
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'county_id' => 735,
                'created_at' => NULL,
                'id' => 2182,
                'name' => 'Düzkışla',
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'county_id' => 735,
                'created_at' => NULL,
                'id' => 2183,
                'name' => 'Hasköy',
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'county_id' => 735,
                'created_at' => NULL,
                'id' => 2184,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'county_id' => 736,
                'created_at' => NULL,
                'id' => 2185,
                'name' => 'Altınova',
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'county_id' => 736,
                'created_at' => NULL,
                'id' => 2186,
                'name' => 'Korkut',
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'county_id' => 736,
                'created_at' => NULL,
                'id' => 2187,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'county_id' => 737,
                'created_at' => NULL,
                'id' => 2188,
                'name' => 'Aktuzla',
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'county_id' => 737,
                'created_at' => NULL,
                'id' => 2189,
                'name' => 'Karahasan',
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'county_id' => 737,
                'created_at' => NULL,
                'id' => 2190,
                'name' => 'Konakkuran',
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'county_id' => 737,
                'created_at' => NULL,
                'id' => 2191,
                'name' => 'Malazgirt',
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'county_id' => 737,
                'created_at' => NULL,
                'id' => 2192,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'county_id' => 737,
                'created_at' => NULL,
                'id' => 2193,
                'name' => 'Nurettin',
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'county_id' => 738,
                'created_at' => NULL,
                'id' => 2194,
                'name' => 'Karaağaçlı',
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'county_id' => 738,
                'created_at' => NULL,
                'id' => 2195,
                'name' => 'Kırköy',
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'county_id' => 738,
                'created_at' => NULL,
                'id' => 2196,
                'name' => 'Kızılağaç',
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'county_id' => 738,
                'created_at' => NULL,
                'id' => 2197,
                'name' => 'Konukbekler',
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'county_id' => 738,
                'created_at' => NULL,
                'id' => 2198,
                'name' => 'Merkez',
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'county_id' => 738,
                'created_at' => NULL,
                'id' => 2199,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'county_id' => 738,
                'created_at' => NULL,
                'id' => 2200,
                'name' => 'Serinova',
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'county_id' => 738,
                'created_at' => NULL,
                'id' => 2201,
                'name' => 'Sungu',
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'county_id' => 738,
                'created_at' => NULL,
                'id' => 2202,
                'name' => 'Yaygın',
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'county_id' => 738,
                'created_at' => NULL,
                'id' => 2203,
                'name' => 'Yeşilova',
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'county_id' => 739,
                'created_at' => NULL,
                'id' => 2204,
                'name' => 'Çaylar',
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'county_id' => 739,
                'created_at' => NULL,
                'id' => 2205,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'county_id' => 739,
                'created_at' => NULL,
                'id' => 2206,
                'name' => 'Varto',
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'county_id' => 740,
                'created_at' => NULL,
                'id' => 2207,
                'name' => 'Acıgöl',
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'county_id' => 740,
                'created_at' => NULL,
                'id' => 2208,
                'name' => 'Karapınar',
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'county_id' => 740,
                'created_at' => NULL,
                'id' => 2209,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'county_id' => 740,
                'created_at' => NULL,
                'id' => 2210,
                'name' => 'Tatların',
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'county_id' => 741,
                'created_at' => NULL,
                'id' => 2211,
                'name' => 'Avanos',
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'county_id' => 741,
                'created_at' => NULL,
                'id' => 2212,
                'name' => 'Çalış',
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'county_id' => 741,
                'created_at' => NULL,
                'id' => 2213,
                'name' => 'Kalaba',
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'county_id' => 741,
                'created_at' => NULL,
                'id' => 2214,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'county_id' => 741,
                'created_at' => NULL,
                'id' => 2215,
                'name' => 'Özkonak',
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'county_id' => 742,
                'created_at' => NULL,
                'id' => 2216,
                'name' => 'Derinkuyu',
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'county_id' => 742,
                'created_at' => NULL,
                'id' => 2217,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'county_id' => 742,
                'created_at' => NULL,
                'id' => 2218,
                'name' => 'Yazıhüyük',
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'county_id' => 743,
                'created_at' => NULL,
                'id' => 2219,
                'name' => 'Gülşehir',
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'county_id' => 743,
                'created_at' => NULL,
                'id' => 2220,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'county_id' => 744,
                'created_at' => NULL,
                'id' => 2221,
                'name' => 'Hacıbektaş',
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'county_id' => 744,
                'created_at' => NULL,
                'id' => 2222,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'county_id' => 745,
                'created_at' => NULL,
                'id' => 2223,
                'name' => 'Kozaklı',
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'county_id' => 745,
                'created_at' => NULL,
                'id' => 2224,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'county_id' => 746,
                'created_at' => NULL,
                'id' => 2225,
                'name' => 'Camicedit',
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'county_id' => 746,
                'created_at' => NULL,
                'id' => 2226,
                'name' => 'Çarşı',
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'county_id' => 746,
                'created_at' => NULL,
                'id' => 2227,
                'name' => 'Çat',
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'county_id' => 746,
                'created_at' => NULL,
                'id' => 2228,
                'name' => 'Göre',
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'county_id' => 746,
                'created_at' => NULL,
                'id' => 2229,
                'name' => 'Göreme',
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'county_id' => 746,
                'created_at' => NULL,
                'id' => 2230,
                'name' => 'Kavak',
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'county_id' => 746,
                'created_at' => NULL,
                'id' => 2231,
                'name' => 'Kaymaklı',
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'county_id' => 746,
                'created_at' => NULL,
                'id' => 2232,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'county_id' => 746,
                'created_at' => NULL,
                'id' => 2233,
                'name' => 'Nar',
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'county_id' => 746,
                'created_at' => NULL,
                'id' => 2234,
                'name' => 'Sulusaray',
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'county_id' => 746,
                'created_at' => NULL,
                'id' => 2235,
                'name' => 'Uçhisar',
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'county_id' => 747,
                'created_at' => NULL,
                'id' => 2236,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'county_id' => 747,
                'created_at' => NULL,
                'id' => 2237,
                'name' => 'Ortahisar',
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'county_id' => 747,
                'created_at' => NULL,
                'id' => 2238,
                'name' => 'Ürgüp',
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'county_id' => 748,
                'created_at' => NULL,
                'id' => 2239,
                'name' => 'Altunhisar',
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'county_id' => 748,
                'created_at' => NULL,
                'id' => 2240,
                'name' => 'Karakapı',
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'county_id' => 748,
                'created_at' => NULL,
                'id' => 2241,
                'name' => 'Keçikalesi',
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'county_id' => 748,
                'created_at' => NULL,
                'id' => 2242,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'county_id' => 749,
                'created_at' => NULL,
                'id' => 2243,
                'name' => 'Bahçeli',
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'county_id' => 749,
                'created_at' => NULL,
                'id' => 2244,
                'name' => 'Bor',
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'county_id' => 749,
                'created_at' => NULL,
                'id' => 2245,
                'name' => 'Çukurkuyu',
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'county_id' => 749,
                'created_at' => NULL,
                'id' => 2246,
                'name' => 'Kemerhisar',
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'county_id' => 749,
                'created_at' => NULL,
                'id' => 2247,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'county_id' => 750,
                'created_at' => NULL,
                'id' => 2248,
                'name' => 'Çamardı',
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'county_id' => 750,
                'created_at' => NULL,
                'id' => 2249,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'county_id' => 751,
                'created_at' => NULL,
                'id' => 2250,
                'name' => 'Azatlı',
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'county_id' => 751,
                'created_at' => NULL,
                'id' => 2251,
                'name' => 'Bozköy',
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'county_id' => 751,
                'created_at' => NULL,
                'id' => 2252,
                'name' => 'Divarlı',
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'county_id' => 751,
                'created_at' => NULL,
                'id' => 2253,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'county_id' => 751,
                'created_at' => NULL,
                'id' => 2254,
                'name' => 'Özyurt',
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'county_id' => 752,
                'created_at' => NULL,
                'id' => 2255,
                'name' => 'Afetevleri',
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'county_id' => 752,
                'created_at' => NULL,
                'id' => 2256,
                'name' => 'Aktaş',
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'county_id' => 752,
                'created_at' => NULL,
                'id' => 2257,
                'name' => 'Alay',
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'county_id' => 752,
                'created_at' => NULL,
                'id' => 2258,
                'name' => 'Bağlama',
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'county_id' => 752,
                'created_at' => NULL,
                'id' => 2259,
                'name' => 'Değirmenli',
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'county_id' => 752,
                'created_at' => NULL,
                'id' => 2260,
                'name' => 'Dündarlı',
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'county_id' => 752,
                'created_at' => NULL,
                'id' => 2261,
                'name' => 'Edikli',
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'county_id' => 752,
                'created_at' => NULL,
                'id' => 2262,
                'name' => 'Gümüşler',
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'county_id' => 752,
                'created_at' => NULL,
                'id' => 2263,
                'name' => 'Hacıabdullah',
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'county_id' => 752,
                'created_at' => NULL,
                'id' => 2264,
                'name' => 'Karaatlı',
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'county_id' => 752,
                'created_at' => NULL,
                'id' => 2265,
                'name' => 'Kiledere',
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'county_id' => 752,
                'created_at' => NULL,
                'id' => 2266,
                'name' => 'Konaklı',
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'county_id' => 752,
                'created_at' => NULL,
                'id' => 2267,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'county_id' => 752,
                'created_at' => NULL,
                'id' => 2268,
                'name' => 'Orhanlı',
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'county_id' => 752,
                'created_at' => NULL,
                'id' => 2269,
                'name' => 'Sazlıca',
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'county_id' => 752,
                'created_at' => NULL,
                'id' => 2270,
                'name' => 'Sungurbey',
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'county_id' => 752,
                'created_at' => NULL,
                'id' => 2271,
                'name' => 'Yeşilgölcük',
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'county_id' => 752,
                'created_at' => NULL,
                'id' => 2272,
                'name' => 'Yıldıztepe',
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'county_id' => 753,
                'created_at' => NULL,
                'id' => 2273,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'county_id' => 753,
                'created_at' => NULL,
                'id' => 2274,
                'name' => 'Ulukışla',
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'county_id' => 754,
                'created_at' => NULL,
                'id' => 2275,
                'name' => 'Akkuş',
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'county_id' => 755,
                'created_at' => NULL,
                'id' => 2276,
                'name' => 'Bahcelievler',
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'county_id' => 755,
                'created_at' => NULL,
                'id' => 2277,
                'name' => 'Düz Mahalle',
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'county_id' => 755,
                'created_at' => NULL,
                'id' => 2278,
                'name' => 'Saraycık',
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'county_id' => 756,
                'created_at' => NULL,
                'id' => 2279,
                'name' => 'Aybastı',
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'county_id' => 757,
                'created_at' => NULL,
                'id' => 2280,
                'name' => 'Çamaş',
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'county_id' => 758,
                'created_at' => NULL,
                'id' => 2281,
                'name' => 'Çatalpınar',
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'county_id' => 759,
                'created_at' => NULL,
                'id' => 2282,
                'name' => 'Çaybaşı',
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'county_id' => 760,
                'created_at' => NULL,
                'id' => 2283,
                'name' => 'Fatsa',
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'county_id' => 761,
                'created_at' => NULL,
                'id' => 2284,
                'name' => 'Gölköy',
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'county_id' => 762,
                'created_at' => NULL,
                'id' => 2285,
                'name' => 'Gülyalı',
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'county_id' => 763,
                'created_at' => NULL,
                'id' => 2286,
                'name' => 'Gürgentepe',
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'county_id' => 764,
                'created_at' => NULL,
                'id' => 2287,
                'name' => 'İkizce',
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'county_id' => 765,
                'created_at' => NULL,
                'id' => 2288,
                'name' => 'Karadüz',
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'county_id' => 766,
                'created_at' => NULL,
                'id' => 2289,
                'name' => 'Kabataş',
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'county_id' => 767,
                'created_at' => NULL,
                'id' => 2290,
                'name' => 'Korgan',
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'county_id' => 768,
                'created_at' => NULL,
                'id' => 2291,
                'name' => 'Kumru',
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'county_id' => 769,
                'created_at' => NULL,
                'id' => 2292,
                'name' => 'Mesudiye',
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'county_id' => 770,
                'created_at' => NULL,
                'id' => 2293,
                'name' => 'Perşembe',
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'county_id' => 771,
                'created_at' => NULL,
                'id' => 2294,
                'name' => 'Ulubey',
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'county_id' => 772,
                'created_at' => NULL,
                'id' => 2295,
                'name' => 'Ünye',
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'county_id' => 773,
                'created_at' => NULL,
                'id' => 2296,
                'name' => 'Bahçe',
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'county_id' => 773,
                'created_at' => NULL,
                'id' => 2297,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'county_id' => 774,
                'created_at' => NULL,
                'id' => 2298,
                'name' => 'Atalan',
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'county_id' => 774,
                'created_at' => NULL,
                'id' => 2299,
                'name' => 'Böcekli',
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'county_id' => 774,
                'created_at' => NULL,
                'id' => 2300,
                'name' => 'Düziçi',
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'county_id' => 774,
                'created_at' => NULL,
                'id' => 2301,
                'name' => 'Ellek',
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'county_id' => 774,
                'created_at' => NULL,
                'id' => 2302,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'county_id' => 774,
                'created_at' => NULL,
                'id' => 2303,
                'name' => 'Yarbaşı',
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'county_id' => 775,
                'created_at' => NULL,
                'id' => 2304,
                'name' => 'Hasanbeyli',
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'county_id' => 775,
                'created_at' => NULL,
                'id' => 2305,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'county_id' => 776,
                'created_at' => NULL,
                'id' => 2306,
                'name' => 'Cemalpaşa',
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'county_id' => 776,
                'created_at' => NULL,
                'id' => 2307,
                'name' => 'Kadirli',
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'county_id' => 776,
                'created_at' => NULL,
                'id' => 2308,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'county_id' => 777,
                'created_at' => NULL,
                'id' => 2309,
                'name' => 'Atatürk',
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'county_id' => 777,
                'created_at' => NULL,
                'id' => 2310,
                'name' => 'Cevdetiye',
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'county_id' => 777,
                'created_at' => NULL,
                'id' => 2311,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'county_id' => 778,
                'created_at' => NULL,
                'id' => 2312,
                'name' => 'Mehmetli',
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'county_id' => 778,
                'created_at' => NULL,
                'id' => 2313,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'county_id' => 778,
                'created_at' => NULL,
                'id' => 2314,
                'name' => 'Sumbas',
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'county_id' => 779,
                'created_at' => NULL,
                'id' => 2315,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'county_id' => 779,
                'created_at' => NULL,
                'id' => 2316,
                'name' => 'Toprakkale',
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'county_id' => 779,
                'created_at' => NULL,
                'id' => 2317,
                'name' => 'Tüysüz',
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'county_id' => 780,
                'created_at' => NULL,
                'id' => 2318,
                'name' => 'Ardeşen',
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'county_id' => 780,
                'created_at' => NULL,
                'id' => 2319,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'county_id' => 780,
                'created_at' => NULL,
                'id' => 2320,
                'name' => 'Tunca',
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'county_id' => 781,
                'created_at' => NULL,
                'id' => 2321,
                'name' => 'Çamlıhemşin',
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'county_id' => 781,
                'created_at' => NULL,
                'id' => 2322,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'county_id' => 782,
                'created_at' => NULL,
                'id' => 2323,
                'name' => 'Büyükköy',
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'county_id' => 782,
                'created_at' => NULL,
                'id' => 2324,
                'name' => 'Çayeli',
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'county_id' => 782,
                'created_at' => NULL,
                'id' => 2325,
                'name' => 'Madenli',
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'county_id' => 782,
                'created_at' => NULL,
                'id' => 2326,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'county_id' => 783,
                'created_at' => NULL,
                'id' => 2327,
                'name' => 'Derepazarı',
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'county_id' => 783,
                'created_at' => NULL,
                'id' => 2328,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'county_id' => 784,
                'created_at' => NULL,
                'id' => 2329,
                'name' => 'Fındıklı',
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'county_id' => 784,
                'created_at' => NULL,
                'id' => 2330,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'county_id' => 785,
                'created_at' => NULL,
                'id' => 2331,
                'name' => 'Güneysu',
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'county_id' => 785,
                'created_at' => NULL,
                'id' => 2332,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'county_id' => 786,
                'created_at' => NULL,
                'id' => 2333,
                'name' => 'Hemşin',
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'county_id' => 786,
                'created_at' => NULL,
                'id' => 2334,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'county_id' => 787,
                'created_at' => NULL,
                'id' => 2335,
                'name' => 'İkizdere',
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'county_id' => 787,
                'created_at' => NULL,
                'id' => 2336,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'county_id' => 788,
                'created_at' => NULL,
                'id' => 2337,
                'name' => 'İyidere',
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'county_id' => 788,
                'created_at' => NULL,
                'id' => 2338,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'county_id' => 789,
                'created_at' => NULL,
                'id' => 2339,
                'name' => 'Kalkandere',
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'county_id' => 789,
                'created_at' => NULL,
                'id' => 2340,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'county_id' => 790,
                'created_at' => NULL,
                'id' => 2341,
                'name' => 'Gündoğdu',
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'county_id' => 790,
                'created_at' => NULL,
                'id' => 2342,
                'name' => 'Kendirli',
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'county_id' => 790,
                'created_at' => NULL,
                'id' => 2343,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'county_id' => 790,
                'created_at' => NULL,
                'id' => 2344,
                'name' => 'Muradiye',
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'county_id' => 790,
                'created_at' => NULL,
                'id' => 2345,
                'name' => 'Rize',
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'county_id' => 790,
                'created_at' => NULL,
                'id' => 2346,
                'name' => 'Salarha',
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'county_id' => 791,
                'created_at' => NULL,
                'id' => 2347,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'county_id' => 791,
                'created_at' => NULL,
                'id' => 2348,
                'name' => 'Pazar',
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'county_id' => 792,
                'created_at' => NULL,
                'id' => 2349,
                'name' => 'Adapazarı',
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'county_id' => 792,
                'created_at' => NULL,
                'id' => 2350,
                'name' => 'Karaman',
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'county_id' => 793,
                'created_at' => NULL,
                'id' => 2351,
                'name' => 'Akyazı',
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'county_id' => 794,
                'created_at' => NULL,
                'id' => 2352,
                'name' => 'Arifiye',
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'county_id' => 795,
                'created_at' => NULL,
                'id' => 2353,
                'name' => 'Erenler',
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'county_id' => 796,
                'created_at' => NULL,
                'id' => 2354,
                'name' => 'Ferizli',
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'county_id' => 797,
                'created_at' => NULL,
                'id' => 2355,
                'name' => 'Geyve',
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'county_id' => 798,
                'created_at' => NULL,
                'id' => 2356,
                'name' => 'Hendek',
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'county_id' => 799,
                'created_at' => NULL,
                'id' => 2357,
                'name' => 'Karapürçek',
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'county_id' => 800,
                'created_at' => NULL,
                'id' => 2358,
                'name' => 'Karasu',
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'county_id' => 801,
                'created_at' => NULL,
                'id' => 2359,
                'name' => 'Kaynarca',
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'county_id' => 802,
                'created_at' => NULL,
                'id' => 2360,
                'name' => 'Kocaali',
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'county_id' => 803,
                'created_at' => NULL,
                'id' => 2361,
                'name' => 'Pamukova',
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'county_id' => 804,
                'created_at' => NULL,
                'id' => 2362,
                'name' => 'Sapanca',
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'county_id' => 805,
                'created_at' => NULL,
                'id' => 2363,
                'name' => 'Serdivan',
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'county_id' => 805,
                'created_at' => NULL,
                'id' => 2364,
                'name' => 'Yazlık',
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'county_id' => 806,
                'created_at' => NULL,
                'id' => 2365,
                'name' => 'Söğütlü',
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'county_id' => 807,
                'created_at' => NULL,
                'id' => 2366,
                'name' => 'Taraklı',
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'county_id' => 808,
                'created_at' => NULL,
                'id' => 2367,
                'name' => '19 Mayıs Ballıca',
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'county_id' => 809,
                'created_at' => NULL,
                'id' => 2368,
                'name' => 'Alaçam',
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'county_id' => 810,
                'created_at' => NULL,
                'id' => 2369,
                'name' => 'Asarcık',
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'county_id' => 811,
                'created_at' => NULL,
                'id' => 2370,
                'name' => 'Atakum',
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'county_id' => 811,
                'created_at' => NULL,
                'id' => 2371,
                'name' => 'Kurupelit',
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'county_id' => 812,
                'created_at' => NULL,
                'id' => 2372,
                'name' => 'Ayvacık',
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'county_id' => 813,
                'created_at' => NULL,
                'id' => 2373,
                'name' => 'Bafra',
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'county_id' => 814,
                'created_at' => NULL,
                'id' => 2374,
                'name' => 'Canik',
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'county_id' => 815,
                'created_at' => NULL,
                'id' => 2375,
                'name' => 'Çarşamba',
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'county_id' => 816,
                'created_at' => NULL,
                'id' => 2376,
                'name' => 'Havza',
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'county_id' => 817,
                'created_at' => NULL,
                'id' => 2377,
                'name' => 'Bahçelievler',
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'county_id' => 817,
                'created_at' => NULL,
                'id' => 2378,
                'name' => 'İstasyon',
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'county_id' => 817,
                'created_at' => NULL,
                'id' => 2379,
                'name' => 'Kadıköy',
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'county_id' => 817,
                'created_at' => NULL,
                'id' => 2380,
                'name' => 'Kale',
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'county_id' => 817,
                'created_at' => NULL,
                'id' => 2381,
                'name' => 'Liman',
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'county_id' => 817,
                'created_at' => NULL,
                'id' => 2382,
                'name' => 'Rasathane',
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'county_id' => 817,
                'created_at' => NULL,
                'id' => 2383,
                'name' => 'Unkapanı',
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'county_id' => 817,
                'created_at' => NULL,
                'id' => 2384,
                'name' => 'Yeşilkent',
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'county_id' => 818,
                'created_at' => NULL,
                'id' => 2385,
                'name' => 'Kavak',
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'county_id' => 819,
                'created_at' => NULL,
                'id' => 2386,
                'name' => 'Ladik',
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'county_id' => 820,
                'created_at' => NULL,
                'id' => 2387,
                'name' => 'Salıpazarı',
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'county_id' => 821,
                'created_at' => NULL,
                'id' => 2388,
                'name' => 'Aşağıçinik',
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'county_id' => 821,
                'created_at' => NULL,
                'id' => 2389,
                'name' => 'Büyüklü',
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'county_id' => 821,
                'created_at' => NULL,
                'id' => 2390,
                'name' => 'Kutlukent',
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'county_id' => 821,
                'created_at' => NULL,
                'id' => 2391,
                'name' => 'Tekkeköy',
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'county_id' => 822,
                'created_at' => NULL,
                'id' => 2392,
                'name' => 'Terme',
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'county_id' => 823,
                'created_at' => NULL,
                'id' => 2393,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'county_id' => 823,
                'created_at' => NULL,
                'id' => 2394,
                'name' => 'Vezirköprü',
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'county_id' => 824,
                'created_at' => NULL,
                'id' => 2395,
                'name' => 'Yakakent',
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'county_id' => 825,
                'created_at' => NULL,
                'id' => 2396,
                'name' => 'Atabağı',
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'county_id' => 825,
                'created_at' => NULL,
                'id' => 2397,
                'name' => 'Baykan',
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'county_id' => 825,
                'created_at' => NULL,
                'id' => 2398,
                'name' => 'Dilektepe',
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'county_id' => 825,
                'created_at' => NULL,
                'id' => 2399,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'county_id' => 825,
                'created_at' => NULL,
                'id' => 2400,
                'name' => 'Veyselkarani',
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'county_id' => 826,
                'created_at' => NULL,
                'id' => 2401,
                'name' => 'Bağgöze',
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'county_id' => 826,
                'created_at' => NULL,
                'id' => 2402,
                'name' => 'Eruh',
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'county_id' => 826,
                'created_at' => NULL,
                'id' => 2403,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'county_id' => 827,
                'created_at' => NULL,
                'id' => 2404,
                'name' => 'Kayabağlar',
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'county_id' => 827,
                'created_at' => NULL,
                'id' => 2405,
                'name' => 'Kurtalan',
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'county_id' => 827,
                'created_at' => NULL,
                'id' => 2406,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'county_id' => 828,
                'created_at' => NULL,
                'id' => 2407,
                'name' => 'Gökçebağ',
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'county_id' => 828,
                'created_at' => NULL,
                'id' => 2408,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'county_id' => 828,
                'created_at' => NULL,
                'id' => 2409,
                'name' => 'Siirt',
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'county_id' => 829,
                'created_at' => NULL,
                'id' => 2410,
                'name' => 'Beğendik',
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'county_id' => 829,
                'created_at' => NULL,
                'id' => 2411,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'county_id' => 829,
                'created_at' => NULL,
                'id' => 2412,
                'name' => 'Pervari',
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'county_id' => 830,
                'created_at' => NULL,
                'id' => 2413,
                'name' => 'Cevizlik',
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'county_id' => 830,
                'created_at' => NULL,
                'id' => 2414,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'county_id' => 830,
                'created_at' => NULL,
                'id' => 2415,
                'name' => 'Özpınar',
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'county_id' => 830,
                'created_at' => NULL,
                'id' => 2416,
                'name' => 'Şirvan',
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'county_id' => 831,
                'created_at' => NULL,
                'id' => 2417,
                'name' => 'Aydınlar',
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'county_id' => 831,
                'created_at' => NULL,
                'id' => 2418,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'county_id' => 832,
                'created_at' => NULL,
                'id' => 2419,
                'name' => 'Ayancık',
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'county_id' => 832,
                'created_at' => NULL,
                'id' => 2420,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'county_id' => 833,
                'created_at' => NULL,
                'id' => 2421,
                'name' => 'Boyabat',
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'county_id' => 833,
                'created_at' => NULL,
                'id' => 2422,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'county_id' => 834,
                'created_at' => NULL,
                'id' => 2423,
                'name' => 'Dikmen',
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'county_id' => 834,
                'created_at' => NULL,
                'id' => 2424,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'county_id' => 835,
                'created_at' => NULL,
                'id' => 2425,
                'name' => 'Durağan',
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'county_id' => 835,
                'created_at' => NULL,
                'id' => 2426,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'county_id' => 836,
                'created_at' => NULL,
                'id' => 2427,
                'name' => 'Erfelek',
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'county_id' => 836,
                'created_at' => NULL,
                'id' => 2428,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'county_id' => 837,
                'created_at' => NULL,
                'id' => 2429,
                'name' => 'Gerze',
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'county_id' => 837,
                'created_at' => NULL,
                'id' => 2430,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'county_id' => 838,
                'created_at' => NULL,
                'id' => 2431,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'county_id' => 838,
                'created_at' => NULL,
                'id' => 2432,
                'name' => 'Sinop',
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'county_id' => 839,
                'created_at' => NULL,
                'id' => 2433,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'county_id' => 839,
                'created_at' => NULL,
                'id' => 2434,
                'name' => 'Saraydüzü',
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'county_id' => 840,
                'created_at' => NULL,
                'id' => 2435,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'county_id' => 840,
                'created_at' => NULL,
                'id' => 2436,
                'name' => 'Türkeli',
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'county_id' => 841,
                'created_at' => NULL,
                'id' => 2437,
                'name' => 'Akıncılar',
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'county_id' => 841,
                'created_at' => NULL,
                'id' => 2438,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'county_id' => 842,
                'created_at' => NULL,
                'id' => 2439,
                'name' => 'Altınyayla',
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'county_id' => 842,
                'created_at' => NULL,
                'id' => 2440,
                'name' => 'Deliilyas',
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'county_id' => 842,
                'created_at' => NULL,
                'id' => 2441,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'county_id' => 843,
                'created_at' => NULL,
                'id' => 2442,
                'name' => 'Divriği',
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'county_id' => 843,
                'created_at' => NULL,
                'id' => 2443,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'county_id' => 844,
                'created_at' => NULL,
                'id' => 2444,
                'name' => 'Doğanşar',
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'county_id' => 844,
                'created_at' => NULL,
                'id' => 2445,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'county_id' => 845,
                'created_at' => NULL,
                'id' => 2446,
                'name' => 'Çepni',
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'county_id' => 845,
                'created_at' => NULL,
                'id' => 2447,
                'name' => 'Eğerci',
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'county_id' => 845,
                'created_at' => NULL,
                'id' => 2448,
                'name' => 'Gemerek',
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'county_id' => 845,
                'created_at' => NULL,
                'id' => 2449,
                'name' => 'Inkışla',
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'county_id' => 845,
                'created_at' => NULL,
                'id' => 2450,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'county_id' => 845,
                'created_at' => NULL,
                'id' => 2451,
                'name' => 'Sızır',
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'county_id' => 845,
                'created_at' => NULL,
                'id' => 2452,
                'name' => 'Yeniçubuk',
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'county_id' => 846,
                'created_at' => NULL,
                'id' => 2453,
                'name' => 'Gölova',
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'county_id' => 846,
                'created_at' => NULL,
                'id' => 2454,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'county_id' => 847,
                'created_at' => NULL,
                'id' => 2455,
                'name' => 'Gürün',
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'county_id' => 847,
                'created_at' => NULL,
                'id' => 2456,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'county_id' => 848,
                'created_at' => NULL,
                'id' => 2457,
                'name' => 'Hafik',
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'county_id' => 848,
                'created_at' => NULL,
                'id' => 2458,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'county_id' => 849,
                'created_at' => NULL,
                'id' => 2459,
                'name' => 'İmranlı',
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'county_id' => 849,
                'created_at' => NULL,
                'id' => 2460,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'county_id' => 850,
                'created_at' => NULL,
                'id' => 2461,
                'name' => 'Kangal',
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'county_id' => 850,
                'created_at' => NULL,
                'id' => 2462,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'county_id' => 851,
                'created_at' => NULL,
                'id' => 2463,
                'name' => 'Koyulhisar',
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'county_id' => 851,
                'created_at' => NULL,
                'id' => 2464,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'county_id' => 852,
                'created_at' => NULL,
                'id' => 2465,
                'name' => 'Alibaba',
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'county_id' => 852,
                'created_at' => NULL,
                'id' => 2466,
                'name' => 'Aydoğan',
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'county_id' => 852,
                'created_at' => NULL,
                'id' => 2467,
                'name' => 'Çarşı',
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'county_id' => 852,
                'created_at' => NULL,
                'id' => 2468,
                'name' => 'Kümbet',
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'county_id' => 852,
                'created_at' => NULL,
                'id' => 2469,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'county_id' => 852,
                'created_at' => NULL,
                'id' => 2470,
                'name' => 'Yenişehir',
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'county_id' => 852,
                'created_at' => NULL,
                'id' => 2471,
                'name' => 'Yıldız',
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'county_id' => 853,
                'created_at' => NULL,
                'id' => 2472,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'county_id' => 853,
                'created_at' => NULL,
                'id' => 2473,
                'name' => 'Suşehri',
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'county_id' => 854,
                'created_at' => NULL,
                'id' => 2474,
                'name' => 'Cemel',
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'county_id' => 854,
                'created_at' => NULL,
                'id' => 2475,
                'name' => 'Gürçayır',
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'county_id' => 854,
                'created_at' => NULL,
                'id' => 2476,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'county_id' => 854,
                'created_at' => NULL,
                'id' => 2477,
                'name' => 'Şarkışla',
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'county_id' => 855,
                'created_at' => NULL,
                'id' => 2478,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'county_id' => 855,
                'created_at' => NULL,
                'id' => 2479,
                'name' => 'Ulaş',
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'county_id' => 856,
                'created_at' => NULL,
                'id' => 2480,
                'name' => 'Güneykaya',
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'county_id' => 856,
                'created_at' => NULL,
                'id' => 2481,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'county_id' => 856,
                'created_at' => NULL,
                'id' => 2482,
                'name' => 'Yıldızeli',
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'county_id' => 857,
                'created_at' => NULL,
                'id' => 2483,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'county_id' => 857,
                'created_at' => NULL,
                'id' => 2484,
                'name' => 'Zara',
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'county_id' => 858,
                'created_at' => NULL,
                'id' => 2485,
                'name' => 'Akçakale',
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'county_id' => 859,
                'created_at' => NULL,
                'id' => 2486,
                'name' => 'Birecik',
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'county_id' => 860,
                'created_at' => NULL,
                'id' => 2487,
                'name' => 'Bozova',
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'county_id' => 860,
                'created_at' => NULL,
                'id' => 2488,
                'name' => 'Yaylak',
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'county_id' => 861,
                'created_at' => NULL,
                'id' => 2489,
                'name' => 'Ceylanpınar',
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'county_id' => 862,
                'created_at' => NULL,
                'id' => 2490,
                'name' => 'Çarşı',
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'county_id' => 862,
                'created_at' => NULL,
                'id' => 2491,
                'name' => 'Eyyübiye',
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'county_id' => 863,
                'created_at' => NULL,
                'id' => 2492,
                'name' => 'Halfeti',
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'county_id' => 864,
                'created_at' => NULL,
                'id' => 2493,
                'name' => 'Bağlarbaşı',
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'county_id' => 864,
                'created_at' => NULL,
                'id' => 2494,
                'name' => 'Bahçelievler',
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'county_id' => 864,
                'created_at' => NULL,
                'id' => 2495,
                'name' => 'Şairnabi',
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'county_id' => 864,
                'created_at' => NULL,
                'id' => 2496,
                'name' => 'Yenişehir',
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'county_id' => 865,
                'created_at' => NULL,
                'id' => 2497,
                'name' => 'Harran',
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'county_id' => 866,
                'created_at' => NULL,
                'id' => 2498,
                'name' => 'Hilvan',
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'county_id' => 867,
                'created_at' => NULL,
                'id' => 2499,
                'name' => 'Karaköprü',
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'county_id' => 868,
                'created_at' => NULL,
                'id' => 2500,
                'name' => 'Siverek',
                'updated_at' => NULL,
            ),
        ));
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'county_id' => 869,
                'created_at' => NULL,
                'id' => 2501,
                'name' => 'Suruç',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'county_id' => 870,
                'created_at' => NULL,
                'id' => 2502,
                'name' => 'Viranşehir',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'county_id' => 871,
                'created_at' => NULL,
                'id' => 2503,
                'name' => 'Beytüşşebap',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'county_id' => 871,
                'created_at' => NULL,
                'id' => 2504,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'county_id' => 872,
                'created_at' => NULL,
                'id' => 2505,
                'name' => 'Cizre',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'county_id' => 872,
                'created_at' => NULL,
                'id' => 2506,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'county_id' => 873,
                'created_at' => NULL,
                'id' => 2507,
                'name' => 'Fındık',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'county_id' => 873,
                'created_at' => NULL,
                'id' => 2508,
                'name' => 'Güçlükonak',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'county_id' => 873,
                'created_at' => NULL,
                'id' => 2509,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'county_id' => 874,
                'created_at' => NULL,
                'id' => 2510,
                'name' => 'İdil',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'county_id' => 874,
                'created_at' => NULL,
                'id' => 2511,
                'name' => 'Karalar',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'county_id' => 874,
                'created_at' => NULL,
                'id' => 2512,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'county_id' => 874,
                'created_at' => NULL,
                'id' => 2513,
                'name' => 'Sırtköy',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'county_id' => 875,
                'created_at' => NULL,
                'id' => 2514,
                'name' => 'Balveren',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'county_id' => 875,
                'created_at' => NULL,
                'id' => 2515,
                'name' => 'Kasrik',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'county_id' => 875,
                'created_at' => NULL,
                'id' => 2516,
                'name' => 'Kumçatı',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'county_id' => 875,
                'created_at' => NULL,
                'id' => 2517,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'county_id' => 875,
                'created_at' => NULL,
                'id' => 2518,
                'name' => 'Şırnak',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'county_id' => 876,
                'created_at' => NULL,
                'id' => 2519,
                'name' => 'Başverimli',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'county_id' => 876,
                'created_at' => NULL,
                'id' => 2520,
                'name' => 'Çalışkan',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'county_id' => 876,
                'created_at' => NULL,
                'id' => 2521,
                'name' => 'Görümlü',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'county_id' => 876,
                'created_at' => NULL,
                'id' => 2522,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'county_id' => 876,
                'created_at' => NULL,
                'id' => 2523,
                'name' => 'Silopi',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'county_id' => 877,
                'created_at' => NULL,
                'id' => 2524,
                'name' => 'Hilal',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'county_id' => 877,
                'created_at' => NULL,
                'id' => 2525,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'county_id' => 877,
                'created_at' => NULL,
                'id' => 2526,
                'name' => 'Şenoba',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'county_id' => 877,
                'created_at' => NULL,
                'id' => 2527,
                'name' => 'Uludere',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'county_id' => 877,
                'created_at' => NULL,
                'id' => 2528,
                'name' => 'Uzungeçit',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'county_id' => 878,
                'created_at' => NULL,
                'id' => 2529,
                'name' => 'Çerkezköy',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'county_id' => 879,
                'created_at' => NULL,
                'id' => 2530,
                'name' => 'Çorlu',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'county_id' => 879,
                'created_at' => NULL,
                'id' => 2531,
                'name' => 'Silahtar',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'county_id' => 880,
                'created_at' => NULL,
                'id' => 2532,
                'name' => 'Marmaracık',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'county_id' => 881,
                'created_at' => NULL,
                'id' => 2533,
                'name' => 'Hayrabolu',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'county_id' => 882,
                'created_at' => NULL,
                'id' => 2534,
                'name' => 'Kapaklı',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'county_id' => 883,
                'created_at' => NULL,
                'id' => 2535,
                'name' => 'Malkara',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'county_id' => 884,
                'created_at' => NULL,
                'id' => 2536,
                'name' => 'Marmaraereğlisi',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'county_id' => 885,
                'created_at' => NULL,
                'id' => 2537,
                'name' => 'Muratlı',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'county_id' => 886,
                'created_at' => NULL,
                'id' => 2538,
                'name' => 'Saray',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'county_id' => 887,
                'created_at' => NULL,
                'id' => 2539,
                'name' => 'Altınova',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'county_id' => 887,
                'created_at' => NULL,
                'id' => 2540,
                'name' => 'Aydoğdu',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'county_id' => 887,
                'created_at' => NULL,
                'id' => 2541,
                'name' => 'Eskicami',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'county_id' => 887,
                'created_at' => NULL,
                'id' => 2542,
                'name' => 'Kumbağ',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'county_id' => 887,
                'created_at' => NULL,
                'id' => 2543,
                'name' => 'Süleymanpaşa',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'county_id' => 888,
                'created_at' => NULL,
                'id' => 2544,
                'name' => 'Şarköy',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'county_id' => 889,
                'created_at' => NULL,
                'id' => 2545,
                'name' => 'Akarçay Görümlü',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'county_id' => 889,
                'created_at' => NULL,
                'id' => 2546,
                'name' => 'Almus',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'county_id' => 889,
                'created_at' => NULL,
                'id' => 2547,
                'name' => 'Ataköy',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'county_id' => 889,
                'created_at' => NULL,
                'id' => 2548,
                'name' => 'Çevreli',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'county_id' => 889,
                'created_at' => NULL,
                'id' => 2549,
                'name' => 'Gölgeli',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'county_id' => 889,
                'created_at' => NULL,
                'id' => 2550,
                'name' => 'Kınık',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'county_id' => 889,
                'created_at' => NULL,
                'id' => 2551,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'county_id' => 890,
                'created_at' => NULL,
                'id' => 2552,
                'name' => 'Artova',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'county_id' => 890,
                'created_at' => NULL,
                'id' => 2553,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'county_id' => 891,
                'created_at' => NULL,
                'id' => 2554,
                'name' => 'Başçiftlik',
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'county_id' => 891,
                'created_at' => NULL,
                'id' => 2555,
                'name' => 'Hatipli',
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'county_id' => 891,
                'created_at' => NULL,
                'id' => 2556,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'county_id' => 892,
                'created_at' => NULL,
                'id' => 2557,
                'name' => 'Erbaa',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'county_id' => 892,
                'created_at' => NULL,
                'id' => 2558,
                'name' => 'Gökal',
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'county_id' => 892,
                'created_at' => NULL,
                'id' => 2559,
                'name' => 'Karayaka',
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'county_id' => 892,
                'created_at' => NULL,
                'id' => 2560,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'county_id' => 892,
                'created_at' => NULL,
                'id' => 2561,
                'name' => 'Tanoba',
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'county_id' => 893,
                'created_at' => NULL,
                'id' => 2562,
                'name' => 'Çamlıbel',
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'county_id' => 893,
                'created_at' => NULL,
                'id' => 2563,
                'name' => 'Çat',
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'county_id' => 893,
                'created_at' => NULL,
                'id' => 2564,
                'name' => 'Emirseyit',
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'county_id' => 893,
                'created_at' => NULL,
                'id' => 2565,
                'name' => 'Geyras',
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'county_id' => 893,
                'created_at' => NULL,
                'id' => 2566,
                'name' => 'Gökdere',
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'county_id' => 893,
                'created_at' => NULL,
                'id' => 2567,
                'name' => 'Güryıldız',
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'county_id' => 893,
                'created_at' => NULL,
                'id' => 2568,
                'name' => 'Karşıyaka',
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'county_id' => 893,
                'created_at' => NULL,
                'id' => 2569,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'county_id' => 894,
                'created_at' => NULL,
                'id' => 2570,
                'name' => 'Gökçeli',
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'county_id' => 894,
                'created_at' => NULL,
                'id' => 2571,
                'name' => 'Gürçeşme',
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'county_id' => 894,
                'created_at' => NULL,
                'id' => 2572,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'county_id' => 894,
                'created_at' => NULL,
                'id' => 2573,
                'name' => 'Niksar',
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'county_id' => 894,
                'created_at' => NULL,
                'id' => 2574,
                'name' => 'Serenli',
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'county_id' => 894,
                'created_at' => NULL,
                'id' => 2575,
                'name' => 'Yazıcık',
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'county_id' => 894,
                'created_at' => NULL,
                'id' => 2576,
                'name' => 'Yolkonak',
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'county_id' => 895,
                'created_at' => NULL,
                'id' => 2577,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'county_id' => 895,
                'created_at' => NULL,
                'id' => 2578,
                'name' => 'Pazar',
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'county_id' => 895,
                'created_at' => NULL,
                'id' => 2579,
                'name' => 'Üzümören',
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'county_id' => 896,
                'created_at' => NULL,
                'id' => 2580,
                'name' => 'Baydarlı',
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'county_id' => 896,
                'created_at' => NULL,
                'id' => 2581,
                'name' => 'Bereketli',
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'county_id' => 896,
                'created_at' => NULL,
                'id' => 2582,
                'name' => 'Bozçalı',
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'county_id' => 896,
                'created_at' => NULL,
                'id' => 2583,
                'name' => 'Cimitekke',
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'county_id' => 896,
                'created_at' => NULL,
                'id' => 2584,
                'name' => 'Hasanşeyh',
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'county_id' => 896,
                'created_at' => NULL,
                'id' => 2585,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'county_id' => 896,
                'created_at' => NULL,
                'id' => 2586,
                'name' => 'Reşadiye',
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'county_id' => 897,
                'created_at' => NULL,
                'id' => 2587,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'county_id' => 897,
                'created_at' => NULL,
                'id' => 2588,
                'name' => 'Sulusaray',
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'county_id' => 898,
                'created_at' => NULL,
                'id' => 2589,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'county_id' => 898,
                'created_at' => NULL,
                'id' => 2590,
                'name' => 'Şenyurt',
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'county_id' => 898,
                'created_at' => NULL,
                'id' => 2591,
                'name' => 'Turhal',
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'county_id' => 899,
                'created_at' => NULL,
                'id' => 2592,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'county_id' => 899,
                'created_at' => NULL,
                'id' => 2593,
                'name' => 'Yeşilyurt',
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'county_id' => 900,
                'created_at' => NULL,
                'id' => 2594,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'county_id' => 900,
                'created_at' => NULL,
                'id' => 2595,
                'name' => 'Zile',
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'county_id' => 901,
                'created_at' => NULL,
                'id' => 2596,
                'name' => 'Akçaabat',
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'county_id' => 902,
                'created_at' => NULL,
                'id' => 2597,
                'name' => 'Araklı',
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'county_id' => 903,
                'created_at' => NULL,
                'id' => 2598,
                'name' => 'Arsin',
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'county_id' => 904,
                'created_at' => NULL,
                'id' => 2599,
                'name' => 'Beşikdüzü',
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'county_id' => 905,
                'created_at' => NULL,
                'id' => 2600,
                'name' => 'Çarşıbaşı',
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'county_id' => 906,
                'created_at' => NULL,
                'id' => 2601,
                'name' => 'Çaykara',
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'county_id' => 907,
                'created_at' => NULL,
                'id' => 2602,
                'name' => 'Dernekpazarı',
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'county_id' => 908,
                'created_at' => NULL,
                'id' => 2603,
                'name' => 'Düzköy',
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'county_id' => 909,
                'created_at' => NULL,
                'id' => 2604,
                'name' => 'Hayrat',
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'county_id' => 910,
                'created_at' => NULL,
                'id' => 2605,
                'name' => 'Köprübaşı',
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'county_id' => 911,
                'created_at' => NULL,
                'id' => 2606,
                'name' => 'Maçka',
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'county_id' => 912,
                'created_at' => NULL,
                'id' => 2607,
                'name' => 'Of',
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'county_id' => 913,
                'created_at' => NULL,
                'id' => 2608,
                'name' => 'Beşirli',
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'county_id' => 913,
                'created_at' => NULL,
                'id' => 2609,
                'name' => 'Bostancı',
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'county_id' => 913,
                'created_at' => NULL,
                'id' => 2610,
                'name' => 'Boztepe',
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'county_id' => 913,
                'created_at' => NULL,
                'id' => 2611,
                'name' => 'Çarşı',
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'county_id' => 913,
                'created_at' => NULL,
                'id' => 2612,
                'name' => 'Erdoğdu',
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'county_id' => 914,
                'created_at' => NULL,
                'id' => 2613,
                'name' => 'Sürmene',
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'county_id' => 915,
                'created_at' => NULL,
                'id' => 2614,
                'name' => 'Şalpazarı',
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'county_id' => 916,
                'created_at' => NULL,
                'id' => 2615,
                'name' => 'Tonya',
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'county_id' => 917,
                'created_at' => NULL,
                'id' => 2616,
                'name' => 'Vakfıkebir',
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'county_id' => 918,
                'created_at' => NULL,
                'id' => 2617,
                'name' => 'Yomra',
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'county_id' => 919,
                'created_at' => NULL,
                'id' => 2618,
                'name' => 'Çemişgezek',
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'county_id' => 919,
                'created_at' => NULL,
                'id' => 2619,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'county_id' => 920,
                'created_at' => NULL,
                'id' => 2620,
                'name' => 'Hozat',
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'county_id' => 920,
                'created_at' => NULL,
                'id' => 2621,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'county_id' => 921,
                'created_at' => NULL,
                'id' => 2622,
                'name' => 'Akpazar',
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'county_id' => 921,
                'created_at' => NULL,
                'id' => 2623,
                'name' => 'Mazgirt',
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'county_id' => 921,
                'created_at' => NULL,
                'id' => 2624,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'county_id' => 922,
                'created_at' => NULL,
                'id' => 2625,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'county_id' => 922,
                'created_at' => NULL,
                'id' => 2626,
                'name' => 'Tunceli',
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'county_id' => 923,
                'created_at' => NULL,
                'id' => 2627,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'county_id' => 923,
                'created_at' => NULL,
                'id' => 2628,
                'name' => 'Nazımiye',
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'county_id' => 924,
                'created_at' => NULL,
                'id' => 2629,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'county_id' => 924,
                'created_at' => NULL,
                'id' => 2630,
                'name' => 'Ovacık',
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'county_id' => 925,
                'created_at' => NULL,
                'id' => 2631,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'county_id' => 925,
                'created_at' => NULL,
                'id' => 2632,
                'name' => 'Pertek',
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'county_id' => 926,
                'created_at' => NULL,
                'id' => 2633,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'county_id' => 926,
                'created_at' => NULL,
                'id' => 2634,
                'name' => 'Pülümür',
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'county_id' => 927,
                'created_at' => NULL,
                'id' => 2635,
                'name' => 'Banaz',
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'county_id' => 927,
                'created_at' => NULL,
                'id' => 2636,
                'name' => 'Kızılcasöğüt',
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'county_id' => 927,
                'created_at' => NULL,
                'id' => 2637,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'county_id' => 928,
                'created_at' => NULL,
                'id' => 2638,
                'name' => 'Eşme',
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'county_id' => 928,
                'created_at' => NULL,
                'id' => 2639,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'county_id' => 928,
                'created_at' => NULL,
                'id' => 2640,
                'name' => 'Yeleğen',
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'county_id' => 929,
                'created_at' => NULL,
                'id' => 2641,
                'name' => 'Karahallı',
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'county_id' => 929,
                'created_at' => NULL,
                'id' => 2642,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'county_id' => 930,
                'created_at' => NULL,
                'id' => 2643,
                'name' => 'Cumhuriyet',
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'county_id' => 930,
                'created_at' => NULL,
                'id' => 2644,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'county_id' => 931,
                'created_at' => NULL,
                'id' => 2645,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'county_id' => 931,
                'created_at' => NULL,
                'id' => 2646,
                'name' => 'Pınarbaşı',
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'county_id' => 931,
                'created_at' => NULL,
                'id' => 2647,
                'name' => 'Selçikler',
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'county_id' => 931,
                'created_at' => NULL,
                'id' => 2648,
                'name' => 'Sivaslı',
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'county_id' => 931,
                'created_at' => NULL,
                'id' => 2649,
                'name' => 'Tatar',
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'county_id' => 932,
                'created_at' => NULL,
                'id' => 2650,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'county_id' => 932,
                'created_at' => NULL,
                'id' => 2651,
                'name' => 'Ulubey',
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'county_id' => 933,
                'created_at' => NULL,
                'id' => 2652,
                'name' => 'Bahçesaray',
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'county_id' => 934,
                'created_at' => NULL,
                'id' => 2653,
                'name' => 'Başkale',
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'county_id' => 935,
                'created_at' => NULL,
                'id' => 2654,
                'name' => 'Çaldıran',
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'county_id' => 936,
                'created_at' => NULL,
                'id' => 2655,
                'name' => 'Çatak',
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'county_id' => 937,
                'created_at' => NULL,
                'id' => 2656,
                'name' => 'Gümüşdere',
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'county_id' => 937,
                'created_at' => NULL,
                'id' => 2657,
                'name' => 'Süphan',
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'county_id' => 938,
                'created_at' => NULL,
                'id' => 2658,
                'name' => 'Erciş',
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'county_id' => 939,
                'created_at' => NULL,
                'id' => 2659,
                'name' => 'Gevaş',
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'county_id' => 940,
                'created_at' => NULL,
                'id' => 2660,
                'name' => 'Gürpınar',
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'county_id' => 941,
                'created_at' => NULL,
                'id' => 2661,
                'name' => 'Erçek',
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'county_id' => 941,
                'created_at' => NULL,
                'id' => 2662,
                'name' => 'Valimitatbey',
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'county_id' => 942,
                'created_at' => NULL,
                'id' => 2663,
                'name' => 'Muradiye',
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'county_id' => 943,
                'created_at' => NULL,
                'id' => 2664,
                'name' => 'Özalp',
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'county_id' => 944,
                'created_at' => NULL,
                'id' => 2665,
                'name' => 'Saray',
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'county_id' => 945,
                'created_at' => NULL,
                'id' => 2666,
                'name' => 'İskele',
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'county_id' => 945,
                'created_at' => NULL,
                'id' => 2667,
                'name' => 'İstasyon',
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'county_id' => 946,
                'created_at' => NULL,
                'id' => 2668,
                'name' => 'Altınova',
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'county_id' => 946,
                'created_at' => NULL,
                'id' => 2669,
                'name' => 'Kaytazdere',
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'county_id' => 946,
                'created_at' => NULL,
                'id' => 2670,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'county_id' => 946,
                'created_at' => NULL,
                'id' => 2671,
                'name' => 'Subaşı',
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'county_id' => 946,
                'created_at' => NULL,
                'id' => 2672,
                'name' => 'Tavşanlı',
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'county_id' => 947,
                'created_at' => NULL,
                'id' => 2673,
                'name' => 'Armutlu',
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'county_id' => 947,
                'created_at' => NULL,
                'id' => 2674,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'county_id' => 948,
                'created_at' => NULL,
                'id' => 2675,
                'name' => 'Çınarcık',
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'county_id' => 948,
                'created_at' => NULL,
                'id' => 2676,
                'name' => 'Esenköy',
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'county_id' => 948,
                'created_at' => NULL,
                'id' => 2677,
                'name' => 'Koru',
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'county_id' => 948,
                'created_at' => NULL,
                'id' => 2678,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'county_id' => 948,
                'created_at' => NULL,
                'id' => 2679,
                'name' => 'Teşvikiye',
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'county_id' => 949,
                'created_at' => NULL,
                'id' => 2680,
                'name' => 'Çiftlikköy',
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'county_id' => 949,
                'created_at' => NULL,
                'id' => 2681,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'county_id' => 949,
                'created_at' => NULL,
                'id' => 2682,
                'name' => 'Taşköprü',
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'county_id' => 950,
                'created_at' => NULL,
                'id' => 2683,
                'name' => 'Bağlarbaşı',
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'county_id' => 950,
                'created_at' => NULL,
                'id' => 2684,
                'name' => 'Kadıköy',
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'county_id' => 950,
                'created_at' => NULL,
                'id' => 2685,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'county_id' => 951,
                'created_at' => NULL,
                'id' => 2686,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'county_id' => 951,
                'created_at' => NULL,
                'id' => 2687,
                'name' => 'Termal',
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'county_id' => 952,
                'created_at' => NULL,
                'id' => 2688,
                'name' => 'Akdağmadeni',
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'county_id' => 952,
                'created_at' => NULL,
                'id' => 2689,
                'name' => 'Belekçehan',
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'county_id' => 952,
                'created_at' => NULL,
                'id' => 2690,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'county_id' => 952,
                'created_at' => NULL,
                'id' => 2691,
                'name' => 'Oluközü',
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'county_id' => 952,
                'created_at' => NULL,
                'id' => 2692,
                'name' => 'Umutlu',
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'county_id' => 953,
                'created_at' => NULL,
                'id' => 2693,
                'name' => 'Aydıncık',
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'county_id' => 953,
                'created_at' => NULL,
                'id' => 2694,
                'name' => 'Baydiğin',
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'county_id' => 953,
                'created_at' => NULL,
                'id' => 2695,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'county_id' => 954,
                'created_at' => NULL,
                'id' => 2696,
                'name' => 'Boğazlıyan',
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'county_id' => 954,
                'created_at' => NULL,
                'id' => 2697,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'county_id' => 954,
                'created_at' => NULL,
                'id' => 2698,
                'name' => 'Ovakent',
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'county_id' => 954,
                'created_at' => NULL,
                'id' => 2699,
                'name' => 'Sırçalı',
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'county_id' => 954,
                'created_at' => NULL,
                'id' => 2700,
                'name' => 'Uzunlu',
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'county_id' => 954,
                'created_at' => NULL,
                'id' => 2701,
                'name' => 'Yamaçlı',
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'county_id' => 954,
                'created_at' => NULL,
                'id' => 2702,
                'name' => 'Yenipazar',
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'county_id' => 955,
                'created_at' => NULL,
                'id' => 2703,
                'name' => 'Çandır',
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'county_id' => 955,
                'created_at' => NULL,
                'id' => 2704,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'county_id' => 956,
                'created_at' => NULL,
                'id' => 2705,
                'name' => 'Çayıralan',
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'county_id' => 956,
                'created_at' => NULL,
                'id' => 2706,
                'name' => 'Konuklar',
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'county_id' => 956,
                'created_at' => NULL,
                'id' => 2707,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'county_id' => 957,
                'created_at' => NULL,
                'id' => 2708,
                'name' => 'Çekerek',
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'county_id' => 957,
                'created_at' => NULL,
                'id' => 2709,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'county_id' => 957,
                'created_at' => NULL,
                'id' => 2710,
                'name' => 'Özükavak',
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'county_id' => 958,
                'created_at' => NULL,
                'id' => 2711,
                'name' => 'Halıköy',
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'county_id' => 958,
                'created_at' => NULL,
                'id' => 2712,
                'name' => 'Kadışehri',
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'county_id' => 958,
                'created_at' => NULL,
                'id' => 2713,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'county_id' => 959,
                'created_at' => NULL,
                'id' => 2714,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'county_id' => 959,
                'created_at' => NULL,
                'id' => 2715,
                'name' => 'Yozgat',
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'county_id' => 960,
                'created_at' => NULL,
                'id' => 2716,
                'name' => 'Dedefakılı',
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'county_id' => 960,
                'created_at' => NULL,
                'id' => 2717,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'county_id' => 960,
                'created_at' => NULL,
                'id' => 2718,
                'name' => 'Ozan',
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'county_id' => 960,
                'created_at' => NULL,
                'id' => 2719,
                'name' => 'Saraykent',
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'county_id' => 961,
                'created_at' => NULL,
                'id' => 2720,
                'name' => 'Karayakup',
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'county_id' => 961,
                'created_at' => NULL,
                'id' => 2721,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'county_id' => 961,
                'created_at' => NULL,
                'id' => 2722,
                'name' => 'Sarıkaya',
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'county_id' => 962,
                'created_at' => NULL,
                'id' => 2723,
                'name' => 'Araplı',
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'county_id' => 962,
                'created_at' => NULL,
                'id' => 2724,
                'name' => 'Bahadın',
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'county_id' => 962,
                'created_at' => NULL,
                'id' => 2725,
                'name' => 'Çiğdemli',
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'county_id' => 962,
                'created_at' => NULL,
                'id' => 2726,
                'name' => 'Doğankent',
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'county_id' => 962,
                'created_at' => NULL,
                'id' => 2727,
                'name' => 'Eymir',
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'county_id' => 962,
                'created_at' => NULL,
                'id' => 2728,
                'name' => 'Gülşehri',
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'county_id' => 962,
                'created_at' => NULL,
                'id' => 2729,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'county_id' => 962,
                'created_at' => NULL,
                'id' => 2730,
                'name' => 'Sorgun',
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'county_id' => 962,
                'created_at' => NULL,
                'id' => 2731,
                'name' => 'Yeniyer',
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'county_id' => 963,
                'created_at' => NULL,
                'id' => 2732,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'county_id' => 963,
                'created_at' => NULL,
                'id' => 2733,
                'name' => 'Şefaatli',
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'county_id' => 964,
                'created_at' => NULL,
                'id' => 2734,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'county_id' => 964,
                'created_at' => NULL,
                'id' => 2735,
                'name' => 'Yenifakılı',
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'county_id' => 965,
                'created_at' => NULL,
                'id' => 2736,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'county_id' => 965,
                'created_at' => NULL,
                'id' => 2737,
                'name' => 'Yerköy',
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'county_id' => 966,
                'created_at' => NULL,
                'id' => 2738,
                'name' => 'Alaplı',
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'county_id' => 966,
                'created_at' => NULL,
                'id' => 2739,
                'name' => 'Gümeli',
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'county_id' => 966,
                'created_at' => NULL,
                'id' => 2740,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'county_id' => 967,
                'created_at' => NULL,
                'id' => 2741,
                'name' => 'Çaycuma',
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'county_id' => 967,
                'created_at' => NULL,
                'id' => 2742,
                'name' => 'Filyos',
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'county_id' => 967,
                'created_at' => NULL,
                'id' => 2743,
                'name' => 'Karapınar',
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'county_id' => 967,
                'created_at' => NULL,
                'id' => 2744,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'county_id' => 967,
                'created_at' => NULL,
                'id' => 2745,
                'name' => 'Nebioğlu',
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'county_id' => 967,
                'created_at' => NULL,
                'id' => 2746,
                'name' => 'Perşembe',
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'county_id' => 967,
                'created_at' => NULL,
                'id' => 2747,
                'name' => 'Saltukova',
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'county_id' => 968,
                'created_at' => NULL,
                'id' => 2748,
                'name' => 'Çaydeğirmeni',
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'county_id' => 968,
                'created_at' => NULL,
                'id' => 2749,
                'name' => 'Devrek',
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'county_id' => 968,
                'created_at' => NULL,
                'id' => 2750,
                'name' => 'Eğerci',
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'county_id' => 968,
                'created_at' => NULL,
                'id' => 2751,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'county_id' => 969,
                'created_at' => NULL,
                'id' => 2752,
                'name' => 'Gülüç',
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'county_id' => 969,
                'created_at' => NULL,
                'id' => 2753,
                'name' => 'Kandilli',
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'county_id' => 969,
                'created_at' => NULL,
                'id' => 2754,
                'name' => 'Karadenizereğli',
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'county_id' => 969,
                'created_at' => NULL,
                'id' => 2755,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'county_id' => 969,
                'created_at' => NULL,
                'id' => 2756,
                'name' => 'Ormanlı',
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'county_id' => 970,
                'created_at' => NULL,
                'id' => 2757,
                'name' => 'Bakacakkadı',
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'county_id' => 970,
                'created_at' => NULL,
                'id' => 2758,
                'name' => 'Gökçebey',
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'county_id' => 970,
                'created_at' => NULL,
                'id' => 2759,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'county_id' => 971,
                'created_at' => NULL,
                'id' => 2760,
                'name' => 'Çatalağzı',
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'county_id' => 971,
                'created_at' => NULL,
                'id' => 2761,
                'name' => 'Gelik',
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'county_id' => 971,
                'created_at' => NULL,
                'id' => 2762,
                'name' => 'Kilimli',
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'county_id' => 971,
                'created_at' => NULL,
                'id' => 2763,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'county_id' => 971,
                'created_at' => NULL,
                'id' => 2764,
                'name' => 'Muslu',
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'county_id' => 972,
                'created_at' => NULL,
                'id' => 2765,
                'name' => 'Kozlu',
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'county_id' => 972,
                'created_at' => NULL,
                'id' => 2766,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'county_id' => 973,
                'created_at' => NULL,
                'id' => 2767,
                'name' => 'Beycuma',
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'county_id' => 973,
                'created_at' => NULL,
                'id' => 2768,
                'name' => 'Elvanpazarcık',
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'county_id' => 973,
                'created_at' => NULL,
                'id' => 2769,
                'name' => 'Karaman',
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'county_id' => 973,
                'created_at' => NULL,
                'id' => 2770,
                'name' => 'Merkezköyler',
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'county_id' => 973,
                'created_at' => NULL,
                'id' => 2771,
                'name' => 'Zonguldak',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
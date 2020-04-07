<?php

use Illuminate\Database\Seeder;
use App\Models\Tables;

class TablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // e_hiiku_seiseki
        Tables::firstOrCreate(
            [
                'id' => '1',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
            ]
        );

        // e_hiiku_saiketsu_rireki
        Tables::firstOrCreate(
            [
                'id' => '2',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
            ]
        );

        // e_nobels_shinzaiko
        Tables::firstOrCreate(
            [
                'id' => '3',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
            ]
        );

        // e_anythings
        Tables::firstOrCreate(
            [
                'id' => '4	',
            ],
            [
                'table_name' => 'e_anythings',
            ]
        );

        // anything
        Tables::firstOrCreate(
            [
                'id' => '5	',
            ],
            [
                'table_name' => 'anything',
            ]
        );
    }
}

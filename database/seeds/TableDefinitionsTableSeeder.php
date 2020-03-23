<?php

use Illuminate\Database\Seeder;
use App\Models\TableDefinition;

class TableDefinitionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // e_hiiku_seiseki
        TableDefinition::firstOrCreate(
            [
                'id' => '1',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'no',
                'data_type' => 'int'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '2',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'jikajihyo',
                'data_type' => 'varchar',
                'length' => 10,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '3',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'kotai_no',
                'data_type' => 'varchar',
                'length' => 255,
                'validation' => 'required|digits_between:9,10|integer|check_digit'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '4',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'birth_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '5',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'shurui',
                'data_type' => 'varchar',
                'length' => 16
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '6',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'chichioya',
                'data_type' => 'varchar',
                'length' => 50
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '7',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'donyuji_weight',
                'data_type' => 'decimal',
                'maximum_number' => 8,
                'decimal_part' => 2
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '8',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'donyu_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '9',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'donyu_saki',
                'data_type' => 'varchar',
                'length' => 50
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '10',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'donyu_price',
                'data_type' => 'int'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '11',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'donyu_bokujo',
                'data_type' => 'varchar',
                'length' => 30
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '12',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'weight_5month',
                'data_type' => 'decimal',
                'maximum_number' => 8,
                'decimal_part' => 0
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '13',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'shukka_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '14',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'shukka_saki',
                'data_type' => 'varchar',
                'length' => 50
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '15',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'shukka_weight',
                'data_type' => 'decimal',
                'maximum_number' => 8,
                'decimal_part' => 2
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '16',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'shukka_getsurei',
                'data_type' => 'decimal',
                'maximum_number' => 6,
                'decimal_part' => 0
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '17',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'issan_dannen',
                'data_type' => 'varchar',
                'length' => 5
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '18',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'hiiku_kikan',
                'data_type' => 'decimal',
                'maximum_number' => 6,
                'decimal_part' => 1
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '19',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'edaniku_no',
                'data_type' => 'int'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '20',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'eda_weight',
                'data_type' => 'decimal',
                'maximum_number' => 8,
                'decimal_part' => 2
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '21',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'price',
                'data_type' => 'decimal',
                'maximum_number' => 9,
                'decimal_part' => 0
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '22',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'naizou',
                'data_type' => 'int'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '23',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'shukka_price',
                'data_type' => 'decimal',
                'maximum_number' => 9,
                'decimal_part' => 0
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '24',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'kikaku',
                'data_type' => 'char',
                'length' => 2
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '25',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'kyousaichou',
                'data_type' => 'decimal',
                'maximum_number' => 8,
                'decimal_part' => 2
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '26',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'bara_atsusa',
                'data_type' => 'decimal',
                'maximum_number' => 8,
                'decimal_part' => 2
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '27',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'hika_shibou',
                'data_type' => 'decimal',
                'maximum_number' => 8,
                'decimal_part' => 2
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '28',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'budomari_kijunchi',
                'data_type' => 'decimal',
                'maximum_number' => 8,
                'decimal_part' => 2
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '29',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'bms_no',
                'data_type' => 'decimal',
                'maximum_number' => 8,
                'decimal_part' => 2
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '30',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'shibou_kouzatsu',
                'data_type' => 'tinyint'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '31',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'bcs_no',
                'data_type' => 'decimal',
                'maximum_number' => 8,
                'decimal_part' => 2
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '32',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'koutaku',
                'data_type' => 'tinyint',
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '33',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'toukyu',
                'data_type' => 'tinyint',
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '34',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'shimari',
                'data_type' => 'tinyint',
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '35',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'kime',
                'data_type' => 'tinyint',
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '36',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'toukyu2',
                'data_type' => 'tinyint',
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '37',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'bfs_no',
                'data_type' => 'decimal',
                'maximum_number' => 8,
                'decimal_part' => 2
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '38',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'koutaku_shitsu',
                'data_type' => 'tinyint',
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '39',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'toukyu3',
                'data_type' => 'tinyint',
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '40',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'kashi1',
                'data_type' => 'varchar',
                'length' => 15,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '41',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'kashi1_bui',
                'data_type' => 'varchar',
                'length' => 15,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '42',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'kashi2',
                'data_type' => 'varchar',
                'length' => 15,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '43',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'kashi2_bui',
                'data_type' => 'varchar',
                'length' => 15,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '44',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'kashi3',
                'data_type' => 'varchar',
                'length' => 15,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '45',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'kashi3_bui',
                'data_type' => 'varchar',
                'length' => 15,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '46',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'remark',
                'data_type' => 'varchar',
                'length' => 50,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '47',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'ryuzan_shizan',
                'data_type' => 'varchar',
                'length' => 23,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '48',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'kyuyo_shiryo',
                'data_type' => 'varchar',
                'length' => 30,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '49',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'shukka2_date',
                'data_type' => 'date',
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '50',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'shozai',
                'data_type' => 'varchar',
                'length' => 15,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '51',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'issan_ikkan',
                'data_type' => 'varchar',
                'length' => 5,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '52',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'ikkan_seibetsu',
                'data_type' => 'varchar',
                'length' => 20,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '53',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'donyuji_dg',
                'data_type' => 'decimal',
                'maximum_number' => 8,
                'decimal_part' => 2,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '54',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'ikkan_donyuji_dg_class',
                'data_type' => 'varchar',
                'length' => 20,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '55',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'ikkan_mtg_dg',
                'data_type' => 'decimal',
                'maximum_number' => 8,
                'decimal_part' => 2,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '56',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'herbgyu_dounyuji_dg_class',
                'data_type' => 'varchar',
                'length' => 20,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '57',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'gyusha',
                'data_type' => 'varchar',
                'length' => 30,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '58',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'waku',
                'data_type' => 'varchar',
                'length' => 50,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '59',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'kashi_songai_price',
                'data_type' => 'decimal',
                'maximum_number' => 9,
                'decimal_part' => 0,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '60',
            ],
            [
                'table_name' => 'e_hiiku_seiseki',
                'column_name' => 'shuseigo_price',
                'data_type' => 'decimal',
                'maximum_number' => 9,
                'decimal_part' => 0,
            ]
        );


        // e_hiiku_saiketsu_rireki
        TableDefinition::firstOrCreate(
            [
                'id' => '61',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'shukabi',
                'data_type' => 'date',
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '62',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'kotai_no',
                'data_type' => 'varchar',
                'length' => 255,
                'validation' => 'required|digits_between:9,10|integer|check_digit'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '63',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'jikajihyo',
                'data_type' => 'varchar',
                'length' => 10,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '64',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'stage',
                'data_type' => 'varchar',
                'length' => 50,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '65',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'VA',
                'data_type' => 'decimal',
                'maximum_number' => 10,
                'decimal_part' => 4,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '66',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'VE',
                'data_type' => 'decimal',
                'maximum_number' => 10,
                'decimal_part' => 4,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '67',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'BetaCarotin',
                'data_type' => 'decimal',
                'maximum_number' => 10,
                'decimal_part' => 4,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '68',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'TCHO',
                'data_type' => 'decimal',
                'maximum_number' => 10,
                'decimal_part' => 4,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '69',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'BUN',
                'data_type' => 'decimal',
                'maximum_number' => 10,
                'decimal_part' => 4
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '70',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'GOT',
                'data_type' => 'int',
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '71',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'GammaGT',
                'data_type' => 'int',
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '72',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'Kalium',
                'data_type' => 'decimal',
                'maximum_number' => 10,
                'decimal_part' => 4,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '73',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'Ca',
                'data_type' => 'decimal',
                'maximum_number' => 10,
                'decimal_part' => 4,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '74',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'TbiL',
                'data_type' => 'decimal',
                'maximum_number' => 10,
                'decimal_part' => 4,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '75',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'Cre',
                'data_type' => 'decimal',
                'maximum_number' => 10,
                'decimal_part' => 4,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '76',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'Se',
                'data_type' => 'decimal',
                'maximum_number' => 10,
                'decimal_part' => 4,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '77',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'Phosphorus',
                'data_type' => 'decimal',
                'maximum_number' => 10,
                'decimal_part' => 4,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '78',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'douitsu_kotai',
                'data_type' => 'varchar',
                'length' => 50,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '79',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'wakei_tanki',
                'data_type' => 'varchar',
                'length' => 50,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '80',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'holstein',
                'data_type' => 'varchar',
                'length' => 50,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '81',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'oyako_duke',
                'data_type' => 'varchar',
                'length' => 50,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '82',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'meijin_nakanaka',
                'data_type' => 'varchar',
                'length' => 50,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '83',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'gokagetsu10dai',
                'data_type' => 'varchar',
                'length' => 50,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '84',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'tsujougai_saiketsu',
                'data_type' => 'varchar',
                'length' => 50,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '85',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'gyusha',
                'data_type' => 'varchar',
                'length' => 30,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '86',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'waku',
                'data_type' => 'varchar',
                'length' => 20,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '87',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'setsumei2',
                'data_type' => 'varchar',
                'length' => 50,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '88',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'shuka_month',
                'data_type' => 'varchar',
                'length' => 50,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '89',
            ],
            [
                'table_name' => 'e_hiiku_saiketsu_rireki',
                'column_name' => 'saiketsuji_weight',
                'data_type' => 'decimal',
                'maximum_number' => 8,
                'decimal_part' => 2,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '90',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'no',
                'data_type' => 'int'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '91',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'jikajihyo',
                'data_type' => 'varchar',
                'length' => 10,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '92',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'kotai_no',
                'data_type' => 'varchar',
                'length' => 255,
                'validation' => 'required|digits_between:9,10|integer|check_digit'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '93',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'birth_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '94',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'getsurei',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '95',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'bokujo',
                'data_type' => 'varchar',
                'length' => 10,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '96',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'gyusha',
                'data_type' => 'varchar',
                'length' => 30,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '97',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'waku',
                'data_type' => 'varchar',
                'length' => 50,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '98',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'seibetsu',
                'data_type' => 'varchar',
                'length' => 20,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '99',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'ido_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '100',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'shurui',
                'data_type' => 'varchar',
                'length' => 16,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '101',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'chichioya',
                'data_type' => 'varchar',
                'length' => 50,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '102',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'donyuji_weight',
                'data_type' => 'decimal',
                'maximum_number' => 8,
                'decimal_part' => 2
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '103',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'donyu_date',
                'data_type' => '',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '104',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'man_2_sai',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '105',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'sairan_koho_kikan_nissu',
                'data_type' => 'int'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '106',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'donyu_saki',
                'data_type' => 'varchar',
                'length' => 50,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '107',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'donyu_price',
                'data_type' => 'int'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '108',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'donyu_bokujo',
                'data_type' => 'varchar',
                'length' => 30,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '109',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'hiiku_kaishi_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '110',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'hiiku_kikan',
                'data_type' => 'decimal',
                'maximum_number' => 6,
                'decimal_part' => 1
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '111',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'genzai_jotai',
                'data_type' => 'varchar',
                'length' => 30,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '112',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'issan_ikkan',
                'data_type' => 'varchar',
                'length' => 5,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '113',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'weight_kaishiji',
                'data_type' => 'decimal',
                'maximum_number' => 8,
                'decimal_part' => 2
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '114',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'taisoku_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '115',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'weight_5month',
                'data_type' => 'int'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '116',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'dead_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '117',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'shukka_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '118',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'shukka_saki',
                'data_type' => 'varchar',
                'length' => 50,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '119',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'shukka_weight',
                'data_type' => 'decimal',
                'maximum_number' => 8,
                'decimal_part' => 2
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '120',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'shukka2_saki',
                'data_type' => 'varchar',
                'length' => 50,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '121',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'switch_no',
                'data_type' => 'int'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '122',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'edaniku_price',
                'data_type' => 'int'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '123',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'naizo',
                'data_type' => 'int'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '124',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'naizo_agurisu',
                'data_type' => 'int'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '125',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'kagenzan1',
                'data_type' => 'int'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '126',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'kagenzan2',
                'data_type' => 'int'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '127',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'shukka_price',
                'data_type' => 'int'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '128',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'nyukin_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '129',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'marukin_hoten_price',
                'data_type' => 'int'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '130',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'shiharai_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '131',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'marukin_tsumitate_price',
                'data_type' => 'int'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '132',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'issan_dannen',
                'data_type' => 'varchar',
                'length' => 5
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '133',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'biko',
                'data_type' => 'varchar',
                'length' => 255
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '134',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'meigo',
                'data_type' => 'varchar',
                'length' => 12
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '135',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'shoyusha',
                'data_type' => 'varchar',
                'length' => 6
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '136',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'oyazuke',
                'data_type' => 'varchar',
                'length' => 5
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '137',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'sembatsu_wagyu',
                'data_type' => 'varchar',
                'length' => 5
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '138',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'touroku_sho',
                'data_type' => 'varchar',
                'length' => 5
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '139',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'chokkin_ishoku_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '140',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'chokkin_shuyugyu',
                'data_type' => 'varchar',
                'length' => 11
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '141',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'chokkin_kyorangyu',
                'data_type' => 'varchar',
                'length' => 13
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '142',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'ishoku_date1',
                'data_type' => 'date',
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '143',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'shuyugyu1',
                'data_type' => 'varchar',
                'length' => 11
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '144',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'kyorangyu1',
                'data_type' => 'varchar',
                'length' => 14
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '145',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'ishoku_date2',
                'data_type' => 'date',
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '146',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'shuyugyu2',
                'data_type' => 'varchar',
                'length' => 11
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '147',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'kyorangyu2',
                'data_type' => 'varchar',
                'length' => 14
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '148',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'ishoku_date3',
                'data_type' => 'date',
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '149',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'shuyugyu3',
                'data_type' => 'varchar',
                'length' => 11
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '150',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'kyorangyu3',
                'data_type' => 'varchar',
                'length' => 14
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '151',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'ishoku_date4',
                'data_type' => 'date',
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '152',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'shuyugyu4',
                'data_type' => 'varchar',
                'length' => 11
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '153',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'kyorangyu4',
                'data_type' => 'varchar',
                'length' => 14
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '154',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'ishoku_date5',
                'data_type' => 'date',
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '155',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'shuyugyu5',
                'data_type' => 'varchar',
                'length' => 11
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '156',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'kyorangyu5',
                'data_type' => 'varchar',
                'length' => 14
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '157',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'ishoku_date6',
                'data_type' => 'date',
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '158',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'shuyugyu6',
                'data_type' => 'varchar',
                'length' => 11
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '159',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'kyorangyu6',
                'data_type' => 'varchar',
                'length' => 14
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '160',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'ishoku_date7',
                'data_type' => 'date',
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '161',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'shuyugyu7',
                'data_type' => 'varchar',
                'length' => 11
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '162',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'kyorangyu7',
                'data_type' => 'varchar',
                'length' => 14
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '163',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'ishoku_date8',
                'data_type' => 'date',
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '164',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'shuyugyu8',
                'data_type' => 'varchar',
                'length' => 11
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '165',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'kyorangyu8',
                'data_type' => 'varchar',
                'length' => 14
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '166',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'ishoku_date9',
                'data_type' => 'date',
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '167',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'shuyugyu9',
                'data_type' => 'varchar',
                'length' => 11
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '168',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'kyorangyu9',
                'data_type' => 'varchar',
                'length' => 14
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '169',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'ninshin_kantei',
                'data_type' => 'varchar',
                'length' => 1
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '170',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'kantei_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '171',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'ishoku_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '172',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'shussan_yotei_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '173',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'shussan_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '174',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'koushi_id',
                'data_type' => 'varchar',
                'length' => 21
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '175',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'ninshin_nissu',
                'data_type' => 'int'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '176',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'kamishihoro_tennyu_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '177',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'kamishihoro_tenshutsu_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '178',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'kato_bokujo_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '179',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'geboku_date1',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '180',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'kamikata_bokujo_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '181',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'geboku_date2',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '182',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'fukuzawa_bokujo_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '183',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'geboku_date3',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '184',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'hokuryu_chikusan_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '185',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'geboku_date4',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '186',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'ashoro_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '187',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'geboku_date5',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '188',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'kimura_bokujo_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '189',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'geboku_date6',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '190',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'otohuke_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '191',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'geboku_date7',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '192',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'pure_f_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '193',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'geboku_date8',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '194',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'iida_bokujo_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '195',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'geboku_date9',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '196',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'nito_bokujo_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '197',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'teshikaga_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '198',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'geboku_date10',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '199',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'df_ikusei_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '200',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'geboku_date11',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '201',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'sakutei',
                'data_type' => 'varchar',
                'length' => 255
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '202',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'tochiku_kijun_getsurei',
                'data_type' => 'int'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '203',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'tochiku_kijun_hiiku_kikan',
                'data_type' => 'int'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '204',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'tmr2',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '205',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'tmr3_1',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '206',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'tmr3_2',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '207',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'tmr4',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '208',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'saiketsu_kekkago_shochi_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '209',
            ],
            [
                'table_name' => 'e_nobels_shinzaiko',
                'column_name' => 'totatsu_8month_date',
                'data_type' => 'date'
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '210',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'a',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '211',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'b',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '212',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'c',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '213',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'd',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '214',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'e',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '215',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'f',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '216',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'g',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '217',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'h',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '218',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'i',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '219',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'j',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '220',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'k',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '221',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'l',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '222',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'm',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '223',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'n',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '224',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'o',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '225',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'p',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '226',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'q',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '227',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'r',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '228',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 's',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '229',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 't',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '230',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'u',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '231',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'v',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '232',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'w',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '233',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'x',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '234',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'y',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '235',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'z',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '236',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'aa',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '237',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'ab',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '238',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'ac',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '239',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'ad',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '240',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'ae',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '241',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'af',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '242',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'ag',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '243',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'ah',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '244',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'ai',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '245',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'aj',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '246',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'ak',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '247',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'al',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '248',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'am',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '249',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'an',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '250',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'ao',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '251',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'ap',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '252',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'aq',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '253',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'ar',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '254',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'as',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '255',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'at',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '256',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'au',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '257',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'av',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '258',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'aw',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '259',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'ax',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '260',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'ay',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '261',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'az',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '262',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'ba',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '263',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'bb',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '264',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'bc',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '265',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'bd',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '266',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'be',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '267',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'bf',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '268',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'bg',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '269',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'bh',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '270',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'bi',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '271',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'bj',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '272',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'bk',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '273',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'bl',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '274',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'bm',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '275',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'bn',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '276',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'bo',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '277',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'bp',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '278',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'bq',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '279',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'br',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '280',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'bs',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '281',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'bt',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '282',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'bu',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '283',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'bv',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '284',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'bw',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '285',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'bx',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '286',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'by',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '287',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'bz',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '288',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'ca',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '289',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'cb',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '290',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'cc',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '291',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'cd',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '292',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'ce',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '293',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'cf',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '294',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'cg',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '295',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'ch',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '296',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'ci',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '297',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'cj',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '298',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'ck',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '299',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'cl',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '300',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'cm',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '301',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'cn',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '302',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'co',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '303',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'cp',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '304',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'cq',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '305',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'cr',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '306',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'cs',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '307',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'ct',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '308',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'cu',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );

        TableDefinition::firstOrCreate(
            [
                'id' => '309',
            ],
            [
                'table_name' => 'e_anythings',
                'column_name' => 'cv',
                'data_type' => 'varchar',
                'length' => 100,
            ]
        );
    }
}

<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'id' => 1,
                'name' => '乃木坂46 真夏の全国ツアー2019 ＜東京＞明治神宮野球場',
                'performer' => '乃木坂46',
                'prefecture' => '東京',
                'place' => '明治神宮野球場',
                'datetime' => '2019-08-30（金）、2019-08-31（土）、2019-09-01（日）',
                'url' => 'http://www.nogizaka46.com',
                'uuid' => '5a44b5d8-c1dd-45a8-b9f6-b8c34a9c6ed1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'name' => ' 欅坂46 夏の全国アリーナツアー2019《追加公演》',
                'performer' => '欅坂46',
                'prefecture' => '東京',
                'place' => '東京ドーム',
                'datetime' => '2019-9-18（水）、2019-9-19（木）',
                'url' => 'http://www.keyakizaka46.com/',
                'uuid' => 'ae2cb18f-ee69-4463-91f6-47a2a53bb0dc',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  
            ],
        ]);
    }
}

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
                'name' => '欅坂46 夏の全国アリーナツアー2019《追加公演》',
                'performer' => '欅坂46',
                'prefecture' => '東京',
                'place' => '東京ドーム',
                'from_date_time' => '2019-09-18 00:00:00',
                'to_date_time' => '2019-09-19 23:59:59',
                'url' => 'http://www.keyakizaka46.com/',
                'uuid' => 'ae2cb18f-ee69-4463-91f6-47a2a53bb0dc',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  
            ],
            [
                'id' => 2,
                'name' => '日向坂46 3rdシングル発売記念ワンマンライブ',
                'performer' => '日向坂46',
                'prefecture' => '埼玉',
                'place' => 'さいたまスーパーアリーナ',
                'from_date_time' => '2019-09-26 00:00:00',
                'to_date_time' => '2019-09-26 23:59:59',
                'url' => 'https://www.hinatazaka46.com/',
                'uuid' => 'ec7a3da7-55de-4be4-b072-fb41bc8ee444',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  
            ],
            [
                'id' => 3,
                'name' => '乃木坂46 アンダーライブ2019 at 幕張メッセ',
                'performer' => '乃木坂46',
                'prefecture' => '千葉',
                'place' => '幕張メッセ',
                'from_date_time' => '2019-10-10 00:00:00',
                'to_date_time' => '2019-10-11 23:59:59',
                'url' => 'http://www.nogizaka46.com',
                'uuid' => '9a8c1909-0978-41b0-a43b-8695a7ae47ca',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}

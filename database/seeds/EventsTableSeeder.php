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
                'id' => 8,
                'name' => '土浦全国花火競技大会',
                'performer' => '土浦全国花火競技大会実行委員会',
                'prefecture' => '茨城',
                'place' => '土浦市佐野子地内桜川畔',
                'hashtag' => '#土浦全国花火競技大会 #花火大会',
                'from_date_time' => '2019-10-26 18:00:00',
                'to_date_time' => '2019-10-26 20:30:00',
                'url' => 'http://www.tsuchiura-hanabi.jp',
                'uuid' => '5c627046-35be-4815-85ad-ce02bb3735b1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 7,
                'name' => 'NBA JAPAN GAMES 2019',
                'performer' => 'NBA、トロント・ラプターズ、ヒューストン・ロケッツ',
                'prefecture' => '埼玉',
                'place' => 'さいたまスーパーアリーナ',
                'hashtag' => '#NBA #NBAジャパンゲームズ',
                'from_date_time' => '2019-10-08 19:00:00',
                'to_date_time' => '2019-10-10 23:59:59',
                'url' => 'https://ticket.rakuten.co.jp/features/nbajapan/index.html/',
                'uuid' => '875c7452-82b1-4df4-9a64-d5b7ac5e0347',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'name' => 'Backstreet Boys DNA World Tour',
                'performer' => 'Backstreet Boys',
                'prefecture' => '埼玉',
                'place' => 'さいたまスーパーアリーナ',
                'hashtag' => '#バックストリートボーイズ #BackstreetBoys #DNAWorldTour',
                'from_date_time' => '2019-10-12 16:30:00',
                'to_date_time' => '2019-10-13 23:59:59',
                'url' => 'https://backstreetboysjapantour2019.com',
                'uuid' => '643342fa-9ef3-4151-8300-606e973f06ca',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'name' => '阿蘇ロックフェスティバル2019 in 北九州',
                'performer' => '橋本環奈 など',
                'prefecture' => '熊本',
                'place' => 'ミクニワールドスタジアム北九州',
                'hashtag' => '#阿蘇ロックフェスティバル #泉谷しげる #さだまさし #AK69 #シシドカフカ #竹原ピストル #愛美 #大塚紗英 #西本りみ #ももいろクローバーZ #RAISEASUILEN #橋本環奈 #マサル',
                'from_date_time' => '2019-09-29 09:00:00',
                'to_date_time' => '2019-09-29 23:59:59',
                'url' => 'https://aso-rockfes.com',
                'uuid' => '1e1511b3-df36-45cf-a96f-d8b18a49bce1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'name' => '藤原さくら Twilight Tour 2019',
                'performer' => '藤原さくら',
                'prefecture' => '東京',
                'place' => 'LIQUIDROOM',
                'hashtag' => '#藤原さくら ##TwilightTour2019',
                'from_date_time' => '2019-09-27 18:00:00',
                'to_date_time' => '2019-09-27 23:59:59',
                'url' => 'https://www.fujiwarasakura.com/news/#n428',
                'uuid' => '780ea66c-82a7-49f0-ba60-0838ad66048d',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'name' => '乃木坂46 アンダーライブ2019 at 幕張メッセ',
                'performer' => '乃木坂46',
                'prefecture' => '千葉',
                'place' => '幕張メッセ',
                'hashtag' => '#乃木坂46 #アンダーライブ',
                'from_date_time' => '2019-10-10 00:00:00',
                'to_date_time' => '2019-10-11 23:59:59',
                'url' => 'http://www.nogizaka46.com',
                'uuid' => '9a8c1909-0978-41b0-a43b-8695a7ae47ca',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'name' => '日向坂46 3rdシングル発売記念ワンマンライブ',
                'performer' => '日向坂46',
                'prefecture' => '埼玉',
                'place' => 'さいたまスーパーアリーナ',
                'hashtag' => '#日向坂46 #ワンマンライブ',
                'from_date_time' => '2019-09-26 00:00:00',
                'to_date_time' => '2019-09-26 23:59:59',
                'url' => 'https://www.hinatazaka46.com/',
                'uuid' => 'ec7a3da7-55de-4be4-b072-fb41bc8ee444',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  
            ],
            [
                'id' => 1,
                'name' => '欅坂46 夏の全国アリーナツアー2019《追加公演》',
                'performer' => '欅坂46',
                'prefecture' => '東京',
                'place' => '東京ドーム',
                'hashtag' => '#欅坂46 #欅坂46全国ツアー #欅坂46全国ツアー2019 #欅坂46東京ドーム #欅坂46東京ドーム公演',
                'from_date_time' => '2019-09-18 00:00:00',
                'to_date_time' => '2019-09-19 23:59:59',
                'url' => 'http://www.keyakizaka46.com/',
                'uuid' => 'ae2cb18f-ee69-4463-91f6-47a2a53bb0dc',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  
            ],
        ]);
    }
}

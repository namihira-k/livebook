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
                'id' => 21,
                'name' => 'Perfume 8th Tour 2020 P Cubed in Dome',
                'performer' => 'Perfume',
                'prefecture' => '東京',
                'place' => '東京ドーム',
                'hashtag' => '#Perfume #prfm #Pcubed',
                'from_date_time' => '2020-02-25 18:30:00',
                'to_date_time' => '2020-02-26 21:00:00',
                'url' => 'http://www.perfume-web.jp/cam/dometour2020/',
                'uuid' => '55488327-c9ea-4b01-9750-ac444a97dab6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 20,
                'name' => 'Hey! Say! JUMP DOME TOUR 2019-2020 PARADE',
                'performer' => 'Hey! Say! JUMP',
                'prefecture' => '東京',
                'place' => '東京ドーム',
                'hashtag' => '#PARADE #HSJ_PARADE #HeySayJUMP',
                'from_date_time' => '2019-12-28 18:00:00',
                'to_date_time' => '2020-01-01 21:00:00',
                'url' => 'https://www.johnnys-net.jp/page?id=consta&artist=15',
                'uuid' => 'c7f7d18d-57b2-497a-8383-587cddfecac1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 19,
                'name' => 'AAA DOME TOUR 2019',
                'performer' => 'AAA',
                'prefecture' => '東京',
                'place' => '東京ドーム',
                'hashtag' => '#AAA #AAADOMETOUR2019 #AAADOMETOUR2019PLUS #AAAチケット',
                'from_date_time' => '2019-12-06 18:00:00',
                'to_date_time' => '2019-12-08 21:00:00',
                'url' => 'https://avex.jp/aaa/live/tour.php?id=1001392',
                'uuid' => '6a7d535a-38d5-48e9-ae70-5c2b73177e7d',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 18,
                'name' => '東方神起 LIVE TOUR 2019 -XV-',
                'performer' => '東方神起',
                'prefecture' => '東京',
                'place' => '東京ドーム',
                'hashtag' => '#東方神起 #XV #toho15th #TOHOSHINK',
                'from_date_time' => '2019-11-19 18:00:00',
                'to_date_time' => '2019-11-21 21:00:00',
                'url' => 'https://toho-jp.net/en/live/tour.php?id=1001412',
                'uuid' => 'ec6ce53d-d1ea-445c-af8b-a786309f633a',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 17,
                'name' => 'デザインフェスタ vol.50',
                'performer' => 'Design Festa Ltd.',
                'prefecture' => '東京',
                'place' => '東京ビックサイト',
                'hashtag' => '#デザインフェスタ #デザフェス #デザフェス50',
                'from_date_time' => '2019-11-16 11:00:00',
                'to_date_time' => '2019-11-17 19:00:00',
                'url' => 'https://designfesta.com',
                'uuid' => '27ec1c85-f6a4-4da6-83f0-939d8f01da62',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 16,
                'name' => 'GENERATIONS LIVE TOUR 2019 少年クロニクル',
                'performer' => 'GENERATIONS',
                'prefecture' => '東京',
                'place' => '東京ドーム',
                'hashtag' => '#GENERATIONS #東京ドーム',
                'from_date_time' => '2019-11-03 17:00:00',
                'to_date_time' => '2019-11-04 20:00:00',
                'url' => 'https://m.tribe-m.jp/artist/index/242',
                'uuid' => '44c90955-63c3-4d16-a95a-e3b13b8be985',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 15,
                'name' => 'BUMP OF CHICKEN TOUR 2019 aurora ark',
                'performer' => 'BUMP OF CHICKEN',
                'prefecture' => '東京',
                'place' => '東京ドーム',
                'hashtag' => '#BUMPOFCHICKEN #auroraark #東京ドーム',
                'from_date_time' => '2019-11-03 17:00:00',
                'to_date_time' => '2019-11-04 20:00:00',
                'url' => 'https://www.bumpofchicken.com/2019/',
                'uuid' => '948c96b0-2cb9-4a3a-8685-784db68c1254',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 14,
                'name' => 'ARASHI Anniversary Tour 5×20',
                'performer' => '嵐',
                'prefecture' => '東京',
                'place' => '東京ドーム',
                'hashtag' => '#嵐 #ARASHI #嵐5x20 #5x20',
                'from_date_time' => '2019-10-30 18:00:00',
                'to_date_time' => '2019-10-31 21:00:00',
                'url' => 'https://www.johnnys-net.jp/page?id=consta&artist=10',
                'uuid' => 'afa58959-4a1e-41e9-9506-53b8e064dd03',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 13,
                'name' => '乃木坂46 3・4期生ライブ',
                'performer' => '乃木坂46',
                'prefecture' => '東京',
                'place' => '国立代々木競技場 第一体育館',
                'hashtag' => '#乃木坂46 #3期4期合同ライブ',
                'from_date_time' => '2019-11-26 18:30:00',
                'to_date_time' => '2019-11-27 21:00:00',
                'url' => 'http://www.nogizaka46.com',
                'uuid' => '5d6dee58-1890-4ca8-a45a-b45eed8c3f0e',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 12,
                'name' => '鈴木愛理 LIVE TOUR 2019 ： LIVE PARTY No Live, No Life?',
                'performer' => '鈴木愛理',
                'prefecture' => '東京',
                'place' => 'Zepp Tokyo',
                'hashtag' => '#鈴木愛理 #あいりまにあ',
                'from_date_time' => '2019-12-21 18:30:00',
                'to_date_time' => '2019-12-21 21:00:00',
                'url' => 'https://www.airisuzuki-officialweb.com',
                'uuid' => 'df3a4cad-da0f-45db-867e-a8e19c161c06',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 11,
                'name' => 'ラグビーW杯 準々決勝 日本 対 南アフリカ',
                'performer' => '日本 南アフリカ',
                'prefecture' => '東京',
                'place' => '東京スタジアム',
                'hashtag' => '#ラグビー #rugby #ラグビーワールドカップ #RWC2019 #JPNvSAF',
                'from_date_time' => '2019-10-20 19:10:00',
                'to_date_time' => '2019-10-20 21:00:00',
                'url' => 'https://www.rugbyworldcup.com',
                'uuid' => '0fde0295-d3cd-44ac-a6d1-b858eb3eea7b',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 10,
                'name' => 'Chillin Vibes 2019',
                'performer' => '山崎まさよし など',
                'prefecture' => '大阪',
                'place' => '万博記念公園もみじ川芝生広場',
                'hashtag' => '#ChillinVibes #ACIDMAN #GLIMSPANKY #平井大 #藤巻亮太 #山崎まさよし #RyuMatsuyama #FM802弾き語り部 #蒼山幸子 #松本大 #LAMPINTERREN #Rei #みゆな',
                'from_date_time' => '2019-10-20 11:00:00',
                'to_date_time' => '2019-10-20 18:00:00',
                'url' => 'https://chillin-vibes.com',
                'uuid' => '89077174-cfcb-4f61-bdbe-86cb39943971',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 9,
                'name' => 'w-inds. Fes ADSR 2019',
                'performer' => 'w-inds. SKY-HI フェアリーズ FAKY など',
                'prefecture' => '東京',
                'place' => '豊洲PIT',
                'hashtag' => '#w_indsFes #ADSR2019 #w_inds #SKYHI #フェアリーズ #FAKY #RADIOFISH #BuZZ',
                'from_date_time' => '2019-10-20 16:00:00',
                'to_date_time' => '2019-10-20 20:00:00',
                'url' => 'https://twitter.com/winds_fes',
                'uuid' => '42dc8366-0b35-45d5-b2db-d3f257a51bc4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
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

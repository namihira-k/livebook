<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'id' => 54,
                'name' => 'THE YELLOW MONKEY 30th Anniversary LIVE',
                'performer' => 'THE YELLOW MONKEY',
                'prefecture' => '東京',
                'place' => '東京ドーム',
                'hashtag' => '#イエモン #TheYellowMonkey',
                'from_date_time' => '2020-11-3 15:30:00',
                'to_date_time' => '2020-12-28 21:00:00',
                'url' => 'https://cloud.theyellowmonkeysuper.jp/feature/30th_live',
                'uuid' => 'fbbb2d64-95f9-4e4f-8772-3ba63826e3ff',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 53,
                'name' => 'B’z SHOWCASE 2020 -5 ERAS 8820-',
                'performer' => 'B’z',
                'prefecture' => 'オンライン配信',
                'place' => 'オンライン配信',
                'hashtag' => '#Bz #5ERAS #SHOWCASE',
                'from_date_time' => '2020-10-31 19:00:00',
                'to_date_time' => '2020-11-29 23:59:59',
                'url' => 'http://bz-vermillion.com/showcase2020/',
                'uuid' => 'ff3eb83c-8760-457c-ae46-ed1d49f0ad5e',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 52,
                'name' => '欅坂46 THE LAST LIVE',
                'performer' => '欅坂46',
                'prefecture' => 'オンライン配信',
                'place' => 'オンライン配信',
                'hashtag' => '#欅坂46 #THELASTLIVE #ラストライブ',
                'from_date_time' => '2020-10-12 18:00:00',
                'to_date_time' => '2020-10-13 21:00:00',
                'url' => 'https://www.keyakizaka46.com/s/k46o/',
                'uuid' => '0e46638c-2f98-4638-9eaa-3a0bf9131ceb',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 51,
                'name' => 'aiko Love Like Rock 〜別枠ちゃんvol.2〜',
                'performer' => 'aiko',
                'prefecture' => 'オンライン配信',
                'place' => 'オンライン配信',
                'hashtag' => '#aiko',
                'from_date_time' => '2020-10-17 20:00:00',
                'to_date_time' => '2020-10-24 23:59:00',
                'url' => 'https://aiko.com/llr_betsu2/',
                'uuid' => 'f63f1661-ce92-44ec-96a8-ba420a06f405',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 50,
                'name' => 'DAICHI MIURA ONLINE LIVE The Choice is _____',
                'performer' => '三浦大知',
                'prefecture' => 'オンライン配信',
                'place' => 'オンライン配信',
                'hashtag' => '#三浦大知',
                'from_date_time' => '2020-10-10 19:00:00',
                'to_date_time' => '2020-10-18 23:59:00',
                'url' => 'https://avex.jp/daichi/',
                'uuid' => '1a01e68a-83dc-4824-9407-659431924fd3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 49,
                'name' => 'back number live film 2020 MAHOGANY',
                'performer' => 'back number',
                'prefecture' => 'オンライン配信',
                'place' => 'オンライン配信',
                'hashtag' => '#backnumber',
                'from_date_time' => '2020-09-22 19:00:00',
                'to_date_time' => '2020-09-24 23:59:00',
                'url' => 'https://backnumber.info/feature/livefilm2020mahogany',
                'uuid' => '03764cdb-c9b0-4da6-8d15-97a83965abee',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 48,
                'name' => 'back number live film 2020 ASH',
                'performer' => 'back number',
                'prefecture' => 'オンライン配信',
                'place' => 'オンライン配信',
                'hashtag' => '#backnumber',
                'from_date_time' => '2020-10-25 19:00:00',
                'to_date_time' => '2020-10-27 23:59:00',
                'url' => 'https://backnumber.info/feature/livefilm2020ash',
                'uuid' => '718f8f50-8204-4f80-a1ba-fe4e2bd18f52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 47,
                'name' => 'KOBUKURO STREAMING LIVE',
                'performer' => 'コブクロ',
                'prefecture' => 'オンライン配信',
                'place' => 'オンライン配信',
                'hashtag' => '#コブクロ',
                'from_date_time' => '2020-10-03 18:30:00',
                'to_date_time' => '2020-10-03 21:00:00',
                'url' => 'https://kobukuro.com/feature/streaming_live',
                'uuid' => '136a5508-3f30-466a-ac65-4535e19f2e44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 46,
                'name' => 'UVERworld LIVE 0925',
                'performer' => 'UVERworld',
                'prefecture' => 'オンライン配信',
                'place' => 'オンライン配信',
                'hashtag' => '#UVERworld',
                'from_date_time' => '2020-09-25 19:00:00',
                'to_date_time' => '2020-09-25 20:00:00',
                'url' => 'https://www.uverworld.jp/news/detail/1999',
                'uuid' => '5ff3b91c-e8e0-4a87-9105-fa154345c8a5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 45,
                'name' => 'アラフェス 2020 at 国立競技場',
                'performer' => '嵐',
                'prefecture' => 'オンライン配信',
                'place' => 'オンライン配信',
                'hashtag' => '#嵐 #ARASHI #アラフェス',
                'from_date_time' => '2020-11-3 12:00:00',
                'to_date_time' => '2020-11-3 21:00:00',
                'url' => 'https://online.johnnys-net.jp/s/jno/page/ARAFES2020?ima=1634',
                'uuid' => 'baf8c2c9-d56f-4ad5-87e8-f0cfe38e3e70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 44,
                'name' => 'sumika Online Live「Little Crown 2020」',
                'performer' => 'sumika',
                'prefecture' => 'オンライン配信',
                'place' => 'オンライン配信',
                'hashtag' => '#sumika #LittleCrown2020',
                'from_date_time' => '2020-09-25 20:00:00',
                'to_date_time' => '2020-09-25 22:00:00',
                'url' => 'http://www.sumika-official.com/home/',
                'uuid' => 'a598168c-38f1-4177-9de7-4f2bf34563fa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 43,
                'name' => 'ONE OK ROCK 2020 Field of Wonder at Stadium Live Streaming',
                'performer' => 'ONE OK ROCK',
                'prefecture' => 'オンライン配信',
                'place' => 'オンライン配信',
                'hashtag' => '#ONEOKROCK #FIELDOFWONDER',
                'from_date_time' => '2020-10-11 17:00:00',
                'to_date_time' => '2020-10-11 22:00:00',
                'url' => 'https://20201011.oneokrock.com',
                'uuid' => 'e81bbe37-af83-4f71-ab4e-bac19dca0423',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 42,
                'name' => 'BSいきものがかり DIGITAL FES 2020',
                'performer' => 'いきものがかり',
                'prefecture' => 'オンライン配信',
                'place' => 'オンライン配信',
                'hashtag' => '#いきものがかり #森山直太朗 #緑黄色社会 #どぶろっく #Mrシャチホコ',
                'from_date_time' => '2020-09-19 18:00:00',
                'to_date_time' => '2020-09-19 22:00:00',
                'url' => 'https://ikimonogakari.com/news/live/11229/',
                'uuid' => 'ce3c1578-80f7-48c5-9b9f-8132cfc8dab7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 41,
                'name' => '乃木坂46 白石麻衣 卒業ライブ',
                'performer' => '乃木坂46',
                'prefecture' => 'オンライン配信',
                'place' => 'オンライン配信',
                'hashtag' => '#乃木坂46 #白石麻衣',
                'from_date_time' => '2020-10-28 00:00:00',
                'to_date_time' => '2020-10-28 23:59:59',
                'url' => 'http://www.nogizaka46.com',
                'uuid' => 'c4373c1d-7b16-419f-a6d0-db4ee4dd291c',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 40,
                'name' => 'SAKANAQUARIUM 光 ONLINE',
                'performer' => 'サカナクション',
                'prefecture' => 'オンライン配信',
                'place' => 'オンライン配信',
                'hashtag' => '#サカナクション #SAKANAQUARIUM光',
                'from_date_time' => '2020-08-15 20:30:00',
                'to_date_time' => '2020-08-16 21:00:00',
                'url' => 'https://sakanaction.jp/feature/sakanaquarium_online',
                'uuid' => '80dab809-963d-4730-b64f-ca03f6d00429',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 39,
                'name' => 'Official髭男dism Tour 2020 -Arena Travelers-',
                'performer' => 'Official髭男dism',
                'prefecture' => 'オンライン配信',
                'place' => 'オンライン配信',
                'hashtag' => '#Official髭男dism #ヒゲダン配信ライブ',
                'from_date_time' => '2020-09-26 20:00:00',
                'to_date_time' => '2020-10-03 23:59:59',
                'url' => 'https://special.higedan.com/feature/onlinelive2020',
                'uuid' => '6a391748-5c5d-4552-bdd4-1f30d672d110',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 38,
                'name' => 'KEYAKIZAKA46 Live Online, but with YOU!',
                'performer' => '欅坂46',
                'prefecture' => 'オンライン配信',
                'place' => 'オンライン配信',
                'hashtag' => '#欅坂46 #LiveOnlinebutwithYOU',
                'from_date_time' => '2020-07-16 19:00:00',
                'to_date_time' => '2020-07-16 21:00:00',
                'url' => 'https://www.keyakizaka46.com/s/k46o/news/detail/E00462?ima=0000',
                'uuid' => '6dd1a20e-947d-476b-9554-6069b99a59ba',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 37,
                'name' => '【中止】SEKAI NO OWARI DOME TOUR 2020「Du Gara Di Du」',
                'performer' => 'SEKAI NO OWARI',
                'prefecture' => '東京',
                'place' => '東京ドーム',
                'hashtag' => '#SEKAINOOWARI',
                'from_date_time' => '2020-09-09 18:00:00',
                'to_date_time' => '2020-09-10 21:00:00',
                'url' => 'https://www.sekainoowari-tour.jp/dugaradidu/',
                'uuid' => '593ebd8c-3f61-4e6d-b5ba-ee97b2c3a755',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 36,
                'name' => '【延期】BTS MAP OF THE SOUL TOUR',
                'performer' => 'BTS',
                'prefecture' => '東京',
                'place' => '東京ドーム',
                'hashtag' => '#BTS',
                'from_date_time' => '2020-09-01 18:00:00',
                'to_date_time' => '2020-09-02 21:00:00',
                'url' => 'https://bts-official.jp/index.php',
                'uuid' => 'c4824b47-ccb7-4fd6-a47c-d94d5e9817d6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 35,
                'name' => '乃木坂46時間TV 「はなれてたって、ぼくらはいっしょ！」',
                'performer' => '乃木坂46',
                'prefecture' => 'オンライン配信',
                'place' => 'オンライン配信',
                'hashtag' => '#乃木坂46 #乃木坂46時間TV #46時間TV',
                'from_date_time' => '2020-06-19 19:00:00',
                'to_date_time' => '2020-06-21 17:00:00',
                'url' => 'http://www.nogizaka46.com/news/2020/05/46tv-4.php',
                'uuid' => '70706798-5458-4fa4-952f-6e89ed5ea6c9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 34,
                'name' => '【中止】NEWS LIVE TOUR 2020 STORY',
                'performer' => 'NEWS',
                'prefecture' => '東京',
                'place' => '東京ドーム',
                'hashtag' => '#NEWS',
                'from_date_time' => '2020-06-20 18:00:00',
                'to_date_time' => '2020-06-21 21:00:00',
                'url' => 'https://www.johnnys-net.jp/page?id=consta&artist=12',
                'uuid' => 'b174d6c1-5926-4a00-af35-38cd26e8b6f8',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 33,
                'name' => '【中止】亀と山Ｐ ドームツアー 2020',
                'performer' => '亀梨和也 山下智久',
                'prefecture' => '東京',
                'place' => '東京ドーム',
                'hashtag' => '#亀梨和也 #山下智久 #山P',
                'from_date_time' => '2020-06-13 18:00:00',
                'to_date_time' => '2020-06-14 21:00:00',
                'url' => 'https://www.johnnys-net.jp/page?id=consta&artist=18',
                'uuid' => 'a1b47440-a766-4716-9795-b117d0597122',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 32,
                'name' => '【中止】GLAY DOME TOUR 2020 DEMOCRACY 25TH HOTEL GLAY GRAND FINALE',
                'performer' => 'GLAY',
                'prefecture' => '東京',
                'place' => '東京ドーム',
                'hashtag' => '#GLAY #東京ドーム',
                'from_date_time' => '2020-05-30 17:00:00',
                'to_date_time' => '2020-05-31 21:00:00',
                'url' => 'https://www.glay.co.jp/live/',
                'uuid' => '358db294-5ff2-42ab-94da-c5a16fcb2083',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 31,
                'name' => '【延期】アラフェス2020',
                'performer' => '嵐',
                'prefecture' => '東京',
                'place' => '国立競技場',
                'hashtag' => '#嵐 #ARASHI #アラフェス',
                'from_date_time' => '2020-05-15 18:00:00',
                'to_date_time' => '2020-05-16 21:00:00',
                'url' => 'https://www.johnnys-net.jp/page?id=consta&artist=10#220',
                'uuid' => 'c63cc685-a28b-449b-a545-5ced293d3cca',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 30,
                'name' => '【延期】日向坂46 全国アリーナツアー',
                'performer' => '日向坂46',
                'prefecture' => '神奈川',
                'place' => 'ぴあアリーナMM',
                'hashtag' => '#日向坂46 #全国アリーナツアー',
                'from_date_time' => '2020-05-12 18:30:00',
                'to_date_time' => '2020-05-14 21:00:00',
                'url' => 'https://www.hinatazaka46.com/s/official',
                'uuid' => 'fd3d8859-3c86-4ce2-9a99-abceb8d4b730',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 29,
                'name' => '【中止】ひきこもりたちでもフェスがしたい！～世界征服Ⅱ＠東京ドーム～',
                'performer' => 'まふまふ など',
                'prefecture' => '東京',
                'place' => '東京ドーム',
                'hashtag' => '#まふワン #まふまふ東京ドーム #まふワンチケット',
                'from_date_time' => '2020-03-26 16:00:00',
                'to_date_time' => '2020-03-26 19:00:00',
                'url' => 'https://hikikomoridemo.jp',
                'uuid' => '937dd5e3-0edd-4047-b849-4350d3490320',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 28,
                'name' => '【中止】ひきこもりでもLIVEがしたい！～すーぱーまふまふわーるど2020＠東京ドーム～',
                'performer' => 'まふまふ',
                'prefecture' => '東京',
                'place' => '東京ドーム',
                'hashtag' => '#まふワン #まふまふ東京ドーム #まふワンチケット',
                'from_date_time' => '2020-03-25 18:00:00',
                'to_date_time' => '2020-03-25 21:00:00',
                'url' => 'https://hikikomoridemo.jp',
                'uuid' => 'b2104830-0c48-44b3-acc9-1bbbfa872cac',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 27,
                'name' => '【中止】乃木坂46のオールナイトニッポン presents 乃木坂46 2期生ライブ',
                'performer' => '乃木坂46',
                'prefecture' => '東京',
                'place' => '国立代々木競技場 第一体育館',
                'hashtag' => '#乃木坂46 #乃木坂46ANN #2期生ライブ',
                'from_date_time' => '2020-03-07 18:00:00',
                'to_date_time' => '2020-03-07 21:00:00',
                'url' => 'http://www.nogizaka46.com',
                'uuid' => '66f37504-f9c3-4fa9-a9a5-e5e6adf9f86d',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 26,
                'name' => 'ジャパン アミューズメント エキスポ2020',
                'performer' => '一般社団法人日本アミューズメント産業協会（JAIA）',
                'prefecture' => '千葉',
                'place' => '幕張メッセ',
                'hashtag' => '#JAEPO2020',
                'from_date_time' => '2020-02-08 10:00:00',
                'to_date_time' => '2020-02-08 17:00:00',
                'url' => 'http://www.jaepo.jp/top.html',
                'uuid' => 'ce78e212-99cf-48ce-bfb1-0c4657e54daa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 25,
                'name' => 'ふるさと祭り東京2020',
                'performer' => 'ふるさと祭り東京実行委員会（フジテレビジョン、文化放送、東京ドーム）',
                'prefecture' => '東京',
                'place' => '東京ドーム',
                'hashtag' => '#ふるさと祭り #ふるさと祭り東京 #東京ドーム',
                'from_date_time' => '2020-01-10 10:00:00',
                'to_date_time' => '2020-01-19 18:00:00',
                'url' => 'https://www.tokyo-dome.co.jp/furusato/',
                'uuid' => '018a53ac-be86-4ad4-945a-8b13afcf630c',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 24,
                'name' => '日向坂46 全国アリーナツアー',
                'performer' => '日向坂46',
                'prefecture' => '福岡',
                'place' => 'マリンメッセ福岡',
                'hashtag' => '#日向坂46 #全国アリーナツアー',
                'from_date_time' => '2020-03-31 18:30:00',
                'to_date_time' => '2020-04-01 21:00:00',
                'url' => 'https://www.hinatazaka46.com/s/official/news/detail/E00079',
                'uuid' => '8650d28f-a1aa-421c-9dde-55b22668bff9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 23,
                'name' => 'TWICE WORLD TOUR 2019 TWICELIGHTS IN JAPAN',
                'performer' => 'TWICE',
                'prefecture' => '東京',
                'place' => '東京ドーム',
                'hashtag' => '#TWICE #TWICEWORLDTOUR2019 #TWICELIGHTS',
                'from_date_time' => '2020-04-15 18:00:00',
                'to_date_time' => '2020-04-16 21:00:00',
                'url' => 'http://www.twicejapan.com/feature/twicelights',
                'uuid' => '40ed09cf-6a7f-4781-a654-9e7792443041',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 22,
                'name' => '乃木坂46 8th YEAR BIRTHDAY LIVE',
                'performer' => '乃木坂46',
                'prefecture' => '愛知',
                'place' => 'ナゴヤドーム',
                'hashtag' => '#乃木坂46 #8thバスラ #バスラ #バスラ名古屋 #ナゴヤドーム',
                'from_date_time' => '2020-02-21 18:00:00',
                'to_date_time' => '2020-02-24 21:00:00',
                'url' => 'http://www.nogizaka46.com/news/2019/11/8th-year-birthday-live.php',
                'uuid' => 'ed20e7e4-78ab-4761-9a87-08a86500d629',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 21,
                'name' => '【中止】Perfume 8th Tour 2020 P Cubed in Dome',
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

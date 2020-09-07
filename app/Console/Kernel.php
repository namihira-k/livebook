<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use Abraham\TwitterOAuth\TwitterOAuth;
use Carbon\Carbon;

use App\Models\Event;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // Telescope
        $schedule->command('telescope:prune')->daily();

        // Twitter
        $schedule->call(function () {
            $twitter = new TwitterOAuth(env('TWITTER_CLIENT_ID'),
                                        env('TWITTER_CLIENT_SECRET'),
                                        env('TWITTER_CLIENT_ID_ACCESS_TOKEN'),
                                        env('TWITTER_CLIENT_ID_ACCESS_TOKEN_SECRET'));

            $event = new Event;
            $result = $event::where('to_date_time', '>=', Carbon::now()->subDays(5))
                            ->inRandomOrder()
                            ->first();

            if (Carbon::now()->gte($result->to_date_time) ) {
                $limit = Carbon::now()->diffInDays($result->from_date_time) . (Carbon::now()->diffInHours($result->from_date_time) % 24);
            } else {
                $limit = 'あと' . Carbon::now()->diffInDays($result->from_date_time) . '日' . (Carbon::now()->diffInHours($result->from_date_time) % 24) . "時間";
            }

            $tweet = $result->name . PHP_EOL . 
                    'の状況や感想を共有しよう！' . PHP_EOL . 
                    $limit . PHP_EOL .
                    $result->hashtag . PHP_EOL . 
                    'https://liveshare.namimono.com/web/eventinfo?uuid=' . $result->uuid;

            $twitter->post('statuses/update', [
                'status' => $tweet
            ]);

        })->cron("30 * * * *");
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

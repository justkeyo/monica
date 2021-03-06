<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // Commands\Inspire::class,
        'App\Console\Commands\ResetTestDB',
        'App\Console\Commands\SendNotifications',
        'App\Console\Commands\CalculateStatistics',
        'App\Console\Commands\ImportCSV',
        'App\Console\Commands\SetupProduction',
        'App\Console\Commands\ImportVCards'
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('monica:sendnotifications')->hourly();
        $schedule->command('monica:calculatestatistics')->daily();
    }
}

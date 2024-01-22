<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\UserActivityLog;
use Carbon\Carbon;
use Illuminate\Console\Command;

class GenerateReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report:generate {start_date} {end_date}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a report summarizing product views and purchases for each user within a date range';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $startDate = Carbon::parse($this->argument('start_date'))->startOfDay();
        $endDate = Carbon::parse($this->argument('end_date'))->endOfDay();

        $users = UserActivityLog::whereBetween('activity_time', [$startDate, $endDate])
            ->get()
            ->groupBy('user_id');

        $this->info('User ID | Username | Total Views | Total Purchases');

        foreach ($users as $userId => $activities) {
            $u=User::find($userId);
            $username=$u->name;
            $totalViews = $activities->where('activity','Product View')->count();
            $totalPurchases = $activities->where('activity','Product Purchase')->count();

            $this->line("$userId | $username | $totalViews | $totalPurchases");
        }
    }


}

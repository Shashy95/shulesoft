<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserActivityLog;
use Carbon\Carbon;

class UserActivityLogController extends Controller
{
    public function getUserActivityLogs(int $id)
    {
       
        // Query the database using Eloquent
        $activity_logs = UserActivityLog::where('user_id', $id)->get();
        $start_date=UserActivityLog::where('user_id', $id)->min('activity_time');
        $end_date=UserActivityLog::where('user_id', $id)->max('activity_time');
  

        return response()->json([
            'user_id' => $id,
            'start_date' => Carbon::parse($start_date)->format('d/m/Y h:i:s A'),
            'end_date' => Carbon::parse($end_date)->format('d/m/Y h:i:s A'),
        ]);
    }
}

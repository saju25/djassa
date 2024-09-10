<?php

namespace App\Console\Commands;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;

class UpdateSubscriptions extends Command
{
    protected $signature = 'subscriptions:update';

    protected $description = 'Update subscriptions that are older than 30 days';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $now = Carbon::now();
        $auth = Auth::user();
        $userst = User::all();

        foreach ($userst as $usert) {
            if ($usert->sub_id == 1) {
                $usersf = User::where('sub_date', '<', $now->subDays(30))->get();
                foreach ($usersf as $user) {
                    $auth->sub_id = null;
                    $auth->sub_date = null;
                    $auth->save();
                }

            }
            if ($usert->sub_id == 2) {
                $usersf = User::where('sub_date', '<', $now->subDays(30))->get();
                foreach ($usersf as $user) {
                    $auth->sub_id = null;
                    $auth->sub_date = null;
                    $auth->save();
                }

            }
            if ($usert->sub_id == 3) {
                $usersf = User::where('sub_date', '<', $now->subDays(60))->get();
                foreach ($usersf as $user) {
                    $auth->sub_id = null;
                    $auth->sub_date = null;
                    $auth->save();
                }

            }
        }
    }
}

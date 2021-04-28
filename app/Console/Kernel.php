<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use App\User;

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
    // protected function schedule(Schedule $schedule)
    // {
    //     // $schedule->command('inspire')->hourly();
    // }

    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function (){
            $users = User::orderBy('created_at', 'ASC')->where('role_id' ,'=','3')->get();
            foreach ($users as $user) {
                $summary_report = PDF::loadView('admin.report.summary_report.blade', ['user' => $user]);
                $pdf = $summary_report->output();
                $data = [
                    'details' => 'This email is to notify you of this week incidents and investigations we are facing as Security firms',
                    'manager_name' => $user->name
                ];
                Mail::send('admin.report.email_body', $data, function ($message) use ($user, $pdf) {
                   $message->subject('KSIA Weekl Security Report');
                   $message->from('cheboitarus@gmail.com');
                   $message->to($user->email);
                   $message->attachData($pdf, 'summary_report.pdf', [
                       'mime' => 'application/pdf',
                   ]);
                });
                
            }
        });
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

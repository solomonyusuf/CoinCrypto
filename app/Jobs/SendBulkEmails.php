<?php

namespace App\Jobs;

use App\Mail\AppMail;
use App\Models\AppSetting;
use App\Models\Newsletter;
use App\Models\Release;
use App\Models\Subscription;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;

class SendBulkEmails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $release_id;

    public function __construct($release_id)
    {
        $this->release_id = $release_id;
    }

    public function handle()
    {
        $letter = Release::find($this->release_id);
        $users = Subscription::where([
            'newsletter_id'=> $letter->newsletter_id,
            'confirmed'=> true,
            ])->get();
        
        if($users)
        {
            $setting = AppSetting::first();
            foreach ($users as $user) {
                Mail::to($user->email)
                ->send(new AppMail(
                    $setting->name,
                    $letter->content
                ));
    
                sleep(10);
            }
        }
    }
}

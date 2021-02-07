<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Repositories\VerificationRepository;

class VerifySubscriptionRecord implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $subscriptions;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($subscriptions)
    {
        $this->subscriptions = $subscriptions;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
         foreach ($this->subscriptions as $key => $value) {
            $response = VerificationRepository::verifyRecords($value->receipt_hash,$value->os); 
        }
    }
}

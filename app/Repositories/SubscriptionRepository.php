<?php

namespace App\Repositories;
use Auth;
use Response;
use App\Models\Subscription;

class SubscriptionRepository extends BaseRepository {

   public static function makeSubScription(array $request,$expiry_date)
   {
        $subscription = new Subscription();
        $subscription->item_name = $request['item_name'];
        $subscription->receipt = $request['receipt_hash'];
        $subscription->expiry_date = $expiry_date;
        $subscription->status = 1;
        $subscription->os = $request['os'];
        $subscription->save();
   }
}

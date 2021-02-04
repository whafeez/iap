<?php

namespace App\Repositories;
use Auth;
use Response;
use Illuminate\Support\Facades\Http;

class VerificationRepository extends BaseRepository {

    public static function verifySubscription($receipt_hash,$os)
    {
    	$remote_url = \config('appurl.url');
        if ($receipt_hash != null || $receipt_hash != '') {

        	if ($os == 'Android') {
	            $response = Http::post($remote_url.'/verifyPlaySotreApp', [
	            'receipt_hash' => $receipt_hash
	            ]);
            } else if($os == 'iOS') {
            	$response = Http::post($remote_url.'/verifyAppleSotreApp', [
	            'receipt_hash' => $receipt_hash
	            ]);
            }

            return $response;
        }
    }

    public static function verifyRecords($receipt_hash,$os)
    {
    	$remote_url = \config('appurl.url');
        if ($receipt_hash != null || $receipt_hash != '') {

        	if ($os == 'Android') {
	            $response = Http::post($remote_url.'/verifyPlaySotreSubscription', [
	            'receipt_hash' => $receipt_hash
	            ]);
            } else if($os == 'iOS') {
            	$response = Http::post($remote_url.'/verifyAppleSotreSubscription', [
	            'receipt_hash' => $receipt_hash
	            ]);
            }

            return $response;
        }
    }

}

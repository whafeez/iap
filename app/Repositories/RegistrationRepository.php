<?php

namespace App\Repositories;
use Auth;
use Response;
use App\Models\DeviceTable;
use Illuminate\Support\Str;
class RegistrationRepository extends BaseRepository {

   public static function registerDevice(array $request)
   {
        
        $token = Str::random(60);
        $deviceTable = new DeviceTable();
        $deviceTable->uID = $request['uID'];
        $deviceTable->appID = $request['appID'];
        $deviceTable->language = $request['language'];
        $deviceTable->operating_system = $request['operating_system'];
        $deviceTable->deviceID = $request['deviceID'];
        $deviceTable->client_token = hash('sha256', $token);
        $deviceTable->save();
        $passport_token = $deviceTable->createToken('MyApp')->accessToken; 
        return $passport_token;
   }
}

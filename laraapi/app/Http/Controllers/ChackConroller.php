<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


use App\Models\Owners;

class ChackConroller extends Controller
{
    public function chackAD($key,$token,$email){
        $ower = Owners::where('ad_email', $email)->first();
        $time = now();
        $formatTime = str_replace(":","",str_replace("-","",$time));
        $owerTime = str_replace(":","",str_replace("-","",$ower->updated_at));
        $formatTime = substr($formatTime, 0, 8);
        $owerTime = substr($owerTime, 0, 8);

        // echo $ower->updated_at;
        if($ower->ad_url == $key && $ower->ad_verified_code == $token && $formatTime == $owerTime && $ower->ad_verifiy == 0){
            $ower->ad_verifiy = 1;
            $ower->ad_url = true;
            $ower->save();

            return Redirect::to(env('BESE_SITE2').'dashboard');
        }else{
            $ower->ad_url = false;
            $ower->save();
            return view('inbox.error');
        }
    }
}

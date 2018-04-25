<?php

namespace UmengPusher\Umeng\Pusher;

class UmengPusher
{
    private $android = null;
    private $ios = null;

    public function android($predefined){
        if($predefined['ticker'] == '76彩票')
        {
            $androidAppKey = config('umeng.android_app_key');
            $androidAppMasterSecret = config('umeng.android_app_master_secret');
        }
        elseif($predefined['ticker'] == '39彩票')
        {
            $androidAppKey = config('umeng.39_android_app_key');
            $androidAppMasterSecret = config('umeng.39_android_app_master_secret');
        }
        $this->android = new AndroidPusher($androidAppKey, $androidAppMasterSecret);
        return $this->android;
    }

    public function ios(){
        $iosAppKey = config('umeng.ios_app_key');
        $iosAppMasterSecret = config('umeng.ios_app_master_secret');
        $this->ios = new IOSPusher($iosAppKey, $iosAppMasterSecret);
        return $this->ios;
    }
}

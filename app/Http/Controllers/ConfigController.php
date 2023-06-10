<?php

namespace App\Http\Controllers;

use App\Config\AppConfig;

class ConfigController extends Controller
{
    public function show() 
    {
        $configAry = AppConfig::make()->toArray();
        echo '應用程式名稱：' . $configAry['name'] . PHP_EOL;
    }
}

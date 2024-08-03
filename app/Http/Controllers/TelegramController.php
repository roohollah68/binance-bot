<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{
    public function receiveData(Request $data)
    {
        file_get_contents('php://input');
    }

    public function test()
    {
        $response = Telegram::getMe();
        dd($response);
    }

    public function clear()
    {
        Artisan::call('route:cache');
        Artisan::call('config:clear');
        Artisan::call('config:cache');

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
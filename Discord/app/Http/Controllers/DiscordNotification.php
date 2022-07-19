<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DiscordNotification extends Controller
{
    public function notification(){
        return Http::post('997331634724548608',[
            'content'=> 'Learning how to send notifications',
            'embeds' => [
                [
                    'title' =>  'An awesome new nitification!',
                    'description' => "Discord webhooks are great",
                    'color' => '7506394',
                ]
                ],
            ]);
    }
}

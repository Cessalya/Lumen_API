<?php

use Discord\Discord;
use Discord\WebSockets\Intents;
use Discord\WebSockets\Event;

require_once('./vendor/autoload.php');

class Bot {
    function getkey(){
        return 'OTkwODM5MzU3OTAyNTg1ODU3.GiLANl.8WSP-p-vkfYoRNJFYJKsIOZVAjP24aigxXKAxI';
    }

    public function __construct() {
        $key = $this->getkey();

        $discord = new Discord(['token'=>$key]);
        $discord->on('ready', function(Discord $discord){
            echo 'bot is ready';
        });
        $discord->run();
    }
}

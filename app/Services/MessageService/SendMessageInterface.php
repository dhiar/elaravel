<?php

namespace App\Services\MessageService;


interface SendMessageInterface
{
    public function sendMessage($message, $user);
}
<?php

namespace App\Services\MessageService;


class SendMessageEmail implements SendMessageInterface
{
    public function sendMessage($message, $user)
    {
        logger("User says {$message} to {$user} through Email.");
    }
}
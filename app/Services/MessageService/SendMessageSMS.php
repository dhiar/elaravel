<?php

namespace App\Services\MessageService;


class SendMessageSMS implements SendMessageInterface
{
    public function sendMessage($message, $user)
    {
        logger("User says {$message} to {$user} through SMS.");
    }
}
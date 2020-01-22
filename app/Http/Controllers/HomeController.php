<?php

namespace App\Http\Controllers;

use App\Services\MessageService\SendMessageInterface;
use App\Services\MessageService\SendMessageSMS;
use Illuminate\Http\Request;
use App\Services\UserService;

class HomeController extends Controller
{
    public function index(UserService $userService) 
    {
        $userService->handleUserLogin();

        return view('welcome');
    }

    public function sendMessage(Request $request) 
    {
        if ($request->input('mode') == 'sms') {
            app()->bind(SendMessageInterface::class, SendMessageSMS::class);
        }
        else {
            app()->bind(SendMessageInterface::class, SendMessageSMS::class);
        }

        $sendMessageInterface = app()->make(SendMessageInterface::class);
        $sendMessageInterface->sendMessage( $request->input('message'), "Dhiar");
        return $request->all();
    }
}

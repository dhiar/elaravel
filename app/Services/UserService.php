<?php

namespace App\Services;


class UserService
{
    public function handleUserLogin()
    {
        $this->updatedUserLastSeen();
        $this->updateUserActivityTime();
    }

    private function updatedUserLastSeen()
    {
        $now = now();
        logger("User last seen {$now}");
    }

    private function updateUserActivityTime()
    {
        $now = now();
        logger("User last activity was at {$now}");
    }
}


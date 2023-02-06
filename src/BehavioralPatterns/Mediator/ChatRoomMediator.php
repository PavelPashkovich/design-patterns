<?php

namespace Src\BehavioralPatterns\Mediator;

interface ChatRoomMediator
{
    public function showMessage(User $user, string $message);
}
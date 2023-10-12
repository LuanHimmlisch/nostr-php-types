<?php

namespace LuanHimmlisch\NostrTypes\Types\Messages;

use LuanHimmlisch\NostrTypes\Enums\MessageType;

readonly final class CloseMessage extends Message
{
    public function __construct(string $subscriptionId)
    {
        return parent::__construct(MessageType::Close, $subscriptionId);
    }
}

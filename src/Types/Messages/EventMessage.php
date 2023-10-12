<?php

namespace LuanHimmlisch\NostrTypes\Types\Messages;

use LuanHimmlisch\NostrTypes\Enums\MessageType;
use LuanHimmlisch\NostrTypes\Types\Event;

readonly final class EventMessage extends Message
{
    public function __construct(Event $event)
    {
        return parent::__construct(MessageType::Event, json_encode($event));
    }
}

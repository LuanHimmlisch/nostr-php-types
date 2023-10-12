<?php

namespace LuanHimmlisch\NostrTypes\Types\Messages;

use LuanHimmlisch\NostrTypes\Enums\ResponseType;
use LuanHimmlisch\NostrTypes\Types\Event;

readonly final class EventResponse extends Response
{
    public function __construct(string $subscriptionId, Event $event)
    {
        return parent::__construct(ResponseType::Event, $subscriptionId, json_encode($event));
    }
}

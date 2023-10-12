<?php

namespace LuanHimmlisch\NostrTypes\Types\Messages;

use LuanHimmlisch\NostrTypes\Enums\MessageType;
use LuanHimmlisch\NostrTypes\Types\Filters;

readonly final class RequestMessage extends Message
{
    public function __construct(string $subscriptionId, Filters $filters)
    {
        return parent::__construct(MessageType::Request, $subscriptionId, json_encode($filters));
    }
}

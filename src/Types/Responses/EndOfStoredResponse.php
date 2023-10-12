<?php

namespace LuanHimmlisch\NostrTypes\Types\Messages;

use LuanHimmlisch\NostrTypes\Enums\ResponseType;

readonly final class EndOfStoredResponse extends Response
{
    public function __construct(string $subscriptionId)
    {
        return parent::__construct(ResponseType::EndOfStored, $subscriptionId);
    }
}

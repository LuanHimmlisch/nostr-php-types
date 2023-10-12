<?php

namespace LuanHimmlisch\NostrTypes\Types\Messages;

use LuanHimmlisch\NostrTypes\Enums\ResponseType;

readonly final class OkResponse extends Response
{
    public function __construct(string $eventId, bool $success, string $message)
    {
        return parent::__construct(ResponseType::Ok, $eventId, $success, $message);
    }
}

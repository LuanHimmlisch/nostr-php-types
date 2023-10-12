<?php

namespace LuanHimmlisch\NostrTypes\Types\Messages;

use LuanHimmlisch\NostrTypes\Enums\ResponseType;

readonly final class NoticeResponse extends Response
{
    public function __construct(string $message)
    {
        return parent::__construct(ResponseType::Notice, $message);
    }
}

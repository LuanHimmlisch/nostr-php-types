<?php

namespace LuanHimmlisch\NostrTypes\Types\Messages;

use LuanHimmlisch\NostrTypes\Enums\MessageType;
use LuanHimmlisch\NostrTypes\Types\Type;

readonly abstract class Message extends Type
{
    public array $params;

    public function __construct(
        public MessageType $messageType,
        mixed ...$params,
    ) {
        $this->params = $params;
    }

    public function jsonSerialize(): mixed
    {
        return [
            $this->messageType->value,
            ...$this->params
        ];
    }
}

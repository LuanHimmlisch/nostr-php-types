<?php

namespace LuanHimmlisch\NostrTypes\Types\Messages;

use LuanHimmlisch\NostrTypes\Enums\ResponseType;
use LuanHimmlisch\NostrTypes\Types\Type;

readonly abstract class Response extends Type
{
    public array $params;

    public function __construct(
        public ResponseType $responseType,
        mixed ...$params,
    ) {
        $this->params = $params;
    }

    public function jsonSerialize(): mixed
    {
        return [
            $this->responseType->value,
            ...$this->params
        ];
    }
}

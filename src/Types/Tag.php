<?php

namespace LuanHimmlisch\NostrTypes\Types;

use JsonSerializable;
use LuanHimmlisch\NostrTypes\Enums\TagName;

readonly final class Tag extends Type
{
    public array $extra;

    public function __construct(
        public TagName $name,
        public string $value,
        ...$extra
    ) {
        $this->extra = $extra;
    }

    public function jsonSerialize(): mixed
    {
        return [
            $this->name,
            $this->value,
            ...$this->extra
        ];
    }
}

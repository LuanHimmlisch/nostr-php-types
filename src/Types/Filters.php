<?php

namespace LuanHimmlisch\NostrTypes\Types;

use JsonSerializable;

readonly final class Filters extends Type
{
    public function __construct(
        public ?string $ids = null,
        public ?string $authors = null,
        public ?array $kinds = null,
        public ?string $singleLetter = null,
        public ?string $since = null,
        public ?string $until = null,
        public ?string $limit = null,
    ) {
    }

    public function jsonSerialize(): mixed
    {
        return array_filter([
            'ids' => $this->ids,
            'authors' => $this->authors,
            'kinds' => $this->kinds,
            "#<single-letter (a-zA-Z)>" => $this->singleLetter,
            'since' => $this->since,
            'until' => $this->until,
            'limit' => $this->limit,
        ], fn ($v) => !is_null($v));
    }
}

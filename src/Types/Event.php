<?php

namespace LuanHimmlisch\NostrTypes\Types;

use BitcoinPHP\BitcoinECDSA\BitcoinECDSA;

readonly final class Event extends Type
{
    public array $extra;

    /**
     * @param Tag[] $tags
     */
    public function __construct(
        public string $id,
        public string $pubkey,
        public int $created_at,
        public int $kind,
        public array $tags,
        public string $content,
        public string $signature,
        array ...$extra,
    ) {
        $this->extra = $extra;
    }

    /**
     * @param Tag[] $tags
     */
    public static function generate(
        string $privateKey,
        mixed $content,
        int $created_at,
        int $kind,
        array $tags = [],
        array ...$extra,
    ): static {
        $crypto = new BitcoinECDSA();
        $crypto->setPrivateKey($privateKey);

        $content = is_string($content) ? $content : json_encode($content);

        $id = hash('sha256', json_encode([
            0,
            $crypto->getPubKey(),
            $created_at,
            $kind,
            $tags,
            $content
        ]));


        return new static(
            $id,
            $crypto->getPubKey(),
            $created_at,
            $kind,
            $tags,
            $content,
            bin2hex($id),
            ...$extra
        );
    }

    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id,
            'pubkey' => $this->pubkey,
            'created_at' => $this->created_at,
            'kind' => $this->kind,
            'tags' => $this->tags,
            'content' => $this->content,
            'signature' => $this->signature,
            ...$this->extra
        ];
    }
}

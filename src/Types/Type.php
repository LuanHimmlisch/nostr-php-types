<?php

namespace LuanHimmlisch\NostrTypes\Types;

use JsonSerializable;
use ReflectionClass;

readonly abstract class Type implements JsonSerializable
{
    public static function new(...$params)
    {
        $reflectionClass = new ReflectionClass(static::class);
        $instance = $reflectionClass->newInstanceArgs($params);

        return $instance;
    }
}

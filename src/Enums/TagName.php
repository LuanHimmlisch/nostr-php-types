<?php

namespace LuanHimmlisch\NostrTypes\Enums;

enum TagName: string
{
    case Event = 'e';
    case User = 'p';
    case ReplaceableEvent = 'a';
}

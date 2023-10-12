<?php

namespace LuanHimmlisch\NostrTypes\Enums;

enum ResponseType: string
{
    case Event = 'EVENT';
    case Ok = 'OK';
    case EndOfStored = 'EOSE';
    case Notice = 'NOTICE';
}

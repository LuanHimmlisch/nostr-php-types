<?php

namespace LuanHimmlisch\NostrTypes\Enums;

enum MessageType: string
{
    case Event = 'EVENT';
    case Request = 'REQ';
    case Close = 'CLOSE';
}

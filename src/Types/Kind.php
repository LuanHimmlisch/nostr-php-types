<?php

namespace LuanHimmlisch\NostrTypes\Types;

readonly final class Kind
{
    // General kinds
    const METADATA = 0;
    const TEXT_NOTE = 1;

    // NIP-02
    const CONTACT_LIST = 3;

    // NIP-03
    const OPEN_TIMESTAMPS = 1040;

    // NIP-04
    const ENCRYPTED_DIRECT_MESSAGE = 4;
}

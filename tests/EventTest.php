<?php

use LuanHimmlisch\NostrTypes\Enums\TagName;
use LuanHimmlisch\NostrTypes\Types\Event;
use LuanHimmlisch\NostrTypes\Types\Kind;
use LuanHimmlisch\NostrTypes\Types\Tag;
use PHPUnit\Framework\TestCase;

final class EventTest extends TestCase
{
    public function testEventCanBeCreated()
    {
        $event = new Event(
            id: 'b9fead6eef87d8400cbc1a5621600b360438affb9760a6a043cc0bddea21dab6',
            kind: Kind::TEXT_NOTE,
            pubkey: '82341f882b6eabcd2ba7f1ef90aad961cf074af15b9ef44a09f9d2a8fbfbe6a2',
            created_at: 1676161639,
            content: 'this is going to work',
            tags: [],
            signature: '76d19889a803236165a290fa8f3cf5365af8977ee1e002afcfd37063d1355fc755d0293d27ba0ec1c2468acfaf95b7e950e57df275bb32d7a4a3136f8862d2b7'
        );

        $this->assertIsObject($event);
        $this->assertJson(json_encode($event));
    }

    public function testEventCanBeGenerated()
    {
        $key = '4221fbff5ac0de62f810dcb502f2567586d228912478c933b3b9ed76ef29274d';

        $event = Event::generate(
            privateKey: $key,
            content: 'Some content',
            created_at: time(),
            kind: Kind::TEXT_NOTE,
            tags: [
                Tag::new(name: TagName::Event, value: 'Some value')
            ]
        );

        $this->assertIsObject($event);
        $this->assertJson(json_encode($event));
    }
}

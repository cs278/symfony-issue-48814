<?php

namespace App;

use Sentry\Event;

final class SentryBeforeSend
{
    public function __construct(private array $tags = [])
    {
        
    }

    public function __invoke(Event $event): Event
    {
        foreach ($this->tags as $name => $value) {
            $event->setTag($name, $value);
        }

        return $event;
    }

    public function withTag(string $name, string $value): self
    {
        return new self([...$this->tags, $name => $value]);
    }
}
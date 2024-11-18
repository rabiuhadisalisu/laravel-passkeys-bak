<?php

namespace Rabytebuild\LaravelPasskeys\Events;

use Rabytebuild\LaravelPasskeys\Models\Passkey;

class PasskeyUsedToAuthenticateEvent
{
    public function __construct(
        public Passkey $passkey,
    ) {}
}

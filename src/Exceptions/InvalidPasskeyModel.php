<?php

namespace Rabytebuild\LaravelPasskeys\Exceptions;

use Exception;
use Rabytebuild\LaravelPasskeys\Models\Passkey;

class InvalidPasskeyModel extends Exception
{
    public static function make(string $configuredClass): self
    {
        $shouldExtend = Passkey::class;

        return new static("The configured passkey model `{$configuredClass}` does not extend `{$shouldExtend}`.");
    }
}

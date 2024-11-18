<?php

namespace Rabytebuild\LaravelPasskeys\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Rabytebuild\LaravelPasskeys\Actions\GeneratePasskeyAuthenticationOptionsAction;
use Rabytebuild\LaravelPasskeys\Support\Config;

class GeneratePasskeyAuthenticationOptionsController
{
    public function __invoke()
    {
        /** @var GeneratePasskeyAuthenticationOptionsAction $action */
        $action = Config::getAction('generate_passkey_authentication_options', GeneratePasskeyAuthenticationOptionsAction::class);

        $options = $action->execute();

        Session::flash('passkey-registration-options', $options);

        return $options;
    }
}

<?php

namespace App\Domain\Mapper\Backup;

use Barsam\User\Messages\CheckCredentialsRequest;

class CheckCredentialMapper
{
    public static function fromRequest(array $inputs): CheckCredentialsRequest
    {
        return new CheckCredentialsRequest([
            'login_id' => $inputs['login_id'],
            'password' => $inputs['password'],
        ]);
    }

}

<?php

namespace App\Domain\Mapper;

use Barsam\User\Models\User;
use Barsam\User\Models\UserMeta;

class CurrentUserMapper
{
    public static function fromRequest(User $user): array
    {
        $data = [
            'id' => $user->getId(),
            'mobile'=>$user->getLoginId(),
        ];

        /** @var UserMeta $meta */
        foreach ($user->getUserMetas() as $meta) {
            $data[$meta->getField()->getLabel()] = $meta->getValue();
        }

        return $data;
    }

}

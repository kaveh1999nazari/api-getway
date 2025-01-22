<?php

namespace App\Domain\Mapper\Backup;

use Barsam\User\Messages\FieldCreateRequest;

class FieldCreateMapper
{
    public static function fromRequest(array $inputs): FieldCreateRequest
    {
        return new FieldCreateRequest([
            'label' => $inputs['label'],
            'validation_rules' => $inputs['validation_rules'],
            'type' => $inputs['type'],
            'options' => $inputs['options'],
        ]);

    }

}

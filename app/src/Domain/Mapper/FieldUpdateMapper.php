<?php

namespace App\Domain\Mapper;

use Barsam\User\Messages\FieldUpdateRequest;
use GPBMetadata\User\Messages\FieldUpdate;
use Psr\Http\Message\ServerRequestInterface;

class FieldUpdateMapper
{
    public static function fromRequest(array $inputs): FieldUpdateRequest
    {
        return new FieldUpdateRequest([
            'id' => $inputs['id'],
            'label' => $inputs['label'],
            'validation_rules' => $inputs['validation_rules'],
            'type' => $inputs['type'],
            'options' => $inputs['options'],
        ]);
    }

}

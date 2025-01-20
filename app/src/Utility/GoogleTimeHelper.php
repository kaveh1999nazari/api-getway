<?php

namespace App\Utility;

use DateTimeInterface;
use Google\Protobuf\Timestamp;

class GoogleTimeHelper
{
    public static function create(DateTimeInterface|null $dateTime): Timestamp
    {
        $timestamp = new Timestamp();
        if ($dateTime) {
            $timestamp->setSeconds($dateTime->getTimestamp());
            $timestamp->setNanos((int) $dateTime->format('u') * 1000);
        } else {
            $timestamp->setSeconds(0);
            $timestamp->setNanos(0);
        }
        return $timestamp;
    }


    public static function timestampToDateTimeImmutable(Timestamp $timestamp): \DateTimeImmutable
    {
        $seconds = $timestamp->getSeconds();
        $nanos = $timestamp->getNanos();
        $microseconds = intdiv($nanos, 1000);
        $dateTime = (new \DateTimeImmutable())->setTimestamp($seconds);
        return $dateTime->modify("+{$microseconds} microseconds");
    }
}

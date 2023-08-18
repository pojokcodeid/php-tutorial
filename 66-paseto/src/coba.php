<?php

$iat = time();
$expire_time = $iat + (60 * 60);
$timestamp = (new DateTime())->add(new DateInterval('PT1H'));
$timestamp->setTimezone(new DateTimeZone('Asia/Jakarta'));
// $timestamp->setTimestamp($expire_time);
var_dump($timestamp->format(DateTime::ISO8601));
<?php

$date = new DateTime();
$date->setDate(1998, 01, 21);

// Data Interval
// invert -> minus
$date->add(new DateInterval('P1Y'));

// Timezone
$date->setTimezone(new DateTimeZone('America/Sao_Paulo'));
// var_dump($date);

// datetime to string
echo $date->format('d/m/Y H:i:s') . PHP_EOL;

// input to datetime
$input = DateTime::createFromFormat('d/m/Y H:i:s', '21/01/1998 00:00:00', new DateTimeZone('Asia/Jakarta'));
var_dump($input);

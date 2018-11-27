<?php
require_once __DIR__ . '/vendor/autoload.php';

use Spatie\CalendarLinks\Link;

// TODO: jogar essas variáveis pra $argv

$title = 'Título do Evento';
$description = 'Descrição';
$address = 'Endereço';
$start = '2018-11-27 12:00';
$end = '2018-11-27 15:00';

$from = DateTime::createFromFormat('Y-m-d H:i', $start);
$to = DateTime::createFromFormat('Y-m-d H:i', $end);

$link = Link::create($title, $from, $to)->description($description)->address($address);

// Generate a link to create an event on Google calendar
echo 'Google Link:';
echo "\n";
echo $link->google();
echo "\n\n\n";

// Generate a data uri for an ics file (for iCal & Outlook)
echo 'ICS:';
echo "\n";
echo $link->ics();

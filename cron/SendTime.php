<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/Autoloader.php';

$dayTime = new DayTime;
$getDayTime = $dayTime->get();

$monthTime = new MonthTime;
$getMonthTime = $monthTime->get();

$telegramBot = new TelegramBot;
$telegramBot->sendMessage($getDayTime, $getMonthTime);

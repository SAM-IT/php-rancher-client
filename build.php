<?php
include 'vendor/autoload.php';

list($endPoint, $key, $secret) = include 'credentials.php';

$client = new \SamIT\Rancher\Client($endPoint, $key, $secret);

$client->createClasses(__DIR__ . "/src/Generated", "SamIT\\Rancher\\Generated");

<?php
foreach (glob(__DIR__ . "/config/*.php") as $filename) {
    require_once $filename;
}
foreach (glob(__DIR__ . "/core/*.php") as $filename) {
    require_once $filename;
}
foreach (glob(__DIR__ . "/app/Models/*.php") as $filename) {
    require_once $filename;
}
foreach (glob(__DIR__ . "/app/Controllers/*.php") as $filename) {
    require_once $filename;
}
$users = new UserController();
$users -> index();
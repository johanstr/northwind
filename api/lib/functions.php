<?php

include_once('db.php');

$status_messages = [
    200 => 'Ok',
    201 => 'Created',
    202 => 'Accepted',
    400 => 'Bad request',
    401 => 'Unauthorized',
    402 => 'Payment required',
    403 => 'Forbidden',
    404 => 'Not found',
    500 => 'Internal Server Error',
    501 => 'Not implemented',
    502 => 'Bad Gateway',
    503 => 'Service Unavailable'
];

$content_types = [
    'json' => 'application/json',
    'xml' => 'application/xml',
    'zip' => 'application/zip',
    'html' => 'text/html',
    'pdf' => 'application/pdf',
    'css' => 'text/css',
    'csv' => 'text/csv',
    'txt' => 'text/plain',
    'png' => 'image/png',
    'jpg' => 'image/jpeg',
    'gif' => 'image/gif'
];



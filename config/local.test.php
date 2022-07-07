<?php

// Phpunit software test environment

$settings['error']['display_error_details'] = true;
$settings['error']['log_errors'] = false;

// Database
$settings['db']['database'] = 'slim_skeleton_test';

// Mocked Logger settings
$settings['logger'] = [
    'path' => '',
    'level' => 0,
    'test' => new \Psr\Log\NullLogger(),
];

// API credentials for phpunit
$settings['api_auth'] = [
    // Allow http for testing
    'secure' => false,
    'users' => [
        'api-user' => 'secret',
    ],
];

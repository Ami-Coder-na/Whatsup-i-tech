<?php

// Ensure Vercel serverless environment has writeable storage in /tmp
$storageDirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/bootstrap/cache'
];

foreach ($storageDirs as $dir) {
    if (!file_exists($dir)) {
        @mkdir($dir, 0777, true);
    }
}

putenv('APP_KEY=base64:XG83JbQ2c/xL05a3N7B3qW4vV9zQ4mX1Y7zQ4mX1Y7z=');
putenv('APP_ENV=production');
putenv('APP_DEBUG=true');
putenv('LOG_CHANNEL=stderr');
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
putenv('APP_SERVICES_CACHE=/tmp/bootstrap/cache/services.php');
putenv('APP_PACKAGES_CACHE=/tmp/bootstrap/cache/packages.php');
putenv('APP_CONFIG_CACHE=/tmp/bootstrap/cache/config.php');
putenv('APP_ROUTES_CACHE=/tmp/bootstrap/cache/routes.php');
putenv('APP_EVENTS_CACHE=/tmp/bootstrap/cache/events.php');

// Create SQLite fallback in /tmp if MySQL env is missing
$dbPath = '/tmp/database.sqlite';
if (!file_exists($dbPath)) {
    @touch($dbPath);
}

if (!getenv('DB_CONNECTION')) {
    putenv('DB_CONNECTION=sqlite');
    putenv('DB_DATABASE=' . $dbPath);
}

// Require Laravel entrypoint safely
require __DIR__ . '/../public/index.php';



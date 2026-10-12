<?php

$frameworkConfig = dirname(__DIR__) . '/vendor/codeigniter4/framework/app/Config';
$appConfig = dirname(__DIR__) . '/app/Config';

if (! is_dir($frameworkConfig)) {
    fwrite(STDERR, "CodeIgniter framework config was not found. Run composer install first." . PHP_EOL);
    exit(1);
}

foreach (glob($frameworkConfig . '/*.php') as $sourceFile) {
    $targetFile = $appConfig . '/' . basename($sourceFile);

    if (is_file($targetFile)) {
        continue;
    }

    if (! copy($sourceFile, $targetFile)) {
        fwrite(STDERR, 'Could not copy default config: ' . basename($sourceFile) . PHP_EOL);
        exit(1);
    }
}

echo "Missing CodeIgniter config defaults were added." . PHP_EOL;

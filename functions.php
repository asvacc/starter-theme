<?php

use Symfony\Component\Finder\Finder;

require __DIR__ . '/vendor/autoload.php';

define('THEME_DIR', get_template_directory_uri());

/**
 * Include all files
 */
$finder = new Finder();
$finder->files()->name('*.php')->in(__DIR__ . '/inc');

foreach ($finder as $file) {
    $absoluteFilePath = $file->getRealPath();
    @include $absoluteFilePath;
}

/**
 * Load all hooks
 */

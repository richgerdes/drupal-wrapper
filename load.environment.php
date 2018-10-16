<?php

/**
 * This file is included very early. See autoload.files in composer.json and
 * https://getcomposer.org/doc/04-schema.md#files
 */

use Dotenv\Dotenv;
use Dotenv\Exception\InvalidPathException;
use DrupalFinder\DrupalFinder;

// Locate .env file location.
$dir = getcwd();
$drupalFinder = new DrupalFinder();
if ($drupalFinder->locateRoot($dir)) {
  // If Drupal is available, use a .env in the parent directory.
  $dir = realpath($drupalFinder->getDrupalRoot() . '/..');
}

$dir = dirname($dir);
/**
 * Load any .env file. See /.env.example.
 */
$dotenv = new Dotenv($dir);
try {
  $dotenv->load();
}
catch (InvalidPathException $e) {
  // Do nothing. Production environments rarely use .env files.
}

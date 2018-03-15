<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

use Robot\Executor;

require __DIR__ . '/vendor/autoload.php';

$executor = new Executor();

// Infinite command line.
while (true) {
    $line = readline("\033[30mCommand: ");
    readline_add_history($line);
    try {
        $executor->parse($line);
    } catch (Exception $e) {
        printf("\033[31mError: %s\n", $e->getMessage());
    }
    if ($line === 'QUIT') {
        exit("Thanks, Bye \n");
    }
}
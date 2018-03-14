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

use Robot\Table;

require __DIR__ . '/vendor/autoload.php';

$table = new Table(4, 4);
$executor = new Executor($table);

// Infinite command line.
while (true) {
    $line = readline("Command: ");
    readline_add_history($line);
    if ($line === 'QUIT') {
        exit("Thanks, Bye \n");
    }
    echo $line;
}
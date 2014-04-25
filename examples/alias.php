<?php

use \Term\ANSIColor;

require_once __DIR__ . '/../vendor/autoload.php';

main();
exit;

function main()
{
    $string = "[DEBGU] This is a debug message\n";
    ANSIColor::setAlias('debug', 'red', 'light_gray');
    echo ANSIColor::colored($string , 'debug');

    $string = "[INFO] This is an info message\n";
    ANSIColor::setAlias('info', 'green');
    echo ANSIColor::colored($string , 'info');

    $string = "[WARN] This is a warn message\n";
    ANSIColor::setAlias('warn', 'black', 'yellow');
    echo ANSIColor::colored($string , 'warn');

    $string = "[CRITICAL] This is a critical message\n";
    ANSIColor::setAlias('critical', 'black', 'red');
    echo ANSIColor::colored($string , 'critical');

    $string = "[ERROR] This is an error message\n";
    ANSIColor::setAlias('error', 'red', 'black');
    echo ANSIColor::colored($string , 'error');
}

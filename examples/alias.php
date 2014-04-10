<?php

require_once __DIR__ . '/../vendor/autoload.php';

main();
exit;

function main()
{
    $string = "[DEBGU] This is a debug message\n";
    \Term\ANSIColor::setAlias('debug', 'red', 'light_gray');
    echo \Term\ANSIColor::colored($string , 'debug');

    $string = "[INFO] This is an info message\n";
    \Term\ANSIColor::setAlias('info', 'green');
    echo \Term\ANSIColor::colored($string , 'info');

    $string = "[WARN] This is a warn message\n";
    \Term\ANSIColor::setAlias('warn', 'black', 'yellow');
    echo \Term\ANSIColor::colored($string , 'warn');

    $string = "[CRITICAL] This is a critical message\n";
    \Term\ANSIColor::setAlias('critical', 'black', 'red');
    echo \Term\ANSIColor::colored($string , 'critical');

    $string = "[ERROR] This is an error message\n";
    \Term\ANSIColor::setAlias('error', 'red', 'black');
    echo \Term\ANSIColor::colored($string , 'error');
}

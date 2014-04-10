<?php

require_once __DIR__ . '/../vendor/autoload.php';

main();
exit;

function main()
{
    $foreground = \Term\ANSIColor::getForegroundColors();
    foreach ($foreground as $color => $code) {
        $string = "Hello World! with $color\n";
        echo \Term\ANSIColor::colored($string , $color);
    }
}

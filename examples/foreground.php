<?php

use \Term\ANSIColor;

require_once __DIR__ . '/../vendor/autoload.php';

main();
exit;

function main()
{
    $foreground = ANSIColor::getForegroundColors();
    foreach ($foreground as $color => $code) {
        $string = "Hello World! with $color\n";
        echo ANSIColor::colored($string , $color);
    }
}

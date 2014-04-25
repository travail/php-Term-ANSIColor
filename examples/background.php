<?php

use \Term\ANSIColor;

require_once __DIR__ . '/../vendor/autoload.php';

main();
exit;

function main()
{
    $background = ANSIColor::getBackgroundColors();
    foreach ($background as $color => $code) {
        $string = "Hello World! on $color\n";
        echo ANSIColor::colored($string , null, $color);
    }
}

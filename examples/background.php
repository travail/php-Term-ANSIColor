<?php

require_once __DIR__ . '/../vendor/autoload.php';

main();
exit;

function main()
{
    $background = \Term\ANSIColor::getBackgroundColors();
    foreach ($background as $color => $code) {
        $string = "Hello World! on $color\n";
        echo \Term\ANSIColor::colored($string , null, $color);
    }
}

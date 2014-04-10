<?php

use \Term\ANSIColor;

require_once __DIR__ . '/../vendor/autoload.php';

main();
exit;

function main()
{
    $foreground = ANSIColor::getForegroundColors();
    $background = ANSIColor::getBackgroundColors();
    foreach ($background as $b_color => $b_code) {
        foreach ($foreground as $f_color => $f_code) {
            $string = "Hello Workd with $f_color on $b_color\n";
            echo ANSIColor::colored($string, $f_color, $b_color);
        }
    }
}

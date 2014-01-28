<?php

require_once dirname(dirname(__FILE__)) . '/Term/ANSIColor.php';

main();
exit;

function main()
{
    $foreground = \Term\ANSIColor::getForegroundColors();
    $background = \Term\ANSIColor::getBackgroundColors();
    foreach ($background as $b_color => $b_code) {
        foreach ($foreground as $f_color => $f_code) {
            $string = "Hello Workd with $f_color on $b_color\n";
            echo \Term\ANSIColor::colored($string, $f_color, $b_color);
        }
    }
}

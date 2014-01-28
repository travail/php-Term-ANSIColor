<?php

require_once dirname(dirname(__FILE__)) . '/Term/ANSIColor.php';

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

<?php

require_once dirname(dirname(__FILE__)) . '/Term/ANSIColor.php';

main();
exit;

function main()
{
    $colors = array(
        'black', 'dark_gray', 'blue', 'light_blue', 'green', 'light_green',
        'cyan', 'light_cyan', 'red', 'light_red', 'purple', 'light_purple',
        'brown', 'yellow', 'light_gray', 'white'
    );

    foreach ($colors as $color) {
        $string = "Hello World! with $color\n";
        echo \Term\ANSIColor::colorize($string , $color);
    }
}

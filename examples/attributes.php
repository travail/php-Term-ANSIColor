<?php

use \Term\ANSIColor;

require_once __DIR__ . '/../vendor/autoload.php';

main();
exit;

function main()
{
    $attributes = ANSIColor::getAttributes();
    foreach ($attributes as $attr => $code) {
        $string = "Hello Workd with $attr\n";
        echo ANSIColor::colored($string, null, null, $attr);
    }
}

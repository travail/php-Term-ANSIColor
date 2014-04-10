<?php

require_once __DIR__ . '/../vendor/autoload.php';

main();
exit;

function main()
{
    $attributes = \Term\ANSIColor::getAttributes();
    foreach ($attributes as $attr => $code) {
        $string = "Hello Workd with $attr\n";
        echo \Term\ANSIColor::colored($string, null, null, $attr);
    }
}

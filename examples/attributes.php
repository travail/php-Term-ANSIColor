<?php

require_once dirname(dirname(__FILE__)) . '/Term/ANSIColor.php';

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

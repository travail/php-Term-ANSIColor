<?php

namespace Term;

class ANSIColor
{
    static private $foreground = array(
        'black'       => '0;30',
        'dark_gray'   => '1;30',
        'blue'        => '0;34',
        'light_blue'  => '1;34',
        'green'       => '0;32',
        'light_green' => '1;32',
        'cyan'        => '0;36',
        'light_cyan'  => '1;36',
        'red'         => '0;31',
        'light_red'   => '1;31',
        'purple'      => '0;35',
        'light_purple'=> '1;35',
        'brown'       => '0;33',
        'yellow'      => '1;33',
        'light_gray'  => '0;37',
        'white'       => '1;37',
    );
    static private $background = array(
        'black'      => '40',
        'red'        => '41',
        'green'      => '42',
        'yellow'     => '43',
        'blue'       => '44',
        'magenta'    => '45',
        'cyan'       => '46',
        'light_gray' => '47',
    );
    static private $attributes = array(
        'normal'     => '0',
        'bold'       => '1',
        'underscore' => '4',
        'blink'      => '5',
        'reverse'    => '7',
        'concealed'  => '8',
    );

    static public function colored($string, $f = '', $b = '', $a = '')
    {
        if (!$f && !$b && !$a) return $string;

        $colored = '';
        if ($f)       $colored .= "\033[" . self::$foreground[$f] . "m";
        if ($b)       $colored .= "\033[" . self::$background[$b] . "m";
        if ($a)       $colored .= "\033[" . self::$attributes[$a] . "m";
        if ($f || $b || $a) $colored .= $string . "\033[0m";

        return $colored;
    }

    static public function getForegroundColors()
    {
        return self::$foreground;
    }

    static public function getBackgroundColors()
    {
        return self::$background;
    }

    static public function getAttributes()
    {
        return self::$attributes;
    }
}

<?php

namespace Term;

class ANSIColor
{
    /**
     * @var string The version of this package
     */
    const VERSION = '0.1.0';

    /**
     * @var array ANSI foreground color map
     */
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

    /**
     * @var array ANSI background color map
     */
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

    /**
     * @var array ANSI text attribute map
     */
    static private $attribute = array(
        'normal'     => '0',
        'bold'       => '1',
        'underscore' => '4',
        'blink'      => '5',
        'reverse'    => '7',
        'concealed'  => '8',
    );

    /**
     * @var array
     */
    static private $alias = array();

    /**
     * Colorlize and decorate string.
     *
     * @param string $string
     * @param string $f
     * @param string $b
     * @param string $a
     * @return string Colored string
     * @throws \Exception
     */
    static public function colored($string, $f = '', $b = '', $a = '')
    {
        if (self::validateAlias($f)) list($f, $b, $a) = self::$alias[$f];
        if (!$f && !$b && !$a) return $string;

        if ($f && !self::validateForegroundColor($f) && !self::validateAlias($f))
            throw new \Exception("No such a foreground color '$f'");
        if ($b && !self::validateBackgroundColor($b))
            throw new \Exception("No such a background color '$b'");
        if ($a && !self::validateAttribute($a))
            throw new \Exception("No such an attribute '$a'");

        $colored = '';
        if ($f)             $colored .= "\033[" . self::$foreground[$f] . "m";
        if ($b)             $colored .= "\033[" . self::$background[$b] . "m";
        if ($a)             $colored .= "\033[" . self::$attribute[$a] . "m";
        if ($f || $b || $a) $colored .= $string . "\033[0m";

        return $colored;
    }

    /**
     * Set an alias.
     *
     * @param string $alias
     * @param string $f
     * @param string $b
     * @param string $a
     * @return void
     * @throws \Exception
     */
    static public function setAlias($alias, $f = '', $b = '', $a = '')
    {
        if (!$alias)
            throw new \Exception('alias is required');
        if (!$f && !$b && !$a)
            throw new \Exception(
                'Specify at least one from foreground color, ' .
                'background color and text attribute');

        self::$alias[$alias] = array($f, $b, $a);
    }

    /**
     * Return an alias when $alias is given
     * return all alias when $alias is not given.
     *
     * @param string $alias
     * @return array
     * @throws \Exception
     */
    static public function getAlias($alias = '')
    {
        if (!$alias) {
            return self::$alias;
        }
        elseif (self::validateAlias($alias)) {
            return self::$alias[$alias];
        }
        else {
            throw new \Exception("No such an alias $alias");
        }
    }

    /**
     * Return ANSI foreground color map.
     *
     * @return array
     */
    static public function getForegroundColors()
    {
        return self::$foreground;
    }

    /**
     * Return ANSI background color map.
     *
     * @return array
     */
    static public function getBackgroundColors()
    {
        return self::$background;
    }

    /**
     * Return ANSI text attribute map.
     *
     * @return array
     */
    static public function getAttributes()
    {
        return self::$attribute;
    }

    /**
     * Validate given ANSI foreground color.
     *
     * @param string $color
     * @return boolean
     */
    static public function validateForegroundColor($color)
    {
        return isset(self::$foreground[$color]);
    }

    /**
     * Validate given ANSI background color.
     *
     * @param string $color
     * @return boolean
     */
    static public function validateBackgroundColor($color)
    {
        return isset(self::$background[$color]);
    }

    /**
     * Validate given ANSI text attribute.
     *
     * @param string $attr
     * @return boolean
     */
    static public function validateAttribute($attr)
    {
        return isset(self::$attribute[$attr]);
    }

    /**
     * Validate given alias.
     *
     * @param string $alias
     * @return boolean
     */
    static public function validateAlias($alias)
    {
        return isset(self::$alias[$alias]);
    }
}

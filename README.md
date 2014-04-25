# \Term\ANSIColor

## NAME

\Term\ANSIColor - Color screen output using ANSI escape sequences.

## INSTALLATION

This package is not distributed on [packgist](https://packagist.org) for now. To install this package into your project via composer, add the following snippet to your `composer.json`. Then run `composer update`.

```
"require": {
    "travail/term-ansicolor": "dev-master"
},
"repositories": [
    {
        "type": "vcs",
        "url": "git@github.com:travail/php-Term-ANSIColor.git"
    }
]
```

## SYNOPSIS	

```php
use \Term\ANSIColor;

require_once '/path/to/vendor/autoload.php';

// Get a colored string
echo ANSIColor::colored("Yellow text\n", 'yellow');
echo ANSIColor::colored("Normal text on magenta\n", null, 'magenta');
echo ANSIColor::colored("Underscored text\n", null, null, 'underscore');
echo ANSIColor::colored("Red on cyan\n", 'red', 'cyan');
echo ANSIColor::colored("Blinking blue text on light gray\n", 'blue', 'light_gray', 'blink');

// Get a colored string by an alias
ANSIColor::setAlias('debug', 'red', 'light_gray');
echo ANSIColor::colored("[DEBUG] Debug message in red on light_gray\n" , 'debug');
ANSIColor::setAlias('error', 'red', 'black');
echo ANSIColor::colored("[ERROR] Error message in red on black\n" , 'error');
```

## METHODS

### colored

`string colored(string $text, string $foreground_color, string $background_color, string $attribute)`

Returns a colored text, or `Exception` if passed non-existent `$foreground_color`, `$background_color` or `$attribute`.

### setAlias

`array setAlias(string $alias, string $foreground_color, string $background_color, string $attribute)`

Sets an alias for the standard color and attribute.

### getAlias

`array getAlias([string $alais = ''])`

Returns an available alias as an array if `$alias` passed, all of alias if `$alias` not passed, or `Exception` if non-existent `$alias` passed.

### getForegourndColors

`array getForegroundColors(void)`

Returns the defined foreground colors as array.

```
array(
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
```


### getBackgroundColors

`array getBackgroundColors(void)`

Returns the defined background colors as array.

```
array(
    'black'      => '40',
    'red'        => '41',
    'green'      => '42',
    'yellow'     => '43',
    'blue'       => '44',
    'magenta'    => '45',
    'cyan'       => '46',
    'light_gray' => '47',
);
```

### getAttributes

`array getAttributes(void)`

Returns the defined attributes as array.

```
array(
    'normal'     => '0',
    'bold'       => '1',
    'underscore' => '4',
    'blink'      => '5',
    'reverse'    => '7',
    'concealed'  => '8',
);
```

## AUTHOR

travail

## LICENSE

This library is free software. You can redistribute it and/or modify it under the same terms as PHP itself.


# \Term\ANSIColor

## NAME

\Term\ANSIColor - Color screen output using ANSI escape sequences, port of the Perl module [Term::ANSIColor](https://metacpan.org/pod/Term::ANSIColor)

## SYNOPSIS

```php
require_once 'path/to/Term/ANSIColor.php';

// Get a colored string
echo \Term\ANSIColor::colored("Yellow text\n", 'yellow');
echo \Term\ANSIColor::colored("Normal text on magenta\n", null, 'magenta');
echo \Term\ANSIColor::colored("Underscored text\n", null, null, 'underscore');
echo \Term\ANSIColor::colored("Red on cyan\n", 'red', 'cyan');
echo \Term\ANSIColor::colored("Blinking blue text on light gray\n", 'blue', 'light_gray', 'blink');

// Get a colored string by an alias
\Term\ANSIColor::setAlias('debug', 'red', 'light_gray');
echo \Term\ANSIColor::colored("[DEBUG] Debug message in red on light_gray\n" , 'debug');
\Term\ANSIColor::setAlias('error', 'red', 'black');
echo \Term\ANSIColor::colored("[ERROR] Error message in red on black\n" , 'error');

```

## METHODS

### colored

`string colored(string $text, string $foreground_color, string $background_color, string $attribute)`

Returns a colored text, or `Exception` if passed non-existent `$foreground_color`, `$background_color` or `$attribute`.

### setAlias

`array setAlias(string $alias, string $foreground_color, string $background_color, string $attribute)`

### getAlias

`array getAlias([string $alais = ''])`

Returns an available alias as an array if `$alias` passed, all of alias if `$alias` not passed, or `Exception` if non-existent `$alias` passed.

### getForegourndColors

`array getForegroundColors(void)`

### getBackgroundColors

`array getBackgroundColors(void)`

### getAttributes

`array getAttributes(void)`

## THANKS TO

Russ Allbery `rra@stanford.edu`

## AUTHOR

travail

## LICENSE

This library is free software. You can redistribute it and/or modify it under the same terms as PHP itself.

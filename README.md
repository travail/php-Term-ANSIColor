# \Term\ANSIColor

## Name

\Term\ANSIColor - Color screen output using ANSI escape sequences

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

## FUNCTIONS

### colored

#### Description

`string colored(string $text, string $foreground_color, string $background_color, string $attribute)`

#### Parameters

* $text
* $foreground_color
* $background_color
* $attribute

#### Return Values

Returns a colored text, or `Exception` if passed non-existent `$foreground_color`, `$background_color` or `$attribute`.

### setAlias

#### Description

`array setAlias(string $alias, string $foreground_color, string $background_color, string $attribute)`

#### Parameters

* $alias
* $foreground_color
* $background_color
* $attribute

#### Return Values

### getAlias

#### Description

`getAlias([string $alais = ''])`

#### Parameters

* $alias

#### Return Values

### getForegourndColors

#### Description

`array getForegroundColors(void)`

#### Return Values

### getBackgroundColors

#### Description

`array getBackgroundColors(void)`

#### Return Values

### getAttributes

#### Description

`array getAttributes(void)`

#### Return Values

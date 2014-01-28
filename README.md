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

### string colored(string $string, string $foreground_color, string $background_color, string $attribute)

#### parameters

* $string
* $foreground_color
* $background_color
* $attribute

### array setAlias

#### parameters(string $alias, string $foreground_color, string $background_color, string $attribute)

* $alias
* $foreground_color
* $background_color
* $attribute

### getAlias([string $alais = ''])

#### parameters

* $alias

### array getForegroundColors()

### array getBackgroundColors()

### array getAttributes()

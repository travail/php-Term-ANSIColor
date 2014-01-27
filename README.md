# Name

\Term\ANSIColor - Color screen output using ANSI escape sequences

# SYNOPSIS

```
require_once 'path/to/Term/ANSIColor.php';

echo \Term\ANSIColor::colored("Yellow text\n", 'yellow');
echo \Term\ANSIColor::colored("Normal text on magenta\n", null, 'magenta');
echo \Term\ANSIColor::colored("Underscored text\n", null, null, 'underscore');
echo \Term\ANSIColor::colored("Red on cyan\n", 'red', 'cyan');
echo \Term\ANSIColor::colored("Blinking blue text on light gray", 'blue', 'light_gray', 'blink');
```

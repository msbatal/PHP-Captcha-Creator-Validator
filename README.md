# PHP Captcha Creator & Validator

SunCaptcha is a simple PHP captcha creator and validator class.

The goal of this class is to let you; Generate Captcha to block automatic form bots, and compare it with the value received from the user.

`Technical Document:` https://www.deepwiki.com/msbatal/PHP-Captcha-Creator-Validator

### Installation

To utilize this class, first import SunCaptcha.php into your project, and require it.
SunCaptcha requires PHP 7.0+ to work.

```php
require_once ('SunCaptcha.php');
```

### Initialization

Simple initialization:

```php
$captcha = new SunCaptcha();
```

Advanced initialization:

```php
$captcha = new SunCaptcha(120, 40, '#ffffff', '#ffffff', '#000000'); // params: width, height, text color, line color, background color
```

All parameters are optional.

`Width` value can not lesser than 90 and `Height` value can not be lesser than 30.

You can use short or long Base-16 (Hex) codes for color parameters. Eg. #000 or #000000

### Creation

```php
$captcha = new SunCaptcha();
echo '<img src=' . $captcha->create() . '>';
```

### Validation

```php
$captcha = new SunCaptcha(); // create empty object
$input = '9779fd'; // get input value from user
if ($captcha->validate($input) === true) { // if validated
    echo 'Captcha value is correct.';
} else {
    echo 'Captcha calue is wrong.';
}
```

<?php

    require_once ('SunCaptcha.php'); // Call 'SunCaptcha' class

    /*
    // Create captcha with default parameters
    $captcha = new SunCaptcha();
    echo '<img src=' . $captcha->create() . '>';
    */

    /*
    // Create captcha with special parameters
    $captcha = new SunCaptcha(120, 40, '#ffffff', '#ffffff', '#000000'); // width, height, text color, line color, background color 
    echo '<img src=' . $captcha->create() . '>';
    */

    /*
    // Validate captcha
    $captcha = new SunCaptcha(); // create empty object
    $input = '9779fd'; // get input value from user
    if ($captcha->validate($input) === true) { // if validated
        echo 'Captcha value is correct.';
    } else {
        echo 'Captcha calue is wrong.';
    }
    */

?>
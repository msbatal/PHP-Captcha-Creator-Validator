<?php

    require_once ('SunCaptcha.php'); // Call 'SunCaptcha' class

    // Create captcha with default parameters
    $captcha = new SunCaptcha();
    echo '<img src=' . $captcha->create() . '>';

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

<!--
Optional refresh button (not part of the class itself). SunCaptcha only creates/validates the image; a "refresh" is just re-requesting a fresh one. Point the <img> at a small endpoint (see captcha-image.php in this folder) instead of an inline data URI, then swap its src on click. No framework/CSS assumptions here on purpose -- style the button however fits your project.
-->
<!--
<div>
    <img id="captchaImg" src="captcha-image.php" alt="Captcha">
    <button type="button" id="captchaRefresh">&#8635;</button>
</div>
<script>
    document.getElementById('captchaRefresh').addEventListener('click', function () {
        document.getElementById('captchaImg').src = 'captcha-image.php?t=' + Date.now();
    });
</script>
-->

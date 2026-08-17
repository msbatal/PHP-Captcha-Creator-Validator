<?php

// Standalone endpoint used by the refresh-button example in index.php.
// Kept separate from index.php so the <img src> can be re-requested
// on its own, without reloading the whole page.

require_once ('SunCaptcha.php'); // Call 'SunCaptcha' class

$captcha = new SunCaptcha();
$image = $captcha->create();
$data = explode(',', $image, 2);

header('Content-Type: image/jpeg');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
echo base64_decode($data[1]);

?>

<?php



// fix php builtin server
if (php_sapi_name() == "cli-server") {
    $extensions = array("php", "jpg", "gif", "css", "png", "js", "ico", "svg");
    $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    if (in_array($ext, $extensions)) {
        return false;
    }
}



// vendor
require dirname(__DIR__) . '/vendor/autoload.php';

// commencing countdown
require dirname(__DIR__) . '/app/countdown.php';

// eof
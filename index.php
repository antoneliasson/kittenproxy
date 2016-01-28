<?php
define("cache_filename", "/tmp/kittenproxy.png");
define("freshness_seconds", 5*60);

function fresh_cat() {
    if (file_exists(cache_filename)) {
        $stat = stat(cache_filename);
        if ($stat) {
            return time() - $stat['mtime'] < freshness_seconds;
        }
    }
    return false;
}

function read_cat() {
    return file_get_contents(cache_filename);
}

function get_new_cat() {
    $cat = file_get_contents('http://thecatapi.com/api/images/get?format=src&type=png&size=med');
    file_put_contents(cache_filename, $cat);
    return $cat;
}

function serve_cat($cat) {
    header('Content-Type: image/png');
    header('Content-Length: ' . strlen($cat));
    echo $cat;
}

$cat = '';
if (fresh_cat()) {
    $cat = read_cat();
} else {
    $cat = get_new_cat();
}
serve_cat($cat);
?>

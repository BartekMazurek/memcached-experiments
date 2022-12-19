<?php

$m = new Memcached();
$m->addServer("memcached", 11211);

# Get some test value
// $value = $m->get("phpTest");

/*if ($value) {
    echo 'Value already set: '.$value.PHP_EOL;
} else {
    $m->set("phpTest", rand(0, 10000));
}*/

# Get cached page
$page = $m->get("page.php");

if ($page) {
    echo $page;
} else {

    echo "Caching ...".PHP_EOL;

    $filename = "page.php";
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));

    $m->set("page.php", $contents);

    echo $m->get("page.php");
}

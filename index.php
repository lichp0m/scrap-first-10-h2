<?php
include "simple_html_dom.php";

$html = file_get_html('https://www.spryt.ru/');
$i = 0;
while ($i < 10) {
    $h2 = $html->find('h2', $i);
    echo "$h2->plaintext<br>";
    $i++;
}

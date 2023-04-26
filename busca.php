<?php
require 'simple_html_dom.php';
$html = file_get_html('https://www.amazon.es/gp/bestsellers/videogames/ref=zg_bs_nav_0');
$html = iconv('ISO-8859-1', 'UTF-8//IGNORE', $html);
$wrap_hotels = $html->find('div.p13n-sc-uncoverable-faceout');
foreach($wrap_hotels as $element){
    echo "<b>Nombre del Videojuego</b> <br />";
    echo $element->find('._cDEzb_p13n-sc-css-line-clamp-2_EWgCb', 0)->plaintext . '<br />';
    echo "<b>Precio</b> <br />";
    echo $element->find('._cDEzb_p13n-sc-price_3mJ9Z', 0)->plaintext . '<br />';
}


$html = file_get_html('https://www.instant-gaming.com/es/juegos/pc/');
$html = iconv('ISO-8859-1', 'UTF-8//IGNORE', $html);
$wrap_hotels = $html->find('div.item force-badge');
foreach($wrap_hotels as $element){
    echo "<b>Nombre del Videojuego</b> <br />";
    echo $element->find('.name', 0)->plaintext . '<br />';
    echo "<b>Precio</b> <br />";
    echo $element->find('.price', 0)->plaintext . '<br />';
}

?>
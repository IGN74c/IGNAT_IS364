<?php
function load_products_from_ini($filename): array
{
    return parse_ini_file($filename, true);
}

function display_product_card($id)
{
    $array = load_products_from_ini('model/products.ini');
    if (isset($array[$id])) {
        $card = $array[$id];
        echo "<div class=\"card\">";
        echo '<h2>Название: ' . $card['name'] . '</h2>';
        echo '<p>Цена: ' . $card['price'] . '</p>';
        echo '<p>Описание: ' . $card['description'] . '</p>';
        echo '<p>Кол-во: ' . $card['stock'] . '</p>';
        echo "</div>";
    } else {
        echo 'нет такой карточки';
    }
}

function display_all_products()
{
    $array = load_products_from_ini('model/products.ini');
    foreach ($array as $key => $value) {
        display_product_card($key);
    }
}
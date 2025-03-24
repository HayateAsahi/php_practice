<?php
    require_once 'classes/product.php';

    $products = [
        new Product("avocado", "アボカド", 230, "./images/image_1.jpg"),
        new Product("orange", "オレンジ", 300, "./images/image_2.jpg"),
        new Product("lemon", "レモン", 100, "./images/image_3.jpg"),
        new Product("pineapple", "パイナップル", 800, "./images/image_4.jpg")
    ];
?>
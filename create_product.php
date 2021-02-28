<?php
// create_product.php <name>
require_once "bootstrap.php";
require_once "./src/entities/Product.php";
require_once "./src/entities/User.php";


$product = $entityManager->getRepository('User')
                         ->findOneBy(array('login' => 'marius@isi.sn', 'password' => 'passer2019'));
if ($product === null) {
    echo "No product found.\n";
    exit(1);
}

echo sprintf("-%s\n", $product->getNom());
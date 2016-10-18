<?php

$products = get_products();



function get_products() {
    global $db;
    $query = 'SELECT * FROM products
              ORDER BY productID';
    $products = $db->query($query);
    return $products;
}

function get_products_by_category($category_id) {
    global $db;
    $query = "SELECT * FROM products
              WHERE products.categoryID = '$category_id'
              ORDER BY productID";
    $products = $db->query($query);
    return $products;
}

function get_product($product_id) {
    global $db;
    $query = "SELECT * FROM products
              WHERE productID = '$product_id'";
    $product = $db->query($query);
    $product = $product->fetch();
    return $product;
}

function delete_product($product_id) {
    global $db;
    $query = "DELETE FROM products
              WHERE productID = '$product_id'";
    $db->exec($query);
}

function add_product($code) {
    global $db;
    $query = "INSERT INTO countries
                 (Country)
              VALUES
                 ('$code')";
    $db->exec($query);
}

function add_year($name,$year) {
    global $db;
    $query = "INSERT INTO olympiads
                 (City,Year)
              VALUES
                 ('$name','$year')";
    $db->exec($query);
}
?>
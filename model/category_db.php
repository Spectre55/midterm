<?php
function get_winners() {
    global $db;
    $query = 'SELECT * FROM Winners
              ORDER BY ID';
    $result = $db->query($query);
    return $result;
}

function get_winnersCountry() {
    global $db;
    $query = 'SELECT * FROM Countries
              ORDER BY ID';
    $result = $db->query($query);
    return $result;
}

function get_winnersDate() {
    global $db;
    $query = 'SELECT * FROM Olympiads
              ORDER BY ID';
    $result = $db->query($query);
    return $result;
}






function get_con() {
    global $db;
    $query = 'SELECT * FROM Winners
              ORDER BY YearID';
    $result = $db->query($query);
    return $result;
}

/* function get_category_name($category_id) {
    global $db;
    $query = "SELECT * FROM categories
              WHERE categoryID = $category_id";
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['categoryName'];
    return $category_name;
} */

function add_category($name) {
    global $db;
    $query = "INSERT INTO categories (Countries)
              VALUES ('$name')";
    $db->exec($query);
}

/* function add_year($name,$year) {
    global $db;
    $query = "INSERT INTO categories (olympiads)
              VALUES ('$name','$year')";
    $db->exec($query);
} */

function delete_category($category_id) {
    global $db;
    $query = "DELETE FROM categories
              WHERE categoryID = '$category_id'";
    $db->exec($query);
}
?>
<?php

$db = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// $sql = "SELECT * FROM test";
// $stmt = $db->query($sql);
// $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (!empty($_POST)) {
    $data = $_POST;
} else {
    $data = $_GET;
}

$meta = explode(".", $data['meta']);
[$model, $function] = $meta;

unset($data['meta']);

$instense = new $model($data, $db);
$result = call_user_func([$instense, $function], ...[$data['id']]);

$folder = [
    'User' => 'users',
    'Product' => 'products',
];

$files = [
    'create' => 'index',
    'delete' => 'index',
    'show' => 'index',
    'show_by_id' => 'show',
];

require_once "../$folders[$model]/$files[$function].php";

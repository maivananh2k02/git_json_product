<?php
include "../function.php";
if ($_SERVER['REQUEST_METHOD'] == "POST"){

    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    $address = $_REQUEST['address'];

    $student = [
        "name" => $name,
        "age" => $age,
        "address" => $address
    ];

    store($student,"../data.json");
    header("Location: ../index.php");
}

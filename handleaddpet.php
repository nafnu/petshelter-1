<?php 

include 'connection.php';
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$name = filter_input(INPUT_POST, 'name',  FILTER_SANITIZE_STRING);
$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);

//declare the error array
$error =[];

if(!isset($name) || empty($name)){
    $error['name'] = 'Pet name is required';
}
if(!isset($description) || empty($description)){
    $error['description'] = 'Description is required';
}
if(!isset($age) || empty($age)){
    $error['age'] = 'Age is required';
}
$adopted = false;

if(empty($error)){

    $sql = "INSERT INTO pet (name, age, description, adopted) VALUES (?,?,?,?)";

    $stmt= $conn->prepare($sql);

    $stmt->bind_param("sisb",  $name, $age, $description, $adopted);

    $stmt->execute();
    $conn->close();

    header("Location: index.php");
} else{
    echo '<pre>';
    print_r($error);
    echo '</pre>';
    require_once("addpet.php");
}

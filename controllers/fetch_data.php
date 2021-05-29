<?php

//fetch_data.php
//source code
//https://www.webslesson.info/2018/08/live-table-add-edit-delete-using-php-with-jsgrid-plugin.html

$connect = new PDO("mysql:host=localhost;dbname=appointment_data", "root", "");

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET')
{
 $data = array(
  ':Branch'   => "%" . $_GET['Branch'] . "%",
  ':Year'   => "%" . $_GET['Year'] . "%",
  ':Month'     => "%" . $_GET['Month'] . "%",
  ':Target'    => "%" . $_GET['Target'] . "%"
 );
 $query = "SELECT * FROM target_data WHERE Branch LIKE :Branch AND Year LIKE :Year AND Month LIKE :Month AND Target LIKE :Target ORDER BY id DESC";

 $statement = $connect->prepare($query);
 $statement->execute($data);
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output[] = array(
   'id'    => $row['id'],   
   'Branch'  => $row['Branch'],
   'Year'   => $row['Year'],
   'Month'    => $row['Month'],
   'Target'   => $row['Target']
  );
 }
 header("Content-Type: application/json");
 echo json_encode($output);
}

if($method == "POST")
{
 $data = array(
  ':Branch'  => $_POST['Branch'],
  ':Year'  => $_POST["Year"],
  ':Month'    => $_POST["Month"],
  ':Target'   => $_POST["Target"]
 );

 $query = "INSERT INTO target_data (Branch, Year, Month, Target) VALUES (:Branch, :Year, :Month, :Target)";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == 'PUT')
{
 parse_str(file_get_contents("php://input"), $_PUT);
 $data = array(
  ':id'   => $_PUT['id'],
  ':Branch' => $_PUT['Branch'],
  ':Year' => $_PUT['Year'],
  ':Month'   => $_PUT['Month'],
  ':Target'  => $_PUT['Target']
 );
 $query = "
 UPDATE target_data 
 SET Branch = :Branch, 
 Year = :Year, 
 Month = :Month, 
 Target = :Target 
 WHERE id = :id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == "DELETE")
{
 parse_str(file_get_contents("php://input"), $_DELETE);
 $query = "DELETE FROM target_data WHERE id = '".$_DELETE["id"]."'";
 $statement = $connect->prepare($query);
 $statement->execute();
}

?>


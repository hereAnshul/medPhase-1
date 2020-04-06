<?php
session_start();
require 'connect.php';
if($_SESSION["docid"]==""){
  echo "<script> alert('Bad Bad Boy');
      location = '404.php';
          </script>";
}


$id = $_POST["id"];
$_SESSION["temp2"] = $id;
//echo $_SESSION["temp2"];
/*
$Query = array('_id'=>'1001');
$collection = $db->doctor_details;
$j = $collection->find();
$array = iterator_to_array($j);
echo $collection->count();

  //foreach ( $array[0] as $key => $value) {
foreach ( $array as $key => $value) {

echo $value['_id'];
echo " ";
}
*/
?>

<?php
session_start();
error_reporting(0);
if($_SESSION["doctor_login"] == 2 && $_SESSION["patient_login"] == 1)
{
  echo "<script> alert('Bad Bad Boy');
      location = '404.php';
          </script>";
}

require 'connect.php';
$caseid = $_SESSION["temp3"];
$hid = $_SESSION["temp"];
$prefix = "eye_";
$final_str = $prefix.$hid;
$database_casesheet = $client->$final_str;
$collection = $database_casesheet->$caseid;
$cursor = $collection->find();
$a = $_SESSION["temp2"];
if($a == 100)
{
  $a = 0;
}
$array = iterator_to_array($cursor);
?>

<table class="table table-striped table-dark">
  <thead>

    <tr>
      <?php
      foreach ($array[$a] as $key => $value) { ?>
      <th scope="col"> <?php echo $key; ?> </th>
      <?php } ?>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
      foreach ($array[$a] as $key => $value) { ?>
      <td><?php echo $value; ?></td>
      <?php } ?>
    </tr>

  </tbody>
</table>

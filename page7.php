<?php
session_start();
error_reporting(0);
if($_SESSION["docid"]==""){
  echo "<script> alert('Bad Bad Boy');
      location = '404.php';
          </script>";
}
require 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link rel="stylesheet" href="1.css">
    <link rel="stylesheet" href="css/topnav.css">
    <!-- <style>
        div {
            display: inline-block;
        }
    </style> -->
</head>

    <body>
        <div class="container">
		<form action = "drugcheck.php" method = "post">
        <form class="form-inline">
        <div class="form-group">
        <table width=100%>
        <tr><td width=40%><h2>Drugs Used</h2></td>
        <td width=35%></td>
        <td><input type="text" value="" class="form-control" name="searchColumn" id="searchColumn"/>Search<br/></td>
        </table>
        <hr>
        <div class="topnav">
          <a href="general.php">General</a>
          <a href="pain.php">Pain</a>
          <a href="visdis.php">Visual Disturbance</a>
          <a href="page4.php">Past History</a>
          <a href="page5.php">Related Information</a>
          <a href="page6.php">Related Information 2</a>
          <a class="active" href="page7.php">Drug Usage</a>
          <a href="page8.php">Exposure and Family History</a>
          <a href="page9.php">Local Examination</a>
          <a href="page10.php">Lids</a>
          <a href="page11.php">Iris</a>
          <a href="page12.php">Fundoscopy</a>
        </div>
        <hr>
            <div><input type="checkbox" name = "b0" value="Amiodarome"> Amiodarome</div>
            <div><input type="checkbox" name = "b1" value="Corticosteroids"> Corticosteroids</div>
            <div><input type="checkbox" name = "b2" value="Rifasutin"> Rifasutin</div>
            <div><input type="checkbox" name = "b3" value="Cidofoviv"> Cidofoviv</div>
            <div><input type="checkbox" name = "b4" value="Anticholinergic"> Anticholinergic</div>
            <div><input type="checkbox" name = "b5" value="Chloroquine"> Chloroquine</div>
            <div><input type="checkbox" name = "b6" value="Chlorpromazine"> Chlorpromazine</div>
            <div><input type="checkbox" name = "b7" value="Phenothiazine"> Phenothiazine</div>
            <div><input type="checkbox" name = "b8" value="Tamoxifen"> Tamoxifen</div>
            <div><input type="checkbox" name = "b9" value="Sildenofil"> Sildenofil</div>
            <div><input type="checkbox" name = "b10" value="Ethambutol"> Ethambutol</div>
            <div><input type="checkbox" name = "b11" value="Isoniazid"> Isoniazid</div>
            <div><input type="checkbox" name = "b12" value="Infliximab"> Infliximab</div>
            <div><input type="checkbox" name = "b13" value="Anticonvulsants"> Anticonvulsants</div>
            <br/>
            <br/>
            <input class="btn btn-primary" name = "next2" type = "submit" value = "Next">

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                    <script>

            $(document).ready(function(){

                $("#searchColumn").on("input",function(){

                    var searchTxt = $(this).val();
                    searchTxt = searchTxt.replace(/[.()+]0/g,"\\$&");

                    var patt = new RegExp("^" + searchTxt,"i");

                    $(":checkbox").each(function(){

                        if(patt.test($(this).val()))
                            $(this).closest("div").show(500);

                        else
                            $(this).closest("div").hide(500);

                    })
                })
            })
    </script>
    </body>
</html>

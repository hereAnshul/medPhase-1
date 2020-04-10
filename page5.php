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
    <style>
    .nested {
      display: none;
    }
    .active {
      display: block;
    }
    </style>
</head>
<body>
<div class="container">
	<form action = "relinfo.php" method = "post">
  <form class="form-inline">
  <div class="form-group">
    <table width=100%>
      <tr><td width = 40%><h2>Related Info</h2>
          <td width=35%></td>
          <td><input type="text" class="form-control" value="" name="searchColumn" id="searchColumn"/><b>Search</b><br/>
    </table><hr>
    <div class="topnav">
      <a href="general.php">General</a>
      <a href="pain.php">Pain</a>
      <a href="visdis.php">Visual Disturbance</a>
      <a href="page4.php">Past History</a>
      <a class="active" href="page5.php">Related Information</a>
      <a href="page6.php">Related Information 2</a>
      <a href="page7.php">Drug Usage</a>
      <a href="page8.php">Exposure and Family History</a>
      <a href="page9.php">Local Examination</a>
      <a href="page10.php">Lids</a>
      <a href="page11.php">Iris</a>
      <a href="page12.php">Fundoscopy</a>
    </div>
    <hr>
    <ul>
      <div><input type="checkbox" name="a0" value="Nyctalopia"> Nyctalopia(Night Blindness)<br/></div>
      <div><input type="checkbox" name="a1" value="Hemeralopia"> Hemeralopia(Day Blindness)<br/></div>
      <div><input type="checkbox" name="a2" value="Nystagmus" onclick="changeClass1()"> Nystagmus<br/></div>
      <ul id="main1" class="nested">
        <div><input type="radio" name="rhythmical" value="True" onclick="changeClass2()"> Rhythmical<br/></div>
        <div><input type="radio" name="rhythmical" value="False" onclick="changeClass2()"> Non Rhythmical<br/></div>
        <ul id="main2" class="nested">
        Type
        <div><input type="radio" name="type" value="Vertical"> Vertical<br/></div>
        <div><input type="radio" name="type" value="Horizontal"> Horizontal<br/></div>
        <div><input type="radio" name="type" value="Rotatory"> Rotatory<br/></div>
        <div><input type="radio" name="type" value="Multi Directional"> Multi Directional<br/></div>
    </ul>
</ul>
<br/><hr>
<h3>Swelling</h3>
<h4>Site</h4>
<div><input type="checkbox" name="site" value="Lids"> Lids<br/></div>
<div><input type="checkbox" name="site" value="Conjunctiva"> Conjunctiva<br/></div>
<div><input type="checkbox" name="site" value="Periorbital"> Periorbital<br/></div>
<br/><hr>
<h4>Onset</h4>
<div><input type="checkbox" name="onset" value="Sudden"> Sudden<br/></div>
<div><input type="checkbox" name="onset" value="Gradual"> Gradual<br/></div>
<br/><hr>
<h4>Associated Symptoms</h4>
<div><input type="checkbox" name="b0" value="Pain"> Pain<br/></div>
<div><input type="checkbox" name="b1" value="Itching"> Itching<br/></div>
<div><input type="checkbox" name="b2" value="Rash"> Rash<br/></div>
<div><input type="checkbox" name="b3" value="Increased Lacrimation"> Increased Lacrimation<br/></div>
<div><input type="checkbox" name="b4" value="Skin Redness"> Redness of Surrounding Skin<br/></div>
<br/><hr>
<h4>Character</h4>
<div><input type="radio" name="c0" value="Pitting"> Pitting<br/></div>
<div><input type="radio" name="c0" value="Non Pitting"> Non Pitting<br/></div>
<div><input type="checkbox" name="c1" value="Hard"> Hard<br/></div>
<br/>
<div><input type="checkbox" name="c2" value="Ocular Irritation"> Ocular Irritation<br/></div>
<div><input type="checkbox" name="c3" value="Foreign Body Sensation"> Foreign Body Sensation<br/></div>
</ul>
<br/>
<br/>

<input class="btn btn-primary" name = "next2" type = "submit" value = "Next">
</form>
    <script>
      function changeClass1(){
          document.getElementById("main1").classList.toggle('active');
      }
      function changeClass2(){
          document.getElementById("main2").classList.toggle('active');
      }
    </script>
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

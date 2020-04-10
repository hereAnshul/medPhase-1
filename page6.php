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
	  <form action = "relinfoc.php" method = "post">
    <form class="form-inline">
    <div class="form-group">
    <table width=100%>
    <tr><td width=40%><h2>Related Info Continued</h2></td>
    <td width=35%></td>
    <td><input type="text" class="form-control" value="" name="searchColumn" id="searchColumn"/><b>Search</b><br/>
    </table>
    <hr>
    <div class="topnav">
      <a href="general.php">General</a>
      <a href="pain.php">Pain</a>
      <a href="visdis.php">Visual Disturbance</a>
      <a href="page4.php">Past History</a>
      <a href="page5.php">Related Information</a>
      <a class="active" href="page6.php">Related Information 2</a>
      <a href="page7.php">Drug Usage</a>
      <a href="page8.php">Exposure and Family History</a>
      <a href="page9.php">Local Examination</a>
      <a href="page10.php">Lids</a>
      <a href="page11.php">Iris</a>
      <a href="page12.php">Fundoscopy</a>
    </div>
    <hr>
    <ul>
		<div><input type="checkbox" name="redeye" value="redeye">Red Eye<br/></div>
      <div><input type="text" class="form-control" placeholder="Duration if exist" name="redeyed"><br/></div>
		<div><input type="checkbox" name="lacrimation" value="lacrimation">Lacrimation<br/></div>
		  <div><input type="text" class="form-control" placeholder="Duration if exist" name="lacrimationd"><br/></div>
		<h4><b>Discharge From Eye</b></h4>
        <div><input type="radio" name="dischargefromeye" value="Clear"> Clear<br/></div>
        <div><input type="radio" name="dischargefromeye" value="Purulent"> Purulent<br/></div>
        <div><input type="radio" name="dischargefromeye" value="Mucopurulent"> Mucopurulent<br/></div>
        <div><input type="checkbox" name="a0" value="DroopingOfEyelid"> Drooping of Eyelid<br/></div>
        <div><input type="checkbox" name="a1" value="Limited"> Limited Movement of Eye<br/></div>
        <div><input type="checkbox" name="a2" value="DifficultToAdapt"> Difficulty in dark adaptation<br/></div>
        <div><input type="checkbox" name="a3" value="Spots"> Spots on eye white<br/></div>
        <div><input type="checkbox" name="a4" value="WhiteReflection"> White Reflex of Pupil<br/></div>
        <div><input type="checkbox" name="a5" value="EyeRubbing"> Eye Rubbing<br/></div>
        <div><input type="checkbox" name="a6" value="Lump"> Lump on Eyelid<br/></div>
        <div><input type="checkbox" name="FEV" value="Fever" onclick="changeClass1()"> Fever<br/></div>
        <ul id="main1" class="nested">
            <div>Associated Factors<br/>
                 <input type="checkbox" name="fevfactor" value="chills"> Chills</div>
            <div><input type="checkbox" name="fevfactor" value="rigor"> Rigor</div>
        </ul>
        <div>Malaise <input type="text" class="form-control" placeholder="Duration if exist" name="malaise"><br/></div>
        <div><input type="checkbox" name="b0" value="GlassChange"> Frequent Changes of Glasses<br/></div>
        <div><input type="checkbox" name="b1" value="VisualHallucination"> Visual Hallucination<br/></div>
        <div><input type="checkbox" name="b2" value="Chromatopsia"> Coloured Vision(Chromatopsia)<br/></div>
        <div>Anisocoria <input type="text" class="form-control" placeholder="Duration if exist" name="anisocoria"><br/></div>
    </ul>
<br/>
<br/>
<input class="btn btn-primary" name = "next2" type = "submit" value = "Next">
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

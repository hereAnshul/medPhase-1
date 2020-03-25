<?php
session_start();
if($_SESSION["docid"]==""){
  echo "<script> alert('Bad Bad Boy');
      location = '404.php';
          </script>";
}
require 'connect.php';

?>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="1.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<link rel="stylesheet" href="css/topnav.css">
  <title>List of History</title>

  <style type="text/css">
    .nested {
      display: none;
    }

    .active {
      display: block;

    }
  </style></head>
  <body>
  	<div class="container">
  	<form action="check7.php" method="post">
  	<table width=100%>
  		<tr><td width=40%>
    		<h2>Fundoscopy</h2></td>
    		<td width="35%"></td>
    		<td><input type="text" value="" class="form-control" name="searchColumn" id="searchColumn"/><label><b>Search</b></label></td></tr>
    </table>
    <hr>
		<div class="topnav">
      <a href="general.php">General</a>
      <a href="pain.php">Pain</a>
      <a href="visdis.php">Visual Disturbance</a>
      <a href="page4.php">Past History</a>
      <a href="page5.php">Related Information</a>
      <a href="page6.php">Related Information 2</a>
      <a href="page7.php">Drug Usage</a>
      <a href="page8.php">Exposure and Family History</a>
      <a href="page9.php">Local Examination</a>
      <a href="page10.php">Lids</a>
      <a href="page11.php">Iris</a>
      <a class="active" href="page12.php">Fundoscopy</a>
    </div>
    <hr>
	<ul>
      <h4>Optic Disc</h4>
	  <div><input type="checkbox" name=" pseudopapillitis" value=" Pseudopapillitis"> Pseudopapillitis<br/></div>
      <div><input type="checkbox" name=" papilloedema" value=" Papilloedema"> Papilloedema<br/></div>
	  <div><input type="checkbox" name=" neuroretinitis" value=" Neuroretinitis"> Neuroretinitis<br/></div>
      <div><input type="checkbox" name=" neovascularization" value=" Neovascularization">
      	 Neovascularization<br/></div>

	  <div><input type="checkbox" value="Color" name="color" onclick="changeClass1()"> Color</div>
        <ul class="nested" id="main1">
          <div><input type="checkbox" name="pink" value="Pink"> Pink<br/></div>
          <div><input type="checkbox" name="white" value="White"> White<br/></div>
		</ul>
	  <div><input type="checkbox" name="polar" value="Polar" onclick="changeClass2()"> Polar<br/></div>
        <ul class="nested" id="main2">
          <div><input type="checkbox" name="partial" value="Partial"> Partial<br/></div>
          <div><input type="checkbox" name="total" value="Total"> Total<br/></div>
	    </ul>
      <div><input type="checkbox" name="champagnecorkappearance" value="Champagne cork appearance"> Champagne cork appearance<br/></div>
      <div><input type="checkbox" name="atrophy" value="Atrophy"> Atrophy <br/></div>
      <div><input type="checkbox" name="lamellardotsign" value="Lamellar dot sign"> Lamellar dot sign<br/></div>
      <div><input type="checkbox" name="thinningofneuroretinalrim" value="Thinning of neuroretinal rim"> Thinning of neuroretinal rim<br/></div>
	  <br/>
	  <hr>
      <h4>Physiological Cup</h4>
      <div><input type="checkbox" name="sudden" value="Sudden"> Asymmetry<br/></div>
	  <label>Cup Disc ratio: <input type="text" placeholder="cupdiscratio" name="Cup Disc ratio" id="Cup Disc ratio"/></label>
      <br/><hr>
	  <h4>Edge of disc</h4>
      <div><input type="checkbox" name="blurringofdiscmargin" value="Blurring of disc margin"> Blurring of disc margin<br/></div>
      <br/><hr>
	  <h4>Retinal Vessel</h4>
      <div><input type="checkbox" name="pulsationof   " value="Pulsation of    "> Pulsation of             <br/></div>
      <div><input type="checkbox" name="bonnetsign" value="Bonnet Sign"> Bonnet Sign<br/></div>
	  <div><input type="checkbox" name="marcuscreasesign     " value="Marcus Crease Sign     "> Marcus Crease Sign               <br/></div>
	  <div><input type="checkbox" name="rightangledeflectionatavcrossing" value="Right angle deflection at AV crossing"> Right angle deflection at AV crossing<br/></div>
	  <div><input type="checkbox" name="copperwire" value="Copper-wire"> Copper-wire<br/></div>
	  <div><input type="checkbox" name="silverwire" value="Silver-wire"> Silver-wire<br/></div>
	  <div><input type="checkbox" name="microaneurysm" value="Microaneurysm"> Microaneurysm<br/></div>
	  <div><input type="checkbox" name="tortuousveinandengorged" value="Tortuous vein and engorged"> Tortuous vein and engorged<br/></div>
	  <br/><hr>
	  <h4>Macular Region</h4>
      <div><input type="checkbox" name="macularstar" value="Macular Star"> Macular Star<br/></div>
	  <div><input type="checkbox" name="cherryredspot" value="Cherry red spot"> Cherry red spot<br/></div>
	  <div><input type="checkbox" name="drusens" value="Drusens">Drusens<br/></div>
	  <div><input type="checkbox" name="cystoidmaculardegeneration" value="Cystoid Macular Degeneration"> Cystoid Macular Degeneration<br/></div>
	  <div><input type="checkbox" name="neovascularization" value="Neovascularization"> Neovascularization<br/></div>
	  <div><input type="checkbox" name="honeycombappearance" value="Honeycomb Appearance"> Honeycomb Appearance<br/></div>
      <br/><hr>
	  <h4>Hemorrhage in Retina</h4>
      <div><input type="checkbox" name="flameshaped" value="Flame/Splinter shaped"> Flame/Splinter shaped<br/></div>
	  <div><input type="checkbox" name="dotblot" value="Dot Blot"> Dot Blot<br/></div>
	  <div><input type="checkbox" name="retrohyaloid" value="Retrohyaloid"> Retrohyaloid<br/></div>
	  <div><input type="checkbox" name="subretinal" value="Sub Retinal"> Sub Retinal<br/></div>
	  <div><input type="checkbox" name="viterous" value="Viterous"> Viterous<br/></div>
      <br/><hr>
	  <h2>Final Diagonosis</h2>
          <ol>

  			<div class="form-group">

                   <label>Diseases</label><input type="text" class="form-control"  name="t0"><br><br>

                   <label>Comments</label><textarea name = "t1" rows="4" cols="50" class="form-control"></textarea><br><br>
          </ol>
		  <h2>Medicines</h2>
          <ol>

  			<div class="form-group">
              <li> <input type="text" class="form-control" name="c0">

              <li> <input type="text" class="form-control" name="c1">

              <li> <input type="text" class="form-control"  name="c2">

              <li> <input type="text" class="form-control"  name="c3">

			<li> <input type="text" class="form-control" name="c4">

              <li> <input type="text" class="form-control" name="c5">

              <li> <input type="text" class="form-control"  name="c6">

              <li> <input type="text" class="form-control"  name="c7">

          </ol>


	</ul>
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
</div>
  </body>

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
  <title>List of History</title>
  <link rel="stylesheet" href="css/topnav.css">
  <style type="text/css">
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
	<form action = "page11.php" action = "post">
    <table width=100%>
      <tr><td width=40%><h2>Lids</h2></td>
          <td width="35%"></td>
          <td><input type="text" value="" class="form-control" name="searchColumn" id="searchColumn"/><b>Search</b></td>
      </tr>
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
      <a class="active" href="page10.php">Lids</a>
      <a href="page11.php">Iris</a>
      <a href="page12.php">Fundoscopy</a>
    </div>
    <hr>
      <ul>

      <h4>Position</h4>
		<div><input type="checkbox" name="normal" value="Normal"> Normal<br/></div>
        <div><input type="checkbox" value="Ptosis" name="ptosis" onclick="changeClass1()"> Ptosis</div>
        <ul class="nested" id="main1">
          <div><input type="checkbox" name="complete" value="Complete"> Complete<br/></div>
          <div><input type="checkbox" name="partial" value="Partial"> Partial<br/></div>
        </ul>
      <br/><hr>
      <h4>Movement</h4>
      <div><input type="checkbox" name="synchronous" value="Synchronous"> Synchronous<br/></div>
      <div><input type="checkbox" name="lidlag" value="LidLag"> Lid-Lag<br/></div>
      <br/><hr>
      <h4>Lid Margin</h4>
      <div><input type="checkbox" name="normal" value="Burning"> Burning<br/></div>
      <div><input type="checkbox" name="eutropian" value="Eutropian"> Eutropian<br/></div>
      <div><input type="checkbox" name="ectropian" value="Ectropian"> Ectropian<br/></div>
      <div><input type="checkbox" name="swelling" value="Swelling"> Swelling<br/></div>
      <div><input type="checkbox" name="stye" value="Stye"> Stye<br/></div>
      <div><input type="checkbox" name="papilloma" value="Papilloma"> Papilloma<br/></div>
      <div><input type="checkbox" name="marginalcholozion" value="marginalcholozion"> Marginal Cholozion<br/></div>
	  <br/><hr>
      <h4>Eye Lashes</h4>
      <div><input type="checkbox" name="trichiasis" value="Trichiasis"> Trichiasis<br/></div>
      <div><input type="checkbox" name="distichiasis" value="distichiasis"> Distichiasis<br/></div>
      <div><input type="checkbox" name="madrosis" value="Madrosis"> Madrosis<br/></div>
      <div><input type="checkbox" name="poliosis" value="Poliosis"> Poliosis<br/></div>
      <div><input type="checkbox" name="stye" value="Stye" >Stye<br/></div>
       <div><input type="checkbox" value="Scales" name="scales"> Scales at Lid Margin</div>
      	<br/>
		<hr>
      <h4>Palpebral aperture</h4>
      <div><input type="checkbox" name="normal" value="Normal"> Normal<br/></div>
      <div><input type="checkbox" name="ankylobelpahron" value="Ankylobelpahron"> Ankylobelpahron<br/></div>
      <div><input type="checkbox" name="blepharophimosis" value="Blepharophimosis"> Blepharophimosis<br/></div>
      <div><input type="checkbox" name="verticalnarrow" value="VerticalNarrow"> Vertical Narrow<br/></div>
      <div><input type="checkbox" name="verticalwide" value="VerticalWide"> Vertical-Wide<br/></div>
      <br/><hr>
      <h4>Lacrimal Apparatus</h4>

            <div><input type="checkbox" name="lacrimalgland" value="Lacrimalgland"> Swelling of Lacrimal gland<br/></div>
            <div><input type="checkbox" name="nesolacrimal" value="Nesolacrimal"> Nasolacrimal Duct Blockage<br/></div>
        <hr>
      <h4>Conjuctiva</h4>

	  <div><input type="checkbox" value="Chemosis" name="chemosis" onclick="changeClass2()"> Chemosis</div>
        <ul class="nested" id="main2">
          <div><input type="checkbox" name="membranous" value="Membranous"> Membranous<br/></div>
          <div><input type="checkbox" name="pseudomembranous" value="Pseudomembranous"> Pseudomembranous<br/></div>
		  <div><input type="checkbox" name="nonmembranous" value="nonmembranous"> Non - Membranous<br/></div>
       </ul>

   <div><input type="checkbox" value="Congestion" name="congestion" onclick="changeClass3()"> Congestion</div>
        <ul class="nested" id="main3">
		<div><input type="checkbox" name="conjuctivalvessels" value="ConjuctivalVessels"> Conjuctival-Veins<br/></div>
		  <div><input type="checkbox" name="ciliaryveins" value="nonmembranous"> Ciliary-Veins<br/></div>
		  <div><input type="checkbox" name="episcleralveins" value="EpiscleralVeins"> Episcleral-Veins<br/></div>
       </ul>

<div><input type="checkbox" value="follicles" name="follicles" onclick="changeClass4()"> Follicles</div>
        <ul class="nested" id="main4">
		  <div><input type="checkbox" name="mature" value="Mature"> Mature<br/></div>
		  <div><input type="checkbox" name="immature" value="Immature"> Immature<br/></div>
		   </ul>
		   <div><input type="checkbox" name="altline" value="altline"> Alt's Line<br/></div>

		<div><input type="checkbox" value="Position" name="Position" onclick="changeClass5()"> Position</div>
        <ul class="nested" id="main5">
			<div><input type="checkbox" name="upperbulbar1" value="UB"> Upper Bulbar<br/></div>
		  <div><input type="checkbox" name="lowerbulbar1" value="LB"> Lower Bulbar<br/></div>
		  <div><input type="checkbox" name="limbal1" value="Limbal"> Limbal<br/></div>
		  <div><input type="checkbox" name="upperfornix1" value="UF"> Upper Fornix<br/></div>
		  <div><input type="checkbox" name="lowerfornix1" value="LF"> Lower Fornix<br/></div>
		<div><input type="checkbox" name="uppertarsel1" value="UT"> Upper Tarsel<br/></div>
		 <div><input type="checkbox" name="lowertarsel1" value="LT"> Lower Tarsel<br/></div>
	   </ul>

	     <div><input type="checkbox" value="Concretion" name="concretion" onclick="changeClass6()">Concretion</div>
        <ul class="nested" id="main6">
			<div><input type="checkbox" name="upperbulbar2" value="ub"> Upper Bulbar<br/></div>
		  <div><input type="checkbox" name="lowerbulbar2" value="lb"> Lower Bulbar<br/></div>
		  <div><input type="checkbox" name="limbal2" value="Limbal"> Limbal<br/></div>
		  <div><input type="checkbox" name="upperfornix2" value="uf"> Upper Fornix<br/></div>
		  <div><input type="checkbox" name="lowerfornix2" value="lf"> Lower Fornix<br/></div>
		<div><input type="checkbox" name="uppertarsel2" value="ut"> Upper Tarsel<br/></div>
		 <div><input type="checkbox" name="lowertarsel2" value="lt"> Lower Tarsel<br/></div>
	   </ul>

		<div><input type="checkbox" value="Papillaryhypertrophy" name="papillaryhypertrophy" onclick="changeClass7()">Papillary Hypertrophy</div>
        <ul class="nested" id="main7">
			<div><input type="checkbox" name="upperbulbar3" value="ub"> Upper Bulbar<br/></div>
		  <div><input type="checkbox" name="lowerbulbar3" value="lb"> Lower Bulbar<br/></div>
		  <div><input type="checkbox" name="limbal3" value="Limbal"> Limbal<br/></div>
		  <div><input type="checkbox" name="upperfornix3" value="uf"> Upper Fornix<br/></div>
		  <div><input type="checkbox" name="lowerfornix3" value="lf"> Lower Fornix<br/></div>
		<div><input type="checkbox" name="uppertarsel3" value="ut"> Upper Tarsel<br/></div>
		 <div><input type="checkbox" name="lowertarsel3" value="lt"> Lower Tarsel<br/></div>
	   </ul>

	   <div><input type="checkbox" value="Pseudocyst" name="pseudocyst" onclick="changeClass8()">Pseudocyst</div>
        <ul class="nested" id="main8">
			<div><input type="checkbox" name="upperbulbar4" value="ub"> Upper Bulbar<br/></div>
		  <div><input type="checkbox" name="lowerbulbar4" value="lb"> Lower Bulbar<br/></div>
		  <div><input type="checkbox" name="limbal4" value="Limbal"> Limbal<br/></div>
		  <div><input type="checkbox" name="upperfornix4" value="uf"> Upper Fornix<br/></div>
		  <div><input type="checkbox" name="lowerfornix4" value="lf"> Lower Fornix<br/></div>
		<div><input type="checkbox" name="uppertarsel4" value="ut"> Upper Tarsel<br/></div>
		 <div><input type="checkbox" name="lowertarsel4" value="lt"> Lower Tarsel<br/></div>
	   </ul>
	   <div><input type="checkbox" name="xerosis" value="Xerosis"> Xerosis<br/></div>
	   <div><input type="checkbox" name="symblepharon" value="symblepharon"> Symblepharon<br/></div>
		<div><input type="checkbox" name="petechialhemorrhage" value="PetechialHemorrhage"> Petechial Hemorrhage<br/></div>
		<div><input type="checkbox" value="Phlycten" name="phlycten" onclick="changeClass9()"> Phlycten</div>
        <ul class="nested" id="main9">
			<div><input type="checkbox" name="upperbulbar5" value="ub"> Upper Bulbar<br/></div>
		  <div><input type="checkbox" name="lowerbulbar5" value="lb"> Lower Bulbar<br/></div>
		  <div><input type="checkbox" name="limbal5" value="Limbal"> Limbal<br/></div>
		  <div><input type="checkbox" name="upperfornix5" value="uf"> Upper Fornix<br/></div>
		  <div><input type="checkbox" name="lowerfornix5" value="lf"> Lower Fornix<br/></div>
		<div><input type="checkbox" name="uppertarsel5" value="ut"> Upper Tarsel<br/></div>
		 <div><input type="checkbox" name="lowertarsel5" value="lt"> Lower Tarsel<br/></div>
	   </ul>
	   <div><input type="checkbox" name="trantaspot" value="trantaspot"> Trantaspot<br/></div>
		<div><input type="checkbox" name="pinguecula" value="pinguecula"> Pinguecula<br/></div>
		<div><input type="checkbox" value="pterygium" name="pterygium" onclick="changeClass10()"> Pterygium</div>
        <ul class="nested" id="main10">
			<div><input type="checkbox" name="attackingcornea" value="attackingcornea"> Attacking Cornea<br/></div>
		  <div><input type="checkbox" name="neovascularization" value="neovascularization"> Neovascularization<br/></div>
	   </ul>

	   <div><input type="checkbox" value="tumor" name="tumor" onclick="changeClass11()"> Tumor</div>
        <ul class="nested" id="main11">
			<div><input type="checkbox" name="desmoid" value="desmoid"> Desmoid<br/></div>
	   </ul>
	</ul>
    <br/>
    <br/>	<hr>
	<input class="btn btn-primary" name = "next2" type = "submit" value = "Next">
    </form>
	<script>
      function changeClass1(){
          document.getElementById("main1").classList.toggle('active');
      }
      function changeClass2(){
          document.getElementById("main2").classList.toggle('active');
      }
      function changeClass3() {
            document.getElementById("main3").classList.toggle('active');
      }
	    function changeClass4() {
            document.getElementById("main4").classList.toggle('active');

      }
	   function changeClass5() {
            document.getElementById("main5").classList.toggle('active');

      }
	   function changeClass6() {
            document.getElementById("main6").classList.toggle('active');

      }
	   function changeClass7() {
            document.getElementById("main7").classList.toggle('active');

      }
	   function changeClass8() {
            document.getElementById("main8").classList.toggle('active');

      }
 function changeClass9() {
            document.getElementById("main9").classList.toggle('active');

      }
 function changeClass10() {
            document.getElementById("main10").classList.toggle('active');

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

</head>

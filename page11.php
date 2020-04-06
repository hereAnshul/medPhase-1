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
      </style>
</head>
  <body>
    <div class="container">
         <form action = "irisCheck.php" method = "post">
         <table width=100%>
      <tr><td width = 40%><h2>Iris</h2></td>
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
        <a href="page10.php">Lids</a>
        <a class="active" href="page11.php">Iris</a>
        <a href="page12.php">Fundoscopy</a>
      </div>
      <hr>
      <ul>


    <h4>Iris</h4>
	  	<div><input type="checkbox" name="ip0" value="similarappearances"> Similar Appearances<br/></div>
	  	<div><input type="checkbox" name="ip1" value="betweeneyes"> Between Eyes<br/></div>
	  	<div><input type="checkbox" name="ip2" value="lesious"> Lesious<br/></div>
	  	<div><input type="checkbox" name="ip3" value="tears"> Tears<br/></div>
		  <div><input type="checkbox" name="ip4" value="laceration"> Laceration<br/></div>
		  <div><input type="checkbox" name="ip5" value="prolapse"> Prolapse<br/></div>
		<br/><hr>

      <h4>Pupils</h4>
      <div><input type="checkbox" name="pp0" value="variablesizes" > Variable Sizes<br/></div>
      <div><input type="checkbox" name="pp1" value="reacttolight"> React To Light<br/></div>
	    <div><input type="checkbox" name="pp2" value="shift"> Position Shift<br/></div>
	    <div><input type="checkbox" name="pp3" value="othershape"> Other Shape<br/></div>
	    <div><input type="checkbox" name="pp4" value="dilated and constricted"> Dilated and Constricted<br/></div>
	    <div><input type="checkbox" name="pp5" value="abnormal"> Pulpillary Reflex<br/></div>
    <br/><hr>

    <h4>Lens</h4>
      <div><input type="checkbox" name="lp0" value="DullOrAbsentRedReflex"> Dull or Absent Red Reflex<br/></div>
      <div><input type="checkbox" name="lp1" value="WhitePupil"> White Pupil<br/></div>
      <div><input type="checkbox" name="lp2" value="shadow in red reflex" > Shadow in Red Reflex<br/></div>
      <div><input type="checkbox" name="lp3" value="position"> Position<br/></div>
      <div><input type="checkbox" name="lp4" value="opacities"> Opacities<br/></div>
    <br/><hr>
      <h4>Anterior Chamber</h4>
      <div><input type="checkbox" name="ac0" value="shallow and deep"> Shallow and Deep<br/></div>
      <div><input type="checkbox" name="ac1" value="hyphaema"> Hyphaema<br/></div>
      <div><input type="checkbox" name="ac2" value="hypopyon"> Hypopyon<br/></div>
      <div><input type="checkbox" name="ac3" value="intraocularlens"> Intraocularlens(IOL)<br/></div>
        <br/><hr>

      <h4>Cornea</h4>
       <div>Visual Acuity <input type="text" name="visualacuity" placeholder="-/-" pattern="[0-9]/[0-9]" ><br/></div>
       <div><input type="checkbox" value="shape" name="corneaShape" onclick="changeClass1()"> Shape</div>
        <ul class="nested" id="main1">
          <div><input type="radio" name="corS" value="ellipticalHypotony"> Elliptical Hypotony<br/></div>
          <div><input type="radio" name="corS" value="conicalKeratoconous"> Conical Keratoconous<br/></div>
		      <div><input type="radio" name="corS" value="quadilateralPhthisis"> Quadilateral Phthisis<br/></div>
        </ul>

       <div><input type="checkbox" value="curvature" name="curvature" onclick="changeClass3()"> Curvature</div>
        <ul class="nested" id="main3">
          <div><input type="radio" name="curve" value="increase"> Increase<br/></div>
          <div><input type="radio" name="curve" value="Decrease"> Decrease<br/></div>
        </ul>

	   <div><input type="checkbox" value="thickness" name="thickness" onclick="changeClass4()"> Thickness</div>
        <ul class="nested" id="main4">
          <div><input type="checkbox" name="tp0" value="corneaedema"> Cornea Edema<br/></div>
          <div><input type="checkbox" name="tp1" value="filamentarykeratopathy"> Filamentary Keratopathy<br/></div>
		      <div><input type="checkbox" name="tp2" value="keratitits"> Keratitits</div>
        </ul>
    <!-- REMOVED THE ONCLICK ON KERATITITS


        <ul class="nested" id="main5">
				  <div><input type="checkbox" name="endogenous" value="endogenousinflation"> Endogenous Inflation<br/></div>
          <div><input type="checkbox" name="filamentary" value="exogenousinflation"> Exogenous Inflation<br/></div>
		      <div><input type="checkbox" name="contiguous" value="Contiguous Spread from Ocular Tissue"> Contiguous Spread from Ocular Tissue<br/></div>
		   </ul>


     REMOVED Transperacy PROPERTY ALL TOGETHER.. WASN'T MAKING ANY SENSE... TO ME ATLEAST
       </ul>

	   <div><input type="checkbox" value="Transperacy" name="transperacy" onclick="changeClass6()"> Transperacy</div>
		  <ul class="nested" id="main6">
				 <div><input type="checkbox" name="nebula" value="endogenousinflation"> Endogenous Inflation<br/></div>
         <div><input type="checkbox" name="macula" value="exogenousinflation"> Exogenous Inflation<br/></div>
		     <div><input type="checkbox" name="leucoma" value="leucoma"> Leucoma<br/></div>
		 </ul>
	   <div><input type="checkbox" value="sensation" name="sensation"> Sensation</div>

 REMOVED SENSATION BEING POSITIVE NEGATIVE
		  <ul class="nested" id="main7">
				<div><input type="checkbox" name="positive" value="positive" > Positive<br/></div>
        <div><input type="checkbox" name="negative" value="negative"> Negative<br/></div>
		  </ul>
-->

		<div><input type="checkbox" name="vascularization" value="vascularization"> Vascularization<br/></div>
	  <div><input type="checkbox" name="deposits" onclick="changeClass8()"> Deposits</div>
        <ul class="nested" id="main8">
          <div><input type="radio" name="dt" value="Membranous"> Membranous<br/></div>
          <div><input type="radio" name="dt" value="Pseudomembranous"> Pseudomembranous<br/></div>
		      <div><input type="radio" name="dt" value="nonmembranous"> Non Membranous<br/></div>
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

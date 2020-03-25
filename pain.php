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
  <title>Pain</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  <link rel="stylesheet" href="1.css">
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
    <table width=100%>
    <tr><td width=40%><h2>Pain</h2></td>
      <td width=35%></td>
    <td><input type="text" value="" class="form-control" name="searchColumn" id="searchColumn"/>Search</td>
    </table>
    <hr>
    <div class="topnav">
      <a href="general.php">General</a>
      <a class="active" href="pain.php">Pain</a>
      <a href="visdis.php">Visual Disturbance</a>
      <a href="page4.php">Past History</a>
      <a href="page5.php">Related Information</a>
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
      <h4>Site of Pain</h4>

        <form action = "check3.php" class="form-inline" method = "post">
		<div class="form-group">
		<div><input type="checkbox" value="eyeache" name="eyeache[0]" onclick="changeClass1()"> Eye Ache</div>
        <ul class="nested" id="main1">
          <div><input type="radio" name="a0" value="BILATERAL"> Bilateral<br/></div>
          <div><input type="radio" name="a0" value="LEFT"> Left<br/></div>
          <div><input type="radio" name="a0" value="RIGHT"> Right<br/></div>
		  </ul>
          <div><input type="checkbox" value = "color" name="eyeache[1]" onclick="changeClass12()"> Color</div>
        <ul class="nested" id="main12">
		  <div><input type="radio" name="a1" value="WHITE"> White<br/></div>
		  <div><input type="radio" name="a1" value="RED"> Red<br/></div>
        </ul>
      <br/>
      <hr>
      <h4>Onset</h4>
      <div><input type="radio" name="onset" value="SUDDEN"> Sudden<br/></div>
      <div><input type="radio" name="onset" value="GRADUAL"> Gradual<br/></div>
      <br/>
      <hr>
      <h4>Character</h4>
      <div><input type="radio" name="b" value="BURNING">Burning<br/></div>
      <div><input type="radio" name="b" value="DULL"> Dull<br/></div>
      <br/>
      <hr>
      <h4>Radiation</h4>
      <div><input type="checkbox" name="c0" value="JAWS"> Jaws<br/></div>
      <div><input type="checkbox" name="c1" value="TEMPLE"> Temple<br/></div>
      <div><input type="checkbox" name="c2" value="DERMATOL Distribution"> Dermatomal Distribution<br/></div>
      <br/>
      <hr>
      <h4>Associated Symptoms</h4>
      <div><input type="checkbox" name="d0" value="NAUSEA"> Nausea <br/></div>
      <div><input type="checkbox" name="d1" value="VOMITING"> Vomiting<br/></div>
      <div><input type="checkbox" name="d2" value="VISUAL AURA"> Visual Aura<br/></div>
      <div><input type="checkbox" name="d3" value="PROSTRATING"> Prostrating<br/></div>
      <div><input type="checkbox" name="d4" value="REDNESS"> Redness<br/></div>
      <div><input type="checkbox" name="d5" value="TEARING"> Tearing<br/></div>
      <div><input type="checkbox" name="d6" value="NUMBNESS"> Numbness<br/></div>
      <div><input type="checkbox" name="d7" value="RASH"> Rash<br/></div>
      <br/>
      <hr>
      <h4>Timing</h4>
      <div><input type="checkbox" name="continuous" value="continuous"> Continuous<br/></div>
      <div><input type="checkbox" name="episodic" onclick="changeClass3()"> Episodic<br/></div>
      <ul class="nested" id="main3">
            <div><input type="radio" name="episodic" value="MORNING"> Morning<br/></div>
            <div><input type="radio" name="episodic" value="AFTERNOON"> Afternoon<br/></div>
            <div><input type="radio" name="episodic" value="EVENING"> Evening<br/></div>
            <div><input type="radio" name="episodic" value="NIGHT"> Night<br/></div>
           </ul>
		   <div>Frequency<br/>
              <select name = "frequency">
                <option value="LOW" name="frequency" class="form-control">Low</option>
                <option value="MEDIUM" name="frequency">Medium</option>
                <option value="HIGH" name="frequency">High</option>
              </select></div><br/>
            <div>Duration <input type="text" name="duration" class="form-control"> min<br/></div>

      <hr>
      <h4>Exacerbating Factors</h4>
      <div><input type="checkbox" name="e" value="Ocular Movement"> Ocular Movement<br/></div>
    </ul>
    <br/>
    <br/>
   <!-- <button class="btn btn-primary" onclick="location.href='general.php';">Previous</button> -->
    <input class="btn btn-primary" name = "next2" type = "submit" value = "Next">
	</div>
	</form>
    <script>
      function changeClass1(){
          document.getElementById("main1").classList.toggle('active');
      }
	  function changeClass12(){
          document.getElementById("main12").classList.toggle('active');
      }
      function changeClass2(){
          document.getElementById("main2").classList.toggle('active');
      }
      function changeClass3() {
            document.getElementById("main3").classList.toggle('active');
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

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
  </style></head>
  <body>
    <div class="container">
	<form action = "locex.php" method = "post">
      <h1>Local Examination</h1>
      <br>
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
        <a class='active' href="page9.php">Local Examination</a>
        <a href="page10.php">Lids</a>
        <a href="page11.php">Iris</a>
        <a href="page12.php">Fundoscopy</a>
      </div>
      <hr>
      <h3>Position of head</h3>
      <select name="HEADPOS" class="form-control">
        <option value="">--Select--</option>
        <option value="turnedtoavoiddiplopia">Turned to avoid diplopia</option>
        <option value="chinelevated">Chin elevated to uncover pupileary area</option>
      </select>

      <br><hr>

  <h3>Eyeball</h3><ul>
  <div><input type="checkbox" value="SizeNShape" name="sizeshape" onclick="changeClass5()"> Size & Shape</div></ul>
      <ul class="nested" id="main5">

        <div><input type="checkbox" name="Exopthalmos" value="Exopthalmos" onclick="changeClass6()" >Exopthalmos<br/></div>
              <ul class="nested" id="main6">
                    <li><input type="radio" name="ae" value="Axial"> Axial
                    <li><input type="radio" name="ae" value="Eccentric"> Eccentric
                    <br><br>
                    <li><input type="radio" name="rnr" value="Reducible"> Reducible
                    <li><input type="radio" name="rnr" value="NonReducible"> Non-Reducible
              </ul>


        <div><input type="checkbox" name="enophthalmos" value="Enophthalmos"> Enophthalmos<br/></div>

        <div><input type="checkbox" name="buphthalmos" value="Buphthalmos"> Buphthalmos<br/></div>

        <div><input type="checkbox" name="microphthalmos" value="Microphthalmos"> Microphthalmos<br/></div>

        <div><input type="checkbox" name="pthisisbulbi" value="Pthisisbulbi"> Pthisis bulbi<br/></div>

      </ul>


  <br><hr>
  <h3>Movements</h3>
    <ul>
    <div><input type="checkbox" value="Medical Rectus" name="medicalrectus" onclick="changeClass1()"> Medical Rectus</div>
    <ul class="nested" id="main1">
         <div><input type="radio" name="normal/abnormal" value="Normal"> Normal<br/></div>

        <div><input type="radio" name="normal/abnormal" value="Abnormal"> Abnormal<br/></div>
    </ul>

    <div><input type="checkbox" value="Lateral Rectus" name="lateralrectus" onclick="changeClass2()"> Lateral Rectus</div>
    <ul class="nested" id="main2">
         <div><input type="radio" name="normal/abnormal" value="Normal"> Normal<br/></div>

        <div><input type="radio" name="normal/abnormal" value="Abnormal"> Abnormal<br/></div>
    </ul>

    <div><input type="checkbox" value="Superior Rectus" name="superiorrectus" onclick="changeClass9()"> Superior Rectus</div>
    <ul class="nested" id="main9">
         <div><input type="radio" name="normal/abnormal" value="Normal"> Normal<br/></div>

        <div><input type="radio" name="normal/abnormal" value="Abnormal"> Abnormal<br/></div>
    </ul>

    <div><input type="checkbox" value="Inferior Rectus" name="inferiorrectus" onclick="changeClass8()"> Inferior Rectus</div>
    <ul class="nested" id="main8">
         <div><input type="radio" name="normal/abnormal" value="Normal"> Normal<br/></div>

        <div><input type="radio" name="normal/abnormal" value="Abnormal"> Abnormal<br/></div>
    </ul>

    <div><input type="checkbox" value="Superior oblique" name="superioroblique" onclick="changeClass3()" > Superior oblique</div>
    <ul class="nested" id="main3">
         <div><input type="radio" name="normal/abnormal" value="Normal"> Normal<br/></div>

        <div><input type="radio" name="normal/abnormal" value="Abnormal" > Abnormal<br/></div>
    </ul>


    <div><input type="checkbox" value="Inferior oblique" name="inferioroblique" onclick="changeClass4()"> Inferior oblique</div>
    <ul class="nested" id="main4">
         <div><input type="radio" name="normal/abnormal" value="Normal"> Normal<br/></div>

        <div><input type="radio" name="normal/abnormal" value="Abnormal"> Abnormal<br/></div>
    </ul>
  </ul>

    <br><hr>
    <h3>Misalignment</h3>
    <ul>
      <h5> Tropias </h5>
      <select name="tropia" class="form-control">
        <option value="">---Select Type---</option>
        <option value="esotropia">Esotropia</option>
        <option value="exotropia">Exotropia</option>
        <option value="hypotropia">Hypotropia</option>
        <option value="hypertropia">Hypertropia</option>
        <option value="cyclotropia">Cyclotropia</option>
      </select>

      <h5> Phorias </h5>
      <select name="phoria" class="form-control">
        <option value="">---Select Type---</option>
        <option value="esophoria">Esophoria</option>
        <option value="exophoria">Exophoria</option>
        <option value="hypophoria">Hypophoria</option>
        <option value="hyperphoria">Hyperphoria</option>
        <option value="cyclophoria">Cyclophoria</option>
      </select>

  </ul>
    <br><br>
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

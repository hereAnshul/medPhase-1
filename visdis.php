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
  <title>List of History</title>
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

  <body>
    <div class="container">
    <table width=100%>
    <tr><td width="40%"><h2>Visual Disturbance</h2></td>
    <td width=35%></td>
    <td><input type="text" value="" class="form-control" name="searchColumn" id="searchColumn"/>Search</td>
    </table>
    <hr>
    <div class="topnav">
      <a href="general.php">General</a>
      <a href="pain.php">Pain</a>
      <a class="active" href="visdis.php">Visual Disturbance</a>
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
  <form action="check8.php" method = "post">
      <ul>
      <h4>Onset</h4>
      <div><input type="radio" name="onset" value="SUDDEN"> Sudden<br/></div>
      <div><input type="radio" name="onset" value="GRADUAl"> Gradual<br/></div>
      <br/>
      <hr>
      <h4>Site</h4>
      <div><input type="radio" name="site" value="LEFT"> Left<br/></div>
      <div><input type="radio" name="site" value="RIGHT"> Right<br/></div>
      <div><input type="radio" name="site" value="BILATERAL"> Bilateral<br/></div>
      <br/>
      <hr>
      <h4>Character</h4>
      <div><input type="checkbox" name="c0" value="Near Vision Loss"> Near Vision Loss<br/></div>
      <div><input type="checkbox" name="c1" value="Far Vision Loss"> Far Vision Loss<br/></div>
      <div><input type="checkbox" name="c2" value="Distorted Vision"> Distorted Vision<br/></div>
      <div><input type="checkbox" name="c3" value="Diplopia" onclick="changeClass1()"> Diplopia<br/></div>
      <ul class="nested" id="main1">
        <div><input type="radio" name="c3" value="UNIOCULAR"> Uniocular</div>
        <div><input type="radio" name="c3" value="BINOCULAR"> Binocular</div>
      </ul>
      <div><input type="checkbox" name="c5" value="Scotoma"> Scotoma</div>
      <div><input type="checkbox" name="c6" value="Generalised Bleeding"> Generalised Bleeding</div>
      <div><input type="checkbox" name="c7" value="visionloss"> Vision Loss</div>
     <!-- <ul class="nested" id="main2">
	 onclick="changeClass2()"
        <div><input type="radio" name="c7" value="PERIPEHRAL"> Peripheral</div>
        <div><input type="radio" name="c7" value="CENTRAL"> Central</div>
        <div><input type="radio" name="c7" value="GENERALISED"> Generalised</div>
       </ul>
      --> <div><input type="checkbox" name="c8" value="TUNNELVISION"> Tunnel Vision</div>
      <br/>
      <hr>
      <h4>Associated Symptoms</h4>
      <div><input type="checkbox" name="a0" value="Pain"> Pain<br/></div>
      <div><input type="checkbox" name="a1" value="Redness"> Redness<br/></div>
      <div><input type="checkbox" name="a2" value="Photophobia"> Photophobia</div>
      <div><input type="checkbox" name="a3" value="Glare"> Glare</div>
      <div><input type="checkbox" name="a4" value="Black Spot"> Black Spot</div>
      <div><input type="checkbox" name="a5" value="Flashes"> Flashes</div>
      <div><input type="checkbox" name="a6" value="Floaters"> Floaters</div>
      <div><input type="checkbox" name="a7" value="Halos"> Halos</div>
      <div><input type="checkbox" name="a8" value="Oscillopsia"> Oscillopsia</div>
      <br/>
      <hr>
      <h4>Progression</h4>
      <div><input type="radio" name="d0" value="progressive"> Progressive<br/></div>
      <div><input type="radio" name="d0" value="static"> Static<br/></div>
      <div><input type="radio" name="d0" value="improving"> Improving<br/></div>
      <br/>
      <hr>
      <h4>Pattern</h4>
      <div><input type="checkbox" name="pattern" value="Constant"> Constant<br/></div>
      <div><input type="checkbox" name="pattern" value="Intermittent"> Intermittent</div>
      <div><input type="checkbox" name="pattern" value="Episodic" onclick="changeClass3()"> Episodic<br/></div>
      <ul class="nested" id="main3">
            <div>Frequency<br/>
              <select>
                <option value="HIGH" name="highfrequency"> High</option>
                <option value="MEDIUM" name="medfrequency"> Medium</option>
                <option value="LOW" name="lowfrequency"> Low</option>
              </select></div><br/>
            <div>Duration <input type="text" name="duration"> min<br/></div>
      </ul>
    </ul>
    <br/>
    <br/>
    <!--<button class="btn btn-primary" onclick="location.href='2listofhis1.html';"><<"Previous"</button> -->
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

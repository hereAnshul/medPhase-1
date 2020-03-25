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
  <!--   <style>
        div {
            display: inline-block;
        }
    </style> -->
</head>
    <body>
        <div class="container">
		<form action="check4.php" method = "post">
         <form class="form-inline">
        <div class="form-group">
        <table width=100%>
        <tr><td width=40%><h2>Past History and the Eye</h2></td>
            <td width=35%></td>
            <td><input type="text" class="form-control" value="" name="searchColumn" id="searchColumn"/>Search <br/>
        </table>
        <hr>
        <div class="topnav">
          <a href="general.php">General</a>
          <a href="pain.php">Pain</a>
          <a href="visdis.php">Visual Disturbance</a>
          <a class="active" href="page4.php">Past History</a>
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

                <div><input type="checkbox" name = "a0" value="Diabetes Mellitus"> Diabetes Mellitus</div>
                <div><input type="checkbox" name = "a1" value="Thyroid Disease"> Thyroid Disease</div>
                <div><input type="checkbox" name = "a2" value="Hypertension"> Hypertension</div>
                <div><input type="checkbox" name = "a3" value="Ischaemic Heart Disease"> Ischaemic Heart Disease</div>
                <div><input type="checkbox" name = "a4" value="Cerebrovascular Disease"> Cerebrovascular Disease</div>
                <div><input type="checkbox" name = "a5" value="Atrial Fibrillation"> Atrial Fibrillation</div>
                <div><input type="checkbox" name = "a6" value="Tuberculosis"> Tuberculosis</div>
                <div><input type="checkbox" name = "a7" value="Multiple Sclerosis"> Multiple Sclerosis</div>
                <div><input type="checkbox" name = "a8" value="Hay Fear"> Hay Fever</div>
                <div><input type="checkbox" name = "a9" value="Asthma"> Asthma</div>
                <div><input type="checkbox" name = "a10" value="Eczema"> Eczema</div>
                <div><input type="checkbox" name = "a11" value="Myeloma"> Myeloma</div>
                <div><input type="checkbox" name = "a12" value="Leukemia"> Leukemia</div>
                <div><input type="checkbox" name = "a13" value="hyperviscosity syndrome"> Hyperviscosity syndrome</div>
                <div><input type="checkbox" name = "a14" value="Rheumatoid Artheritis"> Rheumatoid Artheritis</div>
                <div><input type="checkbox" name = "a15" value="Inflammatory Bowel Disease"> Inflammatory Bowel Disease</div>
                <div><input type="checkbox" name = "a16" value="Ankylosing Sponylitis"> Ankylosing Sponylitis</div>
                <div><input type="checkbox" name = "a17" value="Persistent ENT Symptom"> Persistent ENT Symptom</div>
                <div><input type="checkbox" name = "a18" value="Glaucoma"> Glaucoma</div>
                <div><input type="checkbox" name = "a19" value="Cataract Surgery"> Cataract Surgery</div>
                <br/>
                <br/>
    <input class="btn btn-primary" name = "next3" type = "submit" value = "Next">
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

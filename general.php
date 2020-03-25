<?php
session_start();
error_reporting(0);
if($_SESSION["docid"]=="" || $_SESSION['p_id']=="" || $_SESSION['p_name']=="" ||$_SESSION['caseid']==''){
  echo "<script> alert('Bad Bad Boy');
      location = '404.php';
          </script>";
}
require 'connect.php';

?>
<html>
<head>
  <title>General</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  <link rel="stylesheet" href="css/topnav.css">
  <link rel="stylesheet" href="1.css">
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
    <h1>General Examination</h1><br>
    <hr>
    <div class="topnav">
      <a class="active" href="general.php">General</a>
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
      <a href="page12.php">Fundoscopy</a>
    </div>
    <hr>
    <form class="form-inline" method="post" action="check2.php">
  		<div class="form-group">
  			<table>
  				<tr>
				   <td><label>Dr.</label>&nbsp <input type="text" class="form-control" value= "<?php echo $_SESSION['docname'];?>" name="docname" readonly>
				 	 <td></td>
				   <td></td>
				   <td></td>
				   <td style="text-align:right">
             <label>Case No.</label>
             <input type="text" class="form-control" value="<?php echo $_SESSION['caseid'];?>" name="caseno" readonly><br><br>
				 </tr>
         <tr>
					<td><label>Name</label><input type="text" class="form-control" value="<?php echo $_SESSION['p_name'];?>" name = "pname" readonly>
				  <td><label>Age</label><input type="Number" class="form-control" value="<?php echo $_SESSION['p_age']?>" name="age">
				  <td><label>Sex</label><input type="text" class="form-control" value="<?php echo $_SESSION['p_sex'] ?>" readonly>
            <!--<select name = "sex" class="form-control">
              <option value="">---Select---</option>
	            <option value="MALE">Male</option>
	            <option value="FEMALE">Female</option>
	            <option value="OTHERS">Others</option>
            </select>-->
				  <td><label>Religion</label>
            <select name = "religion" class="form-control">
              <option value="">---Select---</option>
              <option value="HINDU">Hindu</option>
	            <option value="ISLAM">Islam</option>
	            <option value="CHRISTIANITY">Christianity</option>
	            <option value="SIKHISM">Sikhism</option>
	            <option value="BUDDHISM">Buddhism</option>
	            <option value="JAINISM">Jainism</option>
	            <option value="OTHERS">Other Religions</option>
	          </select>
					<br><br>
				</tr>
				<tr>
				  <td><label>Occupation</label>
            <select name = "occupation" class="form-control">
	            <option value="BUISNESSMAN">Buisnessman</option>
	            <option value="TEACHER">Teacher</option>
	            <option value="FARMER">Farmer</option>
	            <option value="STUDENT">Student</option>
	            <option value="HOUSEMAKER">Housemaker</option>
	            <option value="ARMY">Army</option>
	            <option value="IT">IT</option>
	            <option value="ADMINISTRATIVE">Administrative</option>
	            <option value="OTHERS">Others</option>
	          </select> <br><br>

					<td><label>Marital Status</label><select name = "marital" class="form-control">
	           <option value="SINGLE">Single</option>
	           <option value="MARRIED">Married</option>
	          </select>

		<td><label>States</label><select name = "states" class='form-control'>
	<option value="">---Select---</option>
		<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
		<option value="Andhra Pradesh">Andhra Pradesh</option>
		<option value="Arunachal Pradesh">Arunachal Pradesh</option>
		<option value="Assam">Assam</option>
		<option value="Bihar">Bihar</option>
		<option value="Chandigarh">Chandigarh</option>
		<option value="Chhattisgarh">Chhattisgarh</option>
		<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
		<option value="Daman and Diu">Daman and Diu</option>
		<option value="Delhi">Delhi</option>
		<option value="Goa">Goa</option>
		<option value="Gujarat">Gujarat</option>
		<option value="Haryana">Haryana</option>
		<option value="Himachal Pradesh">Himachal Pradesh</option>
		<option value="Jammu and Kashmir">Jammu and Kashmir</option>
		<option value="Jharkhand">Jharkhand</option>
		<option value="Karnataka">Karnataka</option>
		<option value="Kerala">Kerala</option>
		<option value="Lakshadweep">Lakshadweep</option>
		<option value="Madhya Pradesh">Madhya Pradesh</option>
		<option value="Maharashtra">Maharashtra</option>
		<option value="Manipur">Manipur</option>
		<option value="Meghalaya">Meghalaya</option>
		<option value="Mizoram">Mizoram</option>
		<option value="Nagaland">Nagaland</option>
		<option value="Orissa">Orissa</option>
		<option value="Pondicherry">Pondicherry</option>
		<option value="Punjab">Punjab</option>
		<option value="Rajasthan">Rajasthan</option>
		<option value="Sikkim">Sikkim</option>
		<option value="Tamil Nadu">Tamil Nadu</option>
		<option value="Tripura">Tripura</option>
		<option value="Uttaranchal">Uttaranchal</option>
		<option value="Uttar Pradesh">Uttar Pradesh</option>
		<option value="West Bengal">West Bengal</option>
		</select>
		</br>
		<td><label>City</label>
      <select name = "city" class='form-control'>
	       <option value="">Select City</option>
		     <option value="LUCKNOW">Lucknow</option>
		     <option value="ALLAHABAD">Allahabad</option>
		     <option value="GONDA">Gonda</option>
		     <option value="KANPUR">Kanpur</option>
		     <option value="VARANASI">Varanasi</option>
		     <option value="AGRA">Agra</option>
		  </select>
			<td><label>Food habit</label>
        <select name = "food" class='form-control'>
	         <option value="Veg">Vegetarian</option>
	         <option value="NonVeg">Non-Vegetarian</option>
	      </select>
			</tr>
			</table>

		<hr>
    <h2>Chief Complaints</h2>
          <ol>

  			<div class="form-group">
              <li> <input type="text" class="form-control" name="c0">
                   <label>Duration</label><input type="text" class="form-control"  name="t0"><br><br>
              <li> <input type="text" class="form-control" name="c1">
                   <label>Duration</label><input type="text" class="form-control"  name="t1"><br><br>
              <li> <input type="text" class="form-control"  name="c2">
                  <label> Duration</label><input type="text" class="form-control"  name="t2"><br><br>
              <li> <input type="text" class="form-control"  name="c3">
                  <label> Duration</label><input type="text" class="form-control"  name="t3"><br><br>
          </ol>

      <br><br>
      <table>
      <tr><td><h3>Vitals</h3></td></tr>
          <ul>

  			<div class="form-group">
  			<tr>
              <td><div><input type="checkbox" value="Pulse" name="vitals[0]" onclick="changeClass0()">&nbsp PULSE(/min)</div>
				<ul class="nested" id="main0">
					<div><input type="Number" value="" name="v[0]"><br/></div>
				</ul>
             </tr>

             <tr>

             <td><div><input type="checkbox" value="BP" name="vitals[1]" onclick="changeClass11()">&nbsp BP(mm/hg)</div>
			<ul class="nested" id="main11">
				<div><input type="text" value="" placeholder = "120S80D" name="v[1]"><br/></div>
			</ul>
            </tr>

            <tr>
             <td> <div><input type="checkbox" value="Respiratory" name="vitals[2]" onclick="changeClass12()">&nbsp RESPIRATORY(/min)</div>
          <ul class="nested" id="main12">

            <div><input type="Number" value="" name="v[2]"><br/></div>
          </ul>
             </tr>

             <tr>
              <td><div><input type="checkbox" value="TEMPERATURE" name="vitals[3]" onclick="changeClass13()">&nbsp TEMPERATURE(farenheit)</div>
          <ul class="nested" id="main13">

            <div><input type="text" value="" name="v[3]"><br/></div>
          </ul>
              </tr>
			<tr>

              <td><li> <label>Icterus</label><select name = "a[0]" class="form-control">
			<option value="False">Negative</option>
			<option value="True">Positive</option>
			</select>
            </tr>

            <tr>
              <td><li> <label>Pallor</label><td><select name = "a[1]" class="form-control">
			<option value="False">Negative</option>
			<option value="True">Positive</option>

			</select>
             </tr>

             <tr>
             <td> <li> <label>Finger clustering</label><td><select name = "a[2]" class="form-control">
			<option value="False">Negative</option>
			<option value="True">Positive</option>

			</select>
             </tr>

            <tr>
             <td> <li> <label>Height(cms)</label><td><input type="Number" value="Height" name="height"><br><br>
            </tr>

            <tr>
              <td><li> <label>Weight(kg)</label><td><input type="Number" value="Weight" name="weight"> <br><br>
            </tr>
          </ul>
      </table>



    <div class="row">
       	<div class="col-md-6">

      <h3>Mouth</h3>
      	<div class="checkbox">
        <ul>
          <div><input type="checkbox" value="Odor" name="mouth[0]" onclick="changeClass1()"><span class="checkboxtext">
				Odor</span></div>
          <ul class="nested" id="main1">

            <div><input type="checkbox" name="b0[0]" value="ALCOHOL"><span class="checkboxtext">
				Alcohol</span><br/></div>
            <div><input type="checkbox" name="b0[1]" value="ACETONE"><span class="checkboxtext">
				Acetone</span><br/></div>
            <div><input type="checkbox" name="b0[2]" value="AMMONIA"><span class="checkboxtext">
				Ammonia</span><br/></div>

            <div><input type="checkbox" name="b0[3]" value="FECTOR HEPATICUS"><span class="checkboxtext">
				Fetor hepaticus</span><br/></div>
            <div><input type="checkbox" name="b0[4]" value="HALITOSIS"><span class="checkboxtext">
				Halitosis</span><br/></div>
          </ul>

          <div><input type="checkbox" value="Lips" name="mouth[1]" onclick="changeClass2()"><span class="checkboxtext">
				Lips</span></div>
          <ul class="nested" id="main2">

            <div><input type="checkbox" name="b1[0]" value="ANGULAR STOMATITIS"><span class="checkboxtext">
				Angular stomatitis</span><br/></div>
            <div><input type="checkbox" name="b1[1]" value="ULCUS"><span class="checkboxtext">
				Ulcus</span><br/></div>
            <div><input type="checkbox" name="b1[2]" value="PIGMENTATION"><span class="checkboxtext">
				Pigmentation</span><br/></div>

          </ul>

          <div><input type="checkbox" value="Tongue" name="mouth[2]" onclick="changeClass3()"><span class="checkboxtext">
				Tongue</span></div>
          <ul class="nested" id="main3">

            <div><input type="checkbox" name="b2[0]" value="PALE GALUD"><span class="checkboxtext">
				Pale glaud</span><br/></div>
            <div><input type="checkbox" name="b2[1]" value="FIERY RED"><span class="checkboxtext">
				Fiery red</span><br/></div>
            <div><input type="checkbox" name="b2[2]" value="MAGENTA"><span class="checkboxtext">
				Magenta</span><br/></div>
            <div><input type="checkbox" name="b2[3]" value="BEEFY"><span class="checkboxtext">
				Beefy</span><br/></div>

          </ul>

          <div><input type="checkbox" value="P" name="parotid"><span class="checkboxtext">
				Parotid</span></div>
          <ul class="nested" id="main4">

            <div><input type="checkbox" name="enlarged" value="P"><span class="checkboxtext">
				Enlarged</span><br/></div>
			</ul>
		</ul>
          </ul>
        </ul>
     </div>
 	</div>


  <br>
    <div class="col-md-6">
    <h3>Trachea</h3>

  		<div class="form-group" >
  				<label><b>Central(+ve/-ve)</b></label><input type="text" class="form-control" name="central" value=" ">
  <div><input type="checkbox" value="mobility" name="Mobility" onclick="changeClass5()"><span class="checkboxtext">
				Mobility</span></div>
      <ul class="nested" id="main5">

        <div><input type="checkbox" name="mobile" value="Mobile"><span class="checkboxtext">
				Mobile</span><br/></div>
        <div><input type="checkbox" name="fixed" value="Fixed"><span class="checkboxtext">
				Fixed</span><br/></div>

      </ul>
  </div>

</div>
</div>




  <br>
  <div class="row">
  <div class="col-md-6">
  <h3>Lower Limb</h3>
  <label><b>Oedema(+ve/-ve)</b></label><input type="text" class="form-control" name="central" value=" ">
  <div><input type="checkbox" name="pitting" value="Pitting"><span class="checkboxtext">
		Pitting</span></div>
  <div><input type="checkbox" name="Non-pitting" value="Non-pitting"><span class="checkboxtext">
		Non-pitting</span><br/></div>

  <label><b>Varicosities(+ve/-ve)</b></label><input type="text" class="form-control" name="varicosities" value=" ">
  </div>


  <br>
  	<div class="col-md-6">
  <h3>Lympadenopathy</h3>
    <ul>

  		<div class="form-group" >
    <div><input type="checkbox" value="Inner ring" name="Inner ring" onclick="changeClass6()"><span class="checkboxtext">
		Inner ring</span></div>
    <ul class="nested" id="main6">
    <table>
      <tr><td><div><label><b>Retropharyngeal(+ve/-ve)</b></label><td><input type="text" class="form-control" name="retropharyngeal" value=" "><br/></div><br><br>
      <tr><td><div><label><b>Tonsils(+ve/-ve)</b></label><td><input type="text" class="form-control" name="tonsils" value=" "></div><br><br>
      <tr><td><div><label><b>E.Tube(+ve/-ve)</b></label><td><input type="text" class="form-control" name="etube" value=" "><br/></div><br>
    </table>
    </ul>

    <div><input type="checkbox" value="Outer ring" name="Outer ring" onclick="changeClass7()"><span class="checkboxtext">
		Outer ring</span></div>
    		<ul class="nested" id="main7">
    <table>

      <tr><td><div><label><b>Submental(+ve/-ve)</b></label><td><input type="text" class="form-control" name="submental" value=" "></div><br><br>
      <tr><td><div><label><b>Submandibular(+ve/-ve)</b></label><td><input type="text" class="form-control" name="submandibular" value=" "><br/></div><br>
      <tr><td><div><label><b>Pre-auricular(+ve/-ve)</b></label><td><input type="text" class="form-control" name="preauricular" value=" "><br/></div><br>
      <tr><td><div><label><b>Post-auricular(+ve/-ve)</b></label><td><input type="text" class="form-control" name="postauricular" value=" "><br/></div><br>
      <tr><td><div><label><b>Occipital(+ve/-ve)</b></label><td><input type="text" class="form-control" name="occipital" value=" "><br/></div><br>
     </table>

    </ul>

    <div><input type="checkbox" value="Vertical Set" name="verticalset" onclick="changeClass8()"><span class="checkboxtext">
		Vertical Set</span></div>
    <ul class="nested" id="main8">

  		<div class="form-group">
  		<table>
		  		<tr>
		      	<td><div><label><b>Superficial(+ve/-ve)</b></label><input type="text" class="form-control" name="superficial" value=" "><br/></div><br>
		 </table>
		    </ul>
		    	<div><label><b>Axillary nodes(+ve/-ve)</b></label><input type="text" class="form-control" name="axillarynodes" value=" "><br/></div><br>

		    	<div><label><b>Epitrochlear N(+ve/-ve)</b></label><input type="text" class="form-control" name="epitrochlearn" value=" "><br/></div>
</div>
</div>

    <br><br>
    <input type = "submit" class="btn btn-primary" value = "Next">
    </form>
	<script>
		function changeClass11(){
          document.getElementById("main11").classList.toggle('active');
      }
	  function changeClass15(){
          document.getElementById("main15").classList.toggle('active');
      }
	  function changeClass12(){
          document.getElementById("main12").classList.toggle('active');
      }
	  function changeClass13(){
          document.getElementById("main13").classList.toggle('active');
      }
		function changeClass0(){
          document.getElementById("main0").classList.toggle('active');
      }
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

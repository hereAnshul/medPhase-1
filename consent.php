<?php
session_start();
if(!isset($_SESSION['patient_login'])){
  echo "<script> alert('Bad Bad Boy');
      location = '404.php';
          </script>";
}
error_reporting(0);
require 'connect.php';
$collection = $db->patient_details;
$res = $collection->find(['_id' => $_SESSION['id']]);
foreach ($res as $key) {
  // code...
  if(strcmp($key['consent'],'true')==0){
    echo "<script>alert('Consent Already Submitted.')</script>";
    echo "<script>window.close();</script>";
  }
}
if($_POST['consent']){
  if(strcmp($_POST['ppass'], $_SESSION['passkey'])==0){
    $collection = $db->patient_details;
    $collection->updateOne(['_id'=>$_SESSION['id']], ['$set'=> ['consent'=>'true']]);
    echo "<script>alert('Consent Successfully Recorded, Thank You Helping Science.')</script>";
    echo "<script>window.close();</script>";
  }else{
    echo "<script>alert('failed');</script>";
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="interface.css">
<link rel="stylesheet" type="text/css" href="css/pform.css">
<link rel="stylesheet" type="text/css" href="reg.css">
    <title>Home</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel = "stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">

  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">MedArch</h5>
	 <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="mailto:teamcreators7@gmail.com">Contact Support</a>
		<a class="btn btn-outline-primary" href="logout.php">Logout</a>
	</nav>
  </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h3 class="display-4">Consent</h3>
    </div>

    <div class="container" >
<legend>CONSENT FORM FOR SHARING HEALTH DATA</legend>

<div style="display: flex; justify-content: center;">
  <mark>PREAMBLE</mark>
<p>NINDS has the expectation that investigators will use broad consent language that allows for the storing, sharing, and use of human subjects data and specimens for future research, even if such future research may be unrelated to the original study or disorder for which the data and/or specimens were collected.  NINDS expects investigators to consider including such language (or similar language as mandated by your IRB) in your consent forms in order to ensure that samples and data are available for storing, sharing and use in future, unspecified research. This language should be included in the draft consent submitted with your application and submitted to NINDS in preparation for your start-up meeting if your application is funded (EXHIBIT 1).  If genetic sample collection is a component of the study, then consent language is expected to include the sharing of genetic or genomic data and associated phenotypic data in the NIH Database of Genotypes and Phenotypes (DbGaP: http://www.ncbi.nlm.nih.gov/gap). If another database is chosen, this would require pre-approval by NINDS program staff.
A final, IRB-approved consent that includes this or similar language (or an explanation for why it was not included) should be submitted to NINDS program staff prior to study activation.
If you have questions or need assistance developing your consent language, please feel free to contact NINDS Clinical Research Liaison (any consents) and/or Ran Zhang  (consents with genetic/genomic data language).
*Please note that all studies conducting Genomic-Wide Association Studies (GWAS), regardless of cost, should refer to the Genomic Data Sharing Policy for additional requirements We also encourage investigators to include consent language that allows for future contact even if the contact schedule has not yet been determined (EXHIBIT 2).
</p>
</div>

<div>
    <mark>EXHIBIT 1: Simplified Databanking/Biobanking Sample Consent Language </mark>
<p>
  <h6>DEFINITIONS:</h6>
  <br><b><u>Clinical Information/Health Data:</b></u><br> The information about you that is collected throughout the course of your participation in a study or from your medical records. This may include things like your gender, race, ethnicity, health status, vital signs, images (like X-Rays or MRIs), your family’s health history, or the results of tests or procedures.
  <br><b><u>De-identification/De-identifying:</b></u><br> The process of removing any information (like your name or address) from your personal health information or samples that could identify you and replacing it with a code.
  <br><b><u>Biobank/Databank:</b></u><br> A biobank/databank is a collection of samples and/or health information (data). Samples and de-identified health information from many people are stored so they can be used for research now and in the future. Researchers may apply to the biobank/databank to ask for data or samples for studies they wish to do. If a study is approved, the biobank/databank will give the researcher samples and/or information. While the biobank/databank will not give the researchers any information that could directly identify an individual, like name or address, there is a theoretical possibility that you could be identified through your genetic data. The researchers will then use the samples and/or health information to learn more about health and many different diseases.
  <br><b><u>Genes/Genetic Studies:</b></u><br> Genes are pieces of DNA that give instructions for building the proteins that make our bodies work. DNA stores these instructions in the form of a code that you inherit from your parents and that you may pass on to your children. Studying genes along with health information helps us better understand what causes certain diseases. It may also help us understand how different patients respond to treatment, knowledge that could help us develop treatments for everyone.<br>
  <h6>DATA AND/OR BIOSPECIMEN BANKING</h6><br> Researchers are trying to learn more about neurological disorders, cancer, diabetes, and other health problems. Much of this research is done using health data, images (like X-rays or MRIs), and specimens, such as blood or tissue. Through these studies, researchers hope to find new ways to detect, treat, and maybe prevent or cure health problems. Some of these studies may be about how genes affect health and disease, or how genes affect response to treatment. Some of them may lead to new products, such as drugs or tests for diseases. If you choose to be in this study, (specify sample(s), data) will be collected. We will de-identify (give your samples/data a code instead of your name) while it is stored and when it is used in research. This code allows your data to be used without anyone knowing that it is your sample just by looking at the label.   We may place some of your biologic samples, genetic materials and health information in scientific databanks, along with that from many other people. Information that could directly identify you will never be included. Researchers who want to study the information must apply to the databank.
  <br><i><b>As part of this study we will/may:</i></b><br>
  <ul><li>Store your de-identified sample(s) (biospecimens and / or genetic samples)  and clinical information in a Data/Biobank, along with information and/or samples from all the other people who take part. There is no limit on the length of time we will keep this information and/or your sample(s).</li>
      <li>Allow other researchers to use the materials stored in the Data/Biobank for approved studies. Researchers from (specify institution), other universities, the government, and drug- or healthrelated companies can apply to use the materials. A science committee at the Data/Biobank will review each request. There may also be an ethics review. We will not give researchers your name or any other information that could directly identify you.</li>
      <li><b>OPTION:</b> Collect health information, such as your name, age, race, test results, and family’s health history. We will contact you (specify frequency) to update some of this information.</li>
      <li><b>OPTION:</b> Collect updated health information from your medical record from time to time. Examples include test results, medical procedures, images (such as X-rays), and medicines you take.</li>
      <li><b>OPTION:</b> Collect research data from any studies done using your sample and clinical information.</li>
      <li><b>OPTION:</b> Contact you in the future with offers to take part in other research. There will be a new consent process just for those studies.
<b><h6>WHAT ARE THE POSSIBLE RISKS?</b></h6><br>
There is a risk that someone could get access to the samples or data we have stored about you. In some cases, it could be used to make it harder for you to get or keep a job or insurance. There are laws against the misuse of genetic information, but they may not give full protection. We believe the chance these things will happen is very small, but we cannot make guarantees. There is a risk that someone could trace the information in a scientific database back to you. Even without your name or other identifiers, your genetic information is unique to you (like a fingerprint). We believe the chance that someone will identify you is very small. But the risk may grow in the future if people come up with new ways of tracing information.
<b><h6>HOW WILL INFORMATION ABOUT ME BE KEPT PRIVATE?</b></h6><br>
Your privacy is very important to us and we will make every effort to protect it. Here are just a few of the steps we will take: • We will remove your name and other identifiers from your sample and personal health information, and replace them with a code number. We will keep the list that links the code number to your name separate from your sample and personal health information. Only a few of the Biobank staff will have access to the list and they sign an agreement to keep your identity a secret. • Researchers who study your sample and information will not know who you are. They must also sign an agreement that they will not try to find out who you are. • We will not give information that identifies you to anyone, except if required by law. Information that is shared outside (specify institution) may no longer be protected by the federal privacy law called ‘HIPAA’. But it will be protected as described in this form and may be covered by other privacy laws.
</p>
</div>
<div>
    <mark>EXHIBIT 2:</mark>
    <p>
      <h6><b><u>Post-Study Completion Permission to Contact Option:</u></b></h6><br>
      Right now, we believe your participation in the study should last (length of time). However, it is possible that we will want to contact you in the future regarding this study or other studies which may be of interest to you.  Any new studies would go through ethics review (just like this one) and would likely have a new consent form for you to sign. Participation in this study includes permission to contact you (specify frequency) to update your contact information so we know how to reach you should we decide that it is important to continue following your progress or open a new study to follow-up on people who take part in this study. We may also ask questions about (specify).
    </p>
  </div>
<div class="row">

  <div class="login-page">
    <div class="form">
      <form class="login-form" method="post" action="consent.php">
        <input type="radio" name="Consent to the statement" value="Yes" required>I consent to the above statement.
        <input type="text" name="pid" value="<?php echo $_SESSION['id'];?>" readonly/>
        <input type="password" placeholder="Password" name="ppass" required/>
        <input type = "submit" id = "button" name = "consent" value = "Continue with Consent"/>
        <p>If you <mark>don't</mark> want to give consent close the window.</p>
      </form>
    </div>
  </div>
</div>

<footer class="pt-4 my-md-5 pt-md-5 border-top">
  <div class="row">
    <div class="col-12 col-md">
<p>MedArch</p>
      <small class="d-block mb-3 text-muted">&copy; 2019</small>
    </div>
   <!-- <div class="col-6 col-md">
      <h5>Features</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Cool stuff</a></li>
        <li><a class="text-muted" href="#">Random feature</a></li>

      </ul>
    </div> -->
<div class="col-6 col-md">
      <p align="right">Designed by Team Creators<p>
    </div>
  </div>
</footer>
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>

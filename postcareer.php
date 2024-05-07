<?php
  
  $dateValue=date("Y/m/d H:i:s.u");
  
  $time=strtotime($dateValue);
  $day=date("d",$time);
  $month=date("m",$time);
  $year=date("Y",$time);
  $hour=date("H",$time);
  $min=date("i",$time);
  $sec=date("s",$time);
  $msec=date("u",$time);
  $cid="CSMU".$year.$month.$day.$hour.$min.$sec.rand(10,99);
    
  $servername = "localhost";
	$username = "csmuacin_csmuadmin";
	$password = "CSMU@dbadmin";
	$dbname = "csmuacin_websitedb";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
	}

  $ptype=$_POST["ddlpositiontype"];
  if($ptype==="Select one")
  {
    $ptype="";
  }
  $pos=$_POST["ddlposition"];
  if($pos==="Select one")
  {
    $pos="";
  }
  $domn=$_POST["ddldomain"];
  if($domn==="Select one")
  {
    $domn="";
  }
  $ttype=$_POST["ddlteachtype"];
  if($ttype==="Select one")
  {
    $ttype="";
  }
  if($_POST["ddlpositiontype"]==="Teaching")
  {
    $sql = "INSERT INTO career_personalinfo VALUES ('".$cid."','".$ptype."','".$pos."','".$domn."','".$_POST["job_nature"]."','".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["mname"]."','".$_POST["dob"]."','".$_POST["gender"]."','".$_POST["ddlcategory"]."','".$_POST["optminor"]."','".$_POST["optdivya"]."','".$_POST["domstate"]."','".$_POST["countryresid"]."','".$_POST["countrybirth"]."','".$ttype."')";
  }
  else
  {
    $sql = "INSERT INTO career_personalinfo VALUES ('".$cid."','".$ptype."','".$ttype."','".$domn."','".$_POST["job_nature"]."','".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["mname"]."','".$_POST["dob"]."','".$_POST["gender"]."','".$_POST["ddlcategory"]."','".$_POST["optminor"]."','".$_POST["optdivya"]."','".$_POST["domstate"]."','".$_POST["countryresid"]."','".$_POST["countrybirth"]."','".$pos."')";
  }
  echo $sql;
  if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br/>";
  }
  
  $sql = "INSERT INTO career_contact VALUES ('".$cid."','".$_POST["phno"]."','".$_POST["email"]."','".$_POST["txtaddr"]."')";
  if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error. "<br/>";
  }
  
  if($_POST["ugyear"]!=""){
    $sql = "INSERT INTO career_academic VALUES ('".$cid."','UG','".$_POST["ugyear"]."','".$_POST["ugboard"]."','".$_POST["ugpercg"]."','".$_POST["ugspecial"]."')";
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error. "<br/>";
    }
  }
  if($_POST["pgyear"]!=""){
    $sql = "INSERT INTO career_academic VALUES ('".$cid."','PG','".$_POST["pgyear"]."','".$_POST["pgboard"]."','".$_POST["pgpercg"]."','".$_POST["pgspecial"]."')";
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error. "<br/>";
    }
  }
  if($_POST["dipyear"]!=""){
    $sql = "INSERT INTO career_academic VALUES ('".$cid."','10th','".$_POST["dipyear"]."','".$_POST["dipboard"]."','".$_POST["dippercg"]."','')";
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error. "<br/>";
    }
  }
  if($_POST["pgdipyear"]!=""){
    $sql = "INSERT INTO career_academic VALUES ('".$cid."','12th','".$_POST["pgdipyear"]."','".$_POST["pgdipboard"]."','".$_POST["pgdippercg"]."','".$_POST["pgdispecial"]."')";
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error. "<br/>";
    }
  }
  if($_POST["mphilyear"]!=""){
    $sql = "INSERT INTO career_academic VALUES ('".$cid."','PH. D.','".$_POST["mphilyear"]."','".$_POST["mphilboard"]."','".$_POST["mphilpercg"]."','".$_POST["mphilspecial"]."')";
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error. "<br/>";
    }
  }
  if($_POST["phdyear"]!=""){
    $sql = "INSERT INTO career_academic VALUES ('".$cid."','PH. D.','".$_POST["phdyear"]."','".$_POST["phdboard"]."','".$_POST["phdpercg"]."','".$_POST["phdspecial"]."')";
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error. "<br/>";
    }
  }
  if($_POST["pdyear"]!=""){
    $sql = "INSERT INTO career_academic VALUES ('".$cid."','PH. D.','".$_POST["pdyear"]."','".$_POST["pdboard"]."','".$_POST["pdpercg"]."','".$_POST["pdspecial"]."')";
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error. "<br/>";
    }
  }
  
  if($_POST["txtposition1"]!=""){
    $sql = "INSERT INTO career_experience VALUES ('".$cid."','Academic','".$_POST["txtnature1"]."','".$_POST["txtposition1"]."','".$_POST["txtuniv1"]."','".$_POST["txtfromdt1"]."','".$_POST["txttodt1"]."')";
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error. "<br/>";
    }
  }
  if($_POST["txtposition2"]!=""){
    $sql = "INSERT INTO career_experience VALUES ('".$cid."','Academic','".$_POST["txtnature2"]."','".$_POST["txtposition2"]."','".$_POST["txtuniv2"]."','".$_POST["txtfromdt2"]."','".$_POST["txttodt2"]."')";
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error. "<br/>";
    }
  }
  if($_POST["txtposition3"]!=""){
    $sql = "INSERT INTO career_experience VALUES ('".$cid."','Academic','".$_POST["txtnature3"]."','".$_POST["txtposition3"]."','".$_POST["txtuniv3"]."','".$_POST["txtfromdt3"]."','".$_POST["txttodt3"]."')";
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error. "<br/>";
    }
  }
  if($_POST["txtposition4"]!=""){
    $sql = "INSERT INTO career_experience VALUES ('".$cid."','Academic','".$_POST["txtnature4"]."','".$_POST["txtposition4"]."','".$_POST["txtuniv4"]."','".$_POST["txtfromdt4"]."','".$_POST["txttodt4"]."')";
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error. "<br/>";
    }
  }
  if($_POST["txtposition5"]!=""){
    $sql = "INSERT INTO career_experience VALUES ('".$cid."','Academic','".$_POST["txtnature5"]."','".$_POST["txtposition5"]."','".$_POST["txtuniv5"]."','".$_POST["txtfromdt5"]."','".$_POST["txttodt5"]."')";
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error . "<br/>";
    }
  }
  if($_POST["txtposition6"]!=""){
    $sql = "INSERT INTO career_experience VALUES ('".$cid."','Academic','".$_POST["txtnature6"]."','".$_POST["txtposition6"]."','".$_POST["txtuniv6"]."','".$_POST["txtfromdt6"]."','".$_POST["txttodt6"]."')";
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error . "<br/>";
    }
  }
  if($_POST["optugcnet"]!="Yes"){
    $sql = "INSERT INTO carrer_qualification VALUES ('".$cid."','UGC Net','".$_POST["ugcyear"]."')";
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error . "<br/>";
    }
  }
  if($_POST["optugcjrf"]!="Yes"){
    $sql = "INSERT INTO carrer_qualification VALUES ('".$cid."','UGC JRF','".$_POST["jrfyear"]."')";
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error . "<br/>";
    }
  }
  if($_POST["opturcscir"]!="Yes"){
    $sql = "INSERT INTO carrer_qualification VALUES ('".$cid."','URC CSIR','".$_POST["urcsciryear"]."')";
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error . "<br/>";
    }
  }
  if($_POST["opticmr"]!="Yes"){
    $sql = "INSERT INTO carrer_qualification VALUES ('".$cid."','ICMR','".$_POST["icmryear"]."')";
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error . "<br/>";
    }
  }
  if($_POST["optgate"]!="Yes"){
    $sql = "INSERT INTO carrer_qualification VALUES ('".$cid."','Gate','".$_POST["gateyear"]."')";
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error . "<br/>";
    }
  }
  $sql = "INSERT INTO career_research VALUES ('".$cid."','".$_POST["totpublic"]."','".$_POST["totugccare"]."','".$_POST["totsci"]."','".$_POST["totwebsci"]."','".$_POST["totgoogle"]."','".$_POST["totscopus"]."','".$_POST["totfundprojcomp"]."','".$_POST["totfundprojongo"]."','".$_POST["totreasguidcomp"]."','".$_POST["totreasguidongo"]."')";
  if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br/>";
  }
  $sql = "INSERT INTO career_accomplish VALUES ('".$cid."','".$_POST["totbooks"]."','".$_POST["totpatents"]."','".$_POST["totcompconsul"]."','".$_POST["totongoconsul"]."')";
  if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br/>";
  }
  if($_POST["refname1"]!=""){
    $sql = "INSERT INTO career_reference VALUES ('".$cid."','".$_POST["refname1"]."','".$_POST["refphno1"]."','".$_POST["refaddr1"]."')";
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error . "<br/>";
    }
  }
  if($_POST["refname2"]!=""){
    $sql = "INSERT INTO career_reference VALUES ('".$cid."','".$_POST["refname2"]."','".$_POST["refphno2"]."','".$_POST["refaddr2"]."')";
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error . "<br/>";
    }
  }
  if($_POST["refname3"]!=""){
    $sql = "INSERT INTO career_reference VALUES ('".$cid."','".$_POST["refname3"]."','".$_POST["refphno3"]."','".$_POST["refaddr3"]."')";
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error . "<br/>";
    }
  }
  
  $target_dir = "uploads/";
  $temp = explode(".", $_FILES["updcv"]["name"]);


  $newfilename = $cid . '.' . end($temp);

  $target_file = $target_dir . $newfilename;//basename($_FILES["updcv"]["name"]);
  $uploadOk = 1;

  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  //echo $_FILES["updcv"]["name"] ."filename";

  // Check file size
  if ($_FILES["updcv"]["size"] > 5000000) {
    echo "Sorry, filesize of this doc or pdf file is too large." . "<br/>";
    $uploadOk = 0;
  }

  // Allow certain file formats
  if($imageFileType != "pdf" && $imageFileType != "doc" ) {
    echo "Sorry, only doc or pdf files are allowed for updating Resume / CV." . "<br/>";
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, there was an error uploading your file." . "<br/>";
  // if everything is ok, try to upload file
  } 
  else 
  {
    if (move_uploaded_file($_FILES["updcv"]["tmp_name"], $target_file)) 
    {
      //echo "The file ". htmlspecialchars( basename( $_FILES["updcv"]["name"])). " has been uploaded." . "<br/>";
    } else 
    {
      echo "Sorry, there was an error uploading your file." . "<br/>";
    }
  }
  
  $target_dir = "uploads/";
  $temp = explode(".", $_FILES["updphoto"]["name"]);


  $newfilename = $cid . '.' . end($temp);

  $target_file1 = $target_dir . $newfilename;//basename($_FILES["updphoto"]["name"]);
  $uploadOk = 1;

  $imageFileType = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
  //echo $_FILES["updphoto"]["name"] ."filename";

  // Check file size
  if ($_FILES["updphoto"]["size"] > 5000000) {
    echo "Sorry, filesize of image is too large." . "<br/>";
    $uploadOk = 0;
  }

  // Allow certain file formats
  if($imageFileType != "png" && $imageFileType != "jpg" && $imageFileType != "jpeg" ) {
    echo "Sorry, only png, jpg and jpeg files are allowed for photo." . "<br/>";
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, there was an error uploading your image." . "<br/><br/>";
  // if everything is ok, try to upload file
  } 
  else 
  {
    if (move_uploaded_file($_FILES["updphoto"]["tmp_name"], $target_file1)) 
    {
      //echo "The file ". htmlspecialchars( basename( $_FILES["updphoto"]["name"])). " has been uploaded." . "<br/>";
    } else 
    {
      echo "Sorry, there was an error uploading your image." . "<br/>";
    }
  }
  
  $sql = "INSERT INTO career_other VALUES ('".$cid."','".$_POST["lastsalary"]."','".$_POST["noticedays"]."','".$target_file1."','".$target_file."','".$_POST["expsalary"]."')";
  if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br/>";
  }
  echo "Your Application has been submitted. <br/>We will get back to you shortly. <br/>You will be redirected to CSMU Homepage." . "<br/>";
  echo "<script>setTimeout(function(){window.location.href = 'https://www.csmu.ac.in/';}, 10000);</script>" . "<br/>";
  exit;
?>
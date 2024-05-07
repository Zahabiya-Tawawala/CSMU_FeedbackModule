<?php 
ob_start();
include 'includes/header.php';


#---------------------Connnection-------------------------------------------
// Create connection
$con=mysqli_connect('localhost','csmu_bigwiguser','!CxsedYc8(&u','csmu_website2020');
if (!$con)
{
  die("DB Connection Error !!! : ". mysqli_error() );
}
		  if(isset($_POST["submit"]) && $_POST["submit"] == "Submit"){
			  
			    $sql_chk = "SELECT * from application where email='".addslashes($_REQUEST['email'])."'"; 
			    $res_chk = mysqli_query($con, $sql_chk) or die(mysqli_error($con));
			   	$erp_cnt = mysqli_num_rows($res_chk);
			  
					if($erp_cnt > 0 ){
	header("Location: https://www.csmu.in/admission-form.php?status=0&msg=Your Email ID is already used.");
						
					}else{
			 
			  	if(!empty($_FILES["photo"]["name"])) {
					
					//print_r($_FILES);
				 // allow certain file formats
				  $picfileName=$_FILES["photo"]["name"];
				  $pictargetFileName=rand(1,10000000).$picfileName;
				  $picfileType =$ext = pathinfo($picfileName, PATHINFO_EXTENSION);
				  $picallowTypes = array('jpg','jpeg','JPG','png');
				  $pictargetFilePath ="./student_photo/".$pictargetFileName;
				  if(in_array($picfileType, $picallowTypes)){
					  //upload file to server
					  if(move_uploaded_file($_FILES["photo"]["tmp_name"], $pictargetFilePath)){
						$statusMsg = "The photo ".$pictargetFileName. " has been uploaded."; 
					  }else{
						$statusMsg = "Sorry, there was an error uploading your photo.";    
					  }
				  }else {   
					  $statusMsg = 'Sorry, only jpg, png files are allowed to upload your photo.';   
					}
				}else{  
				   $statusMsg = 'Please select a your photo to upload.'; 
				}
				
						
				/* Secondery Post Array*/	
				if(!empty($_POST['secondary_institution'])){			
				$tenth_array = array();				
				$tenth_array['institution'] = 	addslashes($_POST['secondary_institution']);	
				$tenth_array['board'] 		= 	addslashes($_POST['secondary_board']);	
				$tenth_array['year'] = 	addslashes($_POST['secondary_year']);	
				$tenth_array['marks'] = 	addslashes($_POST['secondary_marks']);	
				$tenth_array['degree'] = 	addslashes($_POST['secondary_degree']);	
				$tenth = serialize($tenth_array);	
					}else{
					$tenth = '';	
					}
				/* Sr. Secondary Post Array*/	
					if(!empty($_POST['sr_secondary_institution'])){			
				$twelfth_array = array();				
				$twelfth_array['institution'] = 	addslashes($_POST['sr_secondary_institution']);	
				$twelfth_array['board'] 		= 	addslashes($_POST['sr_secondary_board']);	
				$twelfth_array['year'] = 	addslashes($_POST['sr_secondary_year']);	
				$twelfth_array['marks'] = 	addslashes($_POST['sr_secondary_marks']);	
				$twelfth_array['degree'] = 	addslashes($_POST['sr_secondary_degree']);	
				$twelfth = serialize($twelfth_array);	
					}else{
					$twelfth = '';	
					}
				/* Graduation Post Array*/	
				if(!empty($_POST['graduation_institution'])){			
				$graduation_array = array();				
				$graduation_array['institution'] = 	addslashes($_POST['graduation_institution']);	
				$graduation_array['board'] 		= 	addslashes($_POST['graduation_board']);	
				$graduation_array['year'] = 	addslashes($_POST['graduation_year']);	
				$graduation_array['marks'] = 	addslashes($_POST['graduation_marks']);	
				$graduation_array['degree'] = 	addslashes($_POST['graduation_degree']);	
				$graduation = serialize($graduation_array);	
					}else{
				$graduation= '';	
				}
				/* Post Graduation Post Array*/	
				if(!empty($_POST['pg_institution'])){			
				$pg_array = array();				
				$pg_array['institution'] = 	addslashes($_POST['pg_institution']);	
				$pg_array['board'] 		= 	addslashes($_POST['pg_board']);	
				$pg_array['year'] = 	addslashes($_POST['pg_year']);	
				$pg_array['marks'] = 	addslashes($_POST['pg_marks']);	
				$pg_array['degree'] = 	addslashes($_POST['pg_degree']);	
				$postgraduation = serialize($pg_array);	
					}else{
					$postgraduation= '';
				}
				
				/* Professional Degree Post Array*/	
				if(!empty($_POST['professional_institution'])){			
				$professional_array = array();				
				$professional_array['institution'] = 	addslashes($_POST['professional_institution']);	
				$professional_array['board'] 		= 	addslashes($_POST['professional_institution']);	
				$professional_array['year'] = 	addslashes($_POST['professional_institution']);	
				$professional_array['marks'] = 	addslashes($_POST['professional_institution']);	
				$professional_array['degree'] = 	addslashes($_POST['professional_institution']);	
				$professional = serialize($professional_array);	
					}else{
					$professional= '';
				}
				/* JEE Post Array*/	
				if(!empty($_POST['jee_date'])){				
				$jee_array = array();				
				$jee_array['date'] = 	addslashes($_POST['jee_date']);	
				$jee_array['roll'] = 	addslashes($_POST['jee_roll']);	
				$jee_array['score'] = 	addslashes($_POST['jee_score']);	
				$jee_array['percentile'] = 	addslashes($_POST['jee_percentile']);	
				$jee = serialize($jee_array);
					}else{
					$jee ="";
				}
				/* UPSE Post Array*/	
				if(!empty($_POST['upsee_date'])){			
				$upsee_array = array();				
				$upsee_array['date'] = 	addslashes($_POST['upsee_date']);	
				$upsee_array['roll'] = 	addslashes($_POST['upsee_roll']);	
				$upsee_array['score'] = addslashes($_POST['upsee_score']);	
				$upsee_array['percentile'] = addslashes($_POST['upsee_percentile']);	
				$upsee = serialize($upsee_array);	
					}else{
					$upsee ="";
				}
				/* CMAT Post Array*/
				if(!empty($_POST['cmat_date'])){				
				$cmat_array = array();				
				$cmat_array['date'] = 	addslashes($_POST['cmat_date']);	
				$cmat_array['roll'] = 	addslashes($_POST['cmat_roll']);	
				$cmat_array['score'] = 	addslashes($_POST['cmat_score']);	
				$cmat_array['percentile'] = addslashes($_POST['cmat_percentile']);	
				$cmat = serialize($cmat_array);	
				}else{
					$cmat ="";
				}
				/* MAT Post Array*/	
				if(!empty($_POST['mat_date'])){			
				$mat_array = array();				
				$mat_array['date'] = 	addslashes($_POST['mat_date']);	
				$mat_array['roll'] = 	addslashes($_POST['mat_roll']);	
				$mat_array['score'] = 	addslashes($_POST['mat_score']);	
				$mat_array['percentile'] = addslashes($_POST['mat_percentile']);	
				$mat = serialize($mat_array);	
				}else{
					$mat ="";
				}
				/* XAT Post Array*/	
				if(!empty($_POST['xat_date'])){				
				$xat_array = array();				
				$xat_array['date'] = 	addslashes($_POST['xat_date']);	
				$xat_array['roll'] = 	addslashes($_POST['xat_roll']);	
				$xat_array['score'] = 	addslashes($_POST['xat_score']);	
				$xat_array['percentile'] = addslashes($_POST['xat_percentile']);	
				$xat = serialize($xat_array);	
				}else{
					$xat ="";
				}			
				/* ATMA Post Array*/
				if(!empty($_POST['atma_date'])){				
				$atma_array = array();				
				$atma_array['date'] = 	addslashes($_POST['atma_date']);	
				$atma_array['roll'] = 	addslashes($_POST['atma_roll']);	
				$atma_array['score'] = 	addslashes($_POST['atma_score']);	
				$atma_array['percentile'] = addslashes($_POST['atma_percentile']);	
				$atma = serialize($atma_array);	
				}else{
					$atma ="";
				}		
				/* Other Post Array*/
				if(!empty($_POST['others_date'])){			
				$others_array = array();				
				$others_array['date'] = 	addslashes($_POST['others_date']);	
				$others_array['roll'] = 	addslashes($_POST['others_roll']);	
				$others_array['score'] = 	addslashes($_POST['others_score']);	
				$others_array['percentile'] = addslashes($_POST['others_percentile']);	
				$others = serialize($others_array);	
				}else{
					$others ="";
				}		
				/* Work Exp Post Array*/	
				if(!empty($_POST['org1'])){					
				$work_exp1_array = array();				
				$work_exp1_array['organisation'] = 	addslashes($_POST['org1']);	
				$work_exp1_array['designation'] = 	addslashes($_POST['org1_desig']);	
				$work_exp1_array['period'] = 	addslashes($_POST['org1_period']);	
				$work_exp1_array['experience'] = addslashes($_POST['org1_exp']);	
				$work_exp1_array['emoluments'] = addslashes($_POST['org1_emoluments']);	
				$work_exp1 = serialize($work_exp1_array);	
				}else{
					$work_exp1 ="";
				}
				/* Work Exp 2 Post Array*/
				if(!empty($_POST['org2'])){					
				$work_exp2_array = array();				
				$work_exp2_array['organisation'] = 	addslashes($_POST['org2']);	
				$work_exp2_array['designation'] = 	addslashes($_POST['org2_desig']);	
				$work_exp2_array['period'] = 	addslashes($_POST['org2_period']);	
				$work_exp2_array['experience'] = addslashes($_POST['org2_exp']);	
				$work_exp2_array['emoluments'] = addslashes($_POST['org2_emoluments']);	
				$work_exp2 = serialize($work_exp2_array);	
				}else{
					$work_exp2 ="";
				}
				/* Work Exp 3 Post Array*/
				if(!empty($_POST['org3'])){				
				$work_exp3_array = array();				
				$work_exp3_array['organisation'] = 	addslashes($_POST['org3']);	
				$work_exp3_array['designation'] = 	addslashes($_POST['org3_desig']);	
				$work_exp3_array['period'] = 	addslashes($_POST['org3_period']);	
				$work_exp3_array['experience'] = addslashes($_POST['org3_exp']);	
				$work_exp3_array['emoluments'] = addslashes($_POST['org3_emoluments']);	
				$work_exp3 = serialize($work_exp3_array);	
				}else{
					$work_exp3 ="";
				}
				/* Award1 Post Array*/	
				if(!empty($_POST['award1_name'])){				
				$award1_array = array();				
				$award1_array['name'] = 	addslashes($_POST['award1_name']);	
				$award1_array['institution'] = 	addslashes($_POST['award1_institution']);	
				$award1_array['level'] = 	addslashes($_POST['award1_level']);	
				$award1_array['basis'] = addslashes($_POST['award1_basis']);	
				$award1_array['year'] = addslashes($_POST['award1_year']);	
				$award1 = serialize($award1);	
					}
					else{
					$award1 ="";
				
				}
				/* Award2 Post Array*/	
				if(!empty($_POST['award2_name'])){			
				$award2_array = array();	
						
				$award2_array['name'] = 	addslashes($_POST['award2_name']);	
				$award2_array['institution'] = 	addslashes($_POST['award2_institution']);	
				$award2_array['level'] = 	addslashes($_POST['award2_level']);	
				$award2_array['basis'] = addslashes($_POST['award2_basis']);	
				$award2_array['year'] = addslashes($_POST['award2_year']);	
				$award2 = serialize($award2);	
				}else{
					$award2 ="";
				}
				/* Award3 Post Array*/	
				if(!empty($_POST['award3_name'])){			
				$award3_array = array();
				
				$award3_array['name'] = 	addslashes($_POST['award3_name']);	
				$award3_array['institution'] = 	addslashes($_POST['award3_institution']);	
				$award3_array['level'] = 	addslashes($_POST['award3_level']);	
				$award3_array['basis'] = addslashes($_POST['award3_basis']);	
				$award3_array['year'] = addslashes($_POST['award3_year']);	
				$award3 = serialize($award3);	
				}else{
					$award3 ="";
				}
						
				$sql = "INSERT INTO `application` (`id`, `first_name`, `middle_name`, `last_name`, `dob`, `photo`,`mobile`, `email`, `gender`, `marital_status`, `category`, `address`, `city`, `state`, `pin`, `father_name`, `father_occupation`, `father_office_address`, `father_mobile`, `mother_name`, `mother_occupation`, `mother_office_address`, `mother_mobile`, `tenth`, `twelfth`, `graduation`, `postgraduation`, `professional`, `hostel`, `occupancy`, `transport`, `jee`, `upsee`, `cmat`, `mat`, `cat`, `xat`, `atma`, `others`, `work_exp1`, `work_exp2`, `work_exp3`, `total_exp`, `award1`, `award2`, `award3`, `date`, `isDel`) VALUES (NULL, 
				'".addslashes($_POST['first_name'])."', 
				'".addslashes($_POST['middle_name'])."', 
				'".addslashes($_POST['last_name'])."',
				'".date('Y-m-d',strtotime($_POST['dob']))."', 
				'".$pictargetFileName."', 
				'".addslashes($_POST['mobile'])."', 
				'".addslashes($_POST['email'])."',
				'".addslashes($_POST['gender'])."', 
				'".addslashes($_POST['marital_status'])."', 
				'".addslashes($_POST['category'])."', 
				'".addslashes($_POST['permanent_address'])."', 
				'".addslashes($_POST['city'])."', 
				'".addslashes($_POST['state'])."', 
				'".addslashes($_POST['pincode'])."', 
				'".addslashes($_POST['father_name'])."', 
				'".addslashes($_POST['father_occupation'])."', 
				'".addslashes($_POST['fathers_office_add'])."', 
				'".addslashes($_POST['fathers_mob'])."', 
				'".addslashes($_POST['mother_name'])."', 
				'".addslashes($_POST['mother_occupation'])."', 
				'".addslashes($_POST['mothers_office_add'])."', 
				'".addslashes($_POST['mother_mobile'])."', 
				'".$tenth."', 
				'".$twelfth."', 
				'".$graduation."', 
				'".$postgraduation."', 
				'".$professional."', 
				'".$hostel."', 
				'".addslashes($_POST['occupancy'])."', 
				'".$transport."', 				
				'".$jee."', 
				'".$upsee."', 
				'".$cmat."', 
				'".$mat."', 
				'".$cat."', 
				'".$xat."', 
				'".$atma."', 
				'".$others."', 
				'".$work_exp1."', 
				'".$work_exp2."', 
				'".$work_exp3."', 
				'".addslashes($_POST['total_exp'])."', 
				'".$award1."', 
				'".$award2."', 
				'".$award3."', 
				NOW(), 
				'0');";
				//echo  $sql; die();
				$res = mysqli_query($con, $sql) or die(mysqli_error($con));
				$insertId= mysqli_insert_id($con);

				if($insertId > 0 ) {
					header("Location: https://csmu.in/thankyou.php?status=1&msg=Thank you for submission.&sid=".$insertId);

				} else { 
					header("Location: https://csmu.in/admission-form.php?status=1&msg=Please try again");

				}
			 }
		  }
?>
<script type="text/javascript">
function getProgram(param){
	
	var Bachelors= '<select name="course" class="course form-control" id="Bachelors"><option value="">Select Course</option> <option value="BCA">BCA</option><option value="B.Tech CS">B.Tech CS</option><option value="B.Tech Mechanical">B.Tech Mechanical</option><option value="B.Tech ECE">B.Tech ECE</option><option value="B.Tech Civil">B.Tech Civil</option><option value="B.Tech IT">B.Tech IT</option><option value="B.Tech Electrical">B.Tech Electrical</option><option value="BHM">BHM</option><option value="B.Sc. Hospitality">B.Sc. Hospitality</option><option value="B. Sc. Food production">B. Sc. Food production</option><option value="B. Sc. Beverage Services">B. Sc. Beverage Services</option><option value="BFA Animation-vfx">BFA Animation-vfx</option><option value="BFA Fashion designing">BFA Fashion designing</option><option value="BFA Interior Designing">BFA Interior Designing</option><option value="BFA Home Science">BFA Home Science</option><option value="BFA Film Technology">BFA Film Technology</option><option value="BSc Maths">BSc Maths</option><option value="BSc Bio">BSc Bio</option><option value="BA">BA</option><option value="B.Com">B.Com</option><option value="BSW">BSW</option><option value="BJMC">BJMC</option><option value="LLB">LLB</option><option value="B.A.LLB">B.A.LLB</option><option value="B.Arch">BBA.LLB</option><option value="BCA">B.Arch</option><option value="BCA">BCA</option><option value="BBA">BBA</option></select>';
															   
	var Masters= '<select name="course" class="course form-control" id="Masters" ><option value="">Select Course</option><option value="M.Pharma">M.Pharma</option><option value="MBA">MBA</option><option value="MCA">MCA</option><option value="M.Tech">M.Tech</option><option value="M.Sc Physics">M.Sc Physics</option><option value="M.Sc Chemistry">M.Sc Chemistry</option><option value="M.Sc Maths">M.Sc Maths</option><option value="M.Sc Botany">M.Sc Botany</option><option value="M.Sc Geology">M.Sc Geology</option><option value="M.Sc Zoology">M.Sc Zoology</option><option value="M.Sc Economics">M.Sc Economics</option><option value="M.Sc Geography">M.Sc Geography</option><option value="M.Sc Psychology">M.Sc Psychology</option><option value="M.Sc Statistics">M.Sc Statistics</option><option value="M.Sc Bio Technology">M.Sc Bio Technology</option><option value="M.Sc IT">M.Sc IT</option><option value="M.Sc Yoga">M.Sc Yoga</option><option value="MA Economics">MA Economics</option><option value="MA Psychology">MA Psychology</option><option value="MA Geography">MA Geography</option><option value="MA Sociology">MA Sociology</option><option value="MA History">MA History</option><option value="MA Public Administration">MA Public Administration</option><option value="MA Political Science">MA Political Science</option><option value="MA English">MA English</option><option value="Masters in Social Work">Masters in Social Work</option><option value="Masters in Journalism & Mass Communication">Masters in Journalism & Mass Communication</option><option value="LLM">LLM</option><option value="M.Com">M.Com</option>></select>';
															
	var Diploma= '<select name="course" class="course form-control" id="Diploma" ><option value="">Select Course</option><option value="Diploma in Pharmacy"> Diploma in Pharmacy</option><option value="Diploma in Cyber Law"> Diploma in Cyber Law</option><option value="Diploma in Taxation Law">Diploma in Taxation Law</option><option value="Diploma in Corporate Law">Diploma in Corporate Law</option><option value="Diploma in Fornsic Science Law">Diploma in Fornsic Science Law</option><option value="Diploma in Labour & Welfare Law">Diploma in Labour & Welfare Law</option><option value="Diploma in Business Law">Diploma in Business Law</option><option value="Diploma in IP Law">Diploma in IP Law</option><option value="Diploma in Criminology Law">Diploma in Criminology Law</option><option value="Diploma in Engg.">Diploma in Engg.</option><option value="Diploma in Animation-Vfx">Diploma in Animation-Vfx</option><option value="Diploma in Fashion designing">Diploma in Fashion designing</option><option value="Diploma in Interior Designing">Diploma in Interior Designing</option><option value="Diploma in Film Technology">Diploma in Film Technology</option><option value="Diploma in Home Science">Diploma in Home Science</option></select>';
	
	if(param == 'Bachelors'){
	   $("#courseDiv").html(Bachelors);
	  }
	if(param == 'Masters'){
	   $("#courseDiv").html(Masters);
	  }
	if(param == 'Diploma'){
	   $("#courseDiv").html(Diploma);
	  }
	
	
	
	
	
}
	
function validate(){
	var name  = document.getElementById("name").value;
		console.log(name);

	if(name == ''){
		alert("Please enter your name");
		$("#name").focus();
		return false;
	}
	var email  = document.getElementById("email").value;
		console.log(email);

	if(email == ''){
		alert("Please enter your email");
		$("#email").focus();
		return false;
	}
	var phone  = document.getElementById("phone").value;
		console.log(phone);
	if(phone == ''){
		alert("Please enter your phone");
		$("#phone").focus();
		return false;
	}
	var programme  = document.getElementById("programme").value;
		console.log(programme);

	if(programme == ''){
		alert("Please enter your programme");
		$("#programme").focus();
		return false;
	}
	var course = document.getElementsByName("course");
		console.log(course);

	if(course == ''){
		alert("Please enter your course");
		return false;
	}
	var city  = document.getElementById("city").value;
		console.log(city);
	if(city == ''){
		alert("Please enter your city");
		$("#city").focus();
		return false;
	}

	var state   = document.getElementById("state").value;
	console.log(state);
	if(state == ''){
		alert("Please enter your state");
		$("#state").focus();
		return false;
	}

	var remark = document.getElementById("remark").value;
	console.log(remark);
	

}
	
function getCity(param){
   //alert(param);
	 var settings =	{   
	  "url": "get_cities.php?state_id="+param,
	  "method": "POST",
	  "timeout": 0,
	};

	$.ajax(settings).done(function (response) {
	 // console.log(response);
		$("#city").html(response);
	});	
	   
   }
   
   
function checkmobile(param) {
	
	var mobile_number = param.value;
	var id = param.id;
	
	if(mobile_number == ''){
		alert("Please Enter 10 digit Mobile Number.");
	}
	if(!mobile_number.match('[0-9]{10}'))  {
					alert("Please Enter 10 digit Mobile Number.");
					$("#"+id).val('');
					return false;
				}
}
	
	
Filevalidation = (param) => { 
        const fi = document.getElementById(param); 
        // Check if any file is selected. 
        if (fi.files.length > 0) { 
            for (const i = 0; i <= fi.files.length - 1; i++) { 
  
                const fsize = fi.files.item(i).size; 
                const file = Math.round((fsize / 1024)); 
                // The size of the file. 
                if (file >= 2048) { 
                    alert("File too Big, please select a file less than 4mb"); 
					$("#"+param).val('');
                } /*else { 
                    document.getElementById('size').innerHTML = '<b>'
                    + file + '</b> KB'; 
                } */
            } 
        } 
    }
</script>

<style>
span.mandatory{color:#d1202c;}
/*.form-check-input {position: unset; margin-top: 0rem; margin-left: 0rem;}
.table-bordered td p{text-align: left;}
.form-group {margin-bottom: 0.4rem!important;}*/
</style>

<section class="page-header">
  <div class="container">
    <div class="row">
      <div class="col">
        <ul class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li class="active">Admission Form </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h1>Admission Form </h1>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="featured-boxes">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <?php if(isset($_REQUEST['status']) && $_REQUEST['status'] == 0) {echo "<h4 style='color:red'>Please try again.".$_REQUEST['msg']."</h4>";}?>
            <?php if(isset($_REQUEST['status']) && $_REQUEST['status'] == 1) {echo "<h4 style='color:green'>Application for admission is successfully done.</h4>";}?>
            <div class="featured-box featured-box-primary text-left mt-5">
              <div class="box-content">
                <!--<h2 class="text-center mb-3"><strong>Admission Enquiry</strong></h2>-->
				<h6 class="heading-primary text-uppercase mb-3"><span class="mandatory">*</span> Fields are mandatory.</h6>
                <form action="#" method="post" onSubmit="return validate();" >
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-row">
                        <div class="form-group col">
                          <label>Program Name <span class="mandatory">*</span></label>
                         
							<select class="form-control" id="program_name" name="program_name">
  <option  required value=""  >Select an option...</option>
  <optgroup label="Department of Design and Art">
    <option value="Diploma in Fine Arts, (Fashion Design/ Textile Design/ Interior Design/ Graphic Design/Film Technology/ Animation and VFX/ Home Science/ Performing Arts)">Diploma in Fine Arts, (Fashion Design/ Textile Design/ Interior Design/ Graphic Design/Film Technology/ Animation and VFX/ Home Science/ Performing Arts)</option>
    <option value="Bachelor of Fine Arts">Bachelor of Fine Arts </option>
    <option value="Bachelor of Design (Fashion Design/ Textile Design/ Interior Design, Graphic Design)">Bachelor of Design (Fashion Design/ Textile Design/ Interior Design, Graphic Design)</option>
    <option value="B.Sc. in Fashion Design/ Textile Design/ Interior Design, Graphic Design">B.Sc. in Fashion Design/ Textile Design/ Interior Design, Graphic Design</option>
    <option value="Bachelor of Visual Arts (Film Technology/ Animation and VFX)">Bachelor of Visual Arts (Film Technology/ Animation and VFX)</option>
    <option value="Master of Fine Arts">Master of Fine Arts</option>
    <option value="Master of Design (Fashion Design/Textile Design/ Interior Design/ Graphic Design)">Master of Design (Fashion Design/Textile Design/ Interior Design/ Graphic Design)</option>
    <option value="Master of Visual Arts (Film Technology/ Animation and VFX)">Master of Visual Arts (Film Technology/ Animation and VFX)</option>
  </optgroup>
  <optgroup label="Department of Education">
    <option value="Certificate in Guidance and Counseling">Certificate in Guidance and Counseling</option>
    <option value="Basic School Teaching Course">Basic School Teaching Course</option>
    <option value="Bachelor of Education">Bachelor of Education</option>
    <option value="Bachelor of Yoga">Bachelor of Yoga</option>
    <option value="Master of Education">Master of Education</option>
    <option value="Master of Yoga">Master of Yoga</option>
  </optgroup>
  <optgroup label="Department of Humanities">
    <option value="Bachelor of Arts">Bachelor of Arts</option>
    <option value="Bachelor of Arts (Hons.)">Bachelor of Arts (Hons.)</option>
    <option value="M.A.">M.A (English/ Hindi/ Marathi/ Sanskrit/ Public Administration/ History/ Political Science/ Geography/ Economics/ Psychology)</option>
  </optgroup>
  <optgroup label="Department of Journalism and Mass Communication">
    <option value="Diploma in Print and Digital Media/Advertising and Public Relations">Diploma in Print and Digital Media/Advertising and Public Relations</option>
    <option value="Bachelor of Journalism and Mass Communication">Bachelor of Journalism and Mass Communication</option>
    <option value="Master of Journalism and Mass Communication">Master of Journalism and Mass Communication</option>
    <option value="PG Diploma in Broadcast Journalism">PG Diploma in Broadcast Journalism</option>
  </optgroup>
  <optgroup label="Department of Library and Information Science">
    <option value="Diploma in Library and Information Science">Diploma in Library and Information Science</option>
    <option value="Bachelor of Library and Information Science">Bachelor of Library and Information Science</option>
    <option value="Master of Library and Information Science">Master of Library and Information Science</option>
  </optgroup>
  <optgroup label="Department of Social Work">
    <option value="Bachelor of Social Work">Bachelor of Social Work </option>
    <option value="Master of Social Work">Master of Social Work</option>
    <option value="Master of Philosophy">Doctor of Philosophy </option>
    <option value="Doctor of Philosophy">Doctor of Philosophy </option>
    <option value="Doctor of Philosophy">Doctor of Philosophy </option>
  </optgroup>
  <optgroup label="Department of Commerce">
    <option value="Bachelor of Commerce">Bachelor of Commerce </option>
    <option value="Bachelor of Commerce in Accounting and Finance">Bachelor of Commerce in Accounting and Finance</option>
    <option value="Master of Commerce  (With Specialization in Accountancy, Taxation, Banking, Insurance)">Master of Commerce  (With Specialization in Accountancy, Taxation, Banking, Insurance) </option>
  </optgroup>
  <optgroup label="Department of Business Administration">
    <option value="Bachelor of Business Administration">Bachelor of Business Administration </option>
    <option value="Master of Business Administration
(With Specializations in Marketing, Finance, Human Resources and IT)">Master of Business Administration
(With Specializations in Marketing, Finance, Human Resources and IT)</option>
    <option value="Post Graduate Diploma in Business Management , BA, HR, LSCM">Post Graduate Diploma in Business Management , BA, HR, LSCM</option>
    <option value="Master of Philosophy (Business Administration)">Master of Philosophy (Business Administration)</option>
    <option value="Doctor of Philosophy (Business Administration)">Doctor of Philosophy (Business Administration)</option>
  </optgroup>  
  <optgroup label="Department of Hospitality Management">
    <option value="Certificate Course in Culinary Arts ">Certificate Course in Culinary Arts </option>
    <option value="Master of Business Administration
(With Specializations in Marketing, Finance, Human Resources and IT)">Master of Business Administration
(With Specializations in Marketing, Finance, Human Resources and IT)</option>
    <option value="Certificate Course in Bakery & Confectionary">Certificate Course in Bakery & Confectionary</option>
<option value="Certificate Course in Food and Beverage Service">Certificate Course in Food and Beverage Service</option>
<option value="Certificate Course in Housekeeping Operations">Certificate Course in Housekeeping Operations</option>
<option value="Certificate Course in Front Office Operations">Certificate Course in Front Office Operations</option>
<option value="Diploma in Hotel Operations">Diploma in Hotel Operations</option>
<option value="Bachelor of Science (Hospitality Studies)">Bachelor of Science (Hospitality Studies)</option>
<option value="Bachelor of Hotel Management and Catering Technology">Bachelor of Hotel Management and Catering Technology</option>
<option value="Master of Hospitality Management">Master of Hospitality Management</option>
  </optgroup>
								
	  <optgroup label="Faculty of Engineering and Technology">
    <option value="Btech in Civil Engineering">Btech in Civil Engineering</option>
 <option value="Btech in Mechanical Engineering">Btech in Mechanical Engineering</option>
 <option value="Btech in Computer Science and Engineering">Btech in Computer Science and Engineering</option>
 <option value="Btech in Information Technology">Btech in Information Technology</option>
 <option value="Btech in Electrical Engineering">Btech in Electrical Engineering</option>
 <option value="Btech in Electronics Engineering">Btech in Electronics Engineering</option>
 <option value="Btech in Mechatronics Engineering">Btech in Mechatronics Engineering</option>
 <option value="Btech in Biotechnology">Btech in Biotechnology</option>
 <option value="Btech in Chemical Engineering">Btech in Chemical Engineering</option>
 <option value="Bachelor of Computer Application">Bachelor of Computer Application</option>
 <option value="B.Sc.(Computer Science/ Information Technology)">B.Sc.(Computer Science/ Information Technology)</option>
 <option value="Bachelor of Architecture">Bachelor of Architecture </option>
 <option value="Bachelor in Planning ">Bachelor in Planning </option>
<option value="Diploma in Civil Engineering"> Diploma in Civil Engineering</option>
<option value="Diploma in Mechanical Engineering">Diploma in Mechanical Engineering</option>
<option value="Diploma in Computer Science and Engineering">Diploma in Computer Science and Engineering</option>
<option value="Diploma in Information Technology">Diploma in Information Technology</option>
<option value="Diploma in Electrical Engineering">Diploma in Electrical Engineering</option>
<option value="M. Tech in Civil Engineering">Civil Engineering</option>
<option value="M. Tech in Mechanical Engineering">Mechanical Engineering</option>
<option value="M. Tech in Computer Science and Engineering">Computer Science and Engineering</option>
<option value="M. Tech in Information Engineering">Information Technology</option>
<option value="M. Tech in Electrical Engineering">Electrical Engineering</option>
<option value="M. Tech in Electronics Engineering">Electronics Engineering</option>
<option value="M. Tech in Biotechnology">Biotechnology</option>
<option value="Master of Computer Application">Master of Computer Application</option>
<option value="Computer Science/ Information Technology">Computer Science/ Information Technology</option>
<option value="Post-Graduate Diploma in Computer Application">Post-Graduate Diploma in Computer Application</option>
<option value="Master of Philosophy">Master of Philosophy</option>
<option value="Doctor of Philosophy">Doctor of Philosophy</option>
  </optgroup>  
  <optgroup label="Faculty of Law">
    <option value="Diploma in Cyber Law, Forensic Science Law, Business Law, Taxation Law, Corporate Law ">Diploma in Cyber Law, Forensic Science Law, Business Law, Taxation Law, Corporate Law </option>
 <option value="Bachelor in Law">Bachelor in Law</option>
 <option value="Integrated Hons. Bachelor and Law ">Integrated Hons. Bachelor and Law </option>
 <option value="Integrated. Bachelor of Business Administration and Law">Integrated. Bachelor of Business Administration and Law</option>
 <option value="Master of Law 1 year">Master of Law 1year</option>
 <option value="Master of Law">Master of Law</option>
	<option value=" Master of Philosophy (Law)">  Master of Philosophy (Law)</option>
<option value="Doctor of Philosophy (Law)">Doctor of Philosophy (Law)</option>
 </optgroup>  
 <optgroup label="Faculty of Pharmacy">
    <option value="Diploma in Pharmacy">Diploma in Pharmacy</option>
 <option value="Bachelor in Pharmacy">Bachelor in Pharmacy</option>
 </optgroup>  
								
 <optgroup label="Faculty of Science ">
    <option value="Bachelor of Science  in Physics, Mathematics, Chemistry/ Computer Science">Bachelor of Science  in Physics, Mathematics, Chemistry/ Computer Science</option>
  <option value="Bachelor of Science  in Zoology, Botany, Chemistry">Bachelor of Science  in Zoology, Botany, Chemistry</option>
  <option value="Bachelor of Science  in Physics, Mathematics, Statistics, Chemistry, Botany, Zoology, Biotechnology, Microbiology, Bioinformatics, Biochemistry, Geology">Bachelor of Science  in Physics, Mathematics, Statistics, Chemistry, Botany, Zoology, Biotechnology, Microbiology, Bioinformatics, Biochemistry, Geology</option>
  <option value="Master of Science  in Physics, Mathematics, Statistics, Chemistry, Botany, Zoology, Biotechnology, Microbiology, Bioinformatics, Biochemistry, Geology Environmental Science">Master of Science  in Physics, Mathematics, Statistics, Chemistry, Botany, Zoology, Biotechnology, Microbiology, Bioinformatics, Biochemistry, Geology Environmental Science</option>
<option value="Master of Philosophy">Master of Philosophy</option>
<option value="Doctor of Philosophy">Doctor of Philosophy</option>
 </optgroup>  
</select>
							
							
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-row">
                        <div class="form-group col">
                          <label>Upload Photo <span class="mandatory">*</span></label>
                          <input type="file" id="photo" name="photo" value="" class="form-control" >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="heading heading-border heading-bottom-border">
                    <h4 style="font-weight:600; color:#000;" class="adm-form-heading">APPLICANT'S PERSONAL DETAILS </h4>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-row">
                        <div class="form-group col">
                          <label>First Name <span class="mandatory">*</span></label>
                          <input type="text" id="first_name" name="first_name" value="" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-row">
                        <div class="form-group col">
                          <label>Middle Name</label>
                          <input type="text" id="middle_name" name="middle_name" value="" class="form-control" >
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-row">
                        <div class="form-group col">
                          <label>Last Name <span class="mandatory">*</span></label>
                          <input type="text" id="last_name" name="last_name" value="" class="form-control" >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-row">
                        <div class="form-group col">
                          <label>Date of Birth <span class="mandatory">*</span></label>
                          <input type="date" name="dob" class="form-control" id="dob" placeholder="" >
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-row">
                        <div class="form-group col">
                          <label>Mobile <span class="mandatory">*</span></label>
                          <input type="phone" id="mobile" name="mobile" value="" class="form-control" >
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-row">
                        <div class="form-group col">
                          <label>Email <span class="mandatory">*</span></label>
                          <input type="email" id="email" name="email" value="" class="form-control" >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-row">
                        <div class="form-group col">
                          <label>Gender <span class="mandatory">*</span></label>
                          <select name="gender"  class="form-control" id="exampleFormControlSelect1">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-row">
                        <div class="form-group col">
                          <label>Marital Status <span class="mandatory">*</span></label>
                          <select name="merital_status" class="form-control" id="exampleFormControlSelect1">
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-row">
                        <div class="form-group col">
                          <label>Category <span class="mandatory">*</span></label>
                          <select class="form-control" name="category" id="exampleFormControlSelect1">
                            <option value="General">General</option>
                            <option value="SC">SC</option>
							<option value="ST">ST</option>
							<option value="OBC">OBC</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
				  <div class="heading heading-border heading-bottom-border">
                    <h4 style="font-weight:600; color:#000;" class="adm-form-heading">MAILING ADDRESS</h4>
                  </div>
				  <div class="row">
                    <div class="col-md-12">
                      <div class="form-row">
                        <div class="form-group col">
                          <label>Permanent Address <span class="mandatory">*</span></label>
                          <input type="text" id="permanent_address" name="permanent_address" value="" class="form-control" >
                        </div>
                      </div>
                    </div>                   
                    
                  </div>
                  <div class="row">
                    
                    <div class="col-md-4">
                      <div class="form-row">
                        <div class="form-group col">
                          <label>State <span class="mandatory">*</span></label>

							<select name="state" id="state" class="form-control" onChange="getCity(this.value)">
								<option value="">==Select State ==</option>
								<?php 
									$sql_states = "SELECT * FROM `states`"; 
									$res_states = mysqli_query($con, $sql_states) or die(mysqli_error($con));
									while($fetch_states = mysqli_fetch_array($res_states)) { ?>
							
								<option  class="form-control"  value="<?php echo $fetch_states['id'];  ?>" >
									<?php echo $fetch_states['name'];  ?> 
								</option>
								<?php }  ?>
							</select>

                        </div>
                      </div>
                    </div>
					 <div class="col-md-4">
                      <div class="form-row">
                        <div class="form-group col">
                          <label>City <span class="mandatory">*</span></label>
							<select name="city" id="city" class="form-control">
                          		<option value="">==Select City ==</option>
							</select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-row">
                        <div class="form-group col">
                          <label>Pin Code <span class="mandatory">*</span></label>
                          <input type="text" id="pincode" name="pincode" value="" class="form-control" >
                        </div>
                      </div>
                    </div>
                  </div>
				  <div class="heading heading-border heading-bottom-border">
                    <h4 style="font-weight:600; color:#000;" class="adm-form-heading">FATHER'S DETAILS</h4>
                  </div>
				  <div class="row">
                    <div class="col-md-3">
                      <div class="form-row">
                        <div class="form-group col">
                          <label>Father's Name <span class="mandatory">*</span></label>
                          <input type="text" id="fathers_name" name="fathers_name" value="" class="form-control" >
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-row">
                        <div class="form-group col">
                          <label>Occupation <span class="mandatory">*</span></label>
                         <input type="text" id="fathers_occupation" name="fathers_occupation" value="" class="form-control" >
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-row">
                        <div class="form-group col">
                          <label>Office Address</label>
                          <input type="text" id="fathers_office_add" name="fathers_office_add" value="" class="form-control" >
                        </div>
                      </div>
                    </div>
					<div class="col-md-3">
                      <div class="form-row">
                        <div class="form-group col">
                          <label>Tel/Mobile No. <span class="mandatory">*</span></label>
                          <input type="text" id="fathers_mob" name="fathers_mob" value="" class="form-control" >
                        </div>
                      </div>
                    </div>
                  </div>
				  <div class="heading heading-border heading-bottom-border">
                    <h4 style="font-weight:600; color:#000;" class="adm-form-heading">MOTHER'S DETAILS</h4>
                  </div>
				  <div class="row">
                    <div class="col-md-3">
                      <div class="form-row">
                        <div class="form-group col">
                          <label>Mother's Name <span class="mandatory">*</span></label>
                          <input type="text" id="mothers_name" name="mothers_name" value="" class="form-control" >
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-row">
                        <div class="form-group col">
                          <label>Occupation</label>
                         <input type="text" id="mothers_occupation" name="mothers_occupation" value="" class="form-control" >
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-row">
                        <div class="form-group col">
                          <label>Office Address</label>
                          <input type="text" id="mothers_office_add" name="mothers_office_add" value="" class="form-control" >
                        </div>
                      </div>
                    </div>
					<div class="col-md-3">
                      <div class="form-row">
                        <div class="form-group col">
                          <label>Tel/Mobile No.</label>
                          <input type="text" id="mother_mobile" name="mother_mobile" value="" class="form-control" >
                        </div>
                      </div>
                    </div>
                  </div>
				  <div class="heading heading-border heading-bottom-border">
                    <h4 style="font-weight:600; color:#000;" class="adm-form-heading">ACADEMIC QUALIFICATIONS <span class="mandatory">*</span></h4>
                  </div>
				  <div class="form-row">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Qualification </th>
                          <th> Name of the Institution </th>
                          <th> Name of the Board/University </th>
						  <th> Year of Completion </th>
						  <th> Marks Obtained Aggregate </th>
						  <th> Degree with Stream Engg./ Sc /Commerce / Art / et </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Secondary (X)</td>
						  <td><input type="text" name="secondary_institution" class="form-control" id="secondary_institution" placeholder="" >
                          </td>
                          <td><input type="text" name="secondary_board" class="form-control" id="secondary_board" placeholder="" >
                          </td>
                          <td><input type="text" name="secondary_year" class="form-control" id="secondary_year" placeholder="" >
                          </td>
						  <td><input type="text" name="secondary_marks" class="form-control" id="secondary_marks" placeholder="" >
                          </td>
						  <td><input type="text" name="secondary_degree" class="form-control" id="secondary_degree" placeholder="" >
                          </td>
                        </tr>
						<tr>
                          <td>Sr. Secondary (XII)</td>
						  <td><input type="text" name="sr_secondary_institution" class="form-control" id="sr_secondary_institution" placeholder="">
                          </td>
                          <td><input type="text" name="sr_secondary_board" class="form-control" id="sr_secondary_board" placeholder="" >
                          </td>
                          <td><input type="text" name="sr_secondary_year" class="form-control" id="sr_secondary_year" placeholder="" >
                          </td>
						  <td><input type="text" name="sr_secondary_marks" class="form-control" id="sr_secondary_marks" placeholder="" >
                          </td>
						  <td><input type="text" name="sr_secondary_degree" class="form-control" id="sr_secondary_degree" placeholder="" >
                          </td>
                        </tr>
						<tr>
                          <td>Graduation Degree</td>
						  <td><input type="text" name="graduation_institution" class="form-control" id="graduation_institution" placeholder="">
                          </td>
                          <td><input type="text" name="graduation_board" class="form-control" id="graduation_board" placeholder="" >
                          </td>
                          <td><input type="text" name="graduation_year" class="form-control" id="graduation_year" placeholder="" >
                          </td>
						  <td><input type="text" name="graduation_marks" class="form-control" id="graduation_marks" placeholder="" >
                          </td>
						  <td><input type="text" name="graduation_degree" class="form-control" id="graduation_degree" placeholder="" >
                          </td>
                        </tr>
						<tr>
                          <td>Post-Graduation Degree</td>
						  <td><input type="text" name="pg_institution" class="form-control" id="pg_institution" placeholder="">
                          </td>
                          <td><input type="text" name="pg_board" class="form-control" id="pg_board" placeholder="" >
                          </td>
                          <td><input type="text" name="pg_year" class="form-control" id="pg_year" placeholder="" >
                          </td>
						  <td><input type="text" name="pg_marks" class="form-control" id="pg_marks" placeholder="" >
                          </td>
						  <td><input type="text" name="pg_degree" class="form-control" id="pg_degree" placeholder="" >
                          </td>
                        </tr>
						<tr>
                          <td>Professional Degree</td>
						  <td><input type="text" name="professional_institution" class="form-control" id="professional_institution" placeholder="">
                          </td>
                          <td><input type="text" name="professional_board" class="form-control" id="professional_board" placeholder="" >
                          </td>
                          <td><input type="text" name="professional_year" class="form-control" id="professional_year" placeholder="" >
                          </td>
						  <td><input type="text" name="professional_marks" class="form-control" id="professional_marks" placeholder="" >
                          </td>
						  <td><input type="text" name="professional_degree" class="form-control" id="professional_degree" placeholder="" >
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>
					<p style="font-size:12px; font-weight:400; text-transform:capitalize;">* The Candidate whose results yet be declared should produce statement of marks immediately on declaration of his/her results.</p>
                  </div>
                </div>
                  <div class="form-row">
                  		<div class="form-group col-4">
                          <label><strong>Do you require Hostel accommodation?</strong></label>
                        </div>
                        <div class="col-8">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="hostel" id="inlineRadio1" value="yes">
                          <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="hostel" id="inlineRadio2" value="no">
                          <label class="form-check-label" for="inlineRadio2">No</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="occupancy" id="inlineRadio3" value="tripple_occupancy">
                          <label class="form-check-label" for="inlineRadio3">Tripple Occupancy</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="occupancy" id="inlineRadio4" value="double_occupancy">
                          <label class="form-check-label" for="inlineRadio4">Double Occupancy</label>
                        </div>
                        </div>
                  </div>
                  <div class="form-row">
                  		<div class="form-group col-4">
                          <label><strong>Do you require Transport facility?</strong> </label>
                        </div>
                        <div class="col-8">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="transport" id="inlineRadio1" value="yes">
                          <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="transport" id="inlineRadio2" value="no">
                          <label class="form-check-label" for="inlineRadio2">No</label>
                        </div>
                        </div>
                  </div>
                  <div class="heading heading-border heading-bottom-border">
                    <h4 style="font-weight:600; color:#000; text-transform:uppercase;" class="adm-form-heading">Entrance Exam Details (if any)</h4>
                  </div>
				  <div class="form-row">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Examination</th>
                          <th>Date</th>
                          <th>Reg./Roll No.</th>
						  <th>Composite Score</th>
						  <th>Percentile</th>
						  </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>JEE</td>
						  <td><input type="text" name="jee_date" class="form-control" id="jee_date" placeholder="" pattern="^[A-Za-z -]+$">
                          </td>
                          <td><input type="text" name="jee_roll" class="form-control" id="jee_roll" placeholder="" >
                          </td>
                          <td><input type="text" name="jee_score" class="form-control" id="jee_score" placeholder="" >
                          </td>
						  <td><input type="text" name="jee_percentile" class="form-control" id="jee_percentile" placeholder="" >
						    </td>
						  </tr>
						<tr>
                          <td>UPSEE</td>
						  <td><input type="text" name="upsee_date" class="form-control" id="upsee_date">
                          </td>
                          <td><input type="text" name="upsee_roll" class="form-control" id="upsee_roll" placeholder="" >
                          </td>
                          <td><input type="text" name="upsee_score" class="form-control" id="upsee_score" placeholder="" >
                          </td>
						  <td><input type="text" name="upsee_percentile" class="form-control" id="upsee_percentile" placeholder="" >
						    </td>
						  </tr>
						<tr>
                          <td>CMAT</td>
						  <td><input type="text" name="cmat_date" class="form-control" id="cmat_date" placeholder="" pattern="^[A-Za-z -]+$">
                          </td>
                          <td><input type="text" name="cmat_roll" class="form-control" id="cmat_roll" placeholder="" >
                          </td>
                          <td><input type="text" name="cmat_score" class="form-control" id="cmat_score" placeholder="" >
                          </td>
						  <td><input type="text" name="cmat_percentile" class="form-control" id="cmat_percentile" placeholder="" >
						    </td>
						  </tr>
						<tr>
                          <td>MAT</td>
						  <td><input type="text" name="mat_date" class="form-control" id="mat_date" placeholder="">
                          </td>
                          <td><input type="text" name="mat_roll" class="form-control" id="mat_roll" placeholder="" >
                          </td>
                          <td><input type="text" name="mat_score" class="form-control" id="mat_score" placeholder="" >
                          </td>
						  <td><input type="text" name="mat_percentile" class="form-control" id="mat_percentile" placeholder="" >
						    </td>
						  </tr>
						<tr>
						  <td>CAT</td>
						  <td><input type="text" name="cat_date" class="form-control" id="cat_date" placeholder="">
                          </td>
                          <td><input type="text" name="cat_roll" class="form-control" id="cat_roll" placeholder="" >
                          </td>
                          <td><input type="text" name="cat_score" class="form-control" id="cat_score" placeholder="" >
                          </td>
						  <td><input type="text" name="cat_percentile" class="form-control" id="cat_percentile" placeholder="" >
						    </td>
						  </tr>
						<tr>
						  <td>XAT</td>
						  <td><input type="text" name="xat_date" class="form-control" id="xat_date" placeholder="">
                          </td>
                          <td><input type="text" name="xat_roll" class="form-control" id="xat_roll" placeholder="" >
                          </td>
                          <td><input type="text" name="xat_score" class="form-control" id="xat_score" placeholder="" >
                          </td>
						  <td><input type="text" name="xat_percentile" class="form-control" id="xat_percentile" placeholder="" >
						    </td>
						  </tr>
						<tr>
						  <td>ATMA</td>
						  <td><input type="text" name="atma_date" class="form-control" id="atma_date" placeholder="">
                          </td>
                          <td><input type="text" name="atma_roll" class="form-control" id="atma_roll" placeholder="" >
                          </td>
                          <td><input type="text" name="atma_score" class="form-control" id="atma_score" placeholder="" >
                          </td>
						  <td><input type="text" name="atma_percentile" class="form-control" id="atma_percentile" placeholder="" >
						    </td>
						  </tr>
						<tr>
                          <td>OTHERS (if any) </td>
						  <td><input type="text" name="others_date" class="form-control" id="others_date" placeholder="">
                          </td>
                          <td><input type="text" name="others_roll" class="form-control" id="others_roll" placeholder="" >
                          </td>
                          <td><input type="text" name="others_score" class="form-control" id="others_score" placeholder="" >
                          </td>
						  <td><input type="text" name="others_percentile" class="form-control" id="others_percentile" placeholder="" >
						    </td>
						  </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
                  <div class="heading heading-border heading-bottom-border">
                    <h4 style="font-weight:600; color:#000; text-transform:uppercase;" class="adm-form-heading">Work Experience (if any)</h4>
                  </div>
				  <div class="form-row">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Name of Organization</th>
                          <th>Designation</th>
                          <th>Period from  to</th>
						  <th>Experience in  year (s)</th>
						  <th>Emoluments  per annum  (in Rs. Lacs)</th>
						  </tr>
                      </thead>
                      <tbody>
                        <tr>
						  <td><input type="text" name="org1" class="form-control" id="org1" placeholder="">                          </td>
                          <td><input type="text" name="org1_desig" class="form-control" id="org1_desig" placeholder="" >                          </td>
                          <td><input type="text" name="org1_period" class="form-control" id="org1_period" placeholder="" >                          </td>
                          <td><input type="text" name="org1_exp" class="form-control" id="org1_exp" placeholder="" >                          </td>
						  <td><input type="text" name="org1_emoluments" class="form-control" id="org1_emoluments" placeholder="" >						    </td>
						  </tr>
						<tr>
						  <td><input type="text" name="org2" class="form-control" id="org2" placeholder="">                          </td>
                          <td><input type="text" name="org2_desig" class="form-control" id="org2_desig" placeholder="" >                          </td>
                          <td><input type="text" name="org2_period" class="form-control" id="org2_period" placeholder="" >                          </td>
                          <td><input type="text" name="org2_exp" class="form-control" id="org2_exp" placeholder="" >                          </td>
						  <td><input type="text" name="org2_emoluments" class="form-control" id="org2_emoluments" placeholder="" >						    </td>
						  </tr>
						<tr>
						  <td><input type="text" name="org3" class="form-control" id="org3" placeholder="">                          </td>
                          <td><input type="text" name="org3_desig" class="form-control" id="org3_desig" placeholder="" >                          </td>
                          <td><input type="text" name="org3_period" class="form-control" id="org3_period" placeholder="" >                          </td>
                          <td><input type="text" name="org3_exp" class="form-control" id="org3_exp" placeholder="" >                          </td>
						  <td><input type="text" name="org3_emoluments" class="form-control" id="org3_emoluments" placeholder="" >						    </td>
						  </tr>
						<tr>
						  <td colspan="3"><span style="font-size:14px; font-weight:400; text-transform:capitalize;">Total Experience (in Year)</span></td>
						  <td><input type="text" name="total_exp" class="form-control" id="total_exp" placeholder="" >	</td>
						  <td>&nbsp;</td>
						  </tr>
                      </tbody>
                    </table>
					<div class="heading heading-border heading-bottom-border">
                    <h4 style="font-weight:600; color:#000; text-transform:uppercase;" class="adm-form-heading">Academic/ Professional Awards/Medals/Prize/Scholarships/Certificates/Honours, etc. (Excluding those for extra-curricular activities)</h4>
                  </div>                    
                    </div>
                </div>
                <div class="form-row">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Name of Award</th>
                          <th>Awarding Institution</th>
                          <th>Level (State/National)</th>
						  <th>Basis of Awards</th>
						  <th>Year  </th>
						  </tr>
                      </thead>
                      <tbody>
                        <tr>
						  <td><input type="text" name="award1_name" class="form-control" id="award1_name" placeholder="">
                          </td>
                          <td><input type="text" name="award1_institution" class="form-control" id="award1_institution" placeholder="" >
                          </td>
                          <td><input type="text" name="award1_level" class="form-control" id="award1_level" placeholder="" >
                          </td>
                          <td><input type="text" name="award1_basis" class="form-control" id="award1_basis" placeholder="" >
                          </td>
						  <td><input type="text" name="award1_year" class="form-control" id="award1_year" placeholder="" >
						    </td>
						  </tr>
						<tr>
						  <td><input type="text" name="award2_name" class="form-control" id="award2_name" placeholder="">
                          </td>
                          <td><input type="text" name="award2_institution" class="form-control" id="award2_institution" placeholder="" >
                          </td>
                          <td><input type="text" name="award2_level" class="form-control" id="award2_level" placeholder="" >
                          </td>
                          <td><input type="text" name="award2_basis" class="form-control" id="award2_basis" placeholder="" >
                          </td>
						  <td><input type="text" name="award2_year" class="form-control" id="award2_year" placeholder="" >
						    </td>
						  </tr>
						<tr>
						  <td><input type="text" name="award3_name" class="form-control" id="award3_name" placeholder="">
                          </td>
                          <td><input type="text" name="award3_institution" class="form-control" id="award3_institution" placeholder="" >
                          </td>
                          <td><input type="text" name="award3_level" class="form-control" id="award3_level" placeholder="" >
                          </td>
                          <td><input type="text" name="award3_basis" class="form-control" id="award3_basis" placeholder="" >
                          </td>
						  <td><input type="text" name="award3_year" class="form-control" id="award3_year" placeholder="" >
						    </td>
						  </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
<!--                <div class="heading heading-border heading-bottom-border">
                    <h4 style="font-weight:600; color:#000; text-transform:uppercase;" class="adm-form-heading">Major Extra-Curricular Activities/Hobbies</h4>
                  </div>
                <div class="form-row">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Activity</th>
                          <th>Role</th>
                          <th>Level (State/National)</th>
						  <th>Year</th>
						  <th>Honors (if Any)</th>
						  </tr>
                      </thead>
                      <tbody>
                        <tr>
						  <td><input type="text" name="activity1_name" class="form-control" id="activity1_name" placeholder="">
                          </td>
                          <td><input type="text" name="activity1_role" class="form-control" id="activity1_role" placeholder="" >
                          </td>
                          <td><input type="text" name="activity1_level" class="form-control" id="activity1_level" placeholder="" >
                          </td>
                          <td><input type="text" name="activity1_year" class="form-control" id="activity1_year" placeholder="" >
                          </td>
						  <td><input type="text" name="activity1_honors" class="form-control" id="activity1_honors" placeholder="" >
						    </td>
						  </tr>
						<tr>
						  <td><input type="text" name="activity2_name" class="form-control" id="activity2_name" placeholder="">
                          </td>
                          <td><input type="text" name="activity2_role" class="form-control" id="activity2_role" placeholder="" >
                          </td>
                          <td><input type="text" name="activity2_level" class="form-control" id="activity2_level" placeholder="" >
                          </td>
                          <td><input type="text" name="activity2_year" class="form-control" id="activity2_year" placeholder="" >
                          </td>
						  <td><input type="text" name="activity2_honors" class="form-control" id="activity2_honors" placeholder="" >
						    </td>
						  </tr>
						<tr>
						  <td><input type="text" name="activity3_name" class="form-control" id="activity3_name" placeholder="">
                          </td>
                          <td><input type="text" name="activity3_role" class="form-control" id="activity3_role" placeholder="" >
                          </td>
                          <td><input type="text" name="activity3_level" class="form-control" id="activity3_level" placeholder="" >
                          </td>
                          <td><input type="text" name="activity3_year" class="form-control" id="activity3_year" placeholder="" >
                          </td>
						  <td><input type="text" name="activity3_honors" class="form-control" id="activity3_honors" placeholder="" >
						    </td>
						  </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
-->                  
                 
				  <div class="form-row">
                    <div class="form-group col-lg-12 text-center">
                      <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg mb-0" >
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'includes/footer.php';?>

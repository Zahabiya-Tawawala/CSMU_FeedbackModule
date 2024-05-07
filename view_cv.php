<html>

	<head>
		
		<meta http-equiv="refresh" content="300; url="<?php echo $_SERVER['PHP_SELF']; ?>">
		<?php include 'includes/header.php';?>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>Recruitment on various posts at csmu mumbai</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
		<script>
			function hidetextbox()
			{
				
				document.getElementById('otherdomain').style.display = 'none'
			}
			function validateForm() {
				let x = document.forms["frmcareer"]["fname"].value;
				if (x == "") {
					alert("Name must be filled out");
					return false;
				}
			}

			function load_position()
			{
				const arrteach=["Select one", "Commerce", "Management", "Hotel Management", "Engineering", "Science", "Law", "Pharmacy", "Nursing", "Journalism and Mass Comm.", "Design", "Fine Arts", "Film and Anim.", "Social Work", "Library Sc.", "Humanities", "Yoga"];
				const arrnonteach=["Select one", "Clerk", "System Admin", "IT Assistant", "Hardware and Network Engineer", "Computer Operator", "Lab. Technician", "Admission Manager", "Admission Councellor", "Tele-Caller", "Receptionist", "Accounts Manager", "Accountant", "Hostel Warden M/F"];
				const arradmin=["Select one", "Registrar", "Dy. Registrar", "Asst. Registrar", "COE", "Dy. COE", "Asst. COE", "HR Manager", "TPO"];
				let x = document.forms["frmcareer"]["ddlpositiontype"].value;
				const arrpos=["Professor","Asso. Professor","Assi. Professor"];
				if(x=="Teaching")
				{
					var select = document.getElementById("ddlposition");
					select.options.length = 0;
					for(index in arrteach) 
					{
						select.options[select.options.length] = new Option(arrteach[index], arrteach[index]);
					}
					
					var select = document.getElementById("ddlteachtype");
					select.options.length = 0;
					for(index in arrpos) 
					{
						select.options[select.options.length] = new Option(arrpos[index], arrpos[index]);
					}
				}
				else if(x=="Non-Teaching")
				{
					var select = document.getElementById("ddlteachtype");
					select.options.length = 0;
					for(index in arrnonteach) 
					{
						select.options[select.options.length] = new Option(arrnonteach[index], arrnonteach[index]);
					}
					var select = document.getElementById("ddlposition");
					select.options.length = 0;
					select.options[select.options.length] = new Option(arrnonteach[0], arrnonteach[0]);
					select.selectedIndex=0;
				}
				else if(x=="Admin")
				{
					var select = document.getElementById("ddlteachtype");
					select.options.length = 0;
					for(index in arradmin) 
					{
						select.options[select.options.length] = new Option(arradmin[index], arradmin[index]);
					}
					var select = document.getElementById("ddlposition");
					select.options.length = 0;
					select.options[select.options.length] = new Option(arrnonteach[0], arrnonteach[0]);
					select.selectedIndex=0;
				}
			}

			function load_domain()
			{
				const arr1=["Marketing", "Finance","HR", "Accounting", "IT", "Other"];
				const arr2=["CSE", "IT", "Civil Engineering", "Architecture", "Mechanical Engineering", "Electrical Engineering", "Electronic Engineering", "Biotechnology", "Other"];
				const arr3=["Biotechnology", "Bioinformatics", "Microbiology", "Biochemistry", "Environmental Sc.", "Zoology", "Botany", "Mathematics", "Statistics", "Chemistry", "Physics", "Geology", "Other"];
				const arr4=["Fashion", "Interior", "Textile", "Graphics", "Other"];
				const arr5=["English", "Hindi", "Marathi", "Psychology", "Geography", "History", "Economics", "Political Science", "Public Administration", "Education", "Other"];
				const arr6=["Civil", "Mechanical", "CSE", "Electronic Engineering", "Biotech", "Chemistry", "Physics", "Nursing", "Fashion", "Textile", "Interior Design", "Other"];
				
				let x = document.forms["frmcareer"]["ddlposition"].value;
				let y = document.forms["frmcareer"]["ddlpositiontype"].value;
				let z = document.forms["frmcareer"]["ddlteachtype"].value;

				if(x=="Management" && y=="Teaching")
				{
					var select = document.getElementById("ddldomain");
					select.options.length = 0;
					for(index in arr1) 
					{
						select.options[select.options.length] = new Option(arr1[index], arr1[index]);
					}
				}
				else if(x=="Engineering" && y=="Teaching")
				{
					var select = document.getElementById("ddldomain");
					select.options.length = 0;
					for(index in arr2) 
					{
						select.options[select.options.length] = new Option(arr2[index], arr2[index]);
					}
				}
				else if(x=="Science" && y=="Teaching")
				{
					var select = document.getElementById("ddldomain");
					select.options.length = 0;
					for(index in arr3) 
					{
						select.options[select.options.length] = new Option(arr3[index], arr3[index]);
					}
				}
				else if(x=="Design" && y=="Teaching")
				{
					var select = document.getElementById("ddldomain");
					select.options.length = 0;
					for(index in arr4) 
					{
						select.options[select.options.length] = new Option(arr4[index], arr4[index]);
					}
				}
				else if(x=="Humanities" && y=="Teaching")
				{
					var select = document.getElementById("ddldomain");
					select.options.length = 0;
					for(index in arr5) 
					{
						select.options[select.options.length] = new Option(arr5[index], arr5[index]);
					}
				}
				else if(z=="Lab. Technician" && y=="Non-Teaching")
				{
					var select = document.getElementById("ddldomain");
					select.options.length = 0;
					for(index in arr6) 
					{
						select.options[select.options.length] = new Option(arr6[index], arr6[index]);
					}
				}
				else
				{
					var select = document.getElementById("ddldomain");
					select.options.length = 0;
					const arrteach=["Select one"];
					select.options[select.options.length] = new Option(arrteach[0], arrteach[0]);
					select.selectedIndex=0;
				}
			}

			function showtextbox()
			{
				let x = document.forms["frmcareer"]["ddlpositiontype"].value;
				let y = document.forms["frmcareer"]["ddlposition"].value;
				let z = document.forms["frmcareer"]["ddldomain"].value;
				
				if (z == "Other") 
				{
					document.getElementById('otherdomain').style.display = 'block'
				}
				else 
				{
					document.getElementById('otherdomain').style.display = 'none'
				}
			}
		</script>
	</head>
  
	
	<div class="container" style="font-family:'Times New Roman';">
		<form name="frmcareer" method="post" action="view_cv.php">
			<div class="row">
				<div class="col-12 col-md-2">
					<div class="form-group">
						<label for="ddlpositiontype" class="font-weight-bold">Position Type <span style="color:red;">*</span></label>
						<?php
							if(isset($_POST["ddlpositiontype"]))
							{
								$postype=array("Teaching","Non-Teaching","Admin");
						?>
						<select class="form-control" name="ddlpositiontype" id="ddlpositiontype" onChange="load_position();">
						<?php
							echo "<option value='Teaching'>Select one</option>";
							foreach($postype as $item){
								if($_POST["ddlpositiontype"]===$item)
									echo "<option value='strtolower($item)' selected>$item</option>";
								else
									echo "<option value='strtolower($item)'>$item</option>";
							}
						?>
						</select>
						<?php
							}
							else
							{
						?>
						<select class="form-control" name="ddlpositiontype" id="ddlpositiontype" onChange="load_position();">
							<option value="Teaching">Select One</option>
							<option value="Teaching">Teaching</option>
							<option value="Non-Teaching">Non-Teaching</option>
							<option value="Admin">Admin</option>
						</select>
						<?php
							}
						?>
					</div>
				</div>
				<div class="col-12 col-md-2">
					<div class="form-group">
						<label for="ddlteachtype" class="font-weight-bold">Position <span style="color:red;">*</span></label>
						<?php
							if(isset($_POST["ddlteachtype"]))
							{
								$teachtype=array("Professor","Asso. Professor","Assi. Professor");
						?>
						<select class="form-control" id="ddlteachtype" name="ddlteachtype" onChange="load_domain();">
						<?php
							foreach($teachtype as $item){
								if($_POST["ddlteachtype"]===$item)
									echo "<option value='strtolower($item)' selected>$item</option>";
								else
									echo "<option value='strtolower($item)'>$item</option>";
							}
						?>
						</select>
						<?php
							}
							else
							{
						?>
						<select class="form-control" id="ddlteachtype" name="ddlteachtype" onChange="load_domain();">
						</select>
						<?php
							}
						?>
					</div>
				</div>
				<div class="col-12 col-md-2">
					<div class="form-group">
						<label for="ddlposition" class="font-weight-bold">Descipline</label>
						<select class="form-control" id="ddlposition" name="ddlposition" onChange="load_domain();">
						</select>
					</div>
				</div>
				<div class="col-12 col-md-3">
					<div class="form-group">
						<label for="ddldomain" class="font-weight-bold">Specialization</label>
						<select class="form-control" id="ddldomain" name="ddldomain">
						</select>
					</div>
				</div>
				<div class="offset-8 offset-md-0 col-12 col-md-2 text-right align-bottom pt-md-5">
					<input type="submit" name="submit" text="Submit" class="btn-primary">
				</div>
			</div>
		</form>
		<?php
			$servername = "localhost";
			$username = "csmuacin_csmuadmin";
			$password = "CSMU@dbadmin";
			$dbname = "csmuacin_websitedb";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			$conn1 = new mysqli($servername, $username, $password, $dbname);

			if ($conn1->connect_error) {
				die("Connection failed: " . $conn1->connect_error);
			}
			if (isset($_POST['submit'])) 
			{
				$ptype=$_POST["ddlpositiontype"];
				$position="";
				if($ptype=="Teaching")
				{
					$position=$_POST["ddlposition"];
				}
				else
				{
					$position=$_POST["ddlteachtype"];
				}
				$dom=$_POST["ddldomain"];
				$sql = "SELECT count(*) as cnt FROM career_personalinfo";
				if($position!="Select one" and $position!="")
					$sql =$sql . " where position_typ='". $ptype ."' and position='" . $position . "' and domain_name='$dom'";
			}
			else
			{
				$sql = "SELECT count(*) as cnt FROM career_personalinfo";
			}
			$result1 = $conn1->query($sql);
			//$result1=mysqli_query($conn1,$sql);
			$row1=$result1->fetch_assoc();
			$count = $row1['cnt'];
			$conn1->close(); 
			echo $count." Applications recieved.";
			$sql ="";

			/*$setcnt=intdiv($count , 100);
			$rem=$count % 100;
			if($rem>0)
			{
				$setcnt++;
			}
			echo "<table align='right'> <tr><td>";
			for ($x = 1; $x <= $setcnt; $x++) {
				echo "<a href='view_cv.php?setno=".$x."' style='text-decoration:underline;'>".$x."</a> &nbsp;";
			}
			echo "</td></tr></table> ";
			
			$endno=0;
			if(isset($_GET["setno"]))
			{
				$endno=100*((int)$_GET["setno"]-1);
			}*/

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			
			if (isset($_POST['submit'])) 
			{
				$ptype=$_POST["ddlpositiontype"];
				$position="";
				if($ptype=="Teaching")
				{
					$position=$_POST["ddlposition"];
				}
				else
				{
					$position=$_POST["ddlteachtype"];
				}
				$dom=$_POST["ddldomain"];
				if($dom==="Select one")
					$dom="";
				//$sql = "SELECT ROW_NUMBER() Over (Order by career_id) as srno, career_personalinfo.career_id, position_typ, position, domain_name, nature_job, fname, mname, lname, prof_type, career_other.path_resume FROM career_personalinfo left join career_other on career_personalinfo.career_id=career_other.career_id";
				$sql="SELECT career_personalinfo.career_id, position_typ, position, domain_name, nature_job, fname, mname, lname, prof_type, career_other.path_resume, career_other.path_photo FROM career_personalinfo left join career_other on career_personalinfo.career_id=career_other.career_id";
				if($position!="Select one" and $position!="")
					$sql =$sql . " where career_personalinfo.position_typ='". $ptype ."' and career_personalinfo.position='" . $position . "' and career_personalinfo.domain_name='$dom'";
				
				$sql=$sql." order by career_personalinfo.career_id desc"; //LIMIT ".$endno.", 100

			}
			else
			{
				//$sql = "SELECT ROW_NUMBER() Over (Order by career_id) as srno, career_personalinfo.career_id, position_typ, position, domain_name, nature_job, fname, mname, lname, prof_type, career_other.path_resume FROM career_personalinfo left join career_other on career_personalinfo.career_id=career_other.career_id order by career_personalinfo.career_id desc LIMIT ".$endno.", 100";
				$sql="SELECT career_personalinfo.career_id, position_typ, position, domain_name, nature_job, fname, mname, lname, prof_type, career_other.path_resume, career_other.path_photo FROM career_personalinfo left join career_other on career_personalinfo.career_id=career_other.career_id order by career_personalinfo.career_id desc";// LIMIT ".$endno.", 100
			}
			$result = $conn->query($sql);
			$conn->close(); 
			//echo("<br/>".$sql);
			echo "<table border='1' width='95%' align='center'>";
			echo "<tr>";
				echo "<th>Sr. No.</th>";
				echo "<th>Position Type</th>";
				echo "<th>Position</th>";
				echo "<th>Descipline</th>";
				echo "<th>Specialization</th>";
				echo "<th>Name</th>";
				echo "<th> </th>";
				echo "<th> </th>";
			echo "</tr>";
			$srno=0;
			while($row=$result->fetch_assoc())
			{
				$srno=$srno+1;
			  echo "<tr>";
				//echo "<td>".$row['srno']."</td>";
				echo "<td>".$srno."</td>";
				echo "<td>".$row['position_typ']."</td>";
				if($row['position_typ']=="Teaching")
				{
					echo "<td>".$row['prof_type']."</td>";
					echo "<td>".$row['position']."</td>";
				}
				else
				{
					echo "<td>".$row['position']."</td>";
					echo "<td> </td>";
				}
				if($row['domain_name']!="Select one")
					echo "<td>".$row['domain_name']."</td>";
				else
				echo "<td> </td>";
				echo "<td>".$row['fname']."  ".$row['lname']."  ".$row['mname']."</td>";
				echo "<td><a href='https://www.csmu.ac.in/print_cv.php?cid=".$row['career_id']."' class='btn btn-sm btn-primary' target='_blank'>Print Application</a></td>";
				echo "<td>";
				if(file_exists($row['path_resume'])==1)
				{
					$ext=substr($row['path_resume'],strlen($row['path_resume'])-4);
					if($ext==".doc" || $ext==".docx" || $ext==".pdf")
					{
						echo "<a href='".$row['path_resume']."' class='btn btn-sm btn-primary' target='_blank'>Print CV</a>";
					}
					else
					{
						if(file_exists($row['path_photo'])==1)
						{
							echo "<a href='".$row['path_photo']."' class='btn btn-sm btn-primary' target='_blank'>Print CV</a>";
						}
					}
				}
				else
				{
					echo "CV not Uploaded";
				}
				echo "</td>";
			  echo "</tr>";
			}
			echo "</table>";
		?>
	</div>
<!--<section class="page-header">

	<div class="container">

	  <div class="row">

		<div class="col">

		  <ul class="breadcrumb">

			<li><a href="index.php">Home</a></li>

			<li class="active">Career</li>

		  </ul>
		</div>
	  </div>
	  <div class="row">
		<div class="col">
		  <h1>Career</h1>
		</div>
	  </div>
	</div>
  </section>
  <div class="container">
	<div class="row">
		<div class="col-md-10" style="padding: 15px 0 0 50px;">
			
			<ol>
				<h2>Faculty Requirement (Urgent)</h2>
				<li>Management -2 PhD  (1 Accountancy, 1 Marketing)</li>
				<li>Law- 1LLM ( Marathi medium)</li>
				<li>Psycology-1</li>
				<li>Social Works-1(MSW or equivalent)</li>
				<li>Animation & VFx-1 (MVA/MFA in Animation or any master degree in animation)</li>
				<li>Library Science-1(PhD) </li>
				<li>Statistics / Mathematics with statistics -1</li>
				<li>Chemistry -2( Organic chemistry -1, Analytical -1)</li>
				<li>Civil Engg -1(M.Tech)</li>
				<li>Assistant Registrar -1</li>
				<li>Computer operator -1 </li>
			</ol>
			
			
			<h3><span class="blink_me" style="color: #ff0000; text-align: centre"><strong> </strong></span>Urgent Requirement of Faculty and Non-teaching positions</h3><div class="w3-container">
					
			<ul>
			
				<li style="font-weight: 400;">Assistant Professor in Pharmacy with Specializations:Pharmaceutical Chemistry, Pharmacognosy, Pharmacology</li>
				<li style="font-weight: 400;">Assistant Professor/ Associate Professor in Computer Science and Engineering</li>
				<li style="font-weight: 400;">Assistant Professor/ Associate Professor in Management (Finance/ IT)</li>
				<li style="font-weight: 400;">Deputy Registrar/Assistant Registrar (Academics, Administration, Establishment/ Human Resources) </li>
				<p style="font-weight: 800;"><i>Interested candidates please send cv/resume to <u><a href="mailto:career@csmu.ac.in">career@csmu.ac.in</a></u> on or before 5th March 2022</i></p>
				
				<hr style="width:50%;text-align:left;margin-left:0">


				<h2 style="font-weight: 400;">Chhatrapati Shivaji Maharaj University invites application in the following positions:</h2>
			<ol>
			<li style="font-weight: 800;font-size: 20px;">Professor/ Associate Professor/ Assistant Professor</li>
			</ol>
			<ul>
				<li style="font-weight: 400;">Computer Science and Engineering</li>
				<li style="font-weight: 400;">Pharmacy</li>
				<li style="font-weight: 400;">Management (Finance/ IT)</li>
				<li style="font-weight: 400;">Law</li>
				<li style="font-weight: 400;">Bioinformatics/ Biotechnology</li>
				<li style="font-weight: 400;">Mathematics</li>
				<li style="font-weight: 400;">Environmental Science</li>
				<li style="font-weight: 400;">Humanities and Social Work</li>

			</ul>
			<ol start="2">
				<li style="font-weight: 800;font-size: 20px;">Non-Teaching Positions:</li>
			</ol>
			<ul>
				<li style="font-weight: 400;">Assistant Registrar</li>
				<li style="font-weight: 400;">Computer Operator (Drafting skill in English, Marathi)</li>
				<li style="font-weight: 400;"> System Admin (ERP and Website)</li>
				<li style="font-weight: 400;">IT Engineer (Network and Hardware)</li>
			</ul>
			<!--
			<img src="https://csmu.ac.in/images/CSMU%20Career.jpg" width="90%"> 
			<p style="font-weight: 400;">Qualifications: As per the norms and standards of the UGC/ AICTE/ BCI/PCI etc.&nbsp;</p>
			<p style="font-weight: 800;"><i>Interested candidates may send cv/resume to <u><a href="mailto:career@csmu.ac.in">career@csmu.ac.in</a></u></i></p>
			<p style="font-weight: 800;"><i> LAST DATE OF APPLICATION: 02 APRIL 2022</i></p>
		</div>
	</div>
	
	
  </div>
  
  .blink_me {
  animation: blinker 1s linear infinite;
}

@keyframes blinker {  
  50% { opacity: 0; }
}-->
  <?php include 'includes/footer.php';?>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- Bootstrap Datepicker JS -->
	<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	<!-- Page Script -->
	<script src="js/scripts.js"></script>

  </html>
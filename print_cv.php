<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Chhatrapati Shivaji Maharaj University - Print CV</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet"/>

    <link href="CSS/printcss.css" rel="stylesheet" />
    <style type="text/css">
        .fontbold {
            font-weight: bold;
            font-family: 'Times New Roman';
        }
        #page-wrap {
            width: 700px;
            margin: auto;
        }
	table tr th{
		padding:2px;
		text-align:left;
	}
	table tr td{
		padding:2px;
		text-align:left;
	}
    </style>
</head>
<body>
    <form id="form1" runat="server">
    <div id="dropHere">
        <div id="page-wrap" class="sheet padding-10mm" style="padding:10px 10px 10px 30px;">
            <div class="div1 text-center">
                <h1 id="head1">Chhatrapati Shivaji Maharaj University
			<?php
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

				$sql = "SELECT * FROM career_personalinfo where career_id='" . $_GET['cid'] . "'";
				$result = $conn->query($sql);
				$conn->close(); 
				$row=$result->fetch_assoc();
				$conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn->connect_error) {
  					die("Connection failed: " . $conn->connect_error);
				}

				$sql = "SELECT * FROM career_other where career_id='" . $_GET['cid'] . "'";
				$result = $conn->query($sql);
				$conn->close(); 
				$row=$result->fetch_assoc();
			?>
			</h1>
			

            <div class="div2">
			<h2 id="head3">Curriculum Vitae </h2>
			</div>
			<?php
				if(file_exists($row['path_photo'])==1)
				{
					$ext=substr($row['path_photo'],strlen($row['path_photo'])-4);
					if($ext==".png" || $ext==".jpg" || $ext==".jpeg")
					{
			?>
			<div style="position: absolute; top: 80px;right: 20px;">
			<img src="<?php echo($row['path_photo']);?>" width="100px"  style="vertical-align: text-top;" />
			</div>
			<?php
					}
					else
					{
						if(file_exists($row['path_resume'])==1)
						{
			?>
			<div style="position: absolute; top: 80px;right: 20px;">
			<img src="<?php echo($row['path_resume']);?>" width="100px"  style="vertical-align: text-top;" />
			</div>
			<?php
						}
					}
				}
				$conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn->connect_error) {
  					die("Connection failed: " . $conn->connect_error);
				}

				$sql = "SELECT * FROM career_personalinfo where career_id='" . $_GET['cid'] . "'";
				$result = $conn->query($sql);
				$conn->close(); 
				$row=$result->fetch_assoc();
			?>
	<h3 id="head3">Personal Information</h3>
	<table width="80%" border='0' cellspacing='0' cellpadding='0' style="">
		<tr>
			<th align='left' valign='top' >
				Position Type
			</th>
			<td align='left' valign='top' >
				<?php echo ($row['position_typ']); ?>
			</td>
			<th align='left' valign='top' >
				Position
			</th>
			<td align='left' valign='top' >
				<?php echo ($row['position']); ?>
			</td>
		</tr>
		<tr>
			<th align='left' valign='top' >
				Specialization
			</th>
			<td align='left' valign='top' >
				<?php echo ($row['domain_name']); ?>
			</td>
			<th align='left' valign='top' >
				Nature of Job
			</th>
			<td align='left' valign='top' >
				<?php echo ($row['nature_job']); ?>
			</td>
		</tr>
		<tr>
			<th align='left' valign='top' >
				Name
			</th>
			<td align='left' valign='top'  colspan='3'>
				<?php echo ($row['fname'] . " " . $row['lname'] . " " . $row['mname']); ?>
			</td>
		</tr>
		<tr>
			<th align='left' valign='top' >
				Date of Birth
			</th>
			<td align='left' valign='top' >
				<?php echo ($row['dob']); ?>
			</td>
			<th align='left' valign='top' >
				Gender
			</th>
			<td align='left' valign='top' >
				<?php echo ($row['gender']); ?>
			</td>
		</tr>
	</table
	<table width="100%" border='0' cellspacing='0' cellpadding='0' style="border-bottom:solid 2px #000;">
		<tr>
			<td colspan='4'>
				<table width='100%'>
					<tr>
						<th>Category</th>
						<td>
				<?php echo ($row['category']); ?></td>
						<th>Minority</th>
						<td>
				<?php echo ($row['minority']); ?></td>
						<th>Divyang</th>
						<td>
				<?php echo ($row['divyang']); ?></td>
					</tr>
					<tr>
						<th>Domicile State</th>
						<td>
				<?php echo ($row['domicile_sta']); ?></td>
						<th>Country of residence</th>
						<td>
				<?php echo ($row['ctry_resi']); ?></td>
						<th>Country of birth</th>
						<td>
				<?php echo ($row['ctry_birth']); ?></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<h3 id="head3">Contact Information</h3>
	<table width="100%" border='0' cellspacing='0' cellpadding='0' style="border-bottom:solid 2px #000;">
		<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
  				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT * FROM career_contact where career_id='" . $_GET['cid'] . "'";
			$result = $conn->query($sql);
			$conn->close(); 
			$row=$result->fetch_assoc();
		?>
		<tr>
			<th align='left' valign='top' >
				Phone Number
			</th>
			<td align='left' valign='top' >
				<?php echo ($row['phone_num']); ?>
			</td>
			<th align='left' valign='top' >
				Email ID
			</th>
			<td align='left' valign='top' >
				<?php echo ($row['emailid']); ?>
			</td>
		</tr>
		<tr>
			<th align='left' valign='top' >
				Address
			</th>
			<td align='left' valign='top' colspan='3'>
				<?php echo ($row['address']); ?>
			</td>
		</tr>
	</table>
	<h3 id="head3">Educational Qualification</h3>
	<table width="100%" border='1' cellspacing='0' cellpadding='0' style="border-bottom:solid 2px #000;">
		<tr>
			<th align='left' valign='top' >
				Course
			</th>
			<th align='left' valign='top' >
				Specialization
			</th>
			<th align='left' valign='top' >
				Year of Passing
			</th>
			<th align='left' valign='top' >
				Board
			</th>
			<th align='left' valign='top' >
				Percentage / CGPA
			</th>
		</tr>
		<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
  				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT * FROM career_academic where career_id='" . $_GET['cid'] . "' order by year_passing";
			$result = $conn->query($sql);
			$conn->close(); 
			while($row=$result->fetch_assoc())
			{
		?>
		<tr>
			<td align='left' valign='top' >
				<?php echo ($row['acad_type']); ?>
			</td>
			<td align='left' valign='top' >
				<?php echo ($row['specialization']); ?>
			</td>
			<td align='left' valign='top' >
				<?php echo ($row['year_passing']); ?>
			</td>
			<td align='left' valign='top' >
				<?php echo ($row['board_edu']); ?>
			</td>
			<td align='left' valign='top' >
				<?php echo ($row['percg']); ?>
			</td>
		</tr>
		<?php
			}
		?>
	</table>
	<h3 id="head3">Qualified in</h3>
	<table width="100%" border='1' cellspacing='0' cellpadding='0' style="border-bottom:solid 2px #000;">
		<tr>
		<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
  				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT * FROM `carrer_qualification` WHERE year!='' and year!='No' and year!='NA' and year!='0' and year!='0000' and year!='Nill' and year!='-' and year!='Nil' and year!='N/A' and year!='00' and year!='N.A.' and career_id='" . $_GET['cid'] . "'";
			$result = $conn->query($sql);
			$conn->close(); 
			while($row=$result->fetch_assoc())
			{
		?>
			<th align='left' valign='top' >
				<?php echo ($row['qualif']); ?>
			</th>
			<td align='left' valign='top' >
				<?php echo ($row['year']); ?>
			</td>
		
		<?php
			}
		?>
		</tr>
	</table>
	<h3 id="head3">Experience</h3>
	<table width="100%" border='1' cellspacing='0' cellpadding='0' style="border-bottom:solid 2px #000;">
		<tr>
			<th align='left' valign='top' >
				Position Held
			</th>
			<th align='left' valign='top' >
				Nature of Work
			</th>
			<th align='left' valign='top' >
				University / College
			</th>
			<th align='left' valign='top' >
				From Date
			</th>
			<th align='left' valign='top' >
				To Date
			</th>
		</tr>
		<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
  				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT * FROM career_experience where career_id='" . $_GET['cid'] . "'";
			$result = $conn->query($sql);
			$conn->close(); 
			while($row=$result->fetch_assoc())
			{
		?>
		<tr>
			<td align='left' valign='top' >
				<?php echo ($row['position']); ?>
			</td>
			<td align='left' valign='top' >
				<?php echo ($row['nature_job']); ?>
			</td>
			<td align='left' valign='top' >
				<?php echo ($row['university']); ?>
			</td>
			<td align='left' valign='top' >
				<?php echo ($row['frm_dt']); ?>
			</td>
			<td align='left' valign='top' >
				<?php echo ($row['to_dt']); ?>
			</td>
		</tr>
		<?php
			}
		?>
	</table>
	<h3 id="head3">Research Work</h3>
	<table width="100%" border='1' cellspacing='0' cellpadding='0'>
		<tr>
			<th align='left' valign='top' >
				Total
			</th>
			<th align='left' valign='top' >
				As per UGC Care List
			</th>
			<th align='left' valign='top' >
				SCI
			</th>
			<th align='left' valign='top' >
				Web of Science
			</th>
			<th align='left' valign='top' >
				Google Scholar
			</th>
			<th align='left' valign='top' >
				Scopus
			</th>
		</tr>
		<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
  				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT * FROM career_research where career_id='" . $_GET['cid'] . "'";
			$result = $conn->query($sql);
			$conn->close(); 
			$row=$result->fetch_assoc();
		?>
		<tr>
			<td align='left' valign='top' >
				<?php echo ($row['totpublic']); ?>
			</td>
			<td align='left' valign='top' >
				<?php echo ($row['ugcpublic']); ?>
			</td>
			<td align='left' valign='top' >
				<?php echo ($row['scipublic']); ?>
			</td>
			<td align='left' valign='top' >
				<?php echo ($row['webpublic']); ?>
			</td>
			<td align='left' valign='top' >
				<?php echo ($row['googlepublic']); ?>
			</td>
			<td align='left' valign='top' >
				<?php echo ($row['scopuspublic']); ?>
			</td>
		</tr>
	</table><br/>
	<table width="100%" border='1' cellspacing='0' cellpadding='0' style="border-bottom:solid 2px #000;">
		<tr>
			<th align='left' valign='top' >
				Projects Completed
			</th>
			<th align='left' valign='top' >
				Projects Ongoing
			</th>
			<th align='left' valign='top' >
				Guidance Completed
			</th>
			<th align='left' valign='top' >
				Guidance Under Supervision
			</th>
		</tr>
		
		<tr>
			<td align='left' valign='top' >
				<?php echo ($row['projectcomp']); ?>
			</td>
			<td align='left' valign='top' >
				<?php echo ($row['projectongo']); ?>
			</td>
			<td align='left' valign='top' >
				<?php echo ($row['guidancecomp']); ?>
			</td>
			<td align='left' valign='top' >
				<?php echo ($row['guidanceongo']); ?>
			</td>
		</tr>
	</table>
	
	<h3 id="head3" style="padding-top:40px;">Acomplishments</h3>
	<table width="100%" border='1' cellspacing='0' cellpadding='0'>
		<tr>
			<th align='left' valign='top' >
				Books Published
			</th>
			<th align='left' valign='top' >
				Patents
			</th><th align='left' valign='top' >
				Consultancy Completed
			</th>
			<th align='left' valign='top' >
				Consultancy Ongoing
			</th>
		</tr>
		<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
  				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT * FROM career_accomplish where career_id='" . $_GET['cid'] . "'";
			$result = $conn->query($sql);
			$conn->close(); 
			$row=$result->fetch_assoc();
		?>
		<tr>
			<td align='left' valign='top' >
				<?php echo ($row['books']); ?>
			</td>
			<td align='left' valign='top' >
				<?php echo ($row['patent']); ?>
			</td>
			<td align='left' valign='top' >
				<?php echo ($row['consult_complete']); ?>
			</td>
			<td align='left' valign='top' >
				<?php echo ($row['consult_ongo']); ?>
			</td>
		</tr>
	</table>
	
	<h3 id="head3" style="">Other details</h3>
	<table width="100%" border='1' cellspacing='0' cellpadding='0'>
		<tr>
			<th align='left' valign='top' >
				Notice Period
			</th>
			<th align='left' valign='top' >
				Current Salary
			</th>
			<th align='left' valign='top' >
				Expected Salary
			</th>
		</tr>
		<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
  				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT * FROM career_other where career_id='" . $_GET['cid'] . "'";
			$result = $conn->query($sql);
			$conn->close(); 
			$row=$result->fetch_assoc();
		?>
		<tr>
			<td align='left' valign='top' >
				<?php echo ($row['notice_prd']); ?> Days
			</td>
			<td align='left' valign='top' >
				Rs. <?php echo ($row['present_sal']); ?>
			</td>
			<td align='left' valign='top' >
				Rs. <?php echo ($row['expsalary']); ?>
			</td>
		</tr>
	</table>
	
	<h3 id="head3" style="">Reference(s)</h3>
	<table width="100%" border='1' cellspacing='0' cellpadding='0'>
		<tr>
			<th align='left' valign='top' >
				Name
			</th>
			<th align='left' valign='top' >
				Phone Number
			</th>
			<th align='left' valign='top' >
				Address
			</th>
		</tr>
		<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
  				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT * FROM career_reference where career_id='" . $_GET['cid'] . "'";
			$result = $conn->query($sql);
			$conn->close(); 
			
			while($row=$result->fetch_assoc())
			{
		?>
		<tr>
			<td align='left' valign='top' >
				<?php echo ($row['ref_name']); ?>
			</td>
			<td align='left' valign='top' >
				<?php echo ($row['ref_phno']); ?>
			</td>
			<td align='left' valign='top' >
				<?php echo ($row['ref_addr']); ?>
			</td>
		</tr>
		<?php
			}
		?>
	</table>
        <br />
        <!--<div class="container row" style="padding-bottom: 20px;">
            <div class="col-10">&nbsp;</div>
            <div class="col-2">
                <input type="button" name="btnprint" value="Print" OnClick="return PrintPanel();" Width="100%" />
            </div>
        </div>-->
		</div>
	</div
    </form>

    <script type="text/javascript">
        function PrintPanel() {
            var panel = document.getElementById("<%=pnlContents.ClientID %>");
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write("<html><style type='text/css'> .fontbold { font-weight: bold; font-family: 'Times New Roman'; }");
            printWindow.document.write("#page-wrap {margin: 0 auto;}");
            printWindow.document.write("</style>");
            printWindow.document.write("<link href='css/bootstrap.min.css' rel='stylesheet'/><head>");
            printWindow.document.write("<link href='CSS/printcss.css' rel='stylesheet'/>");
            printWindow.document.write("</head><body class='A4' style='margin:auto;'>");
            printWindow.document.write(panel.innerHTML);;
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            setTimeout(function () {
                printWindow.print();
            }, 500);
            return false;
        }
    </script>

</body>
</html>

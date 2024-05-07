<?php include 'includes/header.php';?>
<script type="text/javascript">
function getProgram(param){
	/*
	
	var Bachelors= '<select name="course" class="course form-control" id="Bachelors"><option value="">Select Course</option> <option value="BCA">BCA</option><option value="B.Tech CS">B.Tech CS</option><option value="B.Tech Mechanical">B.Tech Mechanical</option><option value="B.Tech ECE">B.Tech ECE</option><option value="B.Tech Civil">B.Tech Civil</option><option value="B.Tech IT">B.Tech IT</option><option value="B.Tech Electrical">B.Tech Electrical</option><option value="BHM">BHM</option><option value="B.Sc. Hospitality">B.Sc. Hospitality</option><option value="B. Sc. Food production">B. Sc. Food production</option><option value="B. Sc. Beverage Services">B. Sc. Beverage Services</option><option value="BFA Animation-vfx">BFA Animation-vfx</option><option value="BFA Fashion designing">BFA Fashion designing</option><option value="BFA Interior Designing">BFA Interior Designing</option><option value="BFA Home Science">BFA Home Science</option><option value="BFA Film Technology">BFA Film Technology</option><option value="BSc Maths">BSc Maths</option><option value="BSc Bio">BSc Bio</option><option value="BA">BA</option><option value="B.Com">B.Com</option><option value="BSW">BSW</option><option value="BJMC">BJMC</option><option value="LLB">LLB</option><option value="B.A.LLB">B.A.LLB</option><option value="B.Arch">BBA.LLB</option><option value="BCA">B.Arch</option><option value="BCA">BCA</option><option value="BBA">BBA</option></select>';
															   
	var Masters= '<select name="course" class="course form-control" id="Masters" ><option value="">Select Course</option><option value="M.Pharma">M.Pharma</option><option value="MBA">MBA</option><option value="MCA">MCA</option><option value="M.Tech">M.Tech</option><option value="M.Sc Physics">M.Sc Physics</option><option value="M.Sc Chemistry">M.Sc Chemistry</option><option value="M.Sc Maths">M.Sc Maths</option><option value="M.Sc Botany">M.Sc Botany</option><option value="M.Sc Geology">M.Sc Geology</option><option value="M.Sc Zoology">M.Sc Zoology</option><option value="M.Sc Economics">M.Sc Economics</option><option value="M.Sc Geography">M.Sc Geography</option><option value="M.Sc Psychology">M.Sc Psychology</option><option value="M.Sc Statistics">M.Sc Statistics</option><option value="M.Sc Bio Technology">M.Sc Bio Technology</option><option value="M.Sc IT">M.Sc IT</option><option value="M.Sc Yoga">M.Sc Yoga</option><option value="MA Economics">MA Economics</option><option value="MA Psychology">MA Psychology</option><option value="MA Geography">MA Geography</option><option value="MA Sociology">MA Sociology</option><option value="MA History">MA History</option><option value="MA Public Administration">MA Public Administration</option><option value="MA Political Science">MA Political Science</option><option value="MA English">MA English</option><option value="Masters in Social Work">Masters in Social Work</option><option value="Masters in Journalism & Mass Communication">Masters in Journalism & Mass Communication</option><option value="LLM">LLM</option><option value="M.Com">M.Com</option>></select>';
															
	var Diploma= '<select name="course" class="course form-control" id="Diploma" ><option value="">Select Course</option><option value="Diploma in Pharmacy"> Diploma in Pharmacy</option><option value="Diploma in Cyber Law"> Diploma in Cyber Law</option><option value="Diploma in Taxation Law">Diploma in Taxation Law</option><option value="Diploma in Corporate Law">Diploma in Corporate Law</option><option value="Diploma in Fornsic Science Law">Diploma in Fornsic Science Law</option><option value="Diploma in Labour & Welfare Law">Diploma in Labour & Welfare Law</option><option value="Diploma in Business Law">Diploma in Business Law</option><option value="Diploma in IP Law">Diploma in IP Law</option><option value="Diploma in Criminology Law">Diploma in Criminology Law</option><option value="Diploma in Engg.">Diploma in Engg.</option><option value="Diploma in Animation-Vfx">Diploma in Animation-Vfx</option><option value="Diploma in Fashion designing">Diploma in Fashion designing</option><option value="Diploma in Interior Designing">Diploma in Interior Designing</option><option value="Diploma in Film Technology">Diploma in Film Technology</option><option value="Diploma in Home Science">Diploma in Home Science</option></select>';
	
	*/
	
	var Diploma='<select name="course" class="course form-control" id="Diploma" ><option value="">Select Course</option><option value="PHMD">Diploma in Pharmacy</option><option value="FDND">Diploma in Fashion Design</option><option value="TDND">Diploma in Textile Design</option><option value="IDND">Diploma in Interior Design</option><option value="GDND">Diploma in Graphic Design</option><option value="Diploma in Film Technology">Diploma in Film Technology</option><option value="ANID">Diploma in Animation and VFX</option><option value="HSCD">Diploma in Home Science</option><option value="HHOD">Diploma in Hotel Operations</option><option value="PMAD">Diploma in Performing Arts</option><option value="PGDM">PGDM (BA)</option><option value="PGDM">PGDM (HR)</option><option value="PGDM">PGDM (LSCM)</option><option value="PGDC">PGDCA</option></select>';
	
	var Bachelors = '<select name="course" class="course form-control" id="Bachelors"><option value="">Select Course</option> <option value="CIVB">BA</option><option value="ENGB">BA (H) English</option><option value="MARB">BA (H) Marathi</option><option value="HINB">BA (H) Hindi</option><option value="PSYB">BA (H) Psychology</option><option value="ECMB">BA (H) Economics</option><option value="HISB">BA (H) History</option><option value="POSB">BA (H) Political Science</option><option value="PADB">BA (H) Public Administration</option><option value="BA (H) Geography">BA (H) Geography </option><option value="JMCB">BJMC</option><option value="BMMB">BMM</option><option value="BFAB">B.F.A.</option><option value="FDNB">B. Des. (Fashion Design)</option><option value="TDNB">B. Des. (Textile Design)</option><option value="IDNB">B. Des. (Interior Design)</option><option value="GDNB">B. Des. (Graphic Design)</option><option value="FDEB">B. Sc. (Fashion Design)</option><option value="TDEB">B. Sc. (Textile Design)</option><option value="IDEB">B. Sc. (Interior Design)</option><option value="GDEB">B. Sc. (Graphic Design)</option><option value="FTEB">B.V.A. (Film Technology)</option><option value="ANIB">B.V.A. (Animation & VFX)</option><option value="YOGB">B.Sc. (Yoga)</option><option value="LSCB">B. Lib. ISc.</option><option value="BSWB">B.S.W.</option><option value="LLBB">LL.B.</option><option value="BALB">BA LL.B. (Hons.)</option><option value="BBLB">BBA LL.B.</option><option value="PHMB">B. Pharm.</option><option value="COMB">B. Com.</option><option value="BAFB">B. Com. (A&F)</option><option value="BBAB">BBA</option><option value="BMSB">BMS</option><option value="HHSB">B.Sc. (Hospitality Studies)</option><option value="BHMB">B.H.M.</option><option value="">B.Sc. (Science)</option><option value="PHYB">B.Sc. (H) Physics</option><option value="CHYB">B.Sc. (H) Chemistry</option><option value="MTHB">B.Sc. (H) Mathematics</option><option value="STAB">B.Sc. (H) Statistics</option><option value="GEOB">B.Sc. (H) Geology</option><option value="BOTB">B.Sc. (H) Botany</option><option value="ZOOB">B.Sc. (H) Zoology</option><option value="BTEB">B.Sc. (H) Biotechnology</option><option value="BCHB">B.Sc. (H) Biochemistry</option><option value="MCRB">B.Sc. (H) Microbiology</option><option value="BINB">B.Sc. (H) Bioinformatics</option><option value="CSAB">BCA</option><option value="ARCB">B. Arch.</option><option value="BSCS">B.Sc. CS</option><option value="BSIT">B.Sc. IT</option><option value="">B. Tech. CSE</option><option value="CSDB">B. Tech. CSE (Data Science)</option><option value="CSTB">B. Tech. CSE (IOT)</option><option value="CSIB">B. Tech. CSE (AI & ML)</option><option value="CIVB">B. Tech. Civil Engg</option><option value="MECB">B. Tech. Mech. Engg</option><option value="EETB">B. Tech. Electrical Engg</option><option value="ECEB">B. Tech. ECE</option><option value="MTRB">B. Tech. Mechatronics</option><option value="BTYB">B. Tech. Biotechnology</option></select>';
															   
	var Masters= '<select name="course" class="course form-control" id="Masters" ><option value="">Select Course</option><option value="PSYM">M.A. Psychology</option><option value="ECMM">M.A. Economics</option><option value="HISM">M.A. History</option><option value="ENGM">M.A. English</option><option value="HINM">M.A. Hindi</option><option value="MARM">M.A. Marathi</option><option value="SANM">M.A. Sanskrit</option><option value="POSM">M.A. Political Science</option><option value="PADM">M.A. Public Administration</option><option value="M.A. Education">M.A. Education</option><option value="">M.A. Geography</option><option value="YOGM">M.Sc. Yoga</option><option value="JMCM">MJMC</option><option value="LSCM">M. Lib. ISc.</option><option value="MSWM">M.S.W.</option><option value="MFAM">M.F.A.</option><option value="FTEM">M.V.A.</option><option value="FDNM">M. Des.</option><option value="LLTM">LL. M.</option><option value="M.Com.">M.Com.</option><option value="MBA">MBA</option><option value="MBA (Executive)">MBA (Executive)</option><option value="MHMM">M.H.M.</option><option value="MCAM">MCA</option><option value="MSCS">M.Sc. CS</option><option value="MSIT">M.Sc. IT</option><option value="CSEM">M. Tech. CSE</option><option value="ECEM">M. Tech. ECE</option><option value="CIVM">M. Tech. Civil Engg.</option><option value="EETM">M. Tech. EE</option><option value="BTYM">M. Tech. Biotech.</option><option value="PHYM">M.Sc. Physics</option><option value="CHYM">M.Sc. Chemistry</option><option value="CHMM">M.Sc. Medicinal Chemistry</option><option value="MTHM">M.Sc. Mathematics</option><option value="STAM">M.Sc. Statistics</option><option value="GEOM">M.Sc. Geology</option><option value="BOTM">M.Sc. Botany</option><option value="ZOOM">M.Sc. Zoology</option><option value="BTEM">M.Sc. Biotechnology</option><option value="BINM">M.Sc. Bioinformatics</option><option value="BCHM">M.Sc. Biochemistry</option><option value="MCRM">M.Sc. Microbiology</option><option value="EVSM">M.Sc. Environmental Science</option></select>';
	
	
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
function submitData(){
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
	

$.ajax(settings).done(function (response) {
  console.log(response);
});
}
</script>
				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li class="active">Apply Now</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h1>Apply Now</h1>
							</div>
						</div>
					</div>

				</section>

					<div class="container">
                    	<div class="row">
                            <div class="col">
                                <div class="featured-boxes">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
											<?php if(isset($_REQUEST['status']) && $_REQUEST['status'] == 0) {echo "<h4 style='color:red'>Please try again.</h4>";}?>
											<?php if(isset($_REQUEST['status']) && $_REQUEST['status'] == 1) {echo "<h4 style='color:green'>Admission Enquiry is successfully done.</h4>";}?>
                                            <div class="featured-box featured-box-primary text-left mt-5">
                                                <div class="box-content">
                                                    <h2 class="text-center mb-3"><strong>Admission Enquiry</strong></h2>
                                                    
													<form action="send_api.php" method="post" >
                                                        <div class="row">
															<div class="col-6">
																<div class="form-row">
																	<div class="form-group col">
																		<label><strong>Full Name *</strong></label>
																		<input type="text" id="name" name="name" value="" class="form-control form-control-lg" required>
																	</div>
																</div>
															</div>
															<div class="col-6">
																<div class="form-row">
																	<div class="form-group col">
																		<label><strong>Email *</strong></label>
																		<input type="email" id="email" name="email" value="" class="form-control form-control-lg" >
																	</div>
																</div>
															</div>
                                                        </div>
                                                        
														
														<div class="row">
															<div class="col-6">
																<div class="form-row">
																	<div class="form-group col">
																		<label><strong>Select Programme Type</strong></label>
																		<select name="programme" class="form-control" id="programme" required onChange="getProgram(this.value)">
																		  <option value=""> -Select one-</option>
																		  <option value="Bachelors">Bachelors</option>
																		  <option value="Masters">Masters</option>
																		  <option value="Diploma">Diploma</option>
																		</select>
																	</div>
																</div>
															</div>
															<div class="col-6">
																<div class="form-row">
																	<div class="form-group col">
																	  <label><strong>Programme / Branch *</strong></label>
																	   <div id="courseDiv"></div>  
																	</div>
																</div>
															</div>														
														</div>
														
														
														
                                                        <div class="row">
															<div class="col-6">
																<div class="form-row">
																	<div class="form-group col">
																		<label><strong>State *</strong></label>
																		<input type="text" name="state" id="state" value="" class="form-control form-control-lg" required>
																	</div>
																</div>
															</div>															
															<div class="col-6">
																<div class="form-row">
																	<div class="form-group col">
																		<label><strong>City *</strong></label>
																		<input type="text" name="city" id="city" value="" class="form-control form-control-lg" required>
																	</div>
																</div>
															</div>
															
															
                                                        </div>
                                                        <div class="row">
															<div class="col-2">
																<div class="form-row">
																	<div class="form-group col">
																		<label><strong>Country Code*</strong></label>
																		<select name="countryCode" id="countryCode"  class="form-control">
																			<option data-countryCode="IN" value="91" selected>India (+91)</option>

																			<optgroup label="Other countries">
																				<option data-countryCode="DZ" value="213">Algeria (+213)</option>
																				<option data-countryCode="AD" value="376">Andorra (+376)</option>
																				<option data-countryCode="AO" value="244">Angola (+244)</option>
																				<option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
																				<option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
																				<option data-countryCode="AR" value="54">Argentina (+54)</option>
																				<option data-countryCode="AM" value="374">Armenia (+374)</option>
																				<option data-countryCode="AW" value="297">Aruba (+297)</option>
																				<option data-countryCode="AU" value="61">Australia (+61)</option>
																				<option data-countryCode="AT" value="43">Austria (+43)</option>
																				<option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
																				<option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
																				<option data-countryCode="BH" value="973">Bahrain (+973)</option>
																				<option data-countryCode="BD" value="880">Bangladesh (+880)</option>
																				<option data-countryCode="BB" value="1246">Barbados (+1246)</option>
																				<option data-countryCode="BY" value="375">Belarus (+375)</option>
																				<option data-countryCode="BE" value="32">Belgium (+32)</option>
																				<option data-countryCode="BZ" value="501">Belize (+501)</option>
																				<option data-countryCode="BJ" value="229">Benin (+229)</option>
																				<option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
																				<option data-countryCode="BT" value="975">Bhutan (+975)</option>
																				<option data-countryCode="BO" value="591">Bolivia (+591)</option>
																				<option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
																				<option data-countryCode="BW" value="267">Botswana (+267)</option>
																				<option data-countryCode="BR" value="55">Brazil (+55)</option>
																				<option data-countryCode="BN" value="673">Brunei (+673)</option>
																				<option data-countryCode="BG" value="359">Bulgaria (+359)</option>
																				<option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
																				<option data-countryCode="BI" value="257">Burundi (+257)</option>
																				<option data-countryCode="KH" value="855">Cambodia (+855)</option>
																				<option data-countryCode="CM" value="237">Cameroon (+237)</option>
																				<option data-countryCode="CA" value="1">Canada (+1)</option>
																				<option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
																				<option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
																				<option data-countryCode="CF" value="236">Central African Republic (+236)</option>
																				<option data-countryCode="CL" value="56">Chile (+56)</option>
																				<option data-countryCode="CN" value="86">China (+86)</option>
																				<option data-countryCode="CO" value="57">Colombia (+57)</option>
																				<option data-countryCode="KM" value="269">Comoros (+269)</option>
																				<option data-countryCode="CG" value="242">Congo (+242)</option>
																				<option data-countryCode="CK" value="682">Cook Islands (+682)</option>
																				<option data-countryCode="CR" value="506">Costa Rica (+506)</option>
																				<option data-countryCode="HR" value="385">Croatia (+385)</option>
																				<option data-countryCode="CU" value="53">Cuba (+53)</option>
																				<option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
																				<option data-countryCode="CY" value="357">Cyprus South (+357)</option>
																				<option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
																				<option data-countryCode="DK" value="45">Denmark (+45)</option>
																				<option data-countryCode="DJ" value="253">Djibouti (+253)</option>
																				<option data-countryCode="DM" value="1809">Dominica (+1809)</option>
																				<option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
																				<option data-countryCode="EC" value="593">Ecuador (+593)</option>
																				<option data-countryCode="EG" value="20">Egypt (+20)</option>
																				<option data-countryCode="SV" value="503">El Salvador (+503)</option>
																				<option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
																				<option data-countryCode="ER" value="291">Eritrea (+291)</option>
																				<option data-countryCode="EE" value="372">Estonia (+372)</option>
																				<option data-countryCode="ET" value="251">Ethiopia (+251)</option>
																				<option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
																				<option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
																				<option data-countryCode="FJ" value="679">Fiji (+679)</option>
																				<option data-countryCode="FI" value="358">Finland (+358)</option>
																				<option data-countryCode="FR" value="33">France (+33)</option>
																				<option data-countryCode="GF" value="594">French Guiana (+594)</option>
																				<option data-countryCode="PF" value="689">French Polynesia (+689)</option>
																				<option data-countryCode="GA" value="241">Gabon (+241)</option>
																				<option data-countryCode="GM" value="220">Gambia (+220)</option>
																				<option data-countryCode="GE" value="7880">Georgia (+7880)</option>
																				<option data-countryCode="DE" value="49">Germany (+49)</option>
																				<option data-countryCode="GH" value="233">Ghana (+233)</option>
																				<option data-countryCode="GI" value="350">Gibraltar (+350)</option>
																				<option data-countryCode="GR" value="30">Greece (+30)</option>
																				<option data-countryCode="GL" value="299">Greenland (+299)</option>
																				<option data-countryCode="GD" value="1473">Grenada (+1473)</option>
																				<option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
																				<option data-countryCode="GU" value="671">Guam (+671)</option>
																				<option data-countryCode="GT" value="502">Guatemala (+502)</option>
																				<option data-countryCode="GN" value="224">Guinea (+224)</option>
																				<option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
																				<option data-countryCode="GY" value="592">Guyana (+592)</option>
																				<option data-countryCode="HT" value="509">Haiti (+509)</option>
																				<option data-countryCode="HN" value="504">Honduras (+504)</option>
																				<option data-countryCode="HK" value="852">Hong Kong (+852)</option>
																				<option data-countryCode="HU" value="36">Hungary (+36)</option>
																				<option data-countryCode="IS" value="354">Iceland (+354)</option>
																		<!--		<option data-countryCode="IN" value="91">India (+91)</option>
																		-->		<option data-countryCode="ID" value="62">Indonesia (+62)</option>
																				<option data-countryCode="IR" value="98">Iran (+98)</option>
																				<option data-countryCode="IQ" value="964">Iraq (+964)</option>
																				<option data-countryCode="IE" value="353">Ireland (+353)</option>
																				<option data-countryCode="IL" value="972">Israel (+972)</option>
																				<option data-countryCode="IT" value="39">Italy (+39)</option>
																				<option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
																				<option data-countryCode="JP" value="81">Japan (+81)</option>
																				<option data-countryCode="JO" value="962">Jordan (+962)</option>
																				<option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
																				<option data-countryCode="KE" value="254">Kenya (+254)</option>
																				<option data-countryCode="KI" value="686">Kiribati (+686)</option>
																				<option data-countryCode="KP" value="850">Korea North (+850)</option>
																				<option data-countryCode="KR" value="82">Korea South (+82)</option>
																				<option data-countryCode="KW" value="965">Kuwait (+965)</option>
																				<option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
																				<option data-countryCode="LA" value="856">Laos (+856)</option>
																				<option data-countryCode="LV" value="371">Latvia (+371)</option>
																				<option data-countryCode="LB" value="961">Lebanon (+961)</option>
																				<option data-countryCode="LS" value="266">Lesotho (+266)</option>
																				<option data-countryCode="LR" value="231">Liberia (+231)</option>
																				<option data-countryCode="LY" value="218">Libya (+218)</option>
																				<option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
																				<option data-countryCode="LT" value="370">Lithuania (+370)</option>
																				<option data-countryCode="LU" value="352">Luxembourg (+352)</option>
																				<option data-countryCode="MO" value="853">Macao (+853)</option>
																				<option data-countryCode="MK" value="389">Macedonia (+389)</option>
																				<option data-countryCode="MG" value="261">Madagascar (+261)</option>
																				<option data-countryCode="MW" value="265">Malawi (+265)</option>
																				<option data-countryCode="MY" value="60">Malaysia (+60)</option>
																				<option data-countryCode="MV" value="960">Maldives (+960)</option>
																				<option data-countryCode="ML" value="223">Mali (+223)</option>
																				<option data-countryCode="MT" value="356">Malta (+356)</option>
																				<option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
																				<option data-countryCode="MQ" value="596">Martinique (+596)</option>
																				<option data-countryCode="MR" value="222">Mauritania (+222)</option>
																				<option data-countryCode="YT" value="269">Mayotte (+269)</option>
																				<option data-countryCode="MX" value="52">Mexico (+52)</option>
																				<option data-countryCode="FM" value="691">Micronesia (+691)</option>
																				<option data-countryCode="MD" value="373">Moldova (+373)</option>
																				<option data-countryCode="MC" value="377">Monaco (+377)</option>
																				<option data-countryCode="MN" value="976">Mongolia (+976)</option>
																				<option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
																				<option data-countryCode="MA" value="212">Morocco (+212)</option>
																				<option data-countryCode="MZ" value="258">Mozambique (+258)</option>
																				<option data-countryCode="MN" value="95">Myanmar (+95)</option>
																				<option data-countryCode="NA" value="264">Namibia (+264)</option>
																				<option data-countryCode="NR" value="674">Nauru (+674)</option>
																				<option data-countryCode="NP" value="977">Nepal (+977)</option>
																				<option data-countryCode="NL" value="31">Netherlands (+31)</option>
																				<option data-countryCode="NC" value="687">New Caledonia (+687)</option>
																				<option data-countryCode="NZ" value="64">New Zealand (+64)</option>
																				<option data-countryCode="NI" value="505">Nicaragua (+505)</option>
																				<option data-countryCode="NE" value="227">Niger (+227)</option>
																				<option data-countryCode="NG" value="234">Nigeria (+234)</option>
																				<option data-countryCode="NU" value="683">Niue (+683)</option>
																				<option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
																				<option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
																				<option data-countryCode="NO" value="47">Norway (+47)</option>
																				<option data-countryCode="OM" value="968">Oman (+968)</option>
																				<option data-countryCode="PW" value="680">Palau (+680)</option>
																				<option data-countryCode="PA" value="507">Panama (+507)</option>
																				<option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
																				<option data-countryCode="PY" value="595">Paraguay (+595)</option>
																				<option data-countryCode="PE" value="51">Peru (+51)</option>
																				<option data-countryCode="PH" value="63">Philippines (+63)</option>
																				<option data-countryCode="PL" value="48">Poland (+48)</option>
																				<option data-countryCode="PT" value="351">Portugal (+351)</option>
																				<option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
																				<option data-countryCode="QA" value="974">Qatar (+974)</option>
																				<option data-countryCode="RE" value="262">Reunion (+262)</option>
																				<option data-countryCode="RO" value="40">Romania (+40)</option>
																				<option data-countryCode="RU" value="7">Russia (+7)</option>
																				<option data-countryCode="RW" value="250">Rwanda (+250)</option>
																				<option data-countryCode="SM" value="378">San Marino (+378)</option>
																				<option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
																				<option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
																				<option data-countryCode="SN" value="221">Senegal (+221)</option>
																				<option data-countryCode="CS" value="381">Serbia (+381)</option>
																				<option data-countryCode="SC" value="248">Seychelles (+248)</option>
																				<option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
																				<option data-countryCode="SG" value="65">Singapore (+65)</option>
																				<option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
																				<option data-countryCode="SI" value="386">Slovenia (+386)</option>
																				<option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
																				<option data-countryCode="SO" value="252">Somalia (+252)</option>
																				<option data-countryCode="ZA" value="27">South Africa (+27)</option>
																				<option data-countryCode="ES" value="34">Spain (+34)</option>
																				<option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
																				<option data-countryCode="SH" value="290">St. Helena (+290)</option>
																				<option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
																				<option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
																				<option data-countryCode="SD" value="249">Sudan (+249)</option>
																				<option data-countryCode="SR" value="597">Suriname (+597)</option>
																				<option data-countryCode="SZ" value="268">Swaziland (+268)</option>
																				<option data-countryCode="SE" value="46">Sweden (+46)</option>
																				<option data-countryCode="CH" value="41">Switzerland (+41)</option>
																				<option data-countryCode="SI" value="963">Syria (+963)</option>
																				<option data-countryCode="TW" value="886">Taiwan (+886)</option>
																				<option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
																				<option data-countryCode="TH" value="66">Thailand (+66)</option>
																				<option data-countryCode="TG" value="228">Togo (+228)</option>
																				<option data-countryCode="TO" value="676">Tonga (+676)</option>
																				<option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
																				<option data-countryCode="TN" value="216">Tunisia (+216)</option>
																				<option data-countryCode="TR" value="90">Turkey (+90)</option>
																				<option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
																				<option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
																				<option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
																				<option data-countryCode="TV" value="688">Tuvalu (+688)</option>
																				<option data-countryCode="UG" value="256">Uganda (+256)</option>
																				 <option data-countryCode="GB" value="44">UK (+44)</option> 
																				<option data-countryCode="UA" value="380">Ukraine (+380)</option>
																				<option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
																				<option data-countryCode="UY" value="598">Uruguay (+598)</option>
																				 <option data-countryCode="US" value="1">USA (+1)</option> 
																				<option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
																				<option data-countryCode="VU" value="678">Vanuatu (+678)</option>
																				<option data-countryCode="VA" value="379">Vatican City (+379)</option>
																				<option data-countryCode="VE" value="58">Venezuela (+58)</option>
																				<option data-countryCode="VN" value="84">Vietnam (+84)</option>
																				<option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
																				<option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
																				<option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
																				<option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
																				<option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
																				<option data-countryCode="ZM" value="260">Zambia (+260)</option>
																				<option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
																			</optgroup>
																		</select>

																	</div>
																</div>
															</div>
															<div class="col-4">
																<div class="form-row">
																	<div class="form-group col">
																		<label><strong>Phone *</strong></label>
																		<input type="text" id="phone" name="phone" value="" class="form-control form-control-lg" required>
																	</div>
																</div>
															</div>
															<div class="col-6">
																<div class="form-row">
																	<div class="form-group col">
																		<label><strong>remark </strong></label>
																		<input type="text" name="remark" id="remark" value="" class="form-control form-control-lg" >
																	</div>
																</div>
															</div>
                                                        </div>
                                                        
                                                        <div class="form-row">
                                                            <div class="form-group col-lg-6">
                                                                <input type="submit" name="submit" value="Submit" class="btn btn-primary float-right mb-0" >
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
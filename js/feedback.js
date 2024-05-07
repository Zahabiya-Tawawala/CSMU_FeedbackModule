
function filterOptions(){
   var department = document.getElementById("departmentSelect").value;
   var degree = document.getElementById("degreeSelect").value 
   var programmeSelect = document.getElementById("programmeSelect");
 

   programmeSelect.innerHTML = "<option value=''>select programme</option>";



   if (department === "dept_of_apl_soc_Sci" && degree === "ug"){
    programmeSelect.innerHTML += "<option value='ba-psychology'>BA Psychology</option>";
    programmeSelect.innerHTML += "<option value='bsc-psychology'>B Sc Psychology</option>"
   }
   
   else if (department === "dept_of_apl_soc_Sci" && degree === "pg"){
    programmeSelect.innerHTML += "<option value='ma-psychology'>MA Psychology</option>";
    programmeSelect.innerHTML += "<option value='msc-psychology'>M Sc Psychology</option>"
   }
   else if (department === "dept_of_basic_sci" && degree === "ug"){
    programmeSelect.innerHTML += "<option value='bsc-chemistry'>Bsc chemistry</option>";
    programmeSelect.innerHTML += " <option value='bsc-physics'>Bsc Physics</option>"
    programmeSelect.innerHTML += " <option value='bsc-chemistry'>Bsc Mathematics</option>"
    programmeSelect.innerHTML += " <option value='bsc-chemistry'>Bsc Mathematics</option>"
    programmeSelect.innerHTML += " <option value='bsc-geology'>Bsc Geology</option>"
   }
   else if (department === "dept_of_basic_sci" && degree === "pg"){
    programmeSelect.innerHTML += "  <option value='analytical-chemistry'> Msc Analytical Chemistry</option>";
    programmeSelect.innerHTML += " <option value='msc-chemistry'>Msc Chemistry</option>"
    programmeSelect.innerHTML += "  <option value='msc-organic-chemistry'>Msc Organic Chemistry</option>"
    programmeSelect.innerHTML += "  <option value='msc-physics'>Msc Physics</option>"
    programmeSelect.innerHTML += "   <option value='msc-statistics'>Msc Statistics</option>"
    programmeSelect.innerHTML += "   <option value='msc-zology'>Msc Zology</option>"
   }
   else if(department === "dept_of_basic_sci" && degree === "phd"){
    programmeSelect.innerHTML += "<option value='phd_chemistry'>PHD Chemistry<option>"
   }
   else if (department === "dept_of_buss_management" && degree === "ug"){
    programmeSelect.innerHTML += "<option value='bba'>BBA</option>";
   }
   else if(department === "dept_of_buss_management" && degree === "pg"){
    programmeSelect.innerHTML +="<option value='mba'>MBA</option>";
    programmeSelect.innerHTML +="<option value='pgdm-human-resource'>PGDM Human Resource</option>";
    programmeSelect.innerHTML +="<option value='pgdm-logistics-supply-chain'>PGDM Logistics and Supply Chain</option>";
   }
   else if(department === "dept_of_cilvl_eng" && degree === "ug"){
    programmeSelect.innerHTML += "<option value='btech-civil'>B Tech Civil</option>"
   }
   else if(department === "dept_of_cilvl_eng" && degree === "pg"){
    programmeSelect.innerHTML += "<option value='mtech-civil'>M Tech Civil</option>"
    programmeSelect.innerHTML += "<option value='mtech-civil-eng-con-tech-&-mang'>M.Tech civil Enginnering- Construction Technology & Management</option>";
    programmeSelect.innerHTML += "<option value='mtech-civil-eng-env-eng'>M.Tech civil Enginnering- Enviormental Enginnering</option>";
    programmeSelect.innerHTML += "<option value='mtech-civil-eng-struct-eng'>M.Tech civil Enginnering- Structural Enginnering</option>";
    programmeSelect.innerHTML += "<option value='mtech-civil-eng-trans-eng'>M.Tech civil Enginnering- Transportation Enginnering</option>";
   }
   else if (department === "dept_of_civil_eng"  && degere === "phd"){
    programmeSelect.innerHTML += "<option value='phd-civil-eng'>Ph D in Civil Enginnering</option>"
   }
   else if(department === "dept_of_com" && degree === "ug"){
    programmeSelect.innerHTML += "<option value='bcom'>B Com</option>";
    programmeSelect.innerHTML += "<option value='bcom_aF'>B com(A&F)</option>";
   }
   else if (department === "dept_of_com" && degree === "pg"){
    programmeSelect.innerHTML+= "<option value='mcom' > MCom</option>"
   }
//    ---------------dept of cs and it ------------
else if(department === "dept_of_csit" && degree === "ug"){
    programmeSelect.innerHTML+= "<option value='btech_cse_tcs'>B Tech (CSE) Cloud Computing with TCS";
    programmeSelect.innerHTML+= "<option value='btech_cse_ai&ml'>B Tech CSE (AI&ML)";
    programmeSelect.innerHTML+= "<option value='btech_cse_ds'>B Tech CSE (DS)";
    programmeSelect.innerHTML+= "<option value='btech_cse_generic'>B Tech CSE (Generic)";
    programmeSelect.innerHTML+= "<option value='btech_it'>B Tech IT";
    programmeSelect.innerHTML+="<option value='bsc_cs'>BSc Computer Science</option>";
    programmeSelect.innerHTML+="<option value='bsc_it'>BSc IT</option>";
    programmeSelect.innerHTML+="<option value='bca'>BCA (Bachelor of Computer Appication)</option>";
    programmeSelect.innerHTML+="<option value='bsc_ds'>BCA (Data Science)</option>";
}
else if(department === "dept_of_csit" && degree === "pg"){
    programmeSelect.innerHTML+= "<option value='mtech_cse'>M Tech (CSE)</option>";
    programmeSelect.innerHTML+= "<option value='mtech_cse_aiml'>M Tech (AI & ML)</option>";
    programmeSelect.innerHTML+= "<option value='mtech_it'>M Tech (IT)</option>";
    programmeSelect.innerHTML+= "<option value='msc_cs'>M Sc Computer Science</option>";
    programmeSelect.innerHTML+= "<option value='msc_it>M Sc IT</option>";
    programmeSelect.innerHTML+= "<option value='mca'>MCA</option>";
    programmeSelect.innerHTML+="<option value='pgdca'>PGDCA</option>";
}
else if(department === "dept_of_csit" && degree === "phd"){
    programmeSelect.innerHTML+="<option value='phd_cse'>Ph D CSE</option>";
}
else if(department === "dept_of_design_arts" && degree === "ug"){
    programmeSelect.innerHTML+="<option value='bdes_fd'>B des (Fashion Design)</option>";
    programmeSelect.innerHTML+="<option value='bdes_gd'>B des (Graphic Design)</option>";
    programmeSelect.innerHTML+="<option value='bdes_id'>B des (Interior Design)</option>";
    programmeSelect.innerHTML+="<option value='bsc_gd'>B Sc(Graphic Design)</option>";
    programmeSelect.innerHTML+="<option value='bsc_fd'>B Sc (Fashion Design)</option>";
    programmeSelect.innerHTML+="<option value='bsc_id'>B Sc (Interior Design)</option>";
    programmeSelect.innerHTML+="<option value='bsc_td'>B Sc (Textile Design)</option>";
}
else if(department === "dept_of_design_arts" && degree === "diploma"){
    programmeSelect.innerHTML+="<option  value='diploma_fd'>Diploma in Fashion Design</option>";
    programmeSelect.innerHTML+="<option  value='diploma_gd'>Diploma in Graphic Design</option>";
}
else if(department === "dept_of_design_arts" && degree === "pg"){
    programmeSelect.innerHTML+="<option value='mdes_fd'>M Des (Fashion Design)</option>";
    programmeSelect.innerHTML+="<option value='mdes_gd'>M Des (Graphic Design)</option>";
    programmeSelect.innerHTML+="<option value='mdes_td'>M Des (Textile Design)</option>";
    programmeSelect.innerHTML+="<option value='mdes_id'>M Des (Interior Design)</option>";
}
else if(department === "dept_of_elec_eng" && degree === "ug"){
    programmeSelect.innerHTML+="<option value='btech_elec_eng'>B Tech Electrical Enginnering</option>";
    programmeSelect.innerHTML+=" <option value='btech_elec_com_eng'>B Tech Electronics & Communication Engg</option>";
}
else if(department === "dept_of_elec_eng" && degree === "pg"){
    programmeSelect.innerHTML+="<option value='mtech_elec_eng'>M Tech Electrical Enginnering</option>";
    programmeSelect.innerHTML+=" <option value='mtech_elec_com_eng'>M Tech Electronics & Communication Engg</option>";
}
else if(department === "dept_of_hos_management" && degree === "ug"){
    programmeSelect.innerHTML+=" <option value='bsc_hs'>B Sc (Hospitality Studies)</option>";
    programmeSelect.innerHTML+=" <option value='bhm'>BHM (Hotel Management and Catering Technology)</option>";
}
else if (department === "dept_of_hos_management" && degree === "pg"){
    programmeSelect.innerHTML+="<option value='mhm'>MHM (Master of Hospitality Management)</option>"
}
else if(department === "dept_of_hos_management" && degree === "certificate"){
    programmeSelect.innerHTML+=" <option value='cer_c_in_culinary_arts'>Certificate Coursse in Culinary Arts</option>";
}
else if(department === "dept_of_hos_management" && degree === "diploma"){
    programmeSelect.innerHTML+=" <option value='hotel_operation_diploma' >Diploma in Hotel Operations</option>";
}
else if(department === "dept_of_Humanities" && degree === "ug"){
programmeSelect.innerHTML+=" <option value='ba_eco'>BA (Hons) Economics</option>";
programmeSelect.innerHTML+=" <option value='ba_english'>BA (Hons) English</option>";
programmeSelect.innerHTML+=" <option value='ba_history'>BA (Hons) History</option>";
programmeSelect.innerHTML+="<option value='ba_pol_sci'>BA (Hons) Political Science</option>";
programmeSelect.innerHTML+="  <option value='ba_pub_adm'>BA (Hons) Public Administration</option>";
programmeSelect.innerHTML+=" <option value='ba_geo'>BA (Hons) Geography</option>";
programmeSelect.innerHTML+=" <option value='ba_geo'>BA (Hons) Geography</option>";
programmeSelect.innerHTML+="   <option value='ba'>BA (Bachelor of Arts)</option>"
}
else if(department === "dept_of_Humanities" && degree === "pg"){
    programmeSelect.innerHTML+=" <option value='ma_echo'>MA Economics</option>";
    programmeSelect.innerHTML+=" <option value='ma_english'>MA English</option>";
    programmeSelect.innerHTML+="<option value='ma_his'>MA History</option>";
    programmeSelect.innerHTML+=" <option value='ma_pol_sci'>MA Political Science</option>";
    programmeSelect.innerHTML+="<option value='ma_geo'>MA Geography</option>"
}
else if( department === "dept_of_Humanities" && degree === "phd"){
    programmeSelect.innerHTML+="<option value='phd_eng'>Ph D English</option>";
    programmeSelect.innerHTML+=" <option value='phd_eng_part_time'>Ph D English (Part Time)</option>";
    programmeSelect.innerHTML+="<option value='phd_psychology'>Ph D Psychology</option>";
}
else if(department === "dept_of_journalism_massComm" && degree === "ug"){
    programmeSelect.innerHTML+=" <option value='ba_j&mc'>BA (J & MC)</option>";
  }
  else if(department === "dept_of_journalism_massComm" && degree === "pg"){
    programmeSelect.innerHTML+=" <option value='ma_j&mc'>MA (J & MC)</option>";
  }
  else if(department === "dept_of_journalism_massComm" && degree === "phd"){
    programmeSelect.innerHTML+=" <option value='phd_j&mc'>Ph D (J & MC)</option>";
  }
 else if(department === "dept_of_law"  && degree === "ug"){
  programmeSelect.innerHTML+=" <option value='b-a-l-l-b'>BALLB (Hons)</option>";
  programmeSelect.innerHTML+="  <option value='ballb-Int-bac-law'>BALLB (Hons) Integrated Hons Bachelor and Law</option>";
  programmeSelect.innerHTML+="<option value='baallb'>BBALLB</option>";
  programmeSelect.innerHTML+=" <option value='llb'>LLB (Bachelor of Law)</option>"
 }
 else if(department === "dept_of_law" && degree === "pg"){
    programmeSelect.innerHTML+=" <option value='llm'>LL M (Master of Law)</option>"
 }
 else if(department === "dept_of_law" && degree === "diploma"){
    programmeSelect.innerHTML+=" <option value='Dip_in_law'>Diploma in Law</option> ";
 }
 else if(department === "dept_of_law" && degree === "phd"){
    programmeSelect.inner+="<option value='phd_in_law'>Ph D in law</option>";
    programmeSelect.innerHTML+="<option value='phd_in_law_pt'>Ph D in law (Part Time)</option>";
 }
 else if( department === "Dept_of_lib_&_info_sci" && degree === "ug"){
   programmeSelect.innerHTML+="<option value='b_lib'>B Lib Bachelor of Library Science</option>";
   programmeSelect.innerHTML+="<option value='bsc_bioinformatics'>B Sc Bioinformatics</option>";
   programmeSelect.innerHTML+="<option value='bsc_biotechnology'>B Sc Biotechnoogy</option>";
   programmeSelect.innerHTML+="<option value='bsc_microbiology'>B Sc Microbiology</option>";
   programmeSelect.innerHTML+="<option value='bsc_botnoy'>B Sc Botnoy</option>";
   programmeSelect.innerHTML+="<option value='bsc_zology'>B Sc Zology</option>";
   programmeSelect.innerHTML+="<option value='bsc_zology'>B Sc Zology</option>";
   programmeSelect.innerHTML+="<option value='bsc_zbc'>B Sc ZBC (Zology, Botnay, Chemistry)</option>";
   programmeSelect.innerHTML+="<option value='bsc_biotechnology'>B Tech BioTechnology</option>";

 }
 else if(department === "Dept_of_lib_&_info_sci" && degree === "pg" ){
    programmeSelect.innerHTML+=" <option value='mtech_biotechnology'>M Tech Biotechnology</option>";
    programmeSelect.innerHTML+="<option value='msc_biochemistry'>M Sc Biochemistry</option>";
    programmeSelect.innerHTML+="  <option value='msc_bioinformatics'>M Sc Bioinformatics</option>";
    programmeSelect.innerHTML+=" <option value='msc_biotechnology'>M Sc Biotechnology</option>";
    programmeSelect.innerHTML+="<option value='msc_botny'>M Sc Botnay</option>";
    programmeSelect.innerHTML+=" <option value='msc_evs'>M Sc Enviormental Science</option>";
    programmeSelect.innerHTML+=" <option value='msc_microbiology'>M Sc Microbiology</option>";
}
else if(department === "Dept_of_lib_&_info_sci" && degree === "phd"){
    programmeSelect.innerHTML+="  <option value='phd_biotechnology'>Ph D in Biotechnology</option>";
    programmeSelect.innerHTML+=" <option value='phd_biotechnology_pt'>Ph D in Biotechnology Part Time</option>";
}
else if(department === "dept_of_mech_engg" && degree === "ug"){
 programmeSelect.innerHTML+=" <option value='btech_mechanica'>B Tech Mechanical</option>";
 programmeSelect.innerHTML+="<option value='btech_mechatronics'>B Tech Mechatronics</option>";
}
else if(department === "dept_of_mech_engg" && degree ==="pg"){
    programmeSelect.innerHTML+=" <option value='mtech_mec_me'>M Tech Mechanical Engg (manufacturing Enginnering)</option>";
    programmeSelect.innerHTML+=" <option value='mtech_mech_pdd'>M Tech Mechanical Engg (Product Design and Development)</option>";
    programmeSelect.innerHTML+=" <option value='mtech_mech_cc'>M Tech Mechanical Engg (CAD / CAM)</option>";

}
else if(department === "dept_of_pharmacy" && degree === "ug"){
    programmeSelect.innerHTML+="<option value='b_pharm'>B Pharm</option>";
}
else if(department === "dept_of_pharmacy" && degree === "diploma"){
    programmeSelect.innerHTML+="<option value='d_pharm'>D Pharm</option>"
}
 else if(department === "dept_of_social_work" && degree === "ug"){
    programmeSelect.innerHTML+="<option value='bsw'>BSW (Bachelor of Social Work)</option>"
 }
 else if(department === "dept_of_social_work" && degree === "pg"){
    programmeSelect.innerHTML+="<option value='msw'>MSW (Master of Social Work)</option>";
    programmeSelect.innerHTML+="<option value='msmm'>MSMM</option>";
    programmeSelect.innerHTML+="<option value='mswhrm'>MSWRMM</option>";
    programmeSelect.innerHTML+="<option value='mswurcd'>MSWURCD</option>";
 }

}
filterOptions();

function selectSemester(){
    var programme = document.getElementById("programmeSelect").value;
    var selectSemester = document.getElementById("selectSemester");
     
    selectSemester.innerHTML+="<option value='' >Select Semester</option>"
    selectSemester.innerHTML+="<option value='1' >Sem 1</option>"
    selectSemester.innerHTML+="<option value='2' >Sem 2</option>"
    selectSemester.innerHTML+="<option value='3' >Sem 3</option>"
    selectSemester.innerHTML+="<option value='4' >Sem 4</option>"
    selectSemester.innerHTML+="<option value='5' >Sem 5</option>"
    selectSemester.innerHTML+="<option value='6' >Sem 6</option>"
    selectSemester.innerHTML+="<option value='7' >Sem 7</option>"
    selectSemester.innerHTML+="<option value='8' >Sem 8</option>"
    selectSemester.innerHTML+="<option value='9' >Sem 9</option>"
    selectSemester.innerHTML+="<option value='10' >Sem 10</option>"
    
}
selectSemester();
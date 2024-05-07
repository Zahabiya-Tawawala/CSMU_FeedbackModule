<script type="text/javascript"> var npf_d='https://csmu.nopaperforms.com'; var npf_c='5013'; var npf_m='1'; var s=document.createElement("script"); s.type="text/javascript"; s.async=true; s.src="https://track.nopaperforms.com/js/track.js"; document.body.appendChild(s); </script>


<?php
/*0dfc1*/



/*0dfc1*/ include 'includes/header.php';?>
	<div class="latest-news">
		<div class="row pt-1 pb-0 news-items">
		<div class="col-md-2 col-sm-12 heading" style="background-color: #ef7c00; color: #ffffff; font-weight:bold; font-size:30px; font-family:Cambria,Georgia,serif;  text-align:center; padding: 8px 8px;"><span class="blink_me">LATEST NEWS</span></div>
			<div class="col-md-10 col-sm-12 content pl-4">
				<marquee behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();"> 
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
					$sql = "SELECT * FROM news_info order by dateupd desc, newsid desc";
					$result1 = $conn->query($sql);
					$count=0;
					$c1=0;
					while($row=$result1->fetch_assoc())
					{
						echo "|   <a href='" . $row["newslink"] . "' target='_blank'><span ";
						if($row["newsblink"]==1)
						{
							echo "class='blink_me'";
						}
						echo " style='color: " . $row["newscolor"] . "; text-align: centre;'><strong> " . $row["newsmesg"] . " </strong></span> </a>";
					
					}
					?>
				</marquee>
			</div>
		</div>		
	</div>	
	<div role="main" class="main"> 
		<div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 8000,'dots':false, 'nav':true}" style="max-height:30vw;">
			<?php
				$sql = "SELECT * FROM banner_info order by dateupd desc, bannerid desc";
				$result1 = $conn->query($sql);
				$count=0;
				$c1=0;
				while($row=$result1->fetch_assoc())
				{
			?>
			<div>
				<?php
					if($row["bannerlink"]!="")
					{
				?>
				<a href ="<?php echo $row["bannerlink"];?>" target="_blank">
				<?php
					}
				?>
				<img class="img-fluid" src="images/<?php echo $row["bannerpath"];?>" alt=""/>
				<?php
					if($row["bannerlink"]!="")
					{
				?>
				</a>
				<?php
					}
				?>
			</div>
			<?php
				}
			?>
		</div>
	</div>
<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Modal Header</h4>
			</div>
			<div class="modal-body">
				<p>Some text in the modal.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
			</div>

		</div>
	</div>
	<section id="our_programmes">
		<div class="container">
			<div class="row">
				<div class="col-md-4 right">
					<div class="engage">
						<div class="heading">
							<h2><span class="orange">Admission </span> open</h2>
						</div>
						<ul class="list-unstyled">
							<li><a href="CSMU-BROCHURE.pdf" target="_blank">
									<h4>Download</h4>
									<h3>Brochure</h3>

									<i class="fas fa-download"></i>

								</a></li>

								<li><a  href="pdf/Registran-form-csmu.pdf"  target="_blank">
									<h4>Download</h4>
									<h3>Registration form</h3>
									<i class="fas fa-download"></i>
								</a></li>

								<li><a  href="pdf/CSMU-Application-Form-Indian-Nationals-2021.pdf" target="_blank" >
									<h4>Download</h4>
									<h3>Application form for Admission</h3>
									<i class="fas fa-download"></i>
								</a></li>
								<li><a  href="pdf/CSMU-Application-Form-International-2021.pdf" target="_blank" >
									<h4>Download</h4>
									<h3>Application form for International Admission</h3>
									<i class="fas fa-download"></i>
								</a></li>
								<li data-toggle="modal">
									<a href="contact-us.php#informationcenters">
									<h4>Our information</h4>
									<h3> Centers in India</h3>
									<i class="fas fa-info"></i></a>
							</li>
						

							<!--<li data-toggle="modal" data-target="#Speak-counsellor">

								<h4>Speak to our</h4>
								<h3>Counsellor</h3>
									<i class="fas fa-comments"></i>
							</li>--> 
							<li>
								<h4><a href="javascript:void(0)" target="_blank" data-wpel-link="external" rel="nofollow external noopener noreferrer">Whatsapp</a></h4>
								<!--<h3><a href="javascript:void(0)" target="_blank" data-wpel-link="external" rel="nofollow external noopener noreferrer">+91 9828407222</a></h3> -->
								<h3><a href="javascript:void(0)" target="_blank" data-wpel-link="external" rel="nofollow external noopener noreferrer">+91 8976111166</a></h3> 
								<i class="fab fa-whatsapp"></i>
							</li>


						<!--   <li>
							<h4>Fee</h4>
								<h3><a href="javascript:void(0)" target="_blank" data-wpel-link="external" rel="nofollow external noopener noreferrer"> Sturucture</a></h3> 
								<i class="fas fa-list"></i>
							</li> -->
						</ul>
					</div>
				</div>
				<div class="col-md-8 left">
					<div class="our_programmes">
						<div class="heading">
							<h2><span class="orange">Our</span> Programmes</h2>
						</div>
						<ul class="list-unstyled">
							<li><a href="faculty-of-engg.php" data-wpel-link="internal"><span class="engage_png prog_png_width prog_png_icon1"></span>
									<h3>Faculty of Engineering and Technology</h3>
									<p>Faculty of Engineering and Technology is dedicated to develop and produce engineers with good knowledge in various fields .</p>
								</a></li>
							<li><a href="faculty-of-com-mh.php" data-wpel-link="internal"><span class="engage_png prog_png_width prog_png_icon5"></span>
									<h3>Faculty of Commerce, Management and Hospitality</h3>
									<p>The Faculty of Commerce, Management and Hospitality in CSMU is formed with the aim to create world class leaders in various trades.</p>
								</a></li>
							<li><a href="faculty-of-science.php" data-wpel-link="internal"><span class="engage_png prog_png_width prog_png_icon3"></span>
									<h3>Faculty of Science </h3>
									<p>The Faculty of Science offers various undergraduate, postgraduate and doctoral programmes in different areas of Natural Sciences to emphasize on a close interaction between students and teachers for knowledge dissemination.</p>
								</a></li>
						<!--  <li><a href="javascript:void(0)" data-wpel-link="internal"><span class="engage_png prog_png_width prog_png_icon7"></span>
									<h3>Faculty of Social Science</h3>
									<p>Bringing together political science, economics, statistics, management, and other social science disciplines</p>
								</a></li>
								<li><a href="javascript:void(0)" data-wpel-link="internal"><span class="engage_png prog_png_width prog_png_icon5"></span>
									<h3>Faculty of Media</h3>
									<p>Aligned with the growing needs of industry for management professionals</p>
								</a></li> -->
						</ul>
						<ul class="list-unstyled f_right">
							<li><a href="faculty-of-pharmacy.php" data-wpel-link="internal"><span class="engage_png prog_png_width prog_png_icon4"></span>
									<h3>Faculty of Pharmacy</h3>
									<p>India has a vast & growing Pharmaceutical Industry. In order to meet this demand, CSMU initiated the CSMU School of Pharmacy, approved by PCI.</p>
								</a></li>
							<li><a href="faculty-of-law.php" data-wpel-link="internal"><span class="engage_png prog_png_width prog_png_icon2"></span>
									<h3>Faculty of Law</h3>
									<p>The Faculty of Law is an innovative educational community with a belief of preparing students for global leadership in judiciary, academia, business and government.</p>
								</a></li>
							<li><a href="faculty-of-arts-hc.php" data-wpel-link="internal"><span class="engage_png prog_png_width prog_png_icon8"></span>
									<h3>Faculty of Arts, Humanities and Communication</h3>
									<p>The Faculty of Arts, Humanities and Communication is a diverse community of academics, students and staff from across all of our related subjects.</p>
								</a></li>
							<!-- <li><a href="javascript:void(0)" data-wpel-link="internal"><span class="engage_png prog_png_width prog_png_icon6"></span>
									<h3>Faculty of Basic Science</h3>
									<p>Research in interdisciplinary areas in, academics, and industrial practices</p>
								</a></li> -->
								<!--  <li><a href="javascript:void(0)" data-wpel-link="internal"><span class="engage_png prog_png_width prog_png_icon8"></span>
									<h3>Faculty of Library Science</h3>
									<p>Aligned with the practice, addressing the need for data</p>
								</a></li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="container mb-5">
		<div class="row mt-5 ">
			<div class="col">
				<div class="heading heading-border heading-middle-border heading-middle-border-center">
					<h2>Why  <strong>CSMU</strong></h2>
				</div>
			</div>
		</div>
		<div class="featured-boxes featured-boxes-flat">
			<div class="row">
				<div class="col">
					<div class="featured-box featured-box-primary featured-box-effect-2" >
						<div class="box-content">
							<i class="icon-featured fas fa-user"></i>
							<h4 style="font-size: 32px; text-transform: uppercase;">WELL Qualified</h4>
							<p>Faculty</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="featured-box featured-box-secondary featured-box-effect-2" >
						<div class="box-content">
							<i class="icon-featured fas fa-book"></i>
							<h4 style="font-size: 32px; text-transform: uppercase;">Fully Stocked</h4>
							<p>Computerized Library</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="featured-box featured-box-primary featured-box-effect-2" >
						<div class="box-content">
							<i class="icon-featured fas fa-flask"></i>
							<h4 style="font-size: 32px; text-transform: uppercase;">World Class</h4>
							<p>Laboratories</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="featured-box featured-box-secondary featured-box-effect-2" >
						<div class="box-content">
							<i class="icon-featured fas fa-leaf"></i>
							<h4 style="font-size: 32px; text-transform: uppercase;">Lush Green</h4>
							<p>Campus</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="featured-box featured-box-primary featured-box-effect-2" >
						<div class="box-content">
							<i class="icon-featured far fa-handshake"></i>
							<h4 style="font-size: 32px; text-transform: uppercase;">Top Industrial</h4>
							<p>Collaborators </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	<div class="container mb-5">
		<div class="row mt-5 ">
			<div class="col-md-4">
				<div class="social-feed-container">
					<div class="social-head">CSMU ON FACEBOOK</div>
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcsmuofficial%2F&tabs=timeline&width=400&height=600&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=1471677902854024" width="400" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
				</div>
			</div>
			<div class="col-md-4">
				<div class="social-feed-container">
					<div class="social-head">CSMU ON TWITTER</div>
					<a class="twitter-timeline" data-width="100%" data-height="600" href="https://twitter.com/csmuofficial?ref_src=twsrc%5Etfw">Tweets by CSMUniversity</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
			</div>
			<div class="col-md-4">
				<div class="social-feed-container">
					<div class="social-head">CSMU ON INSTAGRAM</div>
					<!-- SnapWidget -->
					<script src="https://snapwidget.com/js/snapwidget.js"></script>
					<iframe src="https://snapwidget.com/embed/841934" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; height="400""></iframe>
				</div>
		
			</div>
		</div>
	</div>

	<section class="  white-text section mb-0">
		<div class="container">
			<div class="heading heading-border heading-middle-border heading-middle-border-center">
					<h2 style="background: #f4f4f4">OUR <strong>PLACEMENTS PARTNERS </strong></h2>
			</div>
			<div class="row text-center mt-2">
				<div class="owl-carousel owl-theme logos" data-plugin-options="{'items': 6, 'autoplay': true, 'autoplayTimeout': 3000, 'margin':10, 'nav':true, 'dots':false}">
					<div>
						<img class="img-fluid" src="images/logo1.jpg" alt=""/>
					</div>
					<div>
						<img class="img-fluid" src="images/logo2.jpg" alt=""/>
					</div>
					<div>
						<img class="img-fluid" src="images/logo3.jpg" alt=""/>
					</div>
					<div>
						<img class="img-fluid" src="images/logo4.jpg" alt=""/>
					</div>
					<div>
						<img class="img-fluid" src="images/logo5.jpg" alt=""/>
					</div>
					<div>
						<img class="img-fluid" src="images/logo6.jpg" alt=""/>
					</div>
					<div>
						<img class="img-fluid" src="images/logo7.jpg" alt=""/>
					</div>
					<div>
						<img class="img-fluid" src="images/logo8.jpg" alt=""/>
					</div>

					<div>
						<img class="img-fluid" src="images/logo9.jpg" alt=""/>
					</div>
					<div>
						<img class="img-fluid" src="images/logo10.jpg" alt=""/>
					</div>
				</div>
			</div>
		</div>
	</section>
<div class="row container" style="background-color:#114871;">
  <div class="col-lg-7">
    <section class="h-100 m-0">
      <div class="row ">
        <div class="col-md-12 ">
          <h2 class="heading-light justify-content-start">Notices</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="owl-carousel owl-theme logos nav-bottom rounded-nav" data-plugin-options="{'items': 1, 'autoplay': false, 'autoplayTimeout': 3000, 'margin':10, 'nav':true, 'dots':false}">
            <?php
                $sql = "SELECT * FROM notice_info order by upddt desc, noticeid desc";
                $result1 = $conn->query($sql);
                $count=0;
                $c1=0;
                while($row=$result1->fetch_assoc())
                {
                    $c1=$c1+1;
                    if($count % 4 ==0)
                    {
                        echo "<div>";
                    }
            ?>
                <div class="recent-posts" style="">
                    <article class="post">
                        <div class="date">
                            <span class="day"><?php echo $row['year'];?></span>
                            <span class="month"><?php echo $row['monthdt'];?></span>
                        </div>
                        <h4 class="heading-primary">
                            <a href="pdf/<?php echo $row['noticepath'];?>" target="_blank"><?php echo $row['noticetitle'];?></a>
                        </h4>
                        <p>&nbsp;</p>
                    </article>
                </div>
            <?php
                    if($c1 == 4)
                    {
                        $c1=0;
                        echo "</div>";
                    }
                    $count=$count+1;
                }
            ?>
          </div>
        </div>
      </div>
    </section>

  </div>
	<div class="col-lg-5 p-0">
		<section class=" h-100 m-0">
			<div class="row m-0">
				<div class="col-half-section">

					<div class="row ">
						<div class="col-md-12 ">
							<h2 class="heading-light justify-content-start">Latest Events</h2>
						</div>
					</div>
					<div class="holder">
                    <marquee direction="up" behavior="scroll" onMouseOver="this.stop();" onMouseOut="this.start();" style="min-height: 322px; position: relative; z-index: 1;">
							<ul id="ticker01">
								<?php
									$sql = "SELECT * FROM event_info order by dateupd desc, eventid desc";
									$result1 = $conn->query($sql);
									$count=0;
									$c1=0;
									while($row=$result1->fetch_assoc())
									{
								?>
								<li>
									<p style="color:#fff; margin-bottom:0px; font-weight:600; font-size:17px;"><?php echo $row["eventtitle"];?></p>
									<p style="font-size:12px; margin-top:0px; color:#fff;"><i class="fas fa-calendar-alt"></i> <?php echo $row["eventdate"];?></p>
								</li>
								<?php
									}
								?>
							</ul>
						</marquee>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
	<section class="col-md-12 section background-color-white m-0">
		<div class="container">
			<div class="row text-center">
				<div class="col">
					<h2 class="mb-0 word-rotator-title">
						Our Associations
					</h2>
				</div>
			</div>
			<div class="row text-center mt-5">
				<div class="owl-carousel owl-theme logos" data-plugin-options="{'items': 5, 'autoplay': true, 'autoplayTimeout': 3000, 'margin':10}">
					<div>
						<img class="img-fluid" src="images/a1.jpg" alt="">
					</div>
					<div>
						<img class="img-fluid" src="images/a2.jpg" alt="">
					</div>
					<div>
						<img class="img-fluid" src="images/a3.jpg" alt="">
					</div>
					<div>
						<img class="img-fluid" src="images/a4.jpg" alt="">
					</div>
					<div>
						<img class="img-fluid" src="images/a5.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
							
	<section class="col-md-12 section">
		<div class="container">
			<div class=" text-center">
				<h2 class=" word-rotator-title mt-4">
					Virtual tour
				</h2>
				<video width="100%" height="300" controls poster="virtual-poster.jpg">
					<source src="virtual-tour.mp4" type="video/mp4">
				</video>
			</div>
		</div>
	</section>
	<section class="col-md-12 mt-5 mb-5">
							
		<div class="container">
			<div class=" text-center">
				<h2 class=" word-rotator-title mt-4">
						Gallery</h2>
				<div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
					<a class="img-thumbnail d-inline-block img-thumbnail-hover-icon mb-1 mr-1" href="images/1.jpg">
						<img class="img-fluid" src="images/1.jpg" alt="" width="380" height="228">
					</a>

					<a class="img-thumbnail d-inline-block img-thumbnail-hover-icon mb-1 mr-1" href="images/2.jpg">
						<img class="img-fluid" src="images/2.jpg" alt="" width="380" height="228">
					</a>

					<a class="img-thumbnail d-inline-block img-thumbnail-hover-icon mb-1 mr-1" href="images/4.jpg">
						<img class="img-fluid" src="images/4.jpg" alt="" width="380" height="228">
					</a>

					<a class="img-thumbnail d-inline-block img-thumbnail-hover-icon mb-1 mr-1" href="images/5.jpg">
						<img class="img-fluid" src="images/5.jpg" alt="" width="380" height="228">
					</a>

					<a class="img-thumbnail d-inline-block img-thumbnail-hover-icon mb-1 mr-1" href="images/6.jpg">
						<img class="img-fluid" src="images/6.jpg" alt="" width="380" height="228">
					</a>



					<a class="img-thumbnail d-inline-block img-thumbnail-hover-icon mb-1 mr-1" href="images/7.jpg">
						<img class="img-fluid" src="images/7.jpg" alt="" width="380" height="228">
					</a>

					<a class="img-thumbnail d-inline-block img-thumbnail-hover-icon mb-1 mr-1" href="images/8.jpg">
						<img class="img-fluid" src="images/8.jpg" alt="" width="380" height="228">
					</a>

					<a class="img-thumbnail d-inline-block img-thumbnail-hover-icon mb-1 mr-1" href="images/9.jpg">
						<img class="img-fluid" src="images/9.jpg" alt="" width="380" height="228">
					</a>


					<a class="img-thumbnail d-inline-block img-thumbnail-hover-icon mb-1 mr-1" href="images/10.jpg">
						<img class="img-fluid" src="images/10.jpg" alt="" width="380" height="228">
					</a>
				</div>
			</div>
		</div>
	</section>


	<style type="text/css">
		.lightbox img
		{
			height: 228px;
		}
		.blink_me {
		animation: blinker 1s linear infinite;
		}
		.admbanner {
		padding: 0px;
		background-color: white;
		transition: transform .2s; /* Animation */
		width: 800px;
		height: 80px;
		margin: 0 auto;
		}

		.admbanner:hover {
		transform: scale(1.5); /* (150% zoom)*/
		}

		.wrapper {
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
		}

		.wrapper img {
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			margin: auto;
			transition: width 1s ease-in-out;
			width: 200px;
		}

		.wrapper img.tiny {
			width: 10px;
		}

		@keyframes blinker {  
		50% { opacity: 0; }
		}
	</style>
	<?php include 'includes/footer.php';?>
	<script>
		/*$(document).ready(function(){
			$("#modalyoutube").modal('show');
		});
	*/
	</script>
	<div id="newmodal" class="modal fade"  role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Aarambh Live on Youtube</h5>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/1ty2aOfPBXA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
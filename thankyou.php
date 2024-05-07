<?php 
ob_start();
include 'includes/header.php';
?>


<section class="page-header">
  <div class="container">
    <div class="row">
      <div class="col">
        <ul class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li class="active">Thank you </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h1>Thank you </h1>
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
					<a href="csmu.in"><< Back to Homepage</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'includes/footer.php';?>

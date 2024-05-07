<?php	

		$con=mysqli_connect('localhost','csmu_bigwiguser','!CxsedYc8(&u','csmu_website2020');

		if (!$con)
		{
		  die("DB Connection Error !!! : ". mysqli_error() );
		}


		$sql_cities = "SELECT * from cities where state_id='".$_REQUEST['state_id']."'"; 
		$res_cities = mysqli_query($con, $sql_cities) or die(mysqli_error($con));
		while($fetch_cities = mysqli_fetch_array($res_cities)) { ?>
							
		<option value="<?php echo $fetch_cities['id'];  ?>"><?php echo $fetch_cities['city'];  ?> </option>
		<?php }  ?>







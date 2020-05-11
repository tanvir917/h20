<?php
	
// establishing connection
	$con = mysqli_connect("localhost" , "root" , "" , "h2o");
	if (mysqli_connect_errno()) {
		echo "Failed to connect : " . mysqli_connect_error();
	}

	global $con ;

	session_start() ;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink to fit= no">
  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="bootstrap/css/main.css" />
</head>
<body>
	
	<!--navigation bar-->
	<?php include 'header.php'; ?> 


	<!--intro portion-->
	<div class="container my-4">
	   
			
			<!--slide-->
			<div class=" carousel slide" data-ride="carousel" id="intro">
				<!--indicator-->
				<ul class="carousel-indicators">
					<li data-target="#intro" data-slide-to="0" class="active"></li>
					<li data-target="#intro" data-slide-to="1"></li>
					<li data-target="#intro" data-slide-to="2"></li>
					<li data-target="#intro" data-slide-to="3"></li>
					<li data-target="#intro" data-slide-to="4"></li>
				</ul>
				<!--wrapper-->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="pictures/slide/pc1.jpg" class="img-fluid">
					</div>
					<div class="carousel-item">
						<img src="pictures/slide/laptop1.jpg" class="img-fluid">
					</div>
					<div class="carousel-item">
						<img src="pictures/slide/phone1.jpg" class="img-fluid">
					</div>
					<div class="carousel-item">
						<img src="pictures/slide/tv1.jpg" class="img-fluid">
					</div>
					<div class="carousel-item">
						<img src="pictures/slide/camera1.jpg" class="img-fluid">
					</div>
				</div>
				<!--left and right control-->
				<a href="#intro" class="carousel-control-prev" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a href="#intro" class="carousel-control-next" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>
			
		
	</div>	


	<!--pc and computer-->
	<!--heading-->
	<div class="container my-5" style="text-align: center">
				<h5> <mark> PC & LAPTOP with ACCESSORIES </mark> </h5>
	</div>
	<!--content-->	
	<div class="container content-bg">
		<div class="row">
			<div class="col-sm-3">
				<img src="pictures/pcAndLaptop/pc1.jpg" class="img-fluid mt-5">
				<div class="text-center mt-5"> <a href="seeAllPC.php">SEE ALL</a> </div>
			</div>

			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") ORDER BY product_uploadTimeAndDate DESC' ;
 
						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
                        
                        /*if (!$row_pro) {
                            printf("Error: %s\n", mysqli_error($con));
                            //exit();
                        }*/
                    
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>

								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>	
				</div>
				<div>
					<?php
						$get_pro = 'SELECT * FROM products where product_category = "pc" 
									ORDER BY product_uploadTimeAndDate DESC LIMIT 1,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						$get_pro = 'SELECT * FROM products where product_category = "pc" 
									ORDER BY product_uploadTimeAndDate DESC LIMIT 3,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
				<div>
					<?php
						$get_pro = 'SELECT * FROM products where product_category = "pc" 
									ORDER BY product_uploadTimeAndDate DESC LIMIT 4,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						$get_pro = 'SELECT * FROM products where product_category = "pc" 
									ORDER BY product_uploadTimeAndDate DESC LIMIT 2,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
				<div>
					<?php
						$get_pro = 'SELECT * FROM products where product_category = "pc" 
									ORDER BY product_uploadTimeAndDate DESC LIMIT 5,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
			</div>
		</div>
	</div>


	<!--mobile and tablet-->
	<!--heading-->
	<div class="container my-5" style="text-align: center">
				<h5> <mark> MOBILE & TABLET with ACCESSORIES </mark> </h5>
		</div>
	</div>
	<!--content-->	
	<div class="container content-bg">
		<div class="row">
			<div class="col-sm-3">
				<img src="pictures/mobileAndTablet/mobileAndTablet1.jpg" class="img-fluid mt-5">
				<div class="text-center mt-5"> <a href="seeAllMobile.php">SEE ALL</a> </div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") 
									ORDER BY product_uploadTimeAndDate DESC' ;
 
						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
				<div>
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet")
									ORDER BY product_uploadTimeAndDate DESC LIMIT 3,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet")
									ORDER BY product_uploadTimeAndDate DESC LIMIT 1,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
				<div>
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") ORDER BY product_uploadTimeAndDate DESC LIMIT 4,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") ORDER BY product_uploadTimeAndDate DESC LIMIT 2,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
				<div>
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") ORDER BY product_uploadTimeAndDate DESC LIMIT 5,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.php' ; ?>

	<!--scripts-->
    <script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
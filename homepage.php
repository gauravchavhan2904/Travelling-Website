<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="homepage.css">
	<a href="index.php"></a>
</head>
<body>
	<div class="bgimg">
	<div class="navbar">
        <div class="logo">
            <h1>Travel</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="#">Places</a></li>
                <li><a href="#">Discounts</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Booking</a></li>
            </ul>
        </div>
        <div class="signup">
            <a href="index.php">Logout</a>
        </div>
    </div>





		
		<div class="body">
			<div class="heading">
				<h1>Travel With Us</h1>
				<br>
				<p>Travel makes one modest. You see what a tiny place you occupy in the world. </p>
				<br>
				<br>
				<a href="#">Learn More</a>
			</div>
			<div class="tours">
				<div class="places">
					<h2>Australia</h2>
					<img src="img1.jpg" style="width: 300px; height: 250px; border-radius: 12px;">
					<br>
					<br>
					<a href="#">Book Now 15% OFF</a>
				</div>
				<div class="places">
					<h2>New York</h2>
					<img src="img2.jpg" style="width: 300px; height: 250px; border-radius: 12px;">
					<br>
					<br>
					<a href="#">Book Now 20% OFF</a>
				</div>
				<div class="places">
					<h2>Thailand</h2>
					<img src="img3.jpg" style="width: 300px; height: 250px; border-radius: 12px;">
					<br>
					<br>
					<a href="#">Book Now 25% OFF</a>
				</div>
	
				
			</div>
		</div>



		<h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus perspiciatis assumenda cumque numquam nemo dolores ex consequatur, dolorem animi suscipit reiciendis. Laudantium at placeat ea laborum quaerat harum quos aut nisi eligendi ab tenetur nihil ullam, eos provident, eveniet minima. Quis neque quaerat facilis impedit incidunt quod pariatur facere ipsa doloremque distinctio corporis sed placeat numquam adipisci voluptatum debitis odit dolor ad, tempora molestiae quam quia voluptas expedita nihil. Quis aperiam suscipit laudantium, itaque, repudiandae mollitia recusandae, quo consequatur veritatis voluptates maiores minus excepturi. Ipsa sint ea doloribus molestiae? Fuga veritatis quis praesentium quisquam excepturi, maxime, consectetur illum incidunt, atque expedita voluptate. Dicta nihil quod explicabo cumque voluptates quo reiciendis! Temporibus sapiente officia modi assumenda eos doloribus, rerum in voluptatem quas ea, facilis, pariatur animi aperiam ex. Culpa impedit temporibus quasi, illum molestiae possimus adipisci repudiandae est? Fugit voluptatibus assumenda esse laudantium! Vitae expedita, necessitatibus ab quia culpa cum provident quam. Obcaecati, unde atque odio beatae animi facilis minima praesentium explicabo aperiam ipsam quaerat? Doloribus modi dolorum laudantium quisquam corrupti perferendis assumenda laboriosam nemo natus dolores tempora obcaecati eum quia inventore animi, dolore aut rerum vero ea exercitationem mollitia placeat, ad temporibus? Beatae voluptate nemo aliquid optio consequuntur expedita tempore?</h2>
        <div class="footer">
			<a href="#">Copyright</a>
			<a href="#">Terms and Conditions</a>
			<a href="#">Privacy Policy</a>
			<a href="#">Complaints</a>
		</div>
		
       
      
      <a href="logout.php">Logout</a>
    </div>
</body>
</html>
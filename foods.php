<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Foods - Bhaccasyoniztas Beach Resort Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
					<a href="index123.php"><img src="images/logo.png" alt="LOGO" height="112" width="118"></a>
				</div>
				<div id="navigation">
					<ul>
						<li>
							<a href="index123.php">Home</a>
						</li>
						<li>
							<a href="about.php">About</a>
						</li>
						<li>
							<a href="rooms.php">Rooms</a>
						</li>
						<li>
							<a href="dives.php">Dive Site</a>
						</li>
						<li class="selected">
							<a href="foods.php">Food</a>
						</li>
						<li>
							<a href="news.php">News</a>
						</li>
						<li>
							<a href="contact.php">Contact</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="contents">
				<div class="box">
					<div>
						<div class="body">
							<h1>Food</h1>
							<ul id="foods">
								<?php 
									include ('control.php');
									$get_data = new data();
									$select = $get_data->select_rooms();
								?>
								<?php 
										foreach($select as $se){ ?>
										<li>
											<h2><a href="foods.php">SeaFood Special</a></h2>
											<div class="infos">
												<a href="foods.php"><img src="<?php echo $se['image'] ?>" alt="Img" height="169" width="780"><span class="cover"><?php echo $se['name'] ?></span></a>
												<p>
													<span><?php echo $se['description'] ?></span> 
												</p>
											</div>
										</li>
									<?php }
									?>
								// <li>
									// 	<h2><a href="foods.php">Sumptuous Desserts</a></h2>
									// 	<div class="infos">
										// 		<a href="foods.php"><img src="images/desserts.jpg" alt="Img" height="169" width="780"><span class="cover"></span></a>
										// 		<p>
											// 			<span>Choco Ice Cream Sandwich</span> I'm a product overview. Here you can write more information about your product. Buyers like to know ...
											// 		</p>
											// 	</div>
											// </li>
											// <li>
												// 	<h2><a href="foods.php">Buffet</a></h2>
												// 	<div class="infos">
													// 		<a href="foods.php"><img src="images/buffet.jpg" alt="Img" height="169" width="780"><span class="cover"></span></a>
													// 		<p>
														// 			<span>Mixed Buffet</span> I'm a product overview. Here you can write more information about your product. Buyers like to know ...
														// 		</p>
														// 	</div>
														// </li>
								</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<ul class="navigation">
					<li>
						<a href="index123.php">Home</a>
					</li>
					<li>
						<a href="about.php">About</a>
					</li>
					<li>
						<a href="rooms.php">Rooms</a>
					</li>
					<li>
						<a href="dives.php">Dive Site</a>
					</li>
					<li class="active">
						<a href="foods.php">Food</a>
					</li>
					<li>
						<a href="news.php">News</a>
					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
				</ul>
				<div id="connect">
					<a href="http://pinterest.com/fwtemplates/" target="_blank" class="pinterest"></a> <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a>
				</div>
			</div>
			<p>
				© 2023 by BHACCASYONIZTAS BEACH RESORT. All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>
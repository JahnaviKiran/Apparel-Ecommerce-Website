<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> E commerce</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">
		<div class="container1">
			<div class="navbar">
				<div class="logo"> 
					<a href="cart2.html"><img src='ecommerce/images/logo.png' width="150px" ></a>
				</div>
				<nav>
					<ul id="MenuItems">
						<li> <a href="index.php"> Home </a> </li>
						<li> <a href="products1.php"> Products </a> </li>
						<li> <a href=""> About</a> </li>
						<li> <a href=""> Contact </a> </li>

					</ul>
				</nav>
				<a href="cart1.php"><img src="cart-icon.png" width="20px" height="20px"></a>
				<img src="ecommerce/images/menu.png" class="menu-icon" onclick="menutoggle()">

			</div>
			<div class="row1">
				<div class="col-1">
					<h1>
						Welcome To  <br> Apparel
					</h1>
					<p>Products of Equisite Style and Quality!
						<br> Find Your Dream Outfit Today.
					</p>
					<br>
					<a href="#opening" class="button" > Explore Now &#x2192;</a>
				</div>
				<div class="col-1"> <img src="ecommerce/images/bg6.png"></div>
			</div>

		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<!-- featured categories-->
	<h2 class="title" id="opening">Featured Products </h2>

	<div class="row2">
		<div class="col-2"> 
			<img src="ecommerce/images/clothes1mod.jpg" >
			<div class="overlay"></div>
			<div class="description"> 
				<h3>Tops & Hoodies</h3>
				<hr>
				<p> Discover your style</p>
				<br>
				<a href="products1.php" class="button"> View More</a>
			</div>
			
		</div>

		
		<div class="col-2"> <img src="ecommerce/images/bags3.jpg">
			<div class="overlay"></div>
			<div class="description"> 
				<h3>Handbags</h3>
				<hr>
				<p> convinience and style </p>
				<br>
				<a href="products1.php" class="button"> View More</a>
			</div>
			
		</div>
		
		<div class="col-2"><img src="ecommerce/images/shoes5.png" >
			<div class="overlay"></div>
			<div class="description"> 
				<h3>Shoes</h3>
				<hr>
				<p> Combination of comfort and style</p>
				<br>
				<a href="" class="button"> View More</a>
			</div>
			
		</div>
		<div class="col-2"><img src="ecommerce/images/watches9mod.png">
			<div class="overlay"></div>
			<div class="description"> 
				<h3>Watches</h3>
				<hr>
				<p> Equisite designs of premium quality</p>
				<br>
				<a href="products1.php" class="button"> View More</a>
			</div>
			
		</div>
		
	</div>

	<br>
	<br>
	<hr size="8 " width=" 100%" color="dimgray">

	<!-- footer-->

	<div class="footer">

		<div class="container1">
			<div class="row3">
				<div class = "footer-col-1">
					<h3> Download Our App</h3>
					<p>Download App for Andriod and iOS</p>
				</div>
				<div class = "footer-col-2">
					<img src="ecommerce/images/logo.png">
					<p>Our Purpose Is To Provide Sustainable Goods Of Quality</p>
				</div>
				<div class = "footer-col-3">
					<h3> Useful Links</h3>
					<ul>
						<li>Coupons</li>
						<li>Blog</li>
						<li>Return Policy</li>
						<li>Affiliations</li>
					</ul>
				</div>
				<div class = "footer-col-4">
					<h3> Socials</h3>
					<ul>
						<li>Facebook</li>
						<li>Instagram</li>
						<li>Twitter</li>
						<li>Email</li>
					</ul>
				</div>
			</div>

			<div class="copyright"> 
				<p>Copyright &copy; Apparel</p>
			</div>
		</div>
	</div>
	<!-- JS for toggle menu-->
	<script>
		var MenuItems = document.getElementById("MenuItems");
		MenuItems.style.maxHeight = "0px";
		function menutoggle()
		{
			if(MenuItems.style.maxHeight == "0px")
			{
				MenuItems.style.maxHeight="200px";
			}
			else
			{
				MenuItems.style.maxHeight="0px";
			}
		}
	</script>
</body>
</html>


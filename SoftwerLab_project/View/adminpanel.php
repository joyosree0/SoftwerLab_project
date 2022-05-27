<!DOCTYPE HTML>
<html lang="en">

<head>
	
	<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 14px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
}
		
	</style>
	<link href="css/style.css" rel="stylesheet">
	

	
</head>

<body>
	<!-- navbar -->
	<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<!-- Responsive navbar -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
					<h1 class="brand"><a href="index.html">BookShelf</a></h1>
					<!-- navigation -->
					<nav class="pull-right nav-collapse collapse">
						<ul id="menu-main" class="nav">
							<li><a href="booklist.html">Booklist</a></li>
							<li><a href="writerlist.html">Writers</a></li>
							<li><a href="genrelist.html">Genre</a></li>
							<li><a href="registraton.php">Registration</a></li>
							<li><a href="audiobook.html">Audio Book</a></li>
							<li><a href="about.html">About Us</a></li>
							<div class="dropdown">
									<button class="dropbtn">Log In</button>
										<div class="dropdown-content">
												<a href="adminlogin.html">Admin</a>
												<a href="userlogin.html">User</a>
												
										</div>
							</div>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	
	<section class="spacer green">
		<div class="container">
			<div class="row">
				<div class="span6 alignright flyLeft">
					<h1><b>Admin Panel</b></h1>
				</div>
				
				
			</div>
		</div>
	</section>
	<section id="about" class="section">
		<div class="container">

		<div class="row">
			<a class="btn btn-success" href="addbook.php">Add Book</a>
		</div>
			
			<div class="row">
				
				<table>
					<tr>
						<th>SL</th>
						<th>Book Name</th>
						
					
					
					</tr>
					<tr>
						<td>01</td>
						<td>Shemol chaya</td>
					
						
					</tr>
					<tr>
						<td>02</td>
						<td>Nexus</td>
					
						
					</tr>
					
				</table>

			</div>
			
			
		</div>
		<!-- /.container -->
	</section>
	
	
	<footer>
		<div class="container">
			<div class="row">
				<div class="span6 offset3">
					
					<p class="copyright">
						&copy; BookShelf. All rights reserved.
						<div class="credits">
				
							Designed by - Us
						</div>
					</p>
				</div>
			</div>
		</div>
	
	</footer>
	<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/jquery.localScroll.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/inview.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>

</body>

</html>

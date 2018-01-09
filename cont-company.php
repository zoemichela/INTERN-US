<!DOCTYPE HTML>
<HTML>

<head>
	<title>Home | InternUs</title>
	<meta name ="viewport" content = "width = device-width, initial-scale = 1">
	<link rel = "stylesheet" href="css/horizontal.css"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/radio.js"></script>

</head>

<body>
	<div class = "wrap" style="background-image: url('images/header2.jpg')">
		<header>
			<div class="logo">
				<a href="index.php"><img src="images/logo.png"/></a>
			</div>
			<div class="nav">
				<ul style="margin-top: 10px; margin-bottom: 10px;">
					<li><a href="index.php" id="loginform"><img src="images/logout.png"/>LOGOUT</a></li>
					<li><a href="companyprofile.php" id="joinform"><img src="images/profile.png"/>MY PROFILE</a></li>							
				</ul>
			</div>
<div class="intro">
	<h2><span>Launch your career in minutes<br>&nbspSearch Internships</span></h2>
</span></h2>
</div>							
</header>
</div>
<div class="container-menu">
	<div class="row">
		<div id="cssmenu">
			<ul>
				<li><a href="index-company.php">INTERNSHIP LISTING</a></li>
				<li class="active"><a href="companyprofile.php">MY PROFILE</a></li>
			
			</ul>
		</div>
	</div>
</div>

<div class="container">
  <form action="companyprofile.php">

    <label for="company_name">Company Name</label>
    <input type="text" id="company_name" name="company_name" placeholder="Company Name">

    <label for="company_id">Registered Company Number</label>
    <input type="text" id="company_id" name="company_id" placeholder="Registered Company Number">

    <label for="company_email">Company Email</label>
    <input type="text" id="company_email" name="company_email" placeholder="Company Email">

    <label for="password">Password</label>
    <input type="text" id="password" name="password" placeholder="password">

    <label for="password">Confirm Password</label>
    <input type="text" id="password" name="password" placeholder="password">

    <label for="company_site">Website</label>
    <input type="text" id="company_site" name="company_site" placeholder="Company Website">

    <label for="company_about">About the Company</label>
    <textarea name="company_about" id="company_about" placeholder="..." style="height:200px"></textarea>

    <label for="company_logo">Company Logo </label>
    <input type='file'/><br><br>

    <input id="submit_company" type="submit" value="Submit">

  </form>
</div>
</body>

</HTML>
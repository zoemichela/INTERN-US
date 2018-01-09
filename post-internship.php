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
				<li><a href="companyprofile.php">MY PROFILE</a></li>
				<li class="active"><a href="post-internship.php">POST INTERNSHIP</a></li>
				<li><a href="view-internship.php">VIEW INTERNSHIPS</a></li>
				
			</ul>
		</div>
	</div>
</div>

<div class="container">
  <form action="view-internship.php">

    <label for="internship_name">Internship Title</label>
    <input type="text" id="internship_name" name="internship_name" placeholder="Internship Title">

    <label for="internship_description">Internship Description</label>
    <input type="text" id="internship_description" name="internship_description" placeholder="Internship description">

    <label for="internship_location">Internship Location</label>
    <input type="text" id="student_id" name="student_id" placeholder="Student Number">

    <input id="submmit_student" type="submit" value="Submit">

  </form>
</div>

</body>

</HTML>
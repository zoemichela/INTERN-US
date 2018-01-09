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
					<li><a href="#" id="loginform"><img src="images/login.png"/>LOGIN</a></li>
					<li><a href="#" id="joinform"><img src="images/join.png"/>JOIN</a></li>							
				</ul>
				<div class="login">
					<div class="arrow-login"></div>
					<div class="formholder-login">
						<div class="randompad-login">
							<script type="text/javascript">
							function show_hide(show, hide)
							{
								document.getElementById(show).style.display="block";
								document.getElementById(hide).style.display="none";
							}</script>


							<form method="post">
								<input type="radio" name="option" value="student-login" onClick="show_hide('student-login', 'company-login')" checked />Student
								<input type="radio" name="option" value="company-login" onClick="show_hide('company-login', 'student-login')" />Company

								<div id="student-login" style="display: block;">	
									<label name="student_id">Student ID</label>
									<input type="text" placeholder="Enter your Student ID" />
									<label name="student_password">Password</label>
									<input type="password" placeholder="Password" />
									<input id="login_student" type="submit" value="Submit" formaction="studentprofile.php"/>
								</div>
								<div id="company-login" style="display: none;">
									<label name="company_id">Company ID</label>
									<input type="text" placeholder="Enter your company ID" />
									<label name="company_password">Password</label>
									<input type="password" placeholder="Password" />
									<input id="login_company" type="submit" value="Submit" formaction="companyprofile.php"/>
								</div>
								
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="join">
				<div class="arrow-join"></div>
				<div class="formholder-join">
					<div class="randompad-join">
						<script type="text/javascript">
						function show_hide(show, hide)
						{
							document.getElementById(show).style.display="block";
							document.getElementById(hide).style.display="none";
						}</script>
						<form method="post" action="aaa.php">
							<input type="radio" name="option" value="student-join" onClick="show_hide('student-join', 'company-join')" checked />Student
							<input type="radio" name="option" value="company-join" onClick="show_hide('company-join', 'student-join')" />Company

							<div id="student-join" style="display: block;">	
								<label name="student_id">Student number</label>
								<input type="text" placeholder="Student number" />
								<label name="student_name">Name</label>
								<input type="text" placeholder="Name" />
								<label name="student_surname">Surname</label>
								<input type="text" placeholder="Surname" />                                                    
								<label name="student_email">Student Email</label>
								<input type="email" placeholder="Your Email" />
								<label name="student_password">Create Password</label>
								<input type="password" placeholder="Create Password" />
								<input id="submit_student" type="submit" value="Submit" formaction="cont-student.php"/>
							</div>
							<div id="company-join" style="display: none;">
								<label name="company_id">Company ID</label>
								<input type="text" placeholder="Company ID" />
								<label name="company_name">Company Name</label>
								<input type="text" placeholder="Company Name" />
								<label name="company_email">Company Email</label>
								<input type="email" placeholder="Company Email" />
								<label name="company_password">Create Password</label>
								<input type="password" placeholder="Create Password" />
								<input id="submit_company" type="submit" value="Submit" formaction="cont-company.php"/>
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="js/index.js"></script>
	<script src="js/index2.js"></script>
</div>
<div class="intro">
	<h2><span>Launch your career in minutes<br>&nbspSearch Internships</span></h2>
</div>							
</header>
</div>
<div class="container-menu">
	<div class="row">
		<div id="cssmenu">
			<ul>
				<li class="active"><a href="#">HOME</a></li>
				<li><a href="#">ARTS</a></li>
				<li><a href="#">EMS</a></li>
				<li><a href="science-out.php">SCIENCE</a></li>
				<li><a href="#">LAW</a></li>
				<li><a href="#">HEALTH</a></li>
				<li><a href="#">EDUCATION</a></li>
			</ul>
		</div>
	</div>
</div>




<!-- The form for this page is called internship.php
all that info needs to be sent here... i am not sure how to style that
but will figure it out just put the info in the database solong so i 
can figure out how to access it -->
<h3><CENTER><BR><BR><BR>INTERNSHIP LISTINGS GO HERE</CENTER></h3>
<p>GET ALL INFO FROM DATABASE AND DISPLAY HERE</p>




</body>

</HTML>
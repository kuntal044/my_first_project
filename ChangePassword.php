<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<link rel="stylesheet" type="text/css" href="ChangePasswordstyle.css">
</head>
<body style="overflow-x: hidden;">
    <section class="header">
        <div class="logo"><a href="home.php"><img src="BuslogoW.png" alt=""></a></div>
        <nav class="navbar">
            <ul class="nav-link">
                <li class="btnlink"><a href="home.php">HOME</a></li>
                <li class="btnlink"><a href="Feedback.php">FEEDBACK</a></li>
                <li class="btnlink"><a href="About.php">ABOUT</a></li> 
            </ul>
            <!-- <img src="menu.png" alt="" class="menu-btn"> -->
       </nav>
    </section>
	<div class="login-form">
		<img src="avatar.png" class="avatar">
		<h1>Forgot Password?  </h1>
		<form action="login.php" method="post">
			<p>New Password</p>
			<input type="password" name="pass" placeholder="Enter New Password">
			<p>Confirm New Password</p>
			<input type="password" name="newpass" placeholder="Enter New Password">
			<input type="submit" name="sub" value="Submit">
		</form>
	</div>
</body>
</html>
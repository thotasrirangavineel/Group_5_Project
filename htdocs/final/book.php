<?php
	session_start();
	include 'sql.php';
	
	
	if(isset($_SESSION['urn'])) {
		header('location: urn.php');
	}
	
	if(!$_SESSION['logged_in'])
		header('location: first.php');

	if (isset($_POST['facs_btn'])) {
		$_SESSION['machine'] = "facs";
		header("location: index.php");
	}

	if (isset($_POST['confocal_btn'])) {
		$_SESSION['machine'] = "confocal";
		header("location: index.php");      
	}
	
?>
<html>
<head>
	<link href = "styles/book_css.css" rel = "stylesheet" type = "text/css">
	<link href = "styles/header.css" rel = "stylesheet" type = "text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css.css">
</head>
<body>

	<header>
		<div class="wrapper">
			<div class="logo"><img src="styles/logo.png" alt="logo"></div> 
			</br></br></br>
			</br>  
			<div>
				<p align="right" class="style1"><font color="#FFFFFF" size="5px">Biosciences & Biomedical Engineering</font></p>    
			</div>
		</div>
	</header>
	<!--header finish (iiti logo)-->

<div class="sidebar light-grey" style="width:25%">

  <a href="first.php" class="button">Home</a>
  <a href="checkout.php" class="button">Logout</a>
  <a href="bsbe.iiti.ac.in" class="button">Mainsite</a>
</div>
<div class="mainbody light-grey" style="width=70%">
        <h3>Instructions to equipment booking :</h3>
        <br><p> -This site is to help you to book slot for the equipment available in the FACS and confocal lab, note that booking can only be done for tomorrow and its following days</p>        <br><P> -Please select the machine in this page and then in its next page select date and time slot</p>
        <br><p> -After booking slot you will receive a mail regarding payment. Click the link and pay accordiingly</p>
        <br><p> -Once your payment is successful your slot will be booked and can be checked in previous bookings</p>
        </div>
<div class="footer" style="width:100%">
<p>This site belongs to IITI</p>
  <p>Contact : <a href="mailto:cse150001036@iiti.ac.in">cse150001036@iiti.ac.in</a>.</p>
  </div>
	<form id = "facs_form" method="post" action="book.php">
		<input type="submit" name="facs_btn" value="Book FACS Machine">
	</form>

	<form id = "confocal_form" method="post" action="book.php">
		<input type="submit" name="confocal_btn" value="Book Confocal Microscopy Machine">
	</form>
	<!-- Sidebar -->


</body>
</html>
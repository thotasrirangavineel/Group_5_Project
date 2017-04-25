<?php
session_start();
include 'sql.php';

if (isset($_POST['submit_btn']))
header("location: checkout.php");

if(($_SESSION['amo'])==='500' || ($_SESSION['amo'])==='1000'){
if(($_SESSION['u_code'])!== '0'){
$s=1;
$pno = $_SESSION['s_no'];
echo "$s "." $pno";
$sql = "UPDATE payment SET status='$s' WHERE p_no='$pno'";
if($conn->query($sql) === TRUE)header("location: checkout.php");
}
}

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css.css">
</head>
      <body>
            <form method="post" action="transaction.php">

                   <tr>
			<td>Unique code:</td>
			<td><input type="int" name="u_code"></td>
		   </tr>
   		
                   <tr>
		        <td>Amount:</td>
		        <td><input type="int" name ="amount"></td>
                   </tr>

		   <td><input type="submit" name="submit_btn" value="submit"></td>
            </form>
      <!-- Sidebar -->
<div class="sidebar light-grey" style="width:25%">

  <a href="first.php" class="button">Home</a>
  <a href="checkout.php" class="button">Logout</a>
  <a href="bsbe.iiti.ac.in" class="button">Mainsite</a>
</div>
<div class="mainbody light-grey" style="width=70%">
        <h3>Introduction to equipment booking :</h3>
	<br><p> -This site is to help you to book slot for the equipment available in the FACS and confocal lab</p>
        <br><p> -New users must enter your details and register your account</p>
        <br><P> -Please select the machine in this page and then in its next page select date and time slot</p>
        <br><p> -After booking slot you will receive a mail regarding payment. Click the link and pay accordiingly</p>
        <br><p> -Once your payment is successful your slot will be booked and can be checked in previous bookings</p>
        </div>
<div class="footer" style="width:100%">
<p>This site belongs to IITI</p>
  <p>Contact : <a href="mailto:cse150001036@iiti.ac.in">cse150001036@iiti.ac.in</a>.</p>
  </div>
</body>
</html>
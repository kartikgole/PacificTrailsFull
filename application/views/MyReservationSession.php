<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
session_start();
$db = new mysqli("localhost","root","","pacifictrails");
  // this will trigger when submit button click
$db = new mysqli("localhost","root","","pacifictrails");

$_SESSION['resmsg']="";
$email="";
$arrival_date="";
$activity="";
$package="";

$_SESSION['email']="";
$_SESSION['fname']="";
$_SESSION['lname']="";
$_SESSION['phone']="";
$_SESSION['arrivalDate']="";
$_SESSION['Adescription']="";
$_SESSION['Pdescription']="";
$_SESSION['date']="";
$_SESSION['packageid']=1;
$_SESSION['activityid']=1;
$error=0;
$_SESSION['arrival_dateerr']="";
$_SESSION['emailerr']="";
//server side validation for myreservations table
if ( isset( $_POST['myreservations'] ) ) 
{

	
	$email=$_POST['email'];

//  function test_input($data) {
//   $data = trim($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }
//validating email
	
	// if (empty($_POST['email'])) {
 //    $emailerr = "email is required";
	// $error=1;
	//  $_SESSION['emailerr']=$emailerr;
 //    }
	// else
	// {
	// 	$email = test_input($_POST['email']);
 //    // check if e-mail address is well-formed
 //    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 //      $emailerr = "Invalid email format"; 
	//   $error=1;
	//   $_SESSION['emailerr']=$emailerr;
 //    }
	// }

	

	if($error==1)
	{
	//header("Location:myreservation.php");
	//exit(0);
	}	
	else
	{
//Fetching the activity id for the corresponding activity from the database
		$query = "SELECT C.email,C.fname,C.lname,C.phone,R.arrivalDate,A.description as Adescription,P.description as Pdescription,W.date FROM whenres W, activity A, package P,client C,reservationyurt R WHERE C.email='".$_POST['email']."' and P.packageid=R.packageid and R.resid=C.resid and A.activityid=C.activityid and A.activityid=W.activityid and C.clientid=W.clientid";
		
		if($result = mysqli_query($db, $query)){
			if(mysqli_num_rows($result) > 0){
				
				while($row = mysqli_fetch_array($result))
				{

					$_SESSION['email']=$row['email'];
					$_SESSION['fname']=$row['fname'];
					$_SESSION['lname']=$row['lname'];
					$_SESSION['phone']=$row['phone'];
					$_SESSION['arrivalDate']=$row['arrivalDate'];
		//converting arrival date to mm/dd/yyyy to display it on the form
					$christmas = $row['arrivalDate'];;
					$parts = explode('-',$christmas);
					$adate = $parts[1] . '/' . $parts[2] . '/' . $parts[0];
					$_SESSION['arrivalDate']=$adate;
					
					$_SESSION['Adescription']=$row['Adescription'];
					$_SESSION['Pdescription']=$row['Pdescription'];
					$_SESSION['date']=$row['date'];
		//converting when date to mm/dd/yyyy to display it on the form
					$christmas = $row['date'];;
					$parts = explode('-',$christmas);
					$wdate = $parts[1] . '/' . $parts[2] . '/' . $parts[0];
					$_SESSION['date']=$wdate;
					
					
					
					
		//echo $_SESSION['Adescription'];
					$query2 = "SELECT packageid FROM package WHERE description='".$row['Pdescription']."'";
					$result2=$db->query($query2);
					$row1 = $result2->fetch_array();
					$packageid=$row1[0];
					$_SESSION['packageid']=$packageid;

					$query3 = "SELECT activityid FROM activity WHERE description='".$row['Adescription']."'";
					$result3=$db->query($query3);
					$row2 = $result3->fetch_array();
					$activityid=$row2[0];
					$_SESSION['activityid']=$activityid;




				}

				
				mysqli_free_result($result);
			} else{
				$_SESSION['resmsg']="No reservations found";
			}
		} else{
			$_SESSION['resmsg']="No reservations found";
		}

	}

}
?>
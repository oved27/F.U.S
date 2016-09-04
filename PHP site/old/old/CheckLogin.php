<?php
$name=$_POST['UserName'];
$password=$_POST['UserPassword'];
$authorize=authorize($name,$password);
 //echo "welcome ..." . $authorize;
$Role = CheckRole($authorize);

function authorize($name,$password) 
{
	$dbcnx = mysqli_connect(
		"localhost", "root", "","fus");

	mysqli_select_db($dbcnx,"fus");
	$query = "SELECT * FROM users where UserName = '$name' AND Password ='$password'";
	$result = mysqli_query($dbcnx,$query);
if ($result!=false){
	
	if(mysqli_num_rows($result)==0) 
	{
		echo "check your name and password";
		exit();
	}
	else {
		
		$query_data = mysqli_fetch_row($result); 
		return $query_data[0];
	}
	
}	
	
}


function CheckRole($name) 
{
	$dbcnx = mysqli_connect(
		"localhost", "root", "","fus");

	mysqli_select_db($dbcnx,"fus");
	$query = "SELECT * FROM users where UserName = '$name'";
	$result = mysqli_query($dbcnx,$query); 
	if ($result){
		if(!mysqli_num_rows($result)) 
	{
		echo "wrong name";
		exit();
	}
	else {
		$query_data = mysqli_fetch_row($result);
		if($query_data[6]==0)
		{
			echo "אחראי משמרת";
			return 0;
		}		
		else if($query_data[6]==1)
		{
			echo "מנהל";
			return 1;
		}
		else 
			{
				echo "מפתח";
				return 2;
			}
	}
	}

}


?> 
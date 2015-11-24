
<?php
//$adid=$_SESSION['ad_id'];
if(isset($_POST['ad_submit']))
	{

global $query;
	$name = $_POST['ad_name'];
	$username = $_POST['ad_username'];
	$password = md5($_POST['ad_password']);

$usertype = $_POST['ad_usertype'];
	
	
$status = $_POST['ad_status'];


if(isset($_GET['ed_id']))
	{
		$id=$_GET['ed_id'];
$sql=$db->query ("UPDATE admin SET ad_name='$name',ad_username='$username',ad_password='$password',ad_usertype='$usertype',ad_status='$status' WHERE ad_id='$id'");

if($sql)
{

	$msg = "<div class='alert alert-success'>Updated Sucessfuly</div>";
}

	}

	else
	{

	$query=$db->query("insert into admin values('','$name','$username','$password','$usertype','$status')");

	}
		
	
	
	
	//$db->debug();


	if($query)
	
	{
	$msg = "<div class='alert alert-success'>Inserted Sucessfuly</div>";
	
	}
else
{
//echo "fail";
 }
}



//////////////////////////////////////////////////////////////////////////////////////////EDIT


if(isset($_GET['row1_id']))
						{
	
	
	if(isset($_POST['loc_edit']))
	{
	$location = $_POST['loc_location'];
	
	
	
	
	if($sql)
	
	{
	
	echo "Update Redord Successfully";
	}
else
{
echo "fail";
 }
}
}


//////////////////////////////////////////////////////////////////////////////////delete


			
							
if(isset($_GET['row_id']))
{


$id=$_GET['row_id'];

// sql to delete a record
$sql = $db->query("UPDATE location SET loc_status='2' WHERE loc_id=$id");

if ($sql)
{
    header('location:'.$_SERVER['HTTP_REFERER']);
    echo "Record deleted successfully";
}
 else
 {
    echo "Error deleting record: "; //. $conn->error;
 }
}
?>
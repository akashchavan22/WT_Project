<?php 


$db = mysqli_connect("localhost","root","","wt_project") or die(mysqli_error($db));
if($db)
{
	echo "Database has been Connected Successfully..!!";
}
else
{
	echo "Error";
}

?>
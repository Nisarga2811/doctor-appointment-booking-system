<?php
function check_login()
{
if(strlen($_SESSION['res_id'])==0)
	{
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="res-login.php";
		$_SESSION["res_id"]="";
		header("Location: http://$host$uri/$extra");
	}
}
?>
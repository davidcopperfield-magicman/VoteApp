<?php
	session_start();
	error_reporting(E_ALL);
	ob_start();
	include_once ("header.php");
	require_once("config.php");
	require_once("helperFunctions.php");
	require_once("dbhelper.php");
	include_once ("resources.php");

	try
	{
		if(isset($_POST['username']) && isset($_POST['password']))
		{
			$userName = $_POST['username'];
			$password = $_POST['password'];
			$ipAddr = $_SERVER['REMOTE_ADDR'];


			$dbHelper = new DBHelper(session_id(), $_SERVER);

			$userCredentials = $dbHelper->getUserCredentials($userName);
			
			if(password_verify($password, $userCredentials[Literals::USER_CREDENTIALS_FIELD_NAMES['PASSWORD_HASH']]))
			{
				$userDetails = $dbHelper->getUserDetails($userName);

				$userAddress = $dbHelper->getUserAddress($userName);
				$dbHelper->createUserSession($userName);
				$_SESSION['user_name'] = $userName;
				$_SESSION['address'] = $userAddress;
				$_SESSION['loggedin'] = true;

				header("location:ic_overview.php");
			}
			else
			{
				header("location:login.php?msg=1");
			}

		}
		else
		{
			header("location:login.php?msg=1");
			ob_end_flush();
			exit();
		}
	}
	catch(Exception $ex)
	{
		echo "Error: " . $ex->getMessage();
	}

	include ("footer.php");
	ob_end_flush();
?>

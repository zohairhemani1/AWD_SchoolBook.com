<?php

	header('Access-Control-Allow-Origin: *');
	include 'headers/connect_to_mysql.php';      // Connection to Mysql Database.
	
	$username = $_POST['username-login'];
	$password = $_POST['password-login'];
	$password_md5 = md5($password);
	
	$query = "SELECT count(*) from users WHERE username=:username AND password =:password";
	$sth = $dbh->prepare($query);
	$sth->bindValue(':username',$username);
	$sth->bindValue(':password',$password_md5);
	$sth->execute();
	$rows = $sth->fetch(PDO::FETCH_NUM);
	
	if($rows[0]==1)
	{
		echo "success";
	}
	else
	{
		echo "incorrect credentials";
	}
	
	
	
?>
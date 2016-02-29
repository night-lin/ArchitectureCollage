<?php 
include_once("connect.php");
session_start();
$name = $_POST["login-user"];
$_SESSION["id"]=$name;
$_SESSION["menu_item"] = "project_research";
$pwd = $_POST["login-password"];
$jud = 0;
	echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
	$result = mysqli_query($mysqli,"SELECT * FROM user WHERE loginNumber ='$name'");
	if(mysqli_num_rows($result)>0)
	while($row = mysqli_fetch_array($result))
	{
		//echo "aa";
		if($row['loginNumber'] === $name&&$row['password'] === $pwd)
		{
			echo"
            <script>
            window.location.href='../html/research_project/research_project.php'</script>";	
            $jud = 1;	
		}
		if( $jud==0)
		{
			echo"
            <script>alert('账号或密码错误');
            window.location.href='../index.php'</script>";
		}

	}



?>

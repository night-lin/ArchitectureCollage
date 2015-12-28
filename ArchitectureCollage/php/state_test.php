<?php
	if(!isset($_SESSION["id"]))
	{
		echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
		echo"
            <script>alert('登录信息过期，请重新登录');
            window.location.href='../index.php'</script>";
	}
?>
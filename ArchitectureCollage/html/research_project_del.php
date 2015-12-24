<?php
	 include_once("../php/connect.php");
	 if(!isset($_POST["delete_data"]))
	 {
	 	 echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
     	 echo"
          <script>
          window.location.href='../html/research_project_add.php';alert('未选择数据!')</script>";
	 }
	 //echo(count($delete_id));
	 else{
	 	 $delete_id = $_POST["delete_data"];
	 
		 $ok=0; 
		 for($i=0;$i<count($delete_id);$i++)
		 {
		 	$sql="DELETE FROM research_project WHERE `id`= '$delete_id[$i]'";
		 	mysqli_query($mysqli,$sql);
		 	$ok=1;
		 	
		 }
		 //echo $ok;
		 echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
	     echo"
	          <script>alert('删除成功！,共删除".$i."条数据');
	          window.location.href='../html/research_project_add.php'</script>";
	      }
?>
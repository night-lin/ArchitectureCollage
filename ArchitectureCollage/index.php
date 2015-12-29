<?php
	session_start();
	session_destroy();
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
  <title>建筑学院管理系统-登录</title>
  <link href="css/base.css" type="text/css" rel="stylesheet"/>
	  <script language="javascript"  src="js/index.js" ></script>
	  
	  <script language="javascript"  src="js/jquery.js" ></script>
	  <script type="text/javascript">
	  $(function(){
   	setSize();
   }
   	)
       $(window).resize(function(){
       		setSize();
       });
        function setSize() {

        	var window_height = $(window).height();
        	

            var height = $("body").height(); 
			var width = $("body").width();
            var min_height = parseInt(height);
            var min_width = parseInt(width);
            //alert("left");
         
            //$("#bgConsure").css('height', min_height*0.29);
            $("#login-body").css('height', min_height*0.80);
            $("#login-head").css('width', min_width*0.32);
            $("#login-head").css('margin-top', min_height*0.29);
            var footer_mt =  parseInt(window_height) - parseInt($("#login-area").height)- min_height*0.29;
           // $("#footer").css('margin-top', footer_mt);
        };
    </script> 
 
</head>

<body>
	<div id="login-body">
	</div>
	<div id="bgConsure">
	</div>
	<div id="login-area">
	<div id="login-head">
		<h3><img src="image/logo2.png"></h3>
	</div>
	<div id="login-box">
		<form action="php/login.php" method="post">
			<div class="input-box">
				<input placeholder="工号:" id="login-user" type="text"   name="login-user" required="required"/>
				</div>
			
			<div class="input-box">
				<input placeholder="密码:" id="login-pass" type="password"   name="login-password" />
			</div>
			<div class="submit-box">
		        <input type="submit"  class="btn-blue btn-default" id="sub-login" value="登&nbsp;&nbsp;&nbsp; 录" />
		   	</div>
		</form>
	</div>
	</div>		
	<div id="footer" class="login_foot">
	Designed by Lin
	</div>
	
</body>
</html>
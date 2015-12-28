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
            var height1 = $("#bgConsure").height();
            var height2 = $("#footer").height();
            var number = parseInt(height1);
            var right_nav = $("#right-nav").height();
            var min_height = number - 110;
             var r_min_height = min_height - right_nav;
            $("#login-content").css('min-height', min_height);
            
            //alert(left);
        };
    </script> 
</head>

<body>

	<div id="bgConsure" style="position: absolute; z-index: -1px; height: 100%; width: 40px">
    </div>

	
		<div id="login-box">
			<form action="php/login.php" method="post">
				<div id="login-head">
					<h3><img src="image/form-logo1.png"></h3>
				</div>
				<div class="input-box">
				<input placeholder="账号:" id="login-user" type="text"   name="login-user" required="required"/>
				</div>
				<div class="input-box">
				<input placeholder="密码:" id="login-pass" type="password"   name="login-password" required="required"/></br>
				</div>
				
				<div class="submit-box">
	           	 <input type="submit"  class=" btn-success btn-submit" id="sub-login" value="登&nbsp;&nbsp;&nbsp; 录" />
	           	</div>
			</form>
		</div>		
	<div id="footer">
    <p>Designed by Code.R</p>
	</div>
</body>
</html>
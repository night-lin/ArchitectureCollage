<!Doctype html>
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
  <title>建筑学院管理系统</title>
  <script type="text/javascript" src="../../js/jquery.min.js"></script>  
  <script type"text/javascript">
  //验证表单信息是否有空
   $(function(){
                var ok1=false;
                var ok2=false;
                var ok3=false;
                var ok4=false;
                var ok5=false;
                var ok6=false;
                var ok7=false;
                var ok8=false;        
               $('.submit').click(function(){
                if($('select[name="projectType"]').val().length >0)
                  {
                    
                    ok1=true;
                  }
                if($('input[name="projectMaster"]').val().length > 0)
                  {
                    ok2=true;
                  }
                if($('input[name="projectTime"]').val().length >= 1)
                  {
                    ok3=true;
                  }
                if($('input[name="projecthepartment"]').val().length >= 1)
                  {
                    ok4=true;
                  }
                if($('input[name="projectMember"]').val().length >= 1)
                  {
                    ok5=true;
                  }
                if($('select[name="projectState"]').val().length >= 1)
                  {
                    ok6=true;
                  }
                if($('input[name="projectName"]').val().length >= 1)
                  {
                    ok7=true;
                  }
                if($('input[name="projectFunding"]').val().length >= 1)
                 { 
                  ok8=true;
                }
                if(ok1==true&&ok2==true&&ok3==true&&ok4==true&&ok5==true&&ok6==true&&ok7==true&&ok8==true)
                      $('.submit').submit();
                else{
                        alert("添加数据时，请填写所有信息!");
                        //alert($('select[name="projectType"]').val().length >0);
                        //alert(ok2);
                        return false;
                      }
                  });
                //提交按钮,所有验证通过方可提交
 
              
                 
            });
        </script>
  <script>
  //侧边栏菜单
    $(function(){
      //$(".sider_li_1").css({"background-color":"#3992d0"});
     // $(".leftsidebar_box dt img").attr("src","images/select_xl01.png");
      $(".sider_li_2").hide();
       $(".menu_chioce").toggle(); 
      $(".sider_li_1").click(function(){
        
        //$(".sider_li_1").css({"background-color":"#3992d0"})
        //$(this).css({"background-color": "#317eb4"});
        $(this).next().find('.sider_li_2').removeClass("menu_chioce");
       // $(".leftsidebar_box dt img").attr("src","images/select_xl01.png");
       // $(this).parent().find('img').attr("src","images/select_xl.png");
        $(".menu_chioce").slideUp(); 
        $(this).next().find('.sider_li_2').slideToggle();
        $(this).next().find('.sider_li_2').addClass("menu_chioce");
        $(this).parent().find('.sider_li_1').removeClass("now_li");
        $(this).addClass("now_li");
      });
       $(".sider_li_2").click(function(){
        $(this).parent().find('.sider_li_2').removeClass("now_li_2");
        $(this).addClass("now_li_2");
       });
    })
</script>
  <script type="text/javascript">
       window.onload=function(){
        setSize();
       }
        

       $(window).resize(function(){
          setSize();
       });
        function setSize() {           
            var width1 = $("#main-content").width();
            var width_status = parseInt(width1) - 220;           
            $("#right-text").css('width',width_status);
             $("#status1").css('width',width_status);
          

              //主体高度满屏
            var window_height = $(window).height();
            var main_height = parseInt(window_height)-120;
            $("#main-content").css('min-height',main_height);
            //侧边栏高度自适应
            var body_height = $("body").height();
            var sider_height = parseInt(body_height)-80;
            $("#sider").css('min-height',sider_height);
            var foot_height = parseInt($(window).height()) - main_height-60;
            //alert(foot_height);
            $("#footer").css('min-height',foot_height);
            
            
        }   
    </script> 
  <link href="../../css/base.css" type="text/css" rel="stylesheet"/>
 </head>
 <body>
<div id="background-width" style="height:0;"></div>
 <div id="container">
      <div id="head">
          <div id="logo">
              <img src="../../image/form-logo.png" width="220" >
          </div>
          <div id="status1">
            <?php 
                 session_start();
                 include_once("../../php/connect.php"); 
                 include_once("../../php/state_test.php"); 
                 $loginNumber = $_SESSION["id"];
                 header("Content-type: text/html; charset:utf-8");                 
                 $mysqli->query("set names 'utf8'");

                 //mysqli_query($mysqli,"SET NAMES UTF8");
                 $result = mysqli_query($mysqli,"SELECT * FROM user where loginNumber='$loginNumber'");
                 if(mysqli_num_rows($result)>0)
                 {
                    $row = mysqli_fetch_array($result);
                    $GLOBALS['name']=$row['name'];
                  }
                
            ?>
            <a class="a_exit" href="../../">退出系统</a>
            <p class="to_remind">欢迎您，<span>
              <?php  
               echo $name;
                   ?> 
            </span>管理员</p>
         
          </div>

        </div>
        <div id="main-content">
          <div id="sider">
          <ul class="sider_ul_1">
                   <li name="academic_meeting" class="sider_li_1"><img src="../../image/item.png" width="40">科研项目</li>
                       <ul class="sider_ul_2">
                        <li class="sider_li_2  "><a href="../academic_meeting/academic_meeting.php">数据查询</a></li>
                        <li  class="sider_li_2 "><a href="../academic_meeting/academic_meeting_add.php">数据管理</a></li>
                        <li class="sider_li_2 "><a href="../academic_meeting/academic_meeting_induce.php">数据导入</a></li>
                      </ul>
                 
              
               <li name="thesis"  class="sider_li_1"><img src="../../image/thesis.png" width="40">论文发表</li>
                   <ul class="sider_ul_2">
                        <li class="sider_li_2  "><a href="../thesis/thesis.php">数据查询</a></li>
                        <li  class="sider_li_2 "><a href="../thesis/thesis_add.php">数据管理</a></li>
                        <li class="sider_li_2 "><a href="../thesis/thesis_induce.php">数据导入</a></li>
                  </ul>
               
              <li name="111"  class="sider_li_1"><img src="../../image/patent.png" width="40">专利情况</li>
                    <ul class="sider_ul_2">
                       <li class="sider_li_2  "><a href="../patent/patent.php">数据查询</a></li>
                        <li  class="sider_li_2 "><a href="../patent/patent_add.php">数据管理</a></li>
                        <li class="sider_li_2 "><a href="../patent/patent_induce.php">数据导入</a></li>
                      </ul>
               
               <li class="sider_li_1 "><img src="../../image/book.png" width="40">学术专著</li>
                    <ul class="sider_ul_2">
                     <li class="sider_li_2  "><a href="../academic_book/academic_book.php">数据查询</a></li>
                        <li  class="sider_li_2 "><a href="../academic_book/academic_book_add.php">数据管理</a></li>
                        <li class="sider_li_2 "><a href="../academic_book/academic_book_induce.php">数据导入</a></li>
                      </ul>
              
               <li class="sider_li_1 now_li"><img src="../../image/meeting.png" width="40">学术会议</li>
                   
                      <ul class="sider_ul_2">
                        <li class="sider_li_2 menu_chioce"><a href="academic_meeting.php">数据查询</a></li>
                        <li  class="sider_li_2 menu_chioce "><a href="academic_meeting_add.php">数据管理</a></li>
                        <li class="sider_li_2 menu_chioce now_li_2"><a href="academic_meeting_induce.php">数据导入</a></li>
                      </ul>                  
               
               <li class="sider_li_1"><img src="../../image/plat.png" width="40">科技平台</li>
                   <ul class="sider_ul_2">
                        <li class="sider_li_2  "><a href="../science_platform/science_platform.php">数据查询</a></li>
                        <li  class="sider_li_2 "><a href="../science_platform/science_platform_add.php">数据管理</a></li>
                        <li class="sider_li_2 "><a href="../science_platform/science_platform_induce.php">数据导入</a></li>
                      </ul>
               
               <li class="sider_li_1"><img src="../../image/award.png" width="40">获奖情况 </li>
                    <ul class="sider_ul_2">
                        <li class="sider_li_2  "><a href="../award_situation/award_situation.php">数据查询</a></li>
                        <li  class="sider_li_2 "><a href="../award_situation/award_situation_add.php">数据管理</a></li>
                        <li class="sider_li_2 "><a href="../award_situation/award_situation_induce.php">数据导入</a></li>
                      </ul>
              
               <li class="sider_li_1"><img src="../../image/position.png" width="40">学团职务 </li>
                    <ul class="sider_ul_2">
                        <li class="sider_li_2  "><a href="../academic_position/academic_position.php">数据查询</a></li>
                        <li  class="sider_li_2 "><a href="../academic_position/academic_position_add.php">数据管理</a></li>
                        <li class="sider_li_2 "><a href="../academic_position/academic_position_induce.php">数据导入</a></li>
                    </ul>
            </ul>
          </div>
          <div id="right-text">
        
          
            <div class="table_input_area">
              <div class="induce_remind">
                在导入之前请将相应excel文件<span>严格按照样例格式</span>进行排版！一旦上传错误将<span>无法撤销</span>！
                 
              </br> </br>
                 若使用<span>Excel2003及以上版本或者WPS</span>的表格时,请用对应的Excel工具把文件<span>另存为.xls后缀的文件</span>！  
              </div>
              </br>
              <?php
                echo'样例：</br>';
                echo'<table class="table_gen" border="1">';

                echo'<tr><th>会议类型</th><th>会议名称</th><th>主办单位</th><th>协办单位</th><th>会议人数</th><th>交流形式</th><th>会议地点</th><th>会议时间</th></tr>';
                echo'<tr><td>国际会议</td><td>全球总会议</td><td>福州大学</td><td>福州大学建筑学院</td><td>300</td><td>研讨</td><td>上海金融会议大厦</td>

                <td>2015-12-25</td></tr>';
                echo'</table>';
                echo'
                <form method="post" action="../../php/data_induce.php" enctype="multipart/form-data">
                  <input type="hidden" name="table_name" value="academic_meeting">
                  <input type="hidden" name="item[]" value="projectType">
                  <input type="hidden" name="item[]" value="projectDepartment">
                  <input type="hidden" name="item[]" value="projectName">                
                  <input type="hidden" name="item[]" value="projectMaster">
                  <input type="hidden" name="item[]" value="projectMember">
                  <input type="hidden" name="item[]" value="projectFunding">
                  <input type="hidden" name="item[]" value="projectTime">
                  <input type="hidden" name="item[]" value="projectState">
                  
                <div class="btn-center">
                    <input type="file"  name="testFile">
                    <input class="btn btn-success"  id="btn-condition" type="submit" value="提交"  >    
                </div></form>
                '
              ?>
            </div>
         
       </div> 
  </div>
 </div>
  <div id ="footer">
    Designed by Lin
  </div>
 </body>
</html>

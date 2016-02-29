<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
  <title>建筑学院管理系统</title>
  <script type="text/javascript" src="../../js/jquery.min.js"></script>  
  <script type="text/javascript" src="../../js/jquery.jeditable.mini.js"></script>
    <script language="javascript"> 
  //设置表单全选功能
  function selectIt(action){
  //
  var checkbox = $("#bdkey").find("input[name='delete_data[]']");
  var checkbox_jud = $("#bdkey").find("input[name='selectAll']");
  if(action=="selectAll"&&checkbox_jud[0].checked==1)
    for(var i=0 ;i<checkbox.length;i++)
    {
      checkbox[i].checked=1;
    }
    else if(action=="selectAll"&&checkbox_jud[0].checked==0)
       for(var i=0 ;i<checkbox.length;i++)
    {
      checkbox[i].checked=0;
    }
} 
</script>

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
                if($('select[name="meetingType"]').val().length >0)
                  {
                    
                    ok1=true;
                  }
                if($('input[name="coUnit"]').val().length > 0)
                  {
                    ok2=true;
                  }
                if($('input[name="meetingPlace"]').val().length >= 1)
                  {
                    ok3=true;
                  }
                if($('input[name="meetingName"]').val().length >= 1)
                  {
                    ok4=true;
                  }
                if($('input[name="meetingNumber"]').val().length >= 1)
                  {
                    ok5=true;
                  }
                if($('select[name="communicateForm"]').val().length >= 1)
                  {
                    ok6=true;
                  }
                if($('input[name="hostUnit"]').val().length >= 1)
                  {
                    ok7=true;
                  }
                if($('input[name="meetingTime"]').val().length >= 1)
                 { 
                  ok8=true;
                }
                if(ok1==true&&ok2==true&&ok3==true&&ok4==true&&ok5==true&&ok6==true&&ok7==true&&ok8==true)
                      $('.submit').submit();
                else{
                        alert("添加数据时，请填写所有信息!");
                        //alert($('select[name="meetingType"]').val().length >0);
                        //alert(ok2);
                        return false;
                      }
                  });
                //提交按钮,所有验证通过方可提交
 
              
                 
            });
        </script>
        <script type="text/javascript">
$(function(){
   $('.edit').editable('../../php/save.php', { 
     width     :130,
     height    :18,
     //onblur    : "ignore",
         cancel    : '取消',
         submit    : '确定',
         
         tooltip   : '单击可以编辑...',
     callback  : function(value, settings) {
       $("#modifiedtime").html("刚刚");
         }

     });
});
//调用jquery ui的datepicker日历插件
$.editable.addInputType('datepicker', {
    element : function(settings, original) {
        var input = $('<input class="input" />');
    input.attr("readonly","readonly");
        $(this).append(input);
        return(input);
    },
    plugin : function(settings, original) {
    var form = this;
    $("input",this).datepicker();
    }
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
                 $_SESSION["table_name"][0] ='academic_meeting';
                 header("Content-type: text/html; charset:utf-8");                 
                 $mysqli->query("set names 'utf8'");

                 //mysqli_query($mysqli,"SET NAMES UTF8");
                 $result = mysqli_query($mysqli,"SELECT * FROM user where loginNumber='$loginNumber'");
                 if(mysqli_num_rows($result)>0)
                 {
                    $row = mysqli_fetch_array($result);
                    $GLOBALS['name']=$row['name'];
                     $GLOBALS['power']=$row['power'];
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
                        <li  class="sider_li_2 menu_chioce now_li_2"><a href="academic_meeting_add.php">数据管理</a></li>
                        <li class="sider_li_2 menu_chioce"><a href="academic_meeting_induce.php">数据导入</a></li>
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
             <fieldset>
              <form id="add_form"  method="post"  action="#"  enctype="multipart/form-data">
                  <div class="condition_select">
                    <div class="select_block">
                      <label>会议类型 </label> 
                        <select name ="meetingType">  
                          <option value ="">未选择</option>
                          <option value ="国际会议"> 国际会议</option>
                          <option value ="全国性">全国性</option>
                          <option value ="地方性">地方性</option>           
                          <option value ="其他">其他</option>           
                        </select> 
                    </div>
                    <div class="select_block"> 
                     <label>会议名称</label>
                  <input type="text" name="meetingName" >          
                     
                    </div>
                    <div class="select_block">    
                       <label>主办单位</label>
                      <input type="text" name="hostUnit"  >
                     
                    </div>    
                  </div>
            
                  <div class="condition_select">
                     <div class="select_block">
                          <label>协办单位</label>
                          <input type="text" name="coUnit" >
                      </div>
                      <div class="select_block">
                        <label>会议人数</label>
                        <input type="text" name="meetingNumber"  >
                      </div>
                     <div class="select_block">
                        <label>交流形式</label>
                         <select name ="communicateForm">
                          <option value ="">未选择</option>
                          <option value ="研讨">研讨</option>
                          <option value ="宣读">宣读</option>
                          <option value ="海报">海报</option>  
                          <option value ="其他">其他</option>         
                        </select>     
                     </div>
                  </div> 
                 <div class="condition_select">
                    <div class="select_block">
                      <label>会议地点</label>
                        <input type="text" name="meetingPlace" >
                    </div>
                    <div class="select_block">
                        <label>会议时间</label>
                        <input type="text" name="meetingTime" >  
                    </div>
                </div>   
                  
               <div style="clear:both;"></div>
                <div class="btn-center">
                  <input class="btn btn-success submit"  type="submit" value="添加一条数据"  >
                  </div>
               
          </form>
        </fieldset>
         <form action="../../php/research_project_del.php" id="bdkey"  method="post">
          <table class="table_gen" border="1">
          
              <?php
                 header("Content-type: text/html; charset:utf-8");                 
                  
                     $num_condition = 0;
                     //$sql="SELECT * FROM academic_meeting ";

                     $meetingType = isset($_POST["meetingType"])?$_POST["meetingType"]:"";
                   

                    $meetingName = isset($_POST["meetingName"])?$_POST["meetingName"]:"";

                    

                      $hostUnit = isset($_POST["hostUnit"])?$_POST["hostUnit"]:"";
                    
                      
                      $coUnit = isset($_POST["coUnit"])?$_POST["coUnit"]:"";
                    
                     $meetingNumber = isset($_POST["meetingNumber"])?$_POST["meetingNumber"]:"";
                     

                     $communicateForm = isset($_POST["communicateForm"])?$_POST["communicateForm"]:"";
                  

                     $meetingPlace = isset($_POST["meetingPlace"])?$_POST["meetingPlace"]:"";
                   

                     $meetingTime =  isset($_POST["meetingTime"])?$_POST["meetingTime"]:"";
                    if(!empty($meetingType)&&!empty($meetingName)&&!empty($hostUnit)&&!empty($coUnit)&&!empty($meetingNumber)&&!empty($communicateForm)&&!empty($meetingPlace)&&!empty($meetingTime))
                    {
                     $sql="SELECT MAX(id) FROM academic_meeting";
                     $result = mysqli_query($mysqli,$sql);
                     $row = mysqli_fetch_array($result);
                     $id=$row[0]+1; 
                     //echo $id;
                     $sql="INSERT INTO academic_meeting(`id`,`meetingType`, `meetingName`, `hostUnit`, `coUnit`, `meetingNumber`, `communicateForm`, `meetingPlace`, `meetingTime`) VALUES ( '$id','$meetingType','$meetingName','$hostUnit','$coUnit','$meetingNumber','$communicateForm','$meetingPlace','$meetingTime')"; 
                      mysqli_query($mysqli,"SET NAMES UTF8");
                      $result = mysqli_query($mysqli,$sql);      
                    }

                      $sql="SELECT * FROM academic_meeting";
                      mysqli_query($mysqli,"SET NAMES UTF8");
                      $head = 0;
                      //echo $sql."</br>";
                      $result = mysqli_query($mysqli,$sql);
                      $sum = 0;
                      if(mysqli_num_rows($result)>0)
                      {
                        if($head==0)
                             {
                                echo"<tr><td>会议类型";     
                                echo"<td>会议名称</td>";
                                echo"<td>主办单位</td>";
                                echo"<td>协办单位</td>";
                                echo"<td>会议人数</td>";
                                echo"<td>交流形式</td>";
                                echo"<td>会议地点</td>";
                                echo"<td>会议时间</td>";
                                  if($power==0)
                                  echo"<td>管理选项<br>全 选 
<input type='checkbox' name='selectAll' value='checkbox' onClick={selectIt('selectAll')}></td>";
                                echo"</td></tr>";
                                 $head = 1;
                              }
                          while($row=mysqli_fetch_array($result))
                          {
                             echo"<input type='hidden' name='table_name' value='academic_meeting'>";
                               echo"<tr><td class='edit' id='".$row['id']."#"."meetingType'>".$row['meetingType']."</td>";     
                                echo"<td class='edit' id='".$row['id']."#"."meetingName'>".$row['meetingName']."</td>";
                                echo"<td class='edit' id='".$row['id']."#"."hostUnit'>".$row['hostUnit']."</td>";
                                echo"<td class='edit' id='".$row['id']."#"."coUnit'>".$row['coUnit']."</td>";
                                echo"<td class='edit' id='".$row['id']."#"."meetingNumber'>".$row['meetingNumber']."</td>";
                                echo"<td class='edit' id='".$row['id']."#"."communicateForm'>".$row['communicateForm']."</td>";
                                echo"<td class='edit' id='".$row['id']."#"."meetingPlace'>".$row['meetingPlace']."</td>";
                                echo"<td class='edit' id='".$row['id']."#"."meetingTimes'>".$row['meetingTime']."</td>";
                               if($power==0)
                                echo"<td>删除<input type='checkbox' name='delete_data[]' value='".$row['id']."'></td>";
                                echo"</td></tr>";
                                $sum++;
                          }
                         
                      }
                     

                     
                     
                        
                      
                      
                  
              ?>
             
            
            </table>
             <div class="btn-center">
             <?php
              if($power==0)
                echo'
              <input class="btn btn-danger" name="action"  type="submit" value="删除所选数据"  >'
              ?>
              <input class="btn btn-success" name="action" type="submit" value="导出所有数据"  >
             </div>
            </form>
          </br>
            <?php
             echo "<p id='result_p'>共 <span id='result_num'>".$sum."</span> 条结果</p>";
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

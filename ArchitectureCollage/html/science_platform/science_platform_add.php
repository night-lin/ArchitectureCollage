<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="platformCategory" content="">
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
             
               $('.submit').click(function(){
                if($('select[name="platformCategory"]').val().length >0)
                  {   
                    ok1=true;
                  } 
                  else{
                    
                  }
                  //alert("tets");
                if($('input[name="platformName"]').val().length > 0)
                  {
                    ok2=true;
                  }
                if($('input[name="platformMaster"]').val().length >= 1)
                  {
                    ok3=true;
                  }
                if($('input[name="cooperUnit"]').val().length >= 1)
                  {
                    ok4=true;
                  }
                if($('input[name="contractTime"]').val().length >= 1)
                  {
                    ok5=true;
                  }
                if($('input[name="cooperFunds"]').val().length >= 1)
                  {
                    ok6=true;
                  }
                if($('input[name="cooperOrganization"]').val().length >= 1)
                  {
                    ok7=true;
                  }
              

                if(ok1==true&&ok2==true&&ok3==true&&ok4==true&&ok5==true&&ok6==true&&ok7==true)
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
                  $_SESSION["table_name"][0] ='science_platform';
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
                   <li name="research_project" class="sider_li_1"><img src="../../image/item.png" width="40">科研项目</li>
                      <ul class="sider_ul_2">
                        <li class="sider_li_2 "><a href="../research_project/research_project.php">数据查询</a></li>
                        <li  class="sider_li_2 "><a href="../research_project/research_project_add.php">数据管理</a></li>
                        <li class="sider_li_2 "><a href="../research_project/research_project_induce.php">数据导入</a></li>
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
               
               <li class="sider_li_1"><img src="../../image/book.png" width="40">学术专著</li>
                <ul class="sider_ul_2">
                        <li class="sider_li_2  "><a href="../academic_book/academic_book.php">数据查询</a></li>
                        <li  class="sider_li_2 "><a href="../academic_book/academic_book_add.php">数据管理</a></li>
                        <li class="sider_li_2 "><a href="../academic_book/academic_book_induce.php">数据导入</a></li>
                      </ul>
                    
              
               <li class="sider_li_1"><img src="../../image/meeting.png" width="40">学术会议</li>
                    <ul class="sider_ul_2">
                        <li class="sider_li_2"><a href="../academic_meeting/academic_meeting.php">数据查询</a></li>
                        <li class="sider_li_2"><a href="../academic_meeting/academic_meeting_add.php">数据管理</a></li>
                        <li class="sider_li_2"><a href="../academic_meeting/academic_meeting_induce.php">数据导入</a></li>
                      </ul>
               
               <li class="sider_li_1  now_li"><img src="../../image/plat.png" width="40">科技平台</li>
                   <ul class="sider_ul_2">
                        <li class="sider_li_2 menu_chioce"><a href="science_platform.php">数据查询</a></li>
                        <li class="sider_li_2 menu_chioce now_li_2"><a href="science_platform_add.php">数据管理</a></li>
                        <li class="sider_li_2 menu_chioce"><a href="science_platform_induce.php">数据导入</a></li>
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
                <form  method="post"  action="#"  enctype="multipart/form-data">
                 <div class="condition_select">
                   <div class="select_block"> 
                    <label>平台类别</label>       
                      <select name="platformCategory">
                      <option value="">未选择</option> 
                      <option value="国家级">国家级</option>
                      <option value="部级、央企产学研合作平台">部级、央企产学研合作平台</option>  
                      <option value="省级">省级</option>  
                      <option value="厅级、地方企业产学研合作平台">厅级、地方企业产学研合作平台</option>  
                          
                      </select>              
                     
                    </div>
                    <div class="select_block"> 
                      <label>平台名称</label>
                      <input type="text" name="platformName">           
                    </div>
                    <div class="select_block"> 
                      <label>平台负责人</label>
                      <input type="text" name="platformMaster"> 
                      </select>        
                    </div>
                  </div>
            
                  <div class="condition_select">
                      <div class="select_block">    
                       <label>合作单位</label>
                      <input type="text" name="cooperUnit" >     
                    </div>    
                     <div class="select_block">
                          <label>签约时间</label>
                          <input type="text" name="contractTime" >
                      </div>
                     
                  </div> 
                 <div class="condition_select">
                     <div class="select_block">
                        <label>合作经费</label>
                        <input type="text" name="cooperFunds"  >
                      </div>
                     <div class="select_block">
                        <label>产学研合作机构</label>
                        <input type="text" name="cooperOrganization"  >
                      </div>
                </div>   
                  
              <div style="clear:both;"></div>
               <div class="btn-center">
                  <input class="btn btn-success submit"  id="btn-condition" type="submit" value="添加一条数据"  >    
                </div>
          </form>
          </fieldset>
         <form action="../../php/research_project_del.php" id="bdkey" method="post">
          <table class="table_gen" border="1">
          
              <?php
                 header("Content-type: text/html; charset:utf-8");                 
                  
                     $num_condition = 0;
                     //$sql="SELECT * FROM research_project ";

                    $platformCategory = isset($_POST["platformCategory"])?$_POST["platformCategory"]:"";
                    $platformName = isset($_POST["platformName"])?$_POST["platformName"]:"";
                    $platformMaster = isset($_POST["platformMaster"])?$_POST["platformMaster"]:"";
                    $cooperUnit = isset($_POST["cooperUnit"])?$_POST["cooperUnit"]:"";
                    $contractTime = isset($_POST["contractTime"])?$_POST["contractTime"]:"";
                    $cooperFunds = isset($_POST["cooperFunds"])?$_POST["cooperFunds"]:"";
                    $cooperOrganization = isset($_POST["cooperOrganization"])?$_POST["cooperOrganization"]:"";
                    if(!empty($platformCategory)&&!empty($platformName)&&!empty($platformMaster)&&!empty($cooperUnit)&&!empty($contractTime)&&!empty($cooperFunds)&&!empty($cooperOrganization))
                    {
                     $sql="SELECT MAX(id) FROM science_platform";
                     $result = mysqli_query($mysqli,$sql);
                     $row = mysqli_fetch_array($result);
                     $id=$row[0]+1; 
                     //echo $id;
                     $sql="INSERT INTO science_platform(`id`, `platformCategory`, `platformName`, `platformMaster`, `cooperUnit`, `contractTime`, `cooperFunds`, `cooperOrganization`)
                     VALUES ( '$id','$platformCategory','$platformName','$platformMaster','$cooperUnit','$contractTime','$cooperFunds','$cooperOrganization')"; 
                      mysqli_query($mysqli,"SET NAMES UTF8");
                      $result = mysqli_query($mysqli,$sql);  
                     // echo $sql."</br>";    
                    }

                      $sql="SELECT * FROM science_platform";
                      mysqli_query($mysqli,"SET NAMES UTF8");
                      $head = 0;
                      
                      $result = mysqli_query($mysqli,$sql);
                      $sum = 0;
                      if(mysqli_num_rows($result)>0)
                      {
                        if($head==0)
                             {
                              echo"<tr><td>平台类别</td>";     
                                echo"<td>平台名称</td>";
                                echo"<td>平台负责人</td>";
                                echo"<td>合作单位</td>";
                                echo"<td>签约时间</td>";
                                echo"<td>合作经费</td>";
                                echo"<td>产学研合作机构</td>";
                                if($power==0)
                               echo"<td>管理选项<br>全 选 
<input type='checkbox' name='selectAll' value='checkbox' onClick={selectIt('selectAll')}></td>";
                                echo"</td></tr>";
                                 $head = 1;
                              }
                          while($row=mysqli_fetch_array($result))
                          {
                               echo"<input type='hidden' name='table_name' value='science_platform'>";
                                echo"<tr><td class='edit'  id='".$row['id']."#"."platformCategory'>".$row['platformCategory']."</td>";     
                                echo"<td class='edit'  id='".$row['id']."#"."platformName'>".$row['platformName']."</td>";
                                echo"<td class='edit'  id='".$row['id']."#"."platformMaster'>".$row['platformMaster']."</td>";
                                echo"<td class='edit'  id='".$row['id']."#"."cooperUnit'>".$row['cooperUnit']."</td>";
                                echo"<td class='edit'  id='".$row['id']."#"."contractTime'>".$row['contractTime']."</td>";
                                echo"<td class='edit'  id='".$row['id']."#"."cooperFunds'>".$row['cooperFunds']."</td>";
                                echo"<td class='edit'  id='".$row['id']."#"."cooperOrganization'>".$row['cooperOrganization']."</td>";
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

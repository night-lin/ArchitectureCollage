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
  <script type="text/javascript" src="../js/jquery.min.js"></script>  
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
                if($('input[name="projectDepartment"]').val().length >= 1)
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
  <link href="../css/base.css" type="text/css" rel="stylesheet"/>
 </head>
 <body>
<div id="background-width" style="height:0;"></div>
 <div id="container">
      <div id="head">
          <div id="logo">
              <img src="../image/form-logo.png" width="220" >
          </div>
          <div id="status1">
            <?php 
                 session_start();
                 include_once("../php/connect.php"); 
                 include_once("../php/state_test.php"); 
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
            <a class="a_exit" href="../">退出系统</a>
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
                
                   <li class="now_li sider_li_1"><img src="../image/item.png" width="40">科研项目</li>
                      <ul class="sider_ul_2">
                        <li class="sider_li_2 menu_chioce"><a href="research_project.php">数据查询</a></li>
                        <li class="sider_li_2 menu_chioce now_li_2"><a href="research_project_add.php">数据管理</a></li>
                        <li class="sider_li_2 menu_chioce"><a href="#">数据导入</a></li>
                      </ul>
                 
              
                
               <li class="sider_li_1"><img src="../image/thesis.png" width="40">论文发表</li>
                    <ul class="sider_ul_2">
                      <li class="sider_li_2"><a href="#">数据管理</a></li>
                      <li class="sider_li_2"><a href="#">数据导入</a></li>
                    </ul>
               
              <li class="sider_li_1"><img src="../image/patent.png" width="40">专利情况</li>
                    <ul class="sider_ul_2">
                      <li class="sider_li_2"><a href="#">数据管理</a></li>
                      <li class="sider_li_2"><a href="#">数据导入</a></li>
                    </ul>
               
               <li class="sider_li_1"><img src="../image/book.png" width="40">学术专著</li>
                    <ul class="sider_ul_2">
                      <li class="sider_li_2"><a href="#">数据管理</a></li>
                      <li class="sider_li_2"><a href="#">数据导入</a></li>
                    </ul>
              
               <li class="sider_li_1"><img src="../image/meeting.png" width="40">学术会议</li>
                    <ul class="sider_ul_2">
                      <li class="sider_li_2"><a href="#">数据管理</a></li>
                      <li class="sider_li_2"><a href="#">数据导入</a></li>
                    </ul>
               
               <li class="sider_li_1"><img src="../image/plat.png" width="40">科技平台</li>
                    <ul class="sider_ul_2">
                      <li class="sider_li_2"><a href="#">数据管理</a></li>
                      <li class="sider_li_2"><a href="#">数据导入</a></li>
                    </ul>
               
               <li class="sider_li_1"><img src="../image/award.png" width="40">获奖情况 </li>
                    <ul class="sider_ul_2">
                      <li class="sider_li_2"><a href="#">数据管理</a></li>
                      <li class="sider_li_2"><a href="#">数据导入</a></li>
                    </ul>
              
               <li class="sider_li_1"><img src="../image/position.png" width="40">学团职务 </li>
                    <ul class="sider_ul_2">
                      <li class="sider_li_2"><a href="#">数据管理</a></li>
                      <li class="sider_li_2"><a href="#">数据导入</a></li>
                    </ul>
              
           
            </ul>
          </div>
          <div id="right-text">

          
            <div class="table_input_area">
             <fieldset>
              <form id="add_form"  method="post"  action="#"  enctype="multipart/form-data">
                <div class="condition_select">
                   <div class="select_block">
                      <label>项目类型</label>
                        <select name ="projectType">  
                          <option value ="">所有</option>
                          <option value ="country"> 国家级项目</option>
                          <option value ="province">省部级项目</option>
                          <option value ="under_province">省部级以下</option>           
                          <option value ="other">其他</option>           
                        </select> 
                    </div>
                    <div class="select_block"> 
                     <label>项目负责人</label>
                  <input type="text" name="projectMaster" >          
                     
                    </div>
                    <div class="select_block">    
                       <label>起止年限</label>
                      <input type="text" name="projectTime"  >
                     
                    </div>
                   
                </div>
            
              <div class="condition_select">
                <div class="select_block">
                  <label>下达部门</label>
                        <input type="text" name="projectDepartment" >
                </div>
                <div class="select_block">
                <label>项目成员</label>
                  <input type="text" name="projectMember"  >
                  </div>
                <div class="select_block">

                  <label>项目状态</label>
                  <select name ="projectState">
                    <option value ="">所有</option>
                    <option value ="on_serach"> 在研</option>
                    <option value ="complete">结题</option> 
                    <option value ="other">其他</option>         
                  </select>  
               
                </div>
            </div> 
             <div class="condition_select">
              <div class="select_block">
                <label>项目名称</label>
                  <input type="text" name="projectName" >
              </div>
              <div class="select_block">
                  <label>项目经费</label>
                  <input type="text" name="projectFunding" >  
                    </div>
               </div>   
                  
               <div style="clear:both;"></div>
                <div class="btn-center">
                  <input class="btn btn-success submit"  type="submit" value="添加一条数据"  >
                  </div>
               
          </form>
        </fieldset>
         <form action="../php/research_project_del.php" method="post">
          <table class="table_gen" border="1">
          
              <?php
                 header("Content-type: text/html; charset:utf-8");                 
                  
                     $num_condition = 0;
                     //$sql="SELECT * FROM research_project ";

                     $projectType = isset($_POST["projectType"])?$_POST["projectType"]:"";
                   

                    $projectDepartment = isset($_POST["projectDepartment"])?$_POST["projectDepartment"]:"";

                    

                      $projectName = isset($_POST["projectName"])?$_POST["projectName"]:"";
                    
                      
                      $projectMaster = isset($_POST["projectMaster"])?$_POST["projectMaster"]:"";
                    
                     $projectMember = isset($_POST["projectMember"])?$_POST["projectMember"]:"";
                     

                     $projectFunding = isset($_POST["projectFunding"])?$_POST["projectFunding"]:"";
                  

                     $projectTime = isset($_POST["projectTime"])?$_POST["projectTime"]:"";
                   

                     $projectState =  isset($_POST["projectState"])?$_POST["projectState"]:"";
                    if(!empty($projectType)&&!empty($projectDepartment)&&!empty($projectName)&&!empty($projectMaster)&&!empty($projectMember)&&!empty($projectFunding)&&!empty($projectTime)&&!empty($projectState))
                    {
                     $sql="SELECT MAX(id) FROM research_project";
                     $result = mysqli_query($mysqli,$sql);
                     $row = mysqli_fetch_array($result);
                     $id=$row[0]+1; 
                     //echo $id;
                     $sql="INSERT INTO research_project(`id`,`projectType`, `projectDepartment`, `projectName`, `projectMaster`, `projectMember`, `projectFunding`, `projectTime`, `projectState`) VALUES ( '$id','$projectType','$projectDepartment','$projectName','$projectMaster','$projectMember','$projectFunding','$projectTime','$projectState')"; 
                      mysqli_query($mysqli,"SET NAMES UTF8");
                      $result = mysqli_query($mysqli,$sql);      
                    }

                      $sql="SELECT * FROM research_project";
                      mysqli_query($mysqli,"SET NAMES UTF8");
                      $head = 0;
                      //echo $sql."</br>";
                      $result = mysqli_query($mysqli,$sql);
                      $sum = 0;
                      if(mysqli_num_rows($result)>0)
                      {
                        if($head==0)
                             {
                                echo"<tr><td>项目类型";     
                                echo"<td>项目下达部门</td>";
                                echo"<td>项目名称</td>";
                                echo"<td>项目负责人</td>";
                                echo"<td>项目组成员</td>";
                                echo"<td>项目经费</td>";
                                echo"<td>起止年限</td>";
                                echo"<td>项目状态</td>";
                                echo"<td>管理选项</td>";
                                echo"</td></tr>";
                                 $head = 1;
                              }
                          while($row=mysqli_fetch_array($result))
                          {
                            switch ($row['projectType']) {
                              case 'country':
                                $projectType ="国家级项目";
                                break;
                              case 'province':
                                $projectType ="省部级项目";
                                break;
                              case 'under_province':
                                $projectType ="省部级以下";
                                break;   
                              case 'other':
                                $projectType ="其他";
                                break; 
                                default:
                                $projectType ="未成功获取数据";
                               break;  
                              }
                            switch ($row['projectState']) {
                              case 'on_serach':
                                $projectState="在研";
                                break;
                              case 'complete':
                                $projectState ="结题";
                                break;
                          
                              case 'other':
                                $projectState ="其他";
                                break;  
                               default:
                                $projectState ="未成功获取数据";
                               break;  
                            }
                                echo"<tr><td>".$projectType;     
                                echo"<td>".$row['projectDepartment']."</td>";
                                echo"<td>".$row['projectName']."</td>";
                                echo"<td>".$row['projectMaster']."</td>";
                                echo"<td>".$row['projectMember']."</td>";
                                echo"<td>".$row['projectFunding']."</td>";
                                echo"<td>".$row['projectTime']."</td>";
                                echo"<td>".$projectState."</td>";
                                echo"<td>删除<input type='checkbox' name='delete_data[]' value='".$row['id']."'></td>";
                                echo"</td></tr>";
                                $sum++;
                          }
                         
                      }
                     

                     
                     
                        
                      
                      
                  
              ?>
             
            
            </table>
             <div class="btn-center">
              <input class="btn btn-danger"  id= type="submit" value="删除所选数据"  >
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

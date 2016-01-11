<!Doctype html>
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

  <script>
  //侧边栏菜单
    $(function(){
       //定义栏目数组
      var menu_item_array=new Array("research_project","thesis","patent","","","","",""); 
      //$(".sider_li_1").css({"background-color":"#3992d0"});
     // $(".leftsidebar_box dt img").attr("src","images/select_xl01.png");
      $(".sider_li_2").hide();
      $(".menu_chioce").toggle(); 
      $(".sider_li_1").click(function(){
        $(this).next().find('.sider_li_2').removeClass("menu_chioce");
        $(".menu_chioce").slideUp(); 
       //$(".sider_li_1 img").attr("src","images/select_xl01.png");
        $(this).next().find('.sider_li_2').slideToggle();
        $(this).next().find('.sider_li_2').addClass("menu_chioce");
        $(this).parent().find('.sider_li_1').removeClass("now_li");
        $(this).addClass("now_li");
         //获取栏目对应name
        
         //alert($(this).attr("name"));
        
      });
     
       
       $(".sider_li_2").click(function(){
        $(this).parent().find('.sider_li_2').removeClass("now_li_2");
        $(this).addClass("now_li_2");

       
       });
    })
</script>
  <script type="text/javascript">
    jQuery.fn.rowspan = function(colIdx) { //封装的一个JQuery小插件
    return this.each(function(){
    var that;
    $('tr', this).each(function(row) {
    $('td:eq('+colIdx+')', this).filter(':visible').each(function(col) {
    if (that!=null && $(this).html() == $(that).html()) {
    rowspan = $(that).attr("rowSpan");
    if (rowspan == undefined) {
    $(that).attr("rowSpan",1);
    rowspan = $(that).attr("rowSpan"); }
    rowspan = Number(rowspan)+1;
    $(that).attr("rowSpan",rowspan);
    $(this).hide();
    } else {
    that = this;
    }
    });
    });
    });
    }
    $(function() {
    $("#table_cl_info").rowspan(0);//
   
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
                   <li name="research_project" class="now_li sider_li_1"><img src="../../image/item.png" width="40">科研项目</li>
                      <ul class="sider_ul_2">
                        <li class="sider_li_2 menu_chioce now_li_2"><a href="research_project.php">数据查询</a></li>
                        <li  class="sider_li_2 menu_chioce"><a href="research_project_add.php">数据管理</a></li>
                        <li class="sider_li_2 menu_chioce"><a href="research_project_induce.php">数据导入</a></li>
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
                        <li class="sider_li_2  "><a href="../academic_meeting/academic_meeting.php">数据查询</a></li>
                        <li  class="sider_li_2 "><a href="../academic_meeting/academic_meeting_add.php">数据管理</a></li>
                        <li class="sider_li_2 "><a href="../academic_meeting/academic_meeting_induce.php">数据导入</a></li>
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
           <?php
              
              $menu_item = $_SESSION["menu_item"];
           ?>
          
            <fieldset>
                <form  method="post"  action="#"  enctype="multipart/form-data">
                  <div class="condition_select">
                    <div class="select_block">
                      <label>项目类型</label>
                        <select name ="projectType">  
                          <option value ="">未选择</option>
                          <option value ="国家级项目"> 国家级项目</option>
                          <option value ="省部级项目">省部级项目</option>
                          <option value ="省部级以下">省部级以下</option>           
                          <option value ="其他">其他</option>           
                        </select> 
                    </div>
                    <div class="select_block"> 
                     <label>项目负责人</label>
                  <input type="text" name="projectMaster" >          
                     
                    </div>
                    <div class="select_block">    
                       <label>立项时间</label>
                      <input type="text" name="projectStart"  >
                     
                    </div>    
                  </div>
            
                  <div class="condition_select">
                     <div class="select_block">    
                       <label>验收时间</label>
                      <input type="text" name="projectCheck"  >
                     
                    </div>  
                     <div class="select_block">
                          <label>下达部门</label>
                          <input type="text" name="projectDepartment" >
                      </div>
                      <div class="select_block">
                        <label>项目成员</label>
                        <input type="text" name="projectMember"  >
                      </div>
                     
                  </div> 
                 <div class="condition_select">
                  <div class="select_block">
                        <label>项目状态</label>
                        <select name ="projectState">
                          <option value ="">未选择</option>
                          <option value ="在研"> 在研</option>
                          <option value ="结题">结题</option> 
                          <option value ="其他">其他</option>         
                        </select>     
                     </div>
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
                  <input class="btn btn-success"  id="btn-condition" type="submit" value="查询"  >    
                </div>
          </form>
          </fieldset>

          <table class="table_gen" border="1">
           
              <?php
                 header("Content-type: text/html; charset:utf-8");                 
                  
                     $num_condition = 0;
                     $sql="SELECT * FROM research_project ";

                     $projectType = isset($_POST["projectType"])?$_POST["projectType"]:"";
                     if(!empty($projectType))
                      {
                       
                        $num_condition++;
                        if($num_condition==1)
                          {
                            $sql.="WHERE projectType ='$projectType'";
                          }
                        else
                        {
                           $sql.="AND projectType ='$projectType'";
                        }
                          
                      }

                    $projectDepartment = isset($_POST["projectDepartment"])?$_POST["projectDepartment"]:"";

                     if(!empty($projectDepartment))
                      {
                        
                        $num_condition++;
                        if($num_condition==1)
                        {
                          $sql.="WHERE projectDepartment LIKE '%$projectDepartment%'";
                        }
                        else
                        {
                           $sql.= "AND projectDepartment LIKE '%$projectDepartment%'";
                        }

                      }

                      $projectName = isset($_POST["projectName"])?$_POST["projectName"]:"";
                     if(!empty($projectName))
                     {
                      $num_condition++;         
                      if($num_condition==1)
                        {
                          $sql.="WHERE projectName LIKE '%$projectName%'";
                        }
                      else
                        {
                           $sql.= "AND projectName  LIKE '%$projectName%'";
                        }  
                     }
                      
                      $projectMaster = isset($_POST["projectMaster"])?$_POST["projectMaster"]:"";
                     if(!empty($projectMaster))
                     {
                      $num_condition++;
                      
                      if($num_condition==1)
                        {
                          $sql.="WHERE projectMaster  LIKE '%$projectMaster%'";
                        }
                      else
                        {
                           $sql.= "AND projectMaster  LIKE '%$projectMaster%'";
                        }  
                     }

                     $projectMember = isset($_POST["projectMember"])?$_POST["projectMember"]:"";
                     if(!empty($projectMember))
                     {
                      $num_condition++;
                      
                      if($num_condition==1)
                        {
                          $sql.="WHERE projectMember  LIKE '%$projectMember%'";
                        }
                      else
                        {
                           $sql.= "AND projectMember LIKE '%$projectMember%'";
                        }  
                     }

                     $projectFunding = isset($_POST["projectFunding"])?$_POST["projectFunding"]:"";
                     if(!empty($projectFunding))
                      {
                        $num_condition++;
                       
                      if($num_condition==1)
                        {
                          $sql.="WHERE projectFunding  LIKE '%$projectFunding%'";
                        }
                      else
                        {
                           $sql.= "AND projectFunding  LIKE '%$projectFunding%'";
                        }  
                     }

                     $projectStart = isset($_POST["projectStart"])?$_POST["projectStart"]:"";
                     if(!empty($projectStart))
                    {
                      $num_condition++;
                      
                      if($num_condition==1)
                        {
                          $sql.="WHERE projectStart  LIKE '%$projectStart%'";
                        }
                      else
                        {
                           $sql.= "AND projectStart  LIKE '%$projectStart%'";
                        }  
                     }

                     $projectCheck = isset($_POST["projectCheck"])?$_POST["projectCheck"]:"";
                     if(!empty($projectStart))
                    {
                      $num_condition++;
                      
                      if($num_condition==1)
                        {
                          $sql.="WHERE projectCheck  LIKE '%$projectCheck%'";
                        }
                      else
                        {
                           $sql.= "AND projectCheck  LIKE '%$projectCheck%'";
                        }  
                     }

                     $projectState =  isset($_POST["projectState"])?$_POST["projectState"]:"";
                     if(!empty($projectState))
                     {
                      $num_condition++;
                     
                      if($num_condition==1)
                        {
                          $sql.="WHERE projectState  LIKE '%$projectState%'";
                        }
                      else
                        {
                           $sql.= "AND projectState  LIKE '%$projectState%'";
                        }  
                     }
                      
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
                                echo"<td>立项时间</td>";
                                echo"<td>验收时间</td>";
                                echo"<td>项目状态</td>";
                                echo"</td></tr>";
                                 $head = 1;
                              }
                          while($row=mysqli_fetch_array($result))
                          {
                          
                                echo"<tr><td>".$row['projectType']."</td>";     
                                echo"<td>".$row['projectDepartment']."</td>";
                                echo"<td>".$row['projectName']."</td>";
                                echo"<td>".$row['projectMaster']."</td>";
                                echo"<td>".$row['projectMember']."</td>";
                                echo"<td>".$row['projectFunding']."</td>";
                                echo"<td>".$row['projectStart']."</td>";
                                echo"<td>".$row['projectCheck']."</td>";
                                echo"<td>".$row['projectState']."</td>";
                                echo"</td></tr>";
                                $sum++;
                          }
                         
                      }
            
              ?>
            </table>
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

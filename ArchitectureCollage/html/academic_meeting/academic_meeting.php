<!Doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="renderer" content="webkit"> 
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
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
                   <li name="research_project" class="sider_li_1"><img src="../../image/item.png" width="40">科研项目</li>
                       <ul class="sider_ul_2">
                        <li class="sider_li_2  "><a href="../research_project/research_project.php">数据查询</a></li>
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
               
               <li class="sider_li_1 "><img src="../../image/book.png" width="40">学术专著</li>
                    <ul class="sider_ul_2">
                     <li class="sider_li_2  "><a href="../academic_book/academic_book.php">数据查询</a></li>
                        <li  class="sider_li_2 "><a href="../academic_book/academic_book_add.php">数据管理</a></li>
                        <li class="sider_li_2 "><a href="../academic_book/academic_book_induce.php">数据导入</a></li>
                      </ul>
              
               <li class="sider_li_1 now_li"><img src="../../image/meeting.png" width="40">学术会议</li>
                   
                      <ul class="sider_ul_2">
                        <li class="sider_li_2 menu_chioce now_li_2"><a href="academic_meeting.php">数据查询</a></li>
                        <li  class="sider_li_2 menu_chioce"><a href="academic_meeting_add.php">数据管理</a></li>
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
           <?php
              
              $menu_item = $_SESSION["menu_item"];
           ?>
          
            <fieldset>
                <form  method="post"  action="#"  enctype="multipart/form-data">
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
                        <input type="text" name=" meetingNumber"  >
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
                  <input class="btn btn-success"  id="btn-condition" type="submit" value="查询"  >    
                </div>
          </form>
          </fieldset>

          <table class="table_gen" border="1">
           
              <?php
                 header("Content-type: text/html; charset:utf-8");                 
                  
                     $num_condition = 0;
                     $sql="SELECT * FROM academic_meeting ";

                     $meetingType = isset($_POST["meetingType"])?$_POST["meetingType"]:"";
                     if(!empty($meetingType))
                      {
                       
                        $num_condition++;
                        if($num_condition==1)
                          {
                            $sql.="WHERE meetingType ='$meetingType'";
                          }
                        else
                        {
                           $sql.="AND meetingType ='$meetingType'";
                        }
                          
                      }

                    $meetingName = isset($_POST["meetingName"])?$_POST["meetingName"]:"";

                     if(!empty($meetingName))
                      {
                        
                        $num_condition++;
                        if($num_condition==1)
                        {
                          $sql.="WHERE meetingName LIKE '%$meetingName%'";
                        }
                        else
                        {
                           $sql.= "AND meetingName LIKE '%$meetingName%'";
                        }

                      }

                      $hostUnit = isset($_POST["hostUnit"])?$_POST["hostUnit"]:"";
                     if(!empty($hostUnit))
                     {
                      $num_condition++;         
                      if($num_condition==1)
                        {
                          $sql.="WHERE hostUnit LIKE '%$hostUnit%'";
                        }
                      else
                        {
                           $sql.= "AND hostUnit  LIKE '%$hostUnit%'";
                        }  
                     }
                      
                      $coUnit = isset($_POST["coUnit"])?$_POST["coUnit"]:"";
                     if(!empty($coUnit))
                     {
                      $num_condition++;
                      
                      if($num_condition==1)
                        {
                          $sql.="WHERE coUnit  LIKE '%$coUnit%'";
                        }
                      else
                        {
                           $sql.= "AND coUnit  LIKE '%$coUnit%'";
                        }  
                     }

                     $meetingNumber = isset($_POST["meetingNumber"])?$_POST["meetingNumber"]:"";
                     if(!empty($meetingNumber))
                     {
                      $num_condition++;
                      
                      if($num_condition==1)
                        {
                          $sql.="WHERE meetingNumber  LIKE '%$meetingNumber%'";
                        }
                      else
                        {
                           $sql.= "AND meetingNumber LIKE '%$meetingNumber%'";
                        }  
                     }

                     $communicateForm = isset($_POST["communicateForm"])?$_POST["communicateForm"]:"";
                     if(!empty($communicateForm))
                      {
                        $num_condition++;
                       
                      if($num_condition==1)
                        {
                          $sql.="WHERE communicateForm  LIKE '%$communicateForm%'";
                        }
                      else
                        {
                           $sql.= "AND communicateForm  LIKE '%$communicateForm%'";
                        }  
                     }

                     $meetingPlace = isset($_POST["meetingPlace"])?$_POST["meetingPlace"]:"";
                     if(!empty($meetingPlace))
                    {
                      $num_condition++;
                      
                      if($num_condition==1)
                        {
                          $sql.="WHERE meetingPlace  LIKE '%$meetingPlace%'";
                        }
                      else
                        {
                           $sql.= "AND meetingPlace  LIKE '%$meetingPlace%'";
                        }  
                     }

                     $meetingTime =  isset($_POST["meetingTime"])?$_POST["meetingTime"]:"";
                     if(!empty($meetingTime))
                     {
                      $num_condition++;
                     
                      if($num_condition==1)
                        {
                          $sql.="WHERE meetingTime  LIKE '%$meetingTime%'";
                        }
                      else
                        {
                           $sql.= "AND meetingTime  LIKE '%$meetingTime%'";
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
                                echo"<tr><td>会议类型";     
                                echo"<td>会议名称</td>";
                                echo"<td>主办单位</td>";
                                echo"<td>协办单位</td>";
                                echo"<td>会议人数</td>";
                                echo"<td>交流形式</td>";
                                echo"<td>会议地点</td>";
                                echo"<td>会议时间</td>";
                                echo"</td></tr>";
                                 $head = 1;
                              }
                          while($row=mysqli_fetch_array($result))
                          {
                                 echo"<input type='hidden' name='table_name' value='academic_meeting'>";
                                echo"<tr><td>".$row['meetingType']."</td>";     
                                echo"<td>".$row['meetingName']."</td>";
                                echo"<td>".$row['hostUnit']."</td>";
                                echo"<td>".$row['coUnit']."</td>";
                                echo"<td>".$row['meetingNumber']."</td>";
                                echo"<td>".$row['communicateForm']."</td>";
                                echo"<td>".$row['meetingPlace']."</td>";
                                echo"<td>".$row['meetingTime']."</td>";

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

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
   $(function(){
    setSize();
   }
    )
       $(window).resize(function(){
          setSize();
       });
        function setSize() {
            //var height1 = $("#bgConsure").height();              
            var width1 = $("#background-width").width();
            //var width11 = parseInt(width1);
            var width_status = parseInt(width1) - 220;       
           
            $("#right-text").css('width',width_status);
            $("fieldset").css('width',width_status*0.8);
             $("#status1").css('width',width_status);
            $("#status2").css('width',width_status);
            //alert(left);
            // alert(width1);   
        }   
    </script> 
  <link href="../css/base.css" type="text/css" rel="stylesheet"/>
 </head>
 <body>
<div id="background-width" style="height:0;"></div>
 <div id="container">
      <div id="head">
          <div id="logo">
            <img src="../image/logo.png" width="220" height="78">
          </div>
          <div id="status1">
            <?php 
                 include_once("../php/connect.php"); 
                 session_start();
                 $loginNumber = $_SESSION["temp"][0];
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
            <a class="a_exit" href="index.php">退出系统</a>
            <p class="to_remind">欢迎您，<span>
              <?php  
               echo $name;
                   ?> 
            </span>管理员</p>
         
          </div>
          <div id="status2">
            
             <p class="remind">请选择相应条件进行查询  </p>
         
          </div>

        </div>
        <div id="main-content">
          <div id="sider">
            <ul>
               <li class="now_li"><a class="a_sider a_now" href="#"  >科研项目</a></li>
           
            </ul>
          </div>
          <div id="right-text">
           <div class="data_add"><a href="research_project_add.php">数据管理></a></div>
            <div class="table_input_area">
              <fieldset>
              <form  method="post"  action="#"  enctype="multipart/form-data">
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
                  <input class="btn btn-success"  id="btn-condition" type="submit" value="提交"  >

               
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

                     $projectTime = isset($_POST["projectTime"])?$_POST["projectTime"]:"";
                     if(!empty($projectTime))
                    {
                      $num_condition++;
                      
                      if($num_condition==1)
                        {
                          $sql.="WHERE projectTime  LIKE '%$projectTime%'";
                        }
                      else
                        {
                           $sql.= "AND projectTime  LIKE '%$projectTime%'";
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
                                echo"<td>起止年限</td>";
                                echo"<td>项目状态</td>";
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
    <p>Designed by Code.R</p>
  </div>
 </body>
</html>

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
                
                   <li name="research_project" class="sider_li_1"><img src="../../image/item.png" width="40">科研项目</li>
                      <ul class="sider_ul_2">
                        <li class="sider_li_2"><a href="../research_project/research_project.php">数据查询</a></li>
                        <li  class="sider_li_2"><a href="../research_project/research_project_add.php">数据管理</a></li>
                        <li class="sider_li_2"><a href="../research_project/research_project_induce.php">数据导入</a></li>
                      </ul>
                 
              
               <li name="thesis"  class="now_li sider_li_1"><img src="../../image/thesis.png" width="40">论文发表</li>
                   <ul class="sider_ul_2">
                        <li class="sider_li_2  menu_chioce now_li_2 "><a href="thesis.php">数据查询</a></li>
                        <li  class="sider_li_2  menu_chioce"><a href="thesis_add.php">数据管理</a></li>
                        <li class="sider_li_2  menu_chioce"><a href="thesis_induce.php">数据导入</a></li>
                  </ul>
               
              <li name="111"  class="sider_li_1"><img src="../../image/patent.png" width="40">专利情况</li>
                    <ul class="sider_ul_2">
                        <li class="sider_li_2  "><a href="research_project.php">数据查询</a></li>
                        <li  class="sider_li_2 "><a href="research_project_add.php">数据管理</a></li>
                        <li class="sider_li_2 "><a href="research_project_induce.php">数据导入</a></li>
                      </ul>
               
               <li class="sider_li_1"><img src="../../image/book.png" width="40">学术专著</li>
                    <ul class="sider_ul_2">
                        <li class="sider_li_2  "><a href="research_project.php">数据查询</a></li>
                        <li  class="sider_li_2 "><a href="research_project_add.php">数据管理</a></li>
                        <li class="sider_li_2 "><a href="research_project_induce.php">数据导入</a></li>
                      </ul>
              
               <li class="sider_li_1"><img src="../../image/meeting.png" width="40">学术会议</li>
                    <ul class="sider_ul_2">
                        <li class="sider_li_2  "><a href="research_project.php">数据查询</a></li>
                        <li  class="sider_li_2 "><a href="research_project_add.php">数据管理</a></li>
                        <li class="sider_li_2 "><a href="research_project_induce.php">数据导入</a></li>
                      </ul>
               
               <li class="sider_li_1"><img src="../../image/plat.png" width="40">科技平台</li>
                   <ul class="sider_ul_2">
                        <li class="sider_li_2  "><a href="research_project.php">数据查询</a></li>
                        <li  class="sider_li_2 "><a href="research_project_add.php">数据管理</a></li>
                        <li class="sider_li_2 "><a href="research_project_induce.php">数据导入</a></li>
                      </ul>
               
               <li class="sider_li_1"><img src="../../image/award.png" width="40">获奖情况 </li>
                    <ul class="sider_ul_2">
                        <li class="sider_li_2  "><a href="research_project.php">数据查询</a></li>
                        <li  class="sider_li_2 "><a href="research_project_add.php">数据管理</a></li>
                        <li class="sider_li_2 "><a href="research_project_induce.php">数据导入</a></li>
                      </ul>
              
               <li class="sider_li_1"><img src="../../image/position.png" width="40">学团职务 </li>
                    <ul class="sider_ul_2">
                        <li class="sider_li_2  "><a href="research_project.php">数据查询</a></li>
                        <li  class="sider_li_2 "><a href="research_project_add.php">数据管理</a></li>
                        <li class="sider_li_2 "><a href="research_project_induce.php">数据导入</a></li>
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
                      <label>论文类型</label>          
                        <select name ="thesisType">  
                          <option value ="">所有</option>
                          <option value ="SCI检索"> SCI检索</option>
                          <option value ="EI检索">EI检索</option>
                          <option value =" SSCI"> SSCI</option>           
                          <option value ="A＆HCI">A＆HCI</option>
                          <option value ="一类核心期刊(A1、A2)">一类核心期刊（A1、A2）</option>
                          <option value ="二类核心期刊(B1、B2)">二类核心期刊(B1、B2)</option>
                          <option value ="中文核心期刊">中文核心期刊</option>
                          <option value ="一般期刊">一般期刊</option>
                          <option value ="国际会议论文集(ISTP)">国际会议论文集（ISTP）</option>
                          <option value ="国内会议论文集">国内会议论文集</option>
                          <option value ="其它相关学科"> 其它相关学科</option>            
                        </select> 
                    </div>
                    <div class="select_block"> 
                      <label>第一作者</label>
                      <input type="text" name="firstAuthor" >                             
                    </div>
                    <div class="select_block">    
                       <label>通讯作者</label>
                      <input type="text" name="corresAuthor"  >
                    </div>    
                  </div>
            
                  <div class="condition_select">
                     <div class="select_block">
                          <label>论文题目(中文)</label>
                          <input type="text" name="thesisTopicZh" >
                      </div>
                      <div class="select_block">
                        <label>论文题目(英文)</label>
                        <input type="text" name="thesisTopicEn"  >
                      </div>
                     <div class="select_block">
                        <label>期刊或会议名称</label>
                        <input type="text" name="journalName"  >
                      </div>
                  </div> 
                 <div class="condition_select">
                    <div class="select_block">
                      <label>影响因子</label>
                        <input type="text" name="factor" >
                    </div>
                    <div class="select_block">
                        <label>发表年份 </label>
                        <input type="text" name="publishYear" >  
                    </div>
                    <div class="select_block">
                        <label>卷期/页码</label>
                        <input type="text" name="volume" >  
                    </div>
                     <div class="select_block">
                        <label>他引频次</label>
                        <input type="text" name="quoteFrequency" >  
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
                     $sql="SELECT * FROM thesis ";

                     $thesisType = isset($_POST["thesisType"])?$_POST["thesisType"]:"";
                     if(!empty($thesisType))
                      {
                       
                        $num_condition++;
                        if($num_condition==1)
                          {
                            $sql.="WHERE thesisType ='$thesisType'";
                          }
                        else
                        {
                           $sql.="AND thesisType ='$thesisType'";
                        }
                          
                      }

                    $firstAuthor = isset($_POST["firstAuthor"])?$_POST["firstAuthor"]:"";

                     if(!empty($firstAuthor))
                      {
                        
                        $num_condition++;
                        if($num_condition==1)
                        {
                          $sql.="WHERE firstAuthor LIKE '%$firstAuthor%'";
                        }
                        else
                        {
                           $sql.= "AND firstAuthor LIKE '%$firstAuthor%'";
                        }

                      }

                       $corresAuthor = isset($_POST["corresAuthor"])?$_POST["corresAuthor"]:"";

                     if(!empty($corresAuthor))
                      {
                        
                        $num_condition++;
                        if($num_condition==1)
                        {
                          $sql.="WHERE corresAuthor LIKE '%$corresAuthor%'";
                        }
                        else
                        {
                           $sql.= "AND corresAuthor LIKE '%$corresAuthor%'";
                        }

                      }
                      
                      if(!empty($thesisTopicZh))
                      {
                        
                        $num_condition++;
                        if($num_condition==1)
                        {
                          $sql.="WHERE thesisTopicZh LIKE '%$thesisTopicZh%'";
                        }
                        else
                        {
                           $sql.= "AND thesisTopicZh LIKE '%$thesisTopicZh%'";
                        }

                      }

                      if(!empty($thesisTopicEn))
                      {
                        
                        $num_condition++;
                        if($num_condition==1)
                        {
                          $sql.="WHERE thesisTopicEn LIKE '%$thesisTopicEn%'";
                        }
                        else
                        {
                           $sql.= "AND thesisTopicEn LIKE '%$thesisTopicEn%'";
                        }

                      }


                      if(!empty($journalName))
                      {
                        
                        $num_condition++;
                        if($num_condition==1)
                        {
                          $sql.="WHERE journalName LIKE '%$journalName%'";
                        }
                        else
                        {
                           $sql.= "AND thesisTopicEn LIKE '%$journalName%'";
                        }

                      }


                      if(!empty($factor))
                      {
                        
                        $num_condition++;
                        if($num_condition==1)
                        {
                          $sql.="WHERE factor LIKE '%$factor%'";
                        }
                        else
                        {
                           $sql.= "AND factor LIKE '%$factor%'";
                        }

                      }

                    if(!empty($publishYear))
                      {
                        
                        $num_condition++;
                        if($num_condition==1)
                        {
                          $sql.="WHERE publishYear LIKE '%$publishYear%'";
                        }
                        else
                        {
                           $sql.= "AND publishYear LIKE '%$publishYear%'";
                        }

                      }

                       if(!empty($volume))
                      {
                        
                        $num_condition++;
                        if($num_condition==1)
                        {
                          $sql.="WHERE volume LIKE '%$volume%'";
                        }
                        else
                        {
                           $sql.= "AND volume LIKE '%$volume%'";
                        }

                      }

                      if(!empty($quoteFrequency))
                      {
                        
                        $num_condition++;
                        if($num_condition==1)
                        {
                          $sql.="WHERE quoteFrequency LIKE '%$quoteFrequency%'";
                        }
                        else
                        {
                           $sql.= "AND quoteFrequency LIKE '%$quoteFrequency%'";
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
                                echo"<tr><td>论文类型";     
                                echo"<td>第一作者</td>";
                                echo"<td>通讯作者</td>";
                                echo"<td>论文题目(中文)</td>";
                                echo"<td>论文题目(英文)</td>";
                                echo"<td>期刊或会议名称</td>";
                                echo"<td>影响因子</td>";
                              
                                echo"<td>发表年份</td>";
                                echo"<td>卷期/页码</td>";
                                echo"<td>他引频次</td>"; 
                                echo"</td></tr>";
                                 $head = 1;
                              }
                          while($row=mysqli_fetch_array($result))
                          {
                          
                                echo"<tr><td>".$row['thesisType']."</td>";     
                                echo"<td>".$row['firstAuthor']."</td>";
                                echo"<td>".$row['corresAuthor']."</td>";
                                echo"<td>".$row['thesisTopicZh']."</td>";
                                echo"<td>".$row['thesisTopicEn']."</td>";
                                echo"<td>".$row['journalName']."</td>";
                                echo"<td>".$row['factor']."</td>";
                                echo"<td>".$row['publishYear']."</td>";
                                echo"<td>".$row['volume']."</td>";
                                echo"<td>".$row['quoteFrequency']."</td>";
                                
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
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
              
                var ok10=false;   

                $('.submit').click(function(){
                if($('select[name="thesisType"]').val().length >0)
                  {
                    
                    ok1=true;
                  }
                if($('input[name="Author"]').val().length > 0)
                  {
                    ok2=true;
                  }
                if($('input[name="cn"]').val().length >= 1)
                  {
                    ok3=true;
                  }
                if($('input[name="thesisTopic"]').val().length >= 1)
                  {
                    ok4=true;
                  }
                if($('input[name="hostUnit"]').val().length >= 1)
                  {
                    ok5=true;
                  }
                  //alert("ok2");
                if($('input[name="journalName"]').val().length >= 1)
                  {
                    ok6=true;
                  }
                  // alert("ok2");
                if($('input[name="factor"]').val().length >= 1)
                  {
                    ok7=true;
                  }
                if($('input[name="publishYear"]').val().length >= 1)
                 { 
                  ok8=true;
                }
              
                if($('input[name="quoteFrequency"]').val().length >= 1)
                 { 
                  ok10=true;
                }
               
                if(ok1==true&&ok2==true&&ok3==true&&ok4==true&&ok5==true&&ok6==true&&ok7==true&&ok8==true&&ok10==true)
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
                  $_SESSION["table_name"][0] ='thesis';
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
                        <li class="sider_li_2  "><a href="../research_project/research_project.php">数据查询</a></li>
                        <li  class="sider_li_2 "><a href="../research_project/research_project.php">数据管理</a></li>
                        <li class="sider_li_2 "><a href="../research_project/research_project.php">数据导入</a></li>
                      </ul>
                 
              
               <li name="thesis now_li "  class="sider_li_1"><img src="../../image/thesis.png" width="40">论文发表</li>
                   <ul class="sider_ul_2">
                     <li class="sider_li_2 menu_chioce "><a href="thesis.php">数据查询</a></li>
                        <li  class="sider_li_2 menu_chioce now_li_2"><a href="thesis_add.php">数据管理</a></li>
                        <li class="sider_li_2 menu_chioce"><a href="thesis_induce.php">数据导入</a></li>
                       
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
          <fieldset>
                <form  method="post"  action="#"  enctype="multipart/form-data">
                   <div class="condition_select">
                    <div class="select_block">
                      <label>论文类型</label>          
                        <select name ="thesisType">  
                          <option value ="">未选择</option>
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
                      <label>论文作者</label>
                      <input type="text" name="Author" >   

                    </div>
                     <div class="select_block">
                          <label>论文题目</label>
                          <input type="text" name="thesisTopic" >
                      </div>
                  </div>
            
                  <div class="condition_select">      
                     <div class="select_block">
                        <label>期刊或会议名称</label>
                        <input type="text" name="journalName">
                      </div>

                      <div class="select_block">
                        <label>CN/ISSN</label>
                        <input type="text" name="cn"  >
                      </div>

                      <div class="select_block">
                        <label>主办单位</label>
                        <input type="text" name="hostUnit"  >
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
                        <label>他引频次</label>
                        <input type="text" name="quoteFrequency" >  
                    </div>
                </div>   
                  
              <div style="clear:both;"></div>
               <div class="btn-center">
                  <input class="btn btn-success submit"  type="submit" value="添加一条数据"  >
                  </div>
               
          </form>
        </fieldset>
         <form action="../../php/research_project_del.php" id="bdkey" method="post">
          <table class="table_gen" border="1">
          
              <?php
                 header("Content-type: text/html; charset:utf-8");                 
                  
                     $num_condition = 0;
                     //$sql="SELECT * FROM research_project ";

                     $thesisType = isset($_POST["thesisType"])?$_POST["thesisType"]:"";
                     $Author = isset($_POST["Author"])?$_POST["Author"]:"";
                    
                     $thesisTopic = isset($_POST["thesisTopic"])?$_POST["thesisTopic"]:"";
                     
                     $journalName = isset($_POST["journalName"])?$_POST["journalName"]:"";
                     $cn = isset($_POST["cn"])?$_POST["cn"]:"";
                     $hostUnit = isset($_POST["hostUnit"])?$_POST["hostUnit"]:"";
                     $factor = isset($_POST["factor"])?$_POST["factor"]:"";
                     $publishYear = isset($_POST["publishYear"])?$_POST["publishYear"]:"";
                     $volume = isset($_POST["volume"])?$_POST["volume"]:"";
                     $quoteFrequency = isset($_POST["quoteFrequency"])?$_POST["quoteFrequency"]:"";
                    
                    if(!empty($thesisType)&&!empty($Author)&&!empty($cn)&&!empty($thesisTopic)&&!empty($hostUnit)&&!empty($journalName)&&!empty($factor)&&!empty($publishYear)&&!empty($quoteFrequency))
                    {
                     $sql="SELECT MAX(id) FROM thesis";
                     $result = mysqli_query($mysqli,$sql);
                     $row = mysqli_fetch_array($result);
                     $id=$row[0]+1; 
                     //echo $id;
                     $sql="INSERT INTO thesis(`id`,`thesisType`, `Author`, `thesisTopic`, `journalName`, `cn`, `hostUnit`,`factor`,  `publishYear`,`quoteFrequency`) 
                     VALUES ( '$id','$thesisType','$Author','$thesisTopic','$journalName','$cn','$hostUnit','$factor','$publishYear','$quoteFrequency')"; 
                      echo $sql."</br>";
                      mysqli_query($mysqli,"SET NAMES UTF8");

                      $result = mysqli_query($mysqli,$sql); 
                      //echo $sql."</br>";     
                    }
                      $sql="SELECT * FROM thesis";
                      mysqli_query($mysqli,"SET NAMES UTF8");
                      $head = 0;
                      //echo $sql."</br>";
                      $result = mysqli_query($mysqli,$sql);
                      $sum = 0;
                      if(mysqli_num_rows($result)>0)
                      {
                        if($head==0)
                             {
                              echo"<input type='hidden' name='table_name' value='thesis'>";
                                echo"<tr><td>论文类型</td>";     
                                echo"<td>论文作者</td>";                
                                echo"<td>论文题目</td>";
                                echo"<td>期刊或会议名称</td>";
                                echo"<td>CN/ISSN</td>";
                                echo"<td>主办单位</td>";
                                echo"<td>影响因子</td>";                               
                                echo"<td>发表年份</td>";
      
                                echo"<td>他引频次</td>"; 
                                 if($power==0)
                                  echo"<td>管理选项<br>全 选 
<input type='checkbox' name='selectAll' value='checkbox' onClick={selectIt('selectAll')}></td>";
                                echo"</td></tr>";
                                 $head = 1;
                              }
                          while($row=mysqli_fetch_array($result))
                          {
                             if($power==0){
                                echo"<tr><td class='edit' id='".$row['id']."#"."thesisType'>".$row['thesisType']."</td>";     
                                echo"<td class='edit'   id='".$row['id']."#"."Author'>".$row['Author']."</td>";
                              
                                echo"<td class='edit'  id='".$row['id']."#"."thesisTopic'>".$row['thesisTopic']."</td>";
                               
                                echo"<td class='edit'  id='".$row['id']."#"."journalName'>".$row['journalName']."</td>";
                                echo"<td class='edit'  id='".$row['id']."#"."cn'>".$row['cn']."</td>";
                                echo"<td class='edit'   id='".$row['id']."#"."hostUnit'>".$row['hostUnit']."</td>";


                                echo"<td class='edit'  id='".$row['id']."#"."factor'>".$row['factor']."</td>";
                                echo"<td class='edit'  id='".$row['id']."#"."publishYear'>".$row['publishYear']."</td>";
                               
                                echo"<td class='edit' class='edit'  id='".$row['id']."#"."quoteFrequency'>".$row['quoteFrequency']."</td>";
                                }
                                else if($power==1)
                                {
                                echo"<tr><td class='edit' id='".$row['id']."#"."thesisType'>".$row['thesisType']."</td>";     
                                echo"<td  id='".$row['id']."#"."Author'>".$row['Author']."</td>";
                              
                                echo"<td  id='".$row['id']."#"."thesisTopic'>".$row['thesisTopic']."</td>";
                               
                                echo"<td  id='".$row['id']."#"."journalName'>".$row['journalName']."</td>";
                                echo"<td  id='".$row['id']."#"."cn'>".$row['cn']."</td>";
                                echo"<td  id='".$row['id']."#"."hostUnit'>".$row['hostUnit']."</td>";


                                echo"<td id='".$row['id']."#"."factor'>".$row['factor']."</td>";
                                echo"<td  id='".$row['id']."#"."publishYear'>".$row['publishYear']."</td>";
                               
                                echo"<td  id='".$row['id']."#"."quoteFrequency'>".$row['quoteFrequency']."</td>";
                                }
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

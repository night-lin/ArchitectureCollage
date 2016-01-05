<?php
    header("Content-type: text/html; charset=utf-8"); 
    include_once("connect.php"); 
    $dir=dirname(__FILE__);//获取当前脚本的绝对路径                
    $dir=str_replace("//","/",$dir)."/";
    //echo $_FILES['testFile']['name'];
    $table_name=$_POST["table_name"];
    if($_FILES['testFile']['name']==''){
       echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
       echo"
          <script>alert('未选择文件！');
          window.location.href='../html/".$table_name."/".$table_name."_induce.php'</script>";
    }
    else
      {
      $filename='uploadFile.xls'; //可以定义一个上传后的文件名称
      $result=move_uploaded_file($_FILES['testFile']['tmp_name'],$dir.$filename);// 
      $mysqli->query("set names 'utf8'");
      //如果上传文件成功，就执行导入excel操作
      if($result)  
      {
       require_once 'reader.php';
       $data = new Spreadsheet_Excel_Reader();
       $data->setOutputEncoding('utf-8');//设置在页面中输出的编码方式
        //该方法会自动判断上传的文件格式，不符合要求会显示错误提示信息(错误提示信息在该方法内部)。
       $data->read("$filename");  //读取上传到当前目录下名叫$filename的文件
       error_reporting(E_ALL ^ E_NOTICE);
       //如果excel表带标题，则从$i=2开始，去掉excel表中的标题部分(要将$i<=改为$i<否则会插入一条多余的空数据)
      // echo $data->sheets[0]['numRows']."</br>";
       for ($i = 2; $i<=$data->sheets[0]['numRows']; $i++)
       {
        //设定id值
        $sql="SELECT MAX(id) FROM $table_name";
        $result = $mysqli->query($sql);
        $row = mysqli_fetch_array($result);
        $id=$row[0]+1; 
        switch ($table_name) {
          case 'research_project':
          $sql = "INSERT INTO $table_name(id,projectType,projectDepartment,projectName,projectMaster,projectMember,
          projectFunding,projectTime, projectState) VALUES('".
          $id."','".
          $data->sheets[0]['cells'][$i][1]."','".    
          $data->sheets[0]['cells'][$i][2]."','". 
          $data->sheets[0]['cells'][$i][3]."','".    
          $data->sheets[0]['cells'][$i][4]."','". 
          $data->sheets[0]['cells'][$i][5]."','".    
          $data->sheets[0]['cells'][$i][6]."','". 
          $data->sheets[0]['cells'][$i][7]."','".    
          $data->sheets[0]['cells'][$i][8]."')";   
            break;
          case 'thesis': 
          $sql = "INSERT INTO $table_name(`id`, `thesisType`, `firstAuthor`, `corresAuthor`, `thesisTopicZh`, `thesisTopicEn`, `journalName`, `factor`, `publishYear`, `volume`, `quoteFrequency`)
          VALUES('".
          $id."','".
          $data->sheets[0]['cells'][$i][1]."','".    
          $data->sheets[0]['cells'][$i][2]."','". 
          $data->sheets[0]['cells'][$i][3]."','".    
          $data->sheets[0]['cells'][$i][4]."','". 
          $data->sheets[0]['cells'][$i][5]."','".    
          $data->sheets[0]['cells'][$i][6]."','". 
          $data->sheets[0]['cells'][$i][7]."','".
          $data->sheets[0]['cells'][$i][8]."','". 
          $data->sheets[0]['cells'][$i][9]."','".    
          $data->sheets[0]['cells'][$i][10]."')";
          break;
           case 'patent': 
             $sql = "INSERT INTO $table_name(`id`, `patentType`, `authorizeCountry`, `patentState`, `inventor`, `patentName`, `authorizeNumber`)
          VALUES('".
          $id."','".
          $data->sheets[0]['cells'][$i][1]."','".    
          $data->sheets[0]['cells'][$i][2]."','". 
          $data->sheets[0]['cells'][$i][3]."','".    
          $data->sheets[0]['cells'][$i][4]."','". 
          $data->sheets[0]['cells'][$i][5]."','".    
          $data->sheets[0]['cells'][$i][6]."')";
          break; 
           case 'academic_book': 
            $sql = "INSERT INTO $table_name(`id`, `author`, `bookName`, `bookCategory`, `publishUnit`, `bookNumber`, `publishDate`, `subjectCategory`)
          VALUES('".
          $id."','".
          $data->sheets[0]['cells'][$i][1]."','".    
          $data->sheets[0]['cells'][$i][2]."','". 
          $data->sheets[0]['cells'][$i][3]."','".    
          $data->sheets[0]['cells'][$i][4]."','". 
          $data->sheets[0]['cells'][$i][5]."','".
          $data->sheets[0]['cells'][$i][6]."','". 
                 
          $data->sheets[0]['cells'][$i][7]."')";
          break; 
           case 'academic_meeting':
             $sql = "INSERT INTO $table_name(`id`, `meetingType`, `meetingName`, `hostUnit`, `coUnit`, `meetingNumber`, `communicateForm`, `meetingPlace`, `meetingTime`)
          VALUES('".
          $id."','".
          $data->sheets[0]['cells'][$i][1]."','".    
          $data->sheets[0]['cells'][$i][2]."','". 
          $data->sheets[0]['cells'][$i][3]."','".    
          $data->sheets[0]['cells'][$i][4]."','". 
          $data->sheets[0]['cells'][$i][5]."','".    
          $data->sheets[0]['cells'][$i][6]."','". 
          $data->sheets[0]['cells'][$i][7]."','".    
          $data->sheets[0]['cells'][$i][8]."')"; 
          break; 
           case 'science_platform':
            $sql = "INSERT INTO $table_name(`id`, `platformCategory`, `platformName`, `platformMaster`, `cooperUnit`, `contractTime`, `cooperFunds`, `cooperOrganization`)
          VALUES('".
          $id."','".
          $data->sheets[0]['cells'][$i][1]."','".    
          $data->sheets[0]['cells'][$i][2]."','". 
          $data->sheets[0]['cells'][$i][3]."','".    
          $data->sheets[0]['cells'][$i][4]."','". 
          $data->sheets[0]['cells'][$i][5]."','".
          $data->sheets[0]['cells'][$i][6]."','". 
                 
          $data->sheets[0]['cells'][$i][7]."')"; 
          break; 
           case 'award_situation':
           $sql = "INSERT INTO $table_name(`id`, `awardCategory`, `awardName`)
          VALUES('".
          $id."','".
          $data->sheets[0]['cells'][$i][1]."','".    
          $data->sheets[0]['cells'][$i][2]."')"; 
          break; 
           case 'academic_position':
           $sql = "INSERT INTO $table_name(`id`, `organizationName`, `position`, `name`, `unitPosition`, `approvalTime`)
          VALUES('".
          $id."','".
          $data->sheets[0]['cells'][$i][1]."','".
          $data->sheets[0]['cells'][$i][2]."','".
          $data->sheets[0]['cells'][$i][3]."','".
          $data->sheets[0]['cells'][$i][4]."','".    
          $data->sheets[0]['cells'][$i][5]."')";  
          break;  
          
          default:
            # code...
            break;
        }   
          $mysqli->query($sql);
          $insert_info.= " $sql</br>";          //可以用来显示数据插入的信息
          $totalNums=$data->sheets[0]['numRows']-1;//求出导入的总数据条数(这里是减去2，才会得到去除标题后的总数据)
        //echo  $table_name."</br>";
       // echo $insert_info."</br>".$totalNums;
        //echo($totalNums);
        }
       unlink("$filename");  //删除上传的excel文件
       echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
       echo"
            <script>alert('上传成功！');
            window.location.href='../html/".$table_name."/".$table_name."_induce.php'</script>";
      
    }
      else
      {
       $errmsg="上传失败";
      }
    }
?>
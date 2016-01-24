<?php
	 session_start();
	 header("Content-type: text/html; charset=utf-8"); 
	//引入PHPExcel库文件
	include 'PHPExcel_1.8.0_doc/Classes/PHPExcel.php';
			
	 include_once("connect.php");
	 $action = $_POST["action"];
	 if($action=='删除所选数据')
	 {
		 $table_name = $_SESSION["table_name"][0];
		 if(!isset($_POST["delete_data"]))
		 {
		 	 echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
	     	 echo"
	          <script>
	          window.location.href='../html/".$table_name."/".$table_name."_add.php';alert('未选择数据!')</script>";
		 }
		 //echo(count($delete_id));
		 else{
		 	 $table_name = $_POST["table_name"];
		 
		 	 $delete_id = $_POST["delete_data"];
		 
			 $ok=0; 
			 for($i=0;$i<count($delete_id);$i++)
			 {
			 	$sql="DELETE FROM $table_name WHERE `id`= '$delete_id[$i]'";
			 	mysqli_query($mysqli,$sql);
			 	$ok=1;
			 	
			 }
			 //echo $ok;
			 echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
		     echo"
		          <script>alert('删除成功！,共删除".$i."条数据');
		          window.location.href='../html/".$table_name."/".$table_name."_add.php'</script>";
		      }
		  }
		else if($action=='导出所有数据')
		{
   			//创建对象
			$excel = new PHPExcel();
			$table_name = $_SESSION["table_name"][0];
     		switch ($table_name) {
     		case (strstr($table_name,'research_project')):
      		$table_name_ch="科研项目.xls";
      		$sql = "SELECT projectType,projectDepartment,projectName,projectMaster,projectMember,
          projectFunding,projectStart,projectCheck, projectState FROM $table_name";
       		$data[] = array('项目类型','项目下达部门','项目名称','项目负责人','项目组成员','项目经费（万元）','立项时间','验收时间','项目状态'); 
       		break;
      //case 'cb_tc_com_nor':
		    case (strstr($table_name,'thesis')):
		    $table_name_ch="论文.xls";
		    $sql = "SELECT `thesisType`, `Author`,`thesisTopic`, `journalName`,`cn`,`hostUnit`, `factor`, `publishYear`,`quoteFrequency` FROM $table_name";
       		$data[] = array('论文类型',	'论文作者',	'论文题目',	'期刊或会议名称',	'CN/ISSN',	'主办单位',	'影响因子',	'发表年份',	'他引频次'); 
		    break;  
	        case (strstr($table_name,'patent')):
	        $table_name_ch="专利情况.xls";
	        $sql = "SELECT  `patentType`, `authorizeCountry`, `patentState`, `inventor`, `patentName`, `authorizeNumber` FROM $table_name";
       		$data[] = array('专利类型',	'专利授权国',	'专利状态',	'发明人',	'专利名称',	'申请号或授权号'); 
	        break; 
	        case (strstr($table_name,'academic_book')):
	        $table_name_ch="学术专著.xls";
	         $sql = "SELECT   `author`, `bookName`, `bookCategory`, `publishUnit`, `bookNumber`, `publishDate`, `subjectCategory` FROM $table_name";
       		$data[] = array('作者',	'专著名称',	'著作类别',	'出版单位',	'书号',	'出版日期',	'学科分类'); 
       		break; 
      		case (strstr($table_name,'academic_meeting')):
      		$table_name_ch="学术会议.xls";
      		$sql = "SELECT  `meetingType`, `meetingName`, `hostUnit`, `coUnit`, `meetingNumber`, `communicateForm`, `meetingPlace`, `meetingTime` FROM $table_name";
       		$data[] = array('会议类型','会议名称','主办单位','协办单位','会议人数','交流形式',	'会议地点',	'会议时间'); 
        	break; 
	        case (strstr($table_name,'science_platform')):
	        $table_name_ch="科技平台.xls";
	        $sql = "SELECT   `platformCategory`, `platformName`, `platformMaster`, `cooperUnit`, `contractTime`, `cooperFunds`, `cooperOrganization` FROM $table_name";
       		$data[] = array('平台类别',	'平台名称',	'平台负责人',	'合作单位',	'签约时间',	'合作经费',	'产学研合作机构'); 
	        break; 
	      case (strstr($table_name,'award_situation')):
	       $table_name_ch="获奖情况.xls";
	       $sql = "SELECT    `awardCategory`, `awardName` FROM $table_name";
       		$data[] = array('奖励类别',	'奖励名称'); 
	        break; 
	      case (strstr($table_name,'academic_position')):
	       $table_name_ch="学团职务.xls";
	       $sql = "SELECT  `organizationName`, `position`, `name`, `unitPosition`, `approvalTime` FROM $table_name";
       		$data[] = array('学术团体名称',	'担任职务',	'姓名',	'单位职务',	'批准时间'); 
	        break;  
	      default:
        $table_name_ch="未命名.xls";
        break;
    }
    //Excel表格式,这里简略写了8列
    $letter = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
    //表头数组
    //$tableheader = array('学号','姓名','性别','年龄','班级');
    //填充表头信息
    //for($i = 0;$i < count($tableheader);$i++) {
    //$excel->getActiveSheet()->setCellValue("$letter[$i]1","$tableheader[$i]");
   // }
    //表格数组
   // $con = get_db();
    mysqli_query($mysqli,"SET NAMES UTF8");
    $result = mysqli_query($mysqli,$sql);
    //echo $sql."</br>";
    if(mysqli_num_rows($result)>0)
    {

    	while($row = mysqli_fetch_row($result)){$data[] = $row;}
    }
	//else echo"$sql";
    
    for ($i =1;$i <=count($data);$i++) {
          $j = 0;
          foreach ($data[$i-1] as $key=>$value) {
          $excel->getActiveSheet()->setCellValue("$letter[$j]$i","$value");
          $j++;
        }
    }
    
    //创建Excel输入对象
    $write = new PHPExcel_Writer_Excel5($excel);
    header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
    header("Content-Type:application/force-download");
    header("Content-Type:application/vnd.ms-execl");
    header("Content-Type:application/octet-stream");
    header("Content-Type:application/download");;
    header('Content-Disposition:attachment;filename=" '.$table_name_ch.'"');
    header("Content-Transfer-Encoding:binary");
    $write->save('php://output');
		}
?>
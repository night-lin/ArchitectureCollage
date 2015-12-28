-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 12 月 28 日 13:14
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `architecture`
--

-- --------------------------------------------------------

--
-- 表的结构 `academic_book`
--

CREATE TABLE IF NOT EXISTS `academic_book` (
  `id` int(10) NOT NULL,
  `author` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '作者',
  `bookName` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '专著名称',
  `bookCategory` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '著作类别',
  `publishUnit` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '出版单位/出版地',
  `bookNumber` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '书号',
  `publishDate` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '出版日期',
  `subjectCategory` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '学科分类',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `academic_meeting`
--

CREATE TABLE IF NOT EXISTS `academic_meeting` (
  `id` int(10) NOT NULL,
  `meetingType` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '会议类型 ',
  `meetingName` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '会议名称',
  `hostUnit` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '主办单位',
  `coUnit` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '协办单位',
  `meetingNumber` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '会议人数',
  `communicateForm` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '交流形式',
  `meetingPlace` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '会议地点',
  `meetingTime` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '会议时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `academic_position`
--

CREATE TABLE IF NOT EXISTS `academic_position` (
  `id` int(10) NOT NULL,
  `organizationName` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '学术团体名称',
  `position` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '担任职务',
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '姓名',
  `unitPosition` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '单位职务、职称',
  ` approvalTime` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '批准时间',
  PRIMARY KEY (`organizationName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `award_situation`
--

CREATE TABLE IF NOT EXISTS `award_situation` (
  `id` int(10) NOT NULL,
  `awardCategory` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '奖励类别',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `patent`
--

CREATE TABLE IF NOT EXISTS `patent` (
  `id` int(10) NOT NULL,
  `patentType` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '专利类型',
  `authorizeCountry` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '专利授权国',
  `patentState` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '专利状态',
  `inventor` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '发明人',
  `patentName` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '专利名称',
  `authorizeNumber` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '申请号或授权号',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `research_project`
--

CREATE TABLE IF NOT EXISTS `research_project` (
  `id` int(10) NOT NULL,
  `projectType` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '项目类型',
  `projectDepartment` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '项目下达部门',
  `projectName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `projectMaster` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '项目负责人',
  `projectMember` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '项目组成员',
  `projectFunding` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '项目经费',
  `projectTime` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '起止年限',
  `projectState` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '项目状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `research_project`
--

INSERT INTO `research_project` (`id`, `projectType`, `projectDepartment`, `projectName`, `projectMaster`, `projectMember`, `projectFunding`, `projectTime`, `projectState`) VALUES
(1, 'country', '福州大学', '项目1', '张小龙', '张小龙，王东亮，陈明远', '80万', '2014.08-2015.12', 'complete'),
(2, 'country', '科技部', '项目2', '张小龙', '张小龙，王东亮，陈明远', '90万', '2014.08-2015.12', 'complete'),
(3, 'province', '科技部', '项目3', '王俊强', '王俊强，邓雪峰，吴大飞', '100万', '2014.09-2015.12', 'on_serach'),
(4, 'country', '科技部', '项目4', '刘南成', '刘南成，张小龙，王东亮，陈明远', '50万', '2014.09-2016.03', 'on_serach'),
(5, 'province', '国家自然科学基金委员会', '项目5', '王俊强', '王俊强，邓雪峰，吴大飞', '100万', '2014.09-2015.12', 'other'),
(6, 'under_province', '福州大学', '项目6', '张小龙', '张小龙，王东亮，陈明远', '90万', '2014.10-2015.10', 'complete'),
(7, 'under_province', '科技部', '项目7', '王俊强', '王俊强，邓雪峰，吴大飞', '100万', '2014.09-2016.08', 'on_serach');

-- --------------------------------------------------------

--
-- 表的结构 `science_platform`
--

CREATE TABLE IF NOT EXISTS `science_platform` (
  `id` int(10) NOT NULL,
  `platformCategory` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '平台类别',
  `platformName` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '平台名称',
  `platformMaster` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '平台负责人',
  ` cooperUnit` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '合作单位',
  `contractTime` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '签约时间',
  `cooperFunds` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '合作经费',
  `cooperOrganization` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '学研合作机构及名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `thesis`
--

CREATE TABLE IF NOT EXISTS `thesis` (
  `id` int(10) NOT NULL,
  `thesisType` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '论文类型 ',
  `firstAuthor` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '第一作者',
  ` corresAuthor` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '通讯作者',
  `thesisTopicZh` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '中文题目',
  `thesisTopicEn` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '英文题目',
  `journalName` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '期刊或会议名称',
  `factor` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '影响因子',
  `publishYear` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '发表年份',
  `volume` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '卷期',
  `quoteFrequency` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '他引频次',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `loginNumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`loginNumber`, `password`, `name`) VALUES
('T00001', 'T00001', '张三');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

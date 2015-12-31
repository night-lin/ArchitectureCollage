-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 12 月 31 日 14:30
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

--
-- 转存表中的数据 `academic_book`
--

INSERT INTO `academic_book` (`id`, `author`, `bookName`, `bookCategory`, `publishUnit`, `bookNumber`, `publishDate`, `subjectCategory`) VALUES
(2, '45', '44', '专著', '44', '4', '454', '4'),
(4, '56', '89', '译著', '798', '789', '798', '789'),
(5, '国家级项目 ', '福州大学', '1', '1', '1', '1', '1'),
(19, '国家级项目 ', '福州大学', '5', '5', '5', '5', '5');

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

--
-- 转存表中的数据 `academic_meeting`
--

INSERT INTO `academic_meeting` (`id`, `meetingType`, `meetingName`, `hostUnit`, `coUnit`, `meetingNumber`, `communicateForm`, `meetingPlace`, `meetingTime`) VALUES
(1, '国际会议', '45', '45', '45', '45', '研讨', '45', '45'),
(2, '国际会议', '45', '45', '45', '45', '研讨', '45', '45'),
(3, '国际会议', '45', '45', '45', '45', '研讨', '45', '45'),
(4, '国家级项目 ', '福州大学', '1', '1', '1', '1', '1', '1'),
(5, '国家级项目 ', '福州大学', '2', '2', '2', '2', '2', '2'),
(6, '国家级项目 ', '福州大学', '3', '3', '3', '3', '3', '3'),
(7, '国家级项目 ', '福州大学', '4', '4', '4', '4', '4', '4'),
(8, '国家级项目 ', '福州大学', '5', '5', '5', '5', '5', '5');

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
  `approvalTime` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '批准时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `academic_position`
--

INSERT INTO `academic_position` (`id`, `organizationName`, `position`, `name`, `unitPosition`, `approvalTime`) VALUES
(2, '福建省建筑协会', '会长', '张丽', '教授', '2015-11-11'),
(3, '国家级项目 ', '福州大学', '1', '1', '1'),
(4, '454', '4545', '454', '454', '4545'),
(5, '国家级项目 ', '福州大学', '1', '1', '1'),
(6, '国家级项目 ', '福州大学', '2', '2', '2'),
(7, '国家级项目 ', '福州大学', '3', '3', '3'),
(8, '国家级项目 ', '福州大学', '4', '4', '4'),
(9, '国家级项目 ', '福州大学', '5', '5', '5');

-- --------------------------------------------------------

--
-- 表的结构 `award_situation`
--

CREATE TABLE IF NOT EXISTS `award_situation` (
  `id` int(10) NOT NULL,
  `awardCategory` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '奖励类别',
  `awardName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `award_situation`
--

INSERT INTO `award_situation` (`id`, `awardCategory`, `awardName`) VALUES
(1, '国家级一等', '奖励1'),
(2, '国家级项目 ', '福州大学'),
(3, '国家级项目 ', '福州大学'),
(4, '国家级项目 ', '福州大学'),
(5, '国家级项目 ', '福州大学'),
(6, '国家级项目 ', '福州大学');

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

--
-- 转存表中的数据 `patent`
--

INSERT INTO `patent` (`id`, `patentType`, `authorizeCountry`, `patentState`, `inventor`, `patentName`, `authorizeNumber`) VALUES
(1, '专利群', '456456', '申请', '456456', '4545', '4545'),
(2, '专利群', '456456', '申请', '456456', '4545', '4545'),
(3, '国家级项目 ', '福州大学', '1', '1', '1', '1'),
(4, '国家级项目 ', '福州大学', '2', '2', '2', '2'),
(5, '国家级项目 ', '福州大学', '3', '3', '3', '3'),
(8, '国外专利', '56', '公开', '56', '56', '56'),
(9, '专利群', '8456', '申请', '6546', '456', '465'),
(10, '国家级项目 ', '福州大学', '1', '1', '1', '1'),
(11, '国家级项目 ', '福州大学', '2', '2', '2', '2'),
(12, '国家级项目 ', '福州大学', '3', '3', '3', '3'),
(13, '国家级项目 ', '福州大学', '4', '4', '4', '4'),
(14, '国家级项目 ', '福州大学', '5', '5', '5', '5');

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
(1, '国家级项目', '福州大学', '项目1', '张小龙', '张小龙，王东亮，陈明远', '80万', '2014.08-2015.12', '已完结'),
(2, '国家级项目', '科技部', '项目2', '张小龙', '张小龙，王东亮，陈明远', '90万', '2014.08-2015.12', '已完结'),
(3, '省部级项目', '科技部', '项目3', '王俊强', '王俊强，邓雪峰，吴大飞', '100万', '2014.09-2015.12', '在研'),
(4, '国家级项目', '科技部', '项目4', '刘南成', '刘南成，张小龙，王东亮，陈明远', '50万', '2014.09-2016.03', '在研'),
(5, '省部级项目', '国家自然科学基金委员会', '项目5', '王俊强', '王俊强，邓雪峰，吴大飞', '100万', '2014.09-2015.12', '其他'),
(6, '省部级以下', '福州大学', '项目6', '张小龙', '张小龙，王东亮，陈明远', '90万', '2014.10-2015.10', '完结'),
(7, '省部级以下', '科技部', '项目7', '王俊强', '王俊强，邓雪峰，吴大飞', '100万', '2014.09-2016.08', '在研'),
(13, '国家级项目 ', '福州大学', '1', '1', '1', '1', '1', '1'),
(14, '国家级项目 ', '福州大学', '2', '2', '2', '2', '2', '2'),
(15, '国家级项目 ', '福州大学', '3', '3', '3', '3', '3', '3'),
(16, '国家级项目 ', '福州大学', '4', '4', '4', '4', '4', '4'),
(17, '国家级项目 ', '福州大学', '5', '5', '5', '5', '5', '5');

-- --------------------------------------------------------

--
-- 表的结构 `science_platform`
--

CREATE TABLE IF NOT EXISTS `science_platform` (
  `id` int(10) NOT NULL,
  `platformCategory` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '平台类别',
  `platformName` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '平台名称',
  `platformMaster` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '平台负责人',
  `cooperUnit` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '合作单位',
  `contractTime` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '签约时间',
  `cooperFunds` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '合作经费',
  `cooperOrganization` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '学研合作机构及名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `science_platform`
--

INSERT INTO `science_platform` (`id`, `platformCategory`, `platformName`, `platformMaster`, `cooperUnit`, `contractTime`, `cooperFunds`, `cooperOrganization`) VALUES
(1, '省级', '658546', '879789', '465456', '456456', '45656', '456456'),
(4, '部级、央企产学研合作平台', '65656', '5656', '4545', '5454', '54', '65265'),
(14, '国家级项目 ', '福州大学', '5', '5', '5', '5', '5'),
(15, '国家级项目 ', '福州大学', '1', '1', '1', '1', '1'),
(16, '国家级项目 ', '福州大学', '2', '2', '2', '2', '2'),
(17, '国家级项目 ', '福州大学', '3', '3', '3', '3', '3'),
(18, '国家级项目 ', '福州大学', '4', '4', '4', '4', '4'),
(19, '国家级项目 ', '福州大学', '5', '5', '5', '5', '5');

-- --------------------------------------------------------

--
-- 表的结构 `thesis`
--

CREATE TABLE IF NOT EXISTS `thesis` (
  `id` int(10) NOT NULL,
  `thesisType` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '论文类型 ',
  `firstAuthor` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '第一作者',
  `corresAuthor` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '通讯作者',
  `thesisTopicZh` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '中文题目',
  `thesisTopicEn` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '英文题目',
  `journalName` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '期刊或会议名称',
  `factor` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '影响因子',
  `publishYear` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '发表年份',
  `volume` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '卷期',
  `quoteFrequency` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '他引频次',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `thesis`
--

INSERT INTO `thesis` (`id`, `thesisType`, `firstAuthor`, `corresAuthor`, `thesisTopicZh`, `thesisTopicEn`, `journalName`, `factor`, `publishYear`, `volume`, `quoteFrequency`) VALUES
(1, 'SCI检索', '11', '11', '11', '11', '11', '11', '11', '11', '11'),
(2, 'SCI检索', '11', '11', '22', '22', '22', '22', '22', '22', '22'),
(3, '国家级项目 ', '福州大学', '1', '1', '1', '1', '1', '1', '', ''),
(4, '国家级项目 ', '福州大学', '2', '2', '2', '2', '2', '2', '', ''),
(5, '国家级项目 ', '福州大学', '3', '3', '3', '3', '3', '3', '', ''),
(6, '国家级项目 ', '福州大学', '4', '4', '4', '4', '4', '4', '', ''),
(7, '国家级项目 ', '福州大学', '5', '5', '5', '5', '5', '5', '', '');

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

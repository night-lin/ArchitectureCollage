-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 12 月 21 日 17:36
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
-- 表的结构 `research_project`
--

CREATE TABLE IF NOT EXISTS `research_project` (
  `projectType` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '项目类型',
  `projectDepartment` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '项目下达部门',
  `projectName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `projectMaster` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '项目负责人',
  `projectMember` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '项目组成员',
  `projectFunding` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '项目经费',
  `projectTime` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '起止年限',
  `projectState` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '项目状态'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `research_project`
--

INSERT INTO `research_project` (`projectType`, `projectDepartment`, `projectName`, `projectMaster`, `projectMember`, `projectFunding`, `projectTime`, `projectState`) VALUES
('country', '福州大学', '项目1', '张小龙', '张小龙，王东亮，陈明远', '80万', '2014.08-2015.12', 'complete'),
('country', '科技部', '项目2', '张小龙', '张小龙，王东亮，陈明远', '90万', '2014.08-2015.12', 'complete'),
('province', '科技部', '项目3', '王俊强', '王俊强，邓雪峰，吴大飞', '100万', '2014.09-2015.12', 'on_serach'),
('country', '科技部', '项目4', '刘南成', '刘南成，张小龙，王东亮，陈明远', '50万', '2014.09-2016.03', 'on_serach'),
('province', '国家自然科学基金委员会', '项目5', '王俊强', '王俊强，邓雪峰，吴大飞', '100万', '2014.09-2015.12', 'other'),
('under_province', '福州大学', '项目6', '张小龙', '张小龙，王东亮，陈明远', '90万', '2014.10-2015.10', 'complete'),
('under_province', '科技部', '项目7', '王俊强', '王俊强，邓雪峰，吴大飞', '100万', '2014.09-2016.08', 'on_serach');

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

-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 25 Paź 2013, 22:17
-- Wersja serwera: 5.5.20
-- Wersja PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `eurobud`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `career`
--

CREATE TABLE IF NOT EXISTS `career` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(500) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_parent` int(11) NOT NULL,
  `parent_type` varchar(50) NOT NULL,
  `photo` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `gallery`
--

INSERT INTO `gallery` (`id`, `id_parent`, `parent_type`, `photo`) VALUES
(1, 1, 'project', '1c2b8c71e885d7f20c53bdf2dc852d7d.JPG');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `image` varchar(300) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `news`
--

INSERT INTO `news` (`id`, `date_added`, `title`, `content`, `image`) VALUES
(1, '0000-00-00 00:00:00', 'Wygralismy przetarg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, libero, ullam saepe animi id fugit hic illo voluptatum. Quae, illo corporis architecto qui illum neque explicabo blanditiis provident est nisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, sit aut neque? Corrupti, excepturi, a, iste ducimus culpa consectetur quae molestiae fuga dicta velit ipsum maiores qui est accusantium nesciunt. ', 'da168d9472c146ecf0f1c98e63bbf9ab.jpg'),
(2, '2013-10-17 19:03:50', 'Nareszcie nowa strona', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec feugiat eros. Duis vitae consectetur mi, non varius massa. Proin rhoncus massa tincidunt elit fermentum bibendum. Vestibulum tempor accumsan dolor, id consequat dolor rhoncus et. Ut tincidunt rhoncus mi in feugiat. Suspendisse dictum non justo vitae viverra. Praesent bibendum quam dui, in faucibus ipsum porttitor non. Aenean sagittis rutrum feugiat. Vivamus luctus nunc augue, quis eleifend turpis lobortis et. Proin ut molestie eros. Vivamus rutrum laoreet ipsum.\r\n\r\nPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque dictum sagittis lectus eu imperdiet. Aenean aliquet viverra ligula a luctus. In rutrum enim vitae mi ullamcorper pharetra. Nullam eget nisl ac ligula placerat suscipit. Etiam vel enim eget erat eleifend fringilla sed non metus. Nunc id risus a lacus vehicula dignissim.\r\n\r\nNunc tempor metus in ultricies faucibus. Aliquam erat volutpat. Donec eu massa nec magna egestas tempor. Sed sed arcu condimentum massa vehicula iaculis. Cras ante ante, placerat nec magna quis, mollis viverra tortor. Nulla nec dapibus neque, et posuere elit. In cursus quam ultrices mattis rutrum. Ut vehicula tortor at justo iaculis sagittis. Nunc sit amet diam pharetra lectus sodales elementum. ', '98d1705bcae1f913d7724f79f4648869.png'),
(3, '2013-10-25 19:23:48', 'hgghghgh', 'ghgh', 'd0e4e2eec4cd6e088bd284b3a6c37f77.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `place` varchar(100) CHARACTER SET utf8 NOT NULL,
  `id_cat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `place`, `id_cat`) VALUES
(1, 'Domek mały', 'Taki se tam domek mały!', 'Wyry', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `projects_cat`
--

CREATE TABLE IF NOT EXISTS `projects_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `projects_cat`
--

INSERT INTO `projects_cat` (`id`, `name`) VALUES
(1, 'Realizacje');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `rent`
--

CREATE TABLE IF NOT EXISTS `rent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(200) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `price` varchar(100) CHARACTER SET utf8 NOT NULL,
  `photo` varchar(300) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `usergroups_access`
--

CREATE TABLE IF NOT EXISTS `usergroups_access` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `element` int(3) NOT NULL,
  `element_id` bigint(20) NOT NULL,
  `module` varchar(140) NOT NULL,
  `controller` varchar(140) NOT NULL,
  `permission` varchar(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Zrzut danych tabeli `usergroups_access`
--

INSERT INTO `usergroups_access` (`id`, `element`, `element_id`, `module`, `controller`, `permission`) VALUES
(1, 1, 2, 'Basic', 'admin', 'read'),
(2, 1, 2, 'Basic', 'admin', 'write'),
(3, 1, 2, 'Basic', 'admin', 'admin'),
(4, 1, 2, 'Basic', 'career', 'read'),
(5, 1, 2, 'Basic', 'career', 'write'),
(6, 1, 2, 'Basic', 'career', 'admin'),
(7, 1, 2, 'Basic', 'gall', 'read'),
(8, 1, 2, 'Basic', 'gall', 'write'),
(9, 1, 2, 'Basic', 'gall', 'admin'),
(10, 1, 2, 'Basic', 'news', 'read'),
(11, 1, 2, 'Basic', 'news', 'write'),
(12, 1, 2, 'Basic', 'news', 'admin'),
(13, 1, 2, 'Basic', 'projectsCat', 'read'),
(14, 1, 2, 'Basic', 'projectsCat', 'write'),
(15, 1, 2, 'Basic', 'projectsCat', 'admin'),
(16, 1, 2, 'Basic', 'projects', 'read'),
(17, 1, 2, 'Basic', 'projects', 'write'),
(18, 1, 2, 'Basic', 'projects', 'admin'),
(19, 1, 2, 'Basic', 'rent', 'read'),
(20, 1, 2, 'Basic', 'rent', 'write'),
(21, 1, 2, 'Basic', 'rent', 'admin'),
(22, 1, 2, 'Basic', 'site', 'read'),
(23, 1, 2, 'Basic', 'site', 'write'),
(24, 1, 2, 'Basic', 'site', 'admin'),
(25, 1, 2, 'userGroups', 'admin', 'read'),
(26, 1, 2, 'userGroups', 'admin', 'write'),
(27, 1, 2, 'userGroups', 'admin', 'admin'),
(28, 1, 2, 'userGroups', 'user', 'write'),
(29, 1, 2, 'userGroups', 'user', 'admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `usergroups_configuration`
--

CREATE TABLE IF NOT EXISTS `usergroups_configuration` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `rule` varchar(40) DEFAULT NULL,
  `value` varchar(20) DEFAULT NULL,
  `options` text,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Zrzut danych tabeli `usergroups_configuration`
--

INSERT INTO `usergroups_configuration` (`id`, `rule`, `value`, `options`, `description`) VALUES
(1, 'version', '1.8', 'CONST', 'userGroups version'),
(2, 'password_strength', '0', 'a:3:{i:0;s:4:"weak";i:1;s:6:"medium";i:2;s:6:"strong";}', 'password strength:<br/>weak: password of at least 5 characters, any character allowed.<br/>\r\n			medium: password of at least 5 characters, must contain at least 2 digits and 2 letters.<br/>\r\n			strong: password of at least 5 characters, must contain at least 2 digits, 2 letters and a special character.'),
(3, 'registration', 'FALSE', 'BOOL', 'allow user registration'),
(4, 'public_user_list', 'FALSE', 'BOOL', 'logged users can see the complete user list'),
(5, 'public_profiles', 'FALSE', 'BOOL', 'allow everyone, even guests, to see user profiles'),
(6, 'profile_privacy', 'TRUE', 'BOOL', 'logged user can see other users profiles'),
(7, 'personal_home', 'FALSE', 'BOOL', 'users can set their own home'),
(8, 'simple_password_reset', 'FALSE', 'BOOL', 'if true users just have to provide user and email to reset their password.<br/>Otherwise they will have to answer their custom question'),
(9, 'user_need_activation', 'TRUE', 'BOOL', 'if true when a user creates an account a mail with an activation code will be sent to his email address'),
(10, 'user_need_approval', 'FALSE', 'BOOL', 'if true when a user creates an account a user with user admin rights will have to approve the registration.<br/>If both this setting and user_need_activation are true the user will need to activate is account first and then will need the approval'),
(11, 'user_registration_group', '2', 'GROUP_LIST', 'the group new users automatically belong to'),
(12, 'dumb_admin', 'TRUE', 'BOOL', 'users with just admin write permissions won''t see the Main Configuration and Cron Jobs panels'),
(13, 'super_admin', 'FALSE', 'BOOL', 'users with userGroups admin admin permission will have access to everything, just like root'),
(14, 'permission_cascade', 'TRUE', 'BOOL', 'if a user has on a controller admin permissions will have access to write and read pages. If he has write permissions will also have access to read pages'),
(15, 'server_executed_crons', 'FALSE', 'BOOL', 'if true crons must be executed from the server using a crontab');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `usergroups_cron`
--

CREATE TABLE IF NOT EXISTS `usergroups_cron` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `lapse` int(6) DEFAULT NULL,
  `last_occurrence` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Zrzut danych tabeli `usergroups_cron`
--

INSERT INTO `usergroups_cron` (`id`, `name`, `lapse`, `last_occurrence`) VALUES
(1, 'garbage_collection', 7, '2013-10-24 00:00:00'),
(2, 'unban', 1, '2013-10-25 00:00:00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `usergroups_group`
--

CREATE TABLE IF NOT EXISTS `usergroups_group` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(120) NOT NULL,
  `level` int(6) DEFAULT NULL,
  `home` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `groupname` (`groupname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Zrzut danych tabeli `usergroups_group`
--

INSERT INTO `usergroups_group` (`id`, `groupname`, `level`, `home`) VALUES
(1, 'root', 100, NULL),
(2, 'user', 1, '/userGroups');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `usergroups_lookup`
--

CREATE TABLE IF NOT EXISTS `usergroups_lookup` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `element` varchar(20) DEFAULT NULL,
  `value` int(5) DEFAULT NULL,
  `text` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Zrzut danych tabeli `usergroups_lookup`
--

INSERT INTO `usergroups_lookup` (`id`, `element`, `value`, `text`) VALUES
(1, 'status', 0, 'banned'),
(2, 'status', 1, 'waiting activation'),
(3, 'status', 2, 'waiting approval'),
(4, 'status', 3, 'password change request'),
(5, 'status', 4, 'active');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `usergroups_user`
--

CREATE TABLE IF NOT EXISTS `usergroups_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `group_id` bigint(20) DEFAULT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) DEFAULT NULL,
  `email` varchar(120) NOT NULL,
  `home` varchar(120) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `question` text,
  `answer` text,
  `creation_date` datetime DEFAULT NULL,
  `activation_code` varchar(30) DEFAULT NULL,
  `activation_time` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `ban` datetime DEFAULT NULL,
  `ban_reason` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `group_id_idxfk` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Zrzut danych tabeli `usergroups_user`
--

INSERT INTO `usergroups_user` (`id`, `group_id`, `username`, `password`, `email`, `home`, `status`, `question`, `answer`, `creation_date`, `activation_code`, `activation_time`, `last_login`, `ban`, `ban_reason`) VALUES
(1, 1, 'mazikwyry', '7fc3c751688490de5293fd0283a2384e', 'mazik.wyry@gmail.com', '/userGroups/admin/documentation', 4, 'jak', 'tak', '2013-10-15 23:56:59', NULL, NULL, '2013-10-15 21:57:21', NULL, NULL),
(2, 2, 'eurobud', '154e600a303eb2f27eaca993f0c024c4', 'euro@euro.com', '/admin', 4, NULL, NULL, '2013-10-16 00:01:04', NULL, NULL, '2013-10-25 19:18:00', NULL, NULL);

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `usergroups_user`
--
ALTER TABLE `usergroups_user`
  ADD CONSTRAINT `usergroups_user_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `usergroups_group` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

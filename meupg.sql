-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 01-Jul-2015 às 16:35
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `#mysql50#meupg-old`
--
--
-- Database: `cdcol`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cds`
--

CREATE TABLE IF NOT EXISTS `cds` (
  `titel` varchar(200) DEFAULT NULL,
  `interpret` varchar(200) DEFAULT NULL,
  `jahr` int(11) DEFAULT NULL,
  `id` bigint(20) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cds`
--

INSERT INTO `cds` (`titel`, `interpret`, `jahr`, `id`) VALUES
('Beauty', 'Ryuichi Sakamoto', 1990, 1),
('Goodbye Country (Hello Nightclub)', 'Groove Armada', 2001, 4),
('Glee', 'Bran Van 3000', 1997, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cds`
--
ALTER TABLE `cds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cds`
--
ALTER TABLE `cds`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;--
-- Database: `meupg`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `biblical_classes`
--

CREATE TABLE IF NOT EXISTS `biblical_classes` (
  `id` int(10) NOT NULL,
  `pg_id` int(10) NOT NULL,
  `teacher_id` int(10) NOT NULL,
  `auxiliar_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `biblical_studies`
--

CREATE TABLE IF NOT EXISTS `biblical_studies` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `biblical_studies`
--

INSERT INTO `biblical_studies` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Daniel 2: A Profecia das 70 Semanas', '2015-06-29 16:30:21', '2015-06-29 16:30:21'),
(2, 'A Volta de Jesus', '2015-06-29 16:30:54', '2015-06-29 16:30:54'),
(3, 'Os Sinais da Volta de Jesus', '2015-06-29 16:31:21', '2015-06-29 16:31:21'),
(4, 'A Origem do Mal', '2015-06-29 16:31:31', '2015-06-29 16:31:31'),
(5, 'O Plano da Redenção', '2015-06-29 16:31:41', '2015-06-29 16:31:41'),
(6, 'O Milênio', '2015-06-29 16:31:49', '2015-06-29 16:31:49'),
(7, 'Estado do Homem na Morte', '2015-06-29 16:31:58', '2015-06-29 16:31:58'),
(8, 'Salvação pela Graça', '2015-06-29 16:32:05', '2015-06-29 16:32:05'),
(9, 'Daniel 7: A Profecia do Chifre Pequeno', '2015-06-29 16:32:45', '2015-06-29 16:32:45'),
(10, 'O Santuário', '2015-06-29 16:32:54', '2015-06-29 16:32:54'),
(11, 'Daniel 8: A Profecia do Chifre Pequeno - Parte 2', '2015-06-29 16:33:29', '2015-06-29 16:33:29'),
(12, 'Daniel 9: A Profecia das 70 Semanas', '2015-06-29 16:33:41', '2015-06-29 16:33:41'),
(13, 'O Juízo', '2015-06-29 16:33:50', '2015-06-29 16:33:50'),
(14, 'A Lei de Deus', '2015-06-29 16:34:01', '2015-06-29 16:34:01'),
(15, 'O Mandamento Esquecido', '2015-06-29 16:34:15', '2015-06-29 16:34:15'),
(16, 'Estilo de Vida Cristão', '2015-06-29 16:34:29', '2015-06-29 16:34:29'),
(17, 'Dom Profético', '2015-06-29 16:34:38', '2015-06-29 16:34:38'),
(18, 'Batismo', '2015-06-29 16:34:47', '2015-06-29 16:34:47'),
(19, 'Vida Devocional', '2015-06-29 16:34:57', '2015-06-29 16:34:57'),
(20, 'Ministério Pessoal', '2015-06-29 16:35:05', '2015-06-29 16:35:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `leaders`
--

CREATE TABLE IF NOT EXISTS `leaders` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `leaders`
--

INSERT INTO `leaders` (`id`, `user_id`, `created`, `modified`) VALUES
(1, 3, '2015-06-23 13:42:51', '2015-06-23 13:42:51'),
(2, 4, '2015-06-26 17:36:12', '2015-06-26 17:36:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pgs`
--

CREATE TABLE IF NOT EXISTS `pgs` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `foundation` date NOT NULL,
  `leader_id` int(11) DEFAULT NULL,
  `secretary_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pgs`
--

INSERT INTO `pgs` (`id`, `name`, `address`, `foundation`, `leader_id`, `secretary_id`, `created`, `modified`) VALUES
(2, 'meu novo pg', 'asdasdasd', '2015-06-23', 1, NULL, '2015-06-23 13:36:59', '2015-06-23 13:43:10'),
(3, 'dasdasd', 'asdasdasd', '2015-06-23', 0, NULL, '2015-06-23 13:37:16', '2015-06-23 13:37:16'),
(4, 'rwerwe', 'rwerwerwer', '2015-06-23', NULL, NULL, '2015-06-23 13:37:48', '2015-06-23 13:37:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `secretaries`
--

CREATE TABLE IF NOT EXISTS `secretaries` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL,
  `pg_id` int(10) DEFAULT NULL,
  `biblical_class_id` int(10) DEFAULT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `birthday` date NOT NULL,
  `testimony` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `pg_id`, `biblical_class_id`, `name`, `email`, `birthday`, `testimony`, `created`, `modified`) VALUES
(3, 1, NULL, 'fdgdfgd', 'fgdfgdfgd@aasdasd.com', '2015-06-23', '', '2015-06-23 13:35:23', '2015-06-23 13:35:23'),
(4, 2, NULL, 'asdasdasd', 'av.m4il@gmail.com', '2015-06-23', '', '2015-06-23 13:38:21', '2015-06-23 13:38:21'),
(5, 4, NULL, 'dfgdfg', 'av.wdfsfm4il@gmail.com', '2015-06-23', '', '2015-06-23 13:40:05', '2015-06-23 13:40:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biblical_classes`
--
ALTER TABLE `biblical_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biblical_studies`
--
ALTER TABLE `biblical_studies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaders`
--
ALTER TABLE `leaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pgs`
--
ALTER TABLE `pgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secretaries`
--
ALTER TABLE `secretaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biblical_classes`
--
ALTER TABLE `biblical_classes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `biblical_studies`
--
ALTER TABLE `biblical_studies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `leaders`
--
ALTER TABLE `leaders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pgs`
--
ALTER TABLE `pgs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `secretaries`
--
ALTER TABLE `secretaries`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;--
-- Database: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__bookmark`
--

CREATE TABLE IF NOT EXISTS `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__column_info`
--

CREATE TABLE IF NOT EXISTS `pma__column_info` (
  `id` int(5) unsigned NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__designer_coords`
--

CREATE TABLE IF NOT EXISTS `pma__designer_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `v` tinyint(4) DEFAULT NULL,
  `h` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for Designer';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__history`
--

CREATE TABLE IF NOT EXISTS `pma__history` (
  `id` bigint(20) unsigned NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__pdf_pages`
--

CREATE TABLE IF NOT EXISTS `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) unsigned NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__recent`
--

CREATE TABLE IF NOT EXISTS `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Extraindo dados da tabela `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{"db":"meupg","table":"students"},{"db":"meupg","table":"secretaries"},{"db":"meupg","table":"biblical_studies"},{"db":"meupg","table":"users"},{"db":"meupg","table":"pgs"},{"db":"meupg","table":"leaders"},{"db":"meupg","table":"biblical_classes"},{"db":"meupg","table":"biblicalclasses"},{"db":"meupg","table":"biblicalclass"},{"db":"meupg","table":"groups"}]');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__relation`
--

CREATE TABLE IF NOT EXISTS `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__table_coords`
--

CREATE TABLE IF NOT EXISTS `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float unsigned NOT NULL DEFAULT '0',
  `y` float unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__table_info`
--

CREATE TABLE IF NOT EXISTS `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__table_uiprefs`
--

CREATE TABLE IF NOT EXISTS `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__tracking`
--

CREATE TABLE IF NOT EXISTS `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) unsigned NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__userconfig`
--

CREATE TABLE IF NOT EXISTS `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_coords`
--
ALTER TABLE `pma__designer_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) unsigned NOT NULL AUTO_INCREMENT;--
-- Database: `test`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `test_multi_sets`()
    DETERMINISTIC
begin
        select user() as first_col;
        select user() as first_col, now() as second_col;
        select user() as first_col, now() as second_col, now() as third_col;
        end$$

DELIMITER ;
--
-- Database: `touche_uploader`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `amizades`
--

CREATE TABLE IF NOT EXISTS `amizades` (
  `id` bigint(20) unsigned NOT NULL,
  `usuario_id` bigint(20) unsigned NOT NULL,
  `amigo_id` bigint(20) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `amizades`
--

INSERT INTO `amizades` (`id`, `usuario_id`, `amigo_id`, `created`, `modified`) VALUES
(25, 1, 2, '2011-12-29 16:44:16', '2011-12-29 16:44:16'),
(26, 2, 1, '2011-12-29 16:44:16', '2011-12-29 16:44:16'),
(27, 1, 3, '2011-12-29 17:15:36', '2011-12-29 17:15:36'),
(28, 3, 1, '2011-12-29 17:15:36', '2011-12-29 17:15:36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE IF NOT EXISTS `mensagens` (
  `id` bigint(20) unsigned NOT NULL,
  `texto` text NOT NULL,
  `usuario_id` bigint(20) unsigned NOT NULL,
  `autor_id` bigint(20) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`id`, `texto`, `usuario_id`, `autor_id`, `created`, `modified`) VALUES
(1, 'sdf sdf sdfs ', 1, 1, '2011-12-27 05:52:46', '2011-12-27 05:52:46'),
(2, 'ad sdas as ', 2, 1, '2011-12-27 05:53:14', '2011-12-27 05:53:14'),
(3, 'asdasd asd', 2, 1, '2011-12-27 06:02:40', '2011-12-27 06:02:40'),
(4, 'hfg', 2, 1, '2011-12-27 06:02:47', '2011-12-27 06:02:47'),
(5, 'e we rwerw erw rw erw erwe', 2, 1, '2011-12-27 06:02:52', '2011-12-27 06:02:52'),
(6, 'w erwerw erw erwerw er w er wer we rwe rwer wrwe rwr wer w erwer w rw rw erw erw rwer werw erw e', 2, 1, '2011-12-27 06:03:00', '2011-12-27 06:03:00'),
(7, 'erwer\r\nwer\r\nw\r\ner\r\nwer', 2, 1, '2011-12-27 06:03:04', '2011-12-27 06:03:04'),
(8, 'adsdasdasd', 1, 1, '2011-12-27 22:14:38', '2011-12-27 22:14:38'),
(9, 'teste', 1, 1, '2011-12-27 22:14:56', '2011-12-27 22:14:56'),
(10, 'asdasdasd', 1, 1, '2011-12-27 22:16:27', '2011-12-27 22:16:27'),
(11, 'asdasdasd', 1, 1, '2011-12-27 22:22:02', '2011-12-27 22:22:02'),
(12, 'asdasdasd', 1, 1, '2011-12-27 22:23:19', '2011-12-27 22:23:19'),
(13, ' adsdasd asda sd', 1, 1, '2011-12-27 22:23:30', '2011-12-27 22:23:30'),
(14, '?', 1, 1, '2011-12-27 22:23:35', '2011-12-27 22:23:35'),
(15, 'sadasdasd', 1, 1, '2011-12-27 22:33:53', '2011-12-27 22:33:53'),
(16, 'asdasdasdasd', 1, 1, '2011-12-27 22:33:55', '2011-12-27 22:33:55'),
(17, 'adsda sda sdasd asdas das e agora?!', 1, 1, '2011-12-27 22:34:03', '2011-12-27 22:34:03'),
(18, 'Eae cara! td massa?!', 3, 1, '2011-12-28 00:04:57', '2011-12-28 00:04:57'),
(19, ' sdfsd fs', 2, 1, '2011-12-28 00:08:57', '2011-12-28 00:08:57'),
(20, 'asd asda sda s', 2, 1, '2011-12-28 14:22:25', '2011-12-28 14:22:25'),
(21, '?', 1, 1, '2011-12-28 14:22:42', '2011-12-28 14:22:42'),
(22, 'oush?', 3, 1, '2011-12-28 14:22:56', '2011-12-28 14:22:56'),
(23, 'porque não aparece?', 2, 1, '2011-12-28 14:24:42', '2011-12-28 14:24:42'),
(24, 'cara?', 2, 1, '2011-12-28 14:26:21', '2011-12-28 14:26:21'),
(25, 'asdasd asd asd asd', 3, 1, '2011-12-28 14:51:53', '2011-12-28 14:51:53'),
(26, 'tudo massa man! =D', 2, 2, '2011-12-28 15:01:25', '2011-12-28 15:01:25'),
(27, 'eae  meu grande!!! ', 1, 2, '2011-12-28 15:01:35', '2011-12-28 15:01:35'),
(28, 'e agora?', 1, 1, '2011-12-28 23:44:57', '2011-12-28 23:44:57'),
(29, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n \r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1, 1, '2011-12-29 14:52:09', '2011-12-29 14:52:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) unsigned NOT NULL,
  `sala_id` bigint(20) unsigned NOT NULL,
  `usuario_id` bigint(20) unsigned NOT NULL,
  `texto` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `sala_id`, `usuario_id`, `texto`, `created`, `modified`) VALUES
(1, 2, 1, 'dasd asd asd asd asd', '2011-12-07 21:20:17', '2011-12-07 21:20:17'),
(2, 2, 1, 'asdas dasdas', '2011-12-07 21:22:31', '2011-12-07 21:22:31'),
(4, 4, 1, 'post em geografia', '2011-12-07 22:08:46', '2011-12-07 22:08:46'),
(5, 27, 1, 'aha!', '2011-12-07 22:15:17', '2011-12-07 22:15:17'),
(6, 22, 1, 'teste', '2011-12-08 01:38:12', '2011-12-08 01:38:12'),
(7, 2, 1, 'novo post', '2011-12-08 17:01:34', '2011-12-08 17:01:34'),
(9, 11, 1, 'post biologia', '2011-12-08 19:45:59', '2011-12-08 19:45:59'),
(10, 11, 1, 'fsdfsdfsdf', '2011-12-08 19:48:53', '2011-12-08 19:48:53'),
(11, 11, 1, 'postou mesmo?!? =D', '2011-12-08 19:49:01', '2011-12-08 19:49:01'),
(13, 2, 1, 'novo post', '2011-12-08 19:59:40', '2011-12-08 19:59:40'),
(14, 8, 1, 'Olá pessoal!', '2011-12-08 20:08:50', '2011-12-08 20:08:50'),
(15, 12, 1, 'testandooooO!', '2011-12-08 20:37:29', '2011-12-08 20:37:29'),
(16, 12, 1, 'é! funfou!', '2011-12-08 20:37:36', '2011-12-08 20:37:36'),
(17, 28, 1, 'EAE GARELA!!!', '2011-12-08 21:12:58', '2011-12-08 21:12:58'),
(18, 12, 2, 'Aula de física né?', '2011-12-09 01:16:10', '2011-12-09 01:16:10'),
(19, 2, 2, 'hm?', '2011-12-09 01:29:52', '2011-12-09 01:29:52'),
(20, 2, 2, 'ãh?', '2011-12-09 01:31:23', '2011-12-09 01:31:23'),
(21, 2, 2, 'asdasd', '2011-12-09 01:44:36', '2011-12-09 01:44:36'),
(22, 2, 3, 'meu post tb meu caro!', '2011-12-09 01:47:55', '2011-12-09 01:47:55'),
(23, 34, 2, 'dessa vez, funcionou!', '2011-12-09 01:58:17', '2011-12-09 01:58:17'),
(24, 2, 1, 'e é?', '2011-12-09 12:17:03', '2011-12-09 12:17:03'),
(25, 2, 1, 'asdasd', '2011-12-09 12:17:17', '2011-12-09 12:17:17'),
(26, 2, 1, 'asdasd', '2011-12-09 12:17:45', '2011-12-09 12:17:45'),
(27, 2, 1, 'ordem inversa?', '2011-12-09 12:33:28', '2011-12-09 12:33:28'),
(28, 2, 1, 'ordem!', '2011-12-09 12:35:47', '2011-12-09 12:35:47'),
(29, 2, 1, 'Essa atividade é em dupla ou individual?', '2011-12-09 12:36:14', '2011-12-09 12:36:14'),
(30, 40, 1, 'testando post!', '2011-12-11 00:10:53', '2011-12-11 00:10:53'),
(31, 40, 1, 'teste 2', '2011-12-11 00:11:00', '2011-12-11 00:11:00'),
(32, 40, 1, 'a asd asda ', '2011-12-14 13:08:54', '2011-12-14 13:08:54'),
(33, 40, 1, 'teste', '2011-12-22 14:43:48', '2011-12-22 14:43:48'),
(34, 40, 1, 'ssdasdasd', '2011-12-22 14:45:05', '2011-12-22 14:45:05'),
(35, 40, 1, '', '2011-12-22 14:52:55', '2011-12-22 14:52:55'),
(36, 40, 1, 'asdasdas', '2011-12-22 15:10:41', '2011-12-22 15:10:41'),
(37, 40, 1, 'asdasdasd', '2011-12-22 15:11:21', '2011-12-22 15:11:21'),
(38, 40, 1, 'teste 2', '2011-12-22 15:11:30', '2011-12-22 15:11:30'),
(39, 40, 1, '', '2011-12-22 19:09:15', '2011-12-22 19:09:15'),
(46, 40, 1, 'a', '2011-12-22 20:22:37', '2011-12-22 20:22:37'),
(47, 40, 1, 's', '2011-12-22 20:22:39', '2011-12-22 20:22:39'),
(48, 40, 1, 's', '2011-12-22 20:22:40', '2011-12-22 20:22:40'),
(49, 40, 1, 'w', '2011-12-22 20:22:42', '2011-12-22 20:22:42'),
(50, 40, 1, 'w', '2011-12-22 20:22:44', '2011-12-22 20:22:44'),
(51, 40, 1, 'w', '2011-12-22 20:22:46', '2011-12-22 20:22:46'),
(52, 40, 1, 'w', '2011-12-22 20:22:49', '2011-12-22 20:22:49'),
(53, 40, 1, 'w', '2011-12-22 20:22:50', '2011-12-22 20:22:50'),
(54, 40, 1, 'w', '2011-12-22 20:22:52', '2011-12-22 20:22:52'),
(55, 40, 1, 'w', '2011-12-22 20:22:57', '2011-12-22 20:22:57'),
(56, 40, 1, 'a sdas d', '2011-12-22 20:22:59', '2011-12-22 20:22:59'),
(57, 40, 1, ' asda sd', '2011-12-22 20:23:01', '2011-12-22 20:23:01'),
(58, 40, 1, ' asd asda s', '2011-12-22 20:23:03', '2011-12-22 20:23:03'),
(59, 40, 1, '31?', '2011-12-22 20:44:06', '2011-12-22 20:44:06'),
(60, 40, 1, 'asdas d', '2011-12-22 20:53:56', '2011-12-22 20:53:56'),
(61, 40, 1, 'vai mesmo?', '2011-12-22 20:56:04', '2011-12-22 20:56:04'),
(62, 40, 1, 'd asdas', '2011-12-22 20:56:15', '2011-12-22 20:56:15'),
(63, 40, 1, 'a sda sd', '2011-12-22 20:56:23', '2011-12-22 20:56:23'),
(64, 4, 1, 'asdasd', '2011-12-23 00:50:59', '2011-12-23 00:50:59'),
(65, 4, 1, 'asdasd ', '2011-12-23 00:52:56', '2011-12-23 00:52:56'),
(67, 40, 1, 'go?', '2011-12-23 01:09:20', '2011-12-23 01:09:20'),
(68, 40, 1, 'sumiu?', '2011-12-23 01:09:31', '2011-12-23 01:09:31'),
(69, 40, 1, 'e é?', '2011-12-23 01:09:40', '2011-12-23 01:09:40'),
(70, 41, 1, 'dasdas das das as d', '2011-12-23 15:57:33', '2011-12-23 15:57:33'),
(71, 41, 1, 'asd asda sda sda sdas', '2011-12-23 15:57:36', '2011-12-23 15:57:36'),
(72, 40, 1, 'das das das das asd as das das da s as', '2011-12-23 16:39:46', '2011-12-23 16:39:46'),
(76, 44, 1, 'as das da sdasd asda sda sd', '2011-12-23 17:19:06', '2011-12-23 17:19:06'),
(77, 44, 1, 'asd asd asda', '2011-12-23 17:23:28', '2011-12-23 17:23:28'),
(78, 12, 1, 'sdas da sdasd ', '2011-12-25 13:52:29', '2011-12-25 13:52:29'),
(79, 12, 1, 'd as', '2011-12-25 13:56:31', '2011-12-25 13:56:31'),
(80, 12, 1, ' asda sda sd', '2011-12-25 13:56:34', '2011-12-25 13:56:34'),
(81, 12, 1, ' asda sd as', '2011-12-25 13:56:36', '2011-12-25 13:56:36'),
(82, 12, 1, 'a sdas da sd ', '2011-12-25 13:56:38', '2011-12-25 13:56:38'),
(83, 12, 1, ' asda sd asda sda sd', '2011-12-25 13:56:42', '2011-12-25 13:56:42'),
(84, 12, 1, 'dq wqwe qw eqwe qw eqw ', '2011-12-25 13:56:47', '2011-12-25 13:56:47'),
(85, 12, 1, ' qweq weqwe qweqw eq weq weq we ', '2011-12-25 13:56:51', '2011-12-25 13:56:51'),
(86, 12, 1, 'q weq weqw eqw e qwe', '2011-12-25 13:56:59', '2011-12-25 13:56:59'),
(87, 12, 1, 'q weq weqw eqweq we qwe  qweq weqw', '2011-12-25 13:57:02', '2011-12-25 13:57:02'),
(88, 12, 1, ' qweq weqw qw eqw eqw eqw eqwe', '2011-12-25 13:57:06', '2011-12-25 13:57:06'),
(89, 12, 1, 'qweq weq weqw qweqweq weq weq weqwe', '2011-12-25 13:57:10', '2011-12-25 13:57:10'),
(90, 12, 1, 'qweqwe qwe qweq we qeq eqw eq we', '2011-12-25 13:57:14', '2011-12-25 13:57:14'),
(91, 12, 1, ' qweq weqwe qwe qweqweqw eqweqweq weqw eqw ', '2011-12-25 13:57:20', '2011-12-25 13:57:20'),
(92, 12, 1, 'qwe qweqw eqwe qweqwe qweq weq weqw e', '2011-12-25 13:57:24', '2011-12-25 13:57:24'),
(93, 12, 1, 'qweqw eqweqweq weqw eqwe qwe qwe qwe qwe', '2011-12-25 13:57:28', '2011-12-25 13:57:28'),
(94, 12, 1, 'qwe qweq weq weq weq weq we', '2011-12-25 13:57:41', '2011-12-25 13:57:41'),
(95, 12, 1, 'w qwe q we qwe qwe qw sdfdsfhdfjtr hsegethswthw qwe q we qwe qwe qw sdfdsfhdfjtr hsegethswthw qwe q we qwe qwe qw sdfdsfhdfjtr hsegethswthw qwe q we qwe qwe qw sdfdsfhdfjtr hsegethswthw qwe q we qwe qwe qw sdfdsfhdfjtr hsegethswthw qwe q we qwe qwe qw sdfdsfhdfjtr hsegethswthw qwe q we qwe qwe qw sdfdsfhdfjtr hsegethswthw qwe q we qwe qwe qw sdfdsfhdfjtr hsegethswthw qwe q we qwe qwe qw sdfdsfhdfjtr hsegethswthw qwe q we qwe qwe qw sdfdsfhdfjtr hsegethswthw qwe q we qwe qwe qw sdfdsfhdfjtr hsegethswthw qwe q we qwe qwe qw sdfdsfhdfjtr hsegethswthw qwe q we qwe qwe qw sdfdsfhdfjtr hsegethswthw qwe q we qwe qwe qw sdfdsfhdfjtr hsegethswthw qwe q we qwe qwe qw sdfdsfhdfjtr hsegethswth', '2011-12-25 13:57:54', '2011-12-25 13:57:54'),
(97, 44, 1, 'lksj dlaksjdlçaskjd çalkjsd çlakjsdçlaksj da', '2011-12-27 01:32:53', '2011-12-27 01:32:53'),
(98, 37, 1, 'adas dasd', '2011-12-27 03:46:05', '2011-12-27 03:46:05'),
(99, 37, 1, 'snd lasdlaksjdlakjs dlakjs dlakjsdçlkjasfjskdf sjdfçsdjf', '2011-12-27 04:54:49', '2011-12-27 04:54:49'),
(100, 37, 1, ' kdaçlksjdlaksjd lakjsd alksjd laksjdlj askldja sld', '2011-12-27 04:54:57', '2011-12-27 04:54:57'),
(101, 45, 1, 'sdasd a sda', '2011-12-27 05:40:28', '2011-12-27 05:40:28'),
(102, 45, 1, 'as das dasd asd affer dfg df d', '2011-12-27 05:40:32', '2011-12-27 05:40:32'),
(103, 45, 1, 'laks dlaksj dlkajsd lets go!', '2011-12-27 06:11:37', '2011-12-27 06:11:37'),
(104, 37, 1, 'ash dajsh dkajshasd ', '2011-12-27 18:31:54', '2011-12-27 18:31:54'),
(105, 44, 1, 'asdasd asd asd asd', '2011-12-27 21:56:38', '2011-12-27 21:56:38'),
(106, 44, 1, ' asd asda sda sda sda', '2011-12-27 21:56:43', '2011-12-27 21:56:43'),
(107, 44, 1, ' fs dfsdf sd fsd f dsd fsdf sdf sdf sd s sdf', '2011-12-27 21:56:50', '2011-12-27 21:56:50'),
(108, 44, 1, 'e fwe fwefw ef wefw efwew', '2011-12-27 21:56:56', '2011-12-27 21:56:56'),
(109, 44, 1, ' wefw ef we fwef wef', '2011-12-27 21:56:59', '2011-12-27 21:56:59'),
(110, 44, 1, ' wef wefwefwef wefw efw fwe fw efw e', '2011-12-27 21:57:06', '2011-12-27 21:57:06'),
(111, 44, 1, ' efwe fwef w efwef we fwefw efw efwefw efwe f', '2011-12-27 21:57:11', '2011-12-27 21:57:11'),
(112, 44, 1, ' fwef wefewf wef f we fwfe fwe fwe fwef wf ', '2011-12-27 21:57:17', '2011-12-27 21:57:17'),
(113, 44, 1, 'fwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n\r\nfwef wefewf wef f we fwfe fwe fwe fwef wf\r\n', '2011-12-27 23:03:12', '2011-12-27 23:03:12'),
(114, 34, 1, 'e foi?', '2011-12-28 00:07:07', '2011-12-28 00:07:07'),
(115, 22, 1, 'segundo teste', '2011-12-28 14:24:23', '2011-12-28 14:24:23'),
(116, 45, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n \r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2011-12-29 14:51:59', '2011-12-29 14:51:59'),
(117, 2, 1, 'hmm.. legal!', '2011-12-29 14:55:41', '2011-12-29 14:55:41'),
(118, 4, 1, 'xfghfg fh fgh fgh', '2015-06-26 17:56:14', '2015-06-26 17:56:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE IF NOT EXISTS `professores` (
  `id` bigint(20) unsigned NOT NULL,
  `usuario_id` bigint(20) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `salas`
--

CREATE TABLE IF NOT EXISTS `salas` (
  `id` bigint(20) unsigned NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` text,
  `usuario_id` bigint(20) NOT NULL,
  `professor_id` bigint(20) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `salas`
--

INSERT INTO `salas` (`id`, `nome`, `descricao`, `usuario_id`, `professor_id`, `created`, `modified`) VALUES
(2, 'matematica', NULL, 1, NULL, NULL, NULL),
(3, 'português', NULL, 1, NULL, '2011-11-22 20:31:08', '2011-11-22 20:31:08'),
(4, 'geografia', NULL, 1, NULL, '2011-11-22 20:34:07', '2011-11-22 20:34:07'),
(8, 'química', NULL, 1, NULL, '2011-11-22 20:54:20', '2011-11-22 20:54:20'),
(11, 'biologia', NULL, 1, NULL, '2011-11-23 15:30:06', '2011-11-23 15:30:06'),
(12, 'física', NULL, 1, NULL, '2011-11-23 16:55:56', '2011-11-23 16:55:56'),
(22, 'computação pervasiva', NULL, 3, NULL, '2011-11-24 16:56:08', '2011-11-24 16:56:08'),
(23, 'bioquímica', NULL, 2, NULL, '2011-11-24 17:21:11', '2011-11-24 17:21:11'),
(24, 'biologia molecular', 'Sala para discusssões eem moléculas formais de aspectos simétricos do moviemento browniano.', 1, NULL, '2011-12-05 19:08:05', '2011-12-05 19:08:05'),
(25, 'moleculas', '', 1, NULL, '2011-12-05 22:17:48', '2011-12-05 22:17:48'),
(26, 'sdasdasdas', 'asdasdasd', 1, NULL, '2011-12-07 20:32:26', '2011-12-07 20:32:26'),
(27, 'Astrofísica', 'Discissões em astrofísica', 1, NULL, '2011-12-07 22:15:07', '2011-12-27 04:10:50'),
(28, 'Sala do Antônio', 'Nesta sala blablablablablabla', 1, NULL, '2011-12-08 21:11:31', '2011-12-08 21:11:31'),
(29, 'inscrição automática', 'Sala para testar se ao usuário criar uma sala sua inscrição é automática', 2, NULL, '2011-12-09 01:51:00', '2011-12-09 01:51:00'),
(30, 'inscrição automática 2', '', 2, NULL, '2011-12-09 01:51:56', '2011-12-09 01:51:56'),
(32, 'inscrição automática 4', '', 3, NULL, '2011-12-09 01:54:44', '2011-12-09 01:54:44'),
(33, 'inscrição automática 5', '', 2, NULL, '2011-12-09 01:56:44', '2011-12-09 01:56:44'),
(34, 'inscrição automática 6', '', 2, NULL, '2011-12-09 01:57:55', '2011-12-09 01:57:55'),
(35, 'tstetetet', '', 2, NULL, '2011-12-09 01:59:24', '2011-12-09 01:59:24'),
(36, 'bla bla ha!', '', 2, NULL, '2011-12-09 02:00:24', '2011-12-09 02:00:24'),
(37, 'sala do professor 2', '', 3, NULL, '2011-12-09 02:04:57', '2011-12-09 02:04:57'),
(38, '123', '', 2, NULL, '2011-12-09 02:20:02', '2011-12-09 02:20:02'),
(39, 'testando inscrição automática', ' asdj asldkjaçshd çasdhlç\\dhfçuhçf\\udhf asdj asldkjaçshd çasdhlç\\dhfçuhçf\\udhf asdj asldkjaçshd çasdhlç\\dhfçuhçf\\udhf asdj asldkjaçshd çasdhlç\\dhfçuhçf\\udhf asdj asldkjaçshd çasdhlç\\dhfçuhçf\\udhf asdj asldkjaçshd çasdhlç\\dhfçuhçf\\udhf asdj asldkjaçshd çasdhlç\\dhfçuhçf\\udhf', 1, NULL, '2011-12-09 12:40:19', '2011-12-09 12:40:19'),
(40, 'Sala para testar os uploads :D', 'Sala para testar a inserção de um upload ou mais', 1, NULL, '2011-12-09 14:03:53', '2011-12-23 17:36:12'),
(41, 'ah sdauhs dahsdkjahsk dahskd haks dhaksh dkajshkdajsh kahs', '', 1, NULL, '2011-12-22 01:15:42', '2011-12-22 01:15:42'),
(42, 'Testar inserção de upload', 'Sala para testar a inserção de um upload', 1, NULL, '2011-12-23 14:26:02', '2011-12-27 03:47:37'),
(43, 'Testar inserção de uploads', 'Sala para testar a inserção de um upload', 1, NULL, '2011-12-23 14:26:18', '2011-12-27 19:59:26'),
(44, 'Última Sala', 'informações aqui!', 1, NULL, '2011-12-23 16:40:41', '2011-12-28 00:03:03'),
(45, 'hm?', '', 1, NULL, '2011-12-26 14:55:56', '2011-12-27 17:01:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `id` bigint(20) unsigned NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text,
  `filename` varchar(255) NOT NULL,
  `realname` varchar(255) NOT NULL,
  `usuario_id` bigint(20) unsigned NOT NULL,
  `sala_id` bigint(20) unsigned DEFAULT NULL,
  `post_id` bigint(20) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `uploads`
--

INSERT INTO `uploads` (`id`, `nome`, `descricao`, `filename`, `realname`, `usuario_id`, `sala_id`, `post_id`, `created`, `modified`) VALUES
(10, 'sem sala', '', 'b13d24604e187bbddfad39cd238d25962b5f055f', 'arquivo.tchz', 1, NULL, NULL, '2011-12-09 15:28:44', '2011-12-09 15:28:44'),
(14, 'exclui', 'asdas das da sads ', '8dea8f195ae40ad23a2d7c922c582480b2a17c35', 'arquivo.tchz', 1, 40, NULL, '2011-12-23 17:24:04', '2011-12-23 17:24:04'),
(15, 'excuindooo', ' asda sd', 'ec6baf89932c0c26a225b785d3ba898bfabf09d5', 'arquivo.tchz', 1, 44, NULL, '2011-12-23 19:35:28', '2011-12-23 19:35:28'),
(16, 'será que está no BD?', '', 'ab4de7eebc5be3db469a3abe79e4960c5c062df0', 'arquivo.tchz', 1, NULL, NULL, '2011-12-25 15:03:39', '2011-12-25 15:03:39'),
(17, 'upload do professor um', 'só para testar', '04ed0743e6edd9b2576a1326f62c19726c238d2f', 'arquivo.tchz', 2, 38, NULL, '2011-12-28 15:04:12', '2011-12-28 15:04:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint(20) unsigned NOT NULL,
  `tipo` enum('Aluno','Professor') NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'default.png',
  `sobre` text,
  `password` varchar(40) NOT NULL,
  `sexo` enum('feminino','masculino') NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `tipo`, `nome`, `email`, `foto`, `sobre`, `password`, `sexo`, `created`, `modified`) VALUES
(1, 'Aluno', 'José Oswaldo', 'jocmail@gmail.com', '1.jpg', '', '295ec5b19d4804e9dfe29c7aa989712462c0f3e5', 'masculino', '2011-11-18 17:02:21', '2011-12-29 01:46:37'),
(2, 'Aluno', 'Professor Um', 'email@email.com', 'default.png	', NULL, '0fc46953be0b190916aa5e32d8fa94924ae81241', 'masculino', '2011-11-24 14:56:23', '2011-11-24 14:56:23'),
(3, 'Aluno', 'professor dois', 'email@email.com.br', 'default.png', NULL, '0fc46953be0b190916aa5e32d8fa94924ae81241', 'masculino', '2011-11-24 16:46:32', '2011-11-24 16:46:32'),
(4, 'Aluno', 'oswaldocavalcantedasilvafilho', 'email@email.org', 'default.png', NULL, '295ec5b19d4804e9dfe29c7aa989712462c0f3e5', 'masculino', '2011-12-20 18:38:53', '2011-12-20 18:38:53'),
(7, 'Aluno', 'zé mané', 'cmail@cmail.com', 'default.png', NULL, '0fc46953be0b190916aa5e32d8fa94924ae81241', 'masculino', '2011-12-27 01:06:09', '2011-12-27 01:06:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_salas`
--

CREATE TABLE IF NOT EXISTS `usuarios_salas` (
  `id` bigint(20) unsigned NOT NULL,
  `usuario_id` bigint(20) unsigned NOT NULL,
  `sala_id` bigint(20) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=267 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios_salas`
--

INSERT INTO `usuarios_salas` (`id`, `usuario_id`, `sala_id`, `created`, `modified`) VALUES
(47, 2, 2, '2011-12-07 19:39:05', '2011-12-07 19:39:05'),
(69, 0, 2, '2011-12-08 20:32:35', '2011-12-08 20:32:35'),
(70, 0, 2, '2011-12-08 20:32:39', '2011-12-08 20:32:39'),
(71, 0, 2, '2011-12-08 20:32:40', '2011-12-08 20:32:40'),
(88, 3, 2, '2011-12-09 01:47:44', '2011-12-09 01:47:44'),
(92, 3, 34, '2011-12-09 01:58:34', '2011-12-09 01:58:34'),
(93, 2, 35, '2011-12-09 01:59:25', '2011-12-09 01:59:25'),
(97, 3, 36, '2011-12-09 02:01:12', '2011-12-09 02:01:12'),
(98, 2, 36, '2011-12-09 02:01:16', '2011-12-09 02:01:16'),
(99, 2, 34, '2011-12-09 02:01:31', '2011-12-09 02:01:31'),
(100, 3, 37, '2011-12-09 02:04:57', '2011-12-09 02:04:57'),
(101, 2, 24, '2011-12-09 02:17:20', '2011-12-09 02:17:20'),
(102, 2, 37, '2011-12-09 02:17:34', '2011-12-09 02:17:34'),
(103, 2, 26, '2011-12-09 02:19:55', '2011-12-09 02:19:55'),
(104, 2, 38, '2011-12-09 02:20:02', '2011-12-09 02:20:02'),
(114, 1, 24, '2011-12-19 23:30:18', '2011-12-19 23:30:18'),
(119, 1, 28, '2011-12-21 15:01:33', '2011-12-21 15:01:33'),
(125, 1, 39, '2011-12-22 01:12:32', '2011-12-22 01:12:32'),
(180, 1, 4, '2011-12-22 18:55:08', '2011-12-22 18:55:08'),
(219, 1, 12, '2011-12-25 13:54:14', '2011-12-25 13:54:14'),
(220, 1, 42, '2011-12-25 14:00:57', '2011-12-25 14:00:57'),
(223, 1, 41, '2011-12-25 21:37:46', '2011-12-25 21:37:46'),
(228, 1, 29, '2011-12-27 01:41:03', '2011-12-27 01:41:03'),
(232, 1, 35, '2011-12-27 02:56:30', '2011-12-27 02:56:30'),
(235, 1, 43, '2011-12-27 04:12:24', '2011-12-27 04:12:24'),
(236, 1, 37, '2011-12-27 04:23:49', '2011-12-27 04:23:49'),
(239, 1, 38, '2011-12-27 04:57:08', '2011-12-27 04:57:08'),
(241, 1, 3, '2011-12-27 05:00:26', '2011-12-27 05:00:26'),
(245, 1, 8, '2011-12-27 22:35:07', '2011-12-27 22:35:07'),
(246, 1, 34, '2011-12-28 00:06:56', '2011-12-28 00:06:56'),
(247, 1, 23, '2011-12-28 14:25:07', '2011-12-28 14:25:07'),
(249, 1, 27, '2011-12-28 15:59:19', '2011-12-28 15:59:19'),
(262, 1, 45, '2011-12-29 01:40:44', '2011-12-29 01:40:44'),
(263, 1, 22, '2011-12-29 01:49:53', '2011-12-29 01:49:53'),
(264, 1, 44, '2011-12-29 01:56:48', '2011-12-29 01:56:48'),
(266, 1, 2, '2015-06-26 17:53:40', '2015-06-26 17:53:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amizades`
--
ALTER TABLE `amizades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `amigo_id` (`amigo_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indexes for table `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `autor_id` (`autor_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `sala_id` (`sala_id`);

--
-- Indexes for table `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indexes for table `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `professor_id` (`professor_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `filename` (`filename`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `sala_id` (`sala_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `usuarios_salas`
--
ALTER TABLE `usuarios_salas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aluno_id` (`usuario_id`),
  ADD KEY `sala_id` (`sala_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amizades`
--
ALTER TABLE `amizades`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `professores`
--
ALTER TABLE `professores`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salas`
--
ALTER TABLE `salas`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `usuarios_salas`
--
ALTER TABLE `usuarios_salas`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=267;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `uploads`
--
ALTER TABLE `uploads`
  ADD CONSTRAINT `uploads_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

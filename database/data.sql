-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 04/06/2019 às 09:40
-- Versão do servidor: 10.1.37-MariaDB
-- Versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `astari`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `password` char(40) NOT NULL,
  `secret` char(16) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '1',
  `premdays` int(11) NOT NULL DEFAULT '0',
  `coins` int(12) NOT NULL DEFAULT '0',
  `lastday` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL DEFAULT '',
  `creation` int(11) NOT NULL DEFAULT '0',
  `vote` int(11) NOT NULL,
  `key` varchar(20) NOT NULL DEFAULT '0',
  `email_new` varchar(255) NOT NULL DEFAULT '',
  `email_new_time` int(11) NOT NULL DEFAULT '0',
  `rlname` varchar(255) NOT NULL DEFAULT '',
  `location` varchar(255) NOT NULL DEFAULT '',
  `page_access` int(11) NOT NULL DEFAULT '0',
  `email_code` varchar(255) NOT NULL DEFAULT '',
  `next_email` int(11) NOT NULL DEFAULT '0',
  `premium_points` int(11) NOT NULL DEFAULT '0',
  `secret_status` tinyint(1) NOT NULL DEFAULT '0',
  `create_date` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `create_ip` int(11) NOT NULL DEFAULT '0',
  `last_post` int(11) NOT NULL DEFAULT '0',
  `flag` varchar(80) NOT NULL DEFAULT '',
  `vip_time` int(11) NOT NULL,
  `guild_points` int(11) NOT NULL DEFAULT '0',
  `guild_points_stats` int(11) NOT NULL DEFAULT '0',
  `passed` int(11) NOT NULL DEFAULT '0',
  `block` int(11) NOT NULL DEFAULT '0',
  `refresh` int(11) NOT NULL DEFAULT '0',
  `birth_date` varchar(50) NOT NULL DEFAULT '',
  `gender` varchar(20) NOT NULL DEFAULT '',
  `loyalty_points` bigint(20) NOT NULL DEFAULT '0',
  `authToken` varchar(100) NOT NULL DEFAULT '',
  `player_sell_bank` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `password`, `secret`, `type`, `premdays`, `coins`, `lastday`, `email`, `creation`, `vote`, `key`, `email_new`, `email_new_time`, `rlname`, `location`, `page_access`, `email_code`, `next_email`, `premium_points`, `secret_status`, `create_date`, `create_ip`, `last_post`, `flag`, `vip_time`, `guild_points`, `guild_points_stats`, `passed`, `block`, `refresh`, `birth_date`, `gender`, `loyalty_points`, `authToken`, `player_sell_bank`) VALUES
(1, '1', '', '', 1, 0, 0, 0, '', 0, 0, '0', '', 0, '', '', 0, '', 0, 0, 0, 0, 0, 0, 'unknown', 0, 0, 0, 0, 0, 0, '', '', 0, 'fSBnRtC8dNEvbFPIXa6AUWm3QrGYOM', NULL),
(2, 'godlike996', '21298df8a3277357ee55b01df9530b535cf08ec1', '', 6, 29, 81872, 1558935773, '@outlook.com', 1507160060, 0, 'AGON-APA5-YHEG-UNIJ', '', 0, 'Astari Server', 'Criciúma', 3, '', 0, 0, 0, 0, 0, 1541274979, '', 0, 0, 0, 0, 0, 0, '8/12/1990', 'male', 0, 'sPq72EzJMC16D30bajFnf5rBUZypWQ', 0),
(3, 'aspiralike996', '4dd2749c5afd8739838fd728afd614daa273212b', '', 6, 1, 3100, 0, 'felipe.b.t@hotmail.com', 1534932163, 0, 'I6ES-A7U3-O8AW-U5UL', '', 0, 'Aspira Boo', 'Criciuma', 0, '', 0, 0, 0, 0, 2130706433, 0, 'unknown', 0, 0, 0, 0, 0, 0, '8/12/1990', 'male', 0, '', 0),
(4, 'JOANINHAlike996', 'b76c859a69ce8a1eb3f1b84f46253b4ef3f44bc3', '', 1, 0, 0, 0, 'jj@jj.com', 1534955122, 0, '5UXI-XY0Y-QY1A-7O5Y', '', 0, 'JJ JOo', 'Criciuma', 0, '', 0, 0, 0, 0, 2130706433, 0, 'unknown', 0, 0, 0, 0, 0, 0, '1/1/2009', 'male', 0, '', 0),
(5, 'ASPIRA1like996', '4dd2749c5afd8739838fd728afd614daa273212b', '', 1, 0, 681, 0, 'aspira1@aspira1.com', 1535272635, 0, 'NYVO-HOMA-LABY-WA9O', '', 0, 'Aspira Aspira', 'Criciuma', 0, '', 0, 0, 0, 0, 2130706433, 0, 'unknown', 0, 0, 0, 0, 0, 0, '8/12/1990', 'male', 0, '', 0),
(6, 'ASPIRA2like996', '4dd2749c5afd8739838fd728afd614daa273212b', '', 1, 0, 0, 0, 'aspira2@aspira2.com', 1535272826, 0, 'PAXO-DE6U-VU1O-QAMU', '', 0, 'Aspira2 Aspira2', 'Aspira2', 0, '', 0, 0, 0, 0, 2130706433, 0, 'unknown', 0, 0, 0, 0, 0, 0, '8/12/1990', 'male', 0, '', 0),
(7, 'ASPIRA3like996', '4dd2749c5afd8739838fd728afd614daa273212b', '', 1, 0, 0, 0, 'aspira3@aspira3.com', 1535290226, 0, 'U2YQ-O1A2-ONU4-OTY1', '', 0, 'Aspira3 Aspira3', 'Criciúma', 0, '', 0, 0, 0, 0, 2130706433, 0, 'unknown', 0, 0, 0, 0, 0, 0, '8/12/1990', 'male', 0, '', 0),
(8, 'TATABOYlike69', 'afbb9f46dfdf4a3758cce2dba7ec48f75bc200bb', '', 6, 0, 0, 0, 'tataboy@tataboy.com', 1539217972, 0, 'YSEV-EQER-IGUH-O2Y2', '', 0, 'Tata Tata', 'Tata', 0, '', 0, 0, 0, 0, 2130706433, 0, 'unknown', 0, 0, 0, 0, 0, 0, '1/1/1990', 'male', 0, '', 0),
(9, 'RICKlike69', 'b9ab5d34593724ab32ad0f7d13d88750b7414e7b', '', 6, 24, 1975, 1540923609, 'rick@rick.com', 1539218183, 0, 'TOZE-BUDE-LA6E-HONY', '', 0, 'Rick Rick', 'Rick', 0, '', 0, 0, 0, 0, 2130706433, 0, 'unknown', 0, 0, 0, 0, 0, 0, '1/1/1990', 'male', 0, '', 0),
(10, 'ASPIRA4LIKE996', '4dd2749c5afd8739838fd728afd614daa273212b', '', 1, 0, 0, 0, 'aspira4@aspira.com', 1542463216, 0, 'EQIG-Y9Y6-I7EL-OJU6', '', 0, 'Felipe Borges tomaz', 'Criciúma', 0, '', 0, 0, 0, 0, 2130706433, 0, 'unknown', 0, 0, 0, 0, 0, 0, '8/1/2009', 'female', 0, '', 0),
(11, 'OPOHA', '957ceece3b1ad2f07b7a98b6a16bd5b11d769c14', '', 1, 0, 0, 0, 'opoha@cc.com', 1559363985, 0, 'YWEN-OGE4-ISOJ-O1UN', '', 0, 'Felipe Borges tomaz', 'Criciúma', 0, '', 0, 0, 0, 0, 2130706433, 0, 'unknown', 0, 0, 0, 0, 0, 0, '1/1/2009', 'male', 0, '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `accounts_options`
--

CREATE TABLE `accounts_options` (
  `account_id` int(11) NOT NULL,
  `options` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `account_bans`
--

CREATE TABLE `account_bans` (
  `account_id` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `banned_at` bigint(20) NOT NULL,
  `expires_at` bigint(20) NOT NULL,
  `banned_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `account_ban_history`
--

CREATE TABLE `account_ban_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `account_id` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `banned_at` bigint(20) NOT NULL,
  `expired_at` bigint(20) NOT NULL,
  `banned_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `account_character_sale`
--

CREATE TABLE `account_character_sale` (
  `id` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `id_player` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `price_type` tinyint(4) NOT NULL,
  `price_coins` int(11) DEFAULT NULL,
  `price_gold` int(11) DEFAULT NULL,
  `dta_insert` datetime NOT NULL,
  `dta_valid` datetime NOT NULL,
  `dta_sale` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `account_character_sale_history`
--

CREATE TABLE `account_character_sale_history` (
  `id` int(11) NOT NULL,
  `id_old_account` int(11) DEFAULT NULL,
  `id_player` int(11) DEFAULT NULL,
  `id_new_account` int(11) DEFAULT NULL,
  `price_type` tinyint(1) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `char_id` int(11) DEFAULT NULL,
  `dta_insert` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dta_sale` datetime DEFAULT NULL,
  `extornada` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `account_viplist`
--

CREATE TABLE `account_viplist` (
  `account_id` int(11) NOT NULL COMMENT 'id of account whose viplist entry it is',
  `player_id` int(11) NOT NULL COMMENT 'id of target player of viplist entry',
  `description` varchar(128) NOT NULL DEFAULT '',
  `icon` tinyint(2) UNSIGNED NOT NULL DEFAULT '0',
  `notify` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `announcements`
--

CREATE TABLE `announcements` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `text` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `blessings_history`
--

CREATE TABLE `blessings_history` (
  `id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `blessing` tinyint(4) NOT NULL,
  `loss` tinyint(1) NOT NULL,
  `timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `bounty_hunter`
--

CREATE TABLE `bounty_hunter` (
  `id` int(11) NOT NULL,
  `hunter_id` int(11) NOT NULL,
  `target_id` int(11) NOT NULL,
  `killer_id` int(11) NOT NULL,
  `prize` bigint(20) NOT NULL,
  `currencyType` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateAdded` int(15) NOT NULL,
  `killed` int(11) NOT NULL,
  `dateKilled` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `daily_reward_history`
--

CREATE TABLE `daily_reward_history` (
  `id` int(11) NOT NULL,
  `streak` smallint(2) NOT NULL DEFAULT '0',
  `event` varchar(255) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `instant` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `player_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `dtt_results`
--

CREATE TABLE `dtt_results` (
  `id` int(11) NOT NULL,
  `frags_blue` int(11) NOT NULL,
  `frags_red` int(11) NOT NULL,
  `towers_blue` int(11) NOT NULL,
  `towers_red` int(11) NOT NULL,
  `data` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `hora` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `global_misc`
--

CREATE TABLE `global_misc` (
  `key` varchar(255) DEFAULT NULL,
  `world_id` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `info` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `global_storage`
--

CREATE TABLE `global_storage` (
  `key` int(11) DEFAULT NULL,
  `world_id` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `guilds`
--

CREATE TABLE `guilds` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ownerid` int(11) NOT NULL,
  `creationdata` int(11) NOT NULL,
  `motd` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `guild_logo` mediumblob,
  `create_ip` int(11) NOT NULL DEFAULT '0',
  `balance` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `last_execute_points` int(11) NOT NULL DEFAULT '0',
  `logo_gfx_name` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gatilhos `guilds`
--
DELIMITER $$
CREATE TRIGGER `oncreate_guilds` AFTER INSERT ON `guilds` FOR EACH ROW BEGIN
    INSERT INTO `guild_ranks` (`name`, `level`, `guild_id`) VALUES ('the Leader', 3, NEW.`id`);
    INSERT INTO `guild_ranks` (`name`, `level`, `guild_id`) VALUES ('a Vice-Leader', 2, NEW.`id`);
    INSERT INTO `guild_ranks` (`name`, `level`, `guild_id`) VALUES ('a Member', 1, NEW.`id`);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `guildwar_deaths`
--

CREATE TABLE `guildwar_deaths` (
  `id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `kills` int(11) NOT NULL,
  `deaths` int(11) NOT NULL,
  `warid` int(11) NOT NULL DEFAULT '0',
  `time` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `guildwar_kills`
--

CREATE TABLE `guildwar_kills` (
  `id` int(11) NOT NULL,
  `killer` varchar(50) NOT NULL,
  `target` varchar(50) NOT NULL,
  `killerguild` int(11) NOT NULL DEFAULT '0',
  `targetguild` int(11) NOT NULL DEFAULT '0',
  `warid` int(11) NOT NULL DEFAULT '0',
  `time` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `guild_invites`
--

CREATE TABLE `guild_invites` (
  `player_id` int(11) NOT NULL DEFAULT '0',
  `guild_id` int(11) NOT NULL DEFAULT '0',
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `guild_membership`
--

CREATE TABLE `guild_membership` (
  `player_id` int(11) NOT NULL,
  `guild_id` int(11) NOT NULL,
  `rank_id` int(11) NOT NULL,
  `nick` varchar(15) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `guild_ranks`
--

CREATE TABLE `guild_ranks` (
  `id` int(11) NOT NULL,
  `guild_id` int(11) NOT NULL COMMENT 'guild',
  `name` varchar(255) NOT NULL COMMENT 'rank name',
  `level` int(11) NOT NULL COMMENT 'rank level - leader, vice, member, maybe something else'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `guild_wars`
--

CREATE TABLE `guild_wars` (
  `id` int(11) NOT NULL,
  `guild1` int(11) NOT NULL DEFAULT '0',
  `guild2` int(11) NOT NULL DEFAULT '0',
  `name1` varchar(255) NOT NULL,
  `name2` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '0',
  `started` bigint(15) NOT NULL DEFAULT '0',
  `ended` bigint(15) NOT NULL DEFAULT '0',
  `toend` bigint(15) NOT NULL DEFAULT '0',
  `buyin` bigint(11) NOT NULL DEFAULT '0',
  `fraglimit` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `houses`
--

CREATE TABLE `houses` (
  `id` int(11) NOT NULL,
  `owner` int(11) NOT NULL,
  `paid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `warnings` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `rent` int(11) NOT NULL DEFAULT '0',
  `town_id` int(11) NOT NULL DEFAULT '0',
  `bid` int(11) NOT NULL DEFAULT '0',
  `bid_end` int(11) NOT NULL DEFAULT '0',
  `last_bid` int(11) NOT NULL DEFAULT '0',
  `highest_bidder` int(11) NOT NULL DEFAULT '0',
  `size` int(11) NOT NULL DEFAULT '0',
  `beds` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `house_lists`
--

CREATE TABLE `house_lists` (
  `house_id` int(11) NOT NULL,
  `listid` int(11) NOT NULL,
  `list` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `ioe`
--

CREATE TABLE `ioe` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `itemid` int(11) NOT NULL,
  `boss` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `ip_bans`
--

CREATE TABLE `ip_bans` (
  `ip` int(10) UNSIGNED NOT NULL,
  `reason` varchar(255) NOT NULL,
  `banned_at` bigint(20) NOT NULL,
  `expires_at` bigint(20) NOT NULL,
  `banned_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `links`
--

CREATE TABLE `links` (
  `account_id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `code_date` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `live_casts`
--

CREATE TABLE `live_casts` (
  `player_id` int(11) NOT NULL,
  `cast_name` varchar(255) NOT NULL,
  `password` tinyint(1) NOT NULL DEFAULT '0',
  `description` varchar(255) DEFAULT NULL,
  `spectators` smallint(5) DEFAULT '0',
  `version` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `market_history`
--

CREATE TABLE `market_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `player_id` int(11) NOT NULL,
  `sale` tinyint(1) NOT NULL DEFAULT '0',
  `itemtype` int(10) UNSIGNED NOT NULL,
  `amount` smallint(5) UNSIGNED NOT NULL,
  `price` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `expires_at` bigint(20) UNSIGNED NOT NULL,
  `inserted` bigint(20) UNSIGNED NOT NULL,
  `state` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `market_offers`
--

CREATE TABLE `market_offers` (
  `id` int(10) UNSIGNED NOT NULL,
  `player_id` int(11) NOT NULL,
  `sale` tinyint(1) NOT NULL DEFAULT '0',
  `itemtype` int(10) UNSIGNED NOT NULL,
  `amount` smallint(5) UNSIGNED NOT NULL,
  `created` bigint(20) UNSIGNED NOT NULL,
  `anonymous` tinyint(1) NOT NULL DEFAULT '0',
  `price` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `newsticker`
--

CREATE TABLE `newsticker` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pagseguro`
--

CREATE TABLE `pagseguro` (
  `date` datetime NOT NULL,
  `code` varchar(50) NOT NULL,
  `reference` varchar(200) NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `lastEventDate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pagsegurotransacoes`
--

CREATE TABLE `pagsegurotransacoes` (
  `TransacaoID` varchar(36) NOT NULL,
  `VendedorEmail` varchar(200) NOT NULL,
  `Referencia` varchar(200) DEFAULT NULL,
  `TipoFrete` char(2) DEFAULT NULL,
  `ValorFrete` decimal(10,2) DEFAULT NULL,
  `Extras` decimal(10,2) DEFAULT NULL,
  `Anotacao` text,
  `TipoPagamento` varchar(50) NOT NULL,
  `StatusTransacao` varchar(50) NOT NULL,
  `CliNome` varchar(200) NOT NULL,
  `CliEmail` varchar(200) NOT NULL,
  `CliEndereco` varchar(200) NOT NULL,
  `CliNumero` varchar(10) DEFAULT NULL,
  `CliComplemento` varchar(100) DEFAULT NULL,
  `CliBairro` varchar(100) NOT NULL,
  `CliCidade` varchar(100) NOT NULL,
  `CliEstado` char(2) NOT NULL,
  `CliCEP` varchar(9) NOT NULL,
  `CliTelefone` varchar(14) DEFAULT NULL,
  `NumItens` int(11) NOT NULL,
  `Data` datetime NOT NULL,
  `ProdQuantidade_x` int(5) NOT NULL,
  `status` tinyint(1) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pagseguro_transactions`
--

CREATE TABLE `pagseguro_transactions` (
  `transaction_code` varchar(36) NOT NULL DEFAULT '',
  `name` varchar(200) DEFAULT NULL,
  `payment_method` varchar(50) NOT NULL DEFAULT '',
  `status` varchar(50) NOT NULL DEFAULT '',
  `item_count` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `payment_amount` float DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `paypal_transactions`
--

CREATE TABLE `paypal_transactions` (
  `id` int(11) NOT NULL,
  `payment_status` varchar(70) NOT NULL DEFAULT '',
  `payer_email` varchar(255) NOT NULL DEFAULT '',
  `payer_id` varchar(255) NOT NULL DEFAULT '',
  `item_number1` varchar(255) NOT NULL DEFAULT '',
  `mc_gross` float NOT NULL,
  `mc_currency` varchar(5) NOT NULL DEFAULT '',
  `txn_id` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '1',
  `account_id` int(11) NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL DEFAULT '1',
  `vocation` int(11) NOT NULL DEFAULT '0',
  `health` int(11) NOT NULL DEFAULT '150',
  `healthmax` int(11) NOT NULL DEFAULT '150',
  `experience` bigint(20) NOT NULL DEFAULT '0',
  `lookbody` int(11) NOT NULL DEFAULT '0',
  `lookfeet` int(11) NOT NULL DEFAULT '0',
  `lookhead` int(11) NOT NULL DEFAULT '0',
  `looklegs` int(11) NOT NULL DEFAULT '0',
  `looktype` int(11) UNSIGNED NOT NULL DEFAULT '136',
  `lookaddons` int(11) NOT NULL DEFAULT '0',
  `maglevel` int(11) NOT NULL DEFAULT '0',
  `mana` int(11) NOT NULL DEFAULT '0',
  `manamax` int(11) NOT NULL DEFAULT '0',
  `manaspent` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `soul` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `town_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `posx` int(11) NOT NULL DEFAULT '0',
  `posy` int(11) NOT NULL DEFAULT '0',
  `posz` int(11) NOT NULL DEFAULT '0',
  `conditions` blob NOT NULL,
  `cap` int(11) NOT NULL DEFAULT '0',
  `sex` int(11) NOT NULL DEFAULT '0',
  `lastlogin` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `lastip` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `save` tinyint(1) NOT NULL DEFAULT '1',
  `skull` tinyint(1) NOT NULL DEFAULT '0',
  `skulltime` int(11) NOT NULL DEFAULT '0',
  `lastlogout` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `blessings` tinyint(2) NOT NULL DEFAULT '0',
  `blessings1` tinyint(4) NOT NULL DEFAULT '0',
  `blessings2` tinyint(4) NOT NULL DEFAULT '0',
  `blessings3` tinyint(4) NOT NULL DEFAULT '0',
  `blessings4` tinyint(4) NOT NULL DEFAULT '0',
  `blessings5` tinyint(4) NOT NULL DEFAULT '0',
  `blessings6` tinyint(4) NOT NULL DEFAULT '0',
  `blessings7` tinyint(4) NOT NULL DEFAULT '0',
  `blessings8` tinyint(4) NOT NULL DEFAULT '0',
  `onlinetime` int(11) NOT NULL DEFAULT '0',
  `deletion` bigint(15) NOT NULL DEFAULT '0',
  `balance` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `offlinetraining_time` smallint(5) UNSIGNED NOT NULL DEFAULT '43200',
  `offlinetraining_skill` int(11) NOT NULL DEFAULT '-1',
  `stamina` smallint(5) UNSIGNED NOT NULL DEFAULT '2520',
  `skill_fist` int(10) UNSIGNED NOT NULL DEFAULT '10',
  `skill_fist_tries` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `skill_club` int(10) UNSIGNED NOT NULL DEFAULT '10',
  `skill_club_tries` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `skill_sword` int(10) UNSIGNED NOT NULL DEFAULT '10',
  `skill_sword_tries` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `skill_axe` int(10) UNSIGNED NOT NULL DEFAULT '10',
  `skill_axe_tries` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `skill_dist` int(10) UNSIGNED NOT NULL DEFAULT '10',
  `skill_dist_tries` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `skill_shielding` int(10) UNSIGNED NOT NULL DEFAULT '10',
  `skill_shielding_tries` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `skill_fishing` int(10) UNSIGNED NOT NULL DEFAULT '10',
  `skill_fishing_tries` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `description` varchar(255) NOT NULL DEFAULT '',
  `comment` text NOT NULL,
  `create_ip` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `create_date` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `hide_char` int(11) NOT NULL DEFAULT '0',
  `cast` tinyint(1) NOT NULL DEFAULT '0',
  `skill_critical_hit_chance` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `skill_critical_hit_chance_tries` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `skill_critical_hit_damage` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `skill_critical_hit_damage_tries` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `skill_life_leech_chance` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `skill_life_leech_chance_tries` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `skill_life_leech_amount` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `skill_life_leech_amount_tries` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `skill_mana_leech_chance` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `skill_mana_leech_chance_tries` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `skill_mana_leech_amount` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `skill_mana_leech_amount_tries` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `skill_criticalhit_chance` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `skill_criticalhit_damage` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `skill_lifeleech_chance` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `skill_lifeleech_amount` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `skill_manaleech_chance` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `skill_manaleech_amount` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `prey_stamina_1` int(11) DEFAULT NULL,
  `prey_stamina_2` int(11) DEFAULT NULL,
  `prey_stamina_3` int(11) DEFAULT NULL,
  `prey_column` smallint(6) NOT NULL DEFAULT '1',
  `bonus_reroll` int(11) NOT NULL DEFAULT '0',
  `xpboost_stamina` smallint(5) DEFAULT NULL,
  `xpboost_value` tinyint(4) DEFAULT NULL,
  `marriage_status` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `hide_skills` int(11) DEFAULT NULL,
  `hide_set` int(11) DEFAULT NULL,
  `former` varchar(255) NOT NULL DEFAULT '-',
  `signature` varchar(255) NOT NULL,
  `marriage_spouse` int(11) NOT NULL DEFAULT '-1',
  `loyalty_ranking` tinyint(1) NOT NULL DEFAULT '0',
  `madphp_signature` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'Absolute Mango © MadPHP.org',
  `madphp_signature_bg` varchar(50) NOT NULL COMMENT 'Absolute Mango © MadPHP.org',
  `madphp_signature_eqs` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'Absolute Mango © MadPHP.org',
  `madphp_signature_bars` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'Absolute Mango © MadPHP.org',
  `madphp_signature_cache` int(11) NOT NULL COMMENT 'Absolute Mango © MadPHP.org',
  `lookmount` int(11) NOT NULL DEFAULT '0',
  `sbw_points` int(11) NOT NULL DEFAULT '0',
  `InstantRewardTokens` int(12) DEFAULT NULL,
  `avatar` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `players`
--

INSERT INTO `players` (`id`, `name`, `group_id`, `account_id`, `level`, `vocation`, `health`, `healthmax`, `experience`, `lookbody`, `lookfeet`, `lookhead`, `looklegs`, `looktype`, `lookaddons`, `maglevel`, `mana`, `manamax`, `manaspent`, `soul`, `town_id`, `posx`, `posy`, `posz`, `conditions`, `cap`, `sex`, `lastlogin`, `lastip`, `save`, `skull`, `skulltime`, `lastlogout`, `blessings`, `blessings1`, `blessings2`, `blessings3`, `blessings4`, `blessings5`, `blessings6`, `blessings7`, `blessings8`, `onlinetime`, `deletion`, `balance`, `offlinetraining_time`, `offlinetraining_skill`, `stamina`, `skill_fist`, `skill_fist_tries`, `skill_club`, `skill_club_tries`, `skill_sword`, `skill_sword_tries`, `skill_axe`, `skill_axe_tries`, `skill_dist`, `skill_dist_tries`, `skill_shielding`, `skill_shielding_tries`, `skill_fishing`, `skill_fishing_tries`, `deleted`, `description`, `comment`, `create_ip`, `create_date`, `hide_char`, `cast`, `skill_critical_hit_chance`, `skill_critical_hit_chance_tries`, `skill_critical_hit_damage`, `skill_critical_hit_damage_tries`, `skill_life_leech_chance`, `skill_life_leech_chance_tries`, `skill_life_leech_amount`, `skill_life_leech_amount_tries`, `skill_mana_leech_chance`, `skill_mana_leech_chance_tries`, `skill_mana_leech_amount`, `skill_mana_leech_amount_tries`, `skill_criticalhit_chance`, `skill_criticalhit_damage`, `skill_lifeleech_chance`, `skill_lifeleech_amount`, `skill_manaleech_chance`, `skill_manaleech_amount`, `prey_stamina_1`, `prey_stamina_2`, `prey_stamina_3`, `prey_column`, `bonus_reroll`, `xpboost_stamina`, `xpboost_value`, `marriage_status`, `hide_skills`, `hide_set`, `former`, `signature`, `marriage_spouse`, `loyalty_ranking`, `madphp_signature`, `madphp_signature_bg`, `madphp_signature_eqs`, `madphp_signature_bars`, `madphp_signature_cache`, `lookmount`, `sbw_points`, `InstantRewardTokens`, `avatar`) VALUES
(1, 'Rook Sample', 1, 1, 1, 0, 150, 150, 0, 106, 95, 78, 116, 128, 0, 0, 5, 5, 0, 0, 1, 1160, 788, 7, '', 400, 0, 1523386590, 2429100989, 1, 0, 0, 1523386591, 0, 1, 1, 1, 1, 1, 1, 1, 1, 210, 0, 0, 43200, -1, 2520, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL, NULL, '-', '', -1, 0, 1, '', 0, 1, 0, 0, 0, 0, NULL),
(2, 'Sorcerer Sample', 1, 1, 8, 1, 185, 185, 4200, 106, 76, 78, 58, 128, 0, 0, 40, 40, 0, 0, 1, 1160, 788, 7, '', 470, 1, 1523386592, 2429100989, 1, 0, 0, 1523386594, 0, 1, 1, 1, 1, 1, 1, 1, 1, 30, 0, 0, 43200, -1, 2520, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 0, '', '', 0, 1507158878, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL, NULL, '-', '', -1, 0, 1, '', 0, 1, 0, 0, 0, 0, NULL),
(3, 'Druid Sample', 1, 1, 8, 2, 185, 185, 4200, 106, 76, 78, 58, 128, 0, 0, 40, 40, 0, 0, 1, 1160, 788, 7, '', 470, 1, 1523386583, 2429100989, 1, 0, 0, 1523386586, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1700, 0, 0, 43200, -1, 2520, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 0, '', '', 0, 1507158900, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL, NULL, '-', '', -1, 0, 1, '', 0, 1, 0, 0, 0, 0, NULL),
(4, 'Paladin Sample', 1, 1, 8, 3, 185, 185, 4200, 106, 76, 78, 58, 128, 0, 0, 40, 40, 0, 0, 1, 1160, 788, 7, '', 470, 1, 1523386594, 2429100989, 1, 0, 0, 1523386595, 0, 1, 1, 1, 1, 1, 1, 1, 1, 17, 0, 0, 43200, -1, 2520, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 0, '', '', 0, 1507158919, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL, NULL, '-', '', -1, 0, 1, '', 0, 1, 0, 0, 0, 0, NULL),
(5, 'Knight Sample', 1, 1, 8, 4, 185, 185, 4200, 106, 76, 78, 58, 128, 0, 0, 40, 40, 0, 0, 1, 1160, 788, 7, '', 470, 1, 1523386586, 2429100989, 1, 0, 0, 1523386588, 0, 1, 1, 1, 1, 1, 1, 1, 1, 15, 0, 0, 43200, -1, 2520, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 0, '', '', 0, 1507158938, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL, NULL, '-', '', -1, 0, 1, '', 0, 1, 0, 0, 0, 0, NULL),
(6, 'Aspiraboo', 5, 2, 517, 4, 4820, 4820, 2279017804, 87, 87, 87, 88, 684, 3, 200, 1740, 1740, 0, 100, 1, 248, 444, 12, '', 12700, 1, 1558947778, 16777343, 1, 0, 0, 1559034001, 0, 6, 7, 8, 8, 8, 9, 6, 6, 11918611, 0, 1400, 43200, -1, 2520, 65, 1016, 47, 587, 43, 575, 63, 4113, 10, 0, 10, 0, 11, 1, 0, '', '', 0, 1507160111, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 6, 0, 0, 0, NULL, NULL, '-', '&lt;iframe src=&quot;//www.youtube.com/embed/EEMkN9QbmtA&quot; width=&quot;560&quot; height=&quot;314&quot; allowfullscreen=&quot;allowfullscreen&quot;&gt;&lt;/iframe&gt;', -1, 0, 1, '', 0, 1, 0, 0, 0, 28, ''),
(7, 'Aspira', 1, 2, 1183, 5, 10000, 10000, 27502877041, 87, 89, 100, 50, 974, 0, 50, 27690, 27690, 36130, 18, 1, 96, 117, 7, '', 13930, 1, 1558947674, 16777343, 1, 0, 0, 1558947675, 0, 0, 0, 0, 0, 0, 0, 0, 0, 552569, 0, 201900, 43200, -1, 2520, 24, 11804, 10, 0, 10, 0, 34, 34393183, 10, 0, 15, 380, 10, 0, 0, '', '&lt;iframe src=&quot;//www.youtube.com/embed/EEMkN9QbmtA&quot; width=&quot;560&quot; height=&quot;315&quot; frameborder=&quot;0&quot; allowfullscreen=&quot;allowfullscreen&quot;&gt;&lt;/iframe&gt;', 2130706433, 1534932090, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 7200, 50, 0, NULL, NULL, '-', '&lt;iframe src=&quot;//www.youtube.com/embed/EEMkN9QbmtA&quot; width=&quot;560&quot; height=&quot;315&quot; frameborder=&quot;0&quot; allowfullscreen=&quot;allowfullscreen&quot;&gt;&lt;/iframe&gt;', -1, 0, 1, '', 0, 1, 0, 0, 0, NULL, ''),
(8, 'Joaninha', 5, 3, 353, 8, 6260, 6260, 724742425, 114, 114, 114, 114, 129, 3, 7, 550, 550, 862993, 6, 1, 1084, 1066, 7, '', 6750, 1, 1542226134, 1323698097, 1, 0, 0, 1542226144, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1164321, 0, 20596076, 43200, -1, 2520, 34, 352, 10, 0, 10, 0, 62, 3915, 10, 0, 18, 76, 10, 0, 0, '', '', 2130706433, 1534932513, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL, NULL, '-', '', -1, 0, 1, '', 0, 1, 0, 0, 0, NULL, NULL),
(9, 'Wokie', 1, 2, 229, 6, 1, 0, 197007362, 94, 94, 94, 94, 884, 0, 0, 0, 0, 0, 0, 1, 95, 117, 7, '', 3475, 0, 1558688984, 16777343, 1, 0, 0, 1558689012, 0, 0, 0, 0, 0, 0, 0, 0, 0, 36940, 0, 0, 43200, -1, 2520, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 0, '', '', 2130706433, 1535059128, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL, NULL, '-', '', -1, 0, 1, '', 0, 1, 0, 0, 0, NULL, ''),
(10, 'Mulher', 1, 2, 290, 7, 77, 200, 398156237, 106, 76, 78, 58, 148, 0, 0, 200, 200, 0, 0, 1, 95, 119, 7, '', 5000, 0, 1558689017, 16777343, 1, 0, 0, 1558689045, 0, 1, 1, 1, 1, 1, 1, 1, 1, 4752, 0, 203100, 43200, -1, 2520, 10, 0, 51, 2498, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 0, '', '', 2130706433, 1535059148, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL, NULL, '-', '', -1, 0, 1, '', 0, 1, 0, 0, 0, NULL, ''),
(11, 'Juka', 5, 5, 291, 8, 215, 215, 405160928, 115, 76, 57, 58, 931, 0, 4, 205, 205, 5500, 0, 1, 11882, 8056, 10, '', 5025, 1, 1542226111, 1323698097, 1, 0, 0, 1542226127, 0, 0, 0, 0, 0, 0, 0, 0, 0, 63897, 0, 202000, 43200, -1, 2520, 10, 0, 10, 0, 10, 0, 46, 499, 10, 0, 14, 135, 10, 0, 0, '', '', 2130706433, 1535272726, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL, NULL, '-', '', -1, 0, 1, '', 0, 1, 0, 0, 0, NULL, NULL),
(12, 'Kadson', 1, 6, 266, 8, 220, 220, 309064414, 28, 90, 71, 16, 128, 0, 0, 100, 100, 0, 0, 1, 1127, 1067, 8, 0x010004000002ffffffff03a00f00001a001b00000000fe, 4500, 1, 1542226155, 1323698097, 1, 0, 0, 1542226224, 0, 0, 0, 0, 0, 0, 0, 0, 0, 29054, 0, 202000, 43200, -1, 2520, 12, 55, 10, 0, 10, 0, 33, 338, 10, 0, 14, 92, 10, 0, 0, '', '', 2130706433, 1535272865, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL, NULL, '-', '', -1, 0, 1, '', 0, 1, 0, 0, 0, NULL, NULL),
(13, 'Jukinha', 1, 7, 286, 8, 200, 200, 384103865, 28, 90, 71, 16, 128, 0, 0, 200, 200, 0, 0, 1, 1131, 1067, 7, '', 5000, 0, 1542306631, 1323698097, 1, 0, 0, 1542306942, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2147483647, 0, 202000, 43200, -1, 2518, 26, 31, 10, 0, 10, 0, 10, 0, 10, 0, 10, 10, 10, 0, 0, '', '', 2130706433, 1535290267, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL, NULL, '-', '', -1, 0, 1, '', 0, 1, 0, 0, 0, NULL, NULL),
(14, 'Jorberval Mata Todos', 1, 2, 7, 0, 180, 180, 3825, 106, 76, 78, 58, 128, 0, 0, 35, 35, 0, 0, 1, 95, 117, 7, '', 460, 1, 1558689074, 16777343, 1, 0, 0, 1558689080, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1569, 0, 0, 43200, -1, 2520, 10, 0, 10, 10, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 0, '', '', 2130706433, 1538359829, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL, NULL, '-', '', -1, 0, 1, '', 0, 1, 0, 0, 0, NULL, ''),
(16, 'Tataboy', 5, 8, 104, 0, 665, 665, 18016050, 132, 76, 97, 0, 145, 3, 7, 520, 520, 334915, 14, 1, 1417, 1108, 7, '', 1430, 1, 1543790801, 3617613243, 1, 0, 0, 1543790738, 0, 1, 1, 1, 1, 1, 1, 1, 1, 229091, 0, 30000, 43200, -1, 2520, 12, 25, 18, 2930, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 0, '', '', 2130706433, 1539218067, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL, NULL, '-', '', -1, 0, 1, '', 0, 1, 0, 0, 0, NULL, NULL),
(17, 'Ricardo Souza', 5, 9, 176, 0, 1025, 1025, 88760000, 106, 76, 78, 58, 128, 0, 8, 880, 880, 11632600, 5, 1, 1014, 1340, 7, '', 2150, 1, 1540933895, 3811094195, 1, 0, 0, 1540935411, 0, 1, 1, 1, 1, 1, 1, 1, 1, 78890, 0, 202000, 43200, -1, 2520, 10, 0, 17, 50, 21, 89250, 10, 0, 10, 0, 10, 0, 10, 0, 0, '', '', 2130706433, 1539218222, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL, NULL, '-', '', -1, 0, 1, '', 0, 1, 0, 0, 0, NULL, NULL),
(18, 'Koeok', 1, 2, 48, 5, 385, 385, 1690875, 106, 76, 78, 58, 128, 0, 48, 1090, 1090, 16040, 18, 1, 1131, 1069, 7, '', 870, 1, 1558411643, 16777343, 1, 0, 0, 1558411646, 0, 1, 1, 1, 1, 1, 1, 1, 1, 19691, 0, 5020, 43200, -1, 2520, 10, 0, 16, 750, 10, 0, 10, 0, 10, 0, 25, 22668, 10, 0, 0, '', '', 2130706433, 1541615722, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL, NULL, '-', '', -1, 0, 1, '', 0, 1, 0, 0, 0, NULL, NULL),
(19, 'Koekf', 1, 2, 28, 8, 495, 495, 323850, 106, 76, 78, 58, 128, 0, 0, 140, 140, 0, 23, 1, 95, 117, 7, '', 985, 1, 1558689051, 16777343, 1, 0, 0, 1558689058, 0, 1, 1, 1, 1, 1, 1, 1, 1, 30503, 0, 2000, 43200, -1, 2520, 10, 0, 19, 18, 10, 0, 16, 24, 10, 0, 10, 0, 10, 0, 0, '', '', 2130706433, 1541703668, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL, NULL, '-', '', -1, 0, 1, '', 0, 1, 0, 0, 0, NULL, NULL),
(20, 'Istata', 1, 8, 67, 2, 441, 480, 4674828, 34, 76, 94, 58, 619, 0, 54, 1710, 1710, 22490, 32, 1, 1129, 1066, 7, 0x010020000002ffffffff03e86804001a001b0000000004e02e0000050400000006b80b00000707000000fe, 1060, 1, 1543786242, 3617613243, 1, 0, 0, 1543786396, 0, 1, 0, 0, 0, 0, 0, 0, 0, 51580, 0, 31862, 43200, -1, 2518, 10, 0, 15, 557, 10, 0, 10, 0, 10, 0, 26, 38811, 10, 0, 0, '', '', 2130706433, 1541794708, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL, NULL, '-', '', -1, 0, 1, '', 0, 1, 0, 0, 0, NULL, NULL),
(21, 'Jrokf', 1, 10, 1, 0, 150, 150, 0, 106, 95, 78, 116, 128, 0, 0, 5, 5, 0, 0, 1, 0, 0, 0, '', 400, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 43200, -1, 2520, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 0, '', '', 2130706433, 1542463255, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 1, 0, NULL, NULL, 0, NULL, NULL, '-', '', -1, 0, 1, '', 0, 1, 0, 0, 0, NULL, NULL),
(22, 'Lolzinho', 1, 11, 1, 0, 150, 150, 0, 106, 95, 78, 116, 128, 0, 0, 5, 5, 0, 0, 1, 0, 0, 0, '', 400, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 43200, -1, 2520, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 10, 0, 0, '', '', 2130706433, 1559364025, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 1, 0, NULL, NULL, 0, NULL, NULL, '-', '', -1, 0, 1, '', 0, 1, 0, 0, 0, NULL, NULL);

--
-- Gatilhos `players`
--
DELIMITER $$
CREATE TRIGGER `ondelete_players` BEFORE DELETE ON `players` FOR EACH ROW BEGIN
    UPDATE `houses` SET `owner` = 0 WHERE `owner` = OLD.`id`;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `players_online`
--

CREATE TABLE `players_online` (
  `player_id` int(11) NOT NULL
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `player_deaths`
--

CREATE TABLE `player_deaths` (
  `player_id` int(11) NOT NULL,
  `time` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL DEFAULT '1',
  `killed_by` varchar(255) NOT NULL,
  `is_player` tinyint(1) NOT NULL DEFAULT '1',
  `mostdamage_by` varchar(100) NOT NULL,
  `mostdamage_is_player` tinyint(1) NOT NULL DEFAULT '0',
  `unjustified` tinyint(1) NOT NULL DEFAULT '0',
  `mostdamage_unjustified` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `player_depotitems`
--

CREATE TABLE `player_depotitems` (
  `player_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL COMMENT 'any given range eg 0-100 will be reserved for depot lockers and all > 100 will be then normal items inside depots',
  `pid` int(11) NOT NULL DEFAULT '0',
  `itemtype` smallint(6) NOT NULL,
  `count` smallint(5) NOT NULL DEFAULT '0',
  `attributes` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `player_former_names`
--

CREATE TABLE `player_former_names` (
  `id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `former_name` varchar(35) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `player_inboxitems`
--

CREATE TABLE `player_inboxitems` (
  `player_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `itemtype` smallint(6) NOT NULL,
  `count` smallint(5) NOT NULL DEFAULT '0',
  `attributes` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `player_items`
--

CREATE TABLE `player_items` (
  `player_id` int(11) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL DEFAULT '0',
  `sid` int(11) NOT NULL DEFAULT '0',
  `itemtype` smallint(6) NOT NULL DEFAULT '0',
  `count` smallint(5) NOT NULL DEFAULT '0',
  `attributes` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `player_killers`
--

CREATE TABLE `player_killers` (
  `kill_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `player_kills`
--

CREATE TABLE `player_kills` (
  `player_id` int(11) NOT NULL,
  `time` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `target` int(11) NOT NULL,
  `unavenged` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `player_misc`
--

CREATE TABLE `player_misc` (
  `player_id` int(11) NOT NULL,
  `info` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `player_namelocks`
--

CREATE TABLE `player_namelocks` (
  `player_id` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `namelocked_at` bigint(20) NOT NULL,
  `namelocked_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `player_powergamers`
--

CREATE TABLE `player_powergamers` (
  `id_player` int(11) NOT NULL,
  `exphist_lastexp` bigint(20) NOT NULL DEFAULT '0',
  `exphist1` bigint(20) NOT NULL DEFAULT '0',
  `exphist2` bigint(20) NOT NULL DEFAULT '0',
  `exphist3` bigint(20) NOT NULL DEFAULT '0',
  `exphist4` bigint(20) NOT NULL DEFAULT '0',
  `exphist5` bigint(20) NOT NULL DEFAULT '0',
  `exphist6` bigint(20) NOT NULL DEFAULT '0',
  `exphist7` bigint(20) NOT NULL DEFAULT '0',
  `onlinetimetoday` bigint(20) NOT NULL DEFAULT '0',
  `onlinetime1` bigint(20) NOT NULL DEFAULT '0',
  `onlinetime2` bigint(20) NOT NULL DEFAULT '0',
  `onlinetime3` bigint(20) NOT NULL DEFAULT '0',
  `onlinetime4` bigint(20) NOT NULL DEFAULT '0',
  `onlinetime5` bigint(20) NOT NULL DEFAULT '0',
  `onlinetime6` bigint(20) NOT NULL DEFAULT '0',
  `onlinetime7` bigint(20) NOT NULL DEFAULT '0',
  `onlinetimeall` bigint(20) NOT NULL DEFAULT '0',
  `exphist_old_current_xp` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `player_prey`
--

CREATE TABLE `player_prey` (
  `player_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mindex` smallint(6) NOT NULL,
  `mcolumn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `player_preytimes`
--

CREATE TABLE `player_preytimes` (
  `player_id` int(11) NOT NULL,
  `bonus_type1` int(11) NOT NULL,
  `bonus_value1` int(11) NOT NULL,
  `bonus_name1` varchar(50) NOT NULL,
  `bonus_type2` int(11) NOT NULL,
  `bonus_value2` int(11) NOT NULL,
  `bonus_name2` varchar(50) NOT NULL,
  `bonus_type3` int(11) NOT NULL,
  `bonus_value3` int(11) NOT NULL,
  `bonus_name3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `player_rewards`
--

CREATE TABLE `player_rewards` (
  `player_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `itemtype` smallint(6) NOT NULL,
  `count` smallint(5) NOT NULL DEFAULT '0',
  `attributes` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `player_spells`
--

CREATE TABLE `player_spells` (
  `player_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `player_storage`
--

CREATE TABLE `player_storage` (
  `player_id` int(11) NOT NULL DEFAULT '0',
  `key` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `value` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `sellchar`
--

CREATE TABLE `sellchar` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `vocation` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(40) NOT NULL,
  `oldid` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `server_config`
--

CREATE TABLE `server_config` (
  `config` varchar(50) NOT NULL,
  `value` varchar(256) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `snowballwar`
--

CREATE TABLE `snowballwar` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  `data` varchar(255) NOT NULL,
  `hora` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `store_history`
--

CREATE TABLE `store_history` (
  `account_id` int(11) NOT NULL,
  `mode` smallint(2) NOT NULL,
  `description` varchar(3500) NOT NULL,
  `coin_amount` int(12) NOT NULL,
  `time` bigint(20) UNSIGNED NOT NULL,
  `timestamp` int(11) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL,
  `coins` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tickets`
--

CREATE TABLE `tickets` (
  `ticket_id` int(11) NOT NULL,
  `ticket_subject` varchar(45) NOT NULL DEFAULT '',
  `ticket_author` varchar(255) NOT NULL DEFAULT '',
  `ticket_author_acc_id` int(11) NOT NULL,
  `ticket_last_reply` varchar(45) NOT NULL DEFAULT '',
  `ticket_admin_reply` int(11) NOT NULL,
  `ticket_date` datetime NOT NULL,
  `ticket_ended` varchar(45) NOT NULL DEFAULT '',
  `ticket_status` varchar(45) NOT NULL DEFAULT '',
  `ticket_category` varchar(45) NOT NULL DEFAULT '',
  `ticket_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tickets_reply`
--

CREATE TABLE `tickets_reply` (
  `ticket_replyid` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `reply_author` varchar(255) DEFAULT NULL,
  `reply_message` text,
  `reply_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tile_store`
--

CREATE TABLE `tile_store` (
  `house_id` int(11) NOT NULL,
  `data` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `categoria` int(11) NOT NULL,
  `link` varchar(11) NOT NULL,
  `ativo` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `videos_categorias`
--

CREATE TABLE `videos_categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `videos_comentarios`
--

CREATE TABLE `videos_comentarios` (
  `id` int(11) NOT NULL,
  `mensagem` text NOT NULL,
  `character` varchar(255) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `topico` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ativo` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_atr_wiki_category`
--

CREATE TABLE `z_atr_wiki_category` (
  `id_atr_wiki_category` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dta_insert` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dta_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dta_deleted` datetime DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `z_atr_wiki_category`
--

INSERT INTO `z_atr_wiki_category` (`id_atr_wiki_category`, `nome`, `descricao`, `text`, `dta_insert`, `dta_update`, `dta_deleted`, `is_active`) VALUES
(1, 'Sobre', '<p>Welcome to Astari</p>', '<p>The blessed of odin.</p>', '2018-11-10 15:56:15', '2018-11-17 08:45:41', NULL, 1),
(2, 'Events', '<p>Aqui você encontra informações sobre os eventos do servidor. Horário que o evento acontece, quais os dias, premiações e limitações. Atenção no momento existe uma limitação de 4 jogadores por IP, isso se aplica a todo o servidor. Ao final do evento você pode ganhar algumas premiações, uma delas é o Event Coint, com esse item é possível comprar itens no NPC Coins.</p>', '<p>much quests</p>', '2018-11-10 15:57:14', '2018-11-15 19:56:41', NULL, 1),
(3, 'Mini Games', 'Aqui você vai encontrar informações sobre os minigames que existem no servidores, essa página vai receber atualização constante, por isso se você deseja ficar informado sobre os novos minigames verifique essa página semanalmente. A princípio nenhum dos minigames vão dar ao jogador Event Coins, sendo a função principal deles a de entreter o jogador.	', '<p><br></p>', '2018-11-11 13:39:43', '2018-11-15 19:56:18', NULL, 1),
(4, 'Event&#42; and Systems', '<p>Aqui você vai encontrar informações sobre sistemas e eventos com requisitos. Para propor uma experiência diferente ao jogador, foi proposto esse tipo de evento. O acesso ao evento com requisito se dá através da compra via NPC ou de itens que o jogador pode obter através dos mobs. Existe alguns sistemas implementados no servidor, um desses dá ao jogador a possibilidade de ativar algumas funcionalidades in-game, umas delas é a opção de trocar o health/mana do personagem para porcentagem.</p>', '<p><br data-mce-bogus=\"1\"></p>', '2018-11-15 19:50:34', '2018-11-15 20:02:23', NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_atr_wiki_subcategory`
--

CREATE TABLE `z_atr_wiki_subcategory` (
  `id_atr_wiki_subcategory` int(11) NOT NULL,
  `id_atr_wiki_category` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dta_insert` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dta_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dta_deleted` datetime DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `z_atr_wiki_subcategory`
--

INSERT INTO `z_atr_wiki_subcategory` (`id_atr_wiki_subcategory`, `id_atr_wiki_category`, `name`, `description`, `text`, `dta_insert`, `dta_update`, `dta_deleted`, `is_active`) VALUES
(1, 2, 'Boss Invasion', '<p>Durante a semana alguns bosses podem aparecer em horários predefinidos, uma cópia do boss vai ser criada no templo para a demonstração.</p>', '<h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Objetivo</span></h4><p>Matar o boss para obter o seu loot.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Limitação</span></h4><p>Não se aplica.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Horário</span></h4><p>06:00:00 - 13:00:00 - 20:00:00</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Premiação</span></h4><p>Os mais diversos itens.</p>', '2018-11-15 18:08:25', '2018-11-15 18:12:08', NULL, 1),
(4, 2, 'Island of Elementals', '<p>Nesse evento os jogadores devem se unir para derrotar os bosses, no total são 5, sendo que a cada boss morto vai ser criado um teleport, ao entrar no teleport o jogador vai ganhar um item random.<br></p>', '<h6 data-mce-style=\"font-size: 12px; text-align: left;\" style=\"font-size: 12px; text-align: left;\"><span style=\"color: inherit; font-family: inherit; font-size: 1.5rem;\" data-mce-style=\"color: inherit; font-family: inherit; font-size: 1.5rem;\">Objetivo</span><br></h6><p>Derrotar os bosses e sobreviver.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Limitação</span></h4><p>É necessário ter o level 200+ para entrar no evento. Para o evento ser iniciado é necessário ter no mínimo 2 jogadores. Não existe limite de tempo, sendo que se o jogador tiver algum problema, existe a possibilidade de do mesmo sair usandos os TPs que existem no evento.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Horário</span></h4><p>Verifique <a href=\"?subtopic=calendar\" data-mce-href=\"?subtopic=calendar\">aqui</a>.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Premiações</span></h4><p>Nome: demon armor; &nbsp;Quantidade: 1<br>Nome: magic plate armor; &nbsp;Quantidade: 1<br>Nome: mastermind shield; &nbsp;Quantidade: 1<br>Nome: demon helmet; &nbsp;Quantidade: 1<br>Nome: golden legs; &nbsp;Quantidade: 1<br>Nome: boots of haste; &nbsp;Quantidade: 1<br>Nome: amulet of loss; &nbsp;Quantidade: 1<br>Nome: Event coin; &nbsp;Quantidade: 1</p>', '2018-11-15 18:14:35', '2018-11-15 18:45:22', NULL, 1),
(5, 2, 'King of the Hill', '<p>Nesse evento o jogador que conseguir matar o maior número de jogadores vence. O jogador que tiver o melhor PVP vai ganhar”ou sorte mesmo”. Ao morrer durante o evento não se perde itens, level ou experiência, então aproveite ao máximo para treinar o seu PVP durante a execução do evento.<br></p>', '<h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Objetivo</span></h4><p>Matar a maior quantidade de jogadores.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Limitação</span></h4><p>Para iniciar o evento são necessários 2 jogadores, sendo que o limite são 60 jogadores. Por se tratar de um evento onde o que define a vitória é a quantidade de dano aplicada por ciclo de ataque, não é permitido a entrada de mais de 1 jogador por IP.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Horário</span></h4><p>Verifique <a href=\"?subtopic=calendar\" data-mce-href=\"?subtopic=calendar\">aqui</a>.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Premiação</span></h4><p>Nome: Event Coin; Quantidade: 1</p>', '2018-11-15 18:31:45', '2018-11-15 18:45:13', NULL, 1),
(6, 2, 'FireStorm', '<p>Não é o fim dos tempos, mas está chovendo fogo, não adianta usar guarda chuva ou exori frigo, nada disso vai ajudar, corra até o seu limite… Durante o evento não é permitido deslogar ou atacar outros jogadores, quando o participante ser atingido pelas labaredas do belzebu, não vai perder itens, experiência ou level, vai apenas ser movido para o templo.</p>', '<h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Objetivo</span></h4><p>Ser o último sobrevivente durante a chuva de fogo.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Limitação</span></h4><p>Necessário 2 participantes para iniciar o evento, não tendo limite máximo de participantes. Além de não existir limite máximo de minutos”não acreditamos que &nbsp;o jogador sobreviverá por mais de 1 hora”.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Horário</span></h4><p>Verifique <a href=\"?subtopic=calendar\" data-mce-href=\"?subtopic=calendar\">aqui</a>.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Premiação</span></h4><p>Nome: Event Coin; Quantidade:1</p>', '2018-11-15 18:34:30', '2018-11-15 18:44:39', NULL, 1),
(7, 2, 'Zombie Event', '<p>Se você gosta de TWD, esse evento é para você. Nele é necessário fugir dos zombies, sendo possível usar Magic Wall e Wild Growth. Não é possível matar os zombies, a única opção que o jogador tem é a de correr e se esconder, sendo possível escolher o seu fim.</p>', '<h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Objetivo</span></h4><p>Ser o último sobreviver das waves de zombies.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Limitação</span></h4><p>É necessário o mínimo de 2 jogadores para o início do evento. Sendo que o mesmo não tem limite máximo de tempo”Não acreditamos que você vai viver por mais de 1 hora”. Não existe controle de IP, o jogador entrar até com quantos characters querer até o limite do servidor”Quero ver controlar tudo isso na MÃO”.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Horário</span></h4><p>Verifique <a href=\"?subtopic=calendar\" data-mce-href=\"?subtopic=calendar\">aqui</a>.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Premiação</span></h4><p>Nome: Event Coint; Quantidade: 1</p>', '2018-11-15 18:35:47', '2018-11-15 18:44:31', NULL, 1),
(8, 2, 'Snow Ball War', '<p>Cansado de matar players in-game, que tal um evento family friend? Nesse evento o objetivo é acertar o outro jogador com uma bola de neve. Ao iniciar o jogador tem a sua disposição 20 bolas de neve, sendo possível recarregar no gerador que está localizado ao centro do evento. Se o jogador for atingido por uma bola durante o evento, o mesmo não vai perder as bolas acumuladas, mas se o jogador conseguir atingir outro, ele vai ganhar um Gain Point, através dele é possível trocar por 20 bolas de neve. As bolas não são acumuladas para o próximo Snow Ball, sendo que a cada novo evento o jogador inicia com 20 bolas de neve. Não é possível matar ou da logout durante a execução do evento.</p>', '<h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Objetivo</span></h4><p>Acertar o maior número de jogadores com bolas de neve.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Limitações</span></h4><p>Não existe controle de IP, pode entrar até o limite permitido, que são 3 jogadores”Quero ver ganhar sem usar bot”. É necessário o mínimo de 4 jogadores para o evento iniciar. Sendo que o evento tem duração de 5 minutos.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Horário</span></h4><p>Verifique <a href=\"?subtopic=calendar\" data-mce-href=\"?subtopic=calendar\">aqui</a>.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Premiação</span></h4><p>Primeiro lugar:</p><ul><li>Nome: Event Coin; Quantidade: 3</li></ul><p>Segundo lugar:</p><ul><li>Nome: Event Coin; Quantidade: 2</li></ul><p>Terceiro lugar:</p><p><br></p><ul><li>Nome: Event Coin; Quantidade: 1</li></ul>', '2018-11-15 18:39:11', '2018-11-15 18:42:58', NULL, 1),
(9, 2, 'Last man Standing', '<p>Umas das definições para esse evento é a seguinte”Cada um por si e todos por ninguém”. O jogador que sobreviver até o final ganha, vai ter que matar até o amiguinho char-lover para ganhar. &nbsp;Uma dica, utilize esse evento para verificar estratégias de war, como também pode treinar.</p>', '<h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Objetivo</span></h4><p>Matar todos os seus oponentes e ser o último jogador sobrevivente.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Limitações</span></h4><p>Máximo de 2 IP, não existe limite máximo de jogadores. O limite máximo de tempo durante o evento é de 20 minutos.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Horários</span></h4><p>Verifique <a href=\"?subtopic=calendar\" data-mce-href=\"?subtopic=calendar\">aqui</a>.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Premiação</span></h4><p>Nome: Event Coint; Quantidade: 1</p>', '2018-11-15 18:44:05', '2018-11-15 18:45:36', NULL, 1),
(10, 2, 'Defend the Towers', 'Levamos o vício do gênero battle arena para dentro do Tibia. Agora não é mais necessário sair do tibia para jogar League of Legends ou Dota. Nesse evento você deve proteger as suas torres de serem destruídas pelo time inimigo, o time que destruir mais torres vence o evento. Ao morrer dentro do evento o jogador vai ser teleportado para a base do seu time, não perdendo itens, experiência ou level.', '<h4><span style=\"font-weight: 400;\">Objetivo</span></h4>\r\n<p>Destruir as torres inimigas, o time que destruir primeiro ganha.</p>\r\n<h4><span style=\"font-weight: 400;\">Limita&ccedil;&otilde;es</span></h4>\r\n<p>Devido a ser um evento onde a quantidade de jogadores faz a diferen&ccedil;a, n&atilde;o &eacute; permitido a entrada de mais de 1 IP igual. O level m&iacute;nimo para entrar &eacute; 200, para poder iniciar o evento &eacute; necess&aacute;rio ter 2 jogadores. Depois de 20 minutos se nenhum dos times vencer, todos os participantes ser&atilde;o teleportados para o templo.</p>\r\n<h4><span style=\"font-weight: 400;\">Hor&aacute;rio</span></h4>\r\n<p>Verifique <a href=\"?subtopic=calendar\">aqui</a>.</p>\r\n<h4><span style=\"font-weight: 400;\">Premia&ccedil;&atilde;o</span></h4>\r\n<p>Nome: Event Coin; Quantidade: 1</p>\r\n<h4><span style=\"font-weight: 400;\">Observa&ccedil;&atilde;o</span></h4>\r\n<p>&nbsp;</p>\r\n<p>No momento esse evento n&atilde;o conta com os puffs como em outros servidores, futuramente eles ser&atilde;o adicionados.</p>', '2018-11-15 18:51:37', '2018-11-15 18:51:50', NULL, 1),
(11, 2, 'Desert War', '“Much War”, Esse evento acontece em um bioma de “i¿Deserto?!” onde 2 times deverão se enfrentar, somente o time que tiver mais sinergia ou sorte mesmo vai ganhar. Uma dica é conversar com os integrantes do seu time para escolher a melhor estratégia para vencer essa war. Ao morrer durante o evento, o jogador não vai perder experiência, level e itens.', '<h4><span style=\"font-weight: 400;\">Objetivo</span></h4>\r\n<p>Matar todos os integrantes do time inimigo.</p>\r\n<h4><span style=\"font-weight: 400;\">Limita&ccedil;&atilde;o</span></h4>\r\n<p>O evento somente vai iniciar se tiver o m&iacute;nimo 2 jogadores. Agora m&aacute;ximo de jogadores permitidos &eacute; 60. Sendo que n&atilde;o &eacute; permitido a entrada de 2 IP iguais no evento. Depois de 20 minutos se nenhum dos times vencer, todos os participantes ser&atilde;o teleportados para o templo.</p>\r\n<h4><span style=\"font-weight: 400;\">Hor&aacute;rio</span></h4>\r\n<p>Verifique <a href=\"?subtopic=calendar\">aqui</a>.</p>\r\n<h4><span style=\"font-weight: 400;\">Premia&ccedil;&atilde;o</span></h4>\r\n<p>&nbsp;</p>\r\n<p>Nome: Event Coin; Quantidade: 1</p>', '2018-11-15 18:53:21', '2018-11-15 18:53:21', NULL, 1),
(12, 2, 'Capture the Flag', '“Calma isso não é invasão a outro país”, nesse evento você deve capturar a Flag”bandeira” do time inimigo e lavar até a sua base, ao entregar a bandeira todos o jogadores são teleportados para suas bases. Ao morrer o jogador vai ser teleportado para uma base específica dentro do evento.', '<h4><span style=\"font-weight: 400;\">Objetivo</span></h4>\r\n<p>Capturar 10 Flags&rdquo;bandeiras&rdquo; do time inimigo.</p>\r\n<h4><span style=\"font-weight: 400;\">Limita&ccedil;&atilde;o</span></h4>\r\n<p>Para poder iniciar o evento s&atilde;o necess&aacute;rios 2 jogadores, tendo o limite de 60 jogadores. N&atilde;o &eacute; permitido a entrada de mais de 1 jogador por IP. Depois de 20 minutos se nenhum dos times vencer, todos os participantes ser&atilde;o teleportados para o templo.</p>\r\n<h4><span style=\"font-weight: 400;\">Hor&aacute;rio</span></h4>\r\n<p>Verifique <a href=\"?subtopic=calendar\">aqui</a>.</p>\r\n<h4><span style=\"font-weight: 400;\">Premia&ccedil;&atilde;o</span></h4>\r\n<p>&nbsp;</p>\r\n<p>Nome: Event Coin; Quantidade: 1</p>', '2018-11-15 19:14:34', '2018-11-15 19:14:34', NULL, 1),
(13, 2, 'Battlefield 4 teams', 'Eitcha mainha, “então agora são 4 times”, cada time é composto de jogadores escolhidos de forma sequencial ao entrar no evento. Nesse evento o time que conseguir sobreviver vai ganhar a premiação. Ao morrer o jogador não vai perde os itens, experiência ou level. “Projeto futuro” verificar a possibilidade de adicionar uma defesa extra dependendo da cor do seu time.', '<h4><span style=\"font-weight: 400;\">Objetivo</span></h4>\r\n<p>Matar os jogadores do outro time e sobreviver.</p>\r\n<h4><span style=\"font-weight: 400;\">Limita&ccedil;&atilde;o</span></h4>\r\n<p>Est&aacute; &eacute; outro evento onde a quantidade faz a diferen&ccedil;a, ent&atilde;o a um limite de 2 jogadores por IP. Para iniciar o evento &eacute; necess&aacute;rio 2 jogadores. Existe o limite de 60 jogadores. Depois de 20 minutos se nenhum dos times vencer, todos os participantes ser&atilde;o teleportados para o templo.</p>\r\n<h4><span style=\"font-weight: 400;\">Hor&aacute;rio</span></h4>\r\n<p>Verifique <a href=\"?subtopic=calendar\">aqui</a>.</p>\r\n<h4><span style=\"font-weight: 400;\">Premia&ccedil;&atilde;o</span></h4>\r\n<p>&nbsp;</p>\r\n<p>Nome: Event Coin; Quantidade: 1</p>', '2018-11-15 19:17:43', '2018-11-15 19:17:43', NULL, 1),
(14, 2, 'Battlefield 2 teams', 'Está preparado para uma batalha entre 2 times com pessoas aleatórias? Se a resposta foi sim, esse evento é para você. Nesse evento você deve matar todos os oponentes do outro time, ao morrer você não voltará ao evento, como também não vai ganhar os Event coin caso o time no qual você fazia parte ganhar. Ao morrer o jogador não vai perder nada, além disso a sua vida e mana vão ser completados, isso também vale para quando o evento chegar ao final. Existe um sistema de balanceamento, onde um time não vai ficar com mais jogadores que outro.', '<h4><span style=\"font-weight: 400;\">Objetivo</span></h4>\r\n<p>Matar os jogadores do outro time e sobreviver.</p>\r\n<h4><span style=\"font-weight: 400;\">Limita&ccedil;&atilde;o</span></h4>\r\n<p>Devido a ser um evento onde a quantidade faz a diferen&ccedil;a, n&atilde;o &eacute; permitido a entrada de mais de 2 ips. Existe o limite de 60 jogadores. Para o evento iniciar &eacute; necess&aacute;rio 2 jogadores. Depois de 20 minutos se nenhum dos times vencer, todos os participantes ser&atilde;o teleportados para o templo.</p>\r\n<h4><span style=\"font-weight: 400;\">Hor&aacute;rio</span></h4>\r\n<p>Verifique&nbsp;<a href=\"?subtopic=calendar\">aqui</a>.</p>\r\n<h4><span style=\"font-weight: 400;\">Premia&ccedil;&atilde;o</span></h4>\r\n<p>&nbsp;</p>\r\n<p>Nome: Event Coin; Quantidade: 1</p>', '2018-11-15 19:18:43', '2018-11-15 19:18:43', NULL, 1),
(15, 4, 'Special Commands', 'Através dele é possível ativar e desativar opções in-game, melhorando algumas experiências, umas delas é a heath/mana, quando o jogador tem um level muito alto pode haver overflow na contagem de vida/mana do cliente, resultando em valores irreais, através do special commands é possível alternar para a porcentagem.', '<h4><span style=\"font-weight: 400;\">Objetivo</span></h4>\r\n<p>Tentar melhorar a experi&ecirc;ncia in-game.</p>\r\n<h4><span style=\"font-weight: 400;\">Limita&ccedil;&atilde;o</span></h4>\r\n<p>&nbsp;</p>\r\n<p>Para finalizar a troca do Heath/Mana para inteiro ou porcentagem &eacute; necess&aacute;rio sair e entrar novamente &rdquo;Uma futura atualiza&ccedil;&atilde;o, vai contornar esse problema&rdquo;.</p>', '2018-11-15 20:04:05', '2018-11-15 20:04:05', NULL, 1),
(16, 4, 'Autoloot', '<p>Tarefas repetitivas podem se tornar massante a partir de um certo tempo, foi devido a esse problema que vários bots foram criados, para ajudar o jogador em ações repetidas. Através do autoloot é possível escolher alguns itens para serem movidos de forma automática para a sua backpack. No momento não tem opção para a venda automática dos itens!!</p><p> Para mais informações utilize o comando “!autoloot”.</p>', '<h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Objetivo</span></h4><p>Melhorar a experiência in-game.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Limitação</span></h4><p><br></p><p>Máximo de 5 itens.</p>', '2018-11-15 20:06:05', '2018-11-15 20:06:26', NULL, 1),
(17, 4, 'Instant Dungeon', 'Buscar uma opção para o jogador ter uma hunt tranquila, sem a surpresa de ser morto por inimigos, através da instant dungeon é possível o jogador ter essa tranquilidade.', '<h4><span style=\"font-weight: 400;\">Objetivo</span></h4>\r\n<p>Pegar a bonifica&ccedil;&atilde;o que tem na chest ao final da Dungeon. Al&eacute;m dos Strong Coins.</p>\r\n<h4><span style=\"font-weight: 400;\">Limita&ccedil;&atilde;o</span></h4>\r\n<p>&nbsp;</p>\r\n<p>M&aacute;ximo de 2 jogadores podem usar a dungeon ao mesmo tempo. Ao sair da Instant Dungeon &eacute; necess&aacute;rio esperar 1 hora para entrar.</p>', '2018-11-15 20:08:40', '2018-11-15 20:08:40', NULL, 1),
(18, 4, 'Challenge Monsters', 'Através desse evento é possível verificar quais jogadores tem a melhor estratégia para sobreviver às waves. Uma dica, não deixe acumular monstros, pois eles não serão removidos ao iniciar outra wave.', '<h4><span style=\"font-weight: 400;\">Objetivo</span></h4>\r\n<p>Sobreviver &agrave;s 7 waves de monstros.</p>\r\n<h4><span style=\"font-weight: 400;\">Limita&ccedil;&atilde;o</span></h4>\r\n<p>Para entrar no evento &eacute; necess&aacute;rio comprar uma entrada com o NPC Razar Kayn.</p>\r\n<h4><span style=\"font-weight: 400;\">Hor&aacute;rio</span></h4>\r\n<p>09:00:00 - 21:00:00</p>\r\n<h4><span style=\"font-weight: 400;\">Premia&ccedil;&atilde;o</span></h4>\r\n<p>&nbsp;</p>\r\n<p>Ter o seu nome na board que se encontra atr&aacute;s do NPC Razar Kayn.</p>', '2018-11-15 20:09:32', '2018-11-15 20:09:32', NULL, 1),
(19, 4, 'Dodge/Critical', 'Uns dos problemas que o jogador pode enfrentar é a limitação do dano/defesa, através do dodge/critical isso pode ser contornado, a cada turno o jogador pode ser beneficiado com o bônus. Quanto mais dodge/critical o jogador tiver, mais chances ele tem de ser beneficiado. Ambos tem o limite de 100 de cada.', '<h4><span style=\"font-weight: 400;\">Objetivo</span></h4>\r\n<p>Critical para dar mais dano e Dodge para bloquear o dano recebido.</p>\r\n<h4><span style=\"font-weight: 400;\">Limita&ccedil;&atilde;o</span></h4>\r\n<p>&nbsp;</p>\r\n<p>O jogador pode ter mais 50% de dano b&ocirc;nus no critical, e mais 50% de redu&ccedil;&atilde;o do dano no dodge.</p>', '2018-11-15 20:10:17', '2018-11-15 20:10:17', NULL, 1),
(20, 4, 'Reward Chest', 'É utilizado para guardar os items de alguns bosses. A sua localização é o templo da cidade de Mandera.', '<h4><span style=\"font-weight: 400;\">Objetivo</span></h4>\r\n<p>Armazenar os itens de alguns bosses.</p>\r\n<h4><span style=\"font-weight: 400;\">Limita&ccedil;&atilde;o</span></h4>\r\n<p>&nbsp;</p>\r\n<p>N&atilde;o deixe os itens por muito tempo na reward chest, depois de um certo tempo eles ser&atilde;o deletados.</p>', '2018-11-15 20:10:59', '2018-11-15 20:10:59', NULL, 1),
(21, 4, 'Cassino Talk', 'Diferente dos jogos tradicionais de azar, onde é utilizado uma máquina para poder concluir a ação, através do NPC isso pode se torna um pouco mais humano, devido a ter um character em tela. Para a utilização basta escolher o valor e o roll type que pode ser L”Low” ou H”High”.', '<h4><span style=\"font-weight: 400;\">Objetivo</span></h4>\r\n<p>Ganhar dinheiro por meio de aposta.</p>\r\n<h4><span style=\"font-weight: 400;\">Limita&ccedil;&atilde;o</span></h4>\r\n<p>&nbsp;</p>\r\n<p>&Eacute; permitido a utiliza&ccedil;&atilde;o somente num SQM espec&iacute;fico.</p>', '2018-11-15 20:26:48', '2018-11-15 20:26:48', NULL, 1),
(22, 4, 'Cassino Lever', 'Num casino tradicional existem várias opções para jogos de azar, o cassino lever é mais uma opção num leque enorme de opções. Sua utilização é simples, basta o jogador ter dinheiro na backpack e puxar a alavanca, para assim tentar ganhar um item random.', '<h4><span style=\"font-weight: 400;\">Objetivo</span></h4>\r\n<p>Ganhar itens randoms.</p>\r\n<h4><span style=\"font-weight: 400;\">Limita&ccedil;&atilde;o</span></h4>\r\n<p>&nbsp;</p>\r\n<p>Somente 1 jogador pode ocupar o sqm para puxar a alavanca.</p>', '2018-11-15 20:27:57', '2018-11-15 20:28:31', NULL, 1),
(23, 4, 'Hunting Área', 'São áreas onde o jogador pode deixar o seu character upando, o espaço da hunting área é limitado, então tome cuidado para não se trapar e acabar levando um combo. Para criar um novo mob é necessário subir em um tile específico dentro da hunting área.', '<h4><span style=\"font-weight: 400;\">Objetivo</span></h4>\r\n<p>Upar mais rapido.</p>\r\n<h4><span style=\"font-weight: 400;\">Limita&ccedil;&atilde;o</span></h4>\r\n<p>&nbsp;</p>\r\n<p>&Eacute; necess&aacute;rio escolher um tempo, no momento &eacute; poss&iacute;vel ter 4 mobs simult&acirc;neos na sua hunting &aacute;rea. Somente algumas &aacute;reas permitem a entrada de mais de um jogador. N&atilde;o &eacute; poss&iacute;vel atacar outro jogador.</p>', '2018-11-15 20:29:21', '2018-11-15 20:29:21', NULL, 1),
(24, 4, 'Guild War', 'Diferente do City War, o guild war não tem limitação alguma na utilização de makers, o jogador pode usar todos os locais possíveis de acessar para obter frags para a sua Guild, basicamente tem quase todo o mapa. É possível escolher o tempo de duração da War, a quantidade de frags e o valor no qual as guilds vão apostar.', '<h4><span style=\"font-weight: 400;\">Objetivo</span></h4>\r\n<p>Matar os membros da outra guild o mais r&aacute;pido poss&iacute;vel para assim ganhar a aposta.</p>\r\n<h4><span style=\"font-weight: 400;\">Limita&ccedil;&atilde;o</span></h4>\r\n<p>&nbsp;</p>\r\n<p>Para iniciar a Guild War &eacute; necess&aacute;rio ter 5 membros da guild online com IPs diferentes. Ap&oacute;s o server save a contagem de frags vai continuar normal at&eacute; alcan&ccedil;ar a quantidade de frags aceita na war ou at&eacute; acabar o tempo.</p>', '2018-11-15 20:30:00', '2018-11-15 20:30:00', NULL, 1),
(25, 4, 'City War', 'Uns dos problemas das wars tradicionais são os makers e outros jogadores que podem atrapalhar as estratégias, pensando nisso foi adicionado o city war. Atualmente existem 4 cidades que são as seguintes: Edron, Yalahar, Darashia e Libertybay. É possível alterar algumas opções tendo a possibilidade de habilitar/desativar a SD e UE, também é possível escolher um valor que vai ser descontado do guild bank até o final do city war, ao final o valor vai ser transferido para a guild vencedora. Se por algum motivo não tiver nenhum frag ou tiver empate no frags da guild, o valor vai ser transferido para o guild bank das guilds.', '<h4><span style=\"font-weight: 400;\">Objetivo</span></h4>\r\n<p>Procurar matar a maior quantidade de player da guild advers&aacute;ria dentro da city war.</p>\r\n<h4><span style=\"font-weight: 400;\">Limita&ccedil;&atilde;o</span></h4>\r\n<p>&nbsp;</p>\r\n<p>N&atilde;o &eacute; poss&iacute;vel escolher uma cidade onde j&aacute; esteja acontecendo uma war. Ambas as guilds que forem iniciar a war devem ter pelo menos 5 membros onlines com IPs diferentes. Ap&oacute;s a confirma&ccedil;&atilde;o da War os membros das guilds tem 60 minutos para usarem a cidade. N&atilde;o &eacute; poss&iacute;vel iniciar a war, faltando 1 hora para o server save.</p>', '2018-11-15 20:30:42', '2018-11-15 20:30:42', NULL, 1),
(26, 4, 'Guild Castle', 'Buscar uma dinâmica diferente sobre o objetivo de uma guild, normalmente no Tibia Global a guild busca dominar o servidor, com isso expulsando os jogadores inimigos. Através do Guild castle esse objetivo pode se alterar um pouco, sendo o principal a continuação do domínio do castle. O Castle é composto por hunts para a guild dominante, sendo possível ter uma hunt tranquila, até que outra guild tente dominar o castle.', '<h4><span style=\"font-weight: 400;\">Objetivo</span></h4>\r\n<p>Dominar o castle</p>\r\n<h4><span style=\"font-weight: 400;\">Limita&ccedil;&atilde;o</span></h4>\r\n<p>Existe um cooldown de 2 horas a partir da &uacute;ltima guild que dominou.</p>\r\n<h4><span style=\"font-weight: 400;\">Hor&aacute;rio</span></h4>\r\n<p>A cada 2 horas a partir da &uacute;ltima Guild dominar.</p>\r\n<h4><span style=\"font-weight: 400;\">Premia&ccedil;&atilde;o</span></h4>\r\n<p>&nbsp;</p>\r\n<p>&Aacute;reas exclusivas de hunt, mas b&ocirc;nus de 7% de XP.</p>', '2018-11-15 20:31:33', '2018-11-15 20:31:33', NULL, 1),
(27, 4, 'Strong Área', 'Dentro dessa área se encontra os monstros Strong, o jogador deve recolher vários Strong Coins para assim poder craftar itens strong. A partir do momento que o jogador conseguir uma quantidade de Strong Coins, ele deve se dirigir até o NPC Strong Craft e escolher o item.', '<h4><span style=\"font-weight: 400;\">Objetivo</span></h4>\r\n<p>Obter Strong Coins para craftar itens Strong.</p>\r\n<h4><span style=\"font-weight: 400;\">Limita&ccedil;&atilde;o</span></h4>\r\n<p>O jogador tem 1 hora para ficar dentro da hunt, depois disso ele ser&aacute; teleportado para fora da strong &aacute;rea, sendo poss&iacute;vel voltar depois de pagar a taxa novamente.</p>\r\n<h4><span style=\"font-weight: 400;\">Hor&aacute;rio</span></h4>\r\n<p>&nbsp;</p>\r\n<p>A cada intervalo de 5 horas, &eacute; feita a escolha do novo teleport randomicamente.</p>', '2018-11-15 20:32:16', '2018-11-15 20:32:16', NULL, 1),
(28, 3, 'Bomberman', '<p>Saudades de jogar bomberman? Então esse minigame é para você, nele 4 jogadores vão explodir quase tudo na arena. Aproveite os boosts que podem cair ao explodir os blocos, existe 3 possibilidades de boosts: </p><p>Nome: Glass of goo; Boost: Aumenta a quantidade de bombas que o jogador pode soldar ao mesmo tempo na arena. Máximo de 3 bombas simultâneas. </p><p>Nome: Plasmatic Lightning; Boost: Aumenta a velocidade do jogador, sendo que dura 10 segundos. Não é cumulativo!! </p><p>Nome: Spark Shere; Boost: Aumenta o poder da bomba, sendo que o diâmetro máximo é 4 sqm, seu poder máximo é no diâmetro de 4 sqm a partir do local da bomba.</p>', '<h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Objetivo</span></h4><p>Explodir o seu adversário e ser o último sobrevivente.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">LImitação</span></h4><p>Existe a limitação de 4 jogadores ao mesmo tempo no mini game, sendo possível iniciar com apenas 2 jogadores. Não se pode criar uma bomba onde já tem outra.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Horário</span></h4><p>Fica aberto o dia inteiro.</p><h4><span style=\"font-weight: 400;\" data-mce-style=\"font-weight: 400;\">Premiação</span></h4><p><br></p><p>Não se aplica a esse mini game.</p>', '2018-11-16 02:56:18', '2018-11-16 02:57:05', NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_changelogs`
--

CREATE TABLE `z_changelogs` (
  `id_changelog` int(11) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_forum`
--

CREATE TABLE `z_forum` (
  `id` int(11) NOT NULL,
  `first_post` int(11) NOT NULL DEFAULT '0',
  `last_post` int(11) NOT NULL DEFAULT '0',
  `section` int(3) NOT NULL DEFAULT '0',
  `replies` int(20) NOT NULL DEFAULT '0',
  `views` int(20) NOT NULL DEFAULT '0',
  `author_aid` int(20) NOT NULL DEFAULT '0',
  `author_guid` int(20) NOT NULL DEFAULT '0',
  `post_text` text NOT NULL,
  `post_topic` varchar(255) NOT NULL,
  `post_smile` tinyint(1) NOT NULL DEFAULT '0',
  `post_date` int(20) NOT NULL DEFAULT '0',
  `last_edit_aid` int(20) NOT NULL DEFAULT '0',
  `edit_date` int(20) NOT NULL DEFAULT '0',
  `post_ip` varchar(15) NOT NULL DEFAULT '0.0.0.0',
  `icon_id` int(11) NOT NULL,
  `news_icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_helpdesk`
--

CREATE TABLE `z_helpdesk` (
  `account` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `text` text NOT NULL,
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `priority` int(11) NOT NULL,
  `reply` int(11) NOT NULL,
  `who` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `tag` int(11) NOT NULL,
  `registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `t_id` varchar(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_items`
--

CREATE TABLE `z_items` (
  `id` int(11) NOT NULL,
  `article` varchar(5) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `plural` varchar(50) NOT NULL DEFAULT '',
  `attributes` varchar(500) NOT NULL DEFAULT '',
  `hidden_item` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_monsters`
--

CREATE TABLE `z_monsters` (
  `hide_creature` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mana` int(11) NOT NULL,
  `exp` int(11) NOT NULL,
  `health` int(11) NOT NULL,
  `speed_lvl` int(11) NOT NULL DEFAULT '1',
  `use_haste` tinyint(1) NOT NULL,
  `voices` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `immunities` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summonable` tinyint(1) NOT NULL,
  `convinceable` tinyint(1) NOT NULL,
  `race` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loot` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `looktype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_network_box`
--

CREATE TABLE `z_network_box` (
  `id` int(11) NOT NULL,
  `network_name` varchar(10) NOT NULL,
  `network_link` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_news_tickers`
--

CREATE TABLE `z_news_tickers` (
  `date` int(11) NOT NULL DEFAULT '1',
  `author` int(11) NOT NULL,
  `image_id` int(3) NOT NULL DEFAULT '0',
  `text` text NOT NULL,
  `hide_ticker` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_ots_comunication`
--

CREATE TABLE `z_ots_comunication` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `param1` varchar(255) NOT NULL,
  `param2` varchar(255) NOT NULL,
  `param3` varchar(255) NOT NULL,
  `param4` varchar(255) NOT NULL,
  `param5` varchar(255) NOT NULL,
  `param6` varchar(255) NOT NULL,
  `param7` varchar(255) NOT NULL,
  `delete_it` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_ots_guildcomunication`
--

CREATE TABLE `z_ots_guildcomunication` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `param1` varchar(255) NOT NULL,
  `param2` varchar(255) NOT NULL,
  `param3` varchar(255) NOT NULL,
  `param4` varchar(255) NOT NULL,
  `param5` varchar(255) NOT NULL,
  `param6` varchar(255) NOT NULL,
  `param7` varchar(255) NOT NULL,
  `delete_it` int(2) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_polls`
--

CREATE TABLE `z_polls` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `end` int(11) NOT NULL,
  `start` int(11) NOT NULL,
  `answers` int(11) NOT NULL,
  `votes_all` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_polls_answers`
--

CREATE TABLE `z_polls_answers` (
  `poll_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `votes` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_shopguild_history_item`
--

CREATE TABLE `z_shopguild_history_item` (
  `id` int(11) NOT NULL,
  `to_name` varchar(255) NOT NULL DEFAULT '0',
  `to_account` int(11) NOT NULL DEFAULT '0',
  `from_nick` varchar(255) NOT NULL,
  `from_account` int(11) NOT NULL DEFAULT '0',
  `price` int(11) NOT NULL DEFAULT '0',
  `offer_id` int(11) NOT NULL DEFAULT '0',
  `trans_state` varchar(255) NOT NULL,
  `trans_start` int(11) NOT NULL DEFAULT '0',
  `trans_real` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_shopguild_history_pacc`
--

CREATE TABLE `z_shopguild_history_pacc` (
  `id` int(11) NOT NULL,
  `to_name` varchar(255) NOT NULL DEFAULT '0',
  `to_account` int(11) NOT NULL DEFAULT '0',
  `from_nick` varchar(255) NOT NULL,
  `from_account` int(11) NOT NULL DEFAULT '0',
  `price` int(11) NOT NULL DEFAULT '0',
  `pacc_days` int(11) NOT NULL DEFAULT '0',
  `trans_state` varchar(255) NOT NULL,
  `trans_start` int(11) NOT NULL DEFAULT '0',
  `trans_real` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_shopguild_offer`
--

CREATE TABLE `z_shopguild_offer` (
  `id` int(11) NOT NULL,
  `points` int(11) NOT NULL DEFAULT '0',
  `itemid1` int(11) NOT NULL DEFAULT '0',
  `count1` int(11) NOT NULL DEFAULT '0',
  `itemid2` int(11) NOT NULL DEFAULT '0',
  `count2` int(11) NOT NULL DEFAULT '0',
  `offer_type` varchar(255) DEFAULT NULL,
  `offer_description` text NOT NULL,
  `offer_name` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `z_shopguild_offer`
--

INSERT INTO `z_shopguild_offer` (`id`, `points`, `itemid1`, `count1`, `itemid2`, `count2`, `offer_type`, `offer_description`, `offer_name`, `pid`) VALUES
(1, 1, 2160, 10, 0, 0, 'item', '10 crystal coin para seu char.', 'Crystal Coin', 0),
(2, 10, 2640, 1, 0, 0, 'item', 'Soft Boots regenerate 10 health per 2 seconds and 15 mana per 2 seconds.', 'Pair of Soft Boots', 0),
(3, 2, 2195, 1, 0, 0, 'item', 'boots of haste (speed +20).', 'Boots of Haste', 0),
(4, 5, 18409, 1, 0, 0, 'item', 'Fire ataque max 85 e magic +1.', 'Wand of Everblazing', 0),
(5, 5, 18411, 1, 0, 0, 'item', 'Earth ataque max 85 e magic +1.', 'Muck Rod', 0),
(6, 5, 2400, 1, 0, 0, 'item', 'Atributos (Atk:48, Def:35 +3).', 'Magic Sword', 0),
(7, 7, 2431, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +3).', 'Stonecutter Axe', 0),
(8, 6, 8928, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +2).', 'Obsidian Truncheon', 0),
(9, 5, 18453, 1, 0, 0, 'item', 'Atributos (Range:6, Atk+4, Hit%+3).', 'Crystal Crossbow', 0),
(1, 1, 2160, 10, 0, 0, 'item', '10 crystal coin para seu char.', 'Crystal Coin', 0),
(2, 10, 2640, 1, 0, 0, 'item', 'Soft Boots regenerate 10 health per 2 seconds and 15 mana per 2 seconds.', 'Pair of Soft Boots', 0),
(3, 2, 2195, 1, 0, 0, 'item', 'boots of haste (speed +20).', 'Boots of Haste', 0),
(4, 5, 18409, 1, 0, 0, 'item', 'Fire ataque max 85 e magic +1.', 'Wand of Everblazing', 0),
(5, 5, 18411, 1, 0, 0, 'item', 'Earth ataque max 85 e magic +1.', 'Muck Rod', 0),
(6, 5, 2400, 1, 0, 0, 'item', 'Atributos (Atk:48, Def:35 +3).', 'Magic Sword', 0),
(7, 7, 2431, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +3).', 'Stonecutter Axe', 0),
(8, 6, 8928, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +2).', 'Obsidian Truncheon', 0),
(9, 5, 18453, 1, 0, 0, 'item', 'Atributos (Range:6, Atk+4, Hit%+3).', 'Crystal Crossbow', 0),
(1, 1, 2160, 10, 0, 0, 'item', '10 crystal coin para seu char.', 'Crystal Coin', 0),
(2, 10, 2640, 1, 0, 0, 'item', 'Soft Boots regenerate 10 health per 2 seconds and 15 mana per 2 seconds.', 'Pair of Soft Boots', 0),
(3, 2, 2195, 1, 0, 0, 'item', 'boots of haste (speed +20).', 'Boots of Haste', 0),
(4, 5, 18409, 1, 0, 0, 'item', 'Fire ataque max 85 e magic +1.', 'Wand of Everblazing', 0),
(5, 5, 18411, 1, 0, 0, 'item', 'Earth ataque max 85 e magic +1.', 'Muck Rod', 0),
(6, 5, 2400, 1, 0, 0, 'item', 'Atributos (Atk:48, Def:35 +3).', 'Magic Sword', 0),
(7, 7, 2431, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +3).', 'Stonecutter Axe', 0),
(8, 6, 8928, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +2).', 'Obsidian Truncheon', 0),
(9, 5, 18453, 1, 0, 0, 'item', 'Atributos (Range:6, Atk+4, Hit%+3).', 'Crystal Crossbow', 0),
(1, 1, 2160, 10, 0, 0, 'item', '10 crystal coin para seu char.', 'Crystal Coin', 0),
(2, 10, 2640, 1, 0, 0, 'item', 'Soft Boots regenerate 10 health per 2 seconds and 15 mana per 2 seconds.', 'Pair of Soft Boots', 0),
(3, 2, 2195, 1, 0, 0, 'item', 'boots of haste (speed +20).', 'Boots of Haste', 0),
(4, 5, 18409, 1, 0, 0, 'item', 'Fire ataque max 85 e magic +1.', 'Wand of Everblazing', 0),
(5, 5, 18411, 1, 0, 0, 'item', 'Earth ataque max 85 e magic +1.', 'Muck Rod', 0),
(6, 5, 2400, 1, 0, 0, 'item', 'Atributos (Atk:48, Def:35 +3).', 'Magic Sword', 0),
(7, 7, 2431, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +3).', 'Stonecutter Axe', 0),
(8, 6, 8928, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +2).', 'Obsidian Truncheon', 0),
(9, 5, 18453, 1, 0, 0, 'item', 'Atributos (Range:6, Atk+4, Hit%+3).', 'Crystal Crossbow', 0),
(1, 1, 2160, 10, 0, 0, 'item', '10 crystal coin para seu char.', 'Crystal Coin', 0),
(2, 10, 2640, 1, 0, 0, 'item', 'Soft Boots regenerate 10 health per 2 seconds and 15 mana per 2 seconds.', 'Pair of Soft Boots', 0),
(3, 2, 2195, 1, 0, 0, 'item', 'boots of haste (speed +20).', 'Boots of Haste', 0),
(4, 5, 18409, 1, 0, 0, 'item', 'Fire ataque max 85 e magic +1.', 'Wand of Everblazing', 0),
(5, 5, 18411, 1, 0, 0, 'item', 'Earth ataque max 85 e magic +1.', 'Muck Rod', 0),
(6, 5, 2400, 1, 0, 0, 'item', 'Atributos (Atk:48, Def:35 +3).', 'Magic Sword', 0),
(7, 7, 2431, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +3).', 'Stonecutter Axe', 0),
(8, 6, 8928, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +2).', 'Obsidian Truncheon', 0),
(9, 5, 18453, 1, 0, 0, 'item', 'Atributos (Range:6, Atk+4, Hit%+3).', 'Crystal Crossbow', 0),
(1, 1, 2160, 10, 0, 0, 'item', '10 crystal coin para seu char.', 'Crystal Coin', 0),
(2, 10, 2640, 1, 0, 0, 'item', 'Soft Boots regenerate 10 health per 2 seconds and 15 mana per 2 seconds.', 'Pair of Soft Boots', 0),
(3, 2, 2195, 1, 0, 0, 'item', 'boots of haste (speed +20).', 'Boots of Haste', 0),
(4, 5, 18409, 1, 0, 0, 'item', 'Fire ataque max 85 e magic +1.', 'Wand of Everblazing', 0),
(5, 5, 18411, 1, 0, 0, 'item', 'Earth ataque max 85 e magic +1.', 'Muck Rod', 0),
(6, 5, 2400, 1, 0, 0, 'item', 'Atributos (Atk:48, Def:35 +3).', 'Magic Sword', 0),
(7, 7, 2431, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +3).', 'Stonecutter Axe', 0),
(8, 6, 8928, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +2).', 'Obsidian Truncheon', 0),
(9, 5, 18453, 1, 0, 0, 'item', 'Atributos (Range:6, Atk+4, Hit%+3).', 'Crystal Crossbow', 0),
(1, 1, 2160, 10, 0, 0, 'item', '10 crystal coin para seu char.', 'Crystal Coin', 0),
(2, 10, 2640, 1, 0, 0, 'item', 'Soft Boots regenerate 10 health per 2 seconds and 15 mana per 2 seconds.', 'Pair of Soft Boots', 0),
(3, 2, 2195, 1, 0, 0, 'item', 'boots of haste (speed +20).', 'Boots of Haste', 0),
(4, 5, 18409, 1, 0, 0, 'item', 'Fire ataque max 85 e magic +1.', 'Wand of Everblazing', 0),
(5, 5, 18411, 1, 0, 0, 'item', 'Earth ataque max 85 e magic +1.', 'Muck Rod', 0),
(6, 5, 2400, 1, 0, 0, 'item', 'Atributos (Atk:48, Def:35 +3).', 'Magic Sword', 0),
(7, 7, 2431, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +3).', 'Stonecutter Axe', 0),
(8, 6, 8928, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +2).', 'Obsidian Truncheon', 0),
(9, 5, 18453, 1, 0, 0, 'item', 'Atributos (Range:6, Atk+4, Hit%+3).', 'Crystal Crossbow', 0),
(1, 1, 2160, 10, 0, 0, 'item', '10 crystal coin para seu char.', 'Crystal Coin', 0),
(2, 10, 2640, 1, 0, 0, 'item', 'Soft Boots regenerate 10 health per 2 seconds and 15 mana per 2 seconds.', 'Pair of Soft Boots', 0),
(3, 2, 2195, 1, 0, 0, 'item', 'boots of haste (speed +20).', 'Boots of Haste', 0),
(4, 5, 18409, 1, 0, 0, 'item', 'Fire ataque max 85 e magic +1.', 'Wand of Everblazing', 0),
(5, 5, 18411, 1, 0, 0, 'item', 'Earth ataque max 85 e magic +1.', 'Muck Rod', 0),
(6, 5, 2400, 1, 0, 0, 'item', 'Atributos (Atk:48, Def:35 +3).', 'Magic Sword', 0),
(7, 7, 2431, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +3).', 'Stonecutter Axe', 0),
(8, 6, 8928, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +2).', 'Obsidian Truncheon', 0),
(9, 5, 18453, 1, 0, 0, 'item', 'Atributos (Range:6, Atk+4, Hit%+3).', 'Crystal Crossbow', 0),
(1, 1, 2160, 10, 0, 0, 'item', '10 crystal coin para seu char.', 'Crystal Coin', 0),
(2, 10, 2640, 1, 0, 0, 'item', 'Soft Boots regenerate 10 health per 2 seconds and 15 mana per 2 seconds.', 'Pair of Soft Boots', 0),
(3, 2, 2195, 1, 0, 0, 'item', 'boots of haste (speed +20).', 'Boots of Haste', 0),
(4, 5, 18409, 1, 0, 0, 'item', 'Fire ataque max 85 e magic +1.', 'Wand of Everblazing', 0),
(5, 5, 18411, 1, 0, 0, 'item', 'Earth ataque max 85 e magic +1.', 'Muck Rod', 0),
(6, 5, 2400, 1, 0, 0, 'item', 'Atributos (Atk:48, Def:35 +3).', 'Magic Sword', 0),
(7, 7, 2431, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +3).', 'Stonecutter Axe', 0),
(8, 6, 8928, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +2).', 'Obsidian Truncheon', 0),
(9, 5, 18453, 1, 0, 0, 'item', 'Atributos (Range:6, Atk+4, Hit%+3).', 'Crystal Crossbow', 0),
(1, 1, 2160, 10, 0, 0, 'item', '10 crystal coin para seu char.', 'Crystal Coin', 0),
(2, 10, 2640, 1, 0, 0, 'item', 'Soft Boots regenerate 10 health per 2 seconds and 15 mana per 2 seconds.', 'Pair of Soft Boots', 0),
(3, 2, 2195, 1, 0, 0, 'item', 'boots of haste (speed +20).', 'Boots of Haste', 0),
(4, 5, 18409, 1, 0, 0, 'item', 'Fire ataque max 85 e magic +1.', 'Wand of Everblazing', 0),
(5, 5, 18411, 1, 0, 0, 'item', 'Earth ataque max 85 e magic +1.', 'Muck Rod', 0),
(6, 5, 2400, 1, 0, 0, 'item', 'Atributos (Atk:48, Def:35 +3).', 'Magic Sword', 0),
(7, 7, 2431, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +3).', 'Stonecutter Axe', 0),
(8, 6, 8928, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +2).', 'Obsidian Truncheon', 0),
(9, 5, 18453, 1, 0, 0, 'item', 'Atributos (Range:6, Atk+4, Hit%+3).', 'Crystal Crossbow', 0),
(1, 1, 2160, 10, 0, 0, 'item', '10 crystal coin para seu char.', 'Crystal Coin', 0),
(2, 10, 2640, 1, 0, 0, 'item', 'Soft Boots regenerate 10 health per 2 seconds and 15 mana per 2 seconds.', 'Pair of Soft Boots', 0),
(3, 2, 2195, 1, 0, 0, 'item', 'boots of haste (speed +20).', 'Boots of Haste', 0),
(4, 5, 18409, 1, 0, 0, 'item', 'Fire ataque max 85 e magic +1.', 'Wand of Everblazing', 0),
(5, 5, 18411, 1, 0, 0, 'item', 'Earth ataque max 85 e magic +1.', 'Muck Rod', 0),
(6, 5, 2400, 1, 0, 0, 'item', 'Atributos (Atk:48, Def:35 +3).', 'Magic Sword', 0),
(7, 7, 2431, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +3).', 'Stonecutter Axe', 0),
(8, 6, 8928, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +2).', 'Obsidian Truncheon', 0),
(9, 5, 18453, 1, 0, 0, 'item', 'Atributos (Range:6, Atk+4, Hit%+3).', 'Crystal Crossbow', 0),
(1, 1, 2160, 10, 0, 0, 'item', '10 crystal coin para seu char.', 'Crystal Coin', 0),
(2, 10, 2640, 1, 0, 0, 'item', 'Soft Boots regenerate 10 health per 2 seconds and 15 mana per 2 seconds.', 'Pair of Soft Boots', 0),
(3, 2, 2195, 1, 0, 0, 'item', 'boots of haste (speed +20).', 'Boots of Haste', 0),
(4, 5, 18409, 1, 0, 0, 'item', 'Fire ataque max 85 e magic +1.', 'Wand of Everblazing', 0),
(5, 5, 18411, 1, 0, 0, 'item', 'Earth ataque max 85 e magic +1.', 'Muck Rod', 0),
(6, 5, 2400, 1, 0, 0, 'item', 'Atributos (Atk:48, Def:35 +3).', 'Magic Sword', 0),
(7, 7, 2431, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +3).', 'Stonecutter Axe', 0),
(8, 6, 8928, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +2).', 'Obsidian Truncheon', 0),
(9, 5, 18453, 1, 0, 0, 'item', 'Atributos (Range:6, Atk+4, Hit%+3).', 'Crystal Crossbow', 0),
(1, 1, 2160, 10, 0, 0, 'item', '10 crystal coin para seu char.', 'Crystal Coin', 0),
(2, 10, 2640, 1, 0, 0, 'item', 'Soft Boots regenerate 10 health per 2 seconds and 15 mana per 2 seconds.', 'Pair of Soft Boots', 0),
(3, 2, 2195, 1, 0, 0, 'item', 'boots of haste (speed +20).', 'Boots of Haste', 0),
(4, 5, 18409, 1, 0, 0, 'item', 'Fire ataque max 85 e magic +1.', 'Wand of Everblazing', 0),
(5, 5, 18411, 1, 0, 0, 'item', 'Earth ataque max 85 e magic +1.', 'Muck Rod', 0),
(6, 5, 2400, 1, 0, 0, 'item', 'Atributos (Atk:48, Def:35 +3).', 'Magic Sword', 0),
(7, 7, 2431, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +3).', 'Stonecutter Axe', 0),
(8, 6, 8928, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +2).', 'Obsidian Truncheon', 0),
(9, 5, 18453, 1, 0, 0, 'item', 'Atributos (Range:6, Atk+4, Hit%+3).', 'Crystal Crossbow', 0),
(1, 1, 2160, 10, 0, 0, 'item', '10 crystal coin para seu char.', 'Crystal Coin', 0),
(2, 10, 2640, 1, 0, 0, 'item', 'Soft Boots regenerate 10 health per 2 seconds and 15 mana per 2 seconds.', 'Pair of Soft Boots', 0),
(3, 2, 2195, 1, 0, 0, 'item', 'boots of haste (speed +20).', 'Boots of Haste', 0),
(4, 5, 18409, 1, 0, 0, 'item', 'Fire ataque max 85 e magic +1.', 'Wand of Everblazing', 0),
(5, 5, 18411, 1, 0, 0, 'item', 'Earth ataque max 85 e magic +1.', 'Muck Rod', 0),
(6, 5, 2400, 1, 0, 0, 'item', 'Atributos (Atk:48, Def:35 +3).', 'Magic Sword', 0),
(7, 7, 2431, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +3).', 'Stonecutter Axe', 0),
(8, 6, 8928, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +2).', 'Obsidian Truncheon', 0),
(9, 5, 18453, 1, 0, 0, 'item', 'Atributos (Range:6, Atk+4, Hit%+3).', 'Crystal Crossbow', 0),
(1, 1, 2160, 10, 0, 0, 'item', '10 crystal coin para seu char.', 'Crystal Coin', 0),
(2, 10, 2640, 1, 0, 0, 'item', 'Soft Boots regenerate 10 health per 2 seconds and 15 mana per 2 seconds.', 'Pair of Soft Boots', 0),
(3, 2, 2195, 1, 0, 0, 'item', 'boots of haste (speed +20).', 'Boots of Haste', 0),
(4, 5, 18409, 1, 0, 0, 'item', 'Fire ataque max 85 e magic +1.', 'Wand of Everblazing', 0),
(5, 5, 18411, 1, 0, 0, 'item', 'Earth ataque max 85 e magic +1.', 'Muck Rod', 0),
(6, 5, 2400, 1, 0, 0, 'item', 'Atributos (Atk:48, Def:35 +3).', 'Magic Sword', 0),
(7, 7, 2431, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +3).', 'Stonecutter Axe', 0),
(8, 6, 8928, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +2).', 'Obsidian Truncheon', 0),
(9, 5, 18453, 1, 0, 0, 'item', 'Atributos (Range:6, Atk+4, Hit%+3).', 'Crystal Crossbow', 0),
(1, 1, 2160, 10, 0, 0, 'item', '10 crystal coin para seu char.', 'Crystal Coin', 0),
(2, 10, 2640, 1, 0, 0, 'item', 'Soft Boots regenerate 10 health per 2 seconds and 15 mana per 2 seconds.', 'Pair of Soft Boots', 0),
(3, 2, 2195, 1, 0, 0, 'item', 'boots of haste (speed +20).', 'Boots of Haste', 0),
(4, 5, 18409, 1, 0, 0, 'item', 'Fire ataque max 85 e magic +1.', 'Wand of Everblazing', 0),
(5, 5, 18411, 1, 0, 0, 'item', 'Earth ataque max 85 e magic +1.', 'Muck Rod', 0),
(6, 5, 2400, 1, 0, 0, 'item', 'Atributos (Atk:48, Def:35 +3).', 'Magic Sword', 0),
(7, 7, 2431, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +3).', 'Stonecutter Axe', 0),
(8, 6, 8928, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +2).', 'Obsidian Truncheon', 0),
(9, 5, 18453, 1, 0, 0, 'item', 'Atributos (Range:6, Atk+4, Hit%+3).', 'Crystal Crossbow', 0),
(1, 1, 2160, 10, 0, 0, 'item', '10 crystal coin para seu char.', 'Crystal Coin', 0),
(2, 10, 2640, 1, 0, 0, 'item', 'Soft Boots regenerate 10 health per 2 seconds and 15 mana per 2 seconds.', 'Pair of Soft Boots', 0),
(3, 2, 2195, 1, 0, 0, 'item', 'boots of haste (speed +20).', 'Boots of Haste', 0),
(4, 5, 18409, 1, 0, 0, 'item', 'Fire ataque max 85 e magic +1.', 'Wand of Everblazing', 0),
(5, 5, 18411, 1, 0, 0, 'item', 'Earth ataque max 85 e magic +1.', 'Muck Rod', 0),
(6, 5, 2400, 1, 0, 0, 'item', 'Atributos (Atk:48, Def:35 +3).', 'Magic Sword', 0),
(7, 7, 2431, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +3).', 'Stonecutter Axe', 0),
(8, 6, 8928, 1, 0, 0, 'item', 'Atributos (Atk:50, Def:30 +2).', 'Obsidian Truncheon', 0),
(9, 5, 18453, 1, 0, 0, 'item', 'Atributos (Range:6, Atk+4, Hit%+3).', 'Crystal Crossbow', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_shop_category`
--

CREATE TABLE `z_shop_category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `button` varchar(50) NOT NULL,
  `hide` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `z_shop_category`
--

INSERT INTO `z_shop_category` (`id`, `name`, `desc`, `button`, `hide`) VALUES
(2, 'Extras', 'Compre extras para seu personagem.', '_sbutton_getextraservice.gif', 0),
(3, 'Montarias', 'Buy your characters one or more of the fabulous mounts offered here.', '_sbutton_getmount.gif', 1),
(4, 'Outfits', 'Buy your characters one or more of the fancy outfits offered here.', '_sbutton_getoutfit.gif', 1),
(5, 'Vantagens', 'Tenha diversas vantagens e se torne mais poderoso.', '_sbutton_getextraservice.gif', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_shop_donates`
--

CREATE TABLE `z_shop_donates` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `reference` varchar(50) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `method` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `points` int(11) NOT NULL,
  `coins` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_shop_donate_confirm`
--

CREATE TABLE `z_shop_donate_confirm` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `donate_id` int(11) NOT NULL,
  `msg` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_shop_history_item`
--

CREATE TABLE `z_shop_history_item` (
  `id` int(11) NOT NULL,
  `to_name` varchar(255) NOT NULL DEFAULT '0',
  `to_account` int(11) NOT NULL DEFAULT '0',
  `from_nick` varchar(255) NOT NULL,
  `from_account` int(11) NOT NULL DEFAULT '0',
  `price` int(11) NOT NULL DEFAULT '0',
  `offer_id` varchar(255) NOT NULL DEFAULT '',
  `trans_state` varchar(255) NOT NULL,
  `trans_start` int(11) NOT NULL DEFAULT '0',
  `trans_real` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_shop_offer`
--

CREATE TABLE `z_shop_offer` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `points` int(11) NOT NULL DEFAULT '0',
  `coins` int(11) NOT NULL DEFAULT '0',
  `price` varchar(50) NOT NULL DEFAULT '',
  `itemid` int(11) NOT NULL DEFAULT '0',
  `mount_id` varchar(100) NOT NULL DEFAULT '',
  `addon_name` varchar(100) NOT NULL DEFAULT '',
  `count` int(11) NOT NULL DEFAULT '0',
  `offer_type` varchar(255) DEFAULT NULL,
  `offer_description` text NOT NULL,
  `offer_name` varchar(255) NOT NULL DEFAULT '',
  `offer_date` int(11) NOT NULL,
  `default_image` varchar(50) NOT NULL DEFAULT '',
  `hide` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_shop_payment`
--

CREATE TABLE `z_shop_payment` (
  `id` int(11) NOT NULL,
  `ref` varchar(10) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `service_id` int(11) NOT NULL,
  `service_category_id` int(11) NOT NULL,
  `payment_method_id` int(11) NOT NULL,
  `price` varchar(50) NOT NULL,
  `points` int(11) UNSIGNED NOT NULL,
  `coins` int(11) UNSIGNED NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'waiting',
  `date` int(11) NOT NULL,
  `gift` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_spells`
--

CREATE TABLE `z_spells` (
  `spell` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `words` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 - attack, 2 - healing, 3 - summon, 4 - supply, 5 - support',
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 - instant, 2 - conjure, 3 - rune',
  `level` int(11) NOT NULL DEFAULT '0',
  `maglevel` int(11) NOT NULL DEFAULT '0',
  `mana` int(11) NOT NULL DEFAULT '0',
  `soul` tinyint(3) NOT NULL DEFAULT '0',
  `conjure_count` tinyint(3) NOT NULL DEFAULT '0',
  `item_id` int(11) NOT NULL DEFAULT '0',
  `premium` tinyint(1) NOT NULL DEFAULT '0',
  `vocations` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `hidden` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `name_2` (`name`),
  ADD UNIQUE KEY `name_3` (`name`);

--
-- Índices de tabela `account_bans`
--
ALTER TABLE `account_bans`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `banned_by` (`banned_by`);

--
-- Índices de tabela `account_ban_history`
--
ALTER TABLE `account_ban_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `banned_by` (`banned_by`),
  ADD KEY `account_id_2` (`account_id`),
  ADD KEY `account_id_3` (`account_id`),
  ADD KEY `account_id_4` (`account_id`),
  ADD KEY `account_id_5` (`account_id`);

--
-- Índices de tabela `account_character_sale`
--
ALTER TABLE `account_character_sale`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `id_player_UNIQUE` (`id_player`) USING BTREE;

--
-- Índices de tabela `account_character_sale_history`
--
ALTER TABLE `account_character_sale_history`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id_old_acc_idx` (`id_old_account`) USING BTREE,
  ADD KEY `id_new_acc_idx` (`id_new_account`) USING BTREE,
  ADD KEY `id_player_idx` (`id_player`) USING BTREE;

--
-- Índices de tabela `account_viplist`
--
ALTER TABLE `account_viplist`
  ADD UNIQUE KEY `account_player_index` (`account_id`,`player_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `player_id` (`player_id`);

--
-- Índices de tabela `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `bounty_hunter`
--
ALTER TABLE `bounty_hunter`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `daily_reward_history`
--
ALTER TABLE `daily_reward_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `player_id` (`player_id`);

--
-- Índices de tabela `dtt_results`
--
ALTER TABLE `dtt_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Índices de tabela `global_misc`
--
ALTER TABLE `global_misc`
  ADD UNIQUE KEY `key` (`key`,`world_id`);

--
-- Índices de tabela `global_storage`
--
ALTER TABLE `global_storage`
  ADD UNIQUE KEY `key` (`key`,`world_id`);

--
-- Índices de tabela `guilds`
--
ALTER TABLE `guilds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `ownerid` (`ownerid`);

--
-- Índices de tabela `guildwar_deaths`
--
ALTER TABLE `guildwar_deaths`
  ADD PRIMARY KEY (`id`),
  ADD KEY `player_id` (`player_id`),
  ADD KEY `warid` (`warid`);

--
-- Índices de tabela `guildwar_kills`
--
ALTER TABLE `guildwar_kills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `warid` (`warid`);

--
-- Índices de tabela `guild_invites`
--
ALTER TABLE `guild_invites`
  ADD PRIMARY KEY (`player_id`,`guild_id`),
  ADD KEY `guild_id` (`guild_id`);

--
-- Índices de tabela `guild_membership`
--
ALTER TABLE `guild_membership`
  ADD PRIMARY KEY (`player_id`),
  ADD KEY `guild_id` (`guild_id`),
  ADD KEY `rank_id` (`rank_id`);

--
-- Índices de tabela `guild_ranks`
--
ALTER TABLE `guild_ranks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guild_id` (`guild_id`);

--
-- Índices de tabela `guild_wars`
--
ALTER TABLE `guild_wars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guild1` (`guild1`),
  ADD KEY `guild2` (`guild2`);

--
-- Índices de tabela `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner` (`owner`),
  ADD KEY `town_id` (`town_id`);

--
-- Índices de tabela `house_lists`
--
ALTER TABLE `house_lists`
  ADD KEY `house_id` (`house_id`);

--
-- Índices de tabela `ioe`
--
ALTER TABLE `ioe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Índices de tabela `ip_bans`
--
ALTER TABLE `ip_bans`
  ADD PRIMARY KEY (`ip`),
  ADD KEY `banned_by` (`banned_by`);

--
-- Índices de tabela `live_casts`
--
ALTER TABLE `live_casts`
  ADD UNIQUE KEY `player_id_2` (`player_id`);

--
-- Índices de tabela `market_history`
--
ALTER TABLE `market_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `player_id` (`player_id`,`sale`);

--
-- Índices de tabela `market_offers`
--
ALTER TABLE `market_offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sale` (`sale`,`itemtype`),
  ADD KEY `created` (`created`),
  ADD KEY `player_id` (`player_id`);

--
-- Índices de tabela `newsticker`
--
ALTER TABLE `newsticker`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pagsegurotransacoes`
--
ALTER TABLE `pagsegurotransacoes`
  ADD UNIQUE KEY `TransacaoID` (`TransacaoID`,`StatusTransacao`),
  ADD KEY `Referencia` (`Referencia`),
  ADD KEY `status` (`status`);

--
-- Índices de tabela `pagseguro_transactions`
--
ALTER TABLE `pagseguro_transactions`
  ADD UNIQUE KEY `transaction_code` (`transaction_code`,`status`) USING BTREE,
  ADD KEY `name` (`name`) USING BTREE,
  ADD KEY `status` (`status`) USING BTREE;

--
-- Índices de tabela `paypal_transactions`
--
ALTER TABLE `paypal_transactions`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Índices de tabela `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `vocation` (`vocation`);

--
-- Índices de tabela `players_online`
--
ALTER TABLE `players_online`
  ADD PRIMARY KEY (`player_id`);

--
-- Índices de tabela `player_deaths`
--
ALTER TABLE `player_deaths`
  ADD KEY `player_id` (`player_id`),
  ADD KEY `killed_by` (`killed_by`),
  ADD KEY `mostdamage_by` (`mostdamage_by`);

--
-- Índices de tabela `player_depotitems`
--
ALTER TABLE `player_depotitems`
  ADD UNIQUE KEY `player_id_2` (`player_id`,`sid`);

--
-- Índices de tabela `player_former_names`
--
ALTER TABLE `player_former_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `player_id` (`player_id`);

--
-- Índices de tabela `player_inboxitems`
--
ALTER TABLE `player_inboxitems`
  ADD UNIQUE KEY `player_id_2` (`player_id`,`sid`);

--
-- Índices de tabela `player_items`
--
ALTER TABLE `player_items`
  ADD KEY `player_id` (`player_id`),
  ADD KEY `sid` (`sid`);

--
-- Índices de tabela `player_killers`
--
ALTER TABLE `player_killers`
  ADD KEY `kill_id` (`kill_id`),
  ADD KEY `player_id` (`player_id`);

--
-- Índices de tabela `player_kills`
--
ALTER TABLE `player_kills`
  ADD KEY `player_id` (`player_id`);

--
-- Índices de tabela `player_namelocks`
--
ALTER TABLE `player_namelocks`
  ADD PRIMARY KEY (`player_id`),
  ADD KEY `namelocked_by` (`namelocked_by`);

--
-- Índices de tabela `player_powergamers`
--
ALTER TABLE `player_powergamers`
  ADD PRIMARY KEY (`id_player`);

--
-- Índices de tabela `player_rewards`
--
ALTER TABLE `player_rewards`
  ADD UNIQUE KEY `player_id_2` (`player_id`,`sid`);

--
-- Índices de tabela `player_spells`
--
ALTER TABLE `player_spells`
  ADD KEY `player_id` (`player_id`);

--
-- Índices de tabela `player_storage`
--
ALTER TABLE `player_storage`
  ADD PRIMARY KEY (`player_id`,`key`);

--
-- Índices de tabela `sellchar`
--
ALTER TABLE `sellchar`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `server_config`
--
ALTER TABLE `server_config`
  ADD PRIMARY KEY (`config`);

--
-- Índices de tabela `snowballwar`
--
ALTER TABLE `snowballwar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Índices de tabela `store_history`
--
ALTER TABLE `store_history`
  ADD KEY `account_id` (`account_id`);

--
-- Índices de tabela `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`) USING BTREE,
  ADD KEY `tickets_ibfk_1_idx` (`ticket_author_acc_id`) USING BTREE;

--
-- Índices de tabela `tickets_reply`
--
ALTER TABLE `tickets_reply`
  ADD PRIMARY KEY (`ticket_replyid`) USING BTREE,
  ADD KEY `ticket_id_idx` (`ticket_id`) USING BTREE;

--
-- Índices de tabela `tile_store`
--
ALTER TABLE `tile_store`
  ADD KEY `house_id` (`house_id`);

--
-- Índices de tabela `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `videos_categorias`
--
ALTER TABLE `videos_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `videos_comentarios`
--
ALTER TABLE `videos_comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `z_atr_wiki_category`
--
ALTER TABLE `z_atr_wiki_category`
  ADD PRIMARY KEY (`id_atr_wiki_category`);

--
-- Índices de tabela `z_atr_wiki_subcategory`
--
ALTER TABLE `z_atr_wiki_subcategory`
  ADD PRIMARY KEY (`id_atr_wiki_subcategory`),
  ADD KEY `FK_ID_wiki_CATEGORY_idx` (`id_atr_wiki_category`);

--
-- Índices de tabela `z_changelogs`
--
ALTER TABLE `z_changelogs`
  ADD PRIMARY KEY (`id_changelog`) USING BTREE;

--
-- Índices de tabela `z_forum`
--
ALTER TABLE `z_forum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section` (`section`);

--
-- Índices de tabela `z_helpdesk`
--
ALTER TABLE `z_helpdesk`
  ADD PRIMARY KEY (`uid`);

--
-- Índices de tabela `z_items`
--
ALTER TABLE `z_items`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `z_ots_comunication`
--
ALTER TABLE `z_ots_comunication`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `z_ots_guildcomunication`
--
ALTER TABLE `z_ots_guildcomunication`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `z_shopguild_history_item`
--
ALTER TABLE `z_shopguild_history_item`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `z_shopguild_history_pacc`
--
ALTER TABLE `z_shopguild_history_pacc`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `z_shop_category`
--
ALTER TABLE `z_shop_category`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `z_shop_donates`
--
ALTER TABLE `z_shop_donates`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `z_shop_donate_confirm`
--
ALTER TABLE `z_shop_donate_confirm`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `z_shop_history_item`
--
ALTER TABLE `z_shop_history_item`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `z_shop_offer`
--
ALTER TABLE `z_shop_offer`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `z_shop_payment`
--
ALTER TABLE `z_shop_payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `account_ban_history`
--
ALTER TABLE `account_ban_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `account_character_sale`
--
ALTER TABLE `account_character_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `account_character_sale_history`
--
ALTER TABLE `account_character_sale_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `bounty_hunter`
--
ALTER TABLE `bounty_hunter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `daily_reward_history`
--
ALTER TABLE `daily_reward_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `dtt_results`
--
ALTER TABLE `dtt_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `guilds`
--
ALTER TABLE `guilds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `guildwar_deaths`
--
ALTER TABLE `guildwar_deaths`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `guildwar_kills`
--
ALTER TABLE `guildwar_kills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `guild_ranks`
--
ALTER TABLE `guild_ranks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `guild_wars`
--
ALTER TABLE `guild_wars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `houses`
--
ALTER TABLE `houses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ioe`
--
ALTER TABLE `ioe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `market_history`
--
ALTER TABLE `market_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `market_offers`
--
ALTER TABLE `market_offers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `newsticker`
--
ALTER TABLE `newsticker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `paypal_transactions`
--
ALTER TABLE `paypal_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `player_former_names`
--
ALTER TABLE `player_former_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sellchar`
--
ALTER TABLE `sellchar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `snowballwar`
--
ALTER TABLE `snowballwar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tickets_reply`
--
ALTER TABLE `tickets_reply`
  MODIFY `ticket_replyid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `videos_categorias`
--
ALTER TABLE `videos_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `videos_comentarios`
--
ALTER TABLE `videos_comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `z_atr_wiki_category`
--
ALTER TABLE `z_atr_wiki_category`
  MODIFY `id_atr_wiki_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `z_atr_wiki_subcategory`
--
ALTER TABLE `z_atr_wiki_subcategory`
  MODIFY `id_atr_wiki_subcategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `z_changelogs`
--
ALTER TABLE `z_changelogs`
  MODIFY `id_changelog` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `z_forum`
--
ALTER TABLE `z_forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `z_helpdesk`
--
ALTER TABLE `z_helpdesk`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `z_ots_comunication`
--
ALTER TABLE `z_ots_comunication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `z_shop_category`
--
ALTER TABLE `z_shop_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `z_shop_donates`
--
ALTER TABLE `z_shop_donates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `z_shop_donate_confirm`
--
ALTER TABLE `z_shop_donate_confirm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `z_shop_offer`
--
ALTER TABLE `z_shop_offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `z_shop_payment`
--
ALTER TABLE `z_shop_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `account_bans`
--
ALTER TABLE `account_bans`
  ADD CONSTRAINT `account_bans_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `account_bans_ibfk_2` FOREIGN KEY (`banned_by`) REFERENCES `players` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `account_ban_history`
--
ALTER TABLE `account_ban_history`
  ADD CONSTRAINT `account_ban_history_ibfk_2` FOREIGN KEY (`banned_by`) REFERENCES `players` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `account_ban_history_ibfk_3` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `account_ban_history_ibfk_4` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `account_ban_history_ibfk_5` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `account_ban_history_ibfk_6` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `account_character_sale_history`
--
ALTER TABLE `account_character_sale_history`
  ADD CONSTRAINT `id_new_acc` FOREIGN KEY (`id_new_account`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_old_acc` FOREIGN KEY (`id_old_account`) REFERENCES `accounts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_player` FOREIGN KEY (`id_player`) REFERENCES `players` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `account_viplist`
--
ALTER TABLE `account_viplist`
  ADD CONSTRAINT `account_viplist_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `daily_reward_history`
--
ALTER TABLE `daily_reward_history`
  ADD CONSTRAINT `daily_reward_history_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `guildwar_deaths`
--
ALTER TABLE `guildwar_deaths`
  ADD CONSTRAINT `guildwar_deaths_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `guildwar_deaths_ibfk_2` FOREIGN KEY (`warid`) REFERENCES `guild_wars` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `guildwar_kills`
--
ALTER TABLE `guildwar_kills`
  ADD CONSTRAINT `guildwar_kills_ibfk_1` FOREIGN KEY (`warid`) REFERENCES `guild_wars` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `guild_membership`
--
ALTER TABLE `guild_membership`
  ADD CONSTRAINT `guild_membership_ibfk_2` FOREIGN KEY (`guild_id`) REFERENCES `guilds` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `guild_membership_ibfk_3` FOREIGN KEY (`rank_id`) REFERENCES `guild_ranks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `guild_ranks`
--
ALTER TABLE `guild_ranks`
  ADD CONSTRAINT `guild_ranks_ibfk_1` FOREIGN KEY (`guild_id`) REFERENCES `guilds` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `house_lists`
--
ALTER TABLE `house_lists`
  ADD CONSTRAINT `house_lists_ibfk_1` FOREIGN KEY (`house_id`) REFERENCES `houses` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `ip_bans`
--
ALTER TABLE `ip_bans`
  ADD CONSTRAINT `ip_bans_ibfk_1` FOREIGN KEY (`banned_by`) REFERENCES `players` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `live_casts`
--
ALTER TABLE `live_casts`
  ADD CONSTRAINT `live_casts_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `market_history`
--
ALTER TABLE `market_history`
  ADD CONSTRAINT `market_history_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `market_offers`
--
ALTER TABLE `market_offers`
  ADD CONSTRAINT `market_offers_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `player_deaths`
--
ALTER TABLE `player_deaths`
  ADD CONSTRAINT `player_deaths_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `player_inboxitems`
--
ALTER TABLE `player_inboxitems`
  ADD CONSTRAINT `player_inboxitems_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `player_namelocks`
--
ALTER TABLE `player_namelocks`
  ADD CONSTRAINT `player_namelocks_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `player_namelocks_ibfk_2` FOREIGN KEY (`namelocked_by`) REFERENCES `players` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `player_powergamers`
--
ALTER TABLE `player_powergamers`
  ADD CONSTRAINT `player_powergamers_ibfk_1` FOREIGN KEY (`id_player`) REFERENCES `players` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `player_spells`
--
ALTER TABLE `player_spells`
  ADD CONSTRAINT `player_spells_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`ticket_author_acc_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tickets_reply`
--
ALTER TABLE `tickets_reply`
  ADD CONSTRAINT `ticket_id` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`ticket_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tile_store`
--
ALTER TABLE `tile_store`
  ADD CONSTRAINT `tile_store_ibfk_1` FOREIGN KEY (`house_id`) REFERENCES `houses` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `z_atr_wiki_subcategory`
--
ALTER TABLE `z_atr_wiki_subcategory`
  ADD CONSTRAINT `FK_ID_wiki_CATEGORY` FOREIGN KEY (`id_atr_wiki_category`) REFERENCES `z_atr_wiki_category` (`id_atr_wiki_category`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

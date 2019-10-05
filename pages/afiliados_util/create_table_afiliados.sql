CREATE TABLE `cn_affiliates_nivel` (
  `id_affiliate_nivel` int(11) NOT NULL AUTO_INCREMENT,
  `name_nivel_affiliate` varchar(255) NOT NULL,
  `desc_nivel_affiliate` text NOT NULL,
  PRIMARY KEY (`id_affiliate_nivel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `cn_affiliates` (
  `id_affiliate` int(11) NOT NULL AUTO_INCREMENT,
  `id_account` int(11) NOT NULL,
  `id_affiliate_nivel` int(11) NOT NULL,
  `name_affiliate` varchar(255) NOT NULL,
  `hash_affiliate` varchar(255) NOT NULL,
  `qtd_access_link` int(11) NOT NULL DEFAULT 0,
  `qtd_access_current_month` int(11) NOT NULL DEFAULT 0,
  `qtd_sales` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `dta_insert` datetime NOT NULL DEFAULT current_timestamp(),
  `dta_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dta_deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id_affiliate`),
  UNIQUE KEY `hash_affiliate_UNIQUE` (`hash_affiliate`),
  KEY `account_ibfk_affiliate_idx` (`id_account`),
  KEY `id_affiliate_nivel_idx` (`id_affiliate_nivel`),
  CONSTRAINT `affiliates_id_account_ibfk_1` FOREIGN KEY (`id_account`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_affiliate_nivel` FOREIGN KEY (`id_affiliate_nivel`) REFERENCES `cn_affiliates_nivel` (`id_affiliate_nivel`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `cn_affiliates_bound` (
  `id_affiliate_bound` int(11) NOT NULL AUTO_INCREMENT,
  `id_affiliate_father` int(11) NOT NULL,
  `id_affiliate_son` int(11) NOT NULL,
  PRIMARY KEY (`id_affiliate_bound`),
  KEY `id_affiliate_father_idx` (`id_affiliate_father`),
  KEY `id_affiliate_son_idx` (`id_affiliate_son`),
  CONSTRAINT `id_affiliate_son` FOREIGN KEY (`id_affiliate_son`) REFERENCES `cn_affiliates` (`id_account`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_affiliate_father` FOREIGN KEY (`id_affiliate_father`) REFERENCES `cn_affiliates` (`id_account`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE cn_affiliates CHARACTER SET = utf8 , COLLATE = utf8_general_ci ;
ALTER TABLE cn_affiliates_nivel CHARACTER SET = utf8 , COLLATE = utf8_general_ci ;
ALTER TABLE cn_affiliates_bound CHARACTER SET = utf8 , COLLATE = utf8_general_ci ;

ALTER TABLE `ferobra`.`cn_affiliates`
  DROP FOREIGN KEY `id_affiliate_nivel`;
ALTER TABLE `ferobra`.`cn_affiliates`
  ADD CONSTRAINT `id_affiliate_nivel`
FOREIGN KEY (`id_affiliate_nivel`)
REFERENCES `ferobra`.`cn_affiliates_nivel` (`id_affiliate_nivel`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;

ALTER TABLE `ferobra`.`cn_affiliates_bound`
  DROP FOREIGN KEY `id_affiliate_father`;
ALTER TABLE `ferobra`.`cn_affiliates_bound`
  ADD CONSTRAINT `id_affiliate_father`
FOREIGN KEY (`id_affiliate_father`)
REFERENCES `ferobra`.`cn_affiliates` (`id_affiliate`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;

ALTER TABLE `ferobra`.`cn_affiliates_bound`
  DROP FOREIGN KEY `id_affiliate_son`;
ALTER TABLE `ferobra`.`cn_affiliates_bound`
  ADD CONSTRAINT `id_affiliate_son`
FOREIGN KEY (`id_affiliate_son`)
REFERENCES `ferobra`.`cn_affiliates` (`id_affiliate`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;


CREATE TABLE `ferobra`.`cn_affiliates_account_indicated` (
  `id_affiliates_account_indicated` INT NOT NULL AUTO_INCREMENT,
  `id_affiliated` INT(11) NOT NULL,
  `id_account` INT(11) NOT NULL,
  PRIMARY KEY (`id_affiliates_account_indicated`),
  INDEX `id_affiliate_indicate_idx` (`id_affiliated` ASC) ,
  INDEX `id_account_indicated_idx` (`id_account` ASC) ,
  CONSTRAINT `id_affiliate_indicate`
  FOREIGN KEY (`id_affiliated`)
  REFERENCES `ferobra`.`cn_affiliates` (`id_affiliate`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `id_account_indicated`
  FOREIGN KEY (`id_account`)
  REFERENCES `ferobra`.`accounts` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
  ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;

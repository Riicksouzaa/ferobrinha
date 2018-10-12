CREATE TABLE IF NOT EXISTS `atr_wikki_category` (
  `id_atr_wikki_category` int(11)      NOT NULL AUTO_INCREMENT,
  `nome`                  varchar(255) NOT NULL,
  `descricao`             varchar(255) NOT NULL,
  `text`                  text         NOT NULL,
  `dta_insert`            datetime     NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dta_update`            datetime     NOT NULL DEFAULT CURRENT_TIMESTAMP
  ON UPDATE CURRENT_TIMESTAMP,
  `dta_deleted`           datetime              DEFAULT NULL,
  `is_active`             tinyint(4)   NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_atr_wikki_category`)
)
  ENGINE = InnoDB
  AUTO_INCREMENT = 5
  DEFAULT CHARSET = utf8;

CREATE TABLE IF NOT EXISTS `atr_wikki_subcategory` (
  `id_atr_wikki_subcategory` int(11)      NOT NULL AUTO_INCREMENT,
  `id_atr_wikki_category`    int(11)      NOT NULL,
  `name`                     varchar(255) NOT NULL,
  `description`              varchar(255)          DEFAULT NULL,
  `text`                     text         NOT NULL,
  `dta_insert`               datetime     NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dta_update`               datetime     NOT NULL DEFAULT CURRENT_TIMESTAMP
  ON UPDATE CURRENT_TIMESTAMP,
  `dta_deleted`              datetime              DEFAULT NULL,
  `is_active`                tinyint(4)   NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_atr_wikki_subcategory`),
  KEY `FK_ID_WIKKI_CATEGORY_idx` (`id_atr_wikki_category`),
  CONSTRAINT `FK_ID_WIKKI_CATEGORY` FOREIGN KEY (`id_atr_wikki_category`) REFERENCES `atr_wikki_category` (`id_atr_wikki_category`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
)
  ENGINE = InnoDB
  AUTO_INCREMENT = 3
  DEFAULT CHARSET = utf8;

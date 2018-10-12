CREATE TABLE `atr_wikki_category` (
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
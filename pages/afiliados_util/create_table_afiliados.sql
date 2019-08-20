CREATE TABLE `cn_afiliados_niveis` (
  `id_afiliado_nivel` int(11) NOT NULL,
  `nome_nivel_afiliado` varchar(255) NOT NULL,
  `descricao_nivel_afiliado` text NOT NULL,
  PRIMARY KEY (`id_afiliado_nivel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `cn_afiliados` (
  `id_afiliado` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_account` int(11) NOT NULL,
  `id_afiliado_nivel` int(11) NOT NULL,
  `nome_afiliado` varchar(255) NOT NULL,
  `hash_afiliado` varchar(255) NOT NULL,
  `qtd_acesso_link` int(11) NOT NULL DEFAULT 0,
  `qtd_acesso_mes_atual` int(11) NOT NULL DEFAULT 0,
  `qtd_venda` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `dta_insert` datetime NOT NULL DEFAULT current_timestamp(),
  `dta_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dta_deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id_afiliado`),
  UNIQUE KEY `hash_afiliado_UNIQUE` (`hash_afiliado`),
  KEY `account_ibfk_afiliado_idx` (`id_account`),
  KEY `id_afiliado_nivel_idx` (`id_afiliado_nivel`),
  CONSTRAINT `afiliados_id_account_ibfk_1` FOREIGN KEY (`id_account`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_afiliado_nivel` FOREIGN KEY (`id_afiliado_nivel`) REFERENCES `cn_afiliados_niveis` (`id_afiliado_nivel`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `cn_afiliados_vinculados` (
  `id_afiliado_vinculado` int(11) NOT NULL AUTO_INCREMENT,
  `id_afiliado_pai` int(11) NOT NULL,
  `id_afiliado_filho` int(11) NOT NULL,
  PRIMARY KEY (`id_afiliado_vinculado`),
  KEY `id_afiliado_pai_idx` (`id_afiliado_pai`),
  KEY `id_afiliado_filho_idx` (`id_afiliado_filho`),
  CONSTRAINT `id_afiliado_filho` FOREIGN KEY (`id_afiliado_filho`) REFERENCES `cn_afiliados` (`id_account`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_afiliado_pai` FOREIGN KEY (`id_afiliado_pai`) REFERENCES `cn_afiliados` (`id_account`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE cn_afiliados CHARACTER SET = utf8 , COLLATE = utf8_general_ci ;
ALTER TABLE cn_afiliados_niveis CHARACTER SET = utf8 , COLLATE = utf8_general_ci ;
ALTER TABLE cn_afiliados_vinculados CHARACTER SET = utf8 , COLLATE = utf8_general_ci ;

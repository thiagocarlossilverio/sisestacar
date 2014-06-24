-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.16 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              8.3.0.4781
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para estacionamento
CREATE DATABASE IF NOT EXISTS `estacionamento` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `estacionamento`;


-- Copiando estrutura para tabela estacionamento.categoria_veiculos
CREATE TABLE IF NOT EXISTS `categoria_veiculos` (
  `idcategoria_veiculos` int(11) NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(45) DEFAULT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcategoria_veiculos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela estacionamento.categoria_veiculos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria_veiculos` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria_veiculos` ENABLE KEYS */;


-- Copiando estrutura para tabela estacionamento.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `data_nascimento` varchar(50) DEFAULT NULL,
  `telefone_residencial` varchar(45) DEFAULT NULL,
  `telefone_celular` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela estacionamento.clientes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`idcliente`, `nome`, `data_nascimento`, `telefone_residencial`, `telefone_celular`, `cpf`, `cidade`, `estado`, `endereco`, `bairro`, `numero`, `complemento`) VALUES
	(2, '', '0000-00-00', '4384257131', '4384257131', '07385413978', 'Londrina', 'Paraná', 'Rua Austria', 'Centro', '64', 'Casa');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;


-- Copiando estrutura para tabela estacionamento.estacionamentos
CREATE TABLE IF NOT EXISTS `estacionamentos` (
  `idestacionamento` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `proprietario` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `cnpj` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idestacionamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela estacionamento.estacionamentos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `estacionamentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `estacionamentos` ENABLE KEYS */;


-- Copiando estrutura para tabela estacionamento.garagens
CREATE TABLE IF NOT EXISTS `garagens` (
  `idgaragem` int(11) NOT NULL AUTO_INCREMENT,
  `idestacionamento` int(11) NOT NULL,
  `idveiculo` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idgaragem`),
  KEY `fk_garagem_estacionamentos1_idx` (`idestacionamento`),
  KEY `fk_garagem_veiculos1_idx` (`idveiculo`),
  CONSTRAINT `fk_garagem_estacionamentos1` FOREIGN KEY (`idestacionamento`) REFERENCES `estacionamentos` (`idestacionamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_garagem_veiculos1` FOREIGN KEY (`idveiculo`) REFERENCES `veiculos` (`idveiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela estacionamento.garagens: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `garagens` DISABLE KEYS */;
/*!40000 ALTER TABLE `garagens` ENABLE KEYS */;


-- Copiando estrutura para tabela estacionamento.marcas_veiculos
CREATE TABLE IF NOT EXISTS `marcas_veiculos` (
  `idmarca` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`idmarca`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela estacionamento.marcas_veiculos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `marcas_veiculos` DISABLE KEYS */;
INSERT INTO `marcas_veiculos` (`idmarca`, `titulo`) VALUES
	(1, 'Ford'),
	(2, 'Renault'),
	(3, 'Fiat');
/*!40000 ALTER TABLE `marcas_veiculos` ENABLE KEYS */;


-- Copiando estrutura para tabela estacionamento.modelos_veiculos
CREATE TABLE IF NOT EXISTS `modelos_veiculos` (
  `idmodelo` int(11) NOT NULL AUTO_INCREMENT,
  `nome_modelo` varchar(45) DEFAULT NULL,
  `idmarca` int(11) NOT NULL,
  `status` varchar(45) DEFAULT 'ativo',
  PRIMARY KEY (`idmodelo`),
  KEY `fk_modelos_marcas_veiculos1_idx` (`idmarca`),
  CONSTRAINT `fk_modelos_marcas_veiculos1` FOREIGN KEY (`idmarca`) REFERENCES `marcas_veiculos` (`idmarca`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela estacionamento.modelos_veiculos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `modelos_veiculos` DISABLE KEYS */;
INSERT INTO `modelos_veiculos` (`idmodelo`, `nome_modelo`, `idmarca`, `status`) VALUES
	(1, 'Uno', 3, 'ativo'),
	(2, 'Clio', 2, '1');
/*!40000 ALTER TABLE `modelos_veiculos` ENABLE KEYS */;


-- Copiando estrutura para tabela estacionamento.pagamentos
CREATE TABLE IF NOT EXISTS `pagamentos` (
  `idpagamento` int(11) NOT NULL AUTO_INCREMENT,
  `forma_pagamento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idpagamento`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela estacionamento.pagamentos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pagamentos` DISABLE KEYS */;
INSERT INTO `pagamentos` (`idpagamento`, `forma_pagamento`) VALUES
	(1, 'Avista');
/*!40000 ALTER TABLE `pagamentos` ENABLE KEYS */;


-- Copiando estrutura para tabela estacionamento.tabela_precos
CREATE TABLE IF NOT EXISTS `tabela_precos` (
  `idtabela_precos` int(11) NOT NULL AUTO_INCREMENT,
  `idcategoria_veiculos` int(11) NOT NULL,
  `preco` varchar(45) DEFAULT NULL,
  `tempo_estacionar` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtabela_precos`),
  KEY `fk_tabela_precos_categoria_veiculos1` (`idcategoria_veiculos`),
  CONSTRAINT `fk_tabela_precos_categoria_veiculos1` FOREIGN KEY (`idcategoria_veiculos`) REFERENCES `categoria_veiculos` (`idcategoria_veiculos`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela estacionamento.tabela_precos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tabela_precos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tabela_precos` ENABLE KEYS */;


-- Copiando estrutura para tabela estacionamento.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela estacionamento.usuarios: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`idusuario`, `tipo`, `login`, `password`, `status`) VALUES
	(1, 'administrador', 'thiago', '12345', 'ativo');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;


-- Copiando estrutura para tabela estacionamento.veiculos
CREATE TABLE IF NOT EXISTS `veiculos` (
  `idveiculo` int(11) NOT NULL AUTO_INCREMENT,
  `idmodelo` int(11) NOT NULL,
  `idcategoria_veiculos` int(11) NOT NULL,
  `cor` varchar(45) DEFAULT NULL,
  `ano` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idveiculo`),
  KEY `fk_veiculos_modelos` (`idmodelo`),
  KEY `fk_veiculos_categoria_veiculos1` (`idcategoria_veiculos`),
  CONSTRAINT `fk_veiculos_categoria_veiculos1` FOREIGN KEY (`idcategoria_veiculos`) REFERENCES `categoria_veiculos` (`idcategoria_veiculos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_veiculos_modelos` FOREIGN KEY (`idmodelo`) REFERENCES `modelos_veiculos` (`idmodelo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela estacionamento.veiculos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `veiculos` DISABLE KEYS */;
/*!40000 ALTER TABLE `veiculos` ENABLE KEYS */;


-- Copiando estrutura para tabela estacionamento.veiculos_clientes_pagamentos
CREATE TABLE IF NOT EXISTS `veiculos_clientes_pagamentos` (
  `idveiculo_cliente_pagamento` int(11) NOT NULL,
  `idveiculo` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `hora_entrada` varchar(45) DEFAULT NULL,
  `hora_saida` varchar(45) DEFAULT NULL,
  `data_entrada` varchar(45) DEFAULT NULL,
  `data_saida` varchar(45) DEFAULT NULL,
  `idpagamento` int(11) NOT NULL,
  `status_pagamento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idveiculo_cliente_pagamento`),
  KEY `fk_veiculos_has_clientes_clientes1` (`idcliente`),
  KEY `fk_veiculos_has_clientes_veiculos1_idx` (`idveiculo`),
  KEY `fk_veiculos_clientes_pagamentos_pagamentos1_idx` (`idpagamento`),
  CONSTRAINT `fk_veiculos_clientes_pagamentos_pagamentos1` FOREIGN KEY (`idpagamento`) REFERENCES `pagamentos` (`idpagamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_veiculos_has_clientes_clientes1` FOREIGN KEY (`idcliente`) REFERENCES `clientes` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_veiculos_has_clientes_veiculos1` FOREIGN KEY (`idveiculo`) REFERENCES `veiculos` (`idveiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela estacionamento.veiculos_clientes_pagamentos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `veiculos_clientes_pagamentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `veiculos_clientes_pagamentos` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

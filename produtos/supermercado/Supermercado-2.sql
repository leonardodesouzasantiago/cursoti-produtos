CREATE DATABASE SUPERMERCADO2;

USE SUPERMERCADO2;

CREATE TABLE PRODUTO(
	idProduto INT PRIMARY KEY AUTO_INCREMENT,
	NOME VARCHAR(100) NOT NULL,
	VALOR DOUBLE NOT NULL,
	CATEGORIA VARCHAR(30) NOT NULL,
	DESCRIÇÃO LONGTEXT,
	DATA_VENCIMENTO DATE NOT NULL,
	LOTE INT(5) NOT NULL,
	DATA_ENTRADA DATETIME DEFAULT NOW(),
	ESTOQUE_ATUAL INT(4) DEFAULT 0 NOT NULL,
	IMAGEMGRANDE VARCHAR(100) NOT NULL,
	IMAGEMPEQUENA VARCHAR(100) NOT NULL
);

CREATE TABLE CLIENTE(
	idCliente INT PRIMARY KEY AUTO_INCREMENT,
	NOMECOMPLETO VARCHAR(70) NOT NULL,
	RUA VARCHAR(50) NOT NULL,
	NUMERO INT(5) NOT NULL,
	BAIRRO VARCHAR(30) NOT NULL,
	CIDADE VARCHAR(30) NOT NULL,
	ESTADO CHAR(2) NOT NULL,
	TELEFONE VARCHAR(20) NOT NULL,
	EMAIL VARCHAR(50) NOT NULL,
	USUARIO VARCHAR(20) NOT NULL,
	SENHA VARCHAR(20) NOT NULL
);





INSERT INTO CLIENTE VALUES(NULL,'Zac','Rua A',1,'Alterosa','Almagama','AM','91111-1111','zac@gmail.com','zac','zac');



INSERT INTO PRODUTO VALUES(NULL,'Leite Itambé',8.98,'LATICÍNIOS','Leite em pó ITAMBÉ Pacote 400g'
,'2021-08-22',1234,DEFAULT,90,'_imagens/LeiteItambe_Big.png','_imagens/LeiteItambe_Small.png');



INSERT INTO PRODUTO VALUES(NULL,'Leite Camponesa',3.15,'LATICÍNIOS','Leite Camponesa INT./DESN./S.DESN. TP 1L '
,'2021-06-04',1234,DEFAULT,92,'_imagens/LeiteCamponesa_Big.jpg','_imagens/LeiteCamponesa_Small.jpg');

INSERT INTO PRODUTO VALUES(NULL,'Isotônico Orgânico JUNGLE ',5.99,'BEBIDA','Isotônico Orgânico JUNGLE Vários Sabores 500ml '
,'2021-07-05',1234,DEFAULT,93,'_imagens/Isotonico_Big.png','_imagens/Isotonico_Small.png');

INSERT INTO PRODUTO VALUES(NULL,'Vinho Italiano CONTE DI CAMPIANO ',88.50,'BEBIDA ALCOÓLICAS','Vinho Italiano CONTE DI CAMPIANO PRIMITIVO DI MANDURIA Reserva 750ml '
,'2021-08-09',4567,DEFAULT,94,'_imagens/vinho_Big.png','_imagens/vinho_Small.png');

INSERT INTO PRODUTO VALUES(NULL,'Biscoito ALIANÇA ',11.95,'BISCOITO','Biscoito Importado ALIANÇA Sortido 300g'
,'2021-09-10',6789,DEFAULT,95,'_imagens/Biscoito_Big.png','_imagens/Biscoito_Small.png');

INSERT INTO PRODUTO VALUES(NULL,'Arroz Branco PILECCO',22.95,'CEREAIS','Arroz Branco PILECCO NOBRE 5 kg'
,'2021-10-11',8901,DEFAULT,96,'_imagens/arroz_Big.png','_imagens/arroz_Small.png');

INSERT INTO PRODUTO VALUES(NULL,'Azeite Chileno DELEYDA',44.90,'CONSERVAS','Azeite Chileno DELEYDA Premium Tipo Extravirgem 500ml'
,'2021-11-12',9012,DEFAULT,97,'_imagens/azeite_Big.png','_imagens/azeite_Small.png');

INSERT INTO PRODUTO VALUES(NULL,'Adoçante em Pó',36.90,'DIET','Adoçante em Pó Xylitol NATURAL LIFE 300g'
,'2021-12-13',0123,DEFAULT,98,'_imagens/adoçante_Big.png','_imagens/adoçante_Small.png');

INSERT INTO PRODUTO VALUES(NULL,'Achocolatado TODDY ',10.88,'MATINAIS','Achocolatado TODDY Original 800g'
,'2022-01-14',1234,DEFAULT,99,'_imagens/achocolatado_Big.png','_imagens/achocolatado_Small.png');

INSERT INTO PRODUTO VALUES(NULL,'Massa Italiana ',5.89,'MASSAS','Massa Italiana GRANORO Spaghetti, Penne, Rigatoni ou Spirali 500g'
,'2022-02-15',2345,DEFAULT,100,'_imagens/massa_Big.png','_imagens/massa_Small.png');

INSERT INTO PRODUTO VALUES(NULL,'Geleia de Mocotó',4.99,'SOBREMESAS','Geleia de Mocotó DUCOPO Tradicional ou Zero Açúcar Vários Sabores 170g / 180g'
,'2022-02-16',3456,DEFAULT,101,'_imagens/geleia_Big.png','_imagens/geleia_Small.png');

INSERT INTO PRODUTO VALUES(NULL,'Escova Dental COLGATE',12.99,'HIGIENE','Escova Dental COLGATE Gengiva Comfort c/ 2'
,'2022-03-17',4567,DEFAULT,102,'_imagens/escova_Big.png','_imagens/escova_Small.png');

INSERT INTO PRODUTO VALUES(NULL,'Álcool Gel LYSOFORM ',5.99,'LIMPEZA','Álcool Gel LYSOFORM Original 70º INPM 100ml'
,'2022-04-18',5678,DEFAULT,103,'_imagens/alcool_Big.png','_imagens/alcool_Small.png');

INSERT INTO PRODUTO VALUES(NULL,'Ração SUPRAMIX Calopsita',6.40,'PET SHOP','Ração SUPRAMIX Calopsita 500g'
,'2022-05-19',6789,DEFAULT,104,'_imagens/ração_Big.png','_imagens/ração_Small.png');

INSERT INTO PRODUTO VALUES(NULL,'Pilhas Alcalinas ',15.80,'BAZAR','Pilhas Alcalinas DURACELL Palitos AAA ou Pequenas AA c/ 4 Unids.'
,'2022-06-20',7890,DEFAULT,105,'_imagens/pilha_Big.png','_imagens/pilha_Small.png');

INSERT INTO PRODUTO VALUES(NULL,'Panetone MUNDIAL',6.99,'PADARIA','Panetone MUNDIAL Frutas ou Chocolate 500g'
,'2022-07-21',8901,DEFAULT,106,'_imagens/panetone_Big.png','_imagens/panetone_Small.png');

INSERT INTO PRODUTO VALUES(NULL,'Queijo Parmesão ou Provolone',39.9,'LATICÍNIOS','Queijo Parmesão ou Provolone Especial'
,'2022-08-22',9012,DEFAULT,107,'_imagens/queijo_Big.png','_imagens/queijo_Small.png');

INSERT INTO PRODUTO VALUES(NULL,'Camarão Descascado',54.90,'PEIXARIA','Camarão Descascado Congelado COSTA SUL 31/40 Pacote 400g '
,'2022-09-23',0123,DEFAULT,108,'_imagens/camarao_Big.png','_imagens/camarao_Small.png');

INSERT INTO PRODUTO VALUES(NULL,'Bacon Suíno Defumado',23.95,'AÇOUGUE','Bacon Suíno Defumado a Granel'
,'2022-10-24',1234,DEFAULT,109,'_imagens/bacon_Big.png','_imagens/bacon_Small.png');

INSERT INTO PRODUTO VALUES(NULL,'Lasanha SEARA',8.98,'CONGELADO','Lasanha SEARA Vários Sabores 600g'
,'2022-11-25',2345,DEFAULT,110,'_imagens/lasaha_Big.png','_imagens/lasaha_Small.png');






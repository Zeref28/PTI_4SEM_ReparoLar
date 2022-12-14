IF NOT EXISTS(SELECT * FROM sys.databases WHERE name = 'DB_REPAROLAR_LOCAL')
	CREATE DATABASE DB_REPAROLAR_LOCAL

;

USE DB_REPAROLAR_LOCAL

;

IF NOT EXISTS (SELECT * FROM SYSOBJECTS WHERE NAME='AN_ANUNCIO' AND XTYPE='U')
	CREATE TABLE AN_ANUNCIO(
		PK_ID INT AUTO_INCREMENT NOT NULL PRIMARY KEY
		,DS_CATEGORIA VARCHAR(20)
		,DS_TITULO VARCHAR(40)
		,DS_SERVRESUM VARCHAR(200)
		,DS_SERVCOMPL VARCHAR(800)
		,DS_NOME VARCHAR(200)	,DS_EMAIL VARCHAR(100)
		,DS_CELULAR VARCHAR(20)
		,DS_WHATSAPP VARCHAR(20)
		,VL_PRECODE DECIMAL(14,2)
		,VL_PRECOATE DECIMAL(14,2)
		,NR_CEP INT
		,TG_FINALIZADO TINYINT
		,TG_CANCELADO  TINYINT
	)

;

INSERT INTO `an_anuncio` (`PK_ID`, `DS_CATEGORIA`, `DS_TITULO`, `DS_SERVRESUM`, `DS_SERVCOMPL`, `DS_NOME`, `DS_EMAIL`, `DS_CELULAR`, `DS_WHATSAPP`, `VL_PRECODE`, `VL_PRECOATE`, `NR_CEP`, `TG_FINALIZADO`, `TG_CANCELADO`) VALUES
(0, 'Pedreiro', 'Reparo de muro', 'Necessito do reparo de um dano em um muro.', 'Estou procurando os servi?os de um pedreiro para realizar um reparo no muro ao redor do meu quintal, o muro est? em m?s condi??es e preciso de um refor?o na constru??o.', 'Jo?o Leno', 'cantor@beatles.com', '(11) 98765-4321', '11987654321', '500.00', '1000.00', 0, 0, 0),
(0, 'Encanador', 'Troca de canos', 'Preciso da troca de canos do meu tanque.', 'Gostaria de solicitar o servi?o de um encanador que consiga trocar o sif?o e o encanamento do tanque da minha ?rea de servi?os, pois est?o rachados e velhos.', 'Paulo Macartinei', 'baixo@beatles.com', '(11) 99887-7665', '11998877665', '100.00', '200.00', 0, 0, 0),
(0, 'Eletricista', 'Instalar novo spot de luz', 'Instala??o de novo spot de luz em c?modo', 'Procuro eletricista para efetuar a liga??o el?trica de um novo spot de ilumina??o na minha sala.', 'Jorge Rorrisson', 'cordas@beatles.com', '(11) 91234-5678', '11912345678', '300.00', '400.00', 0, 0, 0),
(0, 'Pintor', 'Pintura de c?modo', 'Pintura das paredes em um c?modo de minha casa', 'Procuro um pintor para pintar um c?modo de 2 x 2,5. ', 'Ringo Estrela', 'batera@beatles.com', '(11) 91122-3344', '11911223344', '300.00', '500.00', 0, 0, 0),
(0, 'Pedreiro', 'obras', 'muitas obras such wow', 'Obras gerais de pedreiro', 'Shiba', 'suchemail@wow.com', '(11) 99885-5224', '11998855224', '0.00', '10.00', 0, 0, 0)

;



﻿-- Creación de la base de datos

CREATE DATABASE pueblos CHARSET utf8 COLLATE utf8_spanish_ci;

-- Elección de la base de datos
USE pueblos;

-- Creación de la relación Personas

CREATE TABLE Poblaciones (
	Poblacion 	Varchar(50),
	Provincias	Varchar(50) NOT NULL,
	CONSTRAINT PK_Poblacion PRIMARY KEY (Poblacion)
);

INSERT
INTO Poblaciones
VALUES ('ALBACETE','ALBACETE'),
	   ('HELLÍN','ALBACETE'),
	   ('VILLARROBLEDO','ALBACETE'),
	   ('ALMANSA','ALBACETE'),
	   ('LA RODA','ALBACETE');
	   
INSERT
INTO Poblaciones
VALUES 	('CIUDAD REAL','CIUDAD REAL'),
		('PUERTOLLANO','CIUDAD REAL'),
		('TOMELLOSO','CIUDAD REAL'),
		('VALDEPEÑAS','CIUDAD REAL'),
		('MANZANARES','CIUDAD REAL');

INSERT
INTO Poblaciones
VALUES 	('CUENCA','CUENCA'),
		('TARANCÓN','CUENCA'),
		('QUINTANAR DEL REY','CUENCA'),
		('LAS PEDROÑERAS','CUENCA'),
		('SAN CLEMENTE','CUENCA');
		
INSERT
INTO Poblaciones
VALUES 	('GUADALAJARA','GUADALAJARA'),
		('AZUQUECA DE HENARES','GUADALAJARA'),
		('ALOVERA','GUADALAJARA'),
		('EL CASAR','GUADALAJARA'),
		('SIGÜENZA','GUADALAJARA');

INSERT
INTO Poblaciones
VALUES 	('TALAVERA DE LA REINA','TOLEDO'),
		('TOLEDO','TOLEDO'),
		('ILLESCAS','TOLEDO'),
		('SESEÑA','TOLEDO'),
		('TORRIJOS','TOLEDO');
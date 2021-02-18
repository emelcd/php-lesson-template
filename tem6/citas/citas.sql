-- Creación de la base de datos

CREATE DATABASE Citas CHARSET utf8 COLLATE utf8_spanish_ci;

-- Elección de la base de datos
USE Citas;

-- Creación de la relación Colores_Pelo
CREATE TABLE Colores_Pelo(
	Color_Pelo Varchar(15),
	CONSTRAINT PK_Color PRIMARY KEY(Color_Pelo)

);

-- Inserción de datos en la relación Colores_Pelo
INSERT INTO Colores_Pelo 
VALUES ('MORENO'),('CASTAÑO'),('RUBIO'),('PELIROJO');

-- Creación de la relación Sexos
CREATE TABLE Sexos(
	Sexo Varchar(10),
	CONSTRAINT PK_Sexos PRIMARY KEY(Sexo)

);

-- Inserción de datos en la relación Colores_Pelo
INSERT INTO Sexos 
VALUES ('HOMBRE'),('MUJER');

-- Creación de la relación Candidatos


CREATE TABLE Candidatos (
	Num_Candidato	Numeric(7),
	Nombre			Varchar(25) NOT NULL,
	Apellido1		Varchar(25) NOT NULL,
	Apellido2		Varchar(25),
	Sexo			Varchar(10) DEFAULT 'HOMBRE' NOT NULL,
	FechaNacim		Date NOT NULL,
	Color_Pelo		Varchar(15) DEFAULT 'MORENO' NOT NULL,
	Altura			Numeric(3) NOT NULL,
	Foto			Varchar(100) DEFAULT NULL,
	CONSTRAINT PK_Candidatos PRIMARY KEY(Num_Candidato),
	CONSTRAINT FK_Cand_Color FOREIGN KEY (Color_Pelo) REFERENCES Colores_Pelo (Color_Pelo)
);

INSERT INTO Candidatos
VALUES (1,'LUIS','GARCÍA','LÓPEZ','HOMBRE','1980/12/25','MORENO',183,NULL),
	   (2,'MARIANO','GARCÍA','SÁNCHEZ','HOMBRE','1980/12/29','MORENO',180,NULL),
	   (3,'PEDRO','LÓPEZ','MARTÍNEZ','HOMBRE','1983/10/25','PELIROJO',174,NULL),
	   (4,'RAFAEL','VELÁZQUEZ','LÓPEZ','HOMBRE','1979/12/25','MORENO',184,NULL),
	   (5,'LUIS','FERNÁNDEZ','PÉREZ','HOMBRE','1995/12/25','MORENO',183,NULL),
	   (6,'MARÍA','GARCÍA','LÓPEZ','MUJER','1989/12/25','MORENO',173,NULL),
	   (7,'SONIA','PÉREZ','LÓPEZ','MUJER','1999/12/25','MORENO',167,NULL),
	   (8,'SONSOLES','RODRÍGUEZ','LÓPEZ','MUJER','1980/11/25','MORENO',163,NULL);
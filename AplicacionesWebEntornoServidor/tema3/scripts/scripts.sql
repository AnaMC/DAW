/*Crear la BD*/

CREATE DATABASE dwes
DEFAULT CHARACTER SET UTF8
COLLATE UTF8_UNICODE_CI;

/*Crear usuario administrador de la BD*/

CREATE USER udwes@localhost
IDENTIFIED BY 'cdwes';

GRANT ALL
ON dwes.* TO
udwes@localhost;

FLUSH PRVILEGES;

/*3º crear tablas*/

CREATE TABLE IF NOT EXISTS car(
    ID BIGINT NOT NULL auto_increment,
    marca VARCHAR(30) NOT NULL,
    modelo VARCHAR (40) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE(marca, modelo)
) ENGINE=INNODB DEFAULT CHARACTER SET = UTF8 COLLATE UTF8_UNICODE_CI;



CREATE TABLE IF NOT EXISTS carold(
    marca VARCHAR(30) NOT NULL,
    modelo VARCHAR (40) NOT NULL,
    PRIMARY KEY (marca, modelo),
) ENGINE=INNODB DEFAULT CHARACTER SET = UTF8 COLLATE UTF8_UNICODE_CI;

CREATE TABLE IF NOT EXISTS contacto(
    id bigint  NOT NULL UNIQUE AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(40) NOT NULL UNIQUE,
) ENGINE=INNODB DEFAULT CHARACTER SET = UTF8 COLLATE UTF8_UNICODE_CI;

CREATE TABLE IF NOT EXISTS telefono(
    id bigint NOT NULL UNIQUE AUTO_INCREMENT PRIMARY KEY,
    idContacto BIGINT NOT NULL,
    telefono VARCHAR (15) NOT NULL,
    descripcion VARCHAR (20) NOT NULL,
    FOREIGN KEY (idContacto) references contacto(id) delete restrict,
) ENGINE=INNODB DEFAULT CHARACTER SET = UTF8 COLLATE UTF8_UNICODE_CI;

/*on update cascade no tiene sentido en este caso, ya que se van autoincrementando, on delete cascade si,
    aunque a la hora de la verdad y en el mundo real es MUY PELIGROSO ya que borra los registros relacionasdos con los que borremos,
    restrict impide borrar campos con otros relacionados -GRENERALMENTE casi nunca se borran datos, se ocultan.
*/


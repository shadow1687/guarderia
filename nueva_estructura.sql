ALTER DATABASE guarderia CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE usuarios CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
RENAME TABLE usuarios TO usuario;
alter table usuario add column persona bigint(20) default null after password;


CREATE TABLE IF NOT EXISTS relacion (
id1 int unsigned not null,
id2 int unsigned not null,
st tinyint(1) default 0 not null,
ts timestamp,
primary key (id1,id2)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS persona (
  id bigint(20) NOT NULL AUTO_INCREMENT, 
   tipo smallint unsigned not null default 0,
  nombre varchar(100) DEFAULT NULL,
  apellido varchar(100) DEFAULT NULL,
  edad int(11) DEFAULT NULL,
  nacimiento date DEFAULT NULL,
  dni varchar(10) DEFAULT NULL,
  email varchar(100) DEFAULT NULL,
  direccion varchar(100) DEFAULT NULL,
  ciudad varchar(100) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS alumno (
  id_persona bigint(20) NOT NULL AUTO_INCREMENT,
  id_aula varchar(100) DEFAULT NULL,
   turno smallint unsigned not null default 0,
  st tinyint(1) default 0 not null,
  ts timestamp,
  PRIMARY KEY (id_persona,id_aula)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS estab_aula(
id_estab bigint(20) NOT NULL,
id_aula bigint(20) NOT NULL,
st tinyint(1) default 0 not null,
ts timestamp,
primary key (id_estab,id_aula)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS establecimiento (
  id bigint(20) NOT NULL AUTO_INCREMENT,
  nombre varchar(100) DEFAULT NULL,
  responsable bigint(20) DEFAULT NULL,
  direccion varchar(100) DEFAULT NULL,
  email varchar(100) DEFAULT NULL,
  telefono varchar(50) DEFAULT NULL,
  ciudad varchar(50) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS aula_maestro (
  id_aula bigint(20) NOT NULL AUTO_INCREMENT,
  id_maestro varchar(100) DEFAULT NULL,
  st tinyint(1) default 0 not null,  
  ts timestamp,
  PRIMARY KEY (id_aula,id_maestro)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS aula (
  id bigint(20) NOT NULL AUTO_INCREMENT,
  nombre varchar(100) DEFAULT NULL,
  capacidad bigint(20) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

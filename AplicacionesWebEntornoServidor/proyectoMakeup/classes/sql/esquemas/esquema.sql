create database proyecto default character set utf8 collate utf8_unicode_ci;

create user uproyecto@localhost identified by 'cproyecto';

grant all on proyecto.* to uproyecto@localhost;

flush privileges;

use proyecto;

create table if not exists usuario (
    id bigint not null auto_increment primary key,
    nombre varchar(20) not null,
    apellidos varchar(80) not null,
    nombreUsuario varchar(20) not null unique,
    correo varchar(80) not null unique,
    clave varchar(250) not null,
    verificado tinyint(1) not null default 0,
    tipo tinyint(1) not null default 0, /*1-> administrador, 2-> avazzado, 3->normal*/
    fechaalta varchar(10) not null
) engine = innodb default character set = utf8 collate utf8_unicode_ci;


create table if not exist maquillaje(
    id bigint not null auto_increment primary key,
    nombre varchar(20) not null,
    precio int,
    cantidad varchar(50),
    descripcion varchar (250)
)

create table if not exist maqus(
    id bigint not null auto_increment primary key,
    idusuario bigint not null,
    idmaquillaje bigint not null,
    fecha varchar(10) not null,
    precio int,
    foreign key (idusuario) references usuario (id) on delete restrict,
    foreign key (idmaquillaje) references maquillaje (id) on delete restrict
)engine = innodb default character set = utf8 collate utf8_unicode_ci;

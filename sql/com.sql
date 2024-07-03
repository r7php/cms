create table config(
id int identity(1,1),
name varchar(50),
valor varchar(100),
)

create table menus(
id int identity(1,1),
nome varchar(50),
url varchar(100),
)

create table paginas(
id int identity(1,1),
titulo varchar(50),
corpo text
)

create table users(
id int identity(1,1),
email  varchar(100),
senha varchar(32)
)

insert into config values('site_template','default')
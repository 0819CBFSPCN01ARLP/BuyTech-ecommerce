CREATE DATABASE buytech_db;
USE buytech_db;

/* TABLAS DE PRODUCTOS*/
CREATE TABLE productos(
id_producto INT AUTO_INCREMENT,
modelo VARCHAR(20) NOT NULL,
tamanoDisco INT NOT NULL,
precio INT NOT NULL,
stock INT NOT NULL,
estado INT NOT NULL,
descripcion VARCHAR(200),
id_marca INT NOT NULL,
id_procesador INT NOT NULL,
id_pantalla INT NOT NULL,
id_disco INT NOT NULL,
id_memoria INT NOT NULL,
PRIMARY KEY (id_producto),
FOREIGN KEY (id_marca) REFERENCES marcas(id_marca),
FOREIGN KEY (id_procesador) REFERENCES procesadores(id_procesador),
FOREIGN KEY (id_pantalla) REFERENCES pantallas(id_pantalla),
FOREIGN KEY (id_disco) REFERENCES discos(id_disco),
FOREIGN KEY (id_memoria) REFERENCES memorias(id_memoria)
);
CREATE TABLE marcas(
id_marca INT AUTO_INCREMENT NOT NULL,
PRIMARY KEY (id_marca),
nombre VARCHAR(30)
);
CREATE TABLE procesadores(
id_procesador INT AUTO_INCREMENT NOT NULL,
PRIMARY KEY (id_procesador),
nombre VARCHAR(30)
);
CREATE TABLE pantallas(
id_pantalla INT AUTO_INCREMENT NOT NULL,
PRIMARY KEY(id_pantalla),
nombre VARCHAR(30)
);
CREATE TABLE discos(
id_disco INT AUTO_INCREMENT NOT NULL,
PRIMARY KEY(id_disco),
nombre VARCHAR(30)
);
CREATE TABLE memorias(
id_memoria INT AUTO_INCREMENT NOT NULL,
PRIMARY KEY(id_memoria),
nombre VARCHAR(30)
);


/* TABLA DE COMPRAS*/

CREATE TABLE compras(
id_compra INT NOT NULL AUTO_INCREMENT,
estado INT,
importe_total INT,
id_usuario INT NOT NULL,
PRIMARY KEY(id_compra),
FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
);

/* TABLA DE INTERMEDIA*/

CREATE TABLE producto_compra(
id_producto_compra INT NOT NULL AUTO_INCREMENT,
estado INT,
precio_por_cantidad INT,
cantidad INT,
precio INT,
medio_pago VARCHAR (20),
medio_envio VARCHAR (20),
id_producto INT NOT NULL,
id_compra INT NOT NULL,
FOREIGN KEY(id_producto) REFERENCES productos(id_producto),
FOREIGN KEY(id_compra) REFERENCES compras(id_compra),
PRIMARY KEY(id_producto_compra)
);


/* TABLA DE USUARIOS*/

CREATE TABLE usuarios(
id_usuario INT AUTO_INCREMENT NOT NULL,
tipo_de_usuario INT NOT NULL,
nombre VARCHAR (20),
apellido VARCHAR (20),
mail VARCHAR (20) NOT NULL,
password VARCHAR (20) NOT NULL,
celular VARCHAR (20),
ciudad VARCHAR (20),
codigo_postal VARCHAR (8),
pais VARCHAR (20),
estado_facturacion INT,
direccion_envio VARCHAR (50),
estado INT,
PRIMARY KEY(id_usuario)
);


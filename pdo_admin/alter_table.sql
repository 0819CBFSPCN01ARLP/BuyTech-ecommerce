USE buytech_db;

ALTER TABLE usuarios ADD ruta_imagen VARCHAR(150);

ALTER TABLE productos ADD ruta_imagen VARCHAR(150);

ALTER TABLE usuarios MODIFY password VARCHAR(100) NOT NULL;

ALTER TABLE usuarios MODIFY mail VARCHAR(100) NOT NULL;

ALTER TABLE usuarios MODIFY nombre VARCHAR(100);

ALTER TABLE usuarios MODIFY apellido VARCHAR(100);

ALTER TABLE usuarios MODIFY celular VARCHAR(100);

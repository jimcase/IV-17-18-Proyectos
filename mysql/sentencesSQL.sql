CREATE TABLE user (
    id INT NOT NULL UNIQUE CHECK (id > 0),
    email CHAR(50) NOT NULL UNIQUE PRIMARY KEY,
    pass VARCHAR(306) NOT NULL
   );

CREATE TABLE img (
    id INT NOT NULL UNIQUE UNIQUE PRIMARY KEY CHECK (id > 0),
    email_user CHAR(50) NOT NULL REFERENCES user(email),
    name VARCHAR(90) NOT NULL,
    description VARCHAR(255),
    image MEDIUMBLOB,   #objeto para guardar la imagen con un máx. de 134,22MB
    hight_px INT NOT NULL CHECK (high_px > 0),
    width_px INT NOT NULL CHECK (width_px > 0)
   );

#instertamos el administrador con id = 0
INSERT INTO user
VALUES (0, 'admin@img.es', 'a1234567');
/*
http://www.latindevelopers.com/articulos/sql-server/diferencia-entre-varchar-y-nvarchar.php:
   VARCHAR es una abreviatura de cadena de caracteres de longitud variable (del inglés VARiable CHARacter). Puede almacenar una cadena de caracteres que puede ser tan grande como el tamaño de página de la tabla. El tamaño de una página de una tabla en SQL Server es 8.196 bytes, ninguna fila de una tabla en SQL Server puede ser más de 8.060 caracteres. Esto a su vez limita el tamaño máximo de un VARCHAR a 8.000 bytes.


Tamaño de las imagenes
TINYBLOB

A binary large object column with a maximum length of 255 (2^8 - 1) characters.

BLOB

A binary large object column with a maximum length of 65535 (2^16 - 1) characters.

MEDIUMBLOB

A binary large object column with a maximum length of 16777215 (2^24 - 1) characters.   134,21772 MB

LONGBLOB

A binary large object column with a maximum length of 4294967295 (2^32 - 1) characters. 4,294967295 GB

*/
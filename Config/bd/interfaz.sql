
CREATE TABLE Usuarios (
    id int(11) NOT NULL AUTO_INCREMENT,
    nombre varchar(50) NOT NULL ,
    usuario varchar(250) NOT NULL,
    clave varchar(12) NOT NULL,
    estado int(2) DEFAULT 1,
    created_at timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    user_c int(2) DEFAULT 1,
    user_m int(2) DEFAULT 1,
    PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
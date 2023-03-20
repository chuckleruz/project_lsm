CREATE TABLE configuracion_sistema (
    id_config INT PRIMARY KEY,
    nombre_plataforma VARCHAR(50) NOT NULL,
    descripcion VARCHAR(255) NOT NULL,
    logo VARBINARY(MAX),
    correo_soporte VARCHAR(50) NOT NULL,
    config_adicionales VARCHAR(MAX)
);
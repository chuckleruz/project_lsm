CREATE TABLE estudiantes (
  id_estudiante INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL,
  apellido VARCHAR(50) NOT NULL,
  correo_electronico VARCHAR(100) NOT NULL,
  contrasenia VARCHAR(100) NOT NULL,
  fecha_de_registro DATETIME NOT NULL,
  estado INT NOT NULL
);

CREATE TABLE docentes (
  id_docente INT PRIMARY KEY,
  nombre VARCHAR(50),
  apellido VARCHAR(50),
  correoElectronico VARCHAR(100),
  contrasena VARCHAR(50),
  fecha_registro DATE,
  estado_cuenta VARCHAR(10)
);

CREATE TABLE administradores (
    id_admin INT PRIMARY KEY,
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    correo_electronico VARCHAR(100),
    contrasena VARCHAR(100),
    fecha_de_registro DATE
);
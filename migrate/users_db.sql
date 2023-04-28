CREATE TABLE estudiantes (
  id_estudiante INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL,
  apellido VARCHAR(50) NOT NULL,
  correo_electronico VARCHAR(100) NOT NULL,
  contrasena VARCHAR(100) NOT NULL,
  fecha_de_registro DATETIME NOT NULL,
  estado INT NOT NULL
);

CREATE TABLE docentes (
  id_docente INT PRIMARY KEY,
  nombre VARCHAR(50),
  apellido VARCHAR(50),
  correo_electronico VARCHAR(100),
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

INSERT INTO docente (id_docente, nombre, apellido, correo_electronico, contrasena, fecha_registro, estado_cuenta) VALUES (1, 'Juan', 'Pérez', 'jperez@gmail.com', 'contraseña1', '2021-01-01', 'activo');
INSERT INTO docente (id_docente, nombre, apellido, correo_electronico, contrasena, fecha_registro, estado_cuenta) VALUES (2, 'María', 'González', 'mgonzalez@yahoo.com', 'contraseña2', '2021-02-15', 'activo');
INSERT INTO docente (id_docente, nombre, apellido, correo_electronico, contrasena, fecha_registro, estado_cuenta) VALUES (3, 'Pedro', 'López', 'plopez@hotmail.com', 'contraseña3', '2021-03-21', 'inactivo');
INSERT INTO docente (id_docente, nombre, apellido, correo_electronico, contrasena, fecha_registro, estado_cuenta) VALUES (4, 'Ana', 'Ramírez', 'aramirez@gmail.com', 'contraseña4', '2021-04-05', 'activo');
INSERT INTO docente (id_docente, nombre, apellido, correo_electronico, contrasena, fecha_registro, estado_cuenta) VALUES (5, 'Luis', 'Martínez', 'lmartinez@yahoo.com', 'contraseña5', '2021-05-12', 'inactivo');
INSERT INTO docente (id_docente, nombre, apellido, correo_electronico, contrasena, fecha_registro, estado_cuenta) VALUES (6, 'Sara', 'Gómez', 'sgomez@hotmail.com', 'contraseña6', '2021-06-27', 'activo');
INSERT INTO docente (id_docente, nombre, apellido, correo_electronico, contrasena, fecha_registro, estado_cuenta) VALUES (7, 'Diego', 'Hernández', 'dhernandez@gmail.com', 'contraseña7', '2021-07-04', 'inactivo');
INSERT INTO docente (id_docente, nombre, apellido, correo_electronico, contrasena, fecha_registro, estado_cuenta) VALUES (8, 'Laura', 'Díaz', 'ldiaz@yahoo.com', 'contraseña8', '2021-08-19', 'activo');
INSERT INTO docente (id_docente, nombre, apellido, correo_electronico, contrasena, fecha_registro, estado_cuenta) VALUES (9, 'Javier', 'García', 'jgarcia@hotmail.com', 'contraseña9', '2021-09-25', 'activo');
INSERT INTO docente (id_docente, nombre, apellido, correo_electronico, contrasena, fecha_registro, estado_cuenta) VALUES (10, 'Carla', 'Paz', 'cpaz@gmail.com', 'contraseña10', '2021-10-10', 'inactivo');

INSERT INTO estudiantes (nombre, apellido, correo_electronico, contrasena, fecha_de_registro, estado)
VALUES ('Diego', 'Hernández', 'diego.hernandez@example.com', 'contraseña123', '2023-04-27 23:00:00', 1);
INSERT INTO estudiantes (nombre, apellido, correo_electronico, contrasena, fecha_de_registro, estado)
VALUES ('Laura', 'Sánchez', 'laura.sanchez@example.com', 'contraseña123', '2023-04-27 22:00:00', 0);
INSERT INTO estudiantes (nombre, apellido, correo_electronico, contrasena, fecha_de_registro, estado)
VALUES ('Javier', 'Fernández', 'javier.fernandez@example.com', 'contraseña123', '2023-04-27 21:00:00', 1);
INSERT INTO estudiantes (nombre, apellido, correo_electronico, contrasena, fecha_de_registro, estado)
VALUES ('Lucía', 'Gutiérrez', 'lucia.gutierrez@example.com', 'contraseña123', '2023-04-27 20:00:00', 1);
INSERT INTO estudiantes (nombre, apellido, correo_electronico, contrasena, fecha_de_registro, estado)
VALUES ('Mario', 'Pérez', 'mario.perez@example.com', 'contraseña123', '2023-04-27 19:00:00', 0);	
INSERT INTO estudiantes (nombre, apellido, correo_electronico, contrasena, fecha_de_registro, estado)
VALUES ('Carla', 'Rodríguez', 'carla.rodriguez@example.com', 'contraseña123', '2023-04-27 18:00:00', 1);
INSERT INTO estudiantes (nombre, apellido, correo_electronico, contrasena, fecha_de_registro, estado)
VALUES ('Juan', 'López', 'juan.lopez@example.com', 'contraseña123', '2023-04-27 17:00:00', 1);
INSERT INTO estudiantes (nombre, apellido, correo_electronico, contrasena, fecha_de_registro, estado)
VALUES ('María', 'Gómez', 'maria.gomez@example.com', 'contraseña123', '2023-04-27 16:00:00', 0);
INSERT INTO estudiantes (nombre, apellido, correo_electronico, contrasena, fecha_de_registro, estado)
VALUES ('Pedro', 'Martínez', 'pedro.martinez@example.com', 'contraseña123', '2023-04-27 15:00:00', 1);
INSERT INTO estudiantes (nombre, apellido, correo_electronico, contrasena, fecha_de_registro, estado)
VALUES ('Ana', 'García', 'ana.garcia@example.com', 'contraseña123', '2023-04-27 14:30:00', 1);

INSERT INTO administradores (id_admin, nombre, apellido, correo_electronico, contrasena, fecha_de_registro) 
VALUES (1, 'Juan', 'Pérez', 'juanperez@mail.com', 'contraseña1', '2022-01-01');
INSERT INTO administradores (id_admin, nombre, apellido, correo_electronico, contrasena, fecha_de_registro) 
VALUES (2, 'Ana', 'García', 'anagarcia@mail.com', 'contraseña2', '2022-01-02');
INSERT INTO administradores (id_admin, nombre, apellido, correo_electronico, contrasena, fecha_de_registro) 
VALUES (3, 'Luis', 'Hernández', 'luishernandez@mail.com', 'contraseña3', '2022-01-03');
INSERT INTO administradores (id_admin, nombre, apellido, correo_electronico, contrasena, fecha_de_registro) 
VALUES (4, 'María', 'Rodríguez', 'mariarodriguez@mail.com', 'contraseña4', '2022-01-04');
INSERT INTO administradores (id_admin, nombre, apellido, correo_electronico, contrasena, fecha_de_registro) 
VALUES (5, 'Jorge', 'Sánchez', 'jorgesanchez@mail.com', 'contraseña5', '2022-01-05');
INSERT INTO administradores (id_admin, nombre, apellido, correo_electronico, contrasena, fecha_de_registro) 
VALUES (6, 'Carla', 'López', 'carlalopez@mail.com', 'contraseña6', '2022-01-06');
INSERT INTO administradores (id_admin, nombre, apellido, correo_electronico, contrasena, fecha_de_registro) 
VALUES (7, 'Fernando', 'Martínez', 'fernandomartinez@mail.com', 'contraseña7', '2022-01-07');
INSERT INTO administradores (id_admin, nombre, apellido, correo_electronico, contrasena, fecha_de_registro) 
VALUES (8, 'Adriana', 'Gómez', 'adrianagomez@mail.com', 'contraseña8', '2022-01-08');
INSERT INTO administradores (id_admin, nombre, apellido, correo_electronico, contrasena, fecha_de_registro) 
VALUES (9, 'Pablo', 'Castillo', 'pablocastillo@mail.com', 'contraseña9', '2022-01-09');
INSERT INTO administradores (id_admin, nombre, apellido, correo_electronico, contrasena, fecha_de_registro) 
VALUES (10, 'Sofía', 'Vargas', 'sofiavargas@mail.com', 'contraseña10', '2022-01-10');









CREATE TABLE cursos (
  id_curso INT PRIMARY KEY,
  nombre_del_curso VARCHAR(255),
  descripcion VARCHAR(1000),
  docente_a_cargo INT,
  fecha_de_inicio DATE,
  fecha_de_finalizacion DATE,
  estado_del_curso VARCHAR(50),
  FOREIGN KEY (docente_a_cargo) REFERENCES docentes(id_docente)
);

insert into `cursos` (`descripcion`, `docente_a_cargo`, `estado_del_curso`, `fecha_de_finalizacion`, `fecha_de_inicio`, `id_curso`, `nombre_del_curso`) values ('Español', 1, 'Activo', '2023-06-30', '2023-06-01', 1, 'Curso 1');
insert into `cursos` (`descripcion`, `docente_a_cargo`, `estado_del_curso`, `fecha_de_finalizacion`, `fecha_de_inicio`, `id_curso`, `nombre_del_curso`) values ('Matemáticas', 2, 'Inactivo', '2023-07-31', '2023-07-01', 2, 'Curso 2');
insert into `cursos` (`descripcion`, `docente_a_cargo`, `estado_del_curso`, `fecha_de_finalizacion`, `fecha_de_inicio`, `id_curso`, `nombre_del_curso`) values ('Inglés', 3, 'Activo', '2023-08-31', '2023-08-01', 3, 'Curso 3');
insert into `cursos` (`descripcion`, `docente_a_cargo`, `estado_del_curso`, `fecha_de_finalizacion`, `fecha_de_inicio`, `id_curso`, `nombre_del_curso`) values ('Probabilidad', 4, 'Inactivo', '2023-09-30', '2023-09-01', 4, 'Curso 4');
insert into `cursos` (`descripcion`, `docente_a_cargo`, `estado_del_curso`, `fecha_de_finalizacion`, `fecha_de_inicio`, `id_curso`, `nombre_del_curso`) values ('Animación por Computadora', 5, 'Activo', '2023-10-31', '2023-10-01', 5, 'Curso 5');
insert into `cursos` (`descripcion`, `docente_a_cargo`, `estado_del_curso`, `fecha_de_finalizacion`, `fecha_de_inicio`, `id_curso`, `nombre_del_curso`) values ('Sistemas Operativos II', 6, 'Inactivo', '2023-11-30', '2023-11-01', 6, 'Curso 6');
insert into `cursos` (`descripcion`, `docente_a_cargo`, `estado_del_curso`, `fecha_de_finalizacion`, `fecha_de_inicio`, `id_curso`, `nombre_del_curso`) values ('Alicaciones Web', 7, 'Activo', '2023-12-31', '2023-12-01', 7, 'Curso 7');
insert into `cursos` (`descripcion`, `docente_a_cargo`, `estado_del_curso`, `fecha_de_finalizacion`, `fecha_de_inicio`, `id_curso`, `nombre_del_curso`) values ('Redes', 8, 'Inactivo', '2024-01-31', '2024-01-01', 8, 'Curso 8');
insert into `cursos` (`descripcion`, `docente_a_cargo`, `estado_del_curso`, `fecha_de_finalizacion`, `fecha_de_inicio`, `id_curso`, `nombre_del_curso`) values ('Analisis y Algoritmos', 9, 'Activo', '2024-02-29', '2024-02-01', 9, 'Curso 9');
insert into `cursos` (`descripcion`, `docente_a_cargo`, `estado_del_curso`, `fecha_de_finalizacion`, `fecha_de_inicio`, `id_curso`, `nombre_del_curso`) values ('Desarrollo móvil', 10, 'Inactivo', '2024-03-31', '2024-03-01', 10, 'Curso 10');
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
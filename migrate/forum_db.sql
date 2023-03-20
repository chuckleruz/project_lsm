CREATE TABLE foros (
  id_foros INT PRIMARY KEY,
  titulo VARCHAR(255),
  descripcion TEXT,
  fecha_creacion DATE,
  id_curso INT,
  FOREIGN KEY (id_curso) REFERENCES cursos(id_curso)
);


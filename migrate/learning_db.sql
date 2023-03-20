CREATE TABLE lecciones (
  id_leccion INT PRIMARY KEY,
  titulo VARCHAR(255),
  descripcion VARCHAR(255),
  contenido TEXT,
  orden INT,
  recursos_adicionales TEXT,
  curso_asociado INT,
  FOREIGN KEY (curso_asociado) REFERENCES cursos(id_curso)
);

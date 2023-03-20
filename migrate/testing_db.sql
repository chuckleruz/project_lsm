CREATE TABLE evaluaciones (
  id_evaluación INT PRIMARY KEY,
  titulo VARCHAR(255),
  descripcion TEXT,
  fecha_de_inicio DATE,
  fecha_de_finalización DATE,
  tipo_de_evaluación VARCHAR(50),
  curso_asociado INT,
  FOREIGN KEY (curso_asociado) REFERENCES cursos(id_curso)
);
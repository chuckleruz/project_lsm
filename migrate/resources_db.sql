CREATE TABLE recursos (
  id_recurso INTEGER PRIMARY KEY,
  titulo VARCHAR(255),
  descripcion VARCHAR(255),
  url_down VARCHAR(255),
  tipo_de_recurso VARCHAR(50),
  curso_asociado INTEGER REFERENCES cursos(id_curso)
);
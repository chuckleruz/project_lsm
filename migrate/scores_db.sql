CREATE TABLE calificaciones (
  id_calificacion INT PRIMARY KEY,
  estudiante INT,
  evaluacion INT,
  calificacion FLOAT,
  FOREIGN KEY (estudiante) REFERENCES estudiantes(id_estudiante),
  FOREIGN KEY (evaluacion) REFERENCES evaluaciones(id_evaluacion)
);
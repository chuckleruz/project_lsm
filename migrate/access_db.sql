CREATE TABLE permisos (
  id INT PRIMARY KEY,
  idNivel INT,
  vista VARCHAR(250)
);

insert into `permisos` (`id`, `idNivel`, `vista`) values (1, 1, 'docentes');
insert into `permisos` (`id`, `idNivel`, `vista`) values (2, 1, 'alumnos');
insert into `permisos` (`id`, `idNivel`, `vista`) values (3, 1, 'cursos');
insert into `permisos` (`id`, `idNivel`, `vista`) values (4, 1, 'sesiones');
insert into `permisos` (`id`, `idNivel`, `vista`) values (5, 1, 'ajustes');
insert into `permisos` (`id`, `idNivel`, `vista`) values (6, 1, 'dashboard');
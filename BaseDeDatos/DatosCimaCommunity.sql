-- ------------------------------------------------------------------------------------------------------------------------
--  TABLA PARA CAMPUS------------------------------------------------------------------------------------------------------
insert into campus value(0,'Tijuana'),(0,'Mexicali'),(0,'Ensenada');

-- ------------------------------------------------------------------------------------------------------------------------
--  TABLA PARA FACULTADES--------------------------------------------------------------------------------------------------
-- Tijuana
insert into facultad value
(0,'Facultad de Artes',1),(0,'Facultad de Ciencias Químicas e Ingeniería',1),(0,'Facultad de Contaduría y Administración',1),(0,'Facultad de Deportes',1),
(0,'Facultad de Derecho',1),(0,'Facultad de Economía y Relaciones Internacionales',1),(0,'Facultad de Humanidades y Ciencias Sociales',1),(0,'Facultad de Idiomas',1),
(0,'Facultad de Medicina y Psicología',1),(0,'Facultad de Odontología',1),(0,'Facultad de Turismo y Mercadotecnia',1),(0,'Facultad de Ciencias de la Ingeniería, Administrativas y Sociales',1),
(0,'Facultad de Idiomas (extensión Tecate)',1),(0,'Facultad de Ciencias de la Ingeniería y Tecnología',1),(0,'Facultad de Ciencias de la Salud',1);

-- Mexicali
insert into facultad value
(0,"Facultad de Arquitectura y Diseño",2),(0,"Facultad de Artes",2),(0,"Facultad de Ciencias Administrativas",2),(0,"Facultad de Ciencias Humanas",2),
(0,'Facultad de Ciencias Sociales y Políticas',2),(0,"Facultad de Deportes",2),(0,"Facultad de Derecho",2),(0,"Facultad de Enfermería",2),(0,"Facultad de Idiomas",2),
(0,'Facultad de Ingeniería',2),(0,'Facultad de Medicina',2),(0,"Facultad de Odontología",2),(0,"Facultad de Pedagogía e Innovación Educativa",2),
(0,'Facultad de Ciencias Administrativas (extensión Ciudad Morelos)',2),(0,"Facultad de Ingeniería y Negocios - Guadalupe Victoria",2),
(0,"Facultad de Ciencias Administrativas (extensión San Felipe)",2);

-- Ensenada 
insert into facultad value
(0,"Facultad de Artes",3),(0,"Facultad de Ciencias",3),(0,'Facultad de Ciencias Administrativas y Sociales',3),
(0,"Facultad de Ciencias Marinas",3),(0,"Facultad de Deportes",3),(0,'Facultad de Enología y Gastronomía',3),(0,"Facultad de Idiomas",3),
(0,"Facultad de Ingeniería y Negocios -San Quitín",3),(0,"Facultad de Ingeniería, Arquitectura y Diseño",3);

-- ----------------------------------------------------------------------------------------------------------------------
--  TABLA PARA CARRERAS--------------------------------------------------------------------------------------------------
-- Tijuana
insert into carrera value
(0,'Artes Plásticas',1),(0,'Teatro',1),(0,'Danza',1),(0,'Música',1),(0,'Artes Cinematográficas y Producción Audiovisual',1),
(0,'Animación Digital y Efectos Visuales',1),

(0,'Ingeniero en Software y Tecnologías de la Información',2),(0,'Ingeniero Industrial',2),(0,'Ingeniero en Electrónica',2),(0,'Ingeniero en Computación',2),
(0,'Químico Farmacobiológo',2),(0,'Ingeniero Químico',2),(0,'Químico Industrial',2),

(0,'Lic. en Inteligencia de Negocios',3),(0,'Lic. en Contaduría',3),(0,'Lic. en Negocios Internacionales',3),(0,'Lic. en Administración de Empresas',3),
(0,'Lic. en Informática',3),(0,'Lic. en Actividad Física y Deporte',4),(0,'Lic. en derecho',5),

(0,'Lic. en Economía',6),(0,'Lic. en Relaciones Internacionales',6),(0,'Lic. en Administración Pública y Ciencia Política',6),

(0,'Lic. en Ciencias de la Comunicación',7),(0,'Lic. en Filosofía',7),(0,'Lic. en Historia',7),(0,'Lic. en lengua y Literatura de Hispanoamérica',7),
(0,'Lic. en Sociología',7),(0,'Lic. en Docencia de la Lengua y Literatura',7),(0,'Lic. en Docencia de la Matemática',7),(0,'Lic. en Asesoría Psicopedagógica',7),

(0,'Traducción',8),(0,'Enseñanza de Lenguas',8),(0,'Lic. en Medicina',9),(0,'Lic.en Psicología',9),(0,'Lic.en Nutrición',9),(0,'Cirujano_Dentista.',10),

(0,'Lic. en Gestión Turística',11),(0,'Lic. en Mercadotecnia',11),(0,'Lic. en Gastronomía',11),

(0,'Ingeniería en Mecatrónica',13),(0,'Ingeniería Industrial',13),(0,'Lic. en Administración de Empresas',13),(0,'Lic. en Contaduría',13),(0,'Lic. en Derecho',12),

(0,'Traducción',13),(0,'Enseñanza de Lenguas',13),

(0,'Arquitectura',14),(0,'Diseño Gráfico',14),(0,'Diseño Industrial',14),(0,'Ingeniería Aeroespacial',14),(0,'Ingeniería en Bioingeniería',14),(0,'Ingeniería Civil',14),
(0,'Ingeniería Eléctrica',14),(0,'Ingeniería en Energías Renovables',14),(0,'Ingeniería Industrial',14),(0,'Ingeniería Mecánica',14),(0,'Ingeniería Mecatrónica',14),
(0,'Ingeniería  en Software y Tecnologías Emergentes',14),

(0,'proceso psicoterapéutico',15),(0,'Psicología',15),(0,'Cirujano Dentista',15),(0,'Médico',15),(0,'Médico',15),(0,'Enfermería',15);


-- Mexicali
insert into carrera value
(0,'Arquitectura',16),(0,'Lic. en Diseño Gráfico',16),(0,'Lic. en Diseño Industrial',16),

(0,'Artes Plásticas',17),(0,'Teatro',17),(0,'Danza',17),(0,'Música',17),(0,'Artes Cinematográficas y Producción Audiovisual',17),
(0,'Animación Digital y Efectos Visuales',17),

(0,'Lic. en Contaduría',8),(0,'Lic. en Administración de Empresas',18),(0,'Lic. en Informática',18),(0,'Lic. en Mercadoctenia',18),
(0,'Lic. en Inteligencia de Negocios internacionales',18),(0,'Lic. en Gestión Turística',18),

(0,'Lic. en Ciencias de la Educación',19),(0,'Lic. en Psicología',19),(0,'Lic. en Psicología',19),(0,'Lic. en Ciencias de la Comunicación',19),
(0,'Lic. en Sociología',19),(0,'Lic. en Historia',19),

(0,'Administración Pública y Ciencias Políticas',20),(0,'Relaciones Internacionales Economía',20),(0,'Lic. en Actividad Física y Deporte',21),
(0,'Lic. en derecho',22),(0,'Lic. en Enfermería',23),(0,'Traducción',24),(0,'Enseñanza de Lenguas',24),

(0,'Lic. en Sistemas Computacionales',25),(0,'Ingeniería en Bioingeniería',25),(0,'Ingeniería Aeroespacial',25),(0,'Ingeniería Civil',25),(0,'Ingeniería en Computación',25),
(0,'Ingeniería Electrónica',25),(0,'Ingeniería Eléctrica',25),(0,'Ingeniería en Energías Renovables',25),(0,'Ingeniería Industrial',25),(0,'Ingeniería Mecánica',25),(0,'Ingeniería Mecatrónica',25),

(0,'Lic. en Medicina',26),(0,'Lic. en Nutrición',26),(0,'Odontología',27),

(0,'Lic. en Asesoría Psicopedagógica',28),(0,'Lic. en Docencia de la Lengua y Literatura',28),(0,'Lic. en Docencia de la Matemática',28),(0,'Lic. en Docencia de las Ciencias',28),

(0,'Lic. en Contaduría',29),(0,'Lic. en Administración de Empresas',29),(0,'Lic. en Informática',29),(0,'Lic. en Mercadoctenia',29),
(0,'Lic. en Inteligencia de Negocios internacionales',29),(0,'Lic. en Gestión Turística',29),

(0,'Lic. en Psicología',30),(0,'Lic. en Administración de Empresas',30),

(0,'Lic. en Contaduría',31),(0,'Lic. en Administración de Empresas',31),(0,'Lic. en Informática',31),(0,'Lic. en Mercadoctenia',31),
(0,'Lic. en Inteligencia de Negocios internacionales',31),(0,'Lic. en Gestión Turística',31);

-- Ensenada
insert into carrera value
(0,'Artes Plásticas',32),(0,'Teatro',32),(0,'Danza',32),(0,'Música',32),(0,'Artes Cinematográficas y Producción Audiovisual',32),
(0,'Animación Digital y Efectos Visuales',32),

(0,'Lic. en Ciencias de datos',33),(0,'Lic. en Biología',33),(0,'Lic. en Ciencias Computacionales',33),(0,'Lic. en Física',33),
(0,'Lic. en Matemáticas Aplicadas',33),

(0,'Lic. en Administración de Empresas',34),(0,'Lic. en Ciencias de la Comunicación',34),(0,'Lic. en Ciencias de la Educación',34),(0,'Lic. en Contaduría',34),
(0,'Lic. en Derecho',34),(0,'Lic. en Informática',34),(0,'Lic. en Inteligencia de Negocios',34),(0,'Lic. en Psicología',34),(0,'Lic. en Sociología',34),

(0,'Lic. en Oceanología',35),(0,'Lic. en Ciencias Ambientales',35),(0,'Lic. en Biotecnología en Acuacultura',35),(0,'Lic. en Actividad Física y Deporte',36),

(0,'Lic. en Gastronomía',37),(0,'Lic. en Enología',37),(0,'Traducción',38),(0,'Enseñanza de Lenguas',38),

(0,'Lic. en Administración de Empresas',39),(0,'Lic. en Contaduría',39),(0,'Ingeniero Agrónomo',39),(0,'Ingeniero en Agronegocios',39),

(0,'Arquitectura',40),(0,'Bioingeniería',40),(0,'Ingeniería Civil',40),(0,'Ingeniería en Computación',40),(0,'Ingeniería en Electrónica',40),(0,'Ingeniería Industrial',40),
(0,'Ingeniería en Nanotecnología',40),(0,'Ingeniero en Software',40);

-- ----------------------------------------------------------------------------------------------------------------------
--  TABLA PARA REDES-----------------------------------------------------------------------------------------------------
insert into tipo_red value(0,'Facebook'),(0,'Whatsapp'),(0,'Instagram'),(0,'Gmail');

--  TABLA PARA TIPO USUARIO----------------------------------------------------------------------------------------------
insert into tipo_usuario value(0,'SuperAdministrador'),(0,'Administrador de comunidades'),(0,'Personal Administrativo'),(0,'Docente'),(0,'Estudiante');

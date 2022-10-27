-- Proyecto CimaCommunity -- 3er Avance
-- Arellano Guzman Edgar -- Lopez Ponce Ana Uzi

CREATE DATABASE CimaCommunity;

-- -----------------------------------------------------
-- Table login
-- -----------------------------------------------------
CREATE TABLE login (
  idLogin INT NOT NULL AUTO_INCREMENT,
  correo VARCHAR(70) NOT NULL UNIQUE,
  contrasenia VARCHAR(8) NOT NULL,
  PRIMARY KEY (idLogin));

-- -----------------------------------------------------
-- Table campus
-- -----------------------------------------------------
CREATE TABLE campus (
  idcampus INT NOT NULL AUTO_INCREMENT,
  tipo_campus VARCHAR(10) NOT NULL,
  PRIMARY KEY (idcampus));

-- -----------------------------------------------------
-- Table facultad
-- -----------------------------------------------------
CREATE TABLE facultad (
  idfacultad INT NOT NULL AUTO_INCREMENT,
  tipo_facultad VARCHAR(120) NOT NULL,
  campus_idcampus INT NOT NULL,
  PRIMARY KEY (idfacultad),
    FOREIGN KEY (campus_idcampus) REFERENCES campus (idcampus));

-- -----------------------------------------------------
-- Table carrera
-- -----------------------------------------------------
CREATE TABLE carrera (
  idcarrera INT NOT NULL AUTO_INCREMENT,
  tipo_carrera VARCHAR(100) NOT NULL,
  facultad_idfacultad INT NOT NULL,
  PRIMARY KEY (idcarrera),
    FOREIGN KEY (facultad_idfacultad) REFERENCES facultad (idfacultad));

-- -----------------------------------------------------
-- Table usuario
-- -----------------------------------------------------
CREATE TABLE usuario (
  idusuario INT NOT NULL AUTO_INCREMENT,
  matricula INT NOT NULL UNIQUE,
  nombre VARCHAR(25) NOT NULL,
  apellido_p VARCHAR(15) NOT NULL,
  apellido_m VARCHAR(15) NOT NULL,
  descripcion VARCHAR(200) NULL,
  fechaNacimiento DATE NOT NULL,
  foto_usuario VARCHAR(100) NOT NULL,
  foto_portadaUsuario VARCHAR(100) NULL,
  carrera_idcarrera INT NOT NULL,
  login_idLogin INT NOT NULL,
  PRIMARY KEY (idusuario),
    FOREIGN KEY (carrera_idcarrera) REFERENCES carrera (idcarrera),
    FOREIGN KEY (login_idLogin) REFERENCES login (idLogin));

-- -----------------------------------------------------
-- Table publicaciones
-- -----------------------------------------------------
CREATE TABLE publicaciones (
  idPublicaciones INT NOT NULL AUTO_INCREMENT,
  descripcion_publicacion VARCHAR(70) NOT NULL,
  fecha_creacion DATETIME NOT NULL,
  foto_publicacion VARCHAR(100) NOT NULL,
  usuario_idusuario INT NOT NULL,
  PRIMARY KEY (idPublicaciones),
    FOREIGN KEY (usuario_idusuario) REFERENCES usuario (idusuario));

-- -----------------------------------------------------
-- Table tipo_usuario
-- -----------------------------------------------------
CREATE TABLE tipo_usuario (
  idtipo_usuario INT NOT NULL AUTO_INCREMENT,
  tipo_usuario VARCHAR(50) NOT NULL,
  PRIMARY KEY (idtipo_usuario));

-- -----------------------------------------------------
-- Table tipoVenta
-- -----------------------------------------------------
CREATE TABLE tipoVenta (
  idVenta INT NOT NULL AUTO_INCREMENT,
  tipo_Venta VARCHAR(50) NOT NULL,
  PRIMARY KEY (idVenta));

-- -----------------------------------------------------
-- Table publicacionVenta
-- -----------------------------------------------------
CREATE TABLE publicacionVenta (
  idventa_comida INT NOT NULL AUTO_INCREMENT,
  tituloVenta VARCHAR(100) NOT NULL,
  descripcionVenta VARCHAR(70) NOT NULL,
  precioVenta TINYINT NOT NULL,
  ubicacion VARCHAR(70) NOT NULL,
  fechaCreacionVenta DATETIME NOT NULL,
  usuario_idusuario INT NOT NULL,
  tipoVenta_idVenta INT NOT NULL,
  PRIMARY KEY (idventa_comida),
    FOREIGN KEY (usuario_idusuario) REFERENCES usuario (idusuario),
    FOREIGN KEY (tipoVenta_idVenta) REFERENCES tipoVenta (idVenta));

-- -----------------------------------------------------
-- Table comunidades
-- -----------------------------------------------------
CREATE TABLE comunidades (
  idcomunidad INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(50) NOT NULL,
  descripcion_comunidad VARCHAR(100) NOT NULL,
  PRIMARY KEY (idcomunidad));

-- -----------------------------------------------------
-- Table Eventos
-- -----------------------------------------------------
CREATE TABLE Eventos (
  idEventos INT NOT NULL AUTO_INCREMENT,
  descripcion_evento VARCHAR(300) NOT NULL,
  fecha_evento DATETIME NOT NULL,
  fecha_publicacion_evento DATETIME NOT NULL,
  foto_evento VARCHAR(100) NOT NULL,
  usuario_idusuario INT NOT NULL,
  PRIMARY KEY (idEventos),
    FOREIGN KEY (usuario_idusuario) REFERENCES usuario (idusuario));

-- -----------------------------------------------------
-- Table comentarios
-- -----------------------------------------------------
CREATE TABLE comentarios (
  idcomentarios INT NOT NULL AUTO_INCREMENT,
  descripcion_comentario VARCHAR(50) NULL,
  usuario_idusuario INT NOT NULL,
  PRIMARY KEY (idcomentarios),
    FOREIGN KEY (usuario_idusuario) REFERENCES usuario (idusuario));

-- -----------------------------------------------------
-- Table comunidades_has_publicaciones
-- -----------------------------------------------------
CREATE TABLE comunidades_has_publicaciones (
  comunidades_idcomunidad INT NOT NULL,
  publicaciones_idPublicaciones INT NOT NULL,
  PRIMARY KEY (comunidades_idcomunidad, publicaciones_idPublicaciones),
    FOREIGN KEY (comunidades_idcomunidad) REFERENCES comunidades (idcomunidad),
    FOREIGN KEY (publicaciones_idPublicaciones) REFERENCES publicaciones (idPublicaciones));

-- -----------------------------------------------------
-- Table tipo_red
-- -----------------------------------------------------
CREATE TABLE tipo_red (
  idtipo_red INT NOT NULL AUTO_INCREMENT,
  tipo_redsocial VARCHAR(50) NOT NULL,
  PRIMARY KEY (idtipo_red));

-- -----------------------------------------------------
-- Table redes_sociales
-- -----------------------------------------------------
CREATE TABLE redes_sociales (
  idredes_sociales INT NOT NULL AUTO_INCREMENT,
  nombre_usuario VARCHAR(40) NOT NULL,
  tipo_red_idtipo_red INT NOT NULL,
  usuario_idusuario INT NOT NULL,
  PRIMARY KEY (idredes_sociales),
    FOREIGN KEY (tipo_red_idtipo_red) REFERENCES tipo_red (idtipo_red),
    FOREIGN KEY (usuario_idusuario) REFERENCES usuario (idusuario));

-- -----------------------------------------------------
-- Table opiniones
-- -----------------------------------------------------
CREATE TABLE opiniones (
  idopiniones INT NOT NULL AUTO_INCREMENT,
  descripcion_opinion VARCHAR(200) NOT NULL,
  titulo VARCHAR(30) NOT NULL,
  calificación TINYINT NOT NULL,
  fecha_creacion_op DATETIME NOT NULL,
  usuario_idusuario INT NOT NULL,
  PRIMARY KEY (idopiniones),
    FOREIGN KEY (usuario_idusuario) REFERENCES usuario (idusuario));

-- -----------------------------------------------------
-- Table usuario_has_tipo_usuario
-- -----------------------------------------------------
CREATE TABLE usuario_has_tipo_usuario (
  usuario_idusuario INT NOT NULL,
  tipo_usuario_idtipo_usuario INT NOT NULL,
  PRIMARY KEY (usuario_idusuario, tipo_usuario_idtipo_usuario),
    FOREIGN KEY (usuario_idusuario) REFERENCES usuario (idusuario),
    FOREIGN KEY (tipo_usuario_idtipo_usuario) REFERENCES tipo_usuario (idtipo_usuario));

-- -----------------------------------------------------
-- Table comunidades_has_usuario
-- -----------------------------------------------------
CREATE TABLE comunidades_has_usuario (
  comunidades_idcomunidad INT NOT NULL,
  usuario_idusuario INT NOT NULL,
  PRIMARY KEY (comunidades_idcomunidad, usuario_idusuario),
    FOREIGN KEY (comunidades_idcomunidad) REFERENCES comunidades (idcomunidad),
    FOREIGN KEY (usuario_idusuario) REFERENCES usuario (idusuario));

-- -----------------------------------------------------
-- Table comentarios_has_publicaciones
-- -----------------------------------------------------
CREATE TABLE comentarios_has_publicaciones (
  comentarios_idcomentarios INT NOT NULL,
  publicaciones_idPublicaciones INT NOT NULL,
  PRIMARY KEY (comentarios_idcomentarios, publicaciones_idPublicaciones),
    FOREIGN KEY (comentarios_idcomentarios) REFERENCES comentarios (idcomentarios),
    FOREIGN KEY (publicaciones_idPublicaciones) REFERENCES publicaciones (idPublicaciones));

-- -----------------------------------------------------
-- Table comentarios_has_Eventos
-- -----------------------------------------------------
CREATE TABLE comentarios_has_Eventos (
  comentarios_idcomentarios INT NOT NULL,
  Eventos_idEventos INT NOT NULL,
  PRIMARY KEY (comentarios_idcomentarios, Eventos_idEventos),
    FOREIGN KEY (comentarios_idcomentarios) REFERENCES comentarios (idcomentarios),
    FOREIGN KEY (Eventos_idEventos) REFERENCES Eventos (idEventos));

-- -----------------------------------------------------
-- Table imagenesVenta
-- -----------------------------------------------------
CREATE TABLE imagenesVenta (
  idimagenesVenta INT NOT NULL,
  imgVenta VARCHAR(100) NOT NULL,
  publicacionVenta_idventa_comida INT NOT NULL,
  PRIMARY KEY (idimagenesVenta),
    FOREIGN KEY (publicacionVenta_idventa_comida) REFERENCES publicacionVenta (idventa_comida));
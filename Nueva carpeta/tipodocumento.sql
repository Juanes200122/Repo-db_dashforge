create table tipodocumento
(
    id_tipo_documento serial
        primary key,
    descripcion       varchar(100)
);

alter table tipodocumento
    owner to postgres;

INSERT INTO information_schema.tipodocumento (id_tipo_documento, descripcion) VALUES (1, 'Cédula de Ciudadanía');
INSERT INTO information_schema.tipodocumento (id_tipo_documento, descripcion) VALUES (2, 'Tarjeta de Identidad');
INSERT INTO information_schema.tipodocumento (id_tipo_documento, descripcion) VALUES (3, 'Cédula de Extranjería');
INSERT INTO information_schema.tipodocumento (id_tipo_documento, descripcion) VALUES (4, 'Pasaporte');
INSERT INTO information_schema.tipodocumento (id_tipo_documento, descripcion) VALUES (5, 'Licencia de Conducir');
INSERT INTO information_schema.tipodocumento (id_tipo_documento, descripcion) VALUES (6, 'Tarjeta de Seguro Social');
INSERT INTO information_schema.tipodocumento (id_tipo_documento, descripcion) VALUES (7, 'Registro Civil');
INSERT INTO information_schema.tipodocumento (id_tipo_documento, descripcion) VALUES (8, 'Certificado de Nacimiento');
INSERT INTO information_schema.tipodocumento (id_tipo_documento, descripcion) VALUES (9, 'Certificado de Matrimonio');
INSERT INTO information_schema.tipodocumento (id_tipo_documento, descripcion) VALUES (10, 'Certificado de Defunción');

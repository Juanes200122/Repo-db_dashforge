create table usuarios
(
    id_usuario        serial
        primary key,
    nombre            varchar(100),
    email             varchar(100),
    telefono          varchar(20),
    id_ciudad         integer
        references ciudad,
    id_tipo_documento integer
        references tipodocumento,
    nit               varchar,
    fecha_registro    date,
    user_login        varchar,
    contrasena        varchar
);

alter table usuarios
    owner to postgres;

INSERT INTO information_schema.usuarios (id_usuario, nombre, email, telefono, id_ciudad, id_tipo_documento, nit, fecha_registro, user_login, contrasena) VALUES (30, 'JUAN ESTEBAN AREVALO', 'juanes22owen@gmail.com', '3123871114', 46, 3, '1004898823', '2024-06-28', 'JUANES22', 'QWER');
INSERT INTO information_schema.usuarios (id_usuario, nombre, email, telefono, id_ciudad, id_tipo_documento, nit, fecha_registro, user_login, contrasena) VALUES (31, 'dcsdc sdcsdc', 'juanes22owen@gmail.com', '3434', 4, 2, '342342', '2024-06-28', 'JUANES22', 'QWER');
INSERT INTO information_schema.usuarios (id_usuario, nombre, email, telefono, id_ciudad, id_tipo_documento, nit, fecha_registro, user_login, contrasena) VALUES (32, 'xsdaxsdc scsdc', 'juanes22owen@gmail.com', '3234', 4, 5, '2342134', '2024-06-28', 'JUANES22', '3434534');

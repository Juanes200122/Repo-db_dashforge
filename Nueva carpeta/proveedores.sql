create table proveedores
(
    id_proveedor        serial
        primary key,
    nombre              varchar(100),
    contacto            varchar(100),
    telefono            varchar(20),
    id_ciudad           integer
        references ciudad,
    direccion_localidad varchar,
    tipo_documento      numeric,
    nit                 varchar,
    fecha_registro      date,
    tipo_prodcuto       numeric,
    fecha_afiliacion    date,
    nit_empresarial     varchar
);

alter table proveedores
    owner to postgres;

INSERT INTO information_schema.proveedores (id_proveedor, nombre, contacto, telefono, id_ciudad, direccion_localidad, tipo_documento, nit, fecha_registro, tipo_prodcuto, fecha_afiliacion, nit_empresarial) VALUES (4, 'DANIEL RIZO', null, null, 6, 'CALLE 12', 2, '123456789', '2024-06-28', 14, '2014-07-17', 'HHDYYRBFGGTHY6');

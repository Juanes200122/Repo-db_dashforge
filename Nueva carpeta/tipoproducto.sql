create table tipoproducto
(
    id_tipo_producto serial
        primary key,
    nombre           varchar(100) not null
);

alter table tipoproducto
    owner to postgres;

INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (1, 'Herramientas');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (2, 'Fijaciones');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (3, 'Medición');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (4, 'Adhesivos');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (5, 'Pintura');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (6, 'Seguridad');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (7, 'Iluminación');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (8, 'Fontanería');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (9, 'Electrónica');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (10, 'Construcción');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (11, 'Jardinería');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (12, 'Accesorios');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (13, 'Limpieza');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (14, 'Materiales de construcción');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (15, 'Equipos de protección personal (EPP)');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (16, 'Material eléctrico');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (17, 'Cerrajería');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (18, 'Hogar');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (19, 'Automoción');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (20, 'Máquinas y herramientas industriales');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (21, 'Climatización');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (22, 'Bricolaje');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (23, 'Carpintería');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (24, 'Metalurgia');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (25, 'Cristalería');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (26, 'Plomería');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (27, 'Material de empaque');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (28, 'Equipamiento para oficina');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (29, 'Papelería');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (30, 'Librería');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (31, 'Muebles');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (32, 'Electrodomésticos');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (33, 'Cables y conductores');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (34, 'Bombillas y lámparas');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (35, 'Baterías y pilas');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (36, 'Ferretería general');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (37, 'Suministros de limpieza');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (38, 'Productos químicos');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (39, 'Herrajes y accesorios');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (40, 'Materiales de reparación');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (41, 'Suministros para soldadura');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (42, 'Herramientas neumáticas');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (43, 'Equipos de seguridad');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (44, 'Productos de sellado');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (45, 'Accesorios de fontanería');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (46, 'Herramientas para jardín');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (47, 'Material de riego');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (48, 'Productos de piscina');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (49, 'Artículos de camping');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (50, 'Productos para mascotas');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (51, 'Artículos para la cocina');
INSERT INTO information_schema.tipoproducto (id_tipo_producto, nombre) VALUES (52, 'Productos de decoración');

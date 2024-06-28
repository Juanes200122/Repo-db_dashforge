create table productos
(
    id_producto   serial
        primary key,
    nombre        varchar(100),
    precio        numeric(10, 2),
    id_proveedor  integer
        references proveedores,
    tipo_producto varchar,
    cantidad      varchar,
    referencia_id varchar,
    fecha_ingreso date
);

alter table productos
    owner to postgres;

INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (99, 'Hojas de papel barrilete', 200.00, 4, '29', '300', 'HBBJUGHT546H', '2024-06-28');
INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (100, 'Pintura de carro de temperatura', 90.00, 4, '5', '60', 'HBBJUGHT546H', '2024-06-28');
INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (101, 'sxasx', 450.00, 4, '4', '56', 'HBBJUGHT546H', '2024-06-28');
INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (102, 'asxasxasx', 2.00, 4, '49', '65', 'HBBJUGHT546H', '2024-06-28');
INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (106, 'Cable de 34k Lt', 90000.00, 4, '33', '444', 'HBBJUGHT546H', '2024-06-28');
INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (107, 'gdfgbdfgb', 450000.00, 4, '26', '16', 'HBBJUGHT546H', '2024-06-28');
INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (108, 'asxasxasx', 2.00, 4, '49', '65', 'HBBJUGHT546H', '2024-06-28');
INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (109, 'Pintura de carro de temperatura', 90.00, 4, '5', '60', 'HBBJUGHT546H', '2024-06-28');
INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (110, 'Hojas de papel barrilete', 200.00, 4, '29', '300', 'HBBJUGHT546H', '2024-06-28');
INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (111, 'sxasx', 450.00, 4, '4', '56', 'HBBJUGHT546H', '2024-06-28');
INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (112, 'Cable de 34k Lt', 90000.00, 4, '33', '444', 'HBBJUGHT546H', '2024-06-28');
INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (113, 'gdfgbdfgb', 450000.00, 4, '26', '16', 'HBBJUGHT546H', '2024-06-28');
INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (114, 'asxasxasx', 2.00, 4, '49', '65', 'HBBJUGHT546H', '2024-06-28');
INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (115, 'asxasxasx', 2.00, 4, '49', '65', 'HBBJUGHT546H', '2024-06-28');
INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (116, 'Pintura de carro de temperatura', 90.00, 4, '5', '60', 'HBBJUGHT546H', '2024-06-28');
INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (117, 'Pintura de carro de temperatura', 90.00, 4, '5', '60', 'HBBJUGHT546H', '2024-06-28');
INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (118, 'Hojas de papel barrilete', 200.00, 4, '29', '300', 'HBBJUGHT546H', '2024-06-28');
INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (119, 'Hojas de papel barrilete', 200.00, 4, '29', '300', 'HBBJUGHT546H', '2024-06-28');
INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (120, 'sxasx', 450.00, 4, '4', '56', 'HBBJUGHT546H', '2024-06-28');
INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (121, 'sxasx', 450.00, 4, '4', '56', 'HBBJUGHT546H', '2024-06-28');
INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (122, 'Cable de 34k Lt', 90000.00, 4, '33', '444', 'HBBJUGHT546H', '2024-06-28');
INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (123, 'Cable de 34k Lt', 90000.00, 4, '33', '444', 'HBBJUGHT546H', '2024-06-28');
INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (124, 'gdfgbdfgb', 450000.00, 4, '26', '16', 'HBBJUGHT546H', '2024-06-28');
INSERT INTO information_schema.productos (id_producto, nombre, precio, id_proveedor, tipo_producto, cantidad, referencia_id, fecha_ingreso) VALUES (125, 'gdfgbdfgb', 450000.00, 4, '26', '16', 'HBBJUGHT546H', '2024-06-28');

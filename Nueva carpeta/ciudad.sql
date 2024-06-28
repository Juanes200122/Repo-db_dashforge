create table ciudad
(
    id_ciudad serial
        primary key,
    nombre    varchar(100),
    estado    varchar(100)
);

alter table ciudad
    owner to postgres;

INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (3, 'Cali', 'Valle del Cauca');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (2, 'Medellín', 'Antioquia');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (1, 'Bogotá', 'Cundinamarca');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (4, 'Barranquilla', 'Atlántico');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (5, 'Cartagena', 'Bolívar');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (6, 'Bucaramanga', 'Santander');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (7, 'Pereira', 'Risaralda');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (8, 'Santa Marta', 'Magdalena');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (9, 'Manizales', 'Caldas');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (10, 'Villavicencio', 'Meta');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (11, 'Pasto', 'Nariño');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (12, 'Cúcuta', 'Norte de Santander');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (13, 'Ibagué', 'Tolima');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (14, 'Neiva', 'Huila');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (15, 'Popayán', 'Cauca');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (16, 'Sincelejo', 'Sucre');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (17, 'Montería', 'Córdoba');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (18, 'Tunja', 'Boyacá');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (19, 'Quibdó', 'Chocó');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (20, 'Armenia', 'Quindío');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (21, 'Riohacha', 'La Guajira');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (22, 'Valledupar', 'Cesar');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (23, 'Florence', 'Caquetá');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (24, 'San Andrés', 'Archipiélago de San Andrés, Providencia y Santa Catalina');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (25, 'Mocoa', 'Putumayo');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (26, 'Puerto Carreño', 'Vichada');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (27, 'Mitú', 'Vaupés');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (28, 'Guaviare', 'Guaviare');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (29, 'Inírida', 'Guainía');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (30, 'Puerto Inírida', 'Guainía');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (31, 'San José del Guaviare', 'Guaviare');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (32, 'Puerto López', 'Meta');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (33, 'Yopal', 'Casanare');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (34, 'Arauca', 'Arauca');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (35, 'Barrancabermeja', 'Santander');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (36, 'Girardot', 'Cundinamarca');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (37, 'Zipaquirá', 'Cundinamarca');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (38, 'Chía', 'Cundinamarca');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (39, 'Soacha', 'Cundinamarca');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (40, 'Funza', 'Cundinamarca');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (41, 'Fusagasugá', 'Cundinamarca');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (42, 'Mosquera', 'Cundinamarca');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (43, 'Facatativá', 'Cundinamarca');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (44, 'Cajicá', 'Cundinamarca');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (45, 'Tocancipá', 'Cundinamarca');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (46, 'Sogamoso', 'Boyacá');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (47, 'Duitama', 'Boyacá');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (48, 'Tunja', 'Boyacá');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (49, 'Paipa', 'Boyacá');
INSERT INTO information_schema.ciudad (id_ciudad, nombre, estado) VALUES (50, 'Villa de Leyva', 'Boyacá');

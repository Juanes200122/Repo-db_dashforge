create table deudaspagos
(
    id_deuda_pago serial
        primary key,
    id_usuario    integer
        references usuarios,
    id_proveedor  integer
        references proveedores,
    monto         numeric(10, 2),
    fecha         date,
    tipo          varchar(10)
        constraint deudaspagos_tipo_check
            check ((tipo)::text = ANY ((ARRAY ['deuda'::character varying, 'pago'::character varying])::text[]))
);

alter table deudaspagos
    owner to postgres;


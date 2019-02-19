UPDATE expedientes SET agrupador = true where id in (SELECT expediente_id from actividades_titulares group by expediente_id);


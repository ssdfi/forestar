ALTER TABLE expedientes ADD COLUMN expediente_original CHARACTER VARYING;
ALTER TABLE actividades_aprobadas ADD COLUMN inspeccion_id INTEGER;
ALTER TABLE actividades_aprobadas ADD COLUMN material_certificado BOOLEAN;
ALTER TABLE actividades_aprobadas ADD COLUMN valiosas BOOLEAN;
ALTER TABLE actividades_aprobadas ADD COLUMN material_plantacion_id INTEGER;
ALTER TABLE expedientes ALTER COLUMN anio type character varying(4);
--UPDATE expedientes SET anio = substr(numero_interno,12,2) where anio is null;
UPDATE expedientes SET anio = (anio::integer + 1900)::character varying where anio::integer <=99 and anio::integer>=55;
UPDATE expedientes SET anio = (anio::integer + 2000)::character varying where anio::integer <=54 and anio::integer>=0;

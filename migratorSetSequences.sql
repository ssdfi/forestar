DO $$
DECLARE
i TEXT;
BEGIN
  FOR i IN (SELECT tbls.table_name FROM information_schema.tables AS tbls INNER JOIN information_schema.columns AS cols ON tbls.table_name = cols.table_name WHERE tbls.table_catalog='forestar_febrero' AND tbls.table_schema='public' AND cols.column_name='id') LOOP
	raise notice 'Value: %', i|| '_id_seq';
      IF (SELECT count(*) FROM pg_class c WHERE c.relkind = 'S' AND c.relname = i|| '_id_seq')
	THEN
	EXECUTE 'SELECT setval(''"' || i || '_id_seq"'', (SELECT MAX(id) FROM ' || quote_ident(i) || '));';
	END IF;
  END LOOP;
END $$;
SELECT setval('beneficios_analizados_expedientes_id_seq',(SELECT MAX(id)+1 FROM beneficios_fiscales_analizados));
SELECT setval('beneficios_solicitados_expedientes_id_seq',(SELECT MAX(id)+1 FROM beneficios_fiscales_solicitados));
SELECT setval('evaluacion_legal_id_seq',(SELECT MAX(id)+1 FROM evaluacion_legal));
SELECT setval('evaluacion_tecnico_id_seq',(SELECT MAX(id)+1 FROM evaluacion_tecnico));
SELECT setval('fertilizantes_predios_id_seq',(SELECT MAX(id)+1 FROM fertilizantes));
SELECT setval('herbicidas_predios_id_seq',(SELECT MAX(id)+1 FROM herbicidas));
SELECT setval('historialsig_id_seq',(SELECT MAX(id)+1 FROM historial_sig));
SELECT setval('malezas_predios_id_seq',(SELECT MAX(id)+1 FROM control_malezas));
SELECT setval('otbn_id_seq',(SELECT MAX(id)+1 FROM otbn));
SELECT setval('plagas_predios_id_seq',(SELECT MAX(id)+1 FROM control_plagas));
SELECT setval('plantaciones_predios_id_seq',(SELECT MAX(id)+1 FROM metodos_plantaciones));
SELECT setval('preparacion_suelo_predios_id_seq',(SELECT MAX(id)+1 FROM preparacion_suelo));
SELECT setval('sistematizaciones_predios_id_seq',(SELECT MAX(id)+1 FROM sistematizaciones));
SELECT setval('tipos_malezas_id_seq',(SELECT MAX(id)+1 FROM tipos_control_malezas));
SELECT setval('tipos_plantacion_id_seq',(SELECT MAX(id)+1 FROM control_malezas));

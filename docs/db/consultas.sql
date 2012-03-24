/*
 *      consulta.sql
 *      
 */
-- Se requiere hacer una consulta SQL en donde apartir de los datos:
-- people.fingerprint, la hora del sistema y las areas de acceso en cuestion
-- defina si tiene acceso o no

-- A.- Consulta id(con renombrado person_id)  de people apartir del fingerprint
SELECT id as person_id FROM `people` WHERE fingerprint=123;

-- B.- Consulta del id(client_id) del cliente apartir del peson_id
SELECT id as client_id FROM `clients` WHERE person_id = 1;

-- C.- La union de ambas consultas esto seria.
SELECT id as client_id FROM `clients` WHERE person_id IN (SELECT id AS person_id FROM people WHERE fingerprint=123)

--- Por otra parte Los tipos membresias para cliente con client_id=1 son:
SELECT DISTINCT type_membership_id  FROM `memberships` WHERE client_id = 1;

-- Finalmente membresias que cumplen:
-- 1.- Para la hora actual CURTIME(),
-- 2.- Conceder permisos a las areas 1 y 2
-- 3.- Pertenecer a la persona con fingerprint 123
SELECT COUNT(id) AS c FROM `interval_accesses`
WHERE (CURTIME() BETWEEN start AND end) AND
	( `area_id` = 1 OR `area_id` = 2 ) AND
	`type_membership_id` IN (
		SELECT DISTINCT type_membership_id  FROM `memberships` WHERE client_id IN(
			SELECT id AS client_id FROM `clients` WHERE person_id IN (
				SELECT id AS person_id FROM people WHERE fingerprint=123
			)
		)
	);
/***********************

****************************/
-- C.- La union de ambas consultas esto seria.
SELECT id as user_id FROM `users` WHERE person_id IN (SELECT id AS person_id FROM people WHERE fingerprint=123)

-- consultas de recuperación de dato estadisticos

SELECT * FROM interval_accesses WHERE start<='06:30:00' AND end>='06:50:00';


---
SELECT COUNT('id') AS n FROM clients WHERE id IN (
	SELECT client_id AS id FROM memberships WHERE type_membership_id IN (
		SELECT id type_membership_id FROM interval_accesses WHERE start>='07:00:00' AND end<='07:30:00')
	);

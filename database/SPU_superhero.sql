USE superhero;

SELECT * FROM superhero;  -- 750
SELECT * FROM gender; 
SELECT * FROM publisher; 


DELIMITER $$
CREATE PROCEDURE spu_superhero_list(IN _publisher_id INT)
BEGIN 
	SELECT
	superhero.`id`, superhero.`superhero_name`, superhero.`full_name`,
	gender.`gender`,
	c1.`colour` 'eye_colour',
	c2.`colour`	'hair_colour',
	c3.`colour` 'skin_colour',
	race.`race`,
	publisher.`publisher_name`,
	alignment.`alignment`,
	superhero.`height_cm`, superhero.`weight_kg`
	
	-- INNER JOIN( - toma los datos que existen en ambas tablas)
	-- LEFT JOIN (- toma todos los datos del lado izquierdo )
	-- RIGHT JOIN ( - toma los datos del lado derecho)
		
	FROM superhero
	INNER JOIN gender ON gender.`id` = superhero.`gender_id`
	INNER JOIN colour c1 ON c1.`id` = superhero.`eye_colour_id`
	INNER JOIN colour c2 ON c2.`id` = superhero.`hair_colour_id`
	INNER JOIN colour c3 ON c3.`id` = superhero.`skin_colour_id`
	LEFT JOIN race ON race.`id` = superhero.`race_id`
	LEFT JOIN publisher ON publisher.`id` = superhero.`publisher_id` -- LEFT JOIN (une las foraneas nulas)
	LEFT JOIN alignment ON alignment.`id` = superhero.`alignment_id`
	WHERE superhero.`publisher_id` = _publisher_id
	ORDER BY superhero.`id`;
END $$

CALL spu_superhero_list(4);


DELIMITER $$
CREATE PROCEDURE spu_mostrar_filtrado
(
IN _race_id 	INT,
IN _gender_id 	INT,
IN _bando_id 	INT
)

BEGIN
		SELECT
	superhero.`id`, superhero.`superhero_name`,
	c2.`colour`	'hair_colour',
	publisher.`publisher_name`,
	superhero.`weight_kg`
		
	FROM superhero
	INNER JOIN gender ON gender.`id` = superhero.`gender_id`
	INNER JOIN colour c2 ON c2.`id` = superhero.`hair_colour_id`
	LEFT JOIN race ON race.`id` = superhero.`race_id`
	LEFT JOIN publisher ON publisher.`id` = superhero.`publisher_id` 
	LEFT JOIN alignment ON alignment.`id` = superhero.`alignment_id`
	WHERE race.`id` = _race_id AND gender.`id` = _gender_id AND alignment.`id` = _bando_id;
END $$

CALL spu_mostrar_filtrado(1, 2 ,1);



SELECT * FROM race;
SELECT * FROM gender;
SELECT * FROM alignment;

DELIMITER $$
CREATE PROCEDURE spu_mostrar_superhero()
BEGIN

SELECT *
FROM  publisher;

END $$

CALL spu_mostrar_superhero;





	
	

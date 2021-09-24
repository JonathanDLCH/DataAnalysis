CREATE TABLE table_name( <column1> datatype, <column2> datatype)
INSERT INTO `incidente` (`id`, `texto`) VALUES (<idint>,<textoString>)
/*Ordenamos los elementos por id de forma ascendente*/
SELECT * FROM `incidente` ORDER BY id ASC

SELECT * REPLACE(texto,'Pasar al contenido principal ','') FROM incidente WHERE texto IS NOT NULL
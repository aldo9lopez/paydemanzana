/*Mejores PRofesores*/
SELECT (AVG(C.Estrellas) + (.25 * (COUNT(CASE WHEN C.Manzana='Buena' THEN 1 ELSE NULL END))) - 
(.25 * (COUNT(CASE WHEN C.Manzana='Mala' THEN 1 ELSE NULL END)))) AS Indice, AVG(C.Estrellas) 
AS Promedio, COUNT(CASE WHEN C.Manzana='Buena' THEN 1 ELSE NULL END) As ManzanasB, COUNT(CASE 
WHEN C.Manzana='Mala' THEN 1 ELSE NULL END) As ManzanasM, (SELECT CONCAT(D.Titulo,' ',D.Nombre) 
FROM profesor D WHERE C.Profesor=D.Id_profesor) AS Profesor FROM calificacion C WHERE EXISTS
(SELECT A.Profesor FROM calificacion A WHERE EXISTS(SELECT B.Id_materia FROM materia B WHERE 
A.Materia=B.Id_materia AND B.Carrera=1) AND A.Profesor = C.Profesor) GROUP BY C.Profesor 
ORDER BY Indice DESC LIMIT 10

/* Peores Profesores*/
SELECT (AVG(C.Estrellas) + (.25 * (COUNT(CASE WHEN C.Manzana='Buena' THEN 1 ELSE NULL END))) - 
(.25 * (COUNT(CASE WHEN C.Manzana='Mala' THEN 1 ELSE NULL END)))) AS Indice, AVG(C.Estrellas) 
AS Promedio, COUNT(CASE WHEN C.Manzana='Buena' THEN 1 ELSE NULL END) As ManzanasB, COUNT(CASE 
WHEN C.Manzana='Mala' THEN 1 ELSE NULL END) As ManzanasM, (SELECT CONCAT(D.Titulo,' ',D.Nombre) 
FROM profesor D WHERE C.Profesor=D.Id_profesor) AS Profesor FROM calificacion C WHERE EXISTS
(SELECT A.Profesor FROM calificacion A WHERE EXISTS(SELECT B.Id_materia FROM materia B WHERE 
A.Materia=B.Id_materia AND B.Carrera=1) AND A.Profesor = C.Profesor) GROUP BY C.Profesor 
ORDER BY Indice LIMIT 5
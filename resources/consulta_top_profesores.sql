/*Mejores PRofesores*/
SELECT (AVG(C.Estrellas) + (.25 * (COUNT(CASE WHEN C.Manzana='Buena' THEN 1 ELSE NULL END))) - 
(.25 * (COUNT(CASE WHEN C.Manzana='Mala' THEN 1 ELSE NULL END)))) AS Indice, AVG(C.Estrellas) 
AS Promedio, COUNT(CASE WHEN C.Manzana='Buena' THEN 1 ELSE NULL END) As Manzanas, 
(SELECT CONCAT(D.Titulo,' ',D.Nombre) FROM profesor D WHERE C.Profesor=D.Id_profesor) 
AS Profesor, 'buena' AS Tipo FROM calificacion C WHERE EXISTS
(SELECT A.Profesor FROM calificacion A WHERE EXISTS(SELECT B.Id_materia FROM materia B WHERE 
A.Materia=B.Id_materia AND B.Carrera=1) AND A.Profesor = C.Profesor) GROUP BY C.Profesor 
ORDER BY Indice DESC LIMIT 10

/* Peores Profesores*/
SELECT (AVG(C.Estrellas) + (.25 * (COUNT(CASE WHEN C.Manzana='Buena' THEN 1 ELSE NULL END))) - 
(.25 * (COUNT(CASE WHEN C.Manzana='Mala' THEN 1 ELSE NULL END)))) AS Indice, AVG(C.Estrellas) 
AS Promedio, COUNT(CASE WHEN C.Manzana='Mala' THEN 1 ELSE NULL END) As Manzanas, (SELECT CONCAT(D.Titulo,' ',D.Nombre) 
FROM profesor D WHERE C.Profesor=D.Id_profesor) AS Profesor, 'mala' AS Tipo FROM calificacion C 
WHERE EXISTS (SELECT A.Profesor FROM calificacion A WHERE EXISTS(SELECT B.Id_materia FROM materia B WHERE 
A.Materia=B.Id_materia AND B.Carrera=1) AND A.Profesor = C.Profesor) GROUP BY C.Profesor 
ORDER BY Indice LIMIT 5

/* Peores Materias */
SELECT (SELECT M.Nombre_materia FROM materia M WHERE M.Id_materia = C.Materia) as Materia, 
((SELECT COUNT(Case WHEN A.Estatus = 'Reprobada' THEN 1 END) FROM calificacion A WHERE A.Materia = C.Materia) * 100) / 
(SELECT COUNT(*) FROM calificacion B WHERE B.Materia = C.Materia) AS Porcentaje FROM calificacion C WHERE 
EXISTS(SELECT G.Id_materia FROM materia G WHERE G.Id_materia=C.Materia AND G.Carrera=1) GROUP BY C.Materia 
ORDER BY Porcentaje DESC LIMIT 5
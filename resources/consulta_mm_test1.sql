/*SELECT b.Usuario, b.Suma FROM 
(SELECT (l.suma + c.suma + d.suma + e.suma + f.suma + g.suma + h.suma + i.suma + j.suma + k.suma) as Suma, l.Usuario FROM
(SELECT 1 as suma,l.Usuario FROM mm_test1 l,(SELECT * FROM mm_test1 WHERE Usuario = '14240343') a WHERE l.Q1=a.Q1 AND l.Usuario!= '14240343') l,
(SELECT 1 as suma,c.Usuario FROM mm_test1 c,(SELECT * FROM mm_test1 WHERE Usuario = '14240343') a WHERE c.Q2=a.Q2 AND c.Usuario!= '14240343') c,
(SELECT 1 as suma,d.Usuario FROM mm_test1 d,(SELECT * FROM mm_test1 WHERE Usuario = '14240343') a WHERE d.Q3=a.Q3 AND d.Usuario!= '14240343') d,
(SELECT 1 as suma,e.Usuario FROM mm_test1 e,(SELECT * FROM mm_test1 WHERE Usuario = '14240343') a WHERE e.Q4=a.Q4 AND e.Usuario!= '14240343') e,
(SELECT 1 as suma,f.Usuario FROM mm_test1 f,(SELECT * FROM mm_test1 WHERE Usuario = '14240343') a WHERE f.Q5=a.Q5 AND f.Usuario!= '14240343') f,
(SELECT 1 as suma,g.Usuario FROM mm_test1 g,(SELECT * FROM mm_test1 WHERE Usuario = '14240343') a WHERE g.Q6=a.Q6 AND g.Usuario!= '14240343') g,
(SELECT 1 as suma,h.Usuario FROM mm_test1 h,(SELECT * FROM mm_test1 WHERE Usuario = '14240343') a WHERE h.Q7=a.Q7 AND h.Usuario!= '14240343') h,
(SELECT 1 as suma,i.Usuario FROM mm_test1 i,(SELECT * FROM mm_test1 WHERE Usuario = '14240343') a WHERE i.Q8=a.Q8 AND i.Usuario!= '14240343') i,
(SELECT 1 as suma,j.Usuario FROM mm_test1 j,(SELECT * FROM mm_test1 WHERE Usuario = '14240343') a WHERE j.Q9=a.Q9 AND j.Usuario!= '14240343') j,
(SELECT 1 as suma,k.Usuario FROM mm_test1 k,(SELECT * FROM mm_test1 WHERE Usuario = '14240343') a WHERE k.Q10=a.Q10 AND k.Usuario!= '14240343') k
WHERE l.Usuario=c.Usuario AND l.Usuario = d.Usuario AND l.Usuario = e.Usuario AND l.Usuario = f.Usuario AND l.Usuario = g.Usuario
 AND l.Usuario = h.Usuario AND l.Usuario = i.Usuario AND l.Usuario = j.Usuario AND l.Usuario = k.Usuario) b*/



SELECT Usuario, (((c+d+e+f+g+h+i+j+k+l+n+o+p+q)*100)/14) as Suma FROM 
(SELECT a.Usuario, 
IF(a.Q1 = b.Q1 ,1,0) as c,IF(a.Q2 = b.Q2 ,1,0) as d,IF(a.Q3 = b.Q3 ,1,0) as e,
IF(a.Q4 = b.Q4 ,1,0) as f,IF(a.Q5 = b.Q5 ,1,0) as g,IF(a.Q6 = b.Q6 ,1,0) as h,
IF(a.Q7 = b.Q7 ,1,0) as i,IF(a.Q8 = b.Q8 ,1,0) as j,IF(a.Q9 = b.Q9 ,1,0) as k,
IF(a.Q10 = b.Q10 ,1,0) as l,IF(r.Q1 = s.Q1 ,1,0) as n,IF(r.Q5 = s.Q5 ,1,0) as o,
IF(r.Q8 = s.Q8 ,1,0) as p,IF(r.Q10 = s.Q10 ,1,0) as q
FROM mm_test1 a, (SELECT * FROM mm_test1 WHERE Usuario = '14240343') b , 
mm_test3 r, (SELECT * FROM mm_test3 WHERE Usuario = '14240343') s 
WHERE r.Usuario = a.Usuario) m
WHERE Usuario != '14240343' AND 
EXISTS(SELECT No_control FROM usuario u WHERE (u.Sexo = 'Femenino' OR u.Sexo='Sin especificar') AND u.No_control = m.Usuario) 
ORDER BY Suma DESC


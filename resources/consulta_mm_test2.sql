SELECT Usuario, (((c+d+e+f+g+h+i+j+k+l+n+o+p+q)*100)/14) as Suma FROM 
(SELECT a.Usuario, 
IF(a.Q1 = b.Q1 ,1,0) as c,IF(a.Q2 = b.Q2 ,1,0) as d,IF(a.Q3 = b.Q3 ,1,0) as e,
IF(a.Q4 = b.Q4 ,1,0) as f,IF(a.Q5 = b.Q5 ,1,0) as g,IF(a.Q6 = b.Q6 ,1,0) as h,
IF(a.Q7 = b.Q7 ,1,0) as i,IF(a.Q8 = b.Q8 ,1,0) as j,IF(a.Q9 = b.Q9 ,1,0) as k,
IF(a.Q10 = b.Q10 ,1,0) as l,IF(r.Q2 = s.Q2 ,1,0) as n,IF(r.Q3 = s.Q3 ,1,0) as o,
IF(r.Q6 = s.Q6 ,1,0) as p,IF(r.Q9 = s.Q9 ,1,0) as q
FROM mm_test2 a, (SELECT * FROM mm_test2 WHERE Usuario = '14240343') b , 
mm_test3 r, (SELECT * FROM mm_test3 WHERE Usuario = '14240343') s 
WHERE r.Usuario = a.Usuario) m
WHERE Usuario != '14240343' AND 
EXISTS(SELECT No_control FROM usuario u WHERE (u.Sexo = 'Femenino' OR u.Sexo='Sin especificar') AND u.No_control = m.Usuario) 
ORDER BY Suma DESC
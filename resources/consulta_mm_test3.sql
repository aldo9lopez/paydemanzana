SELECT Usuario, (((c+d+e+f+g+h+i+j+k+l+cc+dd+ee+ff+gg+hh+ii+jj+kk+ll+ccc+ddd+eee+fff+ggg+hhh+iii+jjj+kkk+lll)*100)/30) as Suma FROM 
(SELECT a.Usuario, 
IF(a.Q1 = b.Q1 ,1,0) as c,IF(a.Q2 = b.Q2 ,1,0) as d,IF(a.Q3 = b.Q3 ,1,0) as e,
IF(a.Q4 = b.Q4 ,1,0) as f,IF(a.Q5 = b.Q5 ,1,0) as g,IF(a.Q6 = b.Q6 ,1,0) as h,
IF(a.Q7 = b.Q7 ,1,0) as i,IF(a.Q8 = b.Q8 ,1,0) as j,IF(a.Q9 = b.Q9 ,1,0) as k,
IF(a.Q10 = b.Q10 ,1,0) as l, 
IF(aa.Q1 = bb.Q1 ,1,0) as cc,IF(aa.Q2 = bb.Q2 ,1,0) as dd,IF(aa.Q3 = bb.Q3 ,1,0) as ee,
IF(aa.Q4 = bb.Q4 ,1,0) as ff,IF(aa.Q5 = bb.Q5 ,1,0) as gg,IF(aa.Q6 = bb.Q6 ,1,0) as hh,
IF(aa.Q7 = bb.Q7 ,1,0) as ii,IF(aa.Q8 = bb.Q8 ,1,0) as jj,IF(aa.Q9 = bb.Q9 ,1,0) as kk,
IF(aa.Q10 = bb.Q10 ,1,0) as ll, 
IF(aaa.Q1 = bbb.Q1 ,1,0) as ccc,IF(aaa.Q2 = bbb.Q2 ,1,0) as ddd,IF(aaa.Q3 = bbb.Q3 ,1,0) as eee,
IF(aaa.Q4 = bbb.Q4 ,1,0) as fff,IF(aaa.Q5 = bbb.Q5 ,1,0) as ggg,IF(aaa.Q6 = bbb.Q6 ,1,0) as hhh,
IF(aaa.Q7 = bbb.Q7 ,1,0) as iii,IF(aaa.Q8 = bbb.Q8 ,1,0) as jjj,IF(aaa.Q9 = bbb.Q9 ,1,0) as kkk,
IF(aaa.Q10 = bbb.Q10 ,1,0) as lll
FROM mm_test1 a, (SELECT * FROM mm_test1 WHERE Usuario = '14240343') b , 
mm_test2 aa, (SELECT * FROM mm_test2 WHERE Usuario = '14240343') bb,
mm_test3 aaa, (SELECT * FROM mm_test3 WHERE Usuario = '14240343') bbb 
WHERE aa.Usuario = a.Usuario AND aaa.Usuario = a.Usuario) m
WHERE Usuario != '14240343' AND 
EXISTS(SELECT No_control FROM usuario u WHERE (u.Sexo = 'Femenino' OR u.Sexo='Sin especificar') AND u.No_control = m.Usuario) 
ORDER BY Suma DESC
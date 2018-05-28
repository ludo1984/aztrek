USE ecolidaire;

SELECT
project.id,
project.title,
project.picture,
project.price,
project.date_start,
DATE_FORMAT(project.date_start, '%d/%m/%Y') AS date_start,
category.label AS category,
COUNT(DISTINCT(project_has_member.member_id)) AS nb_members,
AVG(notation.grade) AS grade
FROM project
INNER JOIN category ON project.category_id = category.id
LEFT JOIN project_has_member ON project_has_member.project_id = project.id
LEFT JOIN notation ON notation.project_id = project.id
GROUP BY project.id
ORDER BY project.date_start DESC 
LIMIT 3; 

SELECT 
project.*,
DATE_FORMAT(project.date_start, '%e %M %Y') AS date_start_format, 
DATEDIFF(project.date_end, project.date_start) AS days, 
category.label AS category
FROM project
INNER JOIN category On category.id = project.category_id
WHERE project.id = 2;

SELECT member.*,
CONCAT (member.firstname, ' ', member.lastname) AS fullname
FROM member
LEFT JOIN project_has_member ON project_has_member.member_id = member.id
WHERE project_has_member.project_id = 1;


SELECT *
FROM project_picture;
WHERE project_picture.project_id = 2;
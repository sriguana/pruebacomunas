SELECT
	c.id AS commune_id,
    c.name AS commune_name,
    p.id AS province_id,
    p.name AS province_name,
    r.id AS region_id,
    r.name AS region_name
FROM
	commune c,
    province p,
    region r
WHERE
	(c.province_id = p.id) AND
    (p.region_id = r.id) AND
    (((r.name LIKE '%san%') OR (p.name LIKE '%san%') OR (c.name LIKE '%san%')) OR ((r.name LIKE '%ango%') OR (p.name LIKE '%ango%') OR (c.name LIKE '%ango%')) OR ((r.name LIKE '%hig%') OR (p.name LIKE '%hig%') OR (c.name LIKE '%hig%')));
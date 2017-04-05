<?php
include('../connection.php');  

		
		$query = mysql_query("SELECT
	MONTHNAME(date_article) AS a,
	YEAR (date_article) AS b,
	DAYOFMONTH(date_article) AS c,
	title_article,
	content_article,
	name_image,
	id_article,
	author
FROM
	article
ORDER BY
	date_article DESC
LIMIT 1") or die(mysql_error());
		
		
		
			while($data = mysql_fetch_assoc($query))
			{
			 $id = $data['id_article'];
			 $title = $data['title_article'];
			 $month = $data['a'];
			 $day = $data['c'];
			 $year = $data['b'];
			 $content = substr($data['content_article'],0,150);
			 $n_image = $data['name_image'];
			 $author = $data['author'];

			}
		

?>







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
	author,
	id_category
FROM
	article WHERE id_category='$id'
ORDER BY
	id_article DESC
LIMIT 3") or die(mysql_error());
		
		
		
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

			 echo '<li><a href="../blog/detail-blog.php?id='.$id.'">'.$title.'</a></li>';


			}
		

?>



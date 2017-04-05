
	<?php


	include('../connection.php');  
	
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT
	MONTHNAME(article.date_article) AS a,
	YEAR (article.date_article) AS b,
	DAYOFMONTH(article.date_article) AS c,
	article.title_article,
	article.content_article,
	article.name_image,
	article.id_article,
category.id_category,
category.name_category,
article.author
FROM
	article INNER JOIN category on article.id_category=category.id_category WHERE article.id_article='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
	
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
		
		 	 $id = $data['id_article'];
			 $title = $data['title_article'];
			 $month = $data['a'];
			 $day = $data['c'];
			 $year = $data['b'];
			 $content = $data['content_article'];
			 $n_image = $data['name_image'];
			 $tag = $data['name_category'];
			 $author = $data['author'];
	}
	?>

	
	


              <?php 



              

include('../connection.php');  

 



   $input_cari = @$_POST['input_cari']; 

   $cari = @$_POST['cari'];



   // jika tombol cari di klik

   if($cari) {



    // jika kotak pencarian tidak sama dengan kosong

    if($input_cari != "") {

    

    $sql = mysql_query("SELECT

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

  article INNER JOIN category on article.id_category=category.id_category WHERE article.title_article LIKE '%$input_cari%'") or die (mysql_error());

    }

    } else {

    $sql = mysql_query("SELECT

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

  article INNER JOIN category on article.id_category=category.id_category WHERE article.title_article LIKE '%$input_cari%'") or die (mysql_error());

    }



   // mengecek data

   $cek = mysql_num_rows($sql);

   // jika data kurang dari 1

   if($cek < 1) {

       $id = '';

       $title = '';

       $month = '';

       $day = '';

       $year = '';

       $content = '';

       $n_image = 'nodata';

       $tag = '';

       $author = '';





    ?>

    

    <?php

   } else {



   // mengulangi data agar tidak hanya 1 yang tampil

   while($data = mysql_fetch_array($sql)) {



       $id = $data['id_article'];

       $title = $data['title_article'];

       $month = $data['a'];

       $day = $data['c'];

       $year = $data['b'];

       $content = $data['content_article'];

       $n_image = $data['name_image'];

       $tag = $data['name_category'];

       $author = $data['author'];



   ?>

   

  <?php 



  } 

 }

?>




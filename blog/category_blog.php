


<?php
include('../connection.php');  
$id = $_GET['id'];
    
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
  id_article ASC") or die(mysql_error());
    
    
    
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

      echo '<article class="blog col-4">';

          echo '<div class="image" style="background-image: url(../assets/img/blog-images/bromo/'.$n_image.'.jpg)">'.'</div>';
          echo '<div class="inner">';

            echo '<header>';
              echo '<h4>'.$title.'</h4>';
              echo '<div class="vcard">';
                echo '<div class="date">'.'On <time>'.$month.'&nbsp;'.$day.', '.$year.'</time></div>';
                echo '<address class="author"> by <a href="#" class="fn">'.$author.'</a></address>';
              echo '</div>';
            echo '</header>';
            echo '<p>'.$content.'</p>';
            echo '<a href="../blog/detail-blog.php?id='.$id.'" class="read-more">Read more</a>';
          echo '</div>';
        echo '</article>';


      }
    

?>



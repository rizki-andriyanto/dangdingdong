                

<?php

  /*

    Place code to connect to your DB here.

  */

  include('../connection.php');  // include your code to connect to DB.



  $tbl_name="portfolio";   //your table name

  

  /* Get data. */

  $sql = "SELECT

  MONTHNAME(date_portfolio) AS a,

  YEAR (date_portfolio) AS b,

  DAYOFMONTH(date_portfolio) AS c,

  name_portfolio,

  description_portfolio,

  id_category,

  name_image,

  id_portfolio,

  author,

  filter

  

FROM

  $tbl_name ORDER BY

  id_portfolio ";





  $result = mysql_query($sql);

  

  

  

    while($row = mysql_fetch_array($result))

    {





      $id = $row['id_portfolio'];

      $title = $row['name_portfolio'];

      $month = $row['a'];

      $day = $row['c'];

      $year = $row['b'];

      $content = $row['description_portfolio'];

      $n_image = $row['name_image'];

      $author = $row['author'];

      $category = $row['filter'];

    



      



        echo '<article class="portfolio isotope-item '.$category.' col-6">';



          echo '<a href="portfolio_full.php?id='.$id.'" class="image" style="background-image: url(../assets/img/portfolio-images/'.$n_image.'.jpg)">'.'</a>';

          echo '<div class="inner">';



            echo '<header>';

              echo '<h3>'.$title.'</h3>';

            echo '</header>';

            

            

          echo '</div>';

        echo '</article>';

  

    

  

    }



  ?>


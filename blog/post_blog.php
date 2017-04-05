

                
<?php
  /*
    Place code to connect to your DB here.
  */
  include('../connection.php');  // include your code to connect to DB.

  $tbl_name="article";   //your table name
  // How many adjacent pages should be shown on each side?
  $adjacents = 3;
  
  /* 
     First get total number of rows in data table. 
     If you have a WHERE clause in your query, make sure you mirror it here.
  */
  $query = "SELECT COUNT(*) as num FROM $tbl_name";
  $total_pages = mysql_fetch_array(mysql_query($query));
  $total_pages = $total_pages['num'];
  
  /* Setup vars for query. */
  $targetpage = "index.php";   //your file name  (the name of this file)
  $limit = 4;   
  $page = isset($_GET['page']) ? $_GET['page'] : null;              //how many items to show per page
  
  if($page) 
    $start = ($page - 1) * $limit;      //first item to display on this page
  else
    $start = 0;               //if no page var is given, set start to 0
  
  /* Get data. */
  $sql = "SELECT
  MONTHNAME(date_article) AS a,
  YEAR (date_article) AS b,
  DAYOFMONTH(date_article) AS c,
  title_article,
  content_article,
  name_image,
  id_article,
  author
FROM
  $tbl_name ORDER BY
  id_article ASC
 LIMIT $start, $limit";

$result = mysql_query($sql);
  
  
  /* Setup page vars for display. */
  if ($page == 0) $page = 1;          //if no page var is given, default to 1.
  $prev = $page - 1;              //previous page is page - 1
  $next = $page + 1;              //next page is page + 1
  $lastpage = ceil($total_pages/$limit);    //lastpage is = total pages / items per page, rounded up.
  $lpm1 = $lastpage - 1;            //last page minus 1
  
  /* 
    Now we apply our rules and draw the pagination object. 
    We're actually saving the code to a variable in case we want to draw it more than once.
  */
   
  $pagination = "";
  if($lastpage > 1)
  { 
    $pagination .= "<div class=\"pagination-row row\">";
    $pagination.= "<div class=\"col-12\">";
    $pagination.= "<ul class=\"pag\">";
    
    //previous button
    if ($page > 1) 
      $pagination.= "&nbsp;<li><a href=\"$targetpage?page=$prev\">&laquo;</a></li>";
    else
      $pagination.= "<li class=\"disabled\"><a>&laquo;</a></li>";

     
    
    //pages 
    if ($lastpage < 7 + ($adjacents * 2)) //not enough pages to bother breaking it up
    { 
      for ($counter = 1; $counter <= $lastpage; $counter++)
      {
        if ($counter == $page)
          $pagination.= "&nbsp;<li class=\"active\"><a>$counter</a></li>";
        else
           $pagination.= "&nbsp;<li><a href=\"$targetpage?page=$counter\">$counter</a></li>";        
      }
    }
    elseif($lastpage > 5 + ($adjacents * 2))  //enough pages to hide some
    {
      //close to beginning; only hide later pages
      if($page < 1 + ($adjacents * 2))    
      {
        for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
        {
          if ($counter == $page)
           $pagination.= "&nbsp;<li class=\"active\"><a>$counter</a></li>";
          else
             $pagination.= "&nbsp;<li><a href=\"$targetpage?page=$counter\">$counter</a></li>";          
        }
        $pagination.= "<b>&nbsp;.&nbsp;.&nbsp;.&nbsp;</b>";
        $pagination.= "&nbsp;<li><a href=\"$targetpage?page=$lpm1\">$lpm1</a></li>";
        $pagination.= "&nbsp;<li><a href=\"$targetpage?page=$lastpage\">$lastpage</a></li>";   
      }
      //in middle; hide some front and some back
      elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
      {
        $pagination.= "&nbsp;<li><a href=\"$targetpage?page=1\">1</a></li>";
        $pagination.= "&nbsp;<li><a href=\"$targetpage?page=2\">2</a></li>";
        $pagination.= "<b>&nbsp;.&nbsp;.&nbsp;.&nbsp;</b>";
        for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
        {
          if ($counter == $page)
           $pagination.= "&nbsp;<li class=\"active\"><a>$counter</a></li>";
          else
            $pagination.= "&nbsp;<li><a href=\"$targetpage?page=$counter\">$counter</a></li>"; 


        }
      $pagination.= "<b>&nbsp;.&nbsp;.&nbsp;.&nbsp;</b>";
        $pagination.= "&nbsp;<li><a href=\"$targetpage?page=$lpm1\">$lpm1</a></li>";
        $pagination.= "&nbsp;<li><a href=\"$targetpage?page=$lastpage\">$lastpage</a></li>";   
      }
      //close to end; only hide early pages
      else
      {
        $pagination.= "&nbsp;<li><a href=\"$targetpage?page=1\">1</a></li>";
        $pagination.= "&nbsp;<li><a href=\"$targetpage?page=2\">2</a></li>";
        $pagination.= "<b>&nbsp;.&nbsp;.&nbsp;.&nbsp;</b>";
        for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
        {
          if ($counter == $page)
            $pagination.= "&nbsp;<li class=\"active\"><a>$counter</a></li>";
          else
            $pagination.= "&nbsp;<li><a href=\"$targetpage?page=$counter\">$counter</a></li>";         
        }
      }
    }
 
    
    
    //next button
    if ($page < $counter - 1) 
      $pagination.= "&nbsp;<li><a href=\"$targetpage?page=$next\">&raquo;</a></li>";
    else
      $pagination.= "&nbsp;<li class=\"disabled\"><a>&raquo;</a></li>";
    $pagination.= "</ul>"; 
    $pagination.= "</div>"; 
    $pagination.= "</div>";   
  }
?>
    
  <?php
    while($row = mysql_fetch_array($result))
    {


      $id = $row['id_article'];
      $title = $row['title_article'];
      $month = $row['a'];
      $day = $row['c'];
      $year = $row['b'];
      $content = substr($row['content_article'],0,150);
      $n_image = $row['name_image'];
      $author = $row['author'];
    



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
            echo '<a href="detail-blog.php?id='.$id.'" class="read-more">Read more</a>';
          echo '</div>';
        echo '</article>';
  
    
  
    }

  ?>



                
  
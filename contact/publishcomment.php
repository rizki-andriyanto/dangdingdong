<?php
$con=mysql_connect("localhost", "root", "");
if(!$con)
die("Tidak dapat melakukan koneksi ke server MySQL");
mysql_select_db("website_ray8", $con);
?>
<?php
function getcomment($art_id){
$commentquery = mysql_query("SELECT * FROM message WHERE art_id='$art_id'
ORDER BY id DESC") or die(mysql_error());
$commentNum = mysql_num_rows($commentquery);
echo "<h4>" . "Current message(s)..." . "</h4>";
echo "<b>" . $commentNum . " message(s) so far. Leave a message..." .
"</b>" . "<br />" . "<br />";
echo "<hr>";
while($row = mysql_fetch_array($commentquery))
 {
 echo "<b>" . $row['nama'] . "</b>" . " " . " | " . " " . "<i>" .
$row['date'] . "</i>" . "<br />" . "<br />" . $row['message'] . "<br />";
 echo "<hr>";
 }
}
?>
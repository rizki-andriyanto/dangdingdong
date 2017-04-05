<?php
if($_POST["tombol"]=="Kirim")
{
$nama=$_POST["nama"];
$email=$_POST["email"];
$website=$_POST["website"];
$message=$_POST["message"];
$art_id=$_POST["art_id"];
$art_url=$_POST["art_url"];
if(empty($nama))
$_POST["nama"]='anonymous';
if(empty($message)){
echo "<meta http-equiv='refresh' content='2; url=$art_url'>";
die("komentar harus diisi");}
}
//connect database
$con=mysql_connect("localhost", "root", "");
if(!$con)
die("Tidak dapat melakukan koneksi ke server MySQL");
//Menampilkan data
mysql_select_db("website_ray8", $con);
$sql="INSERT INTO message (nama, email, website, message, art_id, art_url,
date)
VALUES
('$_POST[nama]','$_POST[email]','$_POST[website]', '$_POST[message]',
'$_POST[art_id]', '$_POST[art_url]', NOW())";
if (!mysql_query($sql,$con))
 {
 die('Error: ' . mysql_error());
 }
echo "<meta http-equiv='refresh' content='0; url=$art_url'>";
//Memutuskan koneksi
mysql_close($con);
?>

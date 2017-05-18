<?php
require('config.php');
require('header.html');
if(empty($_GET['id']))
{
while($row = $asd2->fetchArray(SQLITE3_ASSOC)){
      echo '<hr><center><b><a href="index.php?id='.$nic.'" style="text-decoration: none;">'.$row['tytul'].'</a></b></center><hr>Added at: '.$row['data'].'<br><br>'.strip_tags($row['tekst']).'<br><br>';
	$nic = $nic - 1;
   }
}
else
{
if (is_numeric($_GET["id"]))
{
$gid=$_GET["id"];
$file = $asd->query('SELECT * FROM asd WHERE ID='.$gid.'');
if(!empty($file))
{
while($row = $file->fetchArray(SQLITE3_ASSOC)){
echo '<hr><center><b><a href="index.php?id='.$gid.'" style="text-decoration: none;">'.$row['tytul'].'</a></b></center><hr>Added at: '.$row['data'].'<br><br>'.strip_tags($row['tekst']).'<br><br>';
}
echo'<center><h4><font style="color: blue;"><i>~~~~~~~~~~ Comments ~~~~~~~~~~</i></font></h4></center>';
}
}
else
{
echo 'Notes not found!';
}
}
$asd->close();
include('footer.html');
?>

<?php
require('config.php');
require('header.html');
if(empty($_GET['id']))
{
while($row = $dbs->fetchArray(SQLITE3_ASSOC)){
	$tfr = $row['news'];
        $stags = strip_tags($tfr, $tags);
	echo '<hr><center><b><a href="index.php?id='.$nic.'" style="text-decoration: none;">'.$row['title'].'</a></b></center><hr>Added at: '.$row['date'].'<br><br>'.$stags.'<br><br>';
	$nic = $nic - 1;
   }
}
else
{
if (is_numeric($_GET["id"]))
{
$gid=$_GET["id"];
$file = $db->query('SELECT * FROM tablename WHERE ID='.$gid.'');
if(!empty($file))
{
	while($row = $file->fetchArray(SQLITE3_ASSOC)){
	$tfr = $row['news'];
	$stags = strip_tags($tfr, $tags);
	echo '<hr><center><b><a href="index.php?id='.$gid.'" style="text-decoration: none;">'.$row['title'].'</a></b></center><hr>Added at: '.$row['date'].'<br><br>'.$stags.'<br><br>';
}
echo'<center><h4><font style="color: blue;"><i>~~~~~~~~~~ Comments ~~~~~~~~~~</i></font></h4></center>';
}
}
else
{
echo 'Notes not found!';
}
}
$db->close();
include('footer.html');
?>

<?php
require('config.php');
require('header.html');
require('navbar.html');
if(empty($_GET['id']))
{
if(empty($_GET['page']))
{
$page=1;
}
else
{
$page=$_GET['page'];
}
for($i=($ic2['count'])-(($page-1)*$app); $i>(($ic2['count'])-(($page-1)*$app))-1; $i--)
{

if($page == 1)$newid=$ic2['count'];
else if($page > 1)$newid=$ic2['count'] -  $page;

while($row = $dbs->fetchArray(SQLITE3_ASSOC)){
        $tfr = $row['tekst'];
        $stags = strip_tags($tfr, $tags);
            echo'
                        <div class="card notka">
            <div class="card-block">
            <h4 class="card-title"><a href="index.php?id='.$newid.'" style="text-decoration: none;">'.$row['tytul'].'</a></h4>
            <h6 class="card-subtitle mb-2 text-muted">'.$row['data'].'</h6>
            <p class="card-text">'.$stags.'</p>
            <a href="#" class="card-link">First link</a>
            <a href="#" class="card-link">Second link</a></div></div>
          ';

        $newid = $newid - 1;
   }
}
echo '<ul class="pagination justify-content-center">';
for ($i=1; $i <= ($ic2['count']/$app); $i++)
{

    <li class="page-item"><a class="page-link" href="#">1</a></li>
';
echo '<a href="index.php?page='.$i.'"><b>&nbsp'.$i.'&nbsp</b></a>';
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
	echo'
		<div class="card notka">
		<div class="card-block">
		<h4 class="card-title"><a href="index.php?id='.$gid.'" style="text-decoration: none;">'.$row['title'].'</a></h4>
		<h6 class="card-subtitle mb-2 text-muted">'.$row['date'].'</h6>
		<p class="card-text">'.$stags.'</p>
		<a href="#" class="card-link">First link</a>
		<a href="#" class="card-link">Second link</a>
		<center><h4><font style="color: #f39c12"><i>~~~~~~~~~~ Comments ~~~~~~~~~~</i></font></h4></center></div></div>
        ';
}
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
<?php
require('config.php');
require('header.html');
require('navbar.html');
if(empty($_GET['id']))
{
if(empty($_GET['page']))
{
$page=1;
}
else
{
$page=$_GET['page'];
}
for($i=($ic2['count'])-(($page-1)*$app); $i>(($ic2['count'])-(($page-1)*$app))-1; $i--)
{

if($page == 1)$newid=$ic2['count'];
else if($page > 1)$newid=$ic2['count'] -  $page;

while($row = $dbs->fetchArray(SQLITE3_ASSOC)){
        $tfr = $row['tekst'];
        $stags = strip_tags($tfr, $tags);
            echo'
                        <div class="card notka">
            <div class="card-block">
            <h4 class="card-title"><a href="index.php?id='.$newid.'" style="text-decoration: none;">'.$row['tytul'].'</a></h4>
            <h6 class="card-subtitle mb-2 text-muted">'.$row['data'].'</h6>
            <p class="card-text">'.$stags.'</p>
            <a href="#" class="card-link">First link</a>
            <a href="#" class="card-link">Second link</a></div></div>
          ';

        $newid = $newid - 1;
   }
}
echo '<ul class="pagination justify-content-center">';
for ($i=1; $i <= ($ic2['count']/$app); $i++)
{


echo '<li class="page-item"><a class="page-link" href="index.php?page='.$i.'"><b>&nbsp'.$i.'&nbsp</b></a></li>';
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
	echo'
		<div class="card notka">
		<div class="card-block">
		<h4 class="card-title"><a href="index.php?id='.$gid.'" style="text-decoration: none;">'.$row['title'].'</a></h4>
		<h6 class="card-subtitle mb-2 text-muted">'.$row['date'].'</h6>
		<p class="card-text">'.$stags.'</p>
		<a href="#" class="card-link">First link</a>
		<a href="#" class="card-link">Second link</a>
		<center><h4><font style="color: #f39c12"><i>~~~~~~~~~~ Comments ~~~~~~~~~~</i></font></h4></center></div></div>
        ';
}
}
}
else
{
echo 'Notes not found!';
}
}

echo '</ul>';
$db->close();
include('footer.html');
?>

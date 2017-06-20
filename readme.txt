Minisite - Readme
--------------------------------------------------------------

Minisite - Mini site created with PHP & SQLite

Authors:

* site and panel script: Ferexio^ & Fervi
* panel template: Heniooo
* protection against SQL Injection: gilek
* script version: 1.2

--------------------------------------------------------------


Prerequisites
---------------------------------------------------------------
Minisite was tested on:

* php-5.5.9
* sqlite3

--------------------------------------------------------------


A Note About Minisite
--------------------------------------------------------------

This project was created with idea about on building small 
website with using only php and sqlite3 making website 
faster in action.

Script of this project hasn't style so if you do own style
then remember that you must create style in different files
and include this files in index.php

for example:

include('header.html');
include('navbar.php');
include('footer.html');

--------------------------------------------------------------


Variables in script
--------------------------------------------------------------

config.php:

$db - location of the database file
$dbs - select all rows in database with sort by ID
in table asd
$ic - counts all news in table asd
$nic - id of specific news
$tags - html/css tags which is to be ignored by strip_tags
$app - articles per page

tablename - change this name if you want ;)

index.php

$gid - $_GET["id"]
$file - select all rows in database where ID is specified
by $_GET

strip_tags: if you add to news for example <img src="vcmp.png">
then this tag will be ignored - it will not work

$tfr - text from tekst row
$stags = strip_tags($textfromrow, $enabledtags)

for example: if you add <img> tag to $tags then this tag will
be working

strip_tags($tfr);
tfr = <img src="vcmp.png">
result: 

strip_tags($tfr, '<img>');
tfr = <img src="vcmp.png">
result: <img src="vcmp.png">

--------------------------------------------------------------

How to use
--------------------------------------------------------------

Script doesn't have login and register functions, so 
if you want create post use strona.php but first secure 
this file - for example use .htaccess :)
Remember, before using this script, create database :)

1) create file (sitesitesite.php) paste this code and run in 
browser (www.yoursitename.tld/sitesitesite.php):

<?php
$cdt = new SQLite3('/path/to/database/file.sqlite');
$createtable = $cdt->query('CREATE TABLE asd(id ID INTEGER 
PRIMARY KEY AUTOINCREMENT, title varchar(200), news text,
 data datetime);');
$cdt->close();
?>

2) after created database and tables remove this file 
(mean remove sitesitesite.php)
3) database must be aside from public_html
4) database must have chmod 700 (for www-data) or 770 
(for www-data:usergroup)

--------------------------------------------------------------

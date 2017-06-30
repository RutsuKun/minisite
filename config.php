<?php
$db = new SQLite3('/path/to/file.sqlite');
$page = $_GET['page'];
$dbs = $db->query("SELECT * from tablename ORDER BY UPPER(id) DESC LIMIT 2 OFFSET 2*'$page'-2");
$ic = $db->query('SELECT Count(title) as count FROM tablename');
$ic2 = $ic->fetchArray(SQLITE3_ASSOC);
$tags='<a><img><b><br><hr><s><i>';
$app = 2;
?>

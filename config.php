<?php
$db = new SQLite3('/path/to/file.sqlite');
$dbs = $db->query('SELECT * from tablename ORDER BY id DESC');
$ic = $db->query('SELECT Count(title) as count FROM tablename');
$ic2 = $ic->fetchArray(SQLITE3_ASSOC);
$nic = $ic2['count'];
$tags='<a><img><b><br><hr><s><i>';
?>

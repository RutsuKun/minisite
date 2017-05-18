<?php
$asd = new SQLite3('/sqlite/my.sqlite');
$asd2 = $asd->query('SELECT * from asd ORDER BY id DESC');
$ic = $asd->query('SELECT Count(tytul) as count FROM asd');
$ic2 = $ic->fetchArray(SQLITE3_ASSOC);
$nic = $ic2['count'];
?>

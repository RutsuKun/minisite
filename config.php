<?php
$asd = new SQLite3('/path/to/database/file.sqlite');
$asd2 = $asd->query('SELECT * from asd ORDER BY id DESC');
?>

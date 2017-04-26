<?php

require('config.php');

echo'<title>Site Name</title>';
echo'<meta charset="UTF-8">';
echo'<img src="/path/to/logo.png"><br>';

while($row = $asd2->fetchArray(SQLITE3_ASSOC)){
      echo '<hr><center><b>'.$row['tytul'].'</b></center><hr>Added at: '.$row['data'].'<br><br>'.$row['tekst'].'<br><br>';
   }

$asd->close();

?>

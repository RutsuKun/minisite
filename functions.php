<?php
function parser_string($string)
{
return htmlspecialchars(trim(addslashes(SQLite3::escapeString($string))));
}
?>

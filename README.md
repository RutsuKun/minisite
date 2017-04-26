# Mini site created with PHP &amp; SQLite
Authors:
- site and panel script: Ferexio^ & Fervi
- panel template: Heniooo
- script version: 1.0

README!

1) Script doesn't have login and register functions, so if you want create post use strona.php but first secure this file - for example use .htaccess :)
2) Remember, before using this script, create database :)

- create file (sitesitesite.php) paste this code and run in browser (www.yoursitename.tld/sitesitesite.php):

```php
<?php
$cdt = new SQLite3('/path/to/database/file.sqlite');
$createtable = $cdt->query('CREATE TABLE asd(id ID INTEGER PRIMARY KEY AUTOINCREMENT, tytul varchar(200), tekst text, data datetime);');
$cdt->close();
?>
```

- after created database and tables remove this file (mean remove sitesitesite.php)
- database must be aside from public_html
- database must have chmod 700 (for www-data) or 770 (for www-data:usergroup)

3) This is script for minimal site, so if you want more features then wait for the next update or do it yourself.
4) In free time we have in plans:
- adding site for posts (mean every post have address)
- adding us first bootstrap template
- adding security for strona.php

Want more ? Write notification: https://github.com/ferexio/minisite/issues

Example: https://uw311.mikr.us

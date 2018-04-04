
<?php // index.php
try { if(array_key_exists('search', $_GET) == false) { throw new InvalidArgumentException('Missing search parameter!'); } if(ctype_alpha($_GET['search']) == false) { throw new Exception('Search parameter must contain letters!'); } echo "You were searching for: ".$_GET['search']; } catch(Exception $exception) { echo "ERROR - ".$exception->getMessage(); }






?>

<?php
$mysqli = new mysqli ("MYSQL5021.site4now.net", "a53efa_lapatti", "patopatoso2", "db_a53efa_lapatti");
if ($mysqli -> connect_errno)  {
  echo "fallo al conectar a MySQL: (".$mysqli ->connect_errno . ")" . $mysqli ->connect_errno;
}
$mysqli = new mysqli("MYSQL5021.site4now.net", "a53efa_lapatti", "patopatoso2", "db_a53efa_lapatti", 3306);
if ($mysqli ->connect_errno){
  echo "Fallo al conectar a MySQL: (".$mysqli ->connect_errno . ")" . $mysqli ->connect_errno;
}
?>

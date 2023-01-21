<?php
require 'config.php';
if (isset($_POST['droptable'])) {
  $query_delete_table = "DROP TABLE detali.detalimenu;";
  $result_del_table = mysqli_query($conn, $query_delete_table);
  echo "Табліця відалена";
}
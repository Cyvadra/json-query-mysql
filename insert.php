<?php

/*******************************
 INSERT
 post:  sql{
              "table":"your-table-name",
              "values":{
                 "a":1,
                 "b":2,
                 "mention":"that",
                 "existing rows":"will not be updated",
                 "...":"...",
                 "unless you use":"INSERT IGNORE INTO"
              }
            }
 *******************************/

  require('conn.php');
  if(isset($_POST['sql'])){
    $sql = json_decode($_POST['sql'],true);
  }else{
    exit;
  }

  $table = $sql['table']; $cols = ""; $vals = "";
  foreach ($sql['values'] as $col => $val) { $cols .= "`$col`,"; }
  foreach ($sql['values'] as $col => $val) { $vals .= "'$val',"; }
  $cols = substr($cols,0,strlen($cols)-1); $vals = substr($vals,0,strlen($vals)-1); // to remove ","
  
  $sql = "INSERT INTO `$table` ($cols) VALUES ($vals)";
  $result = mysqli_query($conn,$sql);

  print($result);
  
  mysqli_close($connect);


?>
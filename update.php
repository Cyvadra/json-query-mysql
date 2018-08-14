<?php

/*******************************
 UPDATE
 post:  sql{
             "table":"your-table-name",
              "where":{
                 "a":1,
                 "b":2,
                 "only support equation":"well...yes"
              },
              "set":{
                 "a":3,
                 "b":4,
                 "varnames that not exist":"no idea"
              }
            }
 *******************************/
 

  require('conn.php');
  if(isset($_POST['sql'])){
    $sql = json_decode($_POST['sql'],true);
  }else{
    exit;
  }

  //$sql = json_decode('{ "table":"users","where":{"id":"1024"},"set":{"name":"邓捷","contact":"13636602123"} }',true);
  //$sql = json_decode('your_test_json_format_here',true);

  $table = $sql['table']; $where = "1"; $set = "";
  foreach ($sql['where'] as $col => $val) { $where .= " AND $col=$val"; }
  foreach ($sql['set'] as $col => $val) { $set .= "`$col`='$val', "; }
  $set = substr($set,0,strlen($set)-2); // to remove ", "

  $sql = "UPDATE `$table` SET $set WHERE ($where)";
  $result = mysqli_query($conn,$sql);

  print($result);

  mysqli_close($connect);

?>
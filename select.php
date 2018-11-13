<?php

/*******************************
 SELECT
 post:  sql{
			       "table":"your-table-name",
			        "where":{
			           "a":1,
			           "b":2,
			           "only support equation":"well...yes"
			        }
			      }
 *******************************/
 
  require('conn.php');
  if(isset($_POST['sql'])){
    $sql = json_decode($_POST['sql'],true);
  }else{
    // $sql = array(  "table"=>"root", "where"=>array("1"=>"1")  );  // test data
    exit;
  }

  $table = $sql['table']; $where = "1";
  if(isset($sql['where'])){  
	  foreach ($sql['where'] as $col => $val) { $where .= " AND $col=$val"; }
  }
    
  $sql = "SELECT * FROM $table WHERE $where";
  $result = mysqli_fetch_all( mysqli_query($conn,$sql),MYSQLI_ASSOC );

  print( json_encode($result) );

  mysqli_close($connect);

?>
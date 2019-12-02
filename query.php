<?php

/*******************************
 Query
 post:  sql{  "direct SQL statement like SELECT A FROM `B` WHERE `BLABLABLA`>8"
			      }
 *******************************/
 
  require('conn.php');
  if(isset($_POST['sql'])){
    $sql = $_POST['sql'];
  }else{
    // $sql = array(  "table"=>"root", "where"=>array("1"=>"1")  );  // test data
    exit;
  }

  $result = mysqli_fetch_all( mysqli_query($conn,$sql),MYSQLI_ASSOC );

  print( json_encode($result) );

  mysqli_close($connect);

?>
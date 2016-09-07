<?php
require_once "db.php";
$db = new db("localhost", "fus", "root", "");

$db->openConn();
try {
 $query = "call Display_scooter_Active_Assign(0);";   
  $res = $db->selectQeury($query);
  $db->printf($res);
/*
  $query = "call Display_scooter_Active_Assign(1);";      
  $res = $db->selectQeury($query);
  $db->printf($res);


    $query = "call create_New_Courier('aa', 'bb', 'cc', '666-5566778','1');";
    $res = $db->updateQeury($query);
    echo $db->getAffectedRows();*/
} catch (Exception $e) {
    echo $e->getMessage();
}


$db->closeConn();
?>
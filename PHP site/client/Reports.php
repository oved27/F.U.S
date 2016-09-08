<!DOCTYPE html>
<html>
<head>
<?php
    require_once "../class/config.php";
    $db->openConn();
    ?>
  <meta charset="utf-8">
  <title>Reports</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <LINK href="../style/reports.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
 <div class="container">
  <div id="nav-bar">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">

       <ul class="nav navbar-nav">
        <li class="active"><a href="HomeManager.php">Home</a></li>
        <li><a href="Reports.php">Reports</a></li>
        <li><a href="History.php">History</a></li>
        <li><a href="AddUser.php">Add User</a></li>
        <li><a href="UserManagement.php">User Managment</a></li>
        <li><a href="DeliverManagment.php">DeliverManagment</a></li>
        <li><a href="login.php">Exit</a></li>
      </ul>
    </div>
  </nav>
  <div id="title">דוחות</div>
  <div class="report">
  <div><table class="dataReportTitle">
    <tr>
        <td>Deliver id</td>
        <td>Date</td>
        <td>PickupAddress</td>
        <td>DropDownAddress</td>
        <td>PickupTime</td>
        <td>DropDownTime</td>
    </tr></table></div>
  <?php
  function reportBtn(){
    
    echo blReports::getHtmlDeliveryReports($db); 
  }
    
          //$db->printf($res);
    ?>
  </div>

  <div class="Menu" align="center">

   <div class="reportstyle"><br>
    <p> <u> אנא בחר את הדוח שברצונך להציג </u></p>
    <div class="ReportsLinks">
     <button type="button" class="ReportButton" onclick="reportBtn()">דוח שליחים</button><br>
     <button type="button" class="ReportButton" onclick="">דוח משלוחים</button><br>
     <button type="button" class="ReportButton" onclick="">דוח שליח</button><br>
     <button type="button" class="ReportButton" onclick="">דוח לקוח</button><br>
     <button type="button" class="ReportButton" onclick="">דוח נוכחות משמרת</button><br>
   </div>
 </div>


</div>
 <?php
       $db->closeConn();
       ?>      
</html>
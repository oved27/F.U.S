<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Reports</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <LINK href="../style/reports.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script type="text/javascript" src="../js/reportBtn.js">
   </script>
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

  </div>

  <div class="Menu" align="center">

   <div class="reportstyle"><br>
    <p> <u> אנא בחר את הדוח שברצונך להציג </u></p>
    <div class="ReportsLinks">
     <button type="button" class="ReportButton" onclick="reportBtn(1)">דוח שליחים</button><br>
     <button type="button" class="ReportButton" onclick="reportBtn(2)">דוח משלוחים</button><br>
     <button type="button" class="ReportButton" onclick="reportBtn(3)">דוח שליח</button><br>
     <button type="button" class="ReportButton" onclick="reportBtn(4)">דוח לקוח</button><br>
     <button type="button" class="ReportButton" onclick="reportBtn(5)">דוח נוכחות משמרת</button><br>
   </div>
 </div>


</div>

</html>
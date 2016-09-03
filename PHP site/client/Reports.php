<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Reports</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>

  .container{
    height:85%;
    width: 100%;
    position: absolute;
  }
  .report{
    background-image: url(../img/background.jpg);
    float: left;
    width:70%;
    height:550px;
    border:1px solid black;
    border-top: none;
    border-right: none;
    position:relative;
  }
  .Menu{
    position:relative;
    width:30%;
    float: left;
    height:550px;
  }
  .reportstyle{ 
    height: 100%;
    border: 1px solid #000;
    border-top: none;
    position:relative;
  }
  #title{
    text-align: center;
    background-color: #F0AD4E;
    border:1px solid black;
    font-size:25px;
    width: 100%;
    position: relative;
  }
  .ReportButton{
    margin-top:15px;
    width: 200px;
    text-align: center;
    font-size: 16px;
    background-color: #D9534F;
    color:white;
    border:none;
    position: relative;
    border:1px solid black;
     position:relative;
  }
  .ReportButton:hover{
   background-color: #C9302C;
 }
</style>
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
       <button type="button" class="ReportButton">דוח שליחים</button><br>
       <button type="button" class="ReportButton">דוח משלוחים</button><br>
       <button type="button" class="ReportButton">דוח שליחים</button><br>
       <button type="button" class="ReportButton">דוח לקוח</button><br>
       <button type="button" class="ReportButton">דוח נוכחות משמרת</button><br>
     </div>
   </div>


 </div>

 </html>
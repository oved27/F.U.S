<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>History</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
body{
  width: 100%;
}
  .container{ 
    width: 100%;
    height:550px;
    position: absolute;
  }
  .History{
    background-image: url(../img/background.jpg);
    float: left;
    width:70%;
    height:550px;
    border: 1px solid #000;
    border-top: none;
    border-right: none;
    position: relative;
  }
  .Menu{
     border: 1px solid #000;
    border-top: none;
    width:30%;
    float: left;
    height:550px;
    position: relative;
  }


  .HistoryTitle{ 
   width: 100%;
   text-align: center;
   font-size: 20px;
   background-color: #F0AD4E;
   color:white;
   position: relative;
 }
 .HistoryButton:hover {
  background-color: #C9302C;
  color: white;
}
.Title{
  text-align: center;
  background-color: #F0AD4E;
  border:1px solid black;
  font-size:25px;
  width: 100%;
  position: relative;
}
.HistoryButton{
  margin-top:20px;
   width: 200px;
   text-align: center;
   font-size: 16px;
   background-color: #D9534F;
   color:white;
   border:none;
   position: relative;
   border:1px solid black;
   margin-right: 22px;
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
    <div class="Title">היסטוריית משלוחים</div>
    <div class="History">

    </div>

    <div class="Menu" align="center">
      <button class="HistoryButton">היסטוריית סוף משמרת</button>
      <button class="HistoryButton">היסטוריית סוף יום</button>
    </div>

    </html>
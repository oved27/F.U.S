<!DOCTYPE html>
<html dir="rtl">
<head>
  <meta charset="utf-8">
  <title>User Management</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  body{
    margin-right: 95px;
  }
    form { 
      margin: 50px 50px; 
      width:350px;
      position: relative;
    }
    .container{ 
      position: absolute;
      height:550px;
    }
    .UserManagement{
      background-image: url(../img/background.jpg);
      position: relative;
      width:100%;
      height:550px;

    }
    .form-group{
      width: 250px;
      position: relative;
    }
    .AddUserManagement{
      position: relative;
      height: 100%;
      border: 1px solid #000;
    }
    #title{
      text-align: center;
      background-color: #F0AD4E;
      border:1px solid black;
      font-size:25px;
      width: 100%;
      position: relative;
      border-bottom: none;
    }
    .btnSend{
      height: 30px;
      position: relative;
    }
    .btnSendStyle{
      height: 30px;
      background-color: #5CB85C;
      width: 150px;
      position: relative;
      color:white;
      border:none;
      border-radius:5px;
    }
    .btnSendStyle:hover{
      background-color: #449D44;
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
          <li><a href="AddUser.php">Add User</a></li>
          <li><a href="UserManagement.php">User Managment</a></li>
          <li><a href="DeliverManagment.php">DeliverManagment</a></li>
          <li><a href="login.php">Exit</a></li>
        </ul>
      </div>
    </nav>
    <div id="title">ניהול משתמשים</div>
    <div class="UserManagement">

     <div class="AddUserManagement">

       <form accept-charset="UTF-8" role="form" method="post" action="index.php?page=checking">
        <fieldset>
          <span><u>הכנס שם מלא:</u></span>
          <div class="form-group" id="fullName">
            <input class="form-control" placeholder="שם מלא" name="FullName" type="text">
          </div><br><br>

          <span><u>הכנס פרטים חדשים:</u></span>
          <div class="form-group">
            <input class="form-control" placeholder="שם משתמש" name="UserName" type="text">
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="סיסמה חדשה" name="UserPassword" type="password" value="">
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="אימות סיסמה חדשה" name="ConfirmPassword" type="password" value="">
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="טלפון" name="phone" type="text" value="">
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="כתובת" name="Address" type="text" value="">
          </div>
          <div><u>בחר תפקיד</u></div>
          <div class="checkbox">
            <label>
              <input name="gender" type="radio" value="deliver"> שליח
            </label>

            <label>
              <input name="gender" type="radio" value="Shift Manager"> אחראי משמרת
            </label>
            <label>
              <input name="gender" type="radio" value="managment"> מנהל
            </label>
          </div>


          <div class="btnSend">
            <input class="btnSendStyle" type="submit" value="send">
          </div>
        </fieldset>
      </form>


    </div>

  </div>


  </html>
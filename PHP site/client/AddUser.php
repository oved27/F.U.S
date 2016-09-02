<!DOCTYPE html>
<html dir="rtl">
<head>
  <meta charset="utf-8">
  <title>Reports</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  body{
    width: 100%;
    position: absolute;
  }
   form { 
    margin: 50px 50px; 
    width:350px;
    position: relative;
  }
  .container{ 
    margin-right:95px;
    position: absolute;
    height:550px;
  }
  li {
    float: left;
    position: relative;
  }
  .AddUser{
    background-image: url(../img/background.jpg);
    position: relative;
    width:100%;
    height:550px;
    
  }
  
  .Title{
    text-align: center;
    background-color: #F0AD4E;
    border:1px solid black;
    font-size:25px;
    width: 100%;
    position: relative;
  }

  .btnSend{
    height: 30px;
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
  .form-group{
    width: 250px;
    position: relative;
  }
  .AddUserStyle{
    position: relative;
    height: 100%;
    border: 1px solid #000;
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
    <div class="Title">הוספת משתמש</div>
    <div class="AddUser">

     <div class="AddUserStyle">

       <form accept-charset="UTF-8" role="form" method="post" action="index.php?page=checking">
        <fieldset>
          <div class="form-group">
            <input class="form-control" placeholder="שם משתמש" name="UserName" type="text">
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="סיסמה" name="UserPassword" type="password" value="">
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="אימות סיסמה" name="ConfirmPassword" type="password" value="">
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="טלפון" name="phone" type="text" value="">
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="כתובת" name="Name" type="text" value="">
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
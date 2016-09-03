<html dir="rtl">
<head>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <title>Delivery Managment</title>

</head>
<style>
  body{
    width: 100%;
  }
  .container{
   width: 100%;
    position:absolute;
    height:100%;
  }
  .status{
    display: inline-block;
    float: left;
    width:11%;
    height:100%;
    border-right: 1px solid black;
    position: relative;
  }
  .DisplayDelivery{
    display: inline-block;
    float: left;
    width:69%;
    height:100%; 
     position: relative; 
  }


  .buttonStatus{
   width: 130px;
   text-align: center;
   font-size: 16px;
   background-color: #D9534F;
   color:white;
   border:none;
   position: relative;
   border:1px solid black;
   margin-right: 22px;
 }
 .buttonStatus:hover{
   background-color: #C9302C;
 }

 .PickUp{
  margin-top: 30%;
  margin-right:30%;
  margin-left:30%;
  width: 80%;
  float: left;
   position: relative;
}
.Cancel , .Deliver , .Delay , .ReAssign{
  margin-top: 22%;
  margin-right:30%;
  margin-left:30%;
  width: 80%;
  float: left;
   position: relative;
}
#DeliveryContent{
 background-image: url(../img/background.jpg);
 width: 100%;
 height: 100%;
  position: relative;
}
#container{
  width: 100%;
  height:82%;
  border:1px solid black;
  border-top:none;
   position: relative;
}
#title{
  text-align: center;
  background-color: #F0AD4E;
  border:1px solid black;
  font-size:25px;
  width: 100%;
  position: relative;
}

  .Menu{
    display: inline-block;
    float: left;
    height:100%;
    width: 20%;
    border-left: 1px solid black;
     position: relative;
  }
.SearchByCustomer{
 width: 100%;
 text-align: center;
 font-size: 16px;
 background-color: #D9534F;
 color:white;
 position: relative;
}
.SearchByCourier{
 margin-top: 50%;
 width: 100%;
 text-align: center;
 font-size: 16px;
 background-color: #D9534F;
 color:white;
  position: relative;
}
}
</style>

<meta charset="utf-8">


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
</div>
<div id="title">טיפול במשלוחים</div>
<div id="container">
  <div class="status">
    <div class="PickUp">
     <button type="button" class="buttonStatus">נאסף</button>
   </div>
   <div class="Cancel">
     <button type="button" class="buttonStatus">התבטל</button>
   </div>
   <div class="Deliver">
     <button type="button" class="buttonStatus">נמסר</button>
   </div>
   <div class="Delay">
     <button type="button" class="buttonStatus">מתעקב</button>
   </div>
   <div class="ReAssign">
     <button type="button" class="buttonStatus">עדכון שליח</button>
   </div>
 </div>
 <div class="DisplayDelivery">
   <div id="DeliveryContent">
     <b> פרטי משלוח</b>
   </div>
 </div>
 <div class="menu" >
   <div class="SearchByCustomer">
     איתור משלוח על פי לקוח
   </div><br> 
   <div>
     לקוח: <input type="text" name="SearchByCustomerText">
   </div>

   <div class="SearchByCourier">
     איתור משלוח על פי שליח
   </div><br>
   <div>
     שליח: <input type="text" name="SearchByCourierText">
   </div>
 </div>
</div>
</div>
</body>        
</html>
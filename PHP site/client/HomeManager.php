<html>
<head >
  <?php
  require_once "../class/config.php";
  $db->openConn();
  ?>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQ7ujRhOjh1vy5oI0QdJEUlsl912I3sDw&callback=initMap"
  type="text/javascript"></script>
  <title>Home Manager</title>

</head>
<style>
 .container{ 
  height:550px;
  width: 100%;
  position: absolute;
}
.Map{
  float: left;
  width:70%;
  height:100%; 
  position: relative;
}
.Menu{
  float: left;
  height:100%;
  width:30%;
  border:1px solid black;  
  border-left:none;
  position: relative;
}
.delivers{  
  height: 40%;
  position: relative;  
}
.Adelivery{
  position: relative;
  height: 20%;
}
.Wdelivery{
  position: relative;
  height: 20%;
}
.NewUpdate{
  position: relative;
  height: 20%;
}
.Top{
  border: 1px solid #000;
  height: 420px;
  position: relative;
  border-bottom: none;
}
.Bottom{
  border: 1px solid #000;
  height: 130px;
  position: relative;
}
.searchByCostumer{
  margin-top: 10px;
  float: left;
  border: 1px solid #000;
  margin-right:14%;
  margin-left:14%;
  height: 80%;
  width: 29%;
  font-align:center;
  position: relative;
}
.searchByDeliver{
  margin-top: 10px;
  display: inline-block;
  border: 1px solid #000;
  height: 80%;
  width: 29%;
  position: relative;
}  
.titleHeader , .redTitle{
 width: 100%;
 height: 30px;
 text-align: center;
 font-size: 16px;
 color:white;
 background-color: #F0AD4E;
 border:none;
 position: relative;

}
.redTitle , .Bottom .titleHeader{
  background-color: #D9534F;
  position: relative;
}
</style>


<meta charset="utf-8">

<script type="text/javascript" src="../js/map.js"></script>
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
  <div class="Map">
   <div class="Top" id="googleMap"> 
   </div>
   <div class="Bottom">
     <div class="searchByCostumer">
      <div class="titleHeader">איתור משלוח על פי לקוח</div>
    </div>
    <div class="searchByDeliver">
      <div class="titleHeader">איתור משלוח על פי שליח</div>
    </div>
  </div>
</div>
<div class="Menu" align="center">

 <div class="delivers">
  <div class="titleHeader">שליחים במשמרת</div>
  <?php
  echo blUser::getHtmlUser($db); 
                //$db->printf($res);
  ?>
</div>
<div class="Adelivery">
  <div class="titleHeader">משלוחים פעילים</div>
         <!--<?php
                echo blUser::getHtmlActiveDelivery($db); 
                //$db->printf($res);
                ?>   !-->
              </div>
              <div class="Wdelivery">
               <div class="titleHeader">משלוחים בהמתנה</div>
             </div>
             <div class="NewUpdate">
               <div class="redTitle">עדכונים חיים</div>
             </div>

           </div>
         </div>  
       </body>  

       <?php
       $db->closeConn();
       ?>      
       </html>
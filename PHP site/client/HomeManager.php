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
         }
     li {
    float: left;
  }
        .Map{
    float: left;
    width:70%;
    height:100%;
    
  }
  .Menu{
    float: left;
    height:100%;
  width:30%;
  }
  .delivers{  
    height: 40%;
  border: 1px solid #000;
  }
  .Adelivery{
    border: 1px solid #000;
    height: 20%;
  }
  .Wdelivery{
     border: 1px solid #000;
    height: 20%;
  }
  .NewUpdate{
    border: 1px solid #000;
    height: 20%;
  }
  .btn.btn-danger{
    width: 100%;
  
  }
  .btn.btn-warning{
      width: 100%;
    
  }
  .Top{
    border: 1px solid #000;
    height: 420px;
  }
  .Bottom{
    border: 1px solid #000;
    height: 130px;
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
   
  }
  .searchByDeliver{
    margin-top: 10px;
    display: inline-block;
   
  border: 1px solid #000;
  height: 80%;
   width: 29%;
  }  
         </style>
         
         
  <meta charset="utf-8">
  
    <script>
         function initMap() {
        var map = new google.maps.Map(document.getElementById('googleMap'), {
         // center: {lat: -35.397, lng: 150.644},
          zoom: 10
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('גבי');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
</script>
<body>
             <div class="container">
        <div id="nav-bar">
            <nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Reports</a></li>
      <li><a href="#">Add User</a></li>
      <li><a href="#">User Managment</a></li>
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
                  <button type="button" class="btn btn-danger">איתור משלוח על פי לקוח</button>
               </div>
               <div class="searchByDeliver">
                  <button type="button" class="btn btn-danger">איתור משלוח על פי שליח</button>
               </div>
         </div>
   </div>
   <div class="Menu" align="center">
   
       <div class="delivers">
          <button type="button" class="btn btn-warning">שליחים במשמרת</button>
           <?php
                echo blUser::getHtmlUser($db); 
                //$db->printf($res);
                ?>
       </div>
       <div class="Adelivery">
          <button type="button" class="btn btn-warning">משלוחים פעילים</button>
          <?php
                echo blUser::getHtmlUser($db); 
                //$db->printf($res);
                ?>
       </div>
       <div class="Wdelivery">
          <button type="button" class="btn btn-warning">משלוחים בהמתנה</button>
       </div>
       <div class="NewUpdate">
           <button type="button" class="btn btn-danger">עדכונים חיים</button>
       </div>
    
   </div>
        </div>  
</body>        
</html>
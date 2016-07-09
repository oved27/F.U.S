<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Main2
 *
 * @author gaby
 */
class HomeManager extends MasterPage{
   public $title;
    public function getHeader() {
             $_html = <<<HTML
            <!DOCTYPE html>

<html>
<head >

  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQ7ujRhOjh1vy5oI0QdJEUlsl912I3sDw&callback=initMap"
  type="text/javascript"></script>
    <title>$this->title</title>
    
</head>
     <style>
         .container{ 
        height:550px;
         }
        .Map{
  	float: left;
  	width:800px;
  	height:550px;
  	
  }
  .Menu{
  	width:300px;
    float: left;
  	height:550px;
  }
  .delivers{	
  	height: 190px;
  border: 1px solid #000;
  }
  .Adelivery{
  	border: 1px solid #000;
  	height: 90px;
  }
  .Wdelivery{
     border: 1px solid #000;
  	height: 90px;
  }
  .NewUpdate{
  	border: 1px solid #000;
  	height: 180px;
  }
  .btn.btn-danger{
  	width: 296px;
  }
  .btn.btn-warning{
  	width: 296px;
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
  margin-right:50px;
   margin-left:50px;
   height: 100px;
  }
  .searchByDeliver{
  	margin-top: 10px;
  	display: inline-block;
  border: 1px solid #000;
  height: 100px;
  }  
         </style>
         
  <meta charset="utf-8">
  
    <script>
        function initMap() {
            var myLatLng = { lat: 32.088698, lng: 34.785855 };

            var map = new google.maps.Map(document.getElementById('googleMap'), {
                zoom: 14,
                center: myLatLng
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Hello World!'
            });
        }
</script>
<body>
            
            
HTML;
        return $_html;
    }
    public function getBody() {
          $_html = <<<HTML
         <div class="container">
        <div id="nav-bar">
            <nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Reports</a></li>
      <li><a href="#">Add User</a></li>
      <li><a href="#">User Managment</a></li>
       <li><a href="#">Exit</a></li>
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
       </div>
       <div class="Adelivery">
          <button type="button" class="btn btn-warning">משלוחים פעילים</button>
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
                  
HTML;
        return $_html;      
    }

    public function getFooter() {
        $_html = <<<HTML
                </html>
HTML;
    }

    

//put your code here
}

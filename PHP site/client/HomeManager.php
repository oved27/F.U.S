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
	<LINK href="../style/HomeManager.css" rel="stylesheet" type="text/css">
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
	 
	  <div class="Map">
	   <div class="Top" id="googleMap"> 
	   </div>
	   <div class="Bottom">
		 <div class="searchByCostumer">
		  <div class="titleHeader">איתור משלוח על פי לקוח</div><span class="inputspan">הזן לקוח<span>
		  <div class=searchBox><input type="text" id=""></div>
		</div>
		<div class="searchByDeliver">
		  <div class="titleHeader">איתור משלוח על פי שליח</div><span class="inputspan">הזן שליח<span>
		  <div class=searchBox><input type="text" id=""></div>
		</div>
	  </div>
	</div>
	<div class="Menu" align="center">

	 <div class="delivers">
	  <div class="titleHeader">שליחים במשמרת</div>
	 <div class="inputBox">
	 <?php
	  echo blUser::getHtmlUserDelivers($db); 
					//$db->printf($res);
	  ?>
	  </div>
	</div>
	<div class="Adelivery">
	  <div class="titleHeader">משלוחים פעילים</div>
	  <div class="inputBox">
			 <?php
					echo blUser::getHtmlActiveDelivery($db); 
					//$db->printf($res);
					?>   
					</div>
				  </div>
				  <div class="Wdelivery">
				   <div class="titleHeader">משלוחים בהמתנה</div>
				   <div class="inputBox">
					<?php
					echo blUser::getHtmlStandByDelivery($db); 
					
					?>
					</div>
				 </div>
				 <div class="NewUpdate">
				   <div class="redTitle">עדכונים חיים</div>
				    <div class="inputBox">
					<?php
					echo blUser::getHtmlNewsAssign($db); 
					echo blUser::getHtmlNewsDrop($db);
					echo blUser::getHtmlNewsPickup($db);
					
					?>
					</div>
				 </div>

			   </div>
			 </div> 
			  </div> 
		   </body>  

		   <?php
		   $db->closeConn();
		   ?>      
		   </html>
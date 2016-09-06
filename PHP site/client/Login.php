<html>
<head>
<meta charset="utf-8">
	<title>Login</title>
	<LINK href="../style/Login.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript"></script>
</head>
<body>  
  <div id="container">
       <br><br><br>
       <div id="title">Login</div>
        <hr class="colorgraph">

            <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" method="post" action="../db/db.php">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="User Name" name="UserName" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="UserPassword" type="password" value="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                            </label>
                        </div>
                        <div class="btnlogin">
                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                        </div>
                    </fieldset>
                    </form>
                </div>
    
   </div>
</body>
</html>         
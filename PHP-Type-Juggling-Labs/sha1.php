<?php
   ob_start();
   session_start();
?>
<!DOCTYPE html>
<html>

<head>
<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans);
.btn {
 width: 100%;
	border: 1px solid rgb(176, 106, 14) ; 
	color: whitesmoke;
	border-radius: 8px;
	margin-bottom: 10px; 
	background: rgba(0, 0, 0, 0.3);
	outline: none;
	padding: 10px;
	font-size: 13px;
} 

* { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }

html { width: 100%; height:100%; overflow:hidden; }

body { 
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	background: #262a2b;
}
.login { 
	position: absolute;
	top: 50%;
	left: 50%;
	margin: -150px 0 0 -150px;
	width:300px;
	height:300px;
}
.login h2 { color: rgb(176, 106, 14); text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

input { 
	width: 100%; 
	margin-bottom: 10px; 
	background: rgba(0,0,0,0.3);
	border: none;
	outline: none;
	padding: 10px;
	font-size: 13px;
	color: #fff;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	border: 1px solid rgb(176, 106, 14);
	border-radius: 8px;
	box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
}
input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }
</style></head>
<body>

<?php
	
	if (isset($_POST['login']) && !empty($_POST['username']) 
	   && !empty($_POST['password'])) {

		$password = $_POST['password'];
		$password = str_replace(array("aaK1STfY","10932435112","aaO8zKZF")," ",$password);
	   
		if ($_POST['username'] == 'admin' && sha1($password) == sha1('aaK1STfY') ) {
		echo "<script>";  
		echo 'alert("Congratulations ^-^ ")';
		echo "</script>";

	   }else {

		  echo "<script>";  
		  echo 'alert("Wrong Username or Password")';
		  echo "</script>";
	   }
	}
?>
    <div class="login">
        <h2>Admin Panel Login SHA1</h2>
        <form role="form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method = "post">
			 <input type="text" name="username" placeholder="Enter Username" required="required" />
			 <input type="password" name="password" placeholder="Enter Password" required="required" />
			 <button type="submit" name="login"  class="btn">login</button>
      </form>
    </div>
</body>
</html>


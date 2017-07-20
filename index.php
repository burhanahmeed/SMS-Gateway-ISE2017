<?php
	session_start();
?> 

<!DOCTYPE html>
<html>
<head>
	<title>SMS Gateway ISE 2017</title>
	<!-- meta data -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- bootstrap/library css -->
	<link rel="stylesheet" type="text/css" href="aset/css/bootstrap.min.css">
	<!-- fonts -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Questrial" />

</head>
<body>

	<div class="container">
		<form class="form-horizontal" method="POST" action="send.php">
		<fieldset>
		<legend>Authentication</legend>
			<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="textinput">Email</label>  
		  <div class="col-md-4">
		  <input id="textinput" name="username" type="Email" placeholder="Emal" class="form-control input-md" value="<?php echo ($_SESSION['usname']==null)? '' : $_SESSION['usname'] ?>">
		    
		  </div>
		</div>
		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="textinput">Password</label>  
		  <div class="col-md-4">
		  <input id="textinput" name="pass" type="Password" placeholder="Password" class="form-control input-md" value="<?php echo ($_SESSION['pass']==null)? '' : $_SESSION['pass'] ?>">
		    
		  </div>
		</div>
		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="textinput">Device ID</label>  
		  <div class="col-md-4">
		  <input id="textinput" name="id" type="number" placeholder="ID" class="form-control input-md" value="<?php echo ($_SESSION['id']==null)? '' : $_SESSION['id'] ?>">
		    
		  </div>
		</div>

		<!-- Form Name -->
		<legend>Send SMS</legend>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="textinput">Nomor Tujuan</label>  
		  <div class="col-md-4">
		  <input id="textinput" name="nomer" type="text" placeholder="pisah dengan koma (,)" class="form-control input-md" value="">
		    
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="textinput">Pesan</label>  
		  <div class="col-md-4">
		  <input id="textinput" name="pesan" type="text" placeholder="Pesan" class="form-control input-md">
		    
		  </div>
		</div>

		<!-- Button (Double) -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="button1id"></label>
		  <div class="col-md-8">
		    <button id="button1id" name="send" class="btn btn-primary">KIRIM</button>
		  </div>
		</div>

		</fieldset>
		</form>

	</div>

</body>

</html>
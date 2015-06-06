<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login..</title>
	<base href = "<?= base_url();?>"/>
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	</style>

		<!-- jqurey -->
	<script src="assets/js/jquery-1.10.2.js"></script>
	<!-- Latest compiled and minified CSS -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<!-- validate -->
	<script src="assets/jvalidate/dist/jquery.validate.min.js"></script>

	<!-- My jqurey and css -->
	<script src="assets/js/myscript.js"></script>
	<link rel="stylesheet" href="assets/css/mycss.css">

</head>
<body>
    
     <div class="page-alerts">
        <div class="alert alert-success page-alert" id="alert-1">
            <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <strong>ยินดีด้วย !</strong> <span id = "message_success"></span>
        </div>
          <div class="alert alert-success page-alert" id="alert-1">
            <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <strong>Well done!</strong> You successfully read this important alert message.
        </div>
        <div class="alert alert-danger page-alert" id="alert-4">
            <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <strong>ผิดพลาด !</strong> <span id = "message_wrong"></span>
        </div>
   </div>



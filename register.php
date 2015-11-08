<!DOCTYPE html>
<html lang="en">
<head>
    <title>registration_form</title>
    <meta charset="UTF-8">
    <meta name=description content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
<h1 class="text-center">Registration Form</h1>
<?php
?>
<div class="span3">
    <form action="./success_register.php" method="post">
        <label style=" padding: 10px">First Name</label>
        <input type="text" name="firstname" class="span3" class=""><br>
        <label style=" padding: 10px">Last Name</label>
        <input type="text" name="lastname" class="span3"><br>
        <label style=" padding: 10px">Email Address</label>
        <input type="email" name="email" class="span3"><br>
        <label style=" padding: 10px">Username</label>
        <input type="text" name="username" class="span3"><br>
        <label style=" padding: 10px">Password</label>
        <input type="password" name="password" class="span3"><br>
        <label style=" padding: 10px"><input type="checkbox" name="terms" > I agree with the <a href="#">Terms and Conditions</a>.</label><br>
        <input name="submit" type="submit" value="Sign up" class="btn btn-primary pull-left">
        <div class="clearfix"></div>
    </form>
</div>
<!-- jQuery -->
<script src="./js/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
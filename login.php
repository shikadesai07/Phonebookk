<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Phonebook</title>

<style>
  body{
    background-image: url("Website-Design-Background.png");
    background-size: auto;
  }

  .header {
  width: 30%;
  margin: 50px auto 0px;
  color: #000;
  background: #aad8d3;
  text-align: center;
  border: 1px solid #f7f3e9;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;}
  form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #f7f3e9;
  background: #f7f3e9;
  border-radius: 0px 0px 10px 10px;
  }
  .input-group {
  margin: 10px 0px 10px 0px;
  }
  .input-group label {
  display: block;
  text-align: left;
  margin: 3px;
  color: #000;
  }
  .input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
  }
  .btn {
  padding: 10px;
  font-size: 15px;
  color: d8e3e7;
  background: #aad8d3;
  border: none;
  border-radius: 5px;
  }
  .error {
  width: 92%;
  margin: 0px auto;
  padding: 10px;
  border: 1px solid #a94442;
  color: #a94442;
  background: #f2dede;
  border-radius: 5px;
  text-align: left;
  }
  .success {
  color:#df7f3e9;
  background: #aad8d3;
  border: 1px solid #f7f3e9;
  margin-bottom: 20px;
  }
  }

</style>
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>

  <form method="post" action="login.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>

  </form>
</body>
</html>

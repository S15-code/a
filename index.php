
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form</title>
  <link rel="stylesheet" href="css/style1.css">
</head>
<body>
  <div class="form">
    <h1>Вход</h1>
    <div class="input-form">
      <input type="text" placeholder="Логин" name="user">
    </div>
    <div class="input-form">
      <input type="password" placeholder="Пароль" name="pass">
    </div>
    <div class="input-form">
    <a href="home/home1.html"><input type="submit" value="Войти">
    </div>
</div>
 	<?php
 	$connection=mysqli_connect('mysql.joinserver.ru:3306','	u30241_L5YqX17Rlt','JmCidq8nAL2msLttaxQdafsN','s30241_moon')
 		$sql = "SELECT Name FROM tablical";
 		$massive=mysqli_query($connection,$mysql);
 		$data=mysqli_fetch_assoc($massive);
 		foreach ($data as $key => $value) {
 			print_r($value);
 		}
 		mysqli_close($connection);
 	?>
</body>
</html>
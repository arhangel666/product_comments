<?php
error_reporting(0);
$host = $_POST['host'];
$user = $_POST['user'];
$pass = $_POST['pass'];

$configure = "<?php \n define('DB_HOST','$host'); \n define('DB_USER','$user'); \n define('DB_PASS','$pass'); \n define('DB_NAME','test_bd'); \n \$link = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);";



if (isset($_POST['btn_create_db'])) {
	$connect_db = new mysqli($host,$user,$pass);
	if ($connect_db->connect_errno) {
		echo "Не правильные данные";
	}
	else {
		$connect_db->query("CREATE DATABASE test_bd");
		$file = file_put_contents('config.php', $configure);
		require_once 'config.php';
		$link->query("CREATE Table products
			(
			id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
			name VARCHAR(200)  NULL,
			mini_img VARCHAR(200)  NULL,
			cost VARCHAR(200)  NULL,
			data_create VARCHAR(200)  NULL,
			name_user VARCHAR(200)  NULL,
			meny TEXT(2000)  NULL
		)");
		$link->query("CREATE Table comments
			(
			id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
			name_user VARCHAR(200) NOT NULL,
			appraisal VARCHAR(200) NOT NULL,
			comment VARCHAR(200) NOT NULL,
			data_create VARCHAR(200) NOT NULL,
			k VARCHAR(200) NOT NULL
		)");
		header("Location: /");
	}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create DB</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form class="cd" action="" method="post">
		<input type="text" name="host" placeholder="host">
		<input type="text" name="user" placeholder="user">
		<input type="password" name="pass" placeholder="pass">
		<button name="btn_create_db">Создати базу данных</button>
	</form>
</body>
</html>
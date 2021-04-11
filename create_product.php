<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create product</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form class="form_new_product" action="create_product_model.php" method="post">
		<input type="text" name="name" placeholder="Название товара">
		<input type="text" name="img" placeholder="Фото">
		<input type="text" name="cost" placeholder="Средняя цена">
		<input type="text" name="name_user" placeholder="Кто добавил">
		<button name="btn_create_product">Добавить товар</button>
	</form>
</body>
</html>
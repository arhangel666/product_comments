<?php
if (!file_exists('config.php')) {
	header("Location: create_db.php");
}
else {
	require_once 'config.php';
	$products = $link->query("SELECT * FROM products");
	$com = $link->query("SELECT * FROM comments");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Test</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<p>Сортировать по: </p>
	<div class="out"></div>
	<select class="sort" name="" id="">
		<option value="">---------</option>
		<option value="name">По названию</option>
		<option value="data">По дате</option>
		<option value="user">Кто добавил</option>
		<option value="otziv">Количество отзывов</option>
	</select>
	<div class="top_name">
		<div>Название товара</div>
		<div>Фото</div>
		<div>Дата добавления</div>
		<div>Добавил</div>
		<div>Количество отзывов</div>
	</div>
	<div class="products">
		<?php foreach ($products as $val): ?>
			<div class="product">
				<div><a href="comments.php?id=<?=$val['id']?>"><?= $val['name'] ?></a></div>
				<div><img class="mini" src="<?= $val['mini_img'] ?>"></div>
				<div><?= $val['data_create'] ?></div>
				<div><?= $val['name_user'] ?></div>


				<?php 
				$w = 0;
				foreach ($com as $v) {
					if ($v['k'] == $val['id']) {
						$id = $val['id'];
						$w += 1;
						 
						$link->query("UPDATE products SET meny = $w WHERE id = $id");
				
					}
					
				}
				?>

				<div>
					<?= $w ?>

				</div>
			</div>
			<hr>
		<?php endforeach ?>
	</div>
	<a href="create_product.php"><button class="btn_create_product">Дабавить Товар</button></a>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="js.js"></script>
</body>
</html>
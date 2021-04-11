<?php
require_once 'config.php';
$id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Comment</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php 
	
	$product = $link->query("SELECT * FROM products WHERE id LIKE '$id'");
	$comments = $link->query("SELECT * FROM comments WHERE k LIKE '$id'");
	?>
	<?php foreach ($product as $val): ?>
		<h1><?=$val['name']?></h1>
		<img class="max" src="<?=$val['mini_img']?>" alt="">
		<?php
		$qq = [0];

		foreach ($comments as $key => $val) {
			$qq[$key] = $val['appraisal'];
		}
		$qq = array_sum($qq) / count($qq);
		$qq = substr($qq, 0, 3);
		?>
		<h1>Средняя оценка <?= $qq  ?></h1>	

		



		<?php foreach ($comments as $v): ?>
			<div class="comment">
				<div><?= $v['name_user']?></div>
				<div><?= $v['appraisal']?></div>
				<div class="arcom"><?= $v['comment']?></div>
				<div><?= $v['data_create']?></div>
			</div>
		<?php endforeach ?>
		<?php endforeach ?><br>
		
		<form action="create_comment_model.php" class="addcom" method="post">
			<p>Добавить комментарий</p>
			<input type="text" name="name" placeholder="Имя">

			<p>Оценка</p>
			<select name="appraisal" id="">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
			<input type="hidden" name="id" value="<?= $id ?>">
			<p>Комментарий</p>
			<textarea name="comment" id="" cols="30" rows="10"></textarea>
			<br>
			<button name="btn_add_comment">Добавить комментарий</button>
		</form>
	</body>
	</html>
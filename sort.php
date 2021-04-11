<?php 
require_once 'config.php';
$value = $_POST['value'];
$com = $link->query("SELECT * FROM comments");


if ($value == 'name') {
	$alf = $link->query("SELECT * FROM products ORDER BY name");
	foreach ($alf as $val) {
		$w = 0;
		foreach ($com as $v) {
					if ($v['k'] == $val['id']) {
						$w += 1;
					}
				}
		echo "<div class=\"product\">
				<div><a href=\"comments.php?id=".$val['id']."\">".$val['name']."</a></div>
				<div><img class=\"mini\" src=\"".$val['mini_img']."\"></div>
				<div>".$val['data_create']."</div>
				<div>".$val['name_user']."</div>
				<div>".$w."</div>
			</div>";
	}
}

elseif ($value == 'data') {
		$alf = $link->query("SELECT * FROM products ORDER BY data_create");
	foreach ($alf as $val) {
		$w = 0;
		foreach ($com as $v) {
					if ($v['k'] == $val['id']) {
						$w += 1;
					}
				}
		echo "<div class=\"product\">
				<div><a href=\"comments.php?id=".$val['id']."\">".$val['name']."</a></div>
				<div><img class=\"mini\" src=\"".$val['mini_img']."\"></div>
				<div>".$val['data_create']."</div>
				<div>".$val['name_user']."</div>
				<div>".$w."</div>
			</div>";
	}
}
elseif ($value == 'user') {
		$alf = $link->query("SELECT * FROM products ORDER BY name_user");
	foreach ($alf as $val) {
		$w = 0;
		foreach ($com as $v) {
					if ($v['k'] == $val['id']) {
						$w += 1;
					}
				}
		echo "<div class=\"product\">
				<div><a href=\"comments.php?id=".$val['id']."\">".$val['name']."</a></div>
				<div><img class=\"mini\" src=\"".$val['mini_img']."\"></div>
				<div>".$val['data_create']."</div>
				<div>".$val['name_user']."</div>
				<div>".$w."</div>
			</div>";
	}
}
elseif ($value == 'otziv') {
		$alf = $link->query("SELECT * FROM products ORDER BY meny desc");
	foreach ($alf as $val) {
		$w = 0;
		foreach ($com as $v) {
					if ($v['k'] == $val['id']) {
						$w += 1;
					}
				}
		echo "<div class=\"product\">
				<div><a href=\"comments.php?id=".$val['id']."\">".$val['name']."</a></div>
				<div><img class=\"mini\" src=\"".$val['mini_img']."\"></div>
				<div>".$val['data_create']."</div>
				<div>".$val['name_user']."</div>
				<div>".$w."</div>
			</div>";
	}
}
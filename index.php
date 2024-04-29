<?php
error_reporting(-1);
//$art = $_GET['articul'];
require 'sendart.php';
require 'sendmail.php';
//$serv = 'https://api.forum-auto.ru/v2/listGoods?login=493358_stroyzar&pass=sAVDkrEbqd' . '&art=' . $art;

//$result = json_decode(file_get_contents($serv), true);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ТАНОС - Ремонт под ключ от 2900 руб/м².</title>
	<link rel="stylesheet" href="./css/reset.css">
	<link rel="stylesheet" href="./css/fonts.css">
	<link rel="stylesheet" href="./css/style.css">
	<script src="./js/main.js" defer></script>
</head>

<body>
	<!--	<div class="wrapper">-->
	<header class="header">
		<div class="container">

		</div>
	</header>
	<main class="main">
		<!--------------- Форма поиска по артикулу ----------------->
		<div class="wrapper__form-search">
			<div class="form-search__art">
				<form action="index.php" id="form-go-articul" class="form-search__body">
					<h3 class="form-search__title">Форма поиска по артикулу</h3>
					<div class="form-search__item">
						<label for="formArticul" class="form-search__label">Введите артикул:</label>
						<input id="formArticul" type="text" class="form-search_input" name="articul" placeholder="Для поиска введите артикул...">
					</div>
					<button type="submit" class="form-search_button">Отправить</button>
				</form>
			</div>
		</div>
		<section class="test__result ">
			<table>
				<thead class="result__row">
					<tr class="result__row_title">
						<th class="test__result_th">gid</th>
						<th class="test__result_th">brand</th>
						<th class="test__result_th">art</th>
						<th class="test__result_th">name</th>
						<th class="test__result_th">d_deliv</th>
						<th class="test__result_th">h_deliv</th>
						<th class="test__result_th">kr</th>
						<th class="test__result_th">num</th>
						<th class="test__result_th">price</th>
						<th class="test__result_th">whse</th>
						<th class="test__result_th">is_returnable</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($result as $item) : ?>
						<tr class="result__row_item">
							<?php foreach ($item as $key ) : ?>
								<td class="test__result_td"><?= $key; ?></td>
							<?php endforeach; ?>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</section>

		<div class="wrapper__form_reg">
			<div class="form__reg">
				<form action="sendmail.php" id="form-go-reg" class="form__reg-body" >
					<div class="form__reg_item">
						<label for="formEmail" class="form__reg_label">E-mail:</label>
						<input id="formEmail" type="text" class="form__reg_input form-search_input" name="email" placeholder="Введите email...">
					</div>
					<button type="submit" class="form-search_button">Отправить</button>
				</form>
			</div>
		</div>
	</main>

	</div>

	<footer>
		

	</footer>
</body>

</html>
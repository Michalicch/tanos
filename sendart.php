<?php error_reporting(-1);

$art = $_GET['articul'];

$serv = 'https://api.forum-auto.ru/v2/listGoods?login=493358_stroyzar&pass=sAVDkrEbqd' . '&art=' . $art;

//$result = json_decode(file_get_contents($serv), true);

?>
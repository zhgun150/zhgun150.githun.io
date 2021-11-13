<?php
  $name = $_POST['name']; // input name="name"
  $phone = $_POST['phone']; // input name="phone"

  $message = "Новый заказ на сайте".PHP_EOL."Имя: ".$name.PHP_EOL."Телефон: ".$phone; //Обрабатываем данные из формы, для передачи их в письме PHP_EOL - это перенос на другую стороку

  send(380562852,$message); // id страницы на которую будут отправляться заявки

  function send($id , $message) {
    $url = 'https://api.vk.com/method/messages.send';
    $params = array(
      'user_id' => $id,    // Кому отправляем
      'message' => $message,   // Что отправляем
      'access_token' => '8ce5808ae4d5c5d293de48e7c7b621b18951cc6a02c3de87107b55d07a2a81e6b38613d14a544fe9b0c10',  
      'v' => '5.62',
    );

    $result = file_get_contents($url, false, stream_context_create(array(
        'http' => array(
          'method'  => 'POST',
          'header'  => 'Content-type: application/x-www-form-urlencoded',
          'content' => http_build_query($params)
        )
    )));
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Отправка формы</title>
</head>
<body>
	<div class="loader">
		<div class="center">
			<h1 style="text-align: center;">Всё ок!</h1>
		</div>
	</div>
</body>
</html>



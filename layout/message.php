<?php

if(i1sset($_POST['terras'])) {

	$to = "amra_sk@mail.ru";
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	$message = $_POST['message'];
	$square =$_POST['square'];
	$price = $_POST['price'];
	$files = $_POST['files'];
	$model = $_POST['model'];
	$size = $_POST['size'];
	$color = $_POST['color'];
	$texture = $_POST['texture'];
	$how = $_POST['how'];
	$forma = $_POST['forma'];
	$aside = $_POST['aside'];
	$bside = $_POST['bside'];

	if(isset($_POST['files'])) {
		$files = $_POST['files'];
	}

	if(isset($_POST['cside'])) {
		$cside = $_POST['cside'];
	}

	if(isset($_POST['message'])) {
		$message = $_POST['message'];
	}

	if(isset($_POST['dside'])) {
		$dside = $_POST['dside'];
	}

	if(isset($_POST['eside'])) {
		$eside = $_POST['eside'];
	}

	if(isset($_POST['options'])) {
		$options = $_POST['options'];
	}

	if(isset($_POST['stepmodel'])) {
		$stepmodel = $_POST['stepmodel'];
		$stepscol = $_POST['stepscol'];
		$lengthstep = $_POST['lengthstep'];
		$colorstep = $_POST['colorstep'];
	}



// Формирование заголовка письма
	$subject = 'Калькулятор Террас';
	$headers  = "From: info@starlight.space" . "\r\n";
	$headers .= "Reply-To: info@starlight.space".  "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

	$msg  = "<html><body>";
	$msg .= "<h2>Новое сообщение</h2>\r\n";
	if(!empty($name) && !empty($phone)&& !empty($email)) {
		$msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
		$msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
		$msg .= "<p><strong>Email:</strong> ".$email."</p>\r\n";
		if($message) {
			$msg .= "<p><strong>Сообщение:</strong> ".$message."</p>\r\n";
		}
		if($files) {
			$msg .= "<p><strong>Файлы:</strong> ".$files."</p>\r\n";
		}
		$msg .= "<p><strong>Площадь:</strong> ".$square."</p>\r\n";
		$msg .= "<p><strong>Модель доски</strong> ".$model."</p>\r\n";
		$msg .= "<p><strong>Размер доски </strong> ".$size."</p>\r\n";
		$msg .= "<p><strong>Цвет доски</strong> ".$color."</p>\r\n";
		$msg .= "<p><strong>Текстура доски</strong> ".$texture."</p>\r\n";
		$msg .= "<p><strong>Способ укладки</strong> ".$how."</p>\r\n";
		$msg .= "<p><strong>Форма террасы</strong> ".$forma."</p>\r\n";
		$msg .= "<p><strong>Сторона А</strong> ".$aside."</p>\r\n";
		$msg .= "<p><strong>Сторона Б</strong> ".$bside."</p>\r\n";
		if($cside) {
			$msg .= "<p><strong>Сторона С</strong> ".$cside."</p>\r\n";
		}
		if($dside) {
			$msg .= "<p><strong>Сторона D</strong> ".$dside."</p>\r\n";
		}
		if($eside) {
			$msg .= "<p><strong>Сторона Е</strong> ".$eside."</p>\r\n";
		}

		if($options) {
			$msg .= "<p><strong>Опции</strong> ".$options."</p>\r\n";
		}

		if($stepmodel) {
			$msg .= "<p><strong>Параметры лестницы:</strong></p>\r\n";
			$msg .= "<p><strong>Модель лестницы</strong> ".$stepmodel."</p>\t\r\n";
			$msg .= "<p><strong>Размер лестницы</strong> ".$lengthstep."</p>\t\r\n";
			$msg .= "<p><strong>Цвет лестницы</strong> ".$colorstep."</p>\t\r\n";
		}

	}

	$msg .= "</body></html>";


// отправка сообщения
	@mail($to, $subject, $msg, $headers);

}

if(i1sset($_POST['terras'])) {

	$to = "amra_sk@mail.ru";
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	$square =$_POST['square'];
	$price = $_POST['price'];
	$model = $_POST['model'];
	$size = $_POST['size'];
	$color = $_POST['color'];
	$texture = $_POST['texture'];
	$length = $_POST['length'];
	$width = $_POST['width'];
	$door1 = $_POST['door'];
	$door2 = $_POST['door2'];

	if(isset($_POST['files'])) {
		$files = $_POST['files'];
	}
	if(isset($_POST['message'])) {
		$message = $_POST['message'];
	}
	if(isset($_POST['options'])) {
		$options = $_POST['options'];
	}

	if(isset($_POST['doorName'])) {
		$doorName = $_POST['doorName'];
		$doorSize = $_POST['doorSize'];
	}




// Формирование заголовка письма
	$subject = 'Калькулятор Заборов';
	$headers  = "From: info@starlight.space" . "\r\n";
	$headers .= "Reply-To: info@starlight.space".  "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

	$msg  = "<html><body>";
	$msg .= "<h2>Новое сообщение</h2>\r\n";
	if(!empty($name) && !empty($phone)&& !empty($email)) {
		$msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
		$msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
		$msg .= "<p><strong>Email:</strong> ".$email."</p>\r\n";
		if($message) {
			$msg .= "<p><strong>Сообщение:</strong> ".$message."</p>\r\n";
		}
		$msg .= "<p><strong>Площадь:</strong> ".$square."</p>\r\n";
		if($files) {
			$msg .= "<p><strong>Файлы:</strong> ".$files."</p>\r\n";
		}
		$msg .= "<p><strong>Цена:</strong> ".$price."</p>\r\n";
		$msg .= "<p><strong>Модель:</strong> ".$model."</p>\r\n";
		$msg .= "<p><strong>Размер:</strong> ".$size."</p>\r\n";
		$msg .= "<p><strong>Цвет:</strong> ".$color."</p>\r\n";
		$msg .= "<p><strong>Текстура:</strong> ".$texture."</p>\r\n";
		$msg .= "<p><strong>Высота:</strong> ".$length."</p>\r\n";
		$msg .= "<p><strong>Ширина:</strong> ".$width."</p>\r\n";
		$msg .= "<p><strong>Нужны ли ворота:</strong> ".$door1."</p>\r\n";
		$msg .= "<p><strong>Нужна ли калитка:</strong> ".$door2."</p>\r\n";
		if($options) {
			$msg .= "<p><strong>Опции</strong> ".$options."</p>\r\n";
		}
		if($doorName) {
			$msg .= "<p><strong>Ворота: </strong>".$doorName.", ".$doorSize."</p>";
		}

	}

	$msg .= "</body></html>";


// отправка сообщения
	@mail($to, $subject, $msg, $headers);
}

?>
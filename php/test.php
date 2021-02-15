<?php 
$name = 'Арсений';
define("GREETING", "Здравствуйте!");
echo $name . ", " . GREETING;
?>
<?php 
$arr = [2020, 'Ivan', false];
$users = [
	[
		"id" => 999,
		"name" => "Арсений",
		"surname" => "Шелейко",
		"age" => 16,
		"lang" => "rus",
	],
	[
		"id" => 998,
		"name" => "Кирилл",
		"surname" => "Костюк",
		"age" => 16,
		"lang" => "eng",
	],
	[
		"id" => 997,
		"name" => "Егор",
		"surname" => "Таросовец",
		"age" => 16,
		"lang" => "bel",
	],		
];
$settings = [
	"key" => "ada3114s",
	"url" => "https://www.google.com",
	"ssl" => "TLS 1.3",
	"db" => [
		"port" => 5000,
		"host" => "https://hoster.by",
		"login" => "ad123ws123",
		"password" => "wqs123sda23",
	],

];
$settings["db"]["port"] = 3309;
 ?>
<?php 
	const LOGIN = "admin";
	const PASSWORD = "secret123";
	$tmp_login = "admin";
	$tmp_password = "secret123";
	if($tmp_login === LOGIN && $tmp_password !== PASSWORD){
	echo "Check correct your password";
	} elseif($tmp_login !== LOGIN) {
		echo "User not found";
	} else if ($tmp_login === LOGIN && $tmp_password === PASSWORD){
		echo "Auth success";
	};
 ?>
 <?php 
 	$isStatus = false;
 	$statusResult = ($isStatus) ? 43224656 : 98645623;
 	echo $statusResult;
  ?>
  <?php 
  $typeCar = "BMW";
  switch ($typeCar) {
  	case 'BMW':
  		echo "Selected is a very good car";
  		break;
	case 'Toyota':
  		echo "Toyota is a very reliable car!";
  		break;  		
	case 'Lada':
  		echo "Don't buy these cars!";
  		break;  		
  	  	
  	default:
  		echo "Car not found";
  		break;
  }

   ?>
<?php
//PDO
// $connection = new PDO("mysql: host=localhost; dbname=test; charset=utf8", "root","");
// $query = "insert into users (name, age, login, password) values ('Roma','10','dovakin','123123aa')";
// $connection->exec($query);
$connection = new PDO("mysql: host=localhost; dbname=test; charset=utf8","root","");

$name = "Vasya";
$age = 30;
$login = 'abbr';
$password = "alalala";

$param = [
'name' => $name,
'age' => $age,
'login' => $login,
'password' => $password
];

$sql = "INSERT INTO users (name,age,login,password) VALUES (:name, :age, :login, :password)";
$query = $connection->prepare($sql);

$query->execute($param);
?>
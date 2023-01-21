<?php
$servername = "localhost";
$database = "detali";
$username = "parseradmin";
$password = "1234";
//Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);

// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfull". " ". $database. "<br>";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


//CREATE USER 'parseradmin'@'localhost' IDENTIFIED BY '1234';
//GRANT ALL PRIVILEGES ON detali.* TO 'parseradmin'@'localhost';
//CREATE TABLE `detali`.`detalimenu` ( `id` INT NOT NULL AUTO_INCREMENT , `menulinks` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
//DROP TABLE detali.detalimenu;
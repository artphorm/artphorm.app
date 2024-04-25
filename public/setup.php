<?php
require_once __DIR__ . '/../config.php';

$sql1 = "DROP TABLE IF EXISTS `posts`;";

$sql2 = 'CREATE TABLE `artphorm`.`posts` (`id` INT NOT NULL AUTO_INCREMENT , `body` TEXT NOT NULL , `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = MyISAM;';

$sql3 = 'INSERT INTO `posts` (`id`, `body`, `date`) VALUES (NULL, \'Hello, world!\', NOW());';

try {
  $conn = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USERNAME, DB_PASSWORD);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->exec($sql1);
  $conn->exec($sql2);
  $conn->exec($sql3);

  echo "Setup completes";
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

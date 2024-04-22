<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/styles.css" />
<title>artphorm.app</title>
</head>

<body>
	<?php while($row = $result->fetch()) { ?>
		<h1><?= $row['message'] ?></h1>
		<p><small><?= date('F j, Y', strtotime($row['date'])) ?></small></p>
	<?php } ?>
</body>
</html>
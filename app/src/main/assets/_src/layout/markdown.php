<?php 
	require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
	use Michelf\Markdown;
	$body = Markdown::defaultTransform($slot);
	// echo '<div class="content">' . $html . '</div>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Document</title>
	<link rel="stylesheet" href="../lib/bulma.min.css" />

<style>
body {
    padding: 1rem;
}
* {
	direction: rtl;
}
h1 {
	text-align: center;
}
.content p:nth-of-type(even) {
    text-align: left;
}
p {font-size: 1.2rem;}
</style>
</head>
<body>
	<div class="content">
		<?= $body ?>
	</div>
</body>
</html>
<?php

require_once './ChooseLocale.class.php';

$site = array('es-ES', 'en-US');

$locale = new tinyL10n\ChooseLocale($site);

$locale->setDefaultLocale('en-US');

$locale->mapLonglocales = true;

$english = parse_ini_file('lang/en.properties');
$spanish = parse_ini_file('lang/es.properties');

$title;
$body;

if($locale->getCompatibleLocale() == 'es-ES'){	
	$title = $spanish['title'];
	$body = $spanish['body'];	
}else{
	$title = $english['title'];
	$body = $english['body'];
}

?>
<!DOCTYPE html>
<html lang='en' dir='ltr'>
<head>
    <meta charset='utf-8'>
    <title><?php echo $title ?></title>
</head>
<body>
	<?php echo $body ?>
</body>
</html>

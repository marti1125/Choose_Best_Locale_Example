<?php

require_once './ChooseLocale.class.php';

$site = array('es-ES', 'en-US');

$locale = new tinyL10n\ChooseLocale($site);

$locale->setDefaultLocale('en-US');

$locale->mapLonglocales = true;

$english = simplexml_load_file('english.xml');
$spanish = simplexml_load_file('spanish.xml');

$title;
$body;

if($locale->getCompatibleLocale() == 'en-US'){	
	//header( 'Location: ingles.php' );
	$title = $english->title;
	$body = $english->body;
	
}

if($locale->getCompatibleLocale() == 'es-ES'){
	$title = $spanish->title;
	$body = $spanish->body;
	
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

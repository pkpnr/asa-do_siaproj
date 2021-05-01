<?php
$cssDir = "../CSS/"; //folder where all CSS files live

//Link each page to its CSS file
$styl_ASADO = [
    'about-us-page.php' => 'about-us-page.css',
    'help-page.php' => 'help-try_lang.css',
    'home-page.php' => 'home-page.css',
    'login.php' => 'login.css',
    'search-page.php' => 'search-page.css',
    'settings-page.php' => 'settings-page.css',
    'sign-up2.php' => 'signup.css'
];

?>

<link rel="stylesheet" type="text/css" href="<?="$cssDir/common_ASADO.css"?>">

<link rel="stylesheet" type="text/css" href="<?="$cssDir/$styl_ASADO[$pgFileNm]"?>">
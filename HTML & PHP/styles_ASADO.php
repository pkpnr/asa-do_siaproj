<?php
$cssLoc1 = "../../CSS/LOGIN & SIGNUP";
$cssLoc2 = "../../CSS/MAIN PAGES"; //folder where all CSS files live

//Link each page to its CSS file
$styl_ASADO = [
    'about-sys-page.php' => 'about-sys-page.css',
    'about-us-page.php' => 'about-us-page.css',
    'help-page.php' => 'help-page.css',
    'home-page.php' => 'home-page.css',
    'login.php' => 'login.css',
    'search-page.php' => 'search-page.css',
    'sign-up.php' => 'sign-up.css'
];

?>




<link rel="stylesheet" type="text/css" href="../CSS/reset.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<link rel="stylesheet" type="text/css" href="<?="$cssLoc1/$styl_ASADO[$pgFileNm]"?>">
<link rel="stylesheet" type="text/css" href="<?="$cssLoc2/$styl_ASADO[$pgFileNm]"?>">
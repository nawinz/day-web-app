<?php
if(!defined('usemainjs')){
    die('usemainjs is not defined in'.__FILE__);
}
if(!defined('dotdotcnt')){
    die('dotdotcnt is not defined in'.__FILE__);
}
if(!defined('bodyClass')){
    die('bodyClass is not defined in'.__FILE__);
}
if(!defined('titleExtend')){
    die('titleExtend is not defined in'.__FILE__);
}
if(!defined('footerFixed')){
    die("footerFixed is not defined in".__FILE__);
}
if(dotdotcnt == 0){
    $dot = "";
}else if(dotdotcnt < 0){
    die('dotdotcnt is not valid');
}else if(dotdotcnt > 10){
    die('dotdotcnt is not valid');
}else{
    $dot = "";
    for ($i=0; $i < dotdotcnt; $i++) { 
        $dot .= "../";
    }
}
if(titleExtend == ""){
    $title = 'Days Web App';
}else{
    $title = titleExtend." | Days Web App";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title; ?></title>
        <meta name="msapplication-config" content="./<?php echo $dot; ?>static/public/icon/browserconfig.xml" />
        <link rel="stylesheet" href="./<?php echo $dot; ?>static/public/fa/css/brands.min.css">
        <link rel="stylesheet" href="./<?php echo $dot; ?>static/public/fa/css/duotone.min.css">
        <link rel="stylesheet" href="./<?php echo $dot; ?>static/public/fa/css/fontawesome.min.css">
        <link rel="stylesheet" href="./<?php echo $dot; ?>static/public/fa/css/light.min.css">
        <link rel="stylesheet" href="./<?php echo $dot; ?>static/public/fa/css/regular.min.css">
        <link rel="stylesheet" href="./<?php echo $dot; ?>static/public/fa/css/solid.min.css">
        <link rel="stylesheet" href="./<?php echo $dot; ?>static/public/fa/css/svg-with-js.min.css">
        <link rel="stylesheet" href="./<?php echo $dot; ?>static/public/fa/css/v4-shims.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Itim&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./<?php echo $dot; ?>static/public/main/main.css?version=0.0.1&timeUpdate=<?php echo time(); ?>&nightmare_varible=<?php echo str_shuffle(md5(time())); ?>">
        <link rel="stylesheet" href="./<?php echo $dot; ?>static/public/bootstrap/css/bootstrap.min.css">
        <link rel="apple-touch-icon" sizes="57x57" href="./<?php echo $dot; ?>static/public/icon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="./<?php echo $dot; ?>static/public/icon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="./<?php echo $dot; ?>static/public/icon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="./<?php echo $dot; ?>static/public/icon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="./<?php echo $dot; ?>static/public/icon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="./<?php echo $dot; ?>static/public/icon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="./<?php echo $dot; ?>static/public/icon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="./<?php echo $dot; ?>static/public/icon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="./<?php echo $dot; ?>static/public/icon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="./<?php echo $dot; ?>static/public/icon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./<?php echo $dot; ?>static/public/icon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="./<?php echo $dot; ?>static/public/icon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./<?php echo $dot; ?>static/public/icon/favicon-16x16.png">
        <link rel="manifest" href="./<?php echo $dot; ?>static/public/icon/manifest.json">
        <meta name="msapplication-TileColor" content="#ee51d7">
        <meta name="msapplication-TileImage" content="./<?php echo $dot; ?>static/public/icon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ee51d7">
    </head>
    <body class='<?php echo bodyClass; ?>'>
    <div id='load-progress-mainbar' class="progress fixed-top load-progress rounded-0" style="height: 3.234424px;">
        <div id='loader-mainBar' class="progress-bar loader-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="pfill1 protectFirst mt-0"></div>
    <div class="pfill2 protectFirstLoader">
        <div class="d-flex justify-content-center commm_pute">
            <div class="pfl spinner-border protectFirstLoader text-warning shadow-lg rounded-pill" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>